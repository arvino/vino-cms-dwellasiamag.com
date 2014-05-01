<?php
/* PUSTAKA FUNGSI QUERY DATABASE PADA TABEL ITEM weblink */
/* 

id, idupline, idkategori, idkategorisub,
judul, judulinggris, subjudul, subjudulinggris,
preview, previewinggris,
deskripsi, deskripsiinggris,
tglpost, jampost,
tgltampil, jamtampil,
timeunix, gambarkecil, gambarbesar,
keterangangambar, 
imagelogo, dikomentari, dilampirkan,
dilihat, statustampil, idusers, idadmin,
direktorigambar, linkjudul, keyword



$id, $idupline, $idkategori, $idkategorisub,
$judul, $judulinggris, $subjudul, $subjudulinggris,
$preview, $previewinggris, $deskripsi, $deskripsiinggris,
$tglpost, $jampost, $tgltampil, $jamtampil,
$timeunix, $gambarkecil, $gambarbesar,
$keterangangambar, $imagelogo, $dikomentari,
$dilampirkan, $dilihat, $statustampil,
$idusers, $idadmin, $direktorigambar,
$linkjudul, $keyword



'$id', '$idupline',
'$idkategori', '$idkategorisub',
'$judul', '$judulinggris',
'$subjudul','$subjudulinggris',
'$preview','$previewinggris',
'$deskripsi','$deskripsiinggris',
'$tglpost','$jampost',
'$tgltampil','$jamtampil',
'$timeunix',
'$gambarkecil','$gambarbesar',
'$keterangangambar',
'$imagelogo',
'$dikomentari',
'$dilampirkan',
'$dilihat',
'$statustampil',
'$idusers',
'$idadmin',
'$direktorigambar',
'$linkjudul',
'$keyword'









*/  
	/* Fungsi Buat ID Otomatis Untuk ID weblink Item . */
	function weblinkItem_CreateID( $tbl_weblink ){
		$sql = mysql_query("SELECT * FROM $tbl_weblink ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$UID = $data["id"];
		$UID = $UID+1;  
		return $UID;
	}	 

 	/*  Fungsi Periksa Judul weblink Kategori */
	function weblinkItem_PeriksaJudul( $tbl_weblink, $judul, $judulinggris ){
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE judul = '$judul' AND judulinggris = '$judulinggris'");
		return $sql;	
	}


 	/* FUNGSI TAMBAH DATA ITEM weblink */
	function weblinkItem_TambahData(
		$tbl_weblink,
		$id, $idupline, $idkategori, $idkategorisub,
		$judul, $judulinggris, $subjudul, $subjudulinggris,
		$preview, $previewinggris, $deskripsi, $deskripsiinggris,
		$tglpost, $jampost, $tgltampil, $jamtampil,
		$timeunix, $gambarkecil, $gambarbesar,
		$keterangangambar, $imagelogo, $dikomentari,
		$dilampirkan, $dilihat, $statustampil, $urutan, 
		$idusers, $idadmin, $direktorigambar,
		$linkjudul, $keyword
	){
		$sql = mysql_query("INSERT INTO $tbl_weblink
		(

				id, idupline, idkategori, idkategorisub,
				judul, judulinggris, subjudul, subjudulinggris,
				preview, previewinggris,
				deskripsi, deskripsiinggris,
				tglpost, jampost,
				tgltampil, jamtampil,
				timeunix, gambarkecil, gambarbesar,
				keterangangambar, 
				imagelogo, dikomentari, dilampirkan,
				dilihat, statustampil, urutan, idusers, idadmin,
				direktorigambar, linkjudul, keyword

		)VALUES(
	
				'$id', '$idupline',
				'$idkategori', '$idkategorisub',
				'$judul', '$judulinggris',
				'$subjudul','$subjudulinggris',
				'$preview','$previewinggris',
				'$deskripsi','$deskripsiinggris',
				'$tglpost','$jampost',
				'$tgltampil','$jamtampil',
				'$timeunix',
				'$gambarkecil','$gambarbesar',
				'$keterangangambar',
				'$imagelogo', '$dikomentari', '$dilampirkan',
				'$dilihat', '$statustampil', '$urutan',
				'$idusers', '$idadmin',
				'$direktorigambar', '$linkjudul', '$keyword'
  
		)");
		return $sql;
	}
	
	

	
/* FUNGSI BACA DATA ITEM DETIL */
function weblinkItem_BacaDataDetil( $tbl_weblink, $id ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE id = '$id'");
	$result = mysql_fetch_object($sql);
	return $result;
}




/* FUNGSI UPDATE DATA ITEM */
function weblinkItem_UpdateData(
		$tbl_weblink,
		$id, $idupline, $idkategori,
		$idkategorisub, $judul, $judulinggris,
		$subjudul, $subjudulinggris,
		$preview, $previewinggris,
		$deskripsi, $deskripsiinggris,
		$tglpost, $jampost,
		$tgltampil, $jamtampil, $timeunix, $gambarkecil, $gambarbesar,
		$keterangangambar, $imagelogo, $dikomentari, $dilampirkan, $dilihat,
		$statustampil, $urutan, $idusers, $idadmin, $direktorigambar, $linkjudul, $keyword
		){
		$sql = mysql_query(
		"
UPDATE $tbl_weblink SET 

	idupline ='$idupline', 	idkategori ='$idkategori',
	idkategorisub ='$idkategorisub', judul ='$judul', judulinggris ='$judulinggris', 	
	subjudul = '$subjudul', subjudulinggris = '$subjudulinggris',
	preview = '$preview', previewinggris = '$previewinggris',
	deskripsi ='$deskripsi', deskripsiinggris ='$deskripsiinggris', tglpost ='$tglpost', jampost ='$jampost',
	tgltampil ='$tgltampil', jamtampil ='$jamtampil', timeunix = '$timeunix', gambarkecil ='$gambarkecil',
	gambarbesar ='$gambarbesar', keterangangambar ='$keterangangambar', imagelogo ='$imagelogo',
	dikomentari ='$dikomentari', dilampirkan ='$dilampirkan', dilihat ='$dilihat',
	statustampil ='$statustampil', urutan = '$urutan',
	idusers ='$idusers', idadmin ='$idadmin',
	direktorigambar ='$direktorigambar', linkjudul ='$linkjudul', keyword ='$keyword'

WHERE

	id ='$id'
		");
		
return $sql;
		
}




/* -------------------- *//* -------------------- *//* -------------------- *//* -------------------- *//* -------------------- *//* -------------------- */

/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) TERKINI ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_All( $tbl_weblink , $offset , $dataPerPage){
	$sql = mysql_query("SELECT * FROM $tbl_weblink ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_weblinkItem_BacaDataListing_All( $tbl_weblink ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_weblink");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}

/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) TERKOMENTARI ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_DiKomentari_All( $tbl_weblink , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE dikomentari != '0' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_weblinkItem_BacaDataListing_DiKomentari_All( $tbl_weblink ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_weblink WHERE dikomentari != '0' ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) DENGAN FILE LAMPIRAN ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_DiLampirkan_All( $tbl_weblink  , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE dilampirkan != '0' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_weblinkItem_BacaDataListing_DiLampirkan_All( $tbl_weblink ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_weblink WHERE dilampirkan != '0'  ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) PILIHAN ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_Pilihan_All( $tbl_weblink , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE pilihan != '0' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_weblinkItem_BacaDataListing_Pilihan_All( $tbl_weblink ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_weblink WHERE pilihan != '0'  ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_TidakTampil_All( $tbl_weblink , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE statustampil != '1' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_weblinkItem_BacaDataListing_TidakTampil_All( $tbl_weblink ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_weblink WHERE statustampil != '1'  ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) TIDAK DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_Tampil_All( $tbl_weblink , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE statustampil = '0' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_weblinkItem_BacaDataListing_Tampil_All( $tbl_weblink ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_weblink WHERE statustampil = '0'  ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}



/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) DI HEADLINE ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_Headline_All( $tbl_weblink , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE headline != '0' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_weblinkItem_BacaDataListing_Headline_All( $tbl_weblink ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_weblink WHERE headline != '0' ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) DI HOTSPOT ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_Hotspot_All( $tbl_weblink , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE hotspot != '0' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_weblinkItem_BacaDataListing_Hotspot_All( $tbl_weblink ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_weblink WHERE hotspot != '0' ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}

/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) TIDAK POPULER ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_TidakPopuler_All( $tbl_weblink , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE dilihat < '10' ORDER BY judul ASC
		LIMIT $offset, $dataPerPage
	");
	return $sql;
}

function GetJML_weblinkItem_BacaDataListing_TidakPopuler_All( $tbl_weblink ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_weblink WHERE dilihat < '10' ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


 
function weblinkItem_BacaDataListing_Terpopuler_All_ByPage( $tbl_weblink , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink ORDER BY dilihat DESC LIMIT $offset, $dataPerPage");
	return $sql;
}
 
function weblinkItem_BacaDataListing_Terpopuler_All( $tbl_weblink ){
/* Terpopuler sortir dilihat desc */
	$sql = mysql_query("SELECT * FROM $tbl_weblink ORDER BY dilihat DESC");
	return $sql;
}


function GetJML_weblinkItem_BacaDataListing_Terpopuler_All( $tbl_weblink ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_weblink WHERE dilihat >= '10' ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


function Search_Item_weblink_ALL($tbl_weblink, $cari , $offset , $dataPerPage ){ /* weblink Search */
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE 
		
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 
 
			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
			
		ORDER BY judul ASC LIMIT $offset, $dataPerPage");  
  		return $sql;
}


function GetJML_Search_Item_weblink_ALL( $tbl_weblink, $cari ){ /* weblink Search Count */
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_weblink WHERE 
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 

			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
		");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}
	

function Search_Item_weblink_Publish_ByPage($tbl_weblink, $cari , $offset , $dataPerPage ){ /* weblink Search */
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE 
			statustampil = '1' AND
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 

			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
			
		ORDER BY judul ASC LIMIT $offset, $dataPerPage");  
  		return $sql;
}

function Search_Item_weblink_Publish($tbl_weblink, $cari ){ /* weblink Search */
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE 
			statustampil = '1' AND
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 
 
			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
			
		ORDER BY judul ASC ");  
  		return $sql;
}

 function Search_Item_weblink_All_data($tbl_weblink, $cari ){ /* weblink Search */
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE 
			 
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 
 
			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
			
		ORDER BY judul ASC ");  
  		return $sql;
}



function GetJML_Search_Item_weblink_Publish( $tbl_weblink, $cari ){ /* weblink Search Count */
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_weblink WHERE 
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


function Select_Item_weblink_Terkait_ALL($tbl_weblink, $keyword , $offset ){ /* weblink Terkait All */
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE keyword LIKE '%$keyword%' ORDER BY judul ASC LIMIT $offset");  
  		return $sql;
}

function Select_Item_weblink_Terkait_Publish($tbl_weblink, $keyword , $offset , $id ){ /* weblink Terkait Publish */
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE id!='$id' AND statustampil = '1' AND keyword LIKE '%$keyword%' ORDER BY judul ASC LIMIT $offset");  
  		return $sql;
}

/* -------------------- */







/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) TERKINI ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_ByKategori_Terkini_All( $tbl_weblink , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE idkategori = '$idkategori' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) TERKOMENTARI ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_ByKategori_Dikomentari_All( $tbl_weblink , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE idkategori = '$idkategori' AND dikomentari != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) DENGAN FILE LAMPIRAN ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_ByKategori_DiLampirkan_All( $tbl_weblink , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE idkategori = '$idkategori' AND dilampirkan != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) PILIHAN ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_ByKategori_Pilihan_All( $tbl_weblink , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE idkategori = '$idkategori' AND pilihan != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_ByKategori_Tampil_All( $tbl_weblink , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE idkategori = '$idkategori' AND statustampil != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) TIDAK DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_ByKategori_TidakTampil_All( $tbl_weblink , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE idkategori = '$idkategori' AND statustampil == '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) DI HEADLINE ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_ByKategori_Headline_All( $tbl_weblink , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE idkategori = '$idkategori' AND headline != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) DI HOTSPOT ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_ByKategori_Hotspot_All( $tbl_weblink , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE idkategori = '$idkategori' AND hotspot != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) TIDAK POPULER ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_ByKategori_TidakPopuler_All( $tbl_weblink , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE idkategori = '$idkategori' AND dilihat < '10' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) POPULER ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_ByKategori_Terpopuler_All( $tbl_weblink , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE idkategori = '$idkategori' AND dilihat > '20' ORDER BY judul ASC");
	return $sql;
}


/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) TERKINI ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_ByKategoriSub_Terkini_All( $tbl_weblink , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub' ORDER BY judul ASC");
	return $sql;
}




/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) TERKOMENTARI ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_ByKategoriSub_DiKomentari_All( $tbl_weblink , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND dikomentari != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) DENGAN FILE LAMPIRAN ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_ByKategoriSub_DiLampirkan_All( $tbl_weblink , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND dilampirkan != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) PILIHAN ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_ByKategoriSub_Pilihan_All( $tbl_weblink , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND pilihan != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_ByKategoriSub_Tampil_All( $tbl_weblink , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND statustampil != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) TIDAK DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_ByKategoriSub_TidakTampil_All( $tbl_weblink , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND statustampil == '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) DI HEADLINE ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_ByKategoriSub_Headline_All( $tbl_weblink , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND headline != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) DI HOTSPOT ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_ByKategoriSub_Hotspot_All( $tbl_weblink , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND hotspot != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) TIDAK POPULER ( UNTUK HALAMAN ADMIN ) */
function weblinkItem_BacaDataListing_ByKategoriSub_TidakPopuler_All( $tbl_weblink , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND dilihat < '10' ORDER BY judul ASC");
	return $sql;
}


 
	/* Buat Direktori Untuk File Item weblink */
	function weblinkItem_CreateDirektori(  
	  	$tanggalhariini
	){
 		$direktoribuat =  "filemodul/weblink/" . "file_item/" . $tanggalhariini . "/";
			 mkdir( $direktoribuat,'0777',true); 
			 chmod( $direktoribuat, 0777);
		return $direktoribuat;
	}


 	
/* ITEM weblink : hitung total item weblink berdasarkan format tanggal bulan dan tahun */	
	function jmlArrtbl_weblink($blnth,$idkat){
		$sqlText = "SELECT count(id) as jml FROM $tbl_weblink where date_format(thedate, '%M %Y') = '$blnth'
					and idkat = $idkat";
					
  		$res = mysql_query($sqlText);
  		$row = mysql_fetch_object($res);
  		$jml = $row->jml;
  		return $jml;	
	}


	function Select_Item_weblink_By_Search($cari)
	{
		
		$sqlText = "SELECT * FROM $tbl_weblink WHERE judul LIKE '%$cari%' OR
			judulinggris 		LIKE '%$cari%' OR subjudul LIKE '%$cari%' OR
			subjudulinggris 	LIKE '%$cari%' OR preview  LIKE '%$cari%' OR
			previewinggris 		LIKE '%$cari%' 
		ORDER BY judul ASC ";  

  		
  		$result = mysql_query($sqlText);
  		return $result;
	}
	
	
	
	

	/* select detail item weblink berdasarkan id terpilih */	
	function Select_Detail_Item_weblink($tbl_weblink, $id){
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE id = '$id'");
		return mysql_fetch_object($sql);
	}

	

	/* Hitung Jumlah weblink By Kategori & Sub Kategori */
	function GetJmlTotalweblink( $tbl_weblink, $idkategori, $idkategorisub ){
  		$sqlText = "SELECT count(id) AS jml FROM $tbl_weblink WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
	
	function GetJmlTotalweblinkByUser( $idkategori , $idkategorisub , $posted ){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_weblink WHERE 
		idkategori = '$idkategori' AND 
		idkategorisub = '$idkategorisub' AND 
		posted = '$posted'";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
 
 
 	function GetJmlTotal_weblinkTerkini( $tbl_weblink, $idkategori, $idkategorisub ){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_weblink";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
 
 	function weblink_hostpot($sesid){
		$sqlText = "SELECT * FROM $tbl_weblink where hostpot_headline = 1 and sesid = $sesid ORDER BY thedate DESC, thetime DESC limit 4 ";
		return mysql_query($sqlText);
	}
	
	function weblink_hostpot_rev($time_stam,$sesid){	
  		$sqlText = "SELECT * FROM $tbl_weblink where thejmt < $time_stam and hostpot_headline = 1 and sesid = $sesid ORDER BY thejmt DESC limit 4";  
  		return mysql_query($sqlText);
	}
	
	
	function list_indeks_weblink($time_stam,$sesid){
  		$sqlText = "SELECT * FROM $tbl_weblink where thedate = '$time_stam' and sesid = $sesid ORDER BY thedate DESC";  
  		return mysql_query($sqlText);
	}
	
	
	function detail_weblink_hostpot($sesid){
		$sqlText = "SELECT * FROM $tbl_weblink where hostpot_headline = 1 and sesid = $sesid ORDER BY thedate DESC, thetime DESC";
		$result = mysql_query($sqlText);
		return mysql_fetch_object($result);
	}
	
	
	function detail_weblink_hostpot_rev($time_stam,$sesid){
   		$sqlText = "SELECT * FROM $tbl_weblink where thejmt < $time_stam and hostpot_headline = 1 and sesid = $sesid ORDER BY thejmt DESC";  
  		$result = mysql_query($sqlText);
		return mysql_fetch_object($result);
	}
	
	function weblink_hostpot_kategori($idkat){
		$sqlText = "SELECT * FROM $tbl_weblink where weblink_single = 1 and idkat = $idkat ORDER BY thedate DESC, thetime DESC";
		$result = mysql_query($sqlText);
		return mysql_fetch_object($result);
	}


	
	function weblink_hostpot_kategori_rev($time_stam,$idkat){
  		
  		$sqlText = "SELECT * FROM $tbl_weblink where thejmt < $time_stam and weblink_single = 1 and idkat = $idkat ORDER BY thejmt DESC";  
  		$result = mysql_query($sqlText);
		return mysql_fetch_object($result);
	}
	
	
	
	function cekKategoriweblink($idkat){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_weblink where idkat = $idkat";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
	

	
/* ITEM weblink : Update item weblink dilihat */
	function weblinkDiLihat( $tbl_weblink, $Det ){
	
			$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE id='$Det'");
			$dataweblink = mysql_fetch_array($sql);
			$dilihat = $dataweblink ['dilihat'];
			$dilihat = $dilihat+1;
	
			$sqlupdate = mysql_query("UPDATE $tbl_weblink SET dilihat='$dilihat' WHERE id='$Det'");
			
			return $sqlupdate;
	}


/* ITEM weblink : select detail item weblink berdasarkan tanggal tampil, jam tampil , status tampil */
	function ViewDetail_Item_weblink( $tbl_weblink, $id ){
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE id = '$id'");
		$result = mysql_fetch_object($sql);
		return $result;
	}
	
	
/* ITEM weblink : select item weblink berdasarkan tanggal tampil >= tanggal saat ini  , jam tampil >= jam saat ini , status tampil = 1 */	
	
	function weblinkTerbaru($tbl_weblink, $tanggalhariini, $Cat, $SubCat ){
		$sqlText = "SELECT * FROM $tbl_weblink WHERE 
						
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
/* ITEM weblink : select item weblink berdasarkan tanggal tampil = tanggal kemarin, status tampil = 1 , kanal dan sub kanal terkait pengurutan berdasarkan tanggal tampil & jam tampil limit 5 baris */
	function weblinkKemaren( $tbl_weblink, $tglkemarin, $Cat, $SubCat ){
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE

						tgltampil = '$tglkemarin' AND
						statustampil='1' AND 

						idkategori = '$Cat' AND 
						idkategorisub = '$SubCat' 
						
						ORDER BY 
						
						tgltampil DESC, jamtampil DESC limit 5");
		return $sql;
	}


	function weblinkTerkait( $tbl_weblink, $tanggalhariini, $Cat, $SubCat )
	{
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE
		
						tgltampil <= '$tanggalhariini' AND
						jamtampil <= '$jamsaatini' AND
						statustampil='1' AND 
		
						idkategori = '$Cat' AND 
						idkategorisub = '$SubCat' 
						
						ORDER BY judul ASC limit 5");
						
		return $sql;
	}
	
/* ITEM weblink : select item weblink berdasarkan kanal terkait */	
	function weblinkKategoriTerkait( $tbl_weblink,  $tanggalhariini, $Cat, $Det )
	{
	
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE
		
						tgltampil <= '$tanggalhariini' AND
						statustampil='1' AND 
		
						idkategori = '$Cat'
						 
						
						ORDER BY judul ASC limit 7");
						
		return $sql;
	}




function weblinkItem_PageLimit_Terkini_By_Kategori_Publik( $tbl_weblink, $tanggalhariini, $idkategori , $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_weblink WHERE 
			
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			idkategori = '$idkategori'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
		
}

function weblinkItem_PageLimit_Terkini_By_SubKategori_Publik( $tbl_weblink, $tanggalhariini, $idkategori , $idkategorisub, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_weblink WHERE 
			tgltampil <= '$timeunix'
			statustampil='1' AND
			idkategori = '$idkategori' AND
			idkategorisub = '$idkategorisub'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}


 
 
/* Terkini Homepage */
function weblinkItem_PageLimit_Terkini_All_Publik( $tbl_weblink, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_weblink WHERE 
			statustampil = '1' AND
			tgltampil <= '$tanggalhariini'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}

/* Terkini By Kanal */
function weblinkItem_PageLimit_Terkini_All_Publik_By_Kategori( $tbl_weblink, $idkategori, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_weblink WHERE 
			idkategori = '$idkategori' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' 
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}

/* Terkini By SubKanal */
function weblinkItem_PageLimit_Terkini_All_Publik_By_SubKategori( $tbl_weblink, $idkategorisub, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_weblink WHERE 
			idkategorisub = '$idkategorisub' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' 
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}



/* weblink Terpopuler publik */
function weblinkItem_PageLimit_Populer_All_Publik( $tbl_weblink, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_weblink WHERE 
			
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			dilihat >= '5'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}

/* weblink Terpopuler Berdasarkan Kategori Terkait */
function weblinkItem_PageLimit_Populer_All_Publik_ByKategori( $tbl_weblink, $idkategori, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_weblink WHERE 
			idkategori = '$idkategori' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			tgltampil <= '$tanggalhariini' AND
			dilihat >= '5'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}

/* Halaman Sub Kanal Untuk Box weblink Terpopuler Berdasarkan Sub Kategori Terkait */
function weblinkItem_PageLimit_Populer_All_Publik_BySubKategori( $tbl_weblink, $idkategorisub, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_weblink WHERE 
			 
			idkategorisub = '$idkategorisub' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			dilihat >= '5'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}







/* weblink terkomentari publik */
function weblinkItem_PageLimit_Terkomentari_All_Publik( $tbl_weblink, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_weblink WHERE 
			
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			dikomentari = '1'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}

/* weblink pilihan publik */
function weblinkItem_PageLimit_Pilihan_All_Publik( $tbl_weblink, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_weblink WHERE 
			
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			pilihan = '1'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}

/* Revisi 23/03/2011 */
function Detail_weblinkItem_Publik_Hotspot( $tbl_weblink, $idkategori, $idsubkategori  ){
		$sql = mysql_query("
		SELECT * FROM $tbl_weblink WHERE 
			idkategori = '$idkategori' AND
			idkategorisub = '$idsubkategori' AND
			statustampil='1' 
			ORDER BY judul ASC
		");
		$result = mysql_fetch_object($sql);
		return $result;
}

function Select_weblinkItem_Publik_LineUnderHotspot( $tbl_weblink, $idkategori, $idsubkategori, $tanggalhariini, $limit ){ /* Line Item weblink Under Hotspot Sub Kanal */
		$sql = mysql_query("
		SELECT * FROM $tbl_weblink WHERE 
			idkategori = '$idkategori' AND
			idkategorisub = '$idsubkategori' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' 
		 ORDER BY judul ASC LIMIT $limit	
		");
		return $sql;
}

function weblinkItem_PageLimit_Headline_UtamaHome( $tbl_weblink, $tanggalhariini , $dataPerPage ){

					$sql = mysql_query("
						SELECT * FROM weblink WHERE 
							tgltampil <='$tanggalhariini' AND
							statustampil ='1' AND
							headline = '1' 
								ORDER BY judul ASC
						LIMIT $dataPerPage
					");
					return $sql;
}


function weblinkItem_PageLimit_Headline_By_Kategori_Publik( $tbl_weblink, $tanggalhariini, $idkategori , $dataPerPage ){
					$sql = mysql_query("
						SELECT * FROM weblink WHERE 
							tgltampil <='$tanggalhariini' AND
							statustampil ='1' AND
							idkategori = '$idkategori' AND
							headline = '1' 
								ORDER BY judul ASC
						LIMIT $dataPerPage
					");
					return $sql;
}

function weblinkItem_PageLimit_Headline_By_SubKategori_Publik( $tbl_weblink, $tanggalhariini, $idkategorisub , $dataPerPage ){
					$sql = mysql_query("
						SELECT * FROM weblink WHERE 
							tgltampil <='$tanggalhariini' AND
							statustampil ='1' AND
							idkategorisub = '$idkategorisub' AND
							headline = '1' 
								ORDER BY judul ASC
						LIMIT $dataPerPage
					");
					return $sql;
}


function weblinkItem_PageLimit_Headline_Line_By_Kategori_Publik( $tbl_weblink, $tanggalhariini, $idkategori , $dataPerPage ){

					$sql = mysql_query("
						SELECT * FROM weblink WHERE 
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



	function Search_Item_weblink_By_Publik($cari, $tanggalhariini){
		
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE 
		
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND 
							
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 
 
			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
			
		ORDER BY judul ASC ");  

  		return $sql;
	}
	

	function  weblinkItem_HapusData( $tbl_weblink, $id){ /* Hapus Data Item */
		$sql = mysql_query("
			DELETE FROM $tbl_weblink WHERE id='$id'
		");
		return $sql;
	}
	
	
	function weblinkItem_StatusTampil( $tbl_weblink, $statustampil, $id ){ /* Tampil Kan Data */
		$sql = mysql_query("
			UPDATE $tbl_weblink SET
				statustampil = '$statustampil' 
			WHERE
				id = '$id'
		");
		return $sql;
	}


	function weblinkItem_HeadlineTampil( $tbl_weblink, $statustampil, $id ){ /* Tampilkan data di headline terkait */
		$sql = mysql_query("
			UPDATE $tbl_weblink SET
				headline = '$statustampil' 
			WHERE
				id = '$id'
		");
		return $sql;
	}


	function weblinkItem_PilihanTampil( $tbl_weblink, $statustampil, $id ){ /* tampilkan data pada pilihan terkait */
		$sql = mysql_query("
			UPDATE $tbl_weblink SET
				pilihan = '$statustampil' 
			WHERE
			id = '$id'
		");
		return $sql;
	}

	function weblinkItem_HotspotTampil( $tbl_weblink, $statustampil, $id ){ /* tampilkan data pada hotspot terkait */
		$sql = mysql_query("
			UPDATE $tbl_weblink SET
				hotspot = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}



	function weblinkItem_HapusImage( $tbl_weblink, $id ){
		$sql = mysql_query("
			UPDATE $tbl_weblink SET
				gambarkecil = '',
				gambarbesar = '',
				direktorigambar = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function weblinkItem_UpdateFileLampiran( $tbl_weblink, $id , $status ){
		$sql = mysql_query("
			UPDATE $tbl_weblink SET
				dilampirkan = '$status'
			WHERE
				id = '$id'
		");
	return $sql;
	}
	

	function weblinkItem_UpdateKomentar( $tbl_weblink, $id , $status  ){
		$sql = mysql_query("
			UPDATE $tbl_weblink SET
				dikomentari = '$status'
			WHERE
				id = '$id'
		");
	return $sql;
	}
	

	function SelectPublish_weblinkItem_Terkait( $tbl_weblink, $idkategori, $keyword , $tanggalhariini ){ /* Publish Item weblink Terkait */
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE 
			idkategori = '$idkategori' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND 
			keyword LIKE '%$keyword%' 
		ORDER BY judul ASC ");  
  		return $sql;
	}
	
	function SelectNonPublish_weblinkItem_Terkait( $tbl_weblink, $idkategori, $keyword , $tanggalhariini ){ /* Non Publish Item weblink Terkait */
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE 
			idkategori = '$idkategori' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='0' AND 
			keyword LIKE '%$keyword%' 
		ORDER BY judul ASC ");  
  		return $sql;
	}




function List_Indeks_weblink_Item($tbl_weblink, $tanggalhariini ){ 
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE 
			statustampil='1' AND
			tgltampil = '$tanggalhariini'
			ORDER BY judul ASC");  
  		return $sql;
}

function List_Indeks_weblink_Item_By_Tanggal($tbl_weblink, $tanggalhariini ){  
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE 
			statustampil = '1' AND
			tgltampil = '$tanggalhariini'
		ORDER BY judul ASC");  
  		return $sql;
}

function Total_Indeks_weblink_Item_By_Tanggal( $tbl_weblink, $tanggal ){  
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE 
			statustampil='1' AND
			tgltampil='$tanggal'  
			ORDER BY judul ASC");  
  		$hitung = mysql_num_rows($sql);
  		 
  		return $hitung;	
}


function List_Indeks_weblink_Item_Kategori_ByPage($tbl_weblink, $tanggalhariini, $idkategori , $offset , $dataPerPage   ){  
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE 
			statustampil = '1' AND
			tgltampil <='$tanggalhariini' AND
			idkategori ='$idkategori'
		ORDER BY judul ASC LIMIT $offset, $dataPerPage");  
  		return $sql;
}

function List_Indeks_weblink_Item_SubKategori_ByPage($tbl_weblink, $tanggalhariini, $idkategori , $offset , $dataPerPage   ){  
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE 
			statustampil = '1' AND
			tgltampil <='$tanggalhariini' AND
			idkategorisub ='$idkategori'
		ORDER BY judul ASC LIMIT $offset, $dataPerPage");  
  		return $sql;
}


 function  List_ALL_PUBLISH_Item_weblink_ByKategori_List($tbl_weblink, $tanggalhariini, $idkategori ){  
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE 
			statustampil = '1' AND
			tgltampil <='$tanggalhariini' AND
			idkategori ='$idkategori'
		ORDER BY judul ASC ");  
  		return $sql;
}

 function  List_ALL_PUBLISH_Item_weblink_BySubKategori_List($tbl_weblink, $tanggalhariini, $idkategori ){  
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE 
			statustampil = '1' AND
			tgltampil <='$tanggalhariini' AND
			idkategorisub ='$idkategori'
		ORDER BY judul ASC ");  
  		return $sql;
}

function Total_LIST_ALL_PUBLISH_Indeks_weblink_Item_ByKategori( $tbl_weblink, $tanggal, $idkategori ){  
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE 
			statustampil='1' AND
			tgltampil<='$tanggal' AND
			idkategori='$idkategori'
			ORDER BY judul ASC");  
  		$hitung = mysql_num_rows($sql);
  		return $hitung;		
}

function Total_LIST_ALL_PUBLISH_Indeks_weblink_Item_BySubKategori( $tbl_weblink, $tanggal, $idkategori ){  
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE 
			statustampil='1' AND
			tgltampil<='$tanggal' AND
			idkategorisub='$idkategori'
			ORDER BY judul ASC");  
  		$hitung = mysql_num_rows($sql);
  		return $hitung;	
}

function Total_Indeks_weblink_Item( $tbl_weblink, $tanggalhariini ){  
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE 
			statustampil='1' AND
			tgltampil = '$tanggalhariini'
			ORDER BY judul ASC");  
  		$hitung = mysql_num_rows($sql);
  		return $hitung;	
}
	

	

function List_Item_weblink_Publish_view_Halaman( $tbl_weblink, $idkategori, $idsubkategori,$offset, $dataPerPage ){
		$sql = mysql_query("
				SELECT * FROM $tbl_weblink WHERE 
						statustampil = '1' AND
						idkategori='$idkategori' AND
						idkategorisub='$idsubkategori' 
			
				ORDER BY urutan ASC
				LIMIT $offset, $dataPerPage
			
		");
		return $sql;
}


function List_weblink_File_Group_With_LimitPage( $tbl_weblink, $idkategori, $idsubkategori , $offset, $dataPerPage){

	$sql = mysql_query("
				SELECT * FROM $tbl_weblink WHERE 

						idkategori='$idkategori' AND
						idkategorisub='$idsubkategori' 
			
				ORDER BY judul ASC
				LIMIT $offset, $dataPerPage
			
		");
		
	return $sql;
}




/* View detail weblink by kategori , sub kategori  */
	function ViewDetail_Item_weblink_Kategori( $tbl_weblink, $idkategori, $idkategorisub ){
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE 
			idkategori = '$idkategori' AND 
			idkategorisub = '$idkategorisub' 
			
		ORDER BY id DESC
		");
		$result = mysql_fetch_object($sql);
		return $result;
	}



 


/* Listing detail weblink by kategori , sub kategori  */
	function ListDetail_Item_weblink_Kategori( $tbl_weblink, $idkategori, $idkategorisub ){
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE 
			idkategori = '$idkategori' AND 
			idkategorisub = '$idkategorisub' 
		ORDER BY id DESC
		");
		
		return $sql;
	}


/* Listing detail weblink by kategori , sub kategori  */
	function ListDetail_Item_weblink_Kategori_all( $tbl_weblink, $idkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_weblink WHERE 
			idkategori = '$idkategori' 
		ORDER BY id DESC
		");
		
		return $sql;
	}

?>