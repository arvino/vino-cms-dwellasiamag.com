	<div class="contentDetails">
		<h1> Latest </h1>
	</div>
	
	
	<div id="todayAtDwell" class="contentSlides">
		<div class="slides">
			<ul id="">
			
  
              <?php
$kolom=1;
				$jml_item_line1 = "3"; /* Jumlah  perbaris */
				
				$result_news_item = mysql_query("SELECT * FROM $tbl_news 
				
				WHERE 
					statustampil = '1' 
					ORDER BY timeunix DESC LIMIT 6");
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
	$link_news_kanal = "#";

	$HitungSubKategori = AmbilJumlahTotalnewsKategoriSub_ByKategori( $tbl_newskategorisub, $idkategori );

	$judul_substr_item = potong_judul($row_news_item->judul);
	$link_news_item = "$link_host"."read-news-$row_news_item->idkategori-$row_news_item->idkategorisub-$row_news_item->id-$judul_substr_item"."$extention";

?>
  

			
				<li>
					<a href="<?php
echo $link_news_kanal  ?>" class="slug"><?php
echo $detail_kanal->keterangan ?></a>
					
					<h3><a href="<?php
echo $link_news_item ?>"><?php
echo $row_news_item->judul ?></a></h3>
					
					<div class="mediaContainer">
						<a href="<?php
echo $link_news_item ?>">
						<img src="<?php
echo $link_host ?><?php
echo $row_news_item->direktorigambar ?><?php
echo $row_news_item->gambarkecil ?>" alt="<?php
echo $link_news_item ?>'><?php
echo $row_news_item->judul ?>">
						</a>
					</div>
					
					<div class="activity">
						<p> <a href="<?php
echo $link_news_item ?>" class="comments"> Read more... </a> &nbsp;</p>
					</div>
				</li>
				

<?php
$kolom++;
}

?>
 

				
			</ul>
		</div>
 	<p id="" class="navDirection">

</p>

</div>
	

