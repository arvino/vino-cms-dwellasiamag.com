<?php
/*
token_home
token_konfigurasi
token_usersadmin
token_usersgroup
token_peopledirectory
token_publicusers
token_booking
token_news
token_gallery
token_otherhalaman
token_statistik
token_frontpage
token_help
*/


$KodeKeamananhalaman  = "token_peopledirectory";



$KodeKeamananhalaman_Keterangan = "ACCESS DENIED !";
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
	
	include"access_denied.php";
	
}else{

?>

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
$detail_item = Select_Detail_Item_peopledirectory($tbl_peopledirectory, $iditem);
$row_user_posting = Users_Select_Detail( $tbl_users, $detail_item->idusers );
?>
<div class="Font_Item_Judul">
<?php
echo $detail_item->judul ?>
</div>
<br>

<div class='isipeopledirectory'>
<?php
echo htmlspecialchars_decode($detail_item->deskripsi) ?>
</div>

<?php
if( $detail_item->gambarbesar == "" ){
$gambar_itempeopledirectory = " ";
}else{
$root_file = "../";
$show_gambar = $root_file . $detail_item->direktorigambar . $detail_item->gambarbesar;
$gambar_itempeopledirectory = "<img src='$show_gambar' border='0' width='400' height='300'>";
}

?>
<?php
echo $gambar_itempeopledirectory ?>
 



				
				</td>
                <td background="images/box/B2_Batas_Kanan.png" width="8"> </td>
              </tr>
              <tr>
                <td width="9" height="8"><img name="B2_Sudut_KiriBawah" src="images/box/B2_Sudut_KiriBawah.png" width="9" height="8" border="0" alt=""></td>
                <td background="images/box/B2_Batas_Bawah.png"> </td>
                <td width="8" height="8"><img name="B2_Sudut_KananBawah" src="images/box/B2_Sudut_KananBawah.png" width="8" height="8" border="0" alt=""></td>
              </tr>
</table>
			
<?php
} ?>