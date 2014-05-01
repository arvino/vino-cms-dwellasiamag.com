<div id="content_main_section_news_editorpick">
	
<a id="content_main_section_news_editorpick_title"  href="news-subchannel-2-6-houses-we-love.dwellasia.magz"> HOUSES WE LOVE   </a>  

<div class="pagination3" id="paginate-slider3">
</div>

<div class="sliderwrapper3" id="slider3">

<?php
$detail_news_kanal = Select_Detail_Kategori_news( $tbl_newskategori, $idkategori = 2 );

$SubKanal_Id = $detail_news_kanal->id;
 
$SubKanal_Keterangan = $detail_news_kanal->keterangan;
$SubKanal_Keterangan  = strtoupper($SubKanal_Keterangan);
$LINKJUDUL_KANAL_MENU = potong_judul( $SubKanal_Keterangan );
 
$idkategori = $detail_news_kanal->id;
	
$HitungSubKategori = AmbilJumlahTotalnewsKategoriSub_ByKategori( $tbl_newskategorisub, $detail_news_kanal->id );

if($HitungSubKategori==0){ /* Jika tidak ada sub kanal news arahkan ke subkanal langsung */

	$LinkKanalNya  = "$link_host" . "news-subchannel-$detail_news_kanal->id-0-$LINKJUDUL_KANAL_MENU"."$extention";

}else{

	$LinkKanalNya  = "$link_host" . "news-channel-$detail_news_kanal->id-$LINKJUDUL_KANAL_MENU"."$extention";
}

?>

<?php
$kolom=1;
				$jml_item_line1 = "3"; 
			
				$result_news_item = mysql_query("SELECT * FROM $tbl_news WHERE idkategori ='2' AND idkategorisub='6' ORDER BY id DESC LIMIT 6");

?>

<?php
while( $row_news_item = mysql_fetch_object( $result_news_item )){
				
					$Link_Judul = potong_judul($row_news_item->judul);
					$id = $row_news_item->id;
					$id_excp = $row_news_item->id;
					
					$idkategori = $row_news_item->idkategori;
					$idkategorisub = $row_news_item->idkategorisub;
				
					$detail_kanal = Select_Detail_Kategori_news( $tbl_newskategori, $idkategori );
					$detail_subkanal = Select_Detail_KategoriSub_news( $tbl_newskategorisub, $idkategorisub );
				
				
					$HitungSubKategori = AmbilJumlahTotalnewsKategoriSub_ByKategori( $tbl_newskategorisub, $idkategori );
				
					$judul_substr_item = potong_judul($row_news_item->judul);
					$link_news_item = "$link_host"."read-news-$row_news_item->idkategori-$row_news_item->idkategorisub-$row_news_item->id-$judul_substr_item"."$extention";

					$SubKanal_Id = $detail_news_kanal->id;
 
					$SubKanal_Keterangan = $detail_news_kanal->keterangan;
					$SubKanal_Keterangan  = strtoupper($SubKanal_Keterangan);
					$LINKJUDUL_KANAL_MENU = potong_judul( $SubKanal_Keterangan );
					 
					$idkategori = $detail_news_kanal->id;
						
					$HitungSubKategori = AmbilJumlahTotalnewsKategoriSub_ByKategori( $tbl_newskategorisub, $detail_news_kanal->id );
					
					if($HitungSubKategori==0){ /* Jika tidak ada sub kanal news arahkan ke subkanal langsung */
					
						$LinkKanalNya  = "$link_host" . "news-subchannel-$detail_news_kanal->id-0-$LINKJUDUL_KANAL_MENU"."$extention";
					
					}else{
					
						$LinkKanalNya  = "$link_host" . "news-channel-$detail_news_kanal->id-$LINKJUDUL_KANAL_MENU"."$extention";
					}


				?>

			<div class="contentdiv3">
			
								<div class="slide-details3">
								
								<h7><a href="<?php
echo $link_news_item ?>">  <?php
echo $row_news_item->judul ?> </a></h7>
								
								<div class="slide-detail-desc3"> <?php
echo wordwrap(potong_kata($row_news_item->preview,$word_count=20), 38, "<br />\n"); ?> ...	 </div>
								
								<a href="<?php
echo $link_news_item ?>" id="readmore_article3"> Read Article </a>
								
								</div>
								
								
								
								<div class="slide-thumbnail3">
								<a href="<?php
echo $link_news_item ?>">
									<img src="<?php
echo $link_host ?><?php
echo $row_news_item->direktorigambar ?><?php
echo $row_news_item->gambarsedang ?>" alt="<?php
echo $row_news_item->direktorigambar ?>"/>
								</a>
								</div>
												<a id="seemore_article3" href="news-subchannel-2-6-houses-we-love.dwellasia.magz"> see more </a>
								<div class="clear"></div>
			</div>

				<?php
} ?>

</div>

<script type="text/javascript">

featuredcontentslider3.init({
	id: "slider3",  //id of main slider DIV
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