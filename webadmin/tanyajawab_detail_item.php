<?php
$KodeKeamananhalaman  = "token_tanyajawab";
$KodeKeamananhalaman_Keterangan = "ACCESS DENIED.";
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
	
	include"access_denied.php";
	
}else{

?>

<?php
$id = $_GET['id'];
$idkategori = $_GET['idkategori'];
$idsubkategori = $_GET['idsubkategori'];

$row_kanal = Select_Detail_Kategori_tanyajawab( $tbl_tanyajawabkategori, $idkategori );
$row_subkanal = Select_Detail_KategoriSub_tanyajawab( $tbl_tanyajawabkategorisub, $idsubkategori );
$row_item = Select_Detail_Item_tanyajawab($tbl_tanyajawab, $id);
$row_user_posting = Users_Select_Detail( $tbl_users, $row_item->idusers );
$row_itemkomentar = "";
$row_itemlampiran = "";


$tanyajawabHitKategori = tanyajawabKanalDiLihat( $tbl_tanyajawabkategori, $idkategori );
$tanyajawabHitKategoriSub = tanyajawabSubKanalDiLihat( $tbl_tanyajawabkategorisub, $idkategorisub );

$detail_item_tanyajawab = Select_Detail_Item_tanyajawab($tbl_tanyajawab, $id);
$Link_Judul = potong_judul($data_terkait->judul);
//if($_COOKIE["tanyajawabitemdilihat"]=="tanyajawabhitcounter_$Link_Judul"){ /* Counter Item Berita */

//}else{
$tanyajawabHitItem = tanyajawabDiLihat( $tbl_tanyajawab, $id );
 	// Simpan Cookies Hit Item
 	//$values = "tanyajawabhitcounter_$Link_Judul";
 	//$durasiCokies = 500 + time(); // 5000 Detik
 	//setcookie( "tanyajawabitemdilihat", $values, $durasiCokies );
//}


	if( $row_item->statustampil == "1"){ /* Status Tampil */
		$cek_statustampil = "Tampil";
	}else{
		$cek_statustampil = "Tidak Tampil";
	}
	
	if( $row_item->pilihan  == "1"){ /* Status Tampil di Pilihan */
		$cek_menutampil = "Tampil Di Pilihan";
	}else{
		$cek_menutampil = "Tidak Tampil Di Pilihan";
	}
	
	
	if( $row_item->headline  == "1"){ /* Status Tampil di Headline */
		$cek_homehalamantampil = "Tampil Di Headline";
	}else{
		$cek_homehalamantampil = "Tidak Tampil Di Headline";
	}
	
	
	if( $row_item->hotspot   == "1"){ /* Status Tampil di Hotspot */
		$cek_homehalamantampil = "Tampil Di Hotspot";
	}else{
		$cek_homehalamantampil = "Tidak Tampil Di Hotspot";
	}

$e_idusers = $row_item->idusers;
$e_idadmin = $row_item->idadmin;

?>
<hr>
<div class="Font_Item_Judul">
Detail  <?php
echo stripslashes($row_item->judul) ?>
</div>
<?php
if( $sesi_aksesmodul == "SYSTEM_ADMINISTRATOR" ){
?>
<?php
echo harienglish($row_item->tglpost) ?>, <?php
echo bulanenglish($row_item->tglpost) ?> | <?php
echo $row_item->jampost ?>
<?php
} ?>
<hr>

<div class='isitanyajawab'>
<?php
echo htmlspecialchars_decode($row_item->deskripsi) ?>
</div>

<?php
if( $idkategori == 0 ){ 
$tanyajawabkategori_id = 0;
$tanyajawabkategori_keterangan = "<font color='red'> TANPA KATEGORI </font>";
}else{

$tanyajawabkategori_keterangan = $row_kanal->keterangan;
$tanyajawabkategori_keterangan = strtoupper($tanyajawabkategori_keterangan);

}
?>
<?php
echo $tanyajawabkategori_keterangan ?>


&nbsp; | &nbsp;

<?php
if( $idsubkategori == 0 ){ 

	$tanyajawabsubkategori_id = 0;
	$tanyajawabsubkategori_keterangan = "<font color='red'> TANPA SUB KATEGORI </font>";

}else{

	$tanyajawabsubkategori_keterangan = $row_subkanal->keterangan;
	$tanyajawabsubkategori_keterangan = strtoupper($tanyajawabsubkategori_keterangan);
}
?>

<br>

<?php
echo $tanyajawabsubkategori_keterangan ?>

<?php
if( $row_item->gambarbesar == "" ){
$gambar_itemtanyajawab = " ";
}else{
$root_file = "../";
$show_gambar = $root_file . $row_item->direktorigambar . $row_item->gambarbesar;
$gambar_itemtanyajawab = "<img src='$show_gambar' border='0' width='400' height='300'>";
}
?>
<br>
Hit  :  <?php
echo $row_item->dilihat ?> 

<br>

<?php
} ?>