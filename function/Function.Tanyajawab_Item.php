<?php
/* PUSTAKA FUNGSI QUERY DATABASE PADA TABEL ITEM tanyajawab */
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
	/* Fungsi Buat ID Otomatis Untuk ID tanyajawab Item . */
	function tanyajawabItem_CreateID( $tbl_tanyajawab ){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$UID = $data["id"];
		$UID = $UID+1;  
		return $UID;
	}	 

 	/*  Fungsi Periksa Judul tanyajawab Kategori */
	function tanyajawabItem_PeriksaJudul( $tbl_tanyajawab, $judul, $judulinggris ){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE judul = '$judul' AND judulinggris = '$judulinggris'");
		return $sql;	
	}


 	/* FUNGSI TAMBAH DATA ITEM tanyajawab */
	function tanyajawabItem_TambahData(
		$tbl_tanyajawab,
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
		$sql = mysql_query("INSERT INTO $tbl_tanyajawab
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
function tanyajawabItem_BacaDataDetil( $tbl_tanyajawab, $id ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE id = '$id'");
	$result = mysql_fetch_object($sql);
	return $result;
}




/* FUNGSI UPDATE DATA ITEM */
function tanyajawabItem_UpdateData(
		$tbl_tanyajawab,
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
UPDATE $tbl_tanyajawab SET 

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
function tanyajawabItem_BacaDataListing_All( $tbl_tanyajawab , $offset , $dataPerPage){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_tanyajawabItem_BacaDataListing_All( $tbl_tanyajawab ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_tanyajawab");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}

/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) TERKOMENTARI ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_DiKomentari_All( $tbl_tanyajawab , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE dikomentari != '0' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_tanyajawabItem_BacaDataListing_DiKomentari_All( $tbl_tanyajawab ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_tanyajawab WHERE dikomentari != '0' ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) DENGAN FILE LAMPIRAN ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_DiLampirkan_All( $tbl_tanyajawab  , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE dilampirkan != '0' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_tanyajawabItem_BacaDataListing_DiLampirkan_All( $tbl_tanyajawab ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_tanyajawab WHERE dilampirkan != '0'  ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) PILIHAN ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_Pilihan_All( $tbl_tanyajawab , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE pilihan != '0' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_tanyajawabItem_BacaDataListing_Pilihan_All( $tbl_tanyajawab ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_tanyajawab WHERE pilihan != '0'  ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_TidakTampil_All( $tbl_tanyajawab , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE statustampil != '1' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_tanyajawabItem_BacaDataListing_TidakTampil_All( $tbl_tanyajawab ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_tanyajawab WHERE statustampil != '1'  ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) TIDAK DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_Tampil_All( $tbl_tanyajawab , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE statustampil = '0' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_tanyajawabItem_BacaDataListing_Tampil_All( $tbl_tanyajawab ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_tanyajawab WHERE statustampil = '0'  ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}



/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) DI HEADLINE ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_Headline_All( $tbl_tanyajawab , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE headline != '0' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_tanyajawabItem_BacaDataListing_Headline_All( $tbl_tanyajawab ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_tanyajawab WHERE headline != '0' ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) DI HOTSPOT ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_Hotspot_All( $tbl_tanyajawab , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE hotspot != '0' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_tanyajawabItem_BacaDataListing_Hotspot_All( $tbl_tanyajawab ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_tanyajawab WHERE hotspot != '0' ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}

/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) TIDAK POPULER ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_TidakPopuler_All( $tbl_tanyajawab , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE dilihat < '10' ORDER BY judul ASC
		LIMIT $offset, $dataPerPage
	");
	return $sql;
}

function GetJML_tanyajawabItem_BacaDataListing_TidakPopuler_All( $tbl_tanyajawab ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_tanyajawab WHERE dilihat < '10' ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


 
function tanyajawabItem_BacaDataListing_Terpopuler_All_ByPage( $tbl_tanyajawab , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab ORDER BY dilihat DESC LIMIT $offset, $dataPerPage");
	return $sql;
}
 
function tanyajawabItem_BacaDataListing_Terpopuler_All( $tbl_tanyajawab ){
/* Terpopuler sortir dilihat desc */
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab ORDER BY dilihat DESC");
	return $sql;
}


function GetJML_tanyajawabItem_BacaDataListing_Terpopuler_All( $tbl_tanyajawab ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_tanyajawab WHERE dilihat >= '10' ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


function Search_Item_tanyajawab_ALL($tbl_tanyajawab, $cari , $offset , $dataPerPage ){ /* tanyajawab Search */
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE 
		
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 
 
			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
			
		ORDER BY judul ASC LIMIT $offset, $dataPerPage");  
  		return $sql;
}


function GetJML_Search_Item_tanyajawab_ALL( $tbl_tanyajawab, $cari ){ /* tanyajawab Search Count */
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_tanyajawab WHERE 
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 

			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
		");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}
	

function Search_Item_tanyajawab_Publish_ByPage($tbl_tanyajawab, $cari , $offset , $dataPerPage ){ /* tanyajawab Search */
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE 
			statustampil = '1' AND
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 

			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
			
		ORDER BY judul ASC LIMIT $offset, $dataPerPage");  
  		return $sql;
}

function Search_Item_tanyajawab_Publish($tbl_tanyajawab, $cari ){ /* tanyajawab Search */
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE 
			statustampil = '1' AND
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 
 
			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
			
		ORDER BY judul ASC ");  
  		return $sql;
}

 function Search_Item_tanyajawab_All_data($tbl_tanyajawab, $cari ){ /* tanyajawab Search */
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE 
			 
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 
 
			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
			
		ORDER BY judul ASC ");  
  		return $sql;
}



function GetJML_Search_Item_tanyajawab_Publish( $tbl_tanyajawab, $cari ){ /* tanyajawab Search Count */
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_tanyajawab WHERE 
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


function Select_Item_tanyajawab_Terkait_ALL($tbl_tanyajawab, $keyword , $offset ){ /* tanyajawab Terkait All */
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE keyword LIKE '%$keyword%' ORDER BY judul ASC LIMIT $offset");  
  		return $sql;
}

function Select_Item_tanyajawab_Terkait_Publish($tbl_tanyajawab, $keyword , $offset , $id ){ /* tanyajawab Terkait Publish */
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE id!='$id' AND statustampil = '1' AND keyword LIKE '%$keyword%' ORDER BY judul ASC LIMIT $offset");  
  		return $sql;
}

/* -------------------- */







/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) TERKINI ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_ByKategori_Terkini_All( $tbl_tanyajawab , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE idkategori = '$idkategori' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) TERKOMENTARI ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_ByKategori_Dikomentari_All( $tbl_tanyajawab , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE idkategori = '$idkategori' AND dikomentari != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) DENGAN FILE LAMPIRAN ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_ByKategori_DiLampirkan_All( $tbl_tanyajawab , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE idkategori = '$idkategori' AND dilampirkan != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) PILIHAN ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_ByKategori_Pilihan_All( $tbl_tanyajawab , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE idkategori = '$idkategori' AND pilihan != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_ByKategori_Tampil_All( $tbl_tanyajawab , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE idkategori = '$idkategori' AND statustampil != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) TIDAK DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_ByKategori_TidakTampil_All( $tbl_tanyajawab , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE idkategori = '$idkategori' AND statustampil == '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) DI HEADLINE ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_ByKategori_Headline_All( $tbl_tanyajawab , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE idkategori = '$idkategori' AND headline != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) DI HOTSPOT ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_ByKategori_Hotspot_All( $tbl_tanyajawab , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE idkategori = '$idkategori' AND hotspot != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) TIDAK POPULER ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_ByKategori_TidakPopuler_All( $tbl_tanyajawab , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE idkategori = '$idkategori' AND dilihat < '10' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) POPULER ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_ByKategori_Terpopuler_All( $tbl_tanyajawab , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE idkategori = '$idkategori' AND dilihat > '20' ORDER BY judul ASC");
	return $sql;
}


/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) TERKINI ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_ByKategoriSub_Terkini_All( $tbl_tanyajawab , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub' ORDER BY judul ASC");
	return $sql;
}




/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) TERKOMENTARI ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_ByKategoriSub_DiKomentari_All( $tbl_tanyajawab , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND dikomentari != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) DENGAN FILE LAMPIRAN ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_ByKategoriSub_DiLampirkan_All( $tbl_tanyajawab , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND dilampirkan != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) PILIHAN ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_ByKategoriSub_Pilihan_All( $tbl_tanyajawab , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND pilihan != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_ByKategoriSub_Tampil_All( $tbl_tanyajawab , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND statustampil != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) TIDAK DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_ByKategoriSub_TidakTampil_All( $tbl_tanyajawab , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND statustampil == '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) DI HEADLINE ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_ByKategoriSub_Headline_All( $tbl_tanyajawab , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND headline != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) DI HOTSPOT ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_ByKategoriSub_Hotspot_All( $tbl_tanyajawab , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND hotspot != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) TIDAK POPULER ( UNTUK HALAMAN ADMIN ) */
function tanyajawabItem_BacaDataListing_ByKategoriSub_TidakPopuler_All( $tbl_tanyajawab , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND dilihat < '10' ORDER BY judul ASC");
	return $sql;
}


 
	/* Buat Direktori Untuk File Item tanyajawab */
	function tanyajawabItem_CreateDirektori(  
	  	$tanggalhariini
	){
 		$direktoribuat =  "filemodul/tanyajawab/" . "file_item/" . $tanggalhariini . "/";
			 mkdir( $direktoribuat,'0777',true); 
			 chmod( $direktoribuat, 0777);
		return $direktoribuat;
	}


 	
/* ITEM tanyajawab : hitung total item tanyajawab berdasarkan format tanggal bulan dan tahun */	
	function jmlArrtbl_tanyajawab($blnth,$idkat){
		$sqlText = "SELECT count(id) as jml FROM $tbl_tanyajawab where date_format(thedate, '%M %Y') = '$blnth'
					and idkat = $idkat";
					
  		$res = mysql_query($sqlText);
  		$row = mysql_fetch_object($res);
  		$jml = $row->jml;
  		return $jml;	
	}


	function Select_Item_tanyajawab_By_Search($cari)
	{
		
		$sqlText = "SELECT * FROM $tbl_tanyajawab WHERE judul LIKE '%$cari%' OR
			judulinggris 		LIKE '%$cari%' OR subjudul LIKE '%$cari%' OR
			subjudulinggris 	LIKE '%$cari%' OR preview  LIKE '%$cari%' OR
			previewinggris 		LIKE '%$cari%' 
		ORDER BY judul ASC ";  

  		
  		$result = mysql_query($sqlText);
  		return $result;
	}
	
	
	
	

	/* select detail item tanyajawab berdasarkan id terpilih */	
	function Select_Detail_Item_tanyajawab($tbl_tanyajawab, $id){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE id = '$id'");
		return mysql_fetch_object($sql);
	}

	

	/* Hitung Jumlah tanyajawab By Kategori & Sub Kategori */
	function GetJmlTotaltanyajawab( $tbl_tanyajawab, $idkategori, $idkategorisub ){
  		$sqlText = "SELECT count(id) AS jml FROM $tbl_tanyajawab WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
	
	function GetJmlTotaltanyajawabByUser( $idkategori , $idkategorisub , $posted ){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_tanyajawab WHERE 
		idkategori = '$idkategori' AND 
		idkategorisub = '$idkategorisub' AND 
		posted = '$posted'";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
 
 
 	function GetJmlTotal_tanyajawabTerkini( $tbl_tanyajawab, $idkategori, $idkategorisub ){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_tanyajawab";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
 
 	function tanyajawab_hostpot($sesid){
		$sqlText = "SELECT * FROM $tbl_tanyajawab where hostpot_headline = 1 and sesid = $sesid ORDER BY thedate DESC, thetime DESC limit 4 ";
		return mysql_query($sqlText);
	}
	
	function tanyajawab_hostpot_rev($time_stam,$sesid){	
  		$sqlText = "SELECT * FROM $tbl_tanyajawab where thejmt < $time_stam and hostpot_headline = 1 and sesid = $sesid ORDER BY thejmt DESC limit 4";  
  		return mysql_query($sqlText);
	}
	
	
	function list_indeks_tanyajawab($time_stam,$sesid){
  		$sqlText = "SELECT * FROM $tbl_tanyajawab where thedate = '$time_stam' and sesid = $sesid ORDER BY thedate DESC";  
  		return mysql_query($sqlText);
	}
	
	
	function detail_tanyajawab_hostpot($sesid){
		$sqlText = "SELECT * FROM $tbl_tanyajawab where hostpot_headline = 1 and sesid = $sesid ORDER BY thedate DESC, thetime DESC";
		$result = mysql_query($sqlText);
		return mysql_fetch_object($result);
	}
	
	
	function detail_tanyajawab_hostpot_rev($time_stam,$sesid){
   		$sqlText = "SELECT * FROM $tbl_tanyajawab where thejmt < $time_stam and hostpot_headline = 1 and sesid = $sesid ORDER BY thejmt DESC";  
  		$result = mysql_query($sqlText);
		return mysql_fetch_object($result);
	}
	
	function tanyajawab_hostpot_kategori($idkat){
		$sqlText = "SELECT * FROM $tbl_tanyajawab where tanyajawab_single = 1 and idkat = $idkat ORDER BY thedate DESC, thetime DESC";
		$result = mysql_query($sqlText);
		return mysql_fetch_object($result);
	}


	
	function tanyajawab_hostpot_kategori_rev($time_stam,$idkat){
  		
  		$sqlText = "SELECT * FROM $tbl_tanyajawab where thejmt < $time_stam and tanyajawab_single = 1 and idkat = $idkat ORDER BY thejmt DESC";  
  		$result = mysql_query($sqlText);
		return mysql_fetch_object($result);
	}
	
	
	
	function cekKategoritanyajawab($idkat){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_tanyajawab where idkat = $idkat";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
	

	
/* ITEM tanyajawab : Update item tanyajawab dilihat */
	function tanyajawabDiLihat( $tbl_tanyajawab, $Det ){
	
			$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE id='$Det'");
			$datatanyajawab = mysql_fetch_array($sql);
			$dilihat = $datatanyajawab ['dilihat'];
			$dilihat = $dilihat+1;
	
			$sqlupdate = mysql_query("UPDATE $tbl_tanyajawab SET dilihat='$dilihat' WHERE id='$Det'");
			
			return $sqlupdate;
	}


/* ITEM tanyajawab : select detail item tanyajawab berdasarkan tanggal tampil, jam tampil , status tampil */
	function ViewDetail_Item_tanyajawab( $tbl_tanyajawab, $id ){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE id = '$id'");
		$result = mysql_fetch_object($sql);
		return $result;
	}
	
	
/* ITEM tanyajawab : select item tanyajawab berdasarkan tanggal tampil >= tanggal saat ini  , jam tampil >= jam saat ini , status tampil = 1 */	
	
	function tanyajawabTerbaru($tbl_tanyajawab, $tanggalhariini, $Cat, $SubCat ){
		$sqlText = "SELECT * FROM $tbl_tanyajawab WHERE 
						
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
/* ITEM tanyajawab : select item tanyajawab berdasarkan tanggal tampil = tanggal kemarin, status tampil = 1 , kanal dan sub kanal terkait pengurutan berdasarkan tanggal tampil & jam tampil limit 5 baris */
	function tanyajawabKemaren( $tbl_tanyajawab, $tglkemarin, $Cat, $SubCat ){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE

						tgltampil = '$tglkemarin' AND
						statustampil='1' AND 

						idkategori = '$Cat' AND 
						idkategorisub = '$SubCat' 
						
						ORDER BY 
						
						tgltampil DESC, jamtampil DESC limit 5");
		return $sql;
	}


	function tanyajawabTerkait( $tbl_tanyajawab, $tanggalhariini, $Cat, $SubCat )
	{
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE
		
						tgltampil <= '$tanggalhariini' AND
						jamtampil <= '$jamsaatini' AND
						statustampil='1' AND 
		
						idkategori = '$Cat' AND 
						idkategorisub = '$SubCat' 
						
						ORDER BY judul ASC limit 5");
						
		return $sql;
	}
	
/* ITEM tanyajawab : select item tanyajawab berdasarkan kanal terkait */	
	function tanyajawabKategoriTerkait( $tbl_tanyajawab,  $tanggalhariini, $Cat, $Det )
	{
	
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE
		
						tgltampil <= '$tanggalhariini' AND
						statustampil='1' AND 
		
						idkategori = '$Cat'
						 
						
						ORDER BY judul ASC limit 7");
						
		return $sql;
	}




function tanyajawabItem_PageLimit_Terkini_By_Kategori_Publik( $tbl_tanyajawab, $tanggalhariini, $idkategori , $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_tanyajawab WHERE 
			
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			idkategori = '$idkategori'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
		
}

function tanyajawabItem_PageLimit_Terkini_By_SubKategori_Publik( $tbl_tanyajawab, $tanggalhariini, $idkategori , $idkategorisub, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_tanyajawab WHERE 
			tgltampil <= '$timeunix'
			statustampil='1' AND
			idkategori = '$idkategori' AND
			idkategorisub = '$idkategorisub'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}


 
 
/* Terkini Homepage */
function tanyajawabItem_PageLimit_Terkini_All_Publik( $tbl_tanyajawab, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_tanyajawab WHERE 
			statustampil = '1' AND
			tgltampil <= '$tanggalhariini'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}

/* Terkini By Kanal */
function tanyajawabItem_PageLimit_Terkini_All_Publik_By_Kategori( $tbl_tanyajawab, $idkategori, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_tanyajawab WHERE 
			idkategori = '$idkategori' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' 
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}

/* Terkini By SubKanal */
function tanyajawabItem_PageLimit_Terkini_All_Publik_By_SubKategori( $tbl_tanyajawab, $idkategorisub, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_tanyajawab WHERE 
			idkategorisub = '$idkategorisub' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' 
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}



/* tanyajawab Terpopuler publik */
function tanyajawabItem_PageLimit_Populer_All_Publik( $tbl_tanyajawab, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_tanyajawab WHERE 
			
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			dilihat >= '5'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}

/* tanyajawab Terpopuler Berdasarkan Kategori Terkait */
function tanyajawabItem_PageLimit_Populer_All_Publik_ByKategori( $tbl_tanyajawab, $idkategori, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_tanyajawab WHERE 
			idkategori = '$idkategori' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			tgltampil <= '$tanggalhariini' AND
			dilihat >= '5'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}

/* Halaman Sub Kanal Untuk Box tanyajawab Terpopuler Berdasarkan Sub Kategori Terkait */
function tanyajawabItem_PageLimit_Populer_All_Publik_BySubKategori( $tbl_tanyajawab, $idkategorisub, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_tanyajawab WHERE 
			 
			idkategorisub = '$idkategorisub' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			dilihat >= '5'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}







/* tanyajawab terkomentari publik */
function tanyajawabItem_PageLimit_Terkomentari_All_Publik( $tbl_tanyajawab, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_tanyajawab WHERE 
			
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			dikomentari = '1'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}

/* tanyajawab pilihan publik */
function tanyajawabItem_PageLimit_Pilihan_All_Publik( $tbl_tanyajawab, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_tanyajawab WHERE 
			
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			pilihan = '1'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}

/* Revisi 23/03/2011 */
function Detail_tanyajawabItem_Publik_Hotspot( $tbl_tanyajawab, $idkategori, $idsubkategori  ){
		$sql = mysql_query("
		SELECT * FROM $tbl_tanyajawab WHERE 
			idkategori = '$idkategori' AND
			idkategorisub = '$idsubkategori' AND
			statustampil='1' 
			ORDER BY judul ASC
		");
		$result = mysql_fetch_object($sql);
		return $result;
}

function Select_tanyajawabItem_Publik_LineUnderHotspot( $tbl_tanyajawab, $idkategori, $idsubkategori, $tanggalhariini, $limit ){ /* Line Item tanyajawab Under Hotspot Sub Kanal */
		$sql = mysql_query("
		SELECT * FROM $tbl_tanyajawab WHERE 
			idkategori = '$idkategori' AND
			idkategorisub = '$idsubkategori' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' 
		 ORDER BY judul ASC LIMIT $limit	
		");
		return $sql;
}

function tanyajawabItem_PageLimit_Headline_UtamaHome( $tbl_tanyajawab, $tanggalhariini , $dataPerPage ){

					$sql = mysql_query("
						SELECT * FROM tanyajawab WHERE 
							tgltampil <='$tanggalhariini' AND
							statustampil ='1' AND
							headline = '1' 
								ORDER BY judul ASC
						LIMIT $dataPerPage
					");
					return $sql;
}


function tanyajawabItem_PageLimit_Headline_By_Kategori_Publik( $tbl_tanyajawab, $tanggalhariini, $idkategori , $dataPerPage ){
					$sql = mysql_query("
						SELECT * FROM tanyajawab WHERE 
							tgltampil <='$tanggalhariini' AND
							statustampil ='1' AND
							idkategori = '$idkategori' AND
							headline = '1' 
								ORDER BY judul ASC
						LIMIT $dataPerPage
					");
					return $sql;
}

function tanyajawabItem_PageLimit_Headline_By_SubKategori_Publik( $tbl_tanyajawab, $tanggalhariini, $idkategorisub , $dataPerPage ){
					$sql = mysql_query("
						SELECT * FROM tanyajawab WHERE 
							tgltampil <='$tanggalhariini' AND
							statustampil ='1' AND
							idkategorisub = '$idkategorisub' AND
							headline = '1' 
								ORDER BY judul ASC
						LIMIT $dataPerPage
					");
					return $sql;
}


function tanyajawabItem_PageLimit_Headline_Line_By_Kategori_Publik( $tbl_tanyajawab, $tanggalhariini, $idkategori , $dataPerPage ){

					$sql = mysql_query("
						SELECT * FROM tanyajawab WHERE 
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



	function Search_Item_tanyajawab_By_Publik($cari, $tanggalhariini){
		
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE 
		
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND 
							
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 
 
			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
			
		ORDER BY judul ASC ");  

  		return $sql;
	}
	

	function  tanyajawabItem_HapusData( $tbl_tanyajawab, $id){ /* Hapus Data Item */
		$sql = mysql_query("
			DELETE FROM $tbl_tanyajawab WHERE id='$id'
		");
		return $sql;
	}
	
	
	function tanyajawabItem_StatusTampil( $tbl_tanyajawab, $statustampil, $id ){ /* Tampil Kan Data */
		$sql = mysql_query("
			UPDATE $tbl_tanyajawab SET
				statustampil = '$statustampil' 
			WHERE
				id = '$id'
		");
		return $sql;
	}


	function tanyajawabItem_HeadlineTampil( $tbl_tanyajawab, $statustampil, $id ){ /* Tampilkan data di headline terkait */
		$sql = mysql_query("
			UPDATE $tbl_tanyajawab SET
				headline = '$statustampil' 
			WHERE
				id = '$id'
		");
		return $sql;
	}


	function tanyajawabItem_PilihanTampil( $tbl_tanyajawab, $statustampil, $id ){ /* tampilkan data pada pilihan terkait */
		$sql = mysql_query("
			UPDATE $tbl_tanyajawab SET
				pilihan = '$statustampil' 
			WHERE
			id = '$id'
		");
		return $sql;
	}

	function tanyajawabItem_HotspotTampil( $tbl_tanyajawab, $statustampil, $id ){ /* tampilkan data pada hotspot terkait */
		$sql = mysql_query("
			UPDATE $tbl_tanyajawab SET
				hotspot = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}



	function tanyajawabItem_HapusImage( $tbl_tanyajawab, $id ){
		$sql = mysql_query("
			UPDATE $tbl_tanyajawab SET
				gambarkecil = '',
				gambarbesar = '',
				direktorigambar = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function tanyajawabItem_UpdateFileLampiran( $tbl_tanyajawab, $id , $status ){
		$sql = mysql_query("
			UPDATE $tbl_tanyajawab SET
				dilampirkan = '$status'
			WHERE
				id = '$id'
		");
	return $sql;
	}
	

	function tanyajawabItem_UpdateKomentar( $tbl_tanyajawab, $id , $status  ){
		$sql = mysql_query("
			UPDATE $tbl_tanyajawab SET
				dikomentari = '$status'
			WHERE
				id = '$id'
		");
	return $sql;
	}
	

	function SelectPublish_tanyajawabItem_Terkait( $tbl_tanyajawab, $idkategori, $keyword , $tanggalhariini ){ /* Publish Item tanyajawab Terkait */
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE 
			idkategori = '$idkategori' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND 
			keyword LIKE '%$keyword%' 
		ORDER BY judul ASC ");  
  		return $sql;
	}
	
	function SelectNonPublish_tanyajawabItem_Terkait( $tbl_tanyajawab, $idkategori, $keyword , $tanggalhariini ){ /* Non Publish Item tanyajawab Terkait */
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE 
			idkategori = '$idkategori' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='0' AND 
			keyword LIKE '%$keyword%' 
		ORDER BY judul ASC ");  
  		return $sql;
	}




function List_Indeks_tanyajawab_Item($tbl_tanyajawab, $tanggalhariini ){ 
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE 
			statustampil='1' AND
			tgltampil = '$tanggalhariini'
			ORDER BY judul ASC");  
  		return $sql;
}

function List_Indeks_tanyajawab_Item_By_Tanggal($tbl_tanyajawab, $tanggalhariini ){  
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE 
			statustampil = '1' AND
			tgltampil = '$tanggalhariini'
		ORDER BY judul ASC");  
  		return $sql;
}

function Total_Indeks_tanyajawab_Item_By_Tanggal( $tbl_tanyajawab, $tanggal ){  
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE 
			statustampil='1' AND
			tgltampil='$tanggal'  
			ORDER BY judul ASC");  
  		$hitung = mysql_num_rows($sql);
  		 
  		return $hitung;	
}


function List_Indeks_tanyajawab_Item_Kategori_ByPage($tbl_tanyajawab, $tanggalhariini, $idkategori , $offset , $dataPerPage   ){  
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE 
			statustampil = '1' AND
			tgltampil <='$tanggalhariini' AND
			idkategori ='$idkategori'
		ORDER BY judul ASC LIMIT $offset, $dataPerPage");  
  		return $sql;
}

function List_Indeks_tanyajawab_Item_SubKategori_ByPage($tbl_tanyajawab, $tanggalhariini, $idkategori , $offset , $dataPerPage   ){  
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE 
			statustampil = '1' AND
			tgltampil <='$tanggalhariini' AND
			idkategorisub ='$idkategori'
		ORDER BY judul ASC LIMIT $offset, $dataPerPage");  
  		return $sql;
}


 function  List_ALL_PUBLISH_Item_tanyajawab_ByKategori_List($tbl_tanyajawab, $tanggalhariini, $idkategori ){  
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE 
			statustampil = '1' AND
			tgltampil <='$tanggalhariini' AND
			idkategori ='$idkategori'
		ORDER BY judul ASC ");  
  		return $sql;
}

 function  List_ALL_PUBLISH_Item_tanyajawab_BySubKategori_List($tbl_tanyajawab, $tanggalhariini, $idkategori ){  
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE 
			statustampil = '1' AND
			tgltampil <='$tanggalhariini' AND
			idkategorisub ='$idkategori'
		ORDER BY judul ASC ");  
  		return $sql;
}

function Total_LIST_ALL_PUBLISH_Indeks_tanyajawab_Item_ByKategori( $tbl_tanyajawab, $tanggal, $idkategori ){  
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE 
			statustampil='1' AND
			tgltampil<='$tanggal' AND
			idkategori='$idkategori'
			ORDER BY judul ASC");  
  		$hitung = mysql_num_rows($sql);
  		return $hitung;		
}

function Total_LIST_ALL_PUBLISH_Indeks_tanyajawab_Item_BySubKategori( $tbl_tanyajawab, $tanggal, $idkategori ){  
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE 
			statustampil='1' AND
			tgltampil<='$tanggal' AND
			idkategorisub='$idkategori'
			ORDER BY judul ASC");  
  		$hitung = mysql_num_rows($sql);
  		return $hitung;	
}

function Total_Indeks_tanyajawab_Item( $tbl_tanyajawab, $tanggalhariini ){  
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE 
			statustampil='1' AND
			tgltampil = '$tanggalhariini'
			ORDER BY judul ASC");  
  		$hitung = mysql_num_rows($sql);
  		return $hitung;	
}
	

	

function List_Item_tanyajawab_Publish_view_Halaman( $tbl_tanyajawab, $idkategori, $idsubkategori,$offset, $dataPerPage ){
		$sql = mysql_query("
				SELECT * FROM $tbl_tanyajawab WHERE 
						statustampil = '1' AND
						idkategori='$idkategori' AND
						idkategorisub='$idsubkategori' 
			
				ORDER BY urutan ASC
				LIMIT $offset, $dataPerPage
			
		");
		return $sql;
}


function List_tanyajawab_File_Group_With_LimitPage( $tbl_tanyajawab, $idkategori, $idsubkategori , $offset, $dataPerPage){

	$sql = mysql_query("
				SELECT * FROM $tbl_tanyajawab WHERE 

						idkategori='$idkategori' AND
						idkategorisub='$idsubkategori' 
			
				ORDER BY judul ASC
				LIMIT $offset, $dataPerPage
			
		");
		
	return $sql;
}




/* View detail tanyajawab by kategori , sub kategori  */
	function ViewDetail_Item_tanyajawab_Kategori( $tbl_tanyajawab, $idkategori, $idkategorisub ){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE 
			idkategori = '$idkategori' AND 
			idkategorisub = '$idkategorisub' 
			
		ORDER BY id DESC
		");
		$result = mysql_fetch_object($sql);
		return $result;
	}



 


/* Listing detail tanyajawab by kategori , sub kategori  */
	function ListDetail_Item_tanyajawab_Kategori( $tbl_tanyajawab, $idkategori, $idkategorisub ){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE 
			idkategori = '$idkategori' AND 
			idkategorisub = '$idkategorisub' 
		ORDER BY id DESC
		");
		
		return $sql;
	}


/* Listing detail tanyajawab by kategori , sub kategori  */
	function ListDetail_Item_tanyajawab_Kategori_all( $tbl_tanyajawab, $idkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawab WHERE 
			idkategori = '$idkategori' 
		ORDER BY id DESC
		");
		
		return $sql;
	}

?>