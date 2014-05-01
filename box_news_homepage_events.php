<?php
$kolom=1;
				$jml_item_line1 = "3"; /* Jumlah  perbaris */
				
				$result_news_item = mysql_query("SELECT * FROM $tbl_news 
				
				WHERE 
					idkategori = '6'
					AND statustampil = '1' 
					
					ORDER BY timeunix DESC LIMIT 10");
?>
  


<div class="sectionPromo" id="eventsSection">
	  <h2><a href="<?php
echo $link_host  ?>events/" class="slug">Events&nbsp; </a></h2>
		
		<div style="background-color:#F8F8F8;overflow:hidden;">
		
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

<div style="float:left;margin-left:8px;">
		<div style="float:left;width:175px;overflow:hidden;margin:10px;">
							
							<h3><a href="<?php
echo $link_news_item ?>"><?php
echo $row_news_item->judul ?></a></h3>
		
		</div>
</div>



<?php
} ?>

		</div>
</div>