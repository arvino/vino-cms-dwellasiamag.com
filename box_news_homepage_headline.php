<div id="content_main_section_news_headline">
<div class="pagination" id="paginate-slider1">
</div>

<div class="sliderwrapper" id="slider1">

			
<?php
$dataPerPage = 6;

$result_news_item = mysql_query("SELECT * FROM $tbl_news WHERE 
headline = '1' AND
statustampil = '1' 
ORDER BY timeunix DESC LIMIT $dataPerPage");
					
 
while($row_news_item = mysql_fetch_object($result_news_item)){

	$Link_Judul = potong_judul($row_news_item->judul);
	$id = $row_news_item->id;
	$id_excp = $row_news_item->id;
	
	$idkategori = $row_news_item->idkategori;
	$idkategorisub = $row_news_item->idkategorisub;

	$HitungSubKategori = AmbilJumlahTotalnewsKategoriSub_ByKategori( $tbl_newskategorisub, $idkategori );
	if($HitungSubKategori==0){
		$detail_kanal = Select_Detail_Kategori_news( $tbl_newskategori, $idkategori );
		$section_name = $detail_kanal->keterangan;
		//$link_section = $link_host . "news-channel-$detail_kanal->id-" . potong_judul($section_name) . $extention;
		$link_section = $link_host . "news-subchannel-$idkategori-$idkategorisub-"  . potong_judul($section_name) . $extention;
	}else{
		$detail_subkanal = Select_Detail_KategoriSub_news( $tbl_newskategorisub, $idkategorisub );
		$section_name = $detail_subkanal->keterangan;
		$link_section = $link_host . "news-subchannel-$idkategori-$detail_subkanal->id-"  . potong_judul($section_name) . $extention;
	}

	$judul_substr_item = potong_judul($row_news_item->judul);
	$link_news_item = "$link_host"."read-news-$row_news_item->idkategori-$row_news_item->idkategorisub-$row_news_item->id-$judul_substr_item"."$extention";

?>
	 
		<div class="contentdiv">
					<div class="slide-thumbnail">
					    <a href="<?php
echo $link_news_item ?>">
							<img src="<?php
echo $link_host ?><?php
echo $row_news_item->direktorigambar ?><?php
echo $row_news_item->gambarsedang ?>" alt="<?php
echo $row_news_item->judul ?>"  title="<?php
echo $row_news_item->judul ?>">
						</a>
					</div>
						<div class="slide-details">
							<a href="<?php echo $link_section?>" id="slider_section_title"> <?php echo $section_name?> </a>
							<h7><a href="<?php
echo $link_news_item ?>"> <?php
echo $row_news_item->judul ?> </a></h7>
							<div class="slide-detail-desc"> <?php
echo wordwrap(potong_kata($row_news_item->preview,$word_count=20), 38, "<br />\n"); ?> ...	  </div>
								
						 </div>
						 <a href="<?php
echo $link_news_item ?>" id="readmore_article"> Read Article   </a>   
					<div class="clear"></div>
		</div>
<?php
} 
?>


</div>


<script type="text/javascript">

featuredcontentslider.init({
	id: "slider1",  //id of main slider DIV
	contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
	toc: "#increment",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
	nextprev: ["", ""],  //labels for "prev" and "next" links. Set to "" to hide.
	revealtype: "mouseover", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
	enablefade: [true, 0.5],  //[true/false, fadedegree]
	autorotate: [true, 6000],  //[true/false, pausetime]
	onChange: function(previndex, curindex){  //event handler fired whenever script changes slide
		//previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
		//curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
	}
})

</script>
</div>