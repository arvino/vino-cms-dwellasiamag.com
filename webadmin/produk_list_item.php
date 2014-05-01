<?php
/*
token_home
token_konfigurasi
token_usersadmin
token_usersgroup
token_produk
token_publicusers
token_booking
token_news
token_gallery
token_otherhalaman
token_statistik
token_frontpage
token_help
*/
$KodeKeamananhalaman  = "token_produk";
$KodeKeamananhalaman_Keterangan = "ACCESS DENIED !";
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
	
	include"access_denied.php";
	
}else{

?>

<?php
if( isset($_POST['produk_search']) ){
	$cari = $_POST['produk_search'];
}else{
	$cari = $_GET['cari'];
}
?>


<?php
$idkategori = $_GET["idkategori"];
$r_dataproduk_kategori = Select_Kategori_produk_By_Id( $tbl_produkkategori, $idkategori );
$r_produkkategori = mysql_fetch_object($r_dataproduk_kategori);

$produkkategori_id = $r_produkkategori->id;

if( $idkategori == 0 ){ 
	$produkkategori_id = 0;
	$produkkategori_keterangan = "<font color='red'>   </font>";
}else{

	$produkkategori_keterangan = $r_produkkategori->keterangan;
	$produkkategori_keterangan = strtoupper($produkkategori_keterangan);

}


	$idsubkategori = $_GET["idsubkategori"];
	$idkategorisub = $_GET["idsubkategori"];
	
	
	$r_produksubkategori = Select_SubKategori_produk_By_Id( $tbl_produkkategorisub, $idsubkategori );
	 
	$produksubkategori_id = $r_produksubkategori->id;

if( $idsubkategori == 0 ){ 
	$produksubkategori_id = 0;
	$produksubkategori_keterangan = "<font color='red'>  </font>";
}else{

	$produksubkategori_keterangan = $r_produksubkategori->keterangan;
	$produksubkategori_keterangan = strtoupper($produksubkategori_keterangan);
}



if( $idsubkategori == 0 ){ 
$produksubkategori_id = 0;
$produksubkategori_keterangan = "";
}

?>


<?php
if($action=="search"){
$Hitung_Pencarianproduk =  GetJML_Search_Item_produk_ALL( $tbl_produk, $cari ); /* Hitung Data Item */
?>
<div class='text_pencarian'>
Found <?php
echo $Hitung_Pencarianproduk ?> item with keyword "<?php
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
	$List_JumlahDataproduk =  GetJML_Search_Item_produk_ALL( $tbl_produk, $cari ); /* Hitung Data Item */
}

if( $action == "ViewList" ){
	$QryNumItemproduk = produkItem_BacaDataListing_ByKategoriSub_Terkini_All( $tbl_produk , $idkategori, $idkategorisub );
	$List_JumlahDataproduk = mysql_num_rows($QryNumItemproduk);
}

if( !isset($action)){ /* Jika tida ada aksi urutkan berdasarkan terpopuler */
	$QryNumItemproduk = produkItem_BacaDataListing_Terpopuler_All( $tbl_produk );
	$List_JumlahDataproduk = mysql_num_rows($QryNumItemproduk);
}
 
?>

<?php
if($List_JumlahDataproduk == 0){

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
echo $produkkategori_keterangan ?>  
	  
<?php
echo $produksubkategori_keterangan ?> 
	  
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
	$QryNumItemproduk = Search_Item_produk_All_data($tbl_produk, $cari );
} 

if( $action == "ViewList" ){ /* Internal - Jika Action sama dengan view list */
	$QryNumItemproduk = produkItem_BacaDataListing_ByKategoriSub_Terkini_All( $tbl_produk , $idkategori, $idkategorisub );
}

if( !isset($action)){
	$QryNumItemproduk = produkItem_BacaDataListing_Terpopuler_All( $tbl_produk );
	
}
		
		$HitungJumlahItemproduk  = mysql_num_rows($QryNumItemproduk);
		$opsetr = offsethalaman ($halaman ,$dataPerhalaman);
		$offset = $opsetr[0];
		$nohalaman = $opsetr[1];
		
		$no = $offset + 1;

if($action == "search" ){
	$posisihalaman  = "produk_item.php?cari=$cari&action=search&$dataperhalaman_x";
}

if($action == "ViewList" ){
	$posisihalaman  = "produk_item.php?idkategori=$idkategori&idsubkategori=$idkategorisub&action=ViewList&$dataperhalaman_x";
}

if( !isset($action) ){
	$posisihalaman  = "produk_main.php?$dataperhalaman_x";
}


$tampilkanhalamannya = tampilkanhalaman ($posisihalaman , $HitungJumlahItemproduk ,$dataPerhalaman, $nohalaman, $halaman );


?>


<?php
$idkategori = $_GET['idkategori'];
$idsubkategori = $_GET['idsubkategori'];
$action = $_GET['action'];

if( $action == "search" ){
	$Qry_ListData_produk = Search_Item_produk_ALL($tbl_produk, $cari , $offset , $dataPerhalaman );
	$List_JumlahDataproduk =  GetJML_Search_Item_produk_ALL( $tbl_produk, $cari ); /* Hitung Data Item */
}

if( $action == "ViewList" ){
	$Qry_ListData_produk = List_produk_File_Group_With_Limitpage( $tbl_produk, $idkategori, $idsubkategori , $offset, $dataPerhalaman); 
	$List_JumlahDataproduk = mysql_num_rows($Qry_ListData_produk);
}

if( !isset($action)){ /* Jika tida ada aksi urutkan berdasarkan terpopuler */
	$Qry_ListData_produk = produkItem_BacaDataListing_Terpopuler_All_Bypage( $tbl_produk , $offset , $dataPerhalaman ); 
	$List_JumlahDataproduk = mysql_num_rows($Qry_ListData_produk);
}

?>

<?php
if($List_JumlahDataproduk == 0){
// Jika belum there is item konten pthere is kategori dan subkategori yang di maksud.
?>

<?php
}else{
?>
 
<table width="100%"  border="0" cellpadding="0" cellspacing="0">
                     <tr>
                       <td width="1%">&nbsp;</td>
                       <td width="10%"><span class="style9">page  </span></td>
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
while( $row = mysql_fetch_object($Qry_ListData_produk)){

$listdata_itemproduk_id = $row->id;

$listdata_itemproduk_idupline = $row->idupline;
 
$listdata_itemproduk_idkategori = $row->idkategori;

$listdata_itemproduk_idkategorisub = $row->idkategorisub;

$listdata_itemproduk_judul = $row->judul;

$listdata_itemproduk_judul = substr($listdata_itemproduk_judul,0,150);

$listdata_itemproduk_judulinggris = $row->judulinggris;

$listdata_itemproduk_subjudul = $row->subjudul;

$listdata_itemproduk_subjudul = substr($listdata_itemproduk_subjudul,0,150);

$listdata_itemproduk_subjudulinggris = $row->subjudulinggris;

$listdata_itemproduk_preview = $row->deskripsi;

$listdata_itemproduk_preview = substr($listdata_itemproduk_preview,0,150);

$listdata_itemproduk_tglpost = $row->tglpost;

$listdata_itemproduk_jampost = $row->jampost;

$listdata_itemproduk_tgltampil = $row->tgltampil;

$listdata_itemproduk_jamtampil = $row->jamtampil;

$listdata_itemproduk_dilihat = $row->dilihat;

$listdata_itemproduk_statustampil = $row->statustampil;
 
$listdata_itemproduk_idusers = $row->idusers;

$listdata_itemproduk_idadmin = $row->idadmin;

$listdata_itemproduk_direktorigambar = $row->direktorigambar;				





$row_kanal = Select_Detail_Kategori_produk( $tbl_produkkategori, $row->idkategori ); /* Select Detail Kanal */

$row_subkanal = Select_Detail_KategoriSub_produk( $tbl_produkkategorisub, $row->idkategorisub ); /* Select Detail Sub Kanal */

$row_user_posting = Users_Select_Detail( $tbl_users, $row->idusers ); /* Select Detail Users */




$link_itemproduk_lihatdata = "produk_item.php?idkategori=$idkategori&idsubkategori=$idsubkategori&id=$listdata_itemproduk_id&action=ViewDetail";

$link_itemproduk_editdata = "produk_item.php?idkategori=$idkategori&idsubkategori=$idsubkategori&id=$listdata_itemproduk_id&action=EditData";

$link_itemproduk_hapusdata = "produk_item.php?idkategori=$idkategori&idsubkategori=$idsubkategori&id=$listdata_itemproduk_id&action=DeleteData";

$link_komentarproduk_lihatdata = "
javascript:MM_openBrWindow('?Sec=produk&SubSec=AdminprodukKomentar&iditem=$listdata_itemproduk_id','OpenWindow_produk_Komentar','scrollbars=yes,width=600,height=600')
";

$link_fileproduk_lihatdata = "
javascript:MM_openBrWindow('?Sec=produk&SubSec=AdminprodukItem&iditem=$listdata_itemproduk_id','OpenWindow_produk_FileLampiran','scrollbars=yes,width=600,height=600')
";


  
if( $listdata_itemproduk_statustampil == 0){

 $Publish = "<a href='produk_proses.php?action=item_updatestatus&id=$row->id&&status=1'>Publish</a>";
 $Unpublish = "Unpublish";
 } else {
 $Publish = "Publish";
 $Unpublish = "<a href='admin-produk-statuspublikasi.php?id=$row->id&&status=0'>Unpublish</a>";

}

if( $no % 2 ) $BG = "#EEEEEE"; else $BG = "#F7F7F7";

//$query_produkitem = TotalAllDataprodukItemLampiran( $tbl_produk, $row->id );
//$hitungdata_produkitem = mysql_num_rows($query_produkitem);
$hitungdata_produkitemlampiran = TotalAllDataprodukItemLampiran( $tbl_produkfile, $row->id );
 

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
<a href='produk_item.php?idkategori=<?php
echo $row->idkategori ?>&idsubkategori=<?php
echo $row->idkategorisub ?>&id=<?php
echo $row->id ?>&action=ViewDetail' class='Font_Item_Judul'>
<?php
echo $listdata_itemproduk_judul ?>
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
	$Publish = "<a href='produk_proses_item.php?action=item_headlinetampil&idkategori=$row->idkategori&idkategorisub=$row->idkategorisub&id=$row->id&status=1' class='link_action'> Publish </a>";
	$Unpublish = "Unpublish";
}else{
	$Publish = "Publish";
	$Unpublish = "<a href='produk_proses_item.php?action=item_headlinetampil&idkategori=$row->idkategori&idkategorisub=$row->idkategorisub&id=$row->id&status=0' class='link_action'> Unpublish </a>";
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
$gambar_itemproduk = "<b> <font color='red'> NO PICTURE <br> AVAILABLE </font> </b>";
}else{
$root_file = "../";
$show_gambar = $root_file . $row->direktorigambar . $row->gambarbesar;
$gambar_itemproduk = "<img src='$show_gambar' border='0' width='250'>";
}
?>
<?php
echo $gambar_itemproduk ?> 
<br>
<br>
<b><u>  Applies to : </u></b><?php
echo harienglish($row->tgltampil) ?>, <?php
echo bulanenglish($row->tgltampil) ?><b> up to </b><?php
echo harienglish($row->tglselesaitampil) ?>, <?php
echo bulanenglish($row->tglselesaitampil) ?>
<br>
<br>

Duration :
<?php
$tanggaltampil = $row->tgltampil . " " . $row->jamtampil;
$tanggalselesai = $row->tglselesaitampil . " " . $row->jamselesaitampil;

$DurasiTampilHari = DurasiHari($tanggaltampil, $tanggalselesai);
$DurasiTampilJam = DurasiJam($parambegindate, $paramenddate);
$DurasiTampilMenit = DurasiMenit($parambegindate, $paramenddate);
?>

<?php
echo $DurasiTampilHari ?> days<br>
<br>
<?php
$tgl_hariini = date('Y-m-d');
$idprodukitem = $row->id;



if( $row->tglselesaitampil < $tgl_hariini ){
	$status_tampil = "<b> <font color='#FF0000'> This data has not appeared on the front of the web site</font> </b>";
}else{
	$status_tampil = "<b> <font color='#006600'> Status sedang tampil di halaman  depan web site </font> </b>";
}
?>
<?php
echo $status_tampil ?> 

<br>
<br>

<?php
if( $row->matauang == "USD" ){
	$harganya = Dollar($row->harga);
}


if( $row->matauang == "IDR" ){
	$harganya = rupiah($row->harga);
}

?>
<b> 
Price : <?php
echo $harganya ?>
</b>

<br>
<br>


Hit Counter  :  <?php
echo $listdata_itemproduk_dilihat ?> 
    
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
/* Action Modul produk */ ?>
<div  id='link_action' class='link_action'>

<ul>
<?php
if( $sesi_aksesmodul == "anggota_biasa" ){
}else{
?>
<li> <a href='produk_item_lampiran.php?iditem=<?php
echo $row->id ?>'> File Extra[ <?php
echo $hitungdata_produkitemlampiran ?> ] </a> </li>
 
<?php
} ?>
<?php
if( $sesi_aksesmodul == "anggota_biasa" ){
}else{
?>
 
</li>
<?php
} ?>
<li> <a href='produk_item.php?idkategori=<?php
echo $row->idkategori ?>&idsubkategori=<?php
echo $row->idkategorisub ?>&id=<?php
echo $row->id ?>&action=ViewDetail'> View Detail </a> </li>
<?php
if( $sesi_aksesmodul == "anggota_biasa" ){
}else{
?>
<li> <a href='produk_item.php?idkategori=<?php
echo $row->idkategori ?>&idsubkategori=<?php
echo $row->idkategorisub ?>&id=<?php
echo $row->id ?>&action=EditData'> 
Edit Data </a> 
</li>
<?php
}
?>
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
echo $row->id ?> )" class="link_delete"> Delete </a>
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
      <td width="10%"><span class="style9">page  </span></td>
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