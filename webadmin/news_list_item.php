<?php
$KodeKeamananhalaman  = "token_news";
$KodeKeamananhalaman_Keterangan = "ACCESS DENIED !";
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
	
	include"access_denied.php";
	
}else{

?>

<?php
if( isset($_POST['news_search']) ){
	$cari = $_POST['news_search'];
}else{
	$cari = $_GET['cari'];
}
?>


<?php
$idkategori = $_GET["idkategori"];
$r_datanews_kategori = Select_Kategori_news_By_Id( $tbl_newskategori, $idkategori );
$r_newskategori = mysql_fetch_object($r_datanews_kategori);

$newskategori_id = $r_newskategori->id;

if( $idkategori == 0 ){ 
	$newskategori_id = 0;
	$newskategori_keterangan = "<font color='red'>   </font>";
}else{

	$newskategori_keterangan = $r_newskategori->keterangan;
	$newskategori_keterangan = strtoupper($newskategori_keterangan);

}


	$idsubkategori = $_GET["idsubkategori"];
	$idkategorisub = $_GET["idsubkategori"];
	
	
	$r_newssubkategori = Select_SubKategori_news_By_Id( $tbl_newskategorisub, $idsubkategori );
	 
	$newssubkategori_id = $r_newssubkategori->id;

if( $idsubkategori == 0 ){ 
	$newssubkategori_id = 0;
	$newssubkategori_keterangan = "<font color='red'>  </font>";
}else{

	$newssubkategori_keterangan = $r_newssubkategori->keterangan;
	$newssubkategori_keterangan = strtoupper($newssubkategori_keterangan);
}

if( $idsubkategori == 0 ){ 
$newssubkategori_id = 0;
$newssubkategori_keterangan = "";

}

?>


<?php
if($action=="search"){
$Hitung_Pencariannews =  GetJML_Search_Item_news_ALL( $tbl_news, $cari ); /* Hitung Data Item */
?>
<div class='text_pencarian'>
Found <?php
echo $Hitung_Pencariannews ?> item for keyword "<?php
echo $cari ?>" .
</div>
<br>
<?php
}
?>

<?php
$idkategori = $_GET['idkategori'];
$idsubkategori = $_GET['idsubkategori'];
$action = $_GET['action'];

if( $action == "search" ){
	$List_JumlahDatanews =  GetJML_Search_Item_news_ALL( $tbl_news, $cari ); /* Hitung Data Item */
}

if( $action == "ViewList" ){

	if(!isset($idsubkategori)){
		$QryNumItemnews = newsItem_BacaDataListing_ByKategori_Terkini_All( $tbl_news , $idkategori ); 
	}else{
		$QryNumItemnews = newsItem_BacaDataListing_ByKategoriSub_Terkini_All( $tbl_news , $idkategori, $idkategorisub );
	}

	$List_JumlahDatanews = mysql_num_rows($QryNumItemnews);
}

if( !isset($action)){ /* Jika tida ada aksi urutkan berdasarkan terpopuler */
	$QryNumItemnews = newsItem_BacaDataListing_Terkini_All( $tbl_news );
	$List_JumlahDatanews = mysql_num_rows($QryNumItemnews);
}
 
?>

<?php
if($List_JumlahDatanews == 0){

// Jika belum there is item konten pthere is kategori dan subkategori yang di maksud.
?>



<?php
}else{
?>


 
<table class='tabelform' align='center' width='100%' cellpadding='1' cellspacing='1'>
<tr class='judulform'>
  	  <td width="100%" height='35' align='center'> 
	  
	  LIST SUB SECTION
	  
	  <?php
if(!isset($action)){
echo "SORT BY POPULAR";

}	  
?>
	  
<?php
echo $newskategori_keterangan ?>  
	  
<?php
echo $newssubkategori_keterangan ?> 
	  
	  </td>
</tr>
<tr class='kontenform'>
  <td height='35' align='center'>
  
<?php
$_SESSION['item_data_perhalaman'] = $_GET['data_perhalaman'];
		if( $_SESSION['item_data_perhalaman'] == ''){
			$dataPerhalaman = 10;
			$_SESSION['item_data_perhalaman']	= "10";
		}else{
			$dataPerhalaman = $_SESSION['item_data_perhalaman'];
		}

if(isset($_GET['data_perhalaman'])){
 	$nohalaman = $_GET['data_perhalaman'];
 	$dataperhalaman_x = "data_perhalaman=" . $_GET['data_perhalaman'];
}else{
 	$nohalaman = 1;
 	$dataperhalaman_x = "";
}
$offset = ($nohalaman - 1) * $dataPerhalaman;



if( $action == "search" ){ /* If Action */
	$QryNumItemnews = Search_Item_news_All_data($tbl_news, $cari );
} 

if( $action == "ViewList" ){ /* Internal - Jika Action sama dengan view list */
 
	if(!isset($idsubkategori)){
		$QryNumItemnews = newsItem_BacaDataListing_ByKategori_Terkini_All( $tbl_news , $idkategori ); 
	}else{
		$QryNumItemnews = newsItem_BacaDataListing_ByKategoriSub_Terkini_All( $tbl_news , $idkategori, $idkategorisub );
	}


}

if( !isset($action)){
	$QryNumItemnews = newsItem_BacaDataListing_Terkini_All( $tbl_news );
	
}
		
		$HitungJumlahItemnews  = mysql_num_rows($QryNumItemnews);
		$opsetr = offsethalaman ($halaman ,$dataPerhalaman);
		$offset = $opsetr[0];
		$nohalaman = $opsetr[1];
		
		$no = $offset + 1;

if($action == "search" ){
	$posisihalaman  = "news_item.php?cari=$cari&action=search&$dataperhalaman_x";
}

if($action == "ViewList" ){
	$posisihalaman  = "news_item.php?idkategori=$idkategori&idsubkategori=$idkategorisub&action=ViewList&$dataperhalaman_x";
	if(!isset($idsubkategori)){
		$posisihalaman  = "news_item.php?idkategori=$idkategori&action=ViewList&$dataperhalaman_x";
	}else{
		$posisihalaman  = "news_item.php?idkategori=$idkategori&idsubkategori=$idkategorisub&action=ViewList&$dataperhalaman_x";
	}


}

if( !isset($action) ){
	$posisihalaman  = "news_main.php?$dataperhalaman_x";
}


$tampilkanhalamannya = tampilkanhalaman ($posisihalaman , $HitungJumlahItemnews ,$dataPerhalaman, $nohalaman, $halaman );


?>


<?php
$idkategori = $_GET['idkategori'];
$idsubkategori = $_GET['idsubkategori'];

$action = $_GET['action'];

if( $action == "search" ){
	$Qry_ListData_news = Search_Item_news_ALL($tbl_news, $cari , $offset , $dataPerhalaman );
	$List_JumlahDatanews =  GetJML_Search_Item_news_ALL( $tbl_news, $cari ); /* Hitung Data Item */
}

if( $action == "ViewList" ){
	if(!isset($idsubkategori)){
		$Qry_ListData_news = List_news_File_GroupBySection_With_LimitPage( $tbl_news, $idkategori, $offset, $dataPerhalaman); 
	}else{
		$Qry_ListData_news = List_news_File_Group_With_Limitpage( $tbl_news, $idkategori, $idsubkategori , $offset, $dataPerhalaman); 
	}
	$List_JumlahDatanews = mysql_num_rows($Qry_ListData_news);
}

if( !isset($action)){ /* Jika tida ada aksi urutkan berdasarkan terpopuler */
	$Qry_ListData_news = newsItem_BacaDataListing_Terkini_All_ByPage( $tbl_news , $offset , $dataPerhalaman ); 
	$List_JumlahDatanews = mysql_num_rows($Qry_ListData_news);
}

?>

<?php
if($List_JumlahDatanews == 0){
// Jika belum there is item konten pthere is kategori dan subkategori yang di maksud.
?>

<?php
}else{
?>
 
<table width="100%"  border="0" cellpadding="0" cellspacing="0">
                     <tr>
                       <td width="1%">&nbsp;</td>
                       <td width="10%"><span class="style9">Page</span></td>
                       <td width="3%"><div align="center"><span class="style9">:</span></div></td>
                       <td width="86%">
					   
<div class="pagination"><?php
echo $tampilkanhalamannya?>  </div>

					   </td>
                     </tr>
      </table>

<form action="" method="get">

<table width='100%' align='center' cellpadding='1' cellspacing='1' class='tabelform'>

<tr class='judulform'>
	<td width='5%' height='35' class='judulform'>  <div align="center">No. </div></td>
		
	<td colspan='2' class='judulform'> <div align="center">Description</div> 
	  </td>
  </tr>
<?php
while( $row_news_item = mysql_fetch_object($Qry_ListData_news)){

$row_kanal = Select_Detail_Kategori_news( $tbl_newskategori, $row_news_item->idkategori ); /* Select Detail Kanal */

$row_subkanal = Select_Detail_KategoriSub_news( $tbl_newskategorisub, $row_news_item->idkategorisub ); /* Select Detail Sub Kanal */

$row_user_posting = Users_Select_Detail( $tbl_users, $row_news_item->idusers ); /* Select Detail Users */

$link_itemnews_lihatdata = "news_item.php?idkategori=$idkategori&idsubkategori=$idsubkategori&id=$row_news_item->id&action=ViewDetail";

$link_itemnews_editdata = "news_item.php?idkategori=$idkategori&idsubkategori=$idsubkategori&id=$row_news_item->id&action=EditData";

$link_itemnews_hapusdata = "news_item.php?idkategori=$idkategori&idsubkategori=$idsubkategori&id=$row_news_item->id&action=DeleteData";

$link_komentarnews_lihatdata = "
javascript:MM_openBrWindow('?Sec=news&SubSec=AdminnewsKomentar&iditem=$row_news_item->id','OpenWindow_news_Komentar','scrollbars=yes,width=600,height=600')
";

$link_filenews_lihatdata = "
javascript:MM_openBrWindow('?Sec=news&SubSec=AdminnewsItem&iditem=$row_news_item->id','OpenWindow_news_FileLampiran','scrollbars=yes,width=600,height=600')
";
  
if( $listdata_itemnews_statustampil == 0){

 $Publish = "<a href='news_proses.php?action=item_updatestatus&id=$row_news_item->id&&status=1'>Publish</a>";
 $Unpublish = "Unpublish";
 
 } else {
 
 $Publish = "Publish";
 $Unpublish = "<a href='admin-news-statuspublikasi.php?id=$row_news_item->id&&status=0'>Unpublish</a>";

}

if( $no % 2 ) $BG = "class='alt'"; else $BG = "";

$hitungdata_newsitemlampiran = TotalAllDatanewsItemLampiran( $tbl_newsfile, $row_news_item->id );

?>

<tr  valign='top' <?php echo $BG ?> bgcolor='<?php
echo $BG ?>' onmouseover="this.bgColor='#FFFFD7'" onmouseout="this.bgColor='<?php
echo $BG ?>'">

<td width='5%'>   
 <div align="center"><?php
echo $no  ?>.
   <table width="100%"  border="0" cellspacing="0" cellpadding="0">
     <tr>
       <td>&nbsp;</td>
     </tr>
     <tr>
       <td>&nbsp;</td>
     </tr>
     <tr>
       <td><div align="center"><a href="#" onClick="listing_urutan( <?php
echo $row_news_item->id ?>, 0 )"> <img src="images/list-arrow-up.png" width="25" height="25"> </a></div></td>
     </tr>
     <tr>
       <td> <div align="center">  
         <input name="urutan[]" type="text" id="urutan[]" value="<?php
echo $row_news_item->urutan ?>" size="2" maxlength="2">
       </div> </td>
     </tr>
     <tr>
       <td><div align="center"><a href="#" onClick="listing_urutan( <?php
echo $row_news_item->id ?>, 1 )"> <img src="images/list-arrow-down.png" width="25" height="25"> </a></div></td>
     </tr>
   </table>
 </div>
</td>
 
<td width="0%"> </td>


<td width="95%"> 


<?php
if( $row_news_item->gambarbesar == "" ){
$gambar_itemnews = "";
}else{
$root_file = "../";
$show_gambar = $root_file . $row_news_item->direktorigambar . $row_news_item->gambarkecil;
$gambar_itemnews = "<img src='$show_gambar' width='80px' border='0' align='left'>";
}
?>
<?php
echo $gambar_itemnews ?>


<div class="Font_Item_Judul">
<a href='news_item.php?idkategori=<?php
echo $row_news_item->idkategori ?>&idsubkategori=<?php
echo $row_news_item->idkategorisub ?>&id=<?php
echo $row_news_item->id ?>&action=ViewDetail' class='Font_Item_Judul'>
<?php
echo $row_news_item->judul ?>
</a>
</div>

<?php
echo harienglish($row_news_item->tglpost) ?>, <?php
echo bulanenglish($row_news_item->tglpost) ?> | <?php
echo $row_news_item->jampost ?>

<br>

<?php
echo $row_kanal->keterangan ?> <?php
echo $row_subkanal->keterangan ?>
&nbsp; 
 
<?php
if($row->headline == 0){
	$Publish = "<a href='proses_news_item.php?action=item_headlinetampil&idkategori=$row_news_item->idkategori&idkategorisub=$row_news_item->idkategorisub&id=$row_news_item->id&status=1' class='link_action'> Publish </a>";
	$Unpublish = "Unpublish";
}else{
	$Publish = "Publish";
	$Unpublish = "<a href='proses_news_item.php?action=item_headlinetampil&idkategori=$row_news_item->idkategori&idkategorisub=$row_news_item->idkategorisub&id=$row_news_item->id&status=0' class='link_action'> Unpublish </a>";
}
?>
<br>
Hit Counter  :  <?php
echo $row_news_item->dilihat ?> 
<br>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>


       
     </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td> </td>
  </tr>
</table>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="82%">
	
	
<?php
/* Action Modul news */ ?>
<div  id='link_action' class='link_action'>

<ul>

<li> <a href='news_item_lampiran.php?iditem=<?php
echo $row_news_item->id ?>'> File Extra [ <?php
echo $hitungdata_newsitemlampiran ?> ] </a> </li>


<li> <a href='news_item.php?idkategori=<?php
echo $row_news_item->idkategori ?>&idsubkategori=<?php
echo $row_news_item->idkategorisub ?>&id=<?php
echo $row_news_item->id ?>&action=ViewDetail'> View Detail </a> </li>

<li> <a href='news_item.php?idkategori=<?php
echo $row_news_item->idkategori ?>&idsubkategori=<?php
echo $row_news_item->idkategorisub ?>&id=<?php
echo $row_news_item->id ?>&action=EditData'> 
Edit Data </a> 
</li>


</ul>	 
</div>





</td>
<td width="18%">



<span class="link_delete" align="center">
<ul class='link_delete'>
	<li class='link_delete'>
    
    
		<a href='#' onClick="JavaScript_Konfirmasi_Item( <?php
echo $row_news_item->idkategori ?>, <?php
echo $row_news_item->idkategorisub ?>, <?php
echo $row_news_item->id ?> )" class="link_delete"> Delete </a>
	</li>
</ul>	 
</span>

	
	</td>
  </tr>
</table>



</td>

</tr>
<?php
$no ++;
}
?>

</table>
</form>
  
  
  <table width="100%"  border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="1%">&nbsp;</td>
      <td width="10%"><span class="style9">Page</span></td>
      <td width="3%"><div align="center"><span class="style9">:</span></div></td>
      <td width="86%">
        <div class="pagination"><?php
echo $tampilkanhalamannya?> </div></td>
    </tr>
  </table>
  
  
  <?php
} ?>
   
  </td>
</tr>
</table>

<?php
} ?>
<?php
} ?>