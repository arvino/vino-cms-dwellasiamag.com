<?php
$KodeKeamananhalaman  = "token_peopledirectory";
$KodeKeamananhalaman_Keterangan = "ACCESS DENIED !";
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
	
	include"access_denied.php";
	
}else{

?>

<?php
$id = $_GET['id'];
$idkategori = $_GET['idkategori'];
$idsubkategori = $_GET['idsubkategori'];

$row_kanal = Select_Detail_Kategori_peopledirectory( $tbl_peopledirectorykategori, $idkategori );
$row_subkanal = Select_Detail_KategoriSub_peopledirectory( $tbl_peopledirectorykategorisub, $idsubkategori );
$row_item = Select_Detail_Item_peopledirectory($tbl_peopledirectory, $id);
$row_user_posting = Users_Select_Detail( $tbl_users, $row_item->idusers );
$row_itemkomentar = "";
$row_itemlampiran = "";


$peopledirectoryHitKategori = peopledirectoryKanalDiLihat( $tbl_peopledirectorykategori, $idkategori );
$peopledirectoryHitKategoriSub = peopledirectorySubKanalDiLihat( $tbl_peopledirectorykategorisub, $idkategorisub );

$detail_item_peopledirectory = Select_Detail_Item_peopledirectory($tbl_peopledirectory, $id);
$Link_Judul = potong_judul($data_terkait->judul);
//if($_COOKIE["peopledirectoryitemdilihat"]=="peopledirectoryhitcounter_$Link_Judul"){ /* Counter Item Berita */

//}else{
$peopledirectoryHitItem = peopledirectoryDiLihat( $tbl_peopledirectory, $id );
 	// Simpan Cookies Hit Item
 	//$values = "peopledirectoryhitcounter_$Link_Judul";
 	//$durasiCokies = 500 + time(); // 5000 Detik
 	//setcookie( "peopledirectoryitemdilihat", $values, $durasiCokies );
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
<br>


<?php
if( $idkategori == 0 ){ 
$peopledirectorykategori_id = 0;
$peopledirectorykategori_keterangan = "<font color='red'> TANPA KATEGORI </font>";
}else{

$peopledirectorykategori_keterangan = $row_kanal->keterangan;
$peopledirectorykategori_keterangan = strtoupper($peopledirectorykategori_keterangan);

}
?>
<?php
echo $peopledirectorykategori_keterangan ?>


&nbsp; | &nbsp;

<?php
if( $idsubkategori == 0 ){ 

	$peopledirectorysubkategori_id = 0;
	$peopledirectorysubkategori_keterangan = "<font color='red'> NO SUB SECTION </font>";

}else{

	$peopledirectorysubkategori_keterangan = $row_subkanal->keterangan;
	$peopledirectorysubkategori_keterangan = strtoupper($peopledirectorysubkategori_keterangan);
}
?>



<?php
echo $peopledirectorysubkategori_keterangan ?>
<br>
<br>



<div class="Font_Item_Judul">
<?php
echo stripslashes($row_item->judul) ?>
</div>
<br>

<?php
if( $row_item->gambarbesar == "" ){
	$gambar_itempeopledirectory = " ";
}else{
	$root_file = "../";
	$show_gambar = $root_file . $row_item->direktorigambar . $row_item->gambarbesar;
	$gambar_itempeopledirectory = "<img src='$show_gambar' border='0' width='400' height='300'>";
}
?>
<?php
echo $gambar_itempeopledirectory ?>
<br>
<br>

<?php
if( $sesi_aksesmodul == "admin_system" ){
?>
	Post date  : <?php
echo harienglish($row_item->tglpost) ?>, <?php
echo bulanenglish($row_item->tglpost) ?> | <?php
echo $row_item->jampost ?>
<?php
} ?>
<br>
<br>
<br>
<?php
echo $row_item->subjudul ?>
<br>
<br>

<div class='isipeopledirectory'>
<?php
echo htmlspecialchars_decode($row_item->deskripsi) ?>
</div>
<br>
<br>


HIT COUNTER : <?php
echo $row_item->dilihat ?> 

<br>
<br>

<?php
} ?>