<?php
$KodeKeamananhalaman  = "token_produk";
$KodeKeamananhalaman_Keterangan = "ACCESS DENIED !";
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
	
	include"access_denied.php";
	
}else{


if($action=="EditData"){ 
 	
	if( $row_subkanal->statustampil == "1"){ /* Status Tampil */
		$cek_statustampil = "checked";
	}else{
		$cek_statustampil = "";
	}
	
	if( $row_subkanal->homehalamantampil == "1"){ /* Status Tampil di Homehalaman */
		$cek_homehalamantampil = "checked";
	}else{
		$cek_homehalamantampil = "";
	}
	
	if( $row_subkanal->menuatas1 == "1"){ /* Status Tampil di Menu Atas 1 */
		$cek_menuatas1 = "checked";
	}else{
		$cek_menuatas1 = "";
	}

	if( $row_subkanal->menuatas2 == "1"){ /* Status Tampil di Menu Atas 2 */
		$cek_menuatas2 = "checked";
	}else{
		$cek_menuatas2 = "";
	}

	if( $row_subkanal->menubawah1 == "1"){ /* Status Tampil di Menu Bawah 1 */
		$cek_menubawah1 = "checked";
	}else{
		$cek_menubawah1 = "";
	}

	if( $row_subkanal->menubawah2 == "1"){ /* Status Tampil di Menu Bawah 2 */
		$cek_menubawah2 = "checked";
	}else{
		$cek_menubawah2 = "";
	}

}

?>
<table class='tabelform' align='center' width='100%' cellpadding='1' cellspacing='1'>
		<tr class='judulform'>
			<td width='100%' height='30'>
				FORM ENTRY SUB KATEGORI <?php
echo strtoupper($detail_kanal->keterangan) ?>
			</td>
		</tr>
    	<tr class='kontenform'>
      		<td>
 
<form action="<?php
echo $FormprodukKategoriSub_Action ?>" method="post" enctype="multipart/form-data" name="FormSubKanal" target="_self">

  <table width='100%'  align='center' cellpadding='1' cellspacing='1' class='tabelform'>
    <tr class='kontenform'>
      <td><div align="right">KATEGORI</div></td>
      <td><div align="center">:</div></td>
      <td><?php
echo $produkkategori_keterangan ?></td>
    </tr>
    <tr class='kontenform'>
      <td width="32%"><div align='right'> JUDUL </div></td>
      <td width="1%"><div align='center'> : </div></td>
      <td width="67%">
	  
	  <input name="keterangan" type="text" id="keterangan" value="<?php
echo $row_subkanal->keterangan ?>" size="50">
	  
	  
      </td>
    </tr>
    <tr class='kontenform' >
      <td><div align="right">KEYWORD</div></td>
      <td><div align="center">:</div></td>
      <td><textarea name="keyword" cols="50" id="keyword"><?php
echo $row_subkanal->keyword ?></textarea></td>
    </tr>
    <tr class='kontenform' >
      <td><div align="right">POSISI</div></td>
      <td><div align="center">:</div></td>
      <td>
        <select name='posisi'>
          <option value='<?php
echo $row_subkanal->posisi; ?>'> <?php
echo $row_subkanal->posisi; ?></option>
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
echo $row_subkanal->urutan; ?>'> <?php
echo $row_subkanal->urutan; ?></option>
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
	  <input name="homehalamantampil" type="checkbox" id="homehalamantampil" value="1"  <?php
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
	  <input name="menuatas1" type="checkbox" id="menuatas1" value="1"  <?php
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
	  <input name="menuatas2" type="checkbox" id="menuatas2" value="1"  <?php
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
	  <input name="menubawah1" type="checkbox" id="menubawah1" value="1"  <?php
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
	  <input name="menubawah2" type="checkbox" id="menubawah2" value="1"  <?php
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
if( $row_subkanal->imagelogo == "" || $row_subkanal->imagelogo == "none" ){
	
}else{ /* Tampilkan File Kanal */

$loc_root = "../";	
$location_dir =  $loc_root . $row_subkanal->imagefile;
$image_kanal_logo = $location_dir . $row_subkanal->imagelogo;
?>
<div align='left'>
<img src='<?php
echo $image_kanal_logo; ?>' height='250' border='0'> 
<br>
<a href='produk_proses_subkanal.php?action=subkanal_updateimage_logo&id=<?php
echo $row_subkanal->id; ?>' class='link_action'>Delete IMAGE LOGO </a>
</div>
<br>
<?php
}
?>

<?php
if( $row_subkanal->imageheader == "" || $row_subkanal->imageheader == "none" ){
	
}else{ /* Tampilkan File Kanal */

$loc_root = "../";	
$location_dir =  $loc_root . $row_subkanal->imagefile;
$image_kanal_header = $location_dir . $row_subkanal->imageheader;
?>
<div align='left'>
<img src='<?php
echo $image_kanal_header; ?>' height='250' border='0'> 
<br>
<a href='produk_proses_subkanal.php?action=subkanal_updateimage_header&id=<?php
echo $row_subkanal->id; ?>' class='link_action'> Delete IMAGE HEADER </a>
</div>
<br>
<?php
}
?>



<?php
if( $row_subkanal->imagebackground == "" || $row_subkanal->imagebackground == "none" ){
	
}else{ /* Tampilkan File Kanal */

$loc_root = "../";	
$location_dir =  $loc_root . $row_subkanal->imagefile;
$image_kanal_background = $location_dir . $row_subkanal->imagebackground;
?>
<div align='left'>
<img src='<?php
echo $image_kanal_background; ?>' height='250' border='0'> 
<br>
<a href='produk_proses_subkanal.php?action=subkanal_updateimage_background&id=<?php
echo $row_subkanal->id; ?>' class='link_action'> Delete IMAGE BACKGROUND </a>
</div>
<br>
<?php
}
?>



<?php
} 
?>

	  
	  
	  
	  </td>
    </tr>
    <tr class='kontenform' >
      <td>
        <div align='right'> <b>
          <input name="idkategori" type="hidden" id="idkategori" value="<?php
echo $row_kanal->id  ?>">
          <input name="idupline" type="hidden" id="idupline" value="<?php
echo $row_subkanal->idupline  ?>">
          <input name='id' type='hidden' id="id"  value='<?php
echo $row_subkanal->id  ?>'>
          <input name='imagelogo' type='hidden' id="imagelogo"  value='<?php
echo $row_subkanal->imagelogo  ?>'>
          <input name='imageheader' type='hidden' id="imageheader"  value='<?php
echo $row_subkanal->imageheader  ?>'>
          <input name='imagebackground' type='hidden' value='<?php
echo $row_subkanal->imagebackground  ?>'>
          <input name='imagefile' type='hidden' value='<?php
echo $row_subkanal->imagefile  ?>'>
          <input name='keteranganinggris' type='hidden' value='<?php
echo $row_subkanal->keteranganinggris ?>' size='50'>
      </b> </div>
	  
	  
	  </td>
      <td>
        <div align='center'> <b> </b> </div></td>
      <td>
        <div align='left'>
          <input name='btn_produksubkategori' type='submit' class='button' value='<?php
echo $produksubkategori_submitbutton ?>'>
          <?php
echo  $Tombol_CANCEL ?> </div></td>
    </tr>
  </table>
</form>

 
	  
	  		</td>
  		</tr>
  
</table>
<?php
} ?>