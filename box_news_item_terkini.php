
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

?>

    <div class="one-third">
     <a href="<?php
echo $link_news_item ?>" rel="prettyPhoto[gal]">
     <img src="<?php
echo $link_host ?><?php
echo $row_news_item->direktorigambar ?><?php
echo $row_news_item->gambarkecil ?>"   width="280px" height="150px" alt="<?php
echo $link_news_item ?>'><?php
echo $row_news_item->judul ?>" /></a>
   

      <h2> <a href='<?php
echo $link_news_item ?>'><?php
echo $row_news_item->judul ?></a> </h2>
      
      <p> <?php
echo wordwrap(potong_kata($row_news_item->preview,$word_count=20), 38, "<br />\n"); ?> ...	 </p>
      
      <a href='<?php
echo $link_news_item ?>' class="buttonLink">Read more</a>
     
      <div class="blankSeparator6"><!-- --></div>
      
 
 	</div>

 
    
   
<?php
$kolom++;
}

?>
 

