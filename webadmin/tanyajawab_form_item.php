<?php
$KodeKeamananhalaman  = "token_tanyajawab";
$KodeKeamananhalaman_Keterangan = "ACCESS DENIED.";
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
$FormtanyajawabDataItem = "tanyajawab_proses_item.php?action=item_updatedata";
$SubmitButtonItemtanyajawab = "UPDATE DATA......";
$Tombol_CANCEL = "<input type='reset' name='reset' value='CANCEL' class='button' onClick=\"javascript:location.replace('tanyajawab_item.php?idkategori=$idkategori&idsubkategori=$idsubkategori&id=$id&action=EditData')\" >";

$id = $_GET['id'];
$idkategori = $_GET['idkategori'];
$idsubkategori = $_GET['idsubkategori'];
$row_kanal = Select_Detail_Kategori_tanyajawab( $tbl_tanyajawabkategori, $idkategori );
$row_subkanal = Select_Detail_KategoriSub_tanyajawab( $tbl_tanyajawabkategorisub, $idsubkategori );


$row_item = Select_Detail_Item_tanyajawab($tbl_tanyajawab, $id);


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
	
	
	if( $row_item->headline  == "1"){ /* Status Tampil di Headline */
		$cek_headline = "checked";
	}else{
		$cek_headline = "";
	}
	
	
	if( $row_item->hotspot   == "1"){ /* Status Tampil di Hotspot */
		$cek_hotspot = "checked";
	}else{
		$cek_hotspot = "";
	}

$e_idusers = $row_item->idusers;
$e_idadmin = $row_item->idadmin;

if($row_item->bahasa=="IND"){
$Ket_Bahasa = "Indonesia";
}else{
$Ket_Bahasa = "Inggris";
}

}



if( $action=="FormEntry" ){

$FormtanyajawabDataItem = "tanyajawab_proses_item.php?action=item_tambahdata";
$SubmitButtonItemtanyajawab = "ADD DATA...";
$Tombol_CANCEL = "<input type='reset' name='reset' value='CANCEL' class='button' onClick=\"javascript:location.replace('tanyajawab_item.php?idkategori=$idkategori&idsubkategori=$idsubkategori&action=FormEntry')\" >";

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
echo $FormtanyajawabDataItem ?>' method='post' enctype="multipart/form-data">
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
$result_kanaltanyajawab = Select_All_Kategori_tanyajawab_By_Urutan( $tbl_tanyajawabkategori );
while($row_kanaltanyajawab = mysql_fetch_object( $result_kanaltanyajawab )){
?>
<option value='<?php
echo $row_kanaltanyajawab->id ?>' onClick="Ambil_SubKategori(<?php
echo $row_kanaltanyajawab->id ?>,<?php
echo $idsubkategori ?>)"><?php
echo strtoupper($row_kanaltanyajawab->keterangan); ?></option>
<?php
}
?>
</select>
<?php
} ?>



<?php
if( $action=="FormEntry"){ /* Jika tida ada action */

$idkategori = $_GET["idkategori"];
$r_datatanyajawab_kategori = Select_Kategori_tanyajawab_By_Id( $tbl_tanyajawabkategori, $idkategori );
$r_tanyajawabkategori = mysql_fetch_object($r_datatanyajawab_kategori);

$tanyajawabkategori_id = $r_tanyajawabkategori->id;

if( $idkategori == 0 ){ 
$tanyajawabkategori_id = 0;
$tanyajawabkategori_keterangan = "<font color='red'> TANPA KATEGORI </font>";
}else{

$tanyajawabkategori_keterangan = $r_tanyajawabkategori->keterangan;
$tanyajawabkategori_keterangan = strtoupper($tanyajawabkategori_keterangan);

}
?>
<?php
echo $tanyajawabkategori_keterangan ?>
<input name='idkategori' type='hidden'  value='<?php
echo $tanyajawabkategori_id ?>'>
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
	$r_tanyajawabsubkategori = Select_SubKategori_tanyajawab_By_Id( $tbl_tanyajawabkategorisub, $idsubkategori );
	 
	$tanyajawabsubkategori_id = $r_tanyajawabsubkategori->id;

if( $idsubkategori == 0 ){ 
	$tanyajawabsubkategori_id = 0;
	$tanyajawabsubkategori_keterangan = "<font color='red'> TANPA SUB KATEGORI </font>";
}else{

	$tanyajawabsubkategori_keterangan = $r_tanyajawabsubkategori->keterangan;
	$tanyajawabsubkategori_keterangan = strtoupper($tanyajawabsubkategori_keterangan);
}
?>
<b>Sub Kategori :</b> <?php
echo $tanyajawabsubkategori_keterangan ?>
<input name='idkategorisub' type='hidden'  value='<?php
echo $tanyajawabsubkategori_id ?>'>
<?php
}
?>
                    <input name='kodekategori' type='hidden' id="kodekategori"  value='N/A' size='10'>
                    <br>
                    <b> </b><br>
                    <input name='bahasa' type='hidden' value='IND'>
                    <b> Judul : </b><br>
                    <input name='judul' type='text' id="judul"  value='<?php
echo strip_tags($row_item->judul) ?>' size='100%'>
                    <br>
                  * Jumlah kata pthere is judul maksimum : 15 kata. <br>
                  <br>
                  <b> </b><b>Keterangan : </b><br>
                  <textarea name="subjudul" cols="98%"><?php
echo  trim(strip_tags($row_item->subjudul)) ?></textarea>
                </p>
                <p><br>
                    <b> Preview isi : </b><br>
                    <textarea name='preview' cols='98%' rows='5' id="preview"><?php
echo  trim(strip_tags($row_item->preview)) ?></textarea>
                    <br>
                  * Jumlah kata pthere is preview isi maksimum : 25 kata. <br>
                  <br>
                  <b> Deskripsi : </b> <br>
                  <?php
include_once("plugin/content_editor.php");
include_once("plugin/editor.php");
?>
                  <textarea name='deskripsi' cols='98%' rows='20' id="content" class="jqrte_popup" > <?php
echo strip_tags($row_item->deskripsi) ?> </textarea>
                  <br>
                  <br>
                  <b>Keyword :</b> <br>
                  <input name="keyword" type="text" id="keyword" value="<?php
echo $row_item->keyword ?>" size="50" maxlength="50">
                  <br>
                  * Maksimum 50 Karakter. </p></td>
            </tr>
          </table>
          <hr class='line_box'>
          <table width='98%'  border='0' cellpadding='0' cellspacing='0'>
            <tr>
              <td>URUTAN ITEM</td>
              <td align="center">:</td>
              <td>
                <?php
/* Query urutan berdasarkan jumlah item */
$hitung_tanyajawab_1 = GetJML_tanyajawabItem_BacaDataListing_All( $tbl_tanyajawab );

$hitung_tanyajawab = $hitung_tanyajawab_1 + 1;

/* Jika Mode EDIT Data */
if( $action=="EditData" ){
	$urutan_tanyajawab = $row_item->urutan;
}else{
	$urutan_tanyajawab = $hitung_tanyajawab;
}

?>
                <select name='urutan'>
                  <option value='<?php
echo $urutan_tanyajawab; ?>'> <?php
echo $urutan_tanyajawab; ?></option>
                  <?php
for($i=0; $i<=$hitung_tanyajawab; $i++){
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
            <tr>
              <td width="48%">UPLOAD GAMBAR </td>
              <td width="3%"><div align="center">:</div></td>
              <td width="49%"><input name="file123" type="file" id="file123"></td>
            </tr>
            <tr>
              <td>CAPTION GAMBAR </td>
              <td><div align="center">:</div></td>
              <td><input name="keterangangambar" type="text" id="keterangangambar" value="<?php
echo $row_item->keterangangambar ?>" size="50">
                <input name='jamtampil' type='hidden' id="jamtampil2" value='<?php
echo $JAM_TAMPIL_ITEM_tanyajawab ?>' size='3' maxlength='2'>
                <input name='menittampil' type='hidden' id="menittampil2" value='<?php
echo $MENIT_TAMPIL_ITEM_tanyajawab ?>' size='3' maxlength='2'>
                <input name='tgltampil' type="hidden" value='<?php
echo $TGL_TAMPIL_ITEM_tanyajawab ?>' ></td>
            </tr>
            <?php
if( $action=="EditData" ){

$tgltampil = $row_item->tgltampil;
$arr_tgltampil = explode("-",$tgltampil);

$d_tgltampil = $arr_tgltampil[2];
$m_tgltampil = $arr_tgltampil[1];
$y_tgltampil = $arr_tgltampil[0];

	$TGL_TAMPIL_ITEM_tanyajawab = "$m_tgltampil/$d_tgltampil/$y_tgltampil";
	$JAM_TAMPIL_ITEM_tanyajawab = date("H");
	$MENIT_TAMPIL_ITEM_tanyajawab = date("i");

}else{

	$TGL_TAMPIL_ITEM_tanyajawab =date("m/d/Y");
	$JAM_TAMPIL_ITEM_tanyajawab = date("H");
	$MENIT_TAMPIL_ITEM_tanyajawab = date("i");

}


?>
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
	$Delete_gambar_item = "tanyajawab_proses_item.php?idkategori=$idkategori&idsubkategori=$idkategorisub&id=$id&action=item_updateimage";
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
                  GAMBAR UTAMA UNTUK DI WAP & RSS <br>
                  <br>
                  <a href='<?php
echo $Delete_gambar_item ?>'> <b>Delete GAMBAR UTAMA</b> </a>
                  <?php
} 
			   
 
}
?>
              </div></td>
            </tr>
          </table>
          <table width='98%'  cellpadding='2' cellspacing='0' border='0'>
            <tr>
              <td>
                <p align='left'>
                  <input type='submit' name='Submit2' value='<?php
echo $SubmitButtonItemtanyajawab ?>'>
                  <?php
echo $Tombol_CANCEL ?> </p></td>
            </tr>
            <tr>
              <td>
                <input name='id' type='hidden'  value='<?php
echo $row_item->id ?>'>
                <input name='idupline' type='hidden'  value='<?php
echo $row_item->idupline ?>'>
                <input name='gambarkecil' type='hidden'  value='<?php
echo $row_item->gambarkecil ?>'>
                <input name='gambarbesar' type='hidden'  value='<?php
echo $row_item->gambarbesar ?>'>
                <input name='imagelogo' type='hidden'  value='<?php
echo $row_item->imagelogo ?>'>
                <input name='idusers' type='hidden'  value='<?php
echo $e_idusers ?>'>
                <input name='idadmin' type='hidden'  value='<?php
echo $e_idadmin ?>'>
                <input name='dikomentari' type='hidden' value='<?php
echo $row_item->dikomentari ?>'>
                <input name='dilampirkan' type='hidden' value='<?php
echo $row_item->dilampirkan ?>'>
                <input name='dilihat' type='hidden' value='<?php
echo $row_item->dilihat ?>'>
                <input name='direktorigambar' type='hidden'  value='<?php
echo $row_item->direktorigambar ?>'>
                <input name="statustampil" type="hidden" value="1">
              </td>
            </tr>
          </table>
          <br>
        </form>
    </div></td>
  </tr>
</table>
<!-- END FORM ITEM -->
               

<?php
} ?>