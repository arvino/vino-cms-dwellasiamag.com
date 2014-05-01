<?php
$dataPerPage = 2;
$idkategori = $_GET['idkategori'];
$idkategorisub = $_GET['idkategorisub'];

$result_news_item = mysql_query("SELECT * FROM $tbl_news WHERE 
idkategori = '$idkategori' AND idkategorisub = '$idkategorisub' AND 
statustampil = '1' 
ORDER BY timeunix DESC LIMIT $dataPerPage");
 
while($row_news_item = mysql_fetch_object($result_news_item)){

	$Link_Judul = potong_judul($row_news_item->judul);
	$id = $row_news_item->id;
	$id_excp1 .= "'$row_news_item->id'" . ",";
	
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

<div id="content_headline_slider_item">  

	 <h3> <a href="<?php
echo $link_news_item ?>"> <?php
echo $row_news_item->judul ?> </a> </h3>
							
	 <a href="<?php
echo $link_news_item ?>">
		<img src="<?php
echo $link_host ?><?php
echo $row_news_item->direktorigambar ?><?php
echo $row_news_item->gambarsedang ?>" alt="<?php
echo $row_news_item->judul ?>"  title="<?php
echo $row_news_item->judul ?>" width="100%">
	 </a>

 	<div id="newsitem_prevdesc_headline"> <?php
echo wordwrap(potong_kata($row_news_item->preview,$word_count=20), 38, "<br />\n"); ?> ...	 </div>

</div> 					
						 
<?php
} 
?>