<?php
/* PUSTAKA FUNGSI QUERY DATABASE PADA TABEL ITEM produk */
/* 


id, idupline, idkategori,
idkategorisub,judul,
judulinggris,subjudul,
subjudulinggris,preview,
previewinggris,deskripsi,
deskripsiinggris,tglpost,
jampost,tgltampil,
jamtampil,timeunix,
gambarkecil,gambarbesar,
keterangangambar,imagelogo,
matauang,harga,
dikomentari,dilampirkan,
dilihat,statustampil, $pilihan, $hotspot,
idusers,idadmin,
direktorigambar,linkjudul,
keyword
  


*/  
	/* Fungsi Buat ID Otomatis Untuk ID produk Item . */
	function produkItem_CreateID( $tbl_produk ){
		$sql = mysql_query("SELECT * FROM $tbl_produk ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$UID = $data["id"];
		$UID = $UID+1;  
		return $UID;
	}	 

 	/*  Fungsi Periksa Judul produk Kategori */
	function produkItem_PeriksaJudul( $tbl_produk, $judul, $judulinggris ){
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE judul = '$judul' AND judulinggris = '$judulinggris'");
		return $sql;	
	}



 
 	/* FUNGSI TAMBAH DATA ITEM PORDUK */
	function produkItem_TambahData(
		$tbl_produk,
			$id, $idupline, $idkategori,
			$idkategorisub, $judul,
			$judulinggris, $subjudul,
			$subjudulinggris, $preview,
			$previewinggris, $deskripsi,
			$deskripsiinggris, $tglpost,
			$jampost, $tgltampil, $jamtampil, 
			$tglselesaitampil, $jamselesaitampil, 
			$timeunix, $gambarkecil, $gambarbesar,
			$keterangangambar, $imagelogo,
			$matauang, $harga,
			$dikomentari, $dilampirkan,
			$dilihat, $statustampil, $pilihan, $hotspot,
			$idusers, $idadmin,
			$direktorigambar, $linkjudul,
			$keyword
	){

		$sql = mysql_query("INSERT INTO $tbl_produk
		(

				id, idupline, idkategori,
				idkategorisub, judul,
				judulinggris, subjudul,
				subjudulinggris, preview,
				previewinggris, deskripsi,
				deskripsiinggris, tglpost,
				jampost, tgltampil, jamtampil, 
				tglselesaitampil, jamselesaitampil, 
				timeunix, gambarkecil, gambarbesar,
				keterangangambar, imagelogo,
				matauang, harga,
				dikomentari, dilampirkan,
				dilihat, statustampil, pilihan, hotspot,
				idusers, idadmin,
				direktorigambar, linkjudul,
				keyword

		)VALUES(
	
				'$id', '$idupline', '$idkategori',
				'$idkategorisub', '$judul',
				'$judulinggris', '$subjudul',
				'$subjudulinggris', '$preview',
				'$previewinggris', '$deskripsi',
				'$deskripsiinggris', '$tglpost',
				'$jampost', '$tgltampil', '$jamtampil', 
				'$tglselesaitampil', '$jamselesaitampil', 
				'$timeunix', '$gambarkecil', '$gambarbesar',
				'$keterangangambar', '$imagelogo',
				'$matauang', '$harga',
				'$dikomentari', '$dilampirkan',
				'$dilihat', '$statustampil', '$pilihan', '$hotspot',
				'$idusers', '$idadmin',
				'$direktorigambar', '$linkjudul',
				'$keyword'
  
		)");
		return $sql;
	}
	
	
/* FUNGSI BACA DATA ITEM DETIL */
function produkItem_BacaDataDetil( $tbl_produk, $id ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE id = '$id'");
	$result = mysql_fetch_object($sql);
	return $result;
}



/* FUNGSI UPDATE DATA PRODUK ITEM */
function produkItem_UpdateData(
		$tbl_produk,
			$id, $idupline, $idkategori,
			$idkategorisub, $judul,
			$judulinggris, $subjudul,
			$subjudulinggris, $preview,
			$previewinggris, $deskripsi,
			$deskripsiinggris, $tglpost,
			$jampost, $tgltampil, $jamtampil, 
			$tglselesaitampil, $jamselesaitampil, 
			$timeunix, $gambarkecil, $gambarbesar,
			$keterangangambar, $imagelogo,
			$matauang, $harga,
			$dikomentari, $dilampirkan,
			$dilihat, $statustampil, $pilihan, $hotspot,
			$idusers, $idadmin,
			$direktorigambar, $linkjudul,
			$keyword
		){
		$sql = mysql_query(
		"
	UPDATE $tbl_produk SET 

				idupline = '$idupline', idkategori = '$idkategori',
				idkategorisub = '$idkategorisub', judul = '$judul',
				judulinggris = '$judulinggris', subjudul = '$subjudul',
				subjudulinggris = '$subjudulinggris', preview = '$preview',
				previewinggris = '$previewinggris', deskripsi = '$deskripsi',
				deskripsiinggris = '$deskripsiinggris', tglpost = '$tglpost',
				jampost = '$jampost', 
				
				tgltampil = '$tgltampil', 
				jamtampil = '$jamtampil', 
				
				tglselesaitampil = '$tglselesaitampil', 
				jamselesaitampil = '$jamselesaitampil', 
				
				timeunix = '$timeunix', gambarkecil = '$gambarkecil', gambarbesar = '$gambarbesar',
				keterangangambar = '$keterangangambar', imagelogo = '$imagelogo',
				matauang = '$matauang', harga = '$harga',
				dikomentari = '$dikomentari', dilampirkan = '$dilampirkan',
				dilihat = '$dilihat', statustampil = '$statustampil', pilihan = '$pilihan', hotspot = '$hotspot',
				idusers = '$idusers', idadmin = '$idadmin',
				direktorigambar = '$direktorigambar', linkjudul = '$linkjudul',
				keyword = '$keyword'

WHERE

				id ='$id'
	
		");
		
return $sql;
		
}

/* -------------------- *//* -------------------- *//* -------------------- *//* -------------------- *//* -------------------- *//* -------------------- */

/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) TERKINI ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_All( $tbl_produk , $offset , $dataPerPage){
	$sql = mysql_query("SELECT * FROM $tbl_produk ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_produkItem_BacaDataListing_All( $tbl_produk ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_produk");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}

/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) TERKOMENTARI ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_DiKomentari_All( $tbl_produk , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE dikomentari != '0' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_produkItem_BacaDataListing_DiKomentari_All( $tbl_produk ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_produk WHERE dikomentari != '0' ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) DENGAN FILE LAMPIRAN ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_DiLampirkan_All( $tbl_produk  , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE dilampirkan != '0' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_produkItem_BacaDataListing_DiLampirkan_All( $tbl_produk ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_produk WHERE dilampirkan != '0'  ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) PILIHAN ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_Pilihan_All( $tbl_produk , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE pilihan != '0' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_produkItem_BacaDataListing_Pilihan_All( $tbl_produk ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_produk WHERE pilihan != '0'  ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_TidakTampil_All( $tbl_produk , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE statustampil != '1' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_produkItem_BacaDataListing_TidakTampil_All( $tbl_produk ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_produk WHERE statustampil != '1'  ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) TIDAK DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_Tampil_All( $tbl_produk , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE statustampil = '0' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_produkItem_BacaDataListing_Tampil_All( $tbl_produk ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_produk WHERE statustampil = '0'  ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}



/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) DI HEADLINE ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_Headline_All( $tbl_produk , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE headline != '0' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_produkItem_BacaDataListing_Headline_All( $tbl_produk ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_produk WHERE headline != '0' ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) DI HOTSPOT ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_Hotspot_All( $tbl_produk , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE hotspot != '0' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_produkItem_BacaDataListing_Hotspot_All( $tbl_produk ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_produk WHERE hotspot != '0' ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}

/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) TIDAK POPULER ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_TidakPopuler_All( $tbl_produk , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE dilihat < '10' ORDER BY judul ASC
		LIMIT $offset, $dataPerPage
	");
	return $sql;
}

function GetJML_produkItem_BacaDataListing_TidakPopuler_All( $tbl_produk ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_produk WHERE dilihat < '10' ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


 
function produkItem_BacaDataListing_Terpopuler_All_ByPage( $tbl_produk , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_produk ORDER BY dilihat DESC LIMIT $offset, $dataPerPage");
	return $sql;
}
 
function produkItem_BacaDataListing_Terpopuler_All( $tbl_produk ){
/* Terpopuler sortir dilihat desc */
	$sql = mysql_query("SELECT * FROM $tbl_produk ORDER BY dilihat DESC");
	return $sql;
}


function GetJML_produkItem_BacaDataListing_Terpopuler_All( $tbl_produk ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_produk WHERE dilihat >= '10' ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


function Search_Item_produk_ALL($tbl_produk, $cari , $offset , $dataPerPage ){ /* produk Search */
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE 
		
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 
 
			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
			
		ORDER BY judul ASC LIMIT $offset, $dataPerPage");  
  		return $sql;
}


function GetJML_Search_Item_produk_ALL( $tbl_produk, $cari ){ /* produk Search Count */
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_produk WHERE 
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 

			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
		");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}
	

function Search_Item_produk_Publish_ByPage($tbl_produk, $cari , $offset , $dataPerPage ){ /* produk Search */
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE 
			statustampil = '1' AND
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 

			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
			
		ORDER BY judul ASC LIMIT $offset, $dataPerPage");  
  		return $sql;
}

function Search_Item_produk_Publish($tbl_produk, $cari ){ /* produk Search */
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE 
			statustampil = '1' AND
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 
 
			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
			
		ORDER BY judul ASC ");  
  		return $sql;
}

 function Search_Item_produk_All_data($tbl_produk, $cari ){ /* produk Search */
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE 
			 
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 
 
			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
			
		ORDER BY judul ASC ");  
  		return $sql;
}



function GetJML_Search_Item_produk_Publish( $tbl_produk, $cari ){ /* produk Search Count */
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_produk WHERE 
			statustampil = '1' AND
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 
			 
			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
		");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


function Select_Item_produk_Terkait_ALL($tbl_produk, $keyword , $offset ){ /* produk Terkait All */
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE keyword LIKE '%$keyword%' ORDER BY judul ASC LIMIT $offset");  
  		return $sql;
}

function Select_Item_produk_Terkait_Publish($tbl_produk, $keyword , $offset , $id ){ /* produk Terkait Publish */
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE id!='$id' AND statustampil = '1' AND keyword LIKE '%$keyword%' ORDER BY judul ASC LIMIT $offset");  
  		return $sql;
}

/* -------------------- */







/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) TERKINI ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_ByKategori_Terkini_All( $tbl_produk , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE idkategori = '$idkategori' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) TERKOMENTARI ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_ByKategori_Dikomentari_All( $tbl_produk , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE idkategori = '$idkategori' AND dikomentari != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) DENGAN FILE LAMPIRAN ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_ByKategori_DiLampirkan_All( $tbl_produk , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE idkategori = '$idkategori' AND dilampirkan != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) PILIHAN ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_ByKategori_Pilihan_All( $tbl_produk , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE idkategori = '$idkategori' AND pilihan != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_ByKategori_Tampil_All( $tbl_produk , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE idkategori = '$idkategori' AND statustampil != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) TIDAK DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_ByKategori_TidakTampil_All( $tbl_produk , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE idkategori = '$idkategori' AND statustampil == '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) DI HEADLINE ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_ByKategori_Headline_All( $tbl_produk , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE idkategori = '$idkategori' AND headline != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) DI HOTSPOT ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_ByKategori_Hotspot_All( $tbl_produk , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE idkategori = '$idkategori' AND hotspot != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) TIDAK POPULER ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_ByKategori_TidakPopuler_All( $tbl_produk , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE idkategori = '$idkategori' AND dilihat < '10' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) POPULER ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_ByKategori_Terpopuler_All( $tbl_produk , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE idkategori = '$idkategori' AND dilihat > '20' ORDER BY judul ASC");
	return $sql;
}


/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) TERKINI ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_ByKategoriSub_Terkini_All( $tbl_produk , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub' ORDER BY judul ASC");
	return $sql;
}




/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) TERKOMENTARI ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_ByKategoriSub_DiKomentari_All( $tbl_produk , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND dikomentari != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) DENGAN FILE LAMPIRAN ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_ByKategoriSub_DiLampirkan_All( $tbl_produk , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND dilampirkan != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) PILIHAN ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_ByKategoriSub_Pilihan_All( $tbl_produk , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND pilihan != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_ByKategoriSub_Tampil_All( $tbl_produk , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND statustampil != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) TIDAK DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_ByKategoriSub_TidakTampil_All( $tbl_produk , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND statustampil == '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) DI HEADLINE ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_ByKategoriSub_Headline_All( $tbl_produk , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND headline != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) DI HOTSPOT ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_ByKategoriSub_Hotspot_All( $tbl_produk , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND hotspot != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) TIDAK POPULER ( UNTUK HALAMAN ADMIN ) */
function produkItem_BacaDataListing_ByKategoriSub_TidakPopuler_All( $tbl_produk , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_produk WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND dilihat < '10' ORDER BY judul ASC");
	return $sql;
}


 
	/* Buat Direktori Untuk File Item produk */
	function produkItem_CreateDirektori(  
	  	$tanggalhariini
	){
 		$direktoribuat =  "filemodul/produk/" . "file_item/" . $tanggalhariini . "/";
			 mkdir( $direktoribuat,'0777',true); 
			 chmod( $direktoribuat, 0777);
		return $direktoribuat;
	}


 	
/* ITEM produk : hitung total item produk berdasarkan format tanggal bulan dan tahun */	
	function jmlArrtbl_produk($blnth,$idkat){
		$sqlText = "SELECT count(id) as jml FROM $tbl_produk where date_format(thedate, '%M %Y') = '$blnth'
					and idkat = $idkat";
					
  		$res = mysql_query($sqlText);
  		$row = mysql_fetch_object($res);
  		$jml = $row->jml;
  		return $jml;	
	}


	function Select_Item_produk_By_Search($cari)
	{
		
		$sqlText = "SELECT * FROM $tbl_produk WHERE judul LIKE '%$cari%' OR
			judulinggris 		LIKE '%$cari%' OR subjudul LIKE '%$cari%' OR
			subjudulinggris 	LIKE '%$cari%' OR preview  LIKE '%$cari%' OR
			previewinggris 		LIKE '%$cari%' 
		ORDER BY judul ASC ";  

  		
  		$result = mysql_query($sqlText);
  		return $result;
	}
	
	
	
	

	/* select detail item produk berdasarkan id terpilih */	
	function Select_Detail_Item_produk($tbl_produk, $id){
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE id = '$id'");
		return mysql_fetch_object($sql);
	}

	

	/* Hitung Jumlah produk By Kategori & Sub Kategori */
	function GetJmlTotalproduk( $tbl_produk, $idkategori, $idkategorisub ){
  		$sqlText = "SELECT count(id) AS jml FROM $tbl_produk WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
	
	function GetJmlTotalprodukByUser( $idkategori , $idkategorisub , $posted ){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_produk WHERE 
		idkategori = '$idkategori' AND 
		idkategorisub = '$idkategorisub' AND 
		posted = '$posted'";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
 
 
 	function GetJmlTotal_produkTerkini( $tbl_produk, $idkategori, $idkategorisub ){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_produk";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
 
 	function produk_hostpot($sesid){
		$sqlText = "SELECT * FROM $tbl_produk where hostpot_headline = 1 and sesid = $sesid ORDER BY thedate DESC, thetime DESC limit 4 ";
		return mysql_query($sqlText);
	}
	
	function produk_hostpot_rev($time_stam,$sesid){	
  		$sqlText = "SELECT * FROM $tbl_produk where thejmt < $time_stam and hostpot_headline = 1 and sesid = $sesid ORDER BY thejmt DESC limit 4";  
  		return mysql_query($sqlText);
	}
	
	
	function list_indeks_produk($time_stam,$sesid){
  		$sqlText = "SELECT * FROM $tbl_produk where thedate = '$time_stam' and sesid = $sesid ORDER BY thedate DESC";  
  		return mysql_query($sqlText);
	}
	
	
	function detail_produk_hostpot($sesid){
		$sqlText = "SELECT * FROM $tbl_produk where hostpot_headline = 1 and sesid = $sesid ORDER BY thedate DESC, thetime DESC";
		$result = mysql_query($sqlText);
		return mysql_fetch_object($result);
	}
	
	
	function detail_produk_hostpot_rev($time_stam,$sesid){
   		$sqlText = "SELECT * FROM $tbl_produk where thejmt < $time_stam and hostpot_headline = 1 and sesid = $sesid ORDER BY thejmt DESC";  
  		$result = mysql_query($sqlText);
		return mysql_fetch_object($result);
	}
	
	function produk_hostpot_kategori($idkat){
		$sqlText = "SELECT * FROM $tbl_produk where produk_single = 1 and idkat = $idkat ORDER BY thedate DESC, thetime DESC";
		$result = mysql_query($sqlText);
		return mysql_fetch_object($result);
	}


	
	function produk_hostpot_kategori_rev($time_stam,$idkat){
  		
  		$sqlText = "SELECT * FROM $tbl_produk where thejmt < $time_stam and produk_single = 1 and idkat = $idkat ORDER BY thejmt DESC";  
  		$result = mysql_query($sqlText);
		return mysql_fetch_object($result);
	}
	
	
	
	function cekKategoriproduk($idkat){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_produk where idkat = $idkat";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
	

	
/* ITEM produk : Update item produk dilihat */
	function produkDiLihat( $tbl_produk, $Det ){
	
			$sql = mysql_query("SELECT * FROM $tbl_produk WHERE id='$Det'");
			$dataproduk = mysql_fetch_array($sql);
			$dilihat = $dataproduk ['dilihat'];
			$dilihat = $dilihat+1;
	
			$sqlupdate = mysql_query("UPDATE $tbl_produk SET dilihat='$dilihat' WHERE id='$Det'");
			
			return $sqlupdate;
	}



/* ITEM produk : select detail item produk berdasarkan tanggal tampil, jam tampil , status tampil */
	function ViewDetail_Item_produk( $tbl_produk, $id ){
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE id = '$id'");
		$result = mysql_fetch_object($sql);
		return $result;
	}

/* View detail produk by kategori , sub kategori  */
	function ViewDetail_Item_Produk_Kategori( $tbl_produk, $idkategori, $idkategorisub ){
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE 
			idkategori = '$idkategori' AND 
			idkategorisub = '$idkategorisub' 
			
		ORDER BY id DESC
		");
		$result = mysql_fetch_object($sql);
		return $result;
	}


	
/* ITEM produk : select item produk berdasarkan tanggal tampil >= tanggal saat ini  , jam tampil >= jam saat ini , status tampil = 1 */	
	
	function produkTerbaru($tbl_produk, $tanggalhariini, $Cat, $SubCat ){
		$sqlText = "SELECT * FROM $tbl_produk WHERE 
						
						tgltampil <= '$tanggalhariini' AND
						jamtampil <= '$jamsaatini' AND
						statustampil = '1' AND 

						idkategori = '$Cat' AND 
						idkategorisub = '$SubCat' AND
						
						ORDER BY judul ASC, jamtampil DESC limit 5";
						
		return mysql_query($sqlText);
	}
	
/* ambil data kemarin */	
	$tglkemarin = date("Y-m-d",mktime (0,0,0, date("m"), date("d")-1, date("Y")));
/* ITEM produk : select item produk berdasarkan tanggal tampil = tanggal kemarin, status tampil = 1 , kanal dan sub kanal terkait pengurutan berdasarkan tanggal tampil & jam tampil limit 5 baris */
	function produkKemaren( $tbl_produk, $tglkemarin, $Cat, $SubCat ){
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE

						tgltampil = '$tglkemarin' AND
						statustampil='1' AND 

						idkategori = '$Cat' AND 
						idkategorisub = '$SubCat' 
						
						ORDER BY 
						
						tgltampil DESC, jamtampil DESC limit 5");
		return $sql;
	}


	function produkTerkait( $tbl_produk, $tanggalhariini, $Cat, $SubCat )
	{
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE
		
						tgltampil <= '$tanggalhariini' AND
						jamtampil <= '$jamsaatini' AND
						statustampil='1' AND 
		
						idkategori = '$Cat' AND 
						idkategorisub = '$SubCat' 
						
						ORDER BY judul ASC limit 5");
						
		return $sql;
	}
	
/* ITEM produk : select item produk berdasarkan kanal terkait */	
	function produkKategoriTerkait( $tbl_produk,  $tanggalhariini, $Cat, $Det )
	{
	
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE
		
						tgltampil <= '$tanggalhariini' AND
						statustampil='1' AND 
		
						idkategori = '$Cat'
						 
						
						ORDER BY judul ASC limit 7");
						
		return $sql;
	}




function produkItem_PageLimit_Terkini_By_Kategori_Publik( $tbl_produk, $tanggalhariini, $idkategori , $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_produk WHERE 
			
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			idkategori = '$idkategori'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
		
}

function produkItem_PageLimit_Terkini_By_SubKategori_Publik( $tbl_produk, $tanggalhariini, $idkategori , $idkategorisub, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_produk WHERE 
			tgltampil <= '$timeunix'
			statustampil='1' AND
			idkategori = '$idkategori' AND
			idkategorisub = '$idkategorisub'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}


 
 
/* Terkini Homepage */
function produkItem_PageLimit_Terkini_All_Publik( $tbl_produk, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_produk WHERE 
			statustampil = '1' AND
			tgltampil <= '$tanggalhariini'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}

/* Terkini By Kanal */
function produkItem_PageLimit_Terkini_All_Publik_By_Kategori( $tbl_produk, $idkategori, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_produk WHERE 
			idkategori = '$idkategori' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' 
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}

/* Terkini By SubKanal */
function produkItem_PageLimit_Terkini_All_Publik_By_SubKategori( $tbl_produk, $idkategorisub, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_produk WHERE 
			idkategorisub = '$idkategorisub' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' 
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}



/* produk Terpopuler publik */
function produkItem_PageLimit_Populer_All_Publik( $tbl_produk, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_produk WHERE 
			
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			dilihat >= '5'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}

/* produk Terpopuler Berdasarkan Kategori Terkait */
function produkItem_PageLimit_Populer_All_Publik_ByKategori( $tbl_produk, $idkategori, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_produk WHERE 
			idkategori = '$idkategori' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			tgltampil <= '$tanggalhariini' AND
			dilihat >= '5'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}

/* Halaman Sub Kanal Untuk Box produk Terpopuler Berdasarkan Sub Kategori Terkait */
function produkItem_PageLimit_Populer_All_Publik_BySubKategori( $tbl_produk, $idkategorisub, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_produk WHERE 
			 
			idkategorisub = '$idkategorisub' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			dilihat >= '5'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}







/* produk terkomentari publik */
function produkItem_PageLimit_Terkomentari_All_Publik( $tbl_produk, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_produk WHERE 
			
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			dikomentari = '1'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}

/* produk pilihan publik */
function produkItem_PageLimit_Pilihan_All_Publik( $tbl_produk, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_produk WHERE 
			
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			pilihan = '1'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}

/* Revisi 10/12/2010 */
function Detail_produkItem_Publik_Hotspot( $tbl_produk, $idkategori, $idsubkategori, $tanggalhariini ){
		$sql = mysql_query("
		SELECT * FROM $tbl_produk WHERE 
			idkategori = '$idkategori' AND
			idkategorisub = '$idsubkategori' AND
			tgltampil <= '$tanggalhariini' AND
			headline = '1' AND
			statustampil='1' 
			ORDER BY judul ASC
		");
		$result = mysql_fetch_object($sql);
		return $result;
}

function Select_produkItem_Publik_LineUnderHotspot( $tbl_produk, $idkategori, $idsubkategori, $tanggalhariini, $limit ){ /* Line Item produk Under Hotspot Sub Kanal */
		$sql = mysql_query("
		SELECT * FROM $tbl_produk WHERE 
			idkategori = '$idkategori' AND
			idkategorisub = '$idsubkategori' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' 
		 ORDER BY judul ASC LIMIT $limit	
		");
		return $sql;
}

function produkItem_PageLimit_Headline_UtamaHome( $tbl_produk, $tanggalhariini , $dataPerPage ){

					$sql = mysql_query("
						SELECT * FROM produk WHERE 
							tgltampil <='$tanggalhariini' AND
							statustampil ='1' AND
							headline = '1' 
								ORDER BY judul ASC
						LIMIT $dataPerPage
					");
					return $sql;
}


function produkItem_PageLimit_Headline_By_Kategori_Publik( $tbl_produk, $tanggalhariini, $idkategori , $dataPerPage ){
					$sql = mysql_query("
						SELECT * FROM produk WHERE 
							tgltampil <='$tanggalhariini' AND
							statustampil ='1' AND
							idkategori = '$idkategori' AND
							headline = '1' 
								ORDER BY judul ASC
						LIMIT $dataPerPage
					");
					return $sql;
}

function produkItem_PageLimit_Headline_By_SubKategori_Publik( $tbl_produk, $tanggalhariini, $idkategorisub , $dataPerPage ){
					$sql = mysql_query("
						SELECT * FROM produk WHERE 
							tgltampil <='$tanggalhariini' AND
							statustampil ='1' AND
							idkategorisub = '$idkategorisub' AND
							headline = '1' 
								ORDER BY judul ASC
						LIMIT $dataPerPage
					");
					return $sql;
}


function produkItem_PageLimit_Headline_Line_By_Kategori_Publik( $tbl_produk, $tanggalhariini, $idkategori , $dataPerPage ){

					$sql = mysql_query("
						SELECT * FROM produk WHERE 
							statustampil = '1' AND
							tgltampil <= '$tanggalhariini' AND
				  			idkategori = '$idkategori' AND
							pilihan = '1' AND
							headline !='1'
						 
								ORDER BY judul ASC

						LIMIT $dataPerPage
					");
					return $sql;


}



	function Search_Item_produk_By_Publik($cari, $tanggalhariini){
		
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE 
		
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND 
							
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 
 
			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
			
		ORDER BY judul ASC ");  

  		return $sql;
	}
	

	function  produkItem_HapusData( $tbl_produk, $id){ /* Hapus Data Item */
		$sql = mysql_query("
			DELETE FROM $tbl_produk WHERE id='$id'
		");
		return $sql;
	}
	
	
	function produkItem_StatusTampil( $tbl_produk, $statustampil, $id ){ /* Tampil Kan Data */
		$sql = mysql_query("
			UPDATE $tbl_produk SET
				statustampil = '$statustampil' 
			WHERE
				id = '$id'
		");
		return $sql;
	}


	function produkItem_HeadlineTampil( $tbl_produk, $statustampil, $id ){ /* Tampilkan data di headline terkait */
		$sql = mysql_query("
			UPDATE $tbl_produk SET
				headline = '$statustampil' 
			WHERE
				id = '$id'
		");
		return $sql;
	}


	function produkItem_PilihanTampil( $tbl_produk, $statustampil, $id ){ /* tampilkan data pada pilihan terkait */
		$sql = mysql_query("
			UPDATE $tbl_produk SET
				pilihan = '$statustampil' 
			WHERE
			id = '$id'
		");
		return $sql;
	}

	function produkItem_HotspotTampil( $tbl_produk, $statustampil, $id ){ /* tampilkan data pada hotspot terkait */
		$sql = mysql_query("
			UPDATE $tbl_produk SET
				hotspot = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}



	function produkItem_HapusImage( $tbl_produk, $id ){
		$sql = mysql_query("
			UPDATE $tbl_produk SET
				gambarkecil = '',
				gambarbesar = '',
				direktorigambar = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function produkItem_UpdateFileLampiran( $tbl_produk, $id , $status ){
		$sql = mysql_query("
			UPDATE $tbl_produk SET
				dilampirkan = '$status'
			WHERE
				id = '$id'
		");
	return $sql;
	}
	

	function produkItem_UpdateKomentar( $tbl_produk, $id , $status  ){
		$sql = mysql_query("
			UPDATE $tbl_produk SET
				dikomentari = '$status'
			WHERE
				id = '$id'
		");
	return $sql;
	}
	

	function SelectPublish_produkItem_Terkait( $tbl_produk, $idkategori, $keyword , $tanggalhariini ){ /* Publish Item produk Terkait */
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE 
			idkategori = '$idkategori' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND 
			keyword LIKE '%$keyword%' 
		ORDER BY judul ASC ");  
  		return $sql;
	}
	
	function SelectNonPublish_produkItem_Terkait( $tbl_produk, $idkategori, $keyword , $tanggalhariini ){ /* Non Publish Item produk Terkait */
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE 
			idkategori = '$idkategori' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='0' AND 
			keyword LIKE '%$keyword%' 
		ORDER BY judul ASC ");  
  		return $sql;
	}




function List_Indeks_produk_Item($tbl_produk, $tanggalhariini ){ 
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE 
			statustampil='1' AND
			tgltampil = '$tanggalhariini'
			ORDER BY judul ASC");  
  		return $sql;
}

function List_Indeks_produk_Item_By_Tanggal($tbl_produk, $tanggalhariini ){  
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE 
			statustampil = '1' AND
			tgltampil = '$tanggalhariini'
		ORDER BY judul ASC");  
  		return $sql;
}

function Total_Indeks_produk_Item_By_Tanggal( $tbl_produk, $tanggal ){  
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE 
			statustampil='1' AND
			tgltampil='$tanggal'  
			ORDER BY judul ASC");  
  		$hitung = mysql_num_rows($sql);
  		 
  		return $hitung;	
}


function List_Indeks_produk_Item_Kategori_ByPage($tbl_produk, $idkategori , $offset , $dataPerPage ){  
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE 
			statustampil = '1' AND
			idkategori ='$idkategori'
		ORDER BY judul ASC LIMIT $offset, $dataPerPage");  
  		return $sql;
}


/* List Item produk By Kategori untuk di homepage */
function List_Indeks_produk_Item_Kategori_Homepage($tbl_produk, $idkategori , $dataPerPage ){  
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE 
			statustampil = '1' AND
			idkategori ='$idkategori'
		ORDER BY id DESC LIMIT $dataPerPage");  
  		return $sql;
}


/* List Item produk By Kategori untuk di homepage untuk DI HOT */
function List_Indeks_produk_Item_Kategori_Homepage_Hot($tbl_produk, $idkategori , $dataPerPage ){  
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE 
			statustampil = '1' AND
			judul LIKE '%CHINA%' AND
			idkategori ='$idkategori'
			
		ORDER BY dilihat ASC LIMIT $dataPerPage");  
  		return $sql;
}



/* Fungsi list produk item berdasarkan sub kategori */
function List_Indeks_produk_Item_SubKategori_ByPage( $tbl_produk, $idkategori , $idkategorisub,  $offset , $dataPerPage ){  
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE 
			statustampil = '1' AND
			idkategori = '$idkategori' AND
			idkategorisub = '$idkategorisub'
		ORDER BY judul ASC LIMIT $offset, $dataPerPage");  
  		return $sql;
}


 function  List_ALL_PUBLISH_Item_produk_ByKategori_List($tbl_produk, $tanggalhariini, $idkategori ){  
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE 
			statustampil = '1' AND
			idkategori ='$idkategori'
		ORDER BY judul ASC ");  
  		return $sql;
}


 function  list_all_publish_item_produk_bykategori_nolimit($tbl_produk, $idkategori, $idkategorisub ){  
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE 
			statustampil = '1' AND
			idkategori ='$idkategori' AND
			idkategorisub = '$idkategorisub'
		ORDER BY judul ASC ");  
  		return $sql;
}



function  list_all_publish_item_produk_bysubkategori_limit($tbl_produk, $idkategorisub, $dataperpage ){  
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE 
			statustampil = '1' AND
			idkategorisub ='$idkategorisub'
		ORDER BY id DESC LIMIT $dataperpage");  
  		return $sql;
}


/* Fungsi menampilkan daftar item data produk berdasarkan subkategori produk tanpa pembatasan */
/* Update By Arvino Zulka 13 Agustus 2011 , BEST TOUR */
function  list_all_publish_item_produk_bysubkategori_nolimit($tbl_produk, $idkategorisub ){  
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE 
			statustampil = '1' AND
			idkategorisub ='$idkategorisub'
		ORDER BY id DESC ");  
  		return $sql;
}

function Total_LIST_ALL_PUBLISH_Indeks_produk_Item_ByKategori( $tbl_produk, $tanggal, $idkategori ){  
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE 
			statustampil='1' AND
			idkategori='$idkategori'
			ORDER BY judul ASC");  
  		$hitung = mysql_num_rows($sql);
  		return $hitung;		
}


/* Fungsi menampilkan data item produk berdasarkan kategori & subkategori */
function Total_LIST_ALL_PUBLISH_Indeks_produk_Item_BySubKategori( $tbl_produk, $idkategori, $idkategorisub ){  
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE 
			statustampil='1' AND
			idkategori='$idkategori' AND
			idkategorisub='$idkategorisub'
			ORDER BY judul ASC");  
  		$hitung = mysql_num_rows($sql);
  		return $hitung;	
}

function Total_Indeks_produk_Item( $tbl_produk, $tanggalhariini ){  
		$sql = mysql_query("SELECT * FROM $tbl_produk WHERE 
			statustampil='1' AND
			tgltampil = '$tanggalhariini'
			ORDER BY judul ASC");  
  		$hitung = mysql_num_rows($sql);
  		return $hitung;	
}
	

	

function List_Item_produk_Publish_view_Halaman( $tbl_produk, $idkategori, $idsubkategori,$offset, $dataPerPage ){
		$sql = mysql_query("
				SELECT * FROM $tbl_produk WHERE 
						statustampil = '1' AND
						idkategori='$idkategori' AND
						idkategorisub='$idsubkategori' 
			
				ORDER BY judul ASC
				LIMIT $offset, $dataPerPage
			
		");
		return $sql;
}


function List_produk_File_Group_With_LimitPage( $tbl_produk, $idkategori, $idsubkategori , $offset, $dataPerPage){

	$sql = mysql_query("
				SELECT * FROM $tbl_produk WHERE 

						idkategori='$idkategori' AND
						idkategorisub='$idsubkategori' 
			
				ORDER BY judul ASC
				LIMIT $offset, $dataPerPage
			
		");
		
	return $sql;
}







/* 22 Maret 2011 */
function produkItem_PageLimit_Terkini( $tbl_produk, $dataPerPage ){

					$sql = mysql_query("
						SELECT * FROM $tbl_produk ORDER BY id DESC LIMIT $dataPerPage
					");
					return $sql;
}


function produkItem_PageLimit_Terkini_Headline( $tbl_produk, $dataPerPage ){

					$sql = mysql_query("
						SELECT * FROM $tbl_produk WHERE gambarbesar !='' ORDER BY dilihat DESC LIMIT $dataPerPage
					");
					return $sql;
}



 
function list_all_produk_item_terkini_bykategori( $tbl_produk ){
	$sql = mysql_query("SELECT * FROM $tbl_produk ORDER BY idkategori ASC");
	return $sql;
}


?>