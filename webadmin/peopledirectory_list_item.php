<?php
$KodeKeamananhalaman  = "token_peopledirectory";
$KodeKeamananhalaman_Keterangan = "ACCESS DENIED !";
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
	
	include"access_denied.php";
	
}else{

?>

<?php
if( isset($_POST['peopledirectory_search']) ){
	$cari = $_POST['peopledirectory_search'];
}else{
	$cari = $_GET['cari'];
}
?>


<?php
$idkategori = $_GET["idkategori"];
$r_datapeopledirectory_kategori = Select_Kategori_peopledirectory_By_Id( $tbl_peopledirectorykategori, $idkategori );
$r_peopledirectorykategori = mysql_fetch_object($r_datapeopledirectory_kategori);

$peopledirectorykategori_id = $r_peopledirectorykategori->id;

if( $idkategori == 0 ){ 
	$peopledirectorykategori_id = 0;
	$peopledirectorykategori_keterangan = "<font color='red'>   </font>";
}else{

	$peopledirectorykategori_keterangan = $r_peopledirectorykategori->keterangan;
	$peopledirectorykategori_keterangan = strtoupper($peopledirectorykategori_keterangan);

}


	$idsubkategori = $_GET["idsubkategori"];
	$idkategorisub = $_GET["idsubkategori"];
	
	
	$r_peopledirectorysubkategori = Select_SubKategori_peopledirectory_By_Id( $tbl_peopledirectorykategorisub, $idsubkategori );
	 
	$peopledirectorysubkategori_id = $r_peopledirectorysubkategori->id;

if( $idsubkategori == 0 ){ 
	$peopledirectorysubkategori_id = 0;
	$peopledirectorysubkategori_keterangan = "<font color='red'>  </font>";
}else{

	$peopledirectorysubkategori_keterangan = $r_peopledirectorysubkategori->keterangan;
	$peopledirectorysubkategori_keterangan = strtoupper($peopledirectorysubkategori_keterangan);
}



if( $idsubkategori == 0 ){ 
$peopledirectorysubkategori_id = 0;
$peopledirectorysubkategori_keterangan = "";
}

?>


<?php
if($action=="search"){
$Hitung_Pencarianpeopledirectory =  GetJML_Search_Item_peopledirectory_ALL( $tbl_peopledirectory, $cari ); /* Hitung Data Item */
?>
<div class='text_pencarian'> Found <?php
echo $Hitung_Pencarianpeopledirectory ?> item with keyword "<?php
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
	$List_JumlahDatapeopledirectory =  GetJML_Search_Item_peopledirectory_ALL( $tbl_peopledirectory, $cari ); /* Hitung Data Item */
}

if( $action == "ViewList" ){
	$QryNumItempeopledirectory = peopledirectoryItem_BacaDataListing_ByKategoriSub_Terkini_All( $tbl_peopledirectory , $idkategori, $idkategorisub );
	$List_JumlahDatapeopledirectory = mysql_num_rows($QryNumItempeopledirectory);
}

if( !isset($action)){ /* Jika tida ada aksi urutkan berdasarkan terpopuler */
	$QryNumItempeopledirectory = peopledirectoryItem_BacaDataListing_Terpopuler_All( $tbl_peopledirectory );
	$List_JumlahDatapeopledirectory = mysql_num_rows($QryNumItempeopledirectory);
}
 
?>

<?php
if($List_JumlahDatapeopledirectory == 0){

// Jika belum there is item konten pthere is kategori dan subkategori yang di maksud.
?>



<?php
}else{
?>


 
<table class='tabelform' align='center' width='100%' cellpadding='1' cellspacing='1'>
<tr class='judulform'>
  	  <td width="100%" height='35' align='center'> 
	  
	  LIST DATA 
      
      
<?php
if(!isset($action)){
echo "SORT BY MOST POPULAR";

}	  
?>
	  
<?php
echo $peopledirectorykategori_keterangan ?>  
	  
<?php
echo $peopledirectorysubkategori_keterangan ?> 
	  
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
	$QryNumItempeopledirectory = Search_Item_peopledirectory_All_data($tbl_peopledirectory, $cari );
} 


?>




<?php
if( $action == "ViewList" ){ /* Internal - Jika Action sama dengan view list */
	$QryNumItempeopledirectory = peopledirectoryItem_BacaDataListing_ByKategoriSub_Terkini_All( $tbl_peopledirectory , $idkategori, $idkategorisub );
}

if( !isset($action)){
	$QryNumItempeopledirectory = peopledirectoryItem_BacaDataListing_Terpopuler_All( $tbl_peopledirectory );
	
}
		
		$HitungJumlahItempeopledirectory  = mysql_num_rows($QryNumItempeopledirectory);
		$opsetr = offsethalaman ($halaman ,$dataPerhalaman);
		$offset = $opsetr[0];
		$nohalaman = $opsetr[1];
		
		$no = $offset + 1;

if($action == "search" ){
	$posisihalaman  = "peopledirectory_item.php?cari=$cari&action=search&$dataperhalaman_x";
}

if($action == "ViewList" ){
	$posisihalaman  = "peopledirectory_item.php?idkategori=$idkategori&idsubkategori=$idkategorisub&action=ViewList&$dataperhalaman_x";
}

if( !isset($action) ){
	$posisihalaman  = "peopledirectory_main.php?$dataperhalaman_x";
}


$tampilkanhalamannya = tampilkanhalaman ($posisihalaman , $HitungJumlahItempeopledirectory ,$dataPerhalaman, $nohalaman, $halaman );


?>


<?php
$idkategori = $_GET['idkategori'];
$idsubkategori = $_GET['idsubkategori'];
$action = $_GET['action'];

if( $action == "search" ){
	$Qry_ListData_peopledirectory = Search_Item_peopledirectory_ALL($tbl_peopledirectory, $cari , $offset , $dataPerhalaman );
	$List_JumlahDatapeopledirectory =  GetJML_Search_Item_peopledirectory_ALL( $tbl_peopledirectory, $cari ); /* Hitung Data Item */
}

if( $action == "ViewList" ){
	$Qry_ListData_peopledirectory = List_peopledirectory_File_Group_With_Limitpage( $tbl_peopledirectory, $idkategori, $idsubkategori , $offset, $dataPerhalaman); 
	$List_JumlahDatapeopledirectory = mysql_num_rows($Qry_ListData_peopledirectory);
}

if( !isset($action)){ /* Jika tida ada aksi urutkan berdasarkan terpopuler */
	$Qry_ListData_peopledirectory = peopledirectoryItem_BacaDataListing_Terpopuler_All_Bypage( $tbl_peopledirectory , $offset , $dataPerhalaman ); 
	$List_JumlahDatapeopledirectory = mysql_num_rows($Qry_ListData_peopledirectory);
}

?>







<?php
if($List_JumlahDatapeopledirectory == 0){
// Jika belum there is item konten pthere is kategori dan subkategori yang di maksud.
?>

<?php
}else{
?>
 
<table width="100%"  border="0" cellpadding="0" cellspacing="0">
                     <tr>
                       <td width="1%">&nbsp;</td>
                       <td width="10%"><span class="style9">page</span></td>
                       <td width="3%"><div align="center"><span class="style9">:</span></div></td>
                       <td width="86%">
					   
<div class="pagination"><?php
echo $tampilkanhalamannya?>  </div>

					   </td>
                     </tr>
      </table>

<table width='100%' align='center' cellpadding='1' cellspacing='1' class='tabelform'>

<tr class='judulform'>
	<td width='5%' height='35' class='judulform'>  <div align="center">No. </div></td>
		
	<td colspan='2' class='judulform'> <div align="center">Description</div> 
	  </td>
  </tr>
<?php
while( $row = mysql_fetch_object($Qry_ListData_peopledirectory)){

$listdata_itempeopledirectory_id = $row->id;

$listdata_itempeopledirectory_idupline = $row->idupline;
 
$listdata_itempeopledirectory_idkategori = $row->idkategori;

$listdata_itempeopledirectory_idkategorisub = $row->idkategorisub;

$listdata_itempeopledirectory_judul = $row->judul;

$listdata_itempeopledirectory_judul = substr($listdata_itempeopledirectory_judul,0,150);

$listdata_itempeopledirectory_judulinggris = $row->judulinggris;

$listdata_itempeopledirectory_subjudul = $row->subjudul;

$listdata_itempeopledirectory_subjudul = substr($listdata_itempeopledirectory_subjudul,0,150);

$listdata_itempeopledirectory_subjudulinggris = $row->subjudulinggris;

$listdata_itempeopledirectory_preview = $row->deskripsi;

$listdata_itempeopledirectory_preview = substr($listdata_itempeopledirectory_preview,0,150);

$listdata_itempeopledirectory_tglpost = $row->tglpost;

$listdata_itempeopledirectory_jampost = $row->jampost;

$listdata_itempeopledirectory_tgltampil = $row->tgltampil;

$listdata_itempeopledirectory_jamtampil = $row->jamtampil;

$listdata_itempeopledirectory_dilihat = $row->dilihat;

$listdata_itempeopledirectory_statustampil = $row->statustampil;
 
$listdata_itempeopledirectory_idusers = $row->idusers;

$listdata_itempeopledirectory_idadmin = $row->idadmin;

$listdata_itempeopledirectory_direktorigambar = $row->direktorigambar;				





$row_kanal = Select_Detail_Kategori_peopledirectory( $tbl_peopledirectorykategori, $row->idkategori ); /* Select Detail Kanal */

$row_subkanal = Select_Detail_KategoriSub_peopledirectory( $tbl_peopledirectorykategorisub, $row->idkategorisub ); /* Select Detail Sub Kanal */

$row_user_posting = Users_Select_Detail( $tbl_users, $row->idusers ); /* Select Detail Users */




$link_itempeopledirectory_lihatdata = "peopledirectory_item.php?idkategori=$idkategori&idsubkategori=$idsubkategori&id=$listdata_itempeopledirectory_id&action=ViewDetail";

$link_itempeopledirectory_editdata = "peopledirectory_item.php?idkategori=$idkategori&idsubkategori=$idsubkategori&id=$listdata_itempeopledirectory_id&action=EditData";

$link_itempeopledirectory_hapusdata = "peopledirectory_item.php?idkategori=$idkategori&idsubkategori=$idsubkategori&id=$listdata_itempeopledirectory_id&action=DeleteData";

$link_komentarpeopledirectory_lihatdata = "
javascript:MM_openBrWindow('?Sec=peopledirectory&SubSec=AdminpeopledirectoryKomentar&iditem=$listdata_itempeopledirectory_id','OpenWindow_peopledirectory_Komentar','scrollbars=yes,width=600,height=600')
";

$link_filepeopledirectory_lihatdata = "
javascript:MM_openBrWindow('?Sec=peopledirectory&SubSec=AdminpeopledirectoryItem&iditem=$listdata_itempeopledirectory_id','OpenWindow_peopledirectory_FileLampiran','scrollbars=yes,width=600,height=600')
";


  
if( $listdata_itempeopledirectory_statustampil == 0){

 $Publish = "<a href='peopledirectory_proses.php?action=item_updatestatus&id=$row->id&&status=1'>Publish</a>";
 $Unpublish = "Unpublish";
 } else {
 $Publish = "Publish";
 $Unpublish = "<a href='admin-peopledirectory-statuspublikasi.php?id=$row->id&&status=0'>Unpublish</a>";

}

if( $no % 2 ) $BG = "#EEEEEE"; else $BG = "#F7F7F7";


$hitungdata_peopledirectoryitemlampiran = TotalAllDatapeopledirectoryItemLampiran( $tbl_peopledirectoryfile, $row->id );
 

?>

<tr  valign='top' bgcolor='<?php
echo $BG ?>' onmouseover="this.bgColor='#FFFFD7'" onmouseout="this.bgColor='<?php
echo $BG ?>'">

<td width='5%'>   
 <div align="center"><?php
echo $no  ?>.
</div></td>
 
<td width="0%"> </td>


<td width="95%"> 

 
<div class="Font_Item_Judul">
<a href='peopledirectory_item.php?idkategori=<?php
echo $row->idkategori ?>&idsubkategori=<?php
echo $row->idkategorisub ?>&id=<?php
echo $row->id ?>&action=ViewDetail' class='Font_Item_Judul'>
<?php
echo $listdata_itempeopledirectory_judul ?>
</a>
</div>

<br>

<b> <?php
echo $row_kanal->keterangan ?> <?php
echo $row_subkanal->keterangan ?> </b>
&nbsp; &nbsp;
<br>
<br>
<?php
if( $sesi_aksesmodul == "admin_system" ){
?>
<?php
echo harienglish($row->tglpost) ?>, <?php
echo bulanenglish($row->tglpost) ?> | <?php
echo $row->jampost ?>
<?php
} ?>
<?php
if($row->headline == 0){
	$Publish = "<a href='peopledirectory_proses_item.php?action=item_headlinetampil&idkategori=$row->idkategori&idkategorisub=$row->idkategorisub&id=$row->id&status=1' class='link_action'> Publish </a>";
	$Unpublish = "Unpublish";
}else{
	$Publish = "Publish";
	$Unpublish = "<a href='peopledirectory_proses_item.php?action=item_headlinetampil&idkategori=$row->idkategori&idkategorisub=$row->idkategorisub&id=$row->id&status=0' class='link_action'> Unpublish </a>";
}
?>

<br>
<br>
 
<?php
echo htmlspecialchars_decode($row->preview) ?>
<br>
<br>

<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>


<?php
if( $row->gambarbesar == "" ){
$gambar_itempeopledirectory = "<b> <font color='red'> NO PICTURE <br> AVAILABLE </font> </b>";
}else{
$root_file = "../";
$show_gambar = $root_file . $row->direktorigambar . $row->gambarbesar;
$gambar_itempeopledirectory = "<img src='$show_gambar' border='0' width='150'>";
}
?>
<?php
echo $gambar_itempeopledirectory ?> 
<br>
<br>
<b><u>  </u></b>: <?php
echo $listdata_itempeopledirectory_dilihat ?> 
    
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
	
 
<div  id='link_action' class='link_action'>
<ul>
    <li> 
        <a href='peopledirectory_item_lampiran.php?iditem=<?php
echo $row->id ?>&action=ViewData'> FILE EXTRA
        [ <?php
echo $hitungdata_peopledirectoryitemlampiran ?> ] </a> 
    </li>
     
    <li> 
        <a href='peopledirectory_item.php?idkategori=<?php
echo $row->idkategori ?>&idsubkategori=<?php
echo $row->idkategorisub ?>&id=<?php
echo $row->id ?>&action=ViewDetail'> VIEW DETAIL </a> 
    </li>
    
    <li> <a href='peopledirectory_item.php?idkategori=<?php
echo $row->idkategori ?>&idsubkategori=<?php
echo $row->idkategorisub ?>&id=<?php
echo $row->id ?>&action=EditData'> 
    EDIT DATA</a> 
    </li>
</ul>	 
</div>





</td>
<td width="18%">
<?php
if( $sesi_aksesmodul == "anggota_biasa" ){
}else{
?>
<span class="link_delete" align="center">
<ul class='link_delete'>
	<li class='link_delete'>
		<a href='#' onClick="JavaScript_Konfirmasi_Item( <?php
echo $row->idkategori ?>, <?php
echo $row->idkategorisub ?>, <?php
echo $row->id ?> )" class="link_delete"> DELETE </a>
	</li>
</ul>	 
</span>
<?php
}
?>
	
	</td>
  </tr>
</table>
<br>
<br>


</td>
<?php
/* */		  
?>
</tr>
<?php
$no ++;
}
?>

</table>
  
  
  <table width="100%"  border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="1%">&nbsp;</td>
      <td width="10%"><span class="style9">page</span></td>
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