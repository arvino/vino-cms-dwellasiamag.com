<div id="wrapper_article_section">
	
<?php
$idkategori = $_GET['idkategori'];
$idkategorisub = $_GET['idkategorisub'];

$result_box_kanal = Select_Kanalnews_TampilDiHomepage( $tbl_newskategori );
 
 
$kolom=1;
while($row_box_kanal = mysql_fetch_object($result_box_kanal))	{
$Kanal_Id = $row_box_kanal->id;
			
$Kanal_Keterangan = $row_box_kanal->keterangan;
$judulsubstrkanal= potong_judul( $Kanal_Keterangan );
 
/* Hitung Sub Kategori news */
$count_news_subkanal =  AmbilJumlahTotalnewsKategoriSub_ByKategori( $tbl_newskategorisub, $row_box_kanal->id );
if($count_news_subkanal==0){
	/* Jika tidak ada sub kanal - query item - arahkan ke halaman detail news */
	$idkategorisub_news = "0";
	$link_news_item = "$link_host"."news-subchannel-$row_box_kanal->id-0-$judulsubstrkanal"."$extention";

}else{
	$link_news_item = "$link_host"."news-channel-$row_box_kanal->id-$judulsubstrkanal"."$extention";
}

?>


<div class="box_wrapper_kategori">
	<a href="<?php
echo $link_news_item ?>" class="title_current_issue"> <?php
echo $Kanal_Keterangan ?>  </a>
</div>

                				
			   
<?php
$kolom++;
}
?>
 
 

<div class="box_wrapper_kategori">
	<a href="<?php
echo $link_host ?>subscribe<?php
echo $extention ?>" class="title_current_issue"> Subscribe to Surface Asia </a>
</div>

	
	
</div><!-- wrapper_article_section -->

