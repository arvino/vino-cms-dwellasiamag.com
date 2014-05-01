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
$KodeKeamananhalaman_Keterangan = "ACCESS DENIED.";
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
	
	include"access_denied.php";
	
}else{

if($action=="EditData"){ 
 	
	if( $row_kanal->statustampil == "1"){ /* Status Tampil */
		$cek_statustampil = "checked";
	}else{
		$cek_statustampil = "";
	}
	
	if( $row_kanal->homehalamantampil == "1"){ /* Status Tampil di Homehalaman */
		$cek_homehalamantampil = "checked";
	}else{
		$cek_homehalamantampil = "";
	}
	
	if( $row_kanal->menuatas1 == "1"){ /* Status Tampil di Menu Atas 1 */
		$cek_menuatas1 = "checked";
	}else{
		$cek_menuatas1 = "";
	}

	if( $row_kanal->menuatas2 == "1"){ /* Status Tampil di Menu Atas 2 */
		$cek_menuatas2 = "checked";
	}else{
		$cek_menuatas2 = "";
	}

	if( $row_kanal->menubawah1 == "1"){ /* Status Tampil di Menu Bawah 1 */
		$cek_menubawah1 = "checked";
	}else{
		$cek_menubawah1 = "";
	}

	if( $row_kanal->menubawah2 == "1"){ /* Status Tampil di Menu Bawah 2 */
		$cek_menubawah2 = "checked";
	}else{
		$cek_menubawah2 = "";
	}

}

?>
<table class='tabelform' align='center' width='100%' cellpadding='1' cellspacing='1'>
		<tr class='judulform'>
			<td width='100%' height='30'>
				FORM ENTRY KATEGORI 			</td>
  </tr>
    	<tr class='kontenform'>
      		<td>

<div align='center'>

<form action="<?php
echo $FormprodukKategori_Action ?>" method="post" enctype="multipart/form-data" name="FormKanal" target="_self" id="FormKanal">

  <table width='100%'  align='center' cellpadding='1' cellspacing='1' class='tabelform'>
    <tr class='kontenform'>
      <td width="32%"><div align='right'> JUDUL </div></td>
      <td width="1%"><div align='center'> : </div></td>
      <td width="67%"><input name='keterangan' type='text' id='keterangan' value='<?php
echo $row_kanal->keterangan ?>' size='50'>
      </td>
    </tr>
    <tr class='kontenform' >
      <td><div align="right">KEYWORD</div></td>
      <td><div align="center">:</div></td>
      <td><textarea name="keyword" cols="50" id="keyword"><?php
echo $row_kanal->keyword ?></textarea></td>
    </tr>
    <tr class='kontenform' >
      <td><div align="right">POSISI</div></td>
      <td><div align="center">:</div></td>
      <td>
        <select name='posisi'>
          <option value='<?php
echo $row_kanal->posisi; ?>'> <?php
echo $row_kanal->posisi; ?></option>
          <?php
for($i=0; $i<=20; $i++)	{
?>
          <option value='<?php
echo $i ?>'><?php
echo $i ?></option>
          <?php
}
?>
        </select>
      </td>
    </tr>
    <tr class='kontenform' >
      <td><div align='right'> URUTAN </div></td>
      <td><div align='center'> : </div></td>
      <td>
        <select name='urutan'>
          <option value='<?php
echo $row_kanal->urutan; ?>'> <?php
echo $row_kanal->urutan; ?></option>
          <?php
for($i=0; $i<=20; $i++)	{
?>
          <option value='<?php
echo $i ?>'><?php
echo $i ?></option>
          <?php
}
?>
        </select>
      </td>
    </tr>
    <tr class='kontenform' >
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>
	  
	  <label>
	  <input name="statustampil" type="checkbox" id="statustampil" value="1" <?php
echo $cek_statustampil ?>>
      STATUS TAMPIL 
	  </label>
	  
	  </td>
    </tr>
    <tr class='kontenform' >
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>
	  
	  <label>
	  <input name="homehalamantampil" type="checkbox" id="homehalamantampil" value="1" <?php
echo $cek_homehalamantampil ?>>
      TAMPIL DI HOMEhalaman 
	  </label>
	  
	  </td>
    </tr>
    <tr class='kontenform' >
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>
	  
	  <label>
	  <input name="menuatas1" type="checkbox" id="menuatas1" value="1" <?php
echo $cek_menuatas1 ?>>
      TAMPIL DI MENU ATAS 1 ( UTAMA ) 
	  </label>
	  
	  </td>
    </tr>
    <tr class='kontenform' >
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>
	  
	  <label>
	  <input name="menuatas2" type="checkbox" id="menuatas2" value="1" <?php
echo $cek_menuatas2 ?>>
      TAMPIL DI MENU ATAS 2 
	  </label>
	  
	  </td>
    </tr>
    <tr class='kontenform' >
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>
	  <label>
	  <input name="menubawah1" type="checkbox" id="menubawah1" value="1" <?php
echo $cek_menubawah1 ?>>
      TAMPIL DI MENU BAWAH 1 
	  </label>
	  </td>
    </tr>
    <tr class='kontenform' >
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>
	  <label>
	  <input name="menubawah2" type="checkbox" id="menubawah2" value="1" <?php
echo $cek_menubawah2 ?>>
      TAMPIL DI MENU BAWAH 2 
	  </label>
	  </td>
    </tr>
    <tr class='kontenform' >
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><u>UPLOAD IMAGE LOGO : </u> <br>
          <input name="image_file_logo" type="file" id="image_file_logo"></td>
    </tr>
    <tr class='kontenform' >
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><u>UPLOAD IMAGE HEADER : </u> <br>
          <input name="image_file_header" type="file" id="image_file_header"></td>
    </tr>
    <tr class='kontenform' >
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><u>UPLOAD IMAGE BACKGROUND :</u> <br>
          <input name="image_file_background" type="file" id="image_file_background"></td>
    </tr>
    <tr class='kontenform' >
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>
	  
<br>
<?php
if( $action=="EditData" ){
?>

<?php
if( $row_kanal->imagelogo == "" || $row_kanal->imagelogo == "none" ){
	
}else{ /* Tampilkan File Kanal */

$loc_root = "../";	
$location_dir =  $loc_root . $row_kanal->imagefile;
$image_kanal_logo = $location_dir . $row_kanal->imagelogo;
?>
<div align='left'>
<img src='<?php
echo $image_kanal_logo; ?>' width="600" border='0'> 
<br>
<a href='produk_proses_kanal.php?action=kanal_updateimage_logo&id=<?php
echo $row_kanal->id; ?>' class='link_action'>Delete IMAGE LOGO </a></div>
<br>
<?php
}
?>

<?php
if( $row_kanal->imageheader == "" || $row_kanal->imageheader == "none" ){
	
}else{ /* Tampilkan File Kanal */

$loc_root = "../";	
$location_dir =  $loc_root . $row_kanal->imagefile;
$image_kanal_header = $location_dir . $row_kanal->imageheader;
?>
<div align='left'>
<img src='<?php
echo $image_kanal_header; ?>' width="600" border='0'> 
<br>
<a href='produk_proses_kanal.php?action=kanal_updateimage_header&id=<?php
echo $row_kanal->id; ?>' class='link_action'> Delete IMAGE HEADER </a></div>
<br>
<?php
}
?>



<?php
if( $row_kanal->imagebackground == "" || $row_kanal->imagebackground == "none" ){
	
}else{ /* Tampilkan File Kanal */

$loc_root = "../";	
$location_dir =  $loc_root . $row_kanal->imagefile;
$image_kanal_background = $location_dir . $row_kanal->imagebackground;
?>
<div align='left'>
<img src='<?php
echo $image_kanal_background; ?>' width="600" border='0'> 
<br>
<a href='produk_proses_kanal.php?action=kanal_updateimage_background&id=<?php
echo $row_kanal->id; ?>' class='link_action'> Delete IMAGE BACKGROUND </a></div>
<br>
<?php
}
?>



<?php
} 
?>

	  
	  
	  
	  &nbsp;</td>
    </tr>
    <tr class='kontenform' >
      <td>
      <div align='right'> 
	  <b>
          <input name="idupline" type="hidden" value="<?php
echo $row_kanal->idupline  ?>">
          <input name='id' type='hidden' value='<?php
echo $row_kanal->id  ?>'>
		  
          <input name='imagelogo' type='hidden' value='<?php
echo $row_kanal->imagelogo  ?>'>
          <input name='imageheader' type='hidden' value='<?php
echo $row_kanal->imageheader  ?>'>
          <input name='imagebackground' type='hidden' value='<?php
echo $row_kanal->imagebackground  ?>'>
		  
          <input name='imagefile' type='hidden' value='<?php
echo $row_kanal->imagefile  ?>'>
		  
          <input name='keteranganinggris' type='hidden' value='<?php
echo $row_kanal->keteranganinggris ?>' size='50'>
      </b> 
	  </div>
	  
	  
	  </td>
      <td>
        <div align='center'> <b> </b> </div></td>
      <td>
        <div align='left'>
          <input name='btn_produkkategori' type='submit' class='button' value='<?php
echo $produkkategori_submitbutton ?>'>
          <?php
echo  $Tombol_CANCEL ?> </div></td>
    </tr>
  </table>
</form>

</div>
	  
	  		</td>
  		</tr>
  
</table>

<?php
}
?>