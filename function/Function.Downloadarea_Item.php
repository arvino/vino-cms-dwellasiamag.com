<?php
/* PUSTAKA FUNGSI QUERY DATABASE PADA TABEL ITEM downloadarea */
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
	/* Fungsi Buat ID Otomatis Untuk ID downloadarea Item . */
	function downloadareaItem_CreateID( $tbl_downloadarea ){
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$UID = $data["id"];
		$UID = $UID+1;  
		return $UID;
	}	 

 	/*  Fungsi Periksa Judul downloadarea Kategori */
	function downloadareaItem_PeriksaJudul( $tbl_downloadarea, $judul, $judulinggris ){
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE judul = '$judul' AND judulinggris = '$judulinggris'");
		return $sql;	
	}

 
 	/* FUNGSI TAMBAH DATA ITEM downloadarea */
	function downloadareaItem_TambahData(
		$tbl_downloadarea,
		$id, $idupline, $idkategori, $idkategorisub,
		$judul, $judulinggris, $subjudul, $subjudulinggris,
		$preview, $previewinggris, $deskripsi, $deskripsiinggris,
		$tglpost, $jampost, $tgltampil, $jamtampil,
		$timeunix, $gambarkecil, $gambarbesar,
		$keterangangambar, $imagelogo, $dikomentari,
		$dilampirkan, $dilihat, $statustampil,
		$idusers, $idadmin, $direktorigambar,
		$linkjudul, $keyword
	){
		$sql = mysql_query("INSERT INTO $tbl_downloadarea
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
				dilihat, statustampil, idusers, idadmin,
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
				'$dilihat', '$statustampil',
				'$idusers', '$idadmin',
				'$direktorigambar', '$linkjudul', '$keyword'
  
		)");
		return $sql;
	}
	
	
/* FUNGSI BACA DATA ITEM DETIL */
function downloadareaItem_BacaDataDetil( $tbl_downloadarea, $id ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE id = '$id'");
	$result = mysql_fetch_object($sql);
	return $result;
}



/* FUNGSI UPDATE DATA ITEM */
function downloadareaItem_UpdateData(
		$tbl_downloadarea,
		$id, $idupline, $idkategori, $idkategorisub,
		$judul, $judulinggris, $subjudul, $subjudulinggris,
		$preview, $previewinggris, $deskripsi, $deskripsiinggris,
		$tglpost, $jampost, $tgltampil, $jamtampil,
		$timeunix, $gambarkecil, $gambarbesar,
		$keterangangambar, $imagelogo, $dikomentari,
		$dilampirkan, $dilihat, $statustampil,
		$idusers, $idadmin, $direktorigambar,
		$linkjudul, $keyword
		){
		$sql = mysql_query(
		"
UPDATE $tbl_downloadarea SET 

	idupline ='$idupline', 	idkategori ='$idkategori',
	idkategorisub ='$idkategorisub', judul ='$judul', judulinggris ='$judulinggris', 	
	subjudul='$subjudul', subjudulinggris='$subjudulinggris', preview='$preview', previewinggris='$previewinggris',
	deskripsi ='$deskripsi', deskripsiinggris ='$deskripsiinggris', tglpost ='$tglpost', jampost ='$jampost',
	tgltampil ='$tgltampil', jamtampil ='$jamtampil', timeunix = '$timeunix', gambarkecil ='$gambarkecil',
	gambarbesar ='$gambarbesar', keterangangambar ='$keterangangambar', imagelogo ='$imagelogo',
	dikomentari ='$dikomentari', dilampirkan ='$dilampirkan', dilihat ='$dilihat',
	statustampil ='$statustampil', idusers ='$idusers', idadmin ='$idadmin',
	direktorigambar ='$direktorigambar', linkjudul ='$linkjudul', keyword ='$keyword'

WHERE
	id ='$id'
		");
		
return $sql;
		
}








/* -------------------- *//* -------------------- *//* -------------------- *//* -------------------- *//* -------------------- *//* -------------------- */

/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) TERKINI ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_All( $tbl_downloadarea , $offset , $dataPerPage){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_downloadareaItem_BacaDataListing_All( $tbl_downloadarea ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_downloadarea");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}

/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) TERKOMENTARI ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_DiKomentari_All( $tbl_downloadarea , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE dikomentari != '0' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_downloadareaItem_BacaDataListing_DiKomentari_All( $tbl_downloadarea ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_downloadarea WHERE dikomentari != '0' ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) DENGAN FILE LAMPIRAN ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_DiLampirkan_All( $tbl_downloadarea  , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE dilampirkan != '0' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_downloadareaItem_BacaDataListing_DiLampirkan_All( $tbl_downloadarea ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_downloadarea WHERE dilampirkan != '0'  ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) PILIHAN ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_Pilihan_All( $tbl_downloadarea , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE pilihan != '0' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_downloadareaItem_BacaDataListing_Pilihan_All( $tbl_downloadarea ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_downloadarea WHERE pilihan != '0'  ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_TidakTampil_All( $tbl_downloadarea , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE statustampil != '1' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_downloadareaItem_BacaDataListing_TidakTampil_All( $tbl_downloadarea ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_downloadarea WHERE statustampil != '1'  ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) TIDAK DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_Tampil_All( $tbl_downloadarea , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE statustampil = '0' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_downloadareaItem_BacaDataListing_Tampil_All( $tbl_downloadarea ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_downloadarea WHERE statustampil = '0'  ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}



/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) DI HEADLINE ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_Headline_All( $tbl_downloadarea , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE headline != '0' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_downloadareaItem_BacaDataListing_Headline_All( $tbl_downloadarea ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_downloadarea WHERE headline != '0' ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) DI HOTSPOT ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_Hotspot_All( $tbl_downloadarea , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE hotspot != '0' ORDER BY judul ASC	LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_downloadareaItem_BacaDataListing_Hotspot_All( $tbl_downloadarea ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_downloadarea WHERE hotspot != '0' ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}

/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) TIDAK POPULER ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_TidakPopuler_All( $tbl_downloadarea , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE dilihat < '10' ORDER BY judul ASC
		LIMIT $offset, $dataPerPage
	");
	return $sql;
}

function GetJML_downloadareaItem_BacaDataListing_TidakPopuler_All( $tbl_downloadarea ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_downloadarea WHERE dilihat < '10' ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


 
function downloadareaItem_BacaDataListing_Terpopuler_All_ByPage( $tbl_downloadarea , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea ORDER BY dilihat DESC LIMIT $offset, $dataPerPage");
	return $sql;
}
 
function downloadareaItem_BacaDataListing_Terpopuler_All( $tbl_downloadarea ){
/* Terpopuler sortir dilihat desc */
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea ORDER BY dilihat DESC");
	return $sql;
}


function GetJML_downloadareaItem_BacaDataListing_Terpopuler_All( $tbl_downloadarea ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_downloadarea WHERE dilihat >= '10' ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


function Search_Item_downloadarea_ALL($tbl_downloadarea, $cari , $offset , $dataPerPage ){ /* downloadarea Search */
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE 
		
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 
 
			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
			
		ORDER BY judul ASC LIMIT $offset, $dataPerPage");  
  		return $sql;
}


function GetJML_Search_Item_downloadarea_ALL( $tbl_downloadarea, $cari ){ /* downloadarea Search Count */
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_downloadarea WHERE 
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 

			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
		");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}
	

function Search_Item_downloadarea_Publish_ByPage($tbl_downloadarea, $cari , $offset , $dataPerPage ){ /* downloadarea Search */
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE 
			statustampil = '1' AND
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 

			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
			
		ORDER BY judul ASC LIMIT $offset, $dataPerPage");  
  		return $sql;
}

function Search_Item_downloadarea_Publish($tbl_downloadarea, $cari ){ /* downloadarea Search */
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE 
			statustampil = '1' AND
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 
 
			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
			
		ORDER BY judul ASC ");  
  		return $sql;
}

 function Search_Item_downloadarea_All_data($tbl_downloadarea, $cari ){ /* downloadarea Search */
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE 
			 
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 
 
			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
			
		ORDER BY judul ASC ");  
  		return $sql;
}



function GetJML_Search_Item_downloadarea_Publish( $tbl_downloadarea, $cari ){ /* downloadarea Search Count */
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_downloadarea WHERE 
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


function Select_Item_downloadarea_Terkait_ALL($tbl_downloadarea, $keyword , $offset ){ /* downloadarea Terkait All */
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE keyword LIKE '%$keyword%' ORDER BY judul ASC LIMIT $offset");  
  		return $sql;
}

function Select_Item_downloadarea_Terkait_Publish($tbl_downloadarea, $keyword , $offset , $id ){ /* downloadarea Terkait Publish */
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE id!='$id' AND statustampil = '1' AND keyword LIKE '%$keyword%' ORDER BY judul ASC LIMIT $offset");  
  		return $sql;
}

/* -------------------- */







/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) TERKINI ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_ByKategori_Terkini_All( $tbl_downloadarea , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE idkategori = '$idkategori' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) TERKOMENTARI ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_ByKategori_Dikomentari_All( $tbl_downloadarea , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE idkategori = '$idkategori' AND dikomentari != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) DENGAN FILE LAMPIRAN ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_ByKategori_DiLampirkan_All( $tbl_downloadarea , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE idkategori = '$idkategori' AND dilampirkan != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) PILIHAN ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_ByKategori_Pilihan_All( $tbl_downloadarea , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE idkategori = '$idkategori' AND pilihan != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_ByKategori_Tampil_All( $tbl_downloadarea , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE idkategori = '$idkategori' AND statustampil != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) TIDAK DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_ByKategori_TidakTampil_All( $tbl_downloadarea , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE idkategori = '$idkategori' AND statustampil == '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) DI HEADLINE ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_ByKategori_Headline_All( $tbl_downloadarea , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE idkategori = '$idkategori' AND headline != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) DI HOTSPOT ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_ByKategori_Hotspot_All( $tbl_downloadarea , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE idkategori = '$idkategori' AND hotspot != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) TIDAK POPULER ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_ByKategori_TidakPopuler_All( $tbl_downloadarea , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE idkategori = '$idkategori' AND dilihat < '10' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) POPULER ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_ByKategori_Terpopuler_All( $tbl_downloadarea , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE idkategori = '$idkategori' AND dilihat > '20' ORDER BY judul ASC");
	return $sql;
}


/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) TERKINI ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_ByKategoriSub_Terkini_All( $tbl_downloadarea , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub' ORDER BY judul ASC");
	return $sql;
}




/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) TERKOMENTARI ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_ByKategoriSub_DiKomentari_All( $tbl_downloadarea , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND dikomentari != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) DENGAN FILE LAMPIRAN ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_ByKategoriSub_DiLampirkan_All( $tbl_downloadarea , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND dilampirkan != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) PILIHAN ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_ByKategoriSub_Pilihan_All( $tbl_downloadarea , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND pilihan != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_ByKategoriSub_Tampil_All( $tbl_downloadarea , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND statustampil != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) TIDAK DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_ByKategoriSub_TidakTampil_All( $tbl_downloadarea , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND statustampil == '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) DI HEADLINE ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_ByKategoriSub_Headline_All( $tbl_downloadarea , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND headline != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) DI HOTSPOT ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_ByKategoriSub_Hotspot_All( $tbl_downloadarea , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND hotspot != '0' ORDER BY judul ASC");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) TIDAK POPULER ( UNTUK HALAMAN ADMIN ) */
function downloadareaItem_BacaDataListing_ByKategoriSub_TidakPopuler_All( $tbl_downloadarea , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND dilihat < '10' ORDER BY judul ASC");
	return $sql;
}


 
	/* Buat Direktori Untuk File Item downloadarea */
	function downloadareaItem_CreateDirektori(  
	  	$tanggalhariini
	){
 		$direktoribuat =  "filemodul/downloadarea/" . "file_item/" . $tanggalhariini . "/";
			 mkdir( $direktoribuat,'0777',true); 
			 chmod( $direktoribuat, 0777);
		return $direktoribuat;
	}


 	
/* ITEM downloadarea : hitung total item downloadarea berdasarkan format tanggal bulan dan tahun */	
	function jmlArrtbl_downloadarea($blnth,$idkat){
		$sqlText = "SELECT count(id) as jml FROM $tbl_downloadarea where date_format(thedate, '%M %Y') = '$blnth'
					and idkat = $idkat";
					
  		$res = mysql_query($sqlText);
  		$row = mysql_fetch_object($res);
  		$jml = $row->jml;
  		return $jml;	
	}


	function Select_Item_downloadarea_By_Search($cari)
	{
		
		$sqlText = "SELECT * FROM $tbl_downloadarea WHERE judul LIKE '%$cari%' OR
			judulinggris 		LIKE '%$cari%' OR subjudul LIKE '%$cari%' OR
			subjudulinggris 	LIKE '%$cari%' OR preview  LIKE '%$cari%' OR
			previewinggris 		LIKE '%$cari%' 
		ORDER BY judul ASC ";  

  		
  		$result = mysql_query($sqlText);
  		return $result;
	}
	
	
	
	

	/* select detail item downloadarea berdasarkan id terpilih */	
	function Select_Detail_Item_downloadarea($tbl_downloadarea, $id){
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE id = '$id'");
		return mysql_fetch_object($sql);
	}

	

	/* Hitung Jumlah downloadarea By Kategori & Sub Kategori */
	function GetJmlTotaldownloadarea( $tbl_downloadarea, $idkategori, $idkategorisub ){
  		$sqlText = "SELECT count(id) AS jml FROM $tbl_downloadarea WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
	
	function GetJmlTotaldownloadareaByUser( $idkategori , $idkategorisub , $posted ){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_downloadarea WHERE 
		idkategori = '$idkategori' AND 
		idkategorisub = '$idkategorisub' AND 
		posted = '$posted'";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
 
 
 	function GetJmlTotal_downloadareaTerkini( $tbl_downloadarea, $idkategori, $idkategorisub ){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_downloadarea";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
 
 	function downloadarea_hostpot($sesid){
		$sqlText = "SELECT * FROM $tbl_downloadarea where hostpot_headline = 1 and sesid = $sesid ORDER BY thedate DESC, thetime DESC limit 4 ";
		return mysql_query($sqlText);
	}
	
	function downloadarea_hostpot_rev($time_stam,$sesid){	
  		$sqlText = "SELECT * FROM $tbl_downloadarea where thejmt < $time_stam and hostpot_headline = 1 and sesid = $sesid ORDER BY thejmt DESC limit 4";  
  		return mysql_query($sqlText);
	}
	
	
	function list_indeks_downloadarea($time_stam,$sesid){
  		$sqlText = "SELECT * FROM $tbl_downloadarea where thedate = '$time_stam' and sesid = $sesid ORDER BY thedate DESC";  
  		return mysql_query($sqlText);
	}
	
	
	function detail_downloadarea_hostpot($sesid){
		$sqlText = "SELECT * FROM $tbl_downloadarea where hostpot_headline = 1 and sesid = $sesid ORDER BY thedate DESC, thetime DESC";
		$result = mysql_query($sqlText);
		return mysql_fetch_object($result);
	}
	
	
	function detail_downloadarea_hostpot_rev($time_stam,$sesid){
   		$sqlText = "SELECT * FROM $tbl_downloadarea where thejmt < $time_stam and hostpot_headline = 1 and sesid = $sesid ORDER BY thejmt DESC";  
  		$result = mysql_query($sqlText);
		return mysql_fetch_object($result);
	}
	
	function downloadarea_hostpot_kategori($idkat){
		$sqlText = "SELECT * FROM $tbl_downloadarea where downloadarea_single = 1 and idkat = $idkat ORDER BY thedate DESC, thetime DESC";
		$result = mysql_query($sqlText);
		return mysql_fetch_object($result);
	}


	
	function downloadarea_hostpot_kategori_rev($time_stam,$idkat){
  		
  		$sqlText = "SELECT * FROM $tbl_downloadarea where thejmt < $time_stam and downloadarea_single = 1 and idkat = $idkat ORDER BY thejmt DESC";  
  		$result = mysql_query($sqlText);
		return mysql_fetch_object($result);
	}
	
	
	
	function cekKategoridownloadarea($idkat){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_downloadarea where idkat = $idkat";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
	

	
/* ITEM downloadarea : Update item downloadarea dilihat */
	function downloadareaDiLihat( $tbl_downloadarea, $Det ){
	
			$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE id='$Det'");
			$datadownloadarea = mysql_fetch_array($sql);
			$dilihat = $datadownloadarea ['dilihat'];
			$dilihat = $dilihat+1;
	
			$sqlupdate = mysql_query("UPDATE $tbl_downloadarea SET dilihat='$dilihat' WHERE id='$Det'");
			
			return $sqlupdate;
	}



/* ITEM downloadarea : select detail item downloadarea berdasarkan tanggal tampil, jam tampil , status tampil */
	function ViewDetail_Item_downloadarea( $tbl_downloadarea, $id ){
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE id = '$id'");
		$result = mysql_fetch_object($sql);
		return $result;
	}

/* View detail downloadarea by kategori , sub kategori  */
	function ViewDetail_Item_downloadarea_Kategori( $tbl_downloadarea, $idkategori, $idkategorisub ){
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE 
			idkategori = '$idkategori' AND 
			idkategorisub = '$idkategorisub' 
			
		ORDER BY id DESC
		");
		$result = mysql_fetch_object($sql);
		return $result;
	}


	
/* ITEM downloadarea : select item downloadarea berdasarkan tanggal tampil >= tanggal saat ini  , jam tampil >= jam saat ini , status tampil = 1 */	
	
	function downloadareaTerbaru($tbl_downloadarea, $tanggalhariini, $Cat, $SubCat ){
		$sqlText = "SELECT * FROM $tbl_downloadarea WHERE 
						
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
/* ITEM downloadarea : select item downloadarea berdasarkan tanggal tampil = tanggal kemarin, status tampil = 1 , kanal dan sub kanal terkait pengurutan berdasarkan tanggal tampil & jam tampil limit 5 baris */
	function downloadareaKemaren( $tbl_downloadarea, $tglkemarin, $Cat, $SubCat ){
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE

						tgltampil = '$tglkemarin' AND
						statustampil='1' AND 

						idkategori = '$Cat' AND 
						idkategorisub = '$SubCat' 
						
						ORDER BY 
						
						tgltampil DESC, jamtampil DESC limit 5");
		return $sql;
	}


	function downloadareaTerkait( $tbl_downloadarea, $tanggalhariini, $Cat, $SubCat )
	{
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE
		
						tgltampil <= '$tanggalhariini' AND
						jamtampil <= '$jamsaatini' AND
						statustampil='1' AND 
		
						idkategori = '$Cat' AND 
						idkategorisub = '$SubCat' 
						
						ORDER BY judul ASC limit 5");
						
		return $sql;
	}
	
/* ITEM downloadarea : select item downloadarea berdasarkan kanal terkait */	
	function downloadareaKategoriTerkait( $tbl_downloadarea,  $tanggalhariini, $Cat, $Det )
	{
	
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE
		
						tgltampil <= '$tanggalhariini' AND
						statustampil='1' AND 
		
						idkategori = '$Cat'
						 
						
						ORDER BY judul ASC limit 7");
						
		return $sql;
	}




function downloadareaItem_PageLimit_Terkini_By_Kategori_Publik( $tbl_downloadarea, $tanggalhariini, $idkategori , $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_downloadarea WHERE 
			
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			idkategori = '$idkategori'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
		
}

function downloadareaItem_PageLimit_Terkini_By_SubKategori_Publik( $tbl_downloadarea, $tanggalhariini, $idkategori , $idkategorisub, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_downloadarea WHERE 
			tgltampil <= '$timeunix'
			statustampil='1' AND
			idkategori = '$idkategori' AND
			idkategorisub = '$idkategorisub'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}


 
 
/* Terkini Homepage */
function downloadareaItem_PageLimit_Terkini_All_Publik( $tbl_downloadarea, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_downloadarea WHERE 
			statustampil = '1' AND
			tgltampil <= '$tanggalhariini'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}

/* Terkini By Kanal */
function downloadareaItem_PageLimit_Terkini_All_Publik_By_Kategori( $tbl_downloadarea, $idkategori, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_downloadarea WHERE 
			idkategori = '$idkategori' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' 
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}

/* Terkini By SubKanal */
function downloadareaItem_PageLimit_Terkini_All_Publik_By_SubKategori( $tbl_downloadarea, $idkategorisub, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_downloadarea WHERE 
			idkategorisub = '$idkategorisub' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' 
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}



/* downloadarea Terpopuler publik */
function downloadareaItem_PageLimit_Populer_All_Publik( $tbl_downloadarea, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_downloadarea WHERE 
			
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			dilihat >= '5'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}

/* downloadarea Terpopuler Berdasarkan Kategori Terkait */
function downloadareaItem_PageLimit_Populer_All_Publik_ByKategori( $tbl_downloadarea, $idkategori, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_downloadarea WHERE 
			idkategori = '$idkategori' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			tgltampil <= '$tanggalhariini' AND
			dilihat >= '5'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}

/* Halaman Sub Kanal Untuk Box downloadarea Terpopuler Berdasarkan Sub Kategori Terkait */
function downloadareaItem_PageLimit_Populer_All_Publik_BySubKategori( $tbl_downloadarea, $idkategorisub, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_downloadarea WHERE 
			 
			idkategorisub = '$idkategorisub' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			dilihat >= '5'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}







/* downloadarea terkomentari publik */
function downloadareaItem_PageLimit_Terkomentari_All_Publik( $tbl_downloadarea, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_downloadarea WHERE 
			
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			dikomentari = '1'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}

/* downloadarea pilihan publik */
function downloadareaItem_PageLimit_Pilihan_All_Publik( $tbl_downloadarea, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_downloadarea WHERE 
			
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			pilihan = '1'
			
		ORDER BY judul ASC LIMIT $dataPerPage");
		return $sql;
}

/* Revisi 10/12/2010 */
function Detail_downloadareaItem_Publik_Hotspot( $tbl_downloadarea, $idkategori, $idsubkategori, $tanggalhariini ){
		$sql = mysql_query("
		SELECT * FROM $tbl_downloadarea WHERE 
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

function Select_downloadareaItem_Publik_LineUnderHotspot( $tbl_downloadarea, $idkategori, $idsubkategori, $tanggalhariini, $limit ){ /* Line Item downloadarea Under Hotspot Sub Kanal */
		$sql = mysql_query("
		SELECT * FROM $tbl_downloadarea WHERE 
			idkategori = '$idkategori' AND
			idkategorisub = '$idsubkategori' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' 
		 ORDER BY judul ASC LIMIT $limit	
		");
		return $sql;
}

function downloadareaItem_PageLimit_Headline_UtamaHome( $tbl_downloadarea, $tanggalhariini , $dataPerPage ){

					$sql = mysql_query("
						SELECT * FROM downloadarea WHERE 
							tgltampil <='$tanggalhariini' AND
							statustampil ='1' AND
							headline = '1' 
								ORDER BY judul ASC
						LIMIT $dataPerPage
					");
					return $sql;
}


function downloadareaItem_PageLimit_Headline_By_Kategori_Publik( $tbl_downloadarea, $tanggalhariini, $idkategori , $dataPerPage ){
					$sql = mysql_query("
						SELECT * FROM downloadarea WHERE 
							tgltampil <='$tanggalhariini' AND
							statustampil ='1' AND
							idkategori = '$idkategori' AND
							headline = '1' 
								ORDER BY judul ASC
						LIMIT $dataPerPage
					");
					return $sql;
}

function downloadareaItem_PageLimit_Headline_By_SubKategori_Publik( $tbl_downloadarea, $tanggalhariini, $idkategorisub , $dataPerPage ){
					$sql = mysql_query("
						SELECT * FROM downloadarea WHERE 
							tgltampil <='$tanggalhariini' AND
							statustampil ='1' AND
							idkategorisub = '$idkategorisub' AND
							headline = '1' 
								ORDER BY judul ASC
						LIMIT $dataPerPage
					");
					return $sql;
}


function downloadareaItem_PageLimit_Headline_Line_By_Kategori_Publik( $tbl_downloadarea, $tanggalhariini, $idkategori , $dataPerPage ){

					$sql = mysql_query("
						SELECT * FROM downloadarea WHERE 
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



	function Search_Item_downloadarea_By_Publik($cari, $tanggalhariini){
		
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE 
		
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND 
							
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 
 
			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
			
		ORDER BY judul ASC ");  

  		return $sql;
	}
	

	function  downloadareaItem_HapusData( $tbl_downloadarea, $id){ /* Hapus Data Item */
		$sql = mysql_query("
			DELETE FROM $tbl_downloadarea WHERE id='$id'
		");
		return $sql;
	}
	
	
	function downloadareaItem_StatusTampil( $tbl_downloadarea, $statustampil, $id ){ /* Tampil Kan Data */
		$sql = mysql_query("
			UPDATE $tbl_downloadarea SET
				statustampil = '$statustampil' 
			WHERE
				id = '$id'
		");
		return $sql;
	}


	function downloadareaItem_HeadlineTampil( $tbl_downloadarea, $statustampil, $id ){ /* Tampilkan data di headline terkait */
		$sql = mysql_query("
			UPDATE $tbl_downloadarea SET
				headline = '$statustampil' 
			WHERE
				id = '$id'
		");
		return $sql;
	}


	function downloadareaItem_PilihanTampil( $tbl_downloadarea, $statustampil, $id ){ /* tampilkan data pada pilihan terkait */
		$sql = mysql_query("
			UPDATE $tbl_downloadarea SET
				pilihan = '$statustampil' 
			WHERE
			id = '$id'
		");
		return $sql;
	}

	function downloadareaItem_HotspotTampil( $tbl_downloadarea, $statustampil, $id ){ /* tampilkan data pada hotspot terkait */
		$sql = mysql_query("
			UPDATE $tbl_downloadarea SET
				hotspot = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}



	function downloadareaItem_HapusImage( $tbl_downloadarea, $id ){
		$sql = mysql_query("
			UPDATE $tbl_downloadarea SET
				gambarkecil = '',
				gambarbesar = '',
				direktorigambar = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function downloadareaItem_UpdateFileLampiran( $tbl_downloadarea, $id , $status ){
		$sql = mysql_query("
			UPDATE $tbl_downloadarea SET
				dilampirkan = '$status'
			WHERE
				id = '$id'
		");
	return $sql;
	}
	

	function downloadareaItem_UpdateKomentar( $tbl_downloadarea, $id , $status  ){
		$sql = mysql_query("
			UPDATE $tbl_downloadarea SET
				dikomentari = '$status'
			WHERE
				id = '$id'
		");
	return $sql;
	}
	

	function SelectPublish_downloadareaItem_Terkait( $tbl_downloadarea, $idkategori, $keyword , $tanggalhariini ){ /* Publish Item downloadarea Terkait */
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE 
			idkategori = '$idkategori' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND 
			keyword LIKE '%$keyword%' 
		ORDER BY judul ASC ");  
  		return $sql;
	}
	
	function SelectNonPublish_downloadareaItem_Terkait( $tbl_downloadarea, $idkategori, $keyword , $tanggalhariini ){ /* Non Publish Item downloadarea Terkait */
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE 
			idkategori = '$idkategori' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='0' AND 
			keyword LIKE '%$keyword%' 
		ORDER BY judul ASC ");  
  		return $sql;
	}




function List_Indeks_downloadarea_Item($tbl_downloadarea, $tanggalhariini ){ 
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE 
			statustampil='1' AND
			tgltampil = '$tanggalhariini'
			ORDER BY judul ASC");  
  		return $sql;
}

function List_Indeks_downloadarea_Item_By_Tanggal($tbl_downloadarea, $tanggalhariini ){  
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE 
			statustampil = '1' AND
			tgltampil = '$tanggalhariini'
		ORDER BY judul ASC");  
  		return $sql;
}

function Total_Indeks_downloadarea_Item_By_Tanggal( $tbl_downloadarea, $tanggal ){  
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE 
			statustampil='1' AND
			tgltampil='$tanggal'  
			ORDER BY judul ASC");  
  		$hitung = mysql_num_rows($sql);
  		 
  		return $hitung;	
}


function List_Indeks_downloadarea_Item_Kategori_ByPage($tbl_downloadarea, $idkategori , $offset , $dataPerPage ){  
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE 
			statustampil = '1' AND
			idkategori ='$idkategori'
		ORDER BY judul ASC LIMIT $offset, $dataPerPage");  
  		return $sql;
}


/* List Item downloadarea By Kategori untuk di homepage */
function List_Indeks_downloadarea_Item_Kategori_Homepage($tbl_downloadarea, $idkategori , $dataPerPage ){  
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE 
			statustampil = '1' AND
			idkategori ='$idkategori'
		ORDER BY judul ASC LIMIT $dataPerPage");  
  		return $sql;
}


/* List Item downloadarea By Kategori untuk di homepage untuk DI HOT */
function List_Indeks_downloadarea_Item_Kategori_Homepage_Hot($tbl_downloadarea, $idkategori , $dataPerPage ){  
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE 
			statustampil = '1' AND
			judul LIKE '%CHINA%' AND
			idkategori ='$idkategori'
			
		ORDER BY dilihat ASC LIMIT $dataPerPage");  
  		return $sql;
}



/* Fungsi list downloadarea item berdasarkan sub kategori */
function List_Indeks_downloadarea_Item_SubKategori_ByPage( $tbl_downloadarea, $idkategori , $idkategorisub,  $offset , $dataPerPage ){  
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE 
			statustampil = '1' AND
			idkategori = '$idkategori' AND
			idkategorisub = '$idkategorisub'
		ORDER BY judul ASC LIMIT $offset, $dataPerPage");  
  		return $sql;
}


 function  List_ALL_PUBLISH_Item_downloadarea_ByKategori_List($tbl_downloadarea, $tanggalhariini, $idkategori ){  
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE 
			statustampil = '1' AND
			idkategori ='$idkategori'
		ORDER BY judul ASC ");  
  		return $sql;
}


 function  list_all_publish_item_downloadarea_bykategori_nolimit($tbl_downloadarea, $idkategori, $idkategorisub ){  
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE 
			statustampil = '1' AND
			idkategori ='$idkategori' AND
			idkategorisub = '$idkategorisub'
		ORDER BY judul ASC ");  
  		return $sql;
}



function  list_all_publish_item_downloadarea_bysubkategori_limit($tbl_downloadarea, $idkategorisub, $dataperpage ){  
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE 
			statustampil = '1' AND
			idkategorisub ='$idkategorisub'
		ORDER BY id DESC LIMIT $dataperpage");  
  		return $sql;
}


/* Fungsi menampilkan daftar item data downloadarea berdasarkan subkategori downloadarea tanpa pembatasan */
/* Update By Arvino Zulka 13 Agustus 2011 , BEST TOUR */
function  list_all_publish_item_downloadarea_bysubkategori_nolimit($tbl_downloadarea, $idkategorisub ){  
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE 
			statustampil = '1' AND
			idkategorisub ='$idkategorisub'
		ORDER BY id DESC ");  
  		return $sql;
}

function Total_LIST_ALL_PUBLISH_Indeks_downloadarea_Item_ByKategori( $tbl_downloadarea, $tanggal, $idkategori ){  
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE 
			statustampil='1' AND
			idkategori='$idkategori'
			ORDER BY judul ASC");  
  		$hitung = mysql_num_rows($sql);
  		return $hitung;		
}


/* Fungsi menampilkan data item downloadarea berdasarkan kategori & subkategori */
function Total_LIST_ALL_PUBLISH_Indeks_downloadarea_Item_BySubKategori( $tbl_downloadarea, $idkategori, $idkategorisub ){  
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE 
			statustampil='1' AND
			idkategori='$idkategori' AND
			idkategorisub='$idkategorisub'
			ORDER BY judul ASC");  
  		$hitung = mysql_num_rows($sql);
  		return $hitung;	
}

function Total_Indeks_downloadarea_Item( $tbl_downloadarea, $tanggalhariini ){  
		$sql = mysql_query("SELECT * FROM $tbl_downloadarea WHERE 
			statustampil='1' AND
			tgltampil = '$tanggalhariini'
			ORDER BY judul ASC");  
  		$hitung = mysql_num_rows($sql);
  		return $hitung;	
}
	

	

function List_Item_downloadarea_Publish_view_Halaman( $tbl_downloadarea, $idkategori, $idsubkategori,$offset, $dataPerPage ){
		$sql = mysql_query("
				SELECT * FROM $tbl_downloadarea WHERE 
						statustampil = '1' AND
						idkategori='$idkategori' AND
						idkategorisub='$idsubkategori' 
			
				ORDER BY judul ASC
				LIMIT $offset, $dataPerPage
			
		");
		return $sql;
}


function List_downloadarea_File_Group_With_LimitPage( $tbl_downloadarea, $idkategori, $idsubkategori , $offset, $dataPerPage){

	$sql = mysql_query("
				SELECT * FROM $tbl_downloadarea WHERE 

						idkategori='$idkategori' AND
						idkategorisub='$idsubkategori' 
			
				ORDER BY judul ASC
				LIMIT $offset, $dataPerPage
			
		");
		
	return $sql;
}







/* 22 Maret 2011 */
function downloadareaItem_PageLimit_Terkini( $tbl_downloadarea, $dataPerPage ){

					$sql = mysql_query("
						SELECT * FROM $tbl_downloadarea ORDER BY id DESC LIMIT $dataPerPage
					");
					return $sql;
}


function downloadareaItem_PageLimit_Terkini_Headline( $tbl_downloadarea, $dataPerPage ){

					$sql = mysql_query("
						SELECT * FROM $tbl_downloadarea WHERE gambarbesar !='' ORDER BY dilihat DESC LIMIT $dataPerPage
					");
					return $sql;
}



 
function list_all_downloadarea_item_terkini_bykategori( $tbl_downloadarea ){
	$sql = mysql_query("SELECT * FROM $tbl_downloadarea ORDER BY idkategori ASC");
	return $sql;
}


?>