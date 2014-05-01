<?php
$KodeKeamananhalaman  = "token_peopledirectory";
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
				FORM ENTRY SUB SECTION  
			</td>
		</tr>
    	<tr class='kontenform'>
      		<td>
 
<form action="<?php
echo $FormpeopledirectoryKategoriSub_Action ?>" method="post" enctype="multipart/form-data" name="FormSubKanal" target="_self">

  <table width='100%'  align='center' cellpadding='1' cellspacing='1' class='tabelform'>
    <tr class='kontenform'>
      <td><div align="right">SECTION</div></td>
      <td><div align="center">:</div></td>
      <td><?php
echo $peopledirectorykategori_keterangan ?></td>
    </tr>
    <tr class='kontenform'>
      <td width="32%"><div align='right'> TITLE </div></td>
      <td width="1%"><div align='center'> : </div></td>
      <td width="67%">
	  
	  <input name="keterangan" type="text" id="keterangan" value="<?php
echo $row_subkanal->keterangan ?>" size="50">
	  
	  
      </td>
    </tr>
    <tr class='kontenform' >
      <td><div align="right">NOTES</div></td>
      <td><div align="center">:</div></td>
      <td><textarea name="keyword" cols="50" id="keyword"><?php
echo $row_subkanal->keyword ?></textarea></td>
    </tr>
    <tr class='kontenform' >
      <td><div align='right'> ORDER </div></td>
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
      PUBLISH </label>
	  
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
<a href='peopledirectory_proses_subkanal.php?action=subkanal_updateimage_logo&id=<?php
echo $row_subkanal->id; ?>' class='link_action'>DELETE IMAGE</a>
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
          <input name='btn_peopledirectorysubkategori' type='submit' class='button' value='<?php
echo $peopledirectorysubkategori_submitbutton ?>'>
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