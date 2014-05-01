<?php
$KodeKeamananhalaman  = "token_produk";
$KodeKeamananhalaman_Keterangan = "ACCESS DENIED !";
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
	
	include"access_denied.php";
	
}else{

?>

<?php
$id = $_GET['id'];
$idkategori = $_GET['idkategori'];
$idsubkategori = $_GET['idsubkategori'];

$row_kanal = Select_Detail_Kategori_produk( $tbl_produkkategori, $idkategori );
$row_subkanal = Select_Detail_KategoriSub_produk( $tbl_produkkategorisub, $idsubkategori );
$row_item = Select_Detail_Item_produk($tbl_produk, $id);
$row_user_posting = Users_Select_Detail( $tbl_users, $row_item->idusers );
$row_itemkomentar = "";
$row_itemlampiran = "";


$produkHitKategori = produkKanalDiLihat( $tbl_produkkategori, $idkategori );
$produkHitKategoriSub = produkSubKanalDiLihat( $tbl_produkkategorisub, $idkategorisub );

$detail_item_produk = Select_Detail_Item_produk($tbl_produk, $id);
$Link_Judul = potong_judul($data_terkait->judul);
//if($_COOKIE["produkitemdilihat"]=="produkhitcounter_$Link_Judul"){ /* Counter Item Berita */

//}else{
$produkHitItem = produkDiLihat( $tbl_produk, $id );
 	// Simpan Cookies Hit Item
 	//$values = "produkhitcounter_$Link_Judul";
 	//$durasiCokies = 500 + time(); // 5000 Detik
 	//setcookie( "produkitemdilihat", $values, $durasiCokies );
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
$produkkategori_id = 0;
$produkkategori_keterangan = "<font color='red'> TANPA KATEGORI </font>";
}else{

$produkkategori_keterangan = $row_kanal->keterangan;
$produkkategori_keterangan = strtoupper($produkkategori_keterangan);

}
?>
<?php
echo $produkkategori_keterangan ?>


&nbsp; | &nbsp;

<?php
if( $idsubkategori == 0 ){ 

	$produksubkategori_id = 0;
	$produksubkategori_keterangan = "<font color='red'> TANPA SUB KATEGORI </font>";

}else{

	$produksubkategori_keterangan = $row_subkanal->keterangan;
	$produksubkategori_keterangan = strtoupper($produksubkategori_keterangan);
}
?>



<?php
echo $produksubkategori_keterangan ?>
<br>
<br>



<div class="Font_Item_Judul">
<?php
echo stripslashes($row_item->judul) ?>
</div>
<br>

<?php
if( $row_item->gambarbesar == "" ){
	$gambar_itemproduk = " ";
}else{
	$root_file = "../";
	$show_gambar = $root_file . $row_item->direktorigambar . $row_item->gambarbesar;
	$gambar_itemproduk = "<img src='$show_gambar' border='0' width='400' height='300'>";
}
?>
<?php
echo $gambar_itemproduk ?>
<br>
<br>

<?php
if( $sesi_aksesmodul == "admin_system" ){
?>
	Tanggal Post : <?php
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

<div class='isiproduk'>
<?php
echo htmlspecialchars_decode($row_item->deskripsi) ?>
</div>
<br>
<br>


Hit Counter :  <?php
echo $row_item->dilihat ?> 

<br>
<br>

<?php
} ?>