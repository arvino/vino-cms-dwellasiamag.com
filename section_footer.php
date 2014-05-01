<div id="footer_wrapper">

<?php include('box_banner_footer.php'); ?>


<div id="footer_nav">
<?php
$sql_otherpage_kanal = View_Kanalotherpage_Publish_MenuBawah1( $tbl_otherpagekategori );
while( $row_otherpage_kanal = mysql_fetch_object($sql_otherpage_kanal)){
$judul_substr_kanal = potong_judul( $row_otherpage_kanal->keterangan );


/* Hitung Sub Kategori otherpage */
$count_otherpage_subkanal =  AmbilJumlahTotalotherpageKategoriSub_ByKategori( $tbl_otherpagekategorisub, $row_otherpage_kanal->id );
if($count_otherpage_subkanal==0){
	/* Jika tidak ada sub kanal - query item - arahkan ke halaman detail otherpage */
	$idkategorisub_otherpage = "0";
	$detail_otherpage_item = ViewDetail_Item_otherpage_Kategori( $tbl_otherpage, $row_otherpage_kanal->id, $idkategorisub_otherpage );
	$judul_substr_item = potong_judul($detail_otherpage_item->judul);

	$link_otherpage_item = "$link_host"."otherpage-subcategory-$row_otherpage_kanal->id-0-$judul_substr_kanal"."$extention";

	if ( ($row_otherpage_kanal->id==$_GET[idkategori]) AND $_GET['modul'] == "otherpage" ){
			$otherpage_class="footermenu_current";
	} else {
			$otherpage_class="footermenu";
	}

}else{

	$judul_substr_item = potong_judul($detail_otherpage_item->judul);
	$link_otherpage_item = "$link_host"."otherpage-category-$row_otherpage_kanal->id-$judul_substr_kanal"."$extention";
	
	if ( ($row_otherpage_kanal->id==$_GET[idkategori]) AND $_GET['modul'] == "otherpage"  ){
			$otherpage_class="footermenu_current";
	} else {
			$otherpage_class="footermenu";
	}

}
 
	$judul_kanal = $row_otherpage_kanal->keterangan;
?>

     <a id="<?php echo $otherpage_class?>" href="<?php
echo $link_otherpage_item ?>"> 
     	<?php
echo $judul_kanal ?> 
	 </a>
    
    
<?php
} ?>



 
<?php
	if ( $request_uri == $link_host . "rss" OR $request_uri == $link_host . "rss" ){
			$rss_class="footermenu_current_rss";
	} else {
			$rss_class="footermenu_rss";
	}
?>

 
     <a id="<?php echo $rss_class?>" href="<?php
echo $link_host ?>rss"> 
     	RSS
	 </a>

</div>

<div id="footer_copyright"> 
	
	Copyright &copy;  2012 Dwell Asia Magazine. All rights reserved. Dwell Asia, the Dwell logo, Dwell Homes and At Home in the Modern World are registered trademarks of Dwell Media LLC

</div>

</div>


<!-- 
Description & Keyword For This Site :
<?php echo $META_DESCRIPTION?>
--
<?php echo $META_KEYWOARD?>
--!>

<!-- 
Messages From Web Developer :
<?php echo $msg_webdev?> 
--!>
