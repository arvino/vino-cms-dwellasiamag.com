<?php
session_start(); 
$sesi_id = $_SESSION['users_id'];
$sesi_idpegawai = $_SESSION['users_idpegawai'];
$sesi_username = $_SESSION['users_username'];
$sesi_email = $_SESSION['users_email'];
$sesi_aksesmodul = $_SESSION['users_aksesmodul'];
?>



<?php
if( $sesi_id == "" ){
header('location:users_login.php?pesan_error=PLEASE LOGIN FIRST.');
}else{
include"kelas_function.php";
?>



<html>
<head>

<?php
include"head.php"; ?>
<script type="text/javascript">
function JavaScript_Konfirmasi( idkategori, id ){
	var answer = confirm ("Are you sure want to delete this file.")
	if (answer)
	window.location="produk_proses_subkanal.php?action=subkanal_hapusdata&id=" + id 
	else
	window.location="produk_subkanal.php?idkategori=" + idkategori
}
</script> 
</head>
 
<body leftmargin="0" topmargin="0" bottommargin="0"  rightmargin="0"   
style="background-image: url(images/bghalaman.png);background-repeat:no-repeat;
background-position:top;background-attachment:fixed;">

<?php
include"tmpl_header.php"; ?>

     <table width="100%"  border="0" cellspacing="0" cellpadding="0">
       <tr valign="top">
         <td width="22%"><table width="204" border="0" cellspacing="0" cellpadding="0">
             <tr>
               <td width="9" height="8"><img name="B2_Sudut_KiriAtas" src="images/box/B2_Sudut_KiriAtas.png" width="9" height="8" border="0" alt=""></td>
               <td background="images/box/B2_Batas_Atas.png"> </td>
               <td width="8" height="8"><img name="B2_Sudut_KananAtas" src="images/box/B2_Sudut_KananAtas.png" width="8" height="8" border="0" alt=""></td>
             </tr>
             <tr valign="top">
               <td background="images/box/B2_Batas_Kiri.png" width="9"> </td>
               <td background="images/box/B2_Latar.png">
                 <?php
include"menu_produk.php";?>
               </td>
               <td background="images/box/B2_Batas_Kanan.png" width="8"> </td>
             </tr>
             <tr>
               <td width="9" height="8"><img name="B2_Sudut_KiriBawah" src="images/box/B2_Sudut_KiriBawah.png" width="9" height="8" border="0" alt=""></td>
               <td background="images/box/B2_Batas_Bawah.png"> </td>
               <td width="8" height="8"><img name="B2_Sudut_KananBawah" src="images/box/B2_Sudut_KananBawah.png" width="8" height="8" border="0" alt=""></td>
             </tr>
         </table>
		 
		 
 		 

		 
		 
		 
		 
		 
		 </td>
         <td width="78%"><div align="center">
             <table width="100%" border="0" cellspacing="0" cellpadding="0">
               <tr>
                 <td width="9" height="8"><img name="B2_Sudut_KiriAtas" src="images/box/B2_Sudut_KiriAtas.png" width="9" height="8" border="0" alt=""></td>
<td background="images/box/B2_Batas_Atas.png"> </td>
<td width="8" height="8"><img name="B2_Sudut_KananAtas" src="images/box/B2_Sudut_KananAtas.png" width="8" height="8" border="0" alt=""></td>
               </tr>
               <tr valign="top">
                 <td background="images/box/B2_Batas_Kiri.png" width="9"> </td>
                 <td background="images/box/B2_Latar.png"> 
				 
				 
<?php
$idkategori = $_GET["idkategori"];
$detail_kanal = Select_Detail_Kategori_produk( $tbl_produkkategori, $idkategori );


?>
<span class="JudulKanal_box1">halaman  SUB GRUP PRODUK <?php
echo strtoupper($detail_kanal->keterangan) ?> </span>
<hr class='line_box'>
                     <?php
include"pesan_error.php";?>
                     <?php
include"menu_subkanal_produk.php"; ?>
 
<?php
$KodeKeamananhalaman  = "token_produk";
$KodeKeamananhalaman_Keterangan = "ACCESS DENIED !";
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
	
	include"access_denied.php";
	
}else{

?>
<?php
$idkategori = $_GET["idkategori"];
$detail_kanal = Select_Detail_Kategori_produk( $tbl_produkkategori, $idkategori );

$r_dataproduk_kategori = Select_Kategori_produk_By_Id( $tbl_produkkategori, $idkategori );
$r_produkkategori = mysql_fetch_array($r_dataproduk_kategori);


if($idkategori==0){

$produkkategori_keterangan = "TANPA KATEGORI / KANAL ";

}else{

$produkkategori_id = $r_produkkategori['id'];
$produkkategori_keterangan = $r_produkkategori['keterangan'];
$produkkategori_keterangan = strtoupper($produkkategori_keterangan);

}




if( $action=="EditData" ){    

$FormprodukKategoriSub_Action = "produk_proses_subkanal.php?action=subkanal_updatedata";
$produksubkategori_submitbutton = "UPDATE DATA......";
$Tombol_CANCEL = "<input type='reset' name='reset' value='CANCEL' class='button' onClick=\"javascript:location.replace('produk_subkanal.php?idkategori=$idkategori')\" >";

$id = $_GET['id'];
$idkategori = $_GET['idkategori'];

$row_kanal = Select_Detail_Kategori_produk( $tbl_produkkategori, $idkategori );
$row_subkanal = Select_Detail_KategoriSub_produk( $tbl_produkkategorisub, $id );

}

if( !isset($action) ){
$FormprodukKategoriSub_Action = "produk_proses_subkanal.php?action=subkanal_tambahdata";
$produksubkategori_submitbutton = "ADD DATA...";
$Tombol_CANCEL = "<input type='reset' name='reset' value='CANCEL' class='button' onClick=\"javascript:location.replace('produk_subkanal.php?idkategori=$idkategori')\" >";

$id = $_GET['id'];
$idkategori = $_GET['idkategori'];

$row_kanal = Select_Detail_Kategori_produk( $tbl_produkkategori, $idkategori );

}

?>
<br>
<?php
include"produk_form_subkanal.php";?>
<br>
<?php
include"produk_list_subkanal.php"; ?>
<br>
<?php
} ?>                 

</td>
                 <td background="images/box/B2_Batas_Kanan.png" width="8"> </td>
               </tr>
               <tr>
                 <td width="9" height="8"><img name="B2_Sudut_KiriBawah" src="images/box/B2_Sudut_KiriBawah.png" width="9" height="8" border="0" alt=""></td>
                 <td background="images/box/B2_Batas_Bawah.png"> </td>
                 <td width="8" height="8"><img name="B2_Sudut_KananBawah" src="images/box/B2_Sudut_KananBawah.png" width="8" height="8" border="0" alt=""></td>
               </tr>
             </table>
         </div></td>
       </tr>
     </table>
	 

<?php
include"tmpl_footer.php"; ?>
 
  
</body>
</html>
<?php
} ?>