<div id="content_main_section_news_watch">
<?php
$kolom=1;
				$jml_item_line1 = "3"; /* Jumlah  perbaris */
				
				$result_news_item = mysql_query("SELECT * FROM $tbl_news 
				
				WHERE 
					idkategori = '9'
					AND statustampil = '1' 
					
					ORDER BY timeunix DESC LIMIT 3");
?>
 
<a id="content_main_section_news_title" href="<?php
echo $link_host  ?>watch/"> WATCH </a> 

<div id="content_section_news_watch">

				<div id="moving_tab">
				
					<div class="tabs">
						<div class="lava"></div>
						<span class="item"> SLIDESHOW </span>
						<span class="item"> VIDEO </span>
					</div>
									
					<div class="content">						
						<div class="panel">						
							<ul>
								<li> 


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
		<div style="float:left;width:185px;overflow:hidden;margin:10px;">
							
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
		
		</div>
</div>
<?php
}
?>

</li>
								 
				
							</ul>
							<ul>
								<li>
								
								
								
Lorem ipsum dolor sit amet, eu usu meliore ceteros antiopam, ad veritus facilisis sit. Et has liber albucius. Prima iisque ei his. 
Doming petentium urbanitas vel ad, et mel fabellas qualisque sententiae. Postea adolescens instructior cu usu.
Vel no putant vituperata. Cu pri mundi cetero. Veniam commodo abhorreant te has, ex ipsum scribentur nam, cu eam partiendo vituperata appellantur. 
Ei vitae salutandi repudiandae duo. Ex his erant disputationi, soluta omnium te mea. Idque epicurei ut his, vel sumo semper rationibus ad.
Nec ei wisi assentior conclusionemque, his ut partem vocibus forensibus, mea ne deleniti patrioque. 
Has et quot ludus, agam omnis est et, an eam urbanitas delicatissimi interpretaris. Eum oblique inimicus ea. Dolor evertitur dissentias mel an, legere sententiae intellegebat sed ex.
Mei quas quaestio cu, has an indoctum philosophia. Ne utamur luptatum sit, puto erant mei ea. Ex quo omnes consulatu adolescens, 
per an populo blandit reprehendunt, vim falli tation ne. Quo posidonium accommodare et, vim at munere primis, illum porro accumsan ius cu. 
Pri ludus iisque ornatus ne, duo altera audiam feugait cu.
								
								
								
								</li>
								 
							</ul>
							
										
						</div>
				
					</div>	
				</div>
				
				
				
				
	</div>
	
	
	
</div>	


<?php include('box_news_homepage_homes.php'); ?>