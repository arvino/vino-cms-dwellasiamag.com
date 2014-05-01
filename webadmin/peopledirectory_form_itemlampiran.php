<?php
$KodeKeamananhalaman  = "token_peopledirectory";
$KodeKeamananhalaman_Keterangan = "ACCESS DENIED !";
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
	
	include"access_denied.php";
	
}else{

?>

<table class='tabelform' align='center' width='100%' cellpadding='1' cellspacing='1'>
		<tr class='judulform'>
			<td width='100%' height='30'>
            
				FORM UPLOAD PORTFOLIO
                
             </td>
		</tr>
    	<tr class='kontenform'>
      		<td>

<div align='center'>

<form action="<?php
echo $FormSubmit ?>" method="post" enctype="multipart/form-data">

<table width='100%'  align='center' cellpadding='1' cellspacing='1' class='tabelform'>


  <tr class='kontenform'>
    <td width="32%"><div align='right'>TITLE</div></td>
    <td width="2%"> <div align="center">: </div></td>
    <td width="66%"><input name='judul' type='text' id='judul' value='<?php
echo $detail_itemlampiran->judul ?>' size='50' />
	</td>
  </tr>
  <tr class='kontenform'  valign="top">
    <td><div align='right'> UPLOAD FILE </div></td>
    <td> <div align="center">: </div></td>
    <td>
<input name="fileupload" type="file" id="fileupload" />
<br />
* File Type : .JPG, BMP , MP3 , FLV , PDF , DOC , XLS.<br />	</td>
  </tr>
  <tr class='kontenform' >
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
    
      <label>
	  <input name="statustampil" type="checkbox" id="statustampil" value="1" <?php
echo $cek_statustampil ?>>
        PUBLISH STATUS
      </label>
    
    </td>
  </tr>
  <tr class='kontenform' >
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
    
   	  <label>
	  <input name="hotspot" type="checkbox" id="hotspot" value="1" <?php
echo $cek_hotspot ?>>
        HOTSPOT
      </label>
    
    </td>
  </tr>
  <tr class='kontenform' >
    <td><div align="right">ORDER</div></td>
    <td><div align="center">:</div></td>
    <td>

		<select name='urutan'>
			<option value='<?php
echo $detail_itemlampiran->urutan; ?>'> <?php
echo $detail_itemlampiran->urutan; ?></option>
			<?php
for($i=0; $i<=30; $i++)	{
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

    <td>
		<div align='right'> 
			<b>

			
<input name="isi" type="hidden" id="isi2" value="<?php
echo $detail_itemlampiran->isi  ?>" size="50" />
<input name='id' type='hidden' value='<?php
echo $detail_itemlampiran->id ?>' />
<input name='idkonten' type='hidden' value='<?php
echo $iditem ?>' />
<input name='namafile' type='hidden' value='<?php
echo $detail_itemlampiran->namafile ?>' />
<input name='tipefile' type='hidden' value='<?php
echo $detail_itemlampiran->tipefile ?>' />
<input name='gambar' type='hidden' value='<?php
echo $detail_itemlampiran->gambar ?>' />
<input name='gambarpreview' type='hidden' value='<?php
echo $detail_itemlampiran->gambarpreview ?>' />
<input name='direktorifile' type='hidden' value='<?php
echo $detail_itemlampiran->direktorifile ?>' />
<input name='linkjudul' type='hidden' value='<?php
echo $detail_itemlampiran->linkjudul  ?>' />
<input name='keyword' type='hidden' value='<?php
echo $detail_itemlampiran->keyword ?>' />

<input name='idkategori' type='hidden' value='<?php
echo $detail_item->idkategori ?>'>
<input name='idkategorisub' type='hidden' value='<?php
echo $detail_item->idkategorisub ?>'>


            </b> 
		</div>
	</td>
	
    <td>
		<div align='center'>
			<b> </b>
		</div>
	</td>
	
    <td>
		<div align='left'>
        	<input name='btn_peopledirectorykategori' type='submit' class='button' value='<?php
echo $peopledirectorykategori_submitbutton ?>' />
    	   <?php
echo  $Tombol_Batal ?>
		</div>
	</td>
	
	
  </tr>

</table>
</form>

</div>
	  
	  		</td>
  		</tr>
  
</table>
<?php
} ?>