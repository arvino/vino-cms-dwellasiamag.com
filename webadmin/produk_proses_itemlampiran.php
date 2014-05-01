<?php
session_start();  /* CEK SESSION LOGIN */
$sesi_id = $_SESSION['users_id'];
$sesi_idpegawai = $_SESSION['users_idpegawai'];
$sesi_username = $_SESSION['users_username'];
$sesi_email = $_SESSION['users_email'];

if( $sesi_id == "" && $sesi_username == "" && $sesi_email == ""){
header('location:users_login.php?pesan_error=PLEASE LOGIN FIRST.');
}else{

include"kelas_function.php";
 
/* ---- */

if( $action=='itemlampiran_tambahdata' ){ /* KANAL produk TAMBAH DATA */



if( $judul =='' ){

	header("location:produk_item_lampiran.php?iditem=$idkonten&pesan_error=PLEASE FILL THE TITLE"); /* Kembali ke halaman  sebelumnya */

}else{

$id = produkItemFile_CreateID( $tbl_produkfile ); 

$idkonten = $_POST['idkonten'];

$urutan = $_POST['urutan'];

$judul = htmlspecialchars($_POST['judul']);

$preview = htmlspecialchars($_POST['isi']);

$preview = substr($preview,0,30);

$isi = htmlspecialchars($_POST['isi']);

$statustampil = $_POST['statustampil'];
$statustampil = 1;

$tanggalpost = $tanggalhariini;

$jampost = $jamsaatini;

$userposting  = $sesi_id;

$linkjudul = $judul;

$keyword = $judul;

	/* STATUS TAMPIL ITEM LAMPIRAN produk */
	if( $statustampil  == "" || $statustampil  == "none"){
		$statustampil  = 0;
	}else{
		$statustampil  = 1;
	}
	$statustampil = $statustampil ;
	$hotspot = $statustampil;
	$hitcounter  = 1;


$nama_file = $_FILES['fileupload']['name'];
$temp_file = $_FILES['fileupload']['tmp_name']; 
$ukuran_file = $_FILES['fileupload']['size'];


if( $fileupload == "" ){

		header("location:produk_item_lampiran.php?iditem=$idkonten&pesan_error=THERE IS NO FILE TO UPLOAD"); /* Kembali ke halaman  sebelumnya */

}else{

	
$allowedExtensions = array(
			"bmp","jpg","jpeg","gif","png","JPG","JPEG","PNG","GIF","BMP",
			"doc","xls","pdf","zip","rar","DOC","XLS","PDF","ZIP","RAR",
			"mp3", "wmv","midi","wav","MP3", "WMV","MIDI","WAV",
			"flv","3gp","FLV","3GP","iso","ISO","exe","EXE","txt","TXT",
			"rtf","RTF","ppt","PPT"
);
if (!in_array(end(explode(".", strtolower($nama_file))), $allowedExtensions)) {	
		
	header("location:produk_item_lampiran.php?iditem=$idkonten&pesan_error=FILE TYPE IS NOT PERMIT"); /* Kembali ke halaman  sebelumnya */

}else{


	$loc_root = "../";	
	
	$loc_file = "filemodul/produk/file_itemlampiran/$idkonten/";
	
	$location_dir =  $loc_root . $loc_file;
	
	if (!is_dir( $location_dir )) {  
		Create_Direktori( $location_dir );
	}

	$uploaddir = $location_dir;

	$new_name = $judul;
	
	$imagefile =  $loc_file;
	
 	$FormatFile = end(explode(".", $nama_file));
	
	$tipefile = strtolower($FormatFile);

	$namafile = Upload_File( $new_name, $uploaddir, $temp_file, $ukuran_file, $nama_file );

	$gambarpreview = "N/A";
	
	$gambar = $gambarpreview;

	$direktorifile  = $loc_file;

$statuslampiran = "1";
produkItem_UpdateFileLampiran( $tbl_produkfile, $idkonten , $statuslampiran );

produkItemFile_TambahData(
		$tbl_produkfile,
		$id, $idkonten, $urutan,
		$judul, $preview, $isi,
		$namafile, $tipefile, $gambar,
		$gambarpreview, $statustampil,  
		$tanggalpost, $jampost, $direktorifile,
		$userposting, $hitcounter, $linkjudul,
		$keyword

	);  
	 
	header("location:produk_item_lampiran.php?iditem=$idkonten&pesan_error=SUCCESS ADD DATA !"); /* Kembali ke halaman  sebelumnya */ 

}
}}}  

/* ---- */

if( $action=="itemlampiran_updatedata" ){  


if( $judul =='' ){

	header("location:produk_item_lampiran.php?iditem=$idkonten&pesan_error=PLEASE FILL THE TITLE"); /* Kembali ke halaman  sebelumnya */

}else{

$id = $_POST['id'];

$idkonten = $_POST['idkonten'];
$urutan = $_POST['urutan'];
$judul = htmlspecialchars($_POST['judul']);
$preview = htmlspecialchars($_POST['isi']);
$preview = substr($preview,0,20);
$isi = htmlspecialchars($_POST['isi']);

$statustampil = $_POST['statustampil'];

$tanggalpost = $tanggalhariini;
$jampost = $jamsaatini;

$userposting  = $sesi_id;

$linkjudul = $judul;
$keyword = $judul;

	/* STATUS TAMPIL ITEM LAMPIRAN produk */
	if( $statustampil  == "" || $statustampil  == "none"){
		$statustampil  = 0;
	}else{
		$statustampil  = 1;
	}
	$statustampil = $statustampil ;
	$hotspot = $statustampil;
	$hitcounter  = 1;


$nama_file = $_FILES['fileupload']['name'];
$temp_file = $_FILES['fileupload']['tmp_name']; 
$ukuran_file = $_FILES['fileupload']['size'];


if( $fileupload == "" ){

		$namafile = $_POST['namafile'];
		$tipefile = $_POST['tipefile'];
		$direktorifile = $_POST['direktorifile'];

}else{

	
$allowedExtensions = array(
			"bmp","jpg","jpeg","gif","png","JPG","JPEG","PNG","GIF","BMP",
			"doc","xls","pdf","zip","rar","DOC","XLS","PDF","ZIP","RAR",
			"mp3","mp4","wmv","midi","wav","MP3","MP4","WMV","MIDI","WAV",
			"flv","3gp","FLV","3GP","iso","ISO","exe","EXE"
);
if (!in_array(end(explode(".", strtolower($nama_file))), $allowedExtensions)) {	
		
	header("location:produk_item_lampiran.php?iditem=$idkonten&pesan_error=FILE TYPE IS NOT PERMIT"); /* Kembali ke halaman  sebelumnya */

}else{

	$loc_root = "../";	
	
	$direktorifile = $_POST['direktorifile'];
	$namafile = $_POST['namafile'];
	$Delete_filelampiran = $loc_root . $direktorifile . $namafile;
	//@unlink($Delete_filelampiran);


	$loc_file = "filemodul/produk/file_itemlampiran/$idkonten/";
	$location_dir =  $loc_root . $loc_file;
	
	if (!is_dir( $location_dir )) {  
		Create_Direktori( $location_dir );
	}

	$uploaddir = $location_dir;

	$new_name = $judul;
	
	 
 	$FormatFile = end(explode(".", $nama_file));
	$tipefile = strtolower($FormatFile);

	$namafile = Upload_File( $new_name, $uploaddir, $temp_file, $ukuran_file, $nama_file );

	$gambarpreview = "N/A";
	$gambar = $gambarpreview;

	$direktorifile  = $loc_file;

}}


$statuslampiran = "1";
produkItem_UpdateFileLampiran( $tbl_produkfile, $idkonten , $statuslampiran );

produkItemFile_UpdateData(
		$tbl_produkfile,
		$id, $idkonten, $urutan,
		$judul, $preview, $isi,
		$namafile, $tipefile, $gambar,
		$gambarpreview, $statustampil, 
		$tanggalpost, $jampost, $direktorifile,
		$userposting, $hitcounter, $linkjudul,
		$keyword

	);
	 
	 	header("location:produk_item_lampiran.php?iditem=$idkonten&id=$id&action=EditData&pesan_error=UPDATE SUCCESSFULLY... !."); /* Kembali ke halaman  sebelumnya */

 }
}
	
/* ---- */

	
if( $action=="itemlampiran_statustampil" ){  
	$id = $_GET['id'];
	$statustampil = $_GET['status'];
	 
	$detail_itemlampiran = ViewDetail_produkFileLampiran( $tbl_produkfile, $id );
	$idkategori = $row_kanal->id;
	SetStatusTampil_produkItemLampiran( $tbl_produkfile, $id, $statustampil );
	header("location:produk_item_lampiran.php?iditem=$iditem&pesan_error=SUCCESS PUBLISH DATA.");  
}

 
if( $action=="itemlampiran_hapusdata" ){  

	$id = $_GET['id'];
	$iditem = $_GET['iditem'];
	 
	$detail_itemlampiran = ViewDetail_produkFileLampiran( $tbl_produkfile, $id );
 
	$root_file = "../";
	$file_itemlampiran = $detail_itemlampiran->direktorifile . $detail_itemlampiran->namafile;
	
	$iditem = $detail_itemlampiran->idkonten;
	$id = $detail_itemlampiran->id;
	
	unlink( $root_file . $file_itemlampiran );
	
	Delete_produkFileLampiran( $tbl_produkfile, $id);
	
	$statuslampiran = "0";
	
	produkItem_UpdateFileLampiran( $tbl_produkfile, $idkonten , $statuslampiran );
	
	
	header("location:produk_item_lampiran.php?iditem=$iditem&pesan_error=SUCCESS DELETE DATA." );  
} 
	
 
}/* End Session Filter */
?>