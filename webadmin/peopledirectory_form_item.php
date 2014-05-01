<?php
$KodeKeamananhalaman  = "token_peopledirectory";
$KodeKeamananhalaman_Keterangan = "ACCESS DENIED !";
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
	
	include"access_denied.php";
	
}else{

?>


<?php
/* Jika Edit Data  */
if( $action=="EditData" ){       

if($idsubkategori == ""){
$idsubkategori=0;
}                                               
$FormSubmit = "peopledirectory_proses_item.php?action=item_updatedata";
$SubmitButton = "UPDATE DATA......";
$Tombol_Batal = "<input type='reset' name='reset' value='CANCEL' class='button' onClick=\"javascript:location.replace('peopledirectory_item.php?idkategori=$idkategori&idsubkategori=$idsubkategori&id=$id&action=EditData')\" >";

$id = $_GET['id'];
$idkategori = $_GET['idkategori'];
$idsubkategori = $_GET['idsubkategori'];
$row_kanal = Select_Detail_Kategori_peopledirectory( $tbl_peopledirectorykategori, $idkategori );
$row_subkanal = Select_Detail_KategoriSub_peopledirectory( $tbl_peopledirectorykategorisub, $idsubkategori );


$row_item = Select_Detail_Item_peopledirectory($tbl_peopledirectory, $id);


	if( $row_item->statustampil == "1"){ /* Status Tampil */
		$cek_statustampil = "checked";
	}else{
		$cek_statustampil = "";
	}
	
 
 
$e_idusers = $row_item->idusers;
$e_idadmin = $row_item->idadmin;

}


 
if( $action=="FormEntry" ){

$FormSubmit = "peopledirectory_proses_item.php?action=item_tambahdata";
$SubmitButton = "ADD DATA...";
$Tombol_CANCEL = "<input type='reset' name='reset' value='CANCEL' class='button' onClick=\"javascript:location.replace('peopledirectory_item.php?idkategori=$idkategori&idsubkategori=$idsubkategori&action=FormEntry')\" >";

$e_idusers = $sesi_id;
$e_idadmin = $sesi_id;
}
?>
<br>
<table class='tabelform' align='center' width='98%' cellpadding='1' cellspacing='1'>
  <tr class='judulform'>
    <td width='100%' height='30'> FORM  MEMBER PEOPLE PORTFOLIO </td>
  </tr>
  <tr class='kontenform'>
    <td>
      <div align='center'>
        <form action='<?php
echo $FormSubmit ?>' method='post' enctype="multipart/form-data">
          <table width='100%'  align='center' cellpadding='1' cellspacing='1' class='footerform'>
            <tr>
              <td width='98%'><p><b> SECTION : </b>
<?php
if( $action=="EditData" ){
?>
<select name='idkategori'>
<option value='<?php
echo $row_kanal->id ?>' onClick="Ambil_SubKategori(<?php
echo $row_kanal->id ?>,<?php
echo $idsubkategori ?>)">-- <?php
echo strtoupper($row_kanal->keterangan); ?> --</option>
<?php
$result_kanalpeopledirectory = Select_All_Kategori_peopledirectory_By_Urutan( $tbl_peopledirectorykategori );
while($row_kanalpeopledirectory = mysql_fetch_object( $result_kanalpeopledirectory )){
?>
<option value='<?php
echo $row_kanalpeopledirectory->id ?>' onClick="Ambil_SubKategori(<?php
echo $row_kanalpeopledirectory->id ?>,<?php
echo $idsubkategori ?>)"><?php
echo strtoupper($row_kanalpeopledirectory->keterangan); ?></option>
<?php
}
?>
</select>
<?php
} ?>



<?php
if( $action=="FormEntry"){ /* Jika tida ada action */

$idkategori = $_GET["idkategori"];
$r_datapeopledirectory_kategori = Select_Kategori_peopledirectory_By_Id( $tbl_peopledirectorykategori, $idkategori );
$r_peopledirectorykategori = mysql_fetch_object($r_datapeopledirectory_kategori);

$peopledirectorykategori_id = $r_peopledirectorykategori->id;

if( $idkategori == 0 ){ 
$peopledirectorykategori_id = 0;
$peopledirectorykategori_keterangan = "<font color='red'> NO SECTION </font>";
}else{

$peopledirectorykategori_keterangan = $r_peopledirectorykategori->keterangan;
$peopledirectorykategori_keterangan = strtoupper($peopledirectorykategori_keterangan);

}
?>
<?php
echo $peopledirectorykategori_keterangan ?>
<input name='idkategori' type='hidden'  value='<?php
echo $peopledirectorykategori_id ?>'>
<?php
}
?>
<br>
<br>



<?php
if( $action=="EditData" ){

	echo "<div id='output_subkategori'></div>";
	
}
?>




<?php
if( $action=="FormEntry" ){

		$idsubkategori = $_GET["idsubkategori"];
		if( $idsubkategori == 0 ){ 
		
			$peopledirectorysubkategori_id = 0;
			$peopledirectorysubkategori_keterangan = "<font color='red'> WITHOUT SUBSECTION </font>";
			
		}else{

			$r_peopledirectorysubkategori = Select_SubKategori_peopledirectory_By_Id( $tbl_peopledirectorykategorisub, $idsubkategori );
			$r_peopledirectorysubkategori = mysql_fetch_object($r_peopledirectorysubkategori);
			$peopledirectorysubkategori_id = $r_peopledirectorysubkategori->id;
			
			$peopledirectorysubkategori_keterangan = $r_peopledirectorysubkategori->keterangan;
			$peopledirectorysubkategori_keterangan = strtoupper($peopledirectorysubkategori_keterangan);
		}
?>
<b>SUB SECTION :</b> <?php
echo $peopledirectorysubkategori_keterangan ?>
<input name='idkategorisub' type='hidden'  value='<?php
echo $peopledirectorysubkategori_id ?>'>
<?php
}
?>
<br>

<br>

<b> MEMBER : </b>

<?php
if( $action=="EditData" ){

	$detail_member = modeling_PublicUsers_Select_Detail( $tbl_publicusers, $row_item->idusers );
	  
?>

	<select name='idusers'>
			<option value='<?php
echo $detail_member->id ?>'>-- <?php
echo strtoupper($detail_member->namadepan); ?> <?php
echo strtoupper($detail_member->namabelakang); ?>  ( <?php
echo strtoupper($detail_member->namapanggilan); ?> ) ,  <?php
echo strtolower($detail_member->email); ?>  --</option>
			<?php
$query_member = modeling_ListPublicUsers_All( $tbl_publicusers );
			while($row_member = mysql_fetch_object( $query_member )){
			?>
			<option value='<?php
echo $row_member->id ?>'><?php
echo strtoupper($row_member->namadepan); ?> <?php
echo strtoupper($row_member->namabelakang); ?> ( <?php
echo strtoupper($row_member->namapanggilan); ?> )  ,  <?php
echo strtolower($row_member->email); ?> </option>
			<?php
}
			?>
	</select>
	
<?php
} else { ?>

	<select name='idusers'>
			<option value='0'>-- PILIH MEMBER --</option>
			<?php
$query_member = modeling_ListPublicUsers_All( $tbl_publicusers );
			while($row_member = mysql_fetch_object( $query_member )){
			?>
			<option value='<?php
echo $row_member->id ?>'><?php
echo strtoupper($row_member->namadepan); ?> <?php
echo strtoupper($row_member->namabelakang); ?> ( <?php
echo strtoupper($row_member->namapanggilan); ?> )  ,  <?php
echo strtolower($row_member->email); ?> </option>
			<?php
}
			?>
	</select>

<?php
} ?>
(*)	

<br>

<br>
<b> TITLE / NAME : </b>
<br>
<input name="judul" type="text" id="judul"  value="<?php
echo strip_tags($row_item->judul) ?>" size="100%">
<br>
                  
<br>
<b> DESCRIPTION : </b> <br>

<?php
include_once("plugin/content_editor.php");
include_once("plugin/editor.php");
?>

                      <textarea name="deskripsi" cols="98%" rows="20" id="content" class="jqrte_popup" > <?php
echo $row_item->deskripsi ?> </textarea>

                      <br>
                  </p>                  </td>
            </tr>
          </table>
          <table width='100%'  border='0' cellpadding='0' cellspacing='0'>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>	  <label>
	  <input name="statustampil" type="checkbox" id="statustampil" value="1" checked <?php
echo $cek_statustampil ?>>
      PUBLISH</label>&nbsp;</td>
            </tr>
            <tr>
              <td width="28%">IMAGE UPLOAD </td>
              <td width="4%"><div align="center">:</div></td>
              <td width="68%"><input name="fileupload" type="file" id="fileupload"></td>
            </tr>



<?php
if( $action == "EditData" ){
?>
            <tr valign="top">
              <td height="22">&nbsp;</td>
              <td>&nbsp;</td>
              <td>
			  
			  
			  
<table width='98%'  border='0' cellpadding='0' cellspacing='0'>
	<tr>
	<td>

	<?php
if( $row_item->gambarkecil == "" ){

	}else{
	
	$Delete_gambar_item = "peopledirectory_proses_item.php?idkategori=$idkategori&idsubkategori=$idkategorisub&id=$id&action=item_updateimage";

	?>
		<div align='left'> 
		<img src='../<?php
echo $row_item->direktorigambar ?><?php
echo $row_item->gambarbesar ?>' width='300'>
		<br>
		<br>
        BIG IMAGE<br>
        <br>
        <img src='../<?php
echo $row_item->direktorigambar ?><?php
echo $row_item->gambarkecil ?>' width='100'> <br>
        <br>
        SMALL IMAGE<br>
        <br>
        <a href='<?php
echo $Delete_gambar_item ?>'> <b>DELETE IMAGE </b></a>
		</div>
	<?php
} 
	?>



                  
				  
				  </td>
                </tr>
              </table>
			  
			  
			  </td>
            </tr>
			
<?php
}
?>



            <tr valign="top">
              <td height="22">PUBLISH START DATE </td>
              <td><div align="center">:</div></td>
              <td>
			  



			  
			  
<?php
if( $action=="EditData" ){

	$tgltampil = $row_item->tgltampil;
	$arr_tgltampil = explode("-",$tgltampil);
	
	$d_tgltampil = $arr_tgltampil[2];
	$m_tgltampil = $arr_tgltampil[1];
	$y_tgltampil = $arr_tgltampil[0];

	$tgl_tampil_item_peopledirectory = "$d_tgltampil-$m_tgltampil-$y_tgltampil";
	$jam_tampil_item_peopledirectory = $row_item->jamtampil;




	$tglselesaitampil = $row_item->tglselesaitampil;
	$arr_tglselesaitampil = explode("-",$tglselesaitampil);

	$d_tglselesaitampil = $arr_tglselesaitampil[2];
	$m_tglselesaitampil = $arr_tglselesaitampil[1];
	$y_tglselesaitampil = $arr_tglselesaitampil[0];

	$tgl_selesai_tampil_item_peopledirectory = "$d_tglselesaitampil-$m_tglselesaitampil-$y_tglselesaitampil";

	$jamselesaitampil = $row_item->jamselesaitampil;
	$jam_selesai_tampil_item_peopledirectory = $jamselesaitampil;

}else{

	$tgl_tampil_item_peopledirectory =date("d-m-Y");
	$jam_tampil_item_peopledirectory = date("H:i");

	$tgl_selesai_tampil_item_peopledirectory =date("d-m-Y");
	$jam_selesai_tampil_item_peopledirectory = date("H:i");

}

?>
<input name='tgltampil' type="text" id="inputField_tampil"  value='<?php
echo $tgl_tampil_item_peopledirectory ?>' 
style="background-image:url(images/calendar.png); background-position:right; background-repeat:no-repeat;"> 
( DD-MM-YYYY ) 
			</td>
            </tr>
			
            <tr valign="top">
              <td height="22">START TIME</td>
              <td><div align="center">:</div></td>
              <td>
                <input name='jamtampil' type='text' id="jamtampil" value='<?php
echo $jam_tampil_item_peopledirectory ?>' size='6' maxlength='7'>
( HH:MM ) </td>
            </tr>
            <tr valign="top">
              <td height="22">PUBLISH END DATE </td>
              <td><div align="center">:</div></td>
              <td>
			  


			  
			  

<input name='tglselesaitampil' type="text" id="inputField_tidaktampil" value='<?php
echo $tgl_selesai_tampil_item_peopledirectory ?>' 
style="background-image:url(images/calendar.png); background-position:right; background-repeat:no-repeat;"> 
( DD-MM-YYYY ) 
</td>
            </tr>
            <tr valign="top">
              <td height="22">END TIME</td>
              <td><div align="center">:</div></td>
              <td><input name='jamselesaitampil' type='text' id="jamselesaitampil2" value='<?php
echo $jam_selesai_tampil_item_peopledirectory ?>' size='6' maxlength='7'>
( HH: MM ) </td>
            </tr>


				
				
          </table>
          <table width='100%'  cellpadding='2' cellspacing='0' border='0'>
            <tr>
              <td>
                <p align='left'>
                  <input type='submit' name='Submit2' value='<?php
echo $SubmitButton ?>'>
                  <?php
echo $Tombol_CANCEL ?> </p></td>
            </tr>
            <tr>
              <td>

<input name='id' type='hidden'  value='<?php
echo $row_item->id ?>'>
<input name='idupline' type='hidden'  value='<?php
echo $row_item->idupline ?>'>
<input name='timeunix' type='hidden'  value='<?php
echo $row_item->timeunix ?>'>
<input name='gambarkecil' type='hidden'  value='<?php
echo $row_item->gambarkecil ?>'>
<input name='gambarbesar' type='hidden'  value='<?php
echo $row_item->gambarbesar ?>'>
<input name='direktorigambar' type='hidden'  value='<?php
echo $row_item->direktorigambar ?>'>
 


</td>
            </tr>
          </table>
		  
		  
          <br>
        </form>
    </div>
	
	
	</td>
  </tr>
</table>
<!-- END FORM ITEM -->
               

<?php
} ?>