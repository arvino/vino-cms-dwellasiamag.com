<?php
$KodeKeamananhalaman  = "token_produk";
$KodeKeamananhalaman_Keterangan = "ACCESS DENIED !";
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
	
	include"access_denied.php";
	
}else{

?>

<!--- FORM ITEM --->
<?php
/* Jika Edit Data  */
if( $action=="EditData" ){       

if($idsubkategori == ""){
$idsubkategori=0;
}                                               
$FormprodukDataItem = "produk_proses_item.php?action=item_updatedata";
$SubmitButtonItemproduk = "UPDATE DATA......";
$Tombol_CANCEL = "<input type='reset' name='reset' value='CANCEL' class='button' onClick=\"javascript:location.replace('produk_item.php?idkategori=$idkategori&idsubkategori=$idsubkategori&id=$id&action=EditData')\" >";

$id = $_GET['id'];
$idkategori = $_GET['idkategori'];
$idsubkategori = $_GET['idsubkategori'];
$row_kanal = Select_Detail_Kategori_produk( $tbl_produkkategori, $idkategori );
$row_subkanal = Select_Detail_KategoriSub_produk( $tbl_produkkategorisub, $idsubkategori );


$row_item = Select_Detail_Item_produk($tbl_produk, $id);


	if( $row_item->statustampil == "1"){ /* Status Tampil */
		$cek_statustampil = "checked";
	}else{
		$cek_statustampil = "";
	}
	
	if( $row_item->pilihan  == "1"){ /* Status Tampil di Pilihan */
		$cek_pilihan = "checked";
	}else{
		$cek_pilihan = "";
	}
	

	if( $row_item->hotspot   == "1"){ /* Status Tampil di Hotspot */
		$cek_hotspot = "checked";
	}else{
		$cek_hotspot = "";
	}

$e_idusers = $row_item->idusers;
$e_idadmin = $row_item->idadmin;


}



if( $action=="FormEntry" ){

$FormprodukDataItem = "produk_proses_item.php?action=item_tambahdata";
$SubmitButtonItemproduk = "ADD DATA...";
$Tombol_CANCEL = "<input type='reset' name='reset' value='CANCEL' class='button' onClick=\"javascript:location.replace('produk_item.php?idkategori=$idkategori&idsubkategori=$idsubkategori&action=FormEntry')\" >";

$e_idusers = $sesi_id;
$e_idadmin = $sesi_id;
}
?>
<br>
<table class='tabelform' align='center' width='98%' cellpadding='1' cellspacing='1'>
  <tr class='judulform'>
    <td width='100%' height='30'> FORM ENTRY ITEM </td>
  </tr>
  <tr class='kontenform'>
    <td>
      <div align='center'>
        <form action='<?php
echo $FormprodukDataItem ?>' method='post' enctype="multipart/form-data">
          <table width='100%'  align='center' cellpadding='1' cellspacing='1' class='footerform'>
            <tr>
              <td width='98%'>
			  
			  
<p><b> Kategori : </b>
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
$result_kanalproduk = Select_All_Kategori_produk_By_Urutan( $tbl_produkkategori );
while($row_kanalproduk = mysql_fetch_object( $result_kanalproduk )){
?>
<option value='<?php
echo $row_kanalproduk->id ?>' onClick="Ambil_SubKategori(<?php
echo $row_kanalproduk->id ?>,<?php
echo $idsubkategori ?>)"><?php
echo strtoupper($row_kanalproduk->keterangan); ?></option>
<?php
}
?>
</select>
<?php
} ?>



<?php
if( $action=="FormEntry"){ /* Jika tida ada action */

$idkategori = $_GET["idkategori"];
$r_dataproduk_kategori = Select_Kategori_produk_By_Id( $tbl_produkkategori, $idkategori );
$r_produkkategori = mysql_fetch_object($r_dataproduk_kategori);

$produkkategori_id = $r_produkkategori->id;

if( $idkategori == 0 ){ 
$produkkategori_id = 0;
$produkkategori_keterangan = "<font color='red'> TANPA KATEGORI </font>";
}else{

$produkkategori_keterangan = $r_produkkategori->keterangan;
$produkkategori_keterangan = strtoupper($produkkategori_keterangan);

}
?>
<?php
echo $produkkategori_keterangan ?>
<input name='idkategori' type='hidden'  value='<?php
echo $produkkategori_id ?>'>
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
	$produksubkategori_id = 0;
	$produksubkategori_keterangan = "<font color='red'> TANPA SUB KATEGORI </font>";
}else{

	$r_produksubkategori = Select_SubKategori_produk_By_Id( $tbl_produkkategorisub, $idsubkategori );
	$r_produksubkategori = mysql_fetch_object($r_produksubkategori);
	$produksubkategori_id = $r_produksubkategori->id;
	
	$produksubkategori_keterangan = $r_produksubkategori->keterangan;
	$produksubkategori_keterangan = strtoupper($produksubkategori_keterangan);
}
?>
<b>Sub Kategori :</b> <?php
echo $produksubkategori_keterangan ?>
<input name='idkategorisub' type='hidden'  value='<?php
echo $produksubkategori_id ?>'>
<?php
}
?>
                    <br>
                    <b> </b><br>
                    <b> Judul : </b><br>
                    <input name="judul" type="text" id="judul"  value="<?php
echo strip_tags($row_item->judul) ?>" size="100%">
                    <br>
                  <br>
                  <b> </b><b>Keterangan : </b><br>
                  <textarea name="subjudul" cols="98%" id="textarea"><?php
echo  trim(strip_tags($row_item->subjudul)) ?></textarea>
                </p>
                
                    <b> Preview deskripsi : </b><br>
                    <textarea name="preview" cols="98%" rows="5" id="preview"><?php
echo  trim(strip_tags($row_item->preview)) ?></textarea>
                    <br>                  
                  <br>
                  <b> Deskripsi : </b> <br>

<?php
include_once("plugin/content_editor.php");
include_once("plugin/editor.php");
?>

<textarea name="deskripsi" cols="98%" rows="20" id="content" class="jqrte_popup" > <?php
echo $row_item->deskripsi ?> </textarea>

<br>
<br>
                  <b>Keyword :</b> <br>
                  <input name="keyword" type="text" id="keyword" value="<?php
echo $row_item->keyword ?>" size="60" maxlength="60">
                  <br>
                  * Maksimum 50 Karakter. </p></td>
            </tr>
          </table>
          <hr class='line_box'>
          <table width='98%'  border='0' cellpadding='0' cellspacing='0'>
            <tr>
              <td width="34%">UPLOAD GAMBAR </td>
              <td width="4%"><div align="center">:</div></td>
              <td width="62%"><input name="file123" type="file" id="file123"></td>
            </tr>
            <tr>
              <td>CAPTION GAMBAR </td>
              <td><div align="center">:</div></td>
              <td>
			  
			  
			  <input name="keterangangambar" type="text" id="keterangangambar" value="<?php
echo $row_item->keterangangambar ?>" size="50">

				

				</td>
            </tr>


            <tr valign="top">
              <td height="22">&nbsp;</td>
              <td><div align="center">:</div></td>
              <td>
			  
	  <label>
	  <input name="statustampil" type="checkbox" id="statustampil" value="1" checked <?php
echo $cek_statustampil ?>>
      STATUS TAMPIL 
	  </label>
			  
			  </td>
            </tr>
            <tr valign="top">
              <td height="22">&nbsp;</td>
              <td>&nbsp;</td>
              <td>
			  
	  <label>
		  <input name="pilihan" type="checkbox" id="pilihan" value="1" <?php
echo $cek_pilihan ?>>
		  PILIHAN
	  </label>    
			  
			  </td>
            </tr>
            <tr valign="top">
              <td height="19">&nbsp;</td>
              <td><div align="center">:</div></td>
              <td>
			  
	  <label>
	  <input name="hotspot" type="checkbox" id="hotspot" value="1" <?php
echo $cek_hotspot ?>>
      HOTSPOT
	  </label>  
			  
			  
		      </td>
            </tr>
            <tr valign="top">
              <td height="22">
			  
TANGGAL MULAI TAMPIL


</td>
              <td><div align="center">:</div></td>
              <td>
			  



			  
			  
<?php
if( $action=="EditData" ){

$tgltampil = $row_item->tgltampil;
$arr_tgltampil = explode("-",$tgltampil);

$d_tgltampil = $arr_tgltampil[2];
$m_tgltampil = $arr_tgltampil[1];
$y_tgltampil = $arr_tgltampil[0];

	$tgl_tampil_item_produk = "$m_tgltampil/$d_tgltampil/$y_tgltampil";
	$jam_tampil_item_produk = date("H");
	$menit_tampil_item_produk = date("i");
	
	
$tglselesaitampil = $row_item->tglselesaitampil;
$arr_tglselesaitampil = explode("-",$tglselesaitampil);

$d_tglselesaitampil = $arr_tglselesaitampil[2];
$m_tglselesaitampil = $arr_tglselesaitampil[1];
$y_tglselesaitampil = $arr_tglselesaitampil[0];

	$tgl_selesai_tampil_item_produk = "$m_tglselesaitampil/$d_tglselesaitampil/$y_tglselesaitampil";
	
	$jamtampil = $row_item->jamtampil;
	$arr_jamtampil = explode(":",$jamtampil);
	
	$jam_tampil_item_produk = $arr_jamtampil[0];
	$menit_tampil_item_produk = $arr_jamtampil[1];
	 

	$jamselesaitampil = $row_item->jamselesaitampil;
	$arr_jamselesaitampil = explode(":",$jamselesaitampil);
	
	$jam_selesai_tampil_item_produk = $arr_jamselesaitampil[0];
	$menit_selesai_tampil_item_produk = $arr_jamselesaitampil[1];
	 


}else{

	$tgl_tampil_item_produk =date("m/d/Y");
	$jam_tampil_item_produk = date("H");
	$menit_tampil_item_produk = date("i");

	$tgl_selesai_tampil_item_produk =date("m/d/Y");
	
	$jam_selesai_tampil_item_produk = date("H");
	$menit_selesai_tampil_item_produk = date("i");

}

?>
<input name='tgltampil' type="text" id="inputField_tampil"  value='<?php
echo $tgl_tampil_item_produk ?>' 
style="background-image:url(images/calendar.png); background-position:right; background-repeat:no-repeat;">



JAM TAMPIL : 
<input name='jamtampil' type='text' id="jamtampil" value='<?php
echo $jam_tampil_item_produk ?>' size='3' maxlength='2'>
<input name='menittampil' type='text' id="menittampil" value='<?php
echo $menit_tampil_item_produk ?>' size='3' maxlength='2'>
<br>
		

  </td>
            </tr>
			
            <tr valign="top">
              <td height="22">
			  
			  TANGGAL SELESAI TAMPIL 
			  
			  
			  </td>
              <td><div align="center">:</div></td>
              <td>
			  


			  
			  

<input name='tglselesaitampil' type="text" id="inputField_tidaktampil" value='<?php
echo $tgl_selesai_tampil_item_produk ?>' 
style="background-image:url(images/calendar.png); background-position:right; background-repeat:no-repeat;">


JAM SELESAI : 
<input name='jamselesaitampil' type='text' id="jamselesaitampil" value='<?php
echo $jam_selesai_tampil_item_produk ?>' size='3' maxlength='2'>
<input name='menitselesaitampil' type='text' id="menitselesaitampil" value='<?php
echo $menit_selesai_tampil_item_produk ?>' size='3' maxlength='2'>
<br>
  
			  
			  </td>
            </tr>


            <tr>
              <td height="22">MATA UANG </td>
              <td><div align="center">:</div></td>
              <td>


<?php
if($row_item->matauang == ""){
	$matauang = "USD";
}else{
	$matauang = $row_item->matauang;
}
?>

			  <input name='matauang' type='text'  value='<?php
echo $matauang ?>'> 
                * USD / IDR 
				
				
				
				</td>
            </tr>
            <tr>
              <td>HARGA</td>
              <td><div align="center">:</div></td>
              <td> 
                <input name='harga' type='text'  value='<?php
echo $row_item->harga ?>'> </td>
            </tr>


				
				
          </table>
          <table width='98%'  border='0' cellpadding='0' cellspacing='0'>
            <tr>
              <td>
                <div align='left'>
                  <hr class='line_box'>
              </div></td>
            </tr>
            <tr>
              <td>


<?php
if( $action == "EditData" )
{

	if( $row_item->gambarkecil == "" ){

	}else{
	$Delete_gambar_item = "produk_proses_item.php?idkategori=$idkategori&idsubkategori=$idkategorisub&id=$id&action=item_updateimage";
?>
                <div align='left'> <img src='../<?php
echo $row_item->direktorigambar ?><?php
echo $row_item->gambarbesar ?>' width='300'> <br>
                    <br>
                  GAMBAR UTAMA DI WEB SITES <br>
                  <br>
                  <img src='../<?php
echo $row_item->direktorigambar ?><?php
echo $row_item->gambarkecil ?>' width='100'> <br>
                  <br>
                  GAMBAR UTAMA UNTUK DI WEB MOBILE <br>
                  <br>
                  <a href='<?php
echo $Delete_gambar_item ?>'> <b>Delete GAMBAR UTAMA</b> </a>
<?php
} 
}
?>
</div>
			  

			  </td>
            </tr>
          </table>
          <table width='98%'  cellpadding='2' cellspacing='0' border='0'>
            <tr>
              <td>
                <p align='left'>
                  <input type='submit' name='Submit2' value='<?php
echo $SubmitButtonItemproduk ?>'>
                  <?php
echo $Tombol_CANCEL ?> </p></td>
            </tr>
            <tr>
              <td>





<input name='id' type='hidden'  value='<?php
echo $row_item->id ?>'>
<input name='idupline' type='hidden'  value='<?php
echo $row_item->idupline ?>'>


<input name='judulinggris' type='hidden'  value='<?php
echo $row_item->judulinggris ?>'>
<input name='subjudulinggris' type='hidden'  value='<?php
echo $row_item->subjudulinggris ?>'>
<input name='previewinggris' type='hidden'  value='<?php
echo $row_item->previewinggris ?>'>
<input name='deskripsiinggris' type='hidden'  value='<?php
echo $row_item->deskripsiinggris ?>'>


<input name='timeunix' type='hidden'  value='<?php
echo $row_item->timeunix ?>'>


<input name='gambarkecil' type='hidden'  value='<?php
echo $row_item->gambarkecil ?>'>
<input name='gambarbesar' type='hidden'  value='<?php
echo $row_item->gambarbesar ?>'>


<input name='imagelogo' type='hidden'  value='<?php
echo $row_item->imagelogo ?>'>
<input name='direktorigambar' type='hidden'  value='<?php
echo $row_item->direktorigambar ?>'>
<input name='linkjudul' type='hidden'  value='<?php
echo $row_item->linkjudul ?>'>


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