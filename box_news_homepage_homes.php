<div id="content_main_section_news_products">
<?php
$result_news_item = mysql_query("SELECT * FROM $tbl_news 
					WHERE 
					idkategori = '2'
					AND statustampil = '1' 
					ORDER BY timeunix DESC LIMIT 2");
?>

<a id="content_main_section_news_title" href="<?php
echo $link_host  ?>product/"> PRODUCT </a> 

<div id="content_section_news_product">

<?php
while( $row_news_item = mysql_fetch_object( $result_news_item )){

	$Link_Judul = potong_judul($row_news_item->judul);
	$id = $row_news_item->id;
	$id_excp = $row_news_item->id;
	
	$idkategori = $row_news_item->idkategori;
	$idkategorisub = $row_news_item->idkategorisub;

	$detail_kanal = Select_Detail_Kategori_news( $tbl_newskategori, $idkategori );
	$detail_subkanal = Select_Detail_KategoriSub_news( $tbl_newskategorisub, $idkategorisub );
	$link_news_kanal = "#";

	$HitungSubKategori = AmbilJumlahTotalnewsKategoriSub_ByKategori( $tbl_newskategorisub, $idkategori );

	$judul_substr_item = potong_judul($row_news_item->judul);
	$link_news_item = "$link_host"."read-news-$row_news_item->idkategori-$row_news_item->idkategorisub-$row_news_item->id-$judul_substr_item"."$extention";

?>
<div id="newsarticle_product_box">
 <a id="newsarticle_product_title" href="<?php
echo $link_news_item ?>"><?php
echo $row_news_item->judul ?></a> 

 <a  href="<?php
echo $link_news_item ?>">
	 <img id="newsarticle_product_image" width="200" src="<?php
echo $link_host ?><?php
echo $row_news_item->direktorigambar ?><?php
echo $row_news_item->gambarkecil ?>" alt="<?php
echo $link_news_item ?>'><?php
echo $row_news_item->judul ?>">
 </a>
</div>
<?php
} ?>

</div>
</div>