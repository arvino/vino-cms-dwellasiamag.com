<?php
/* PUSTAKA FUNGSI QUERY DATABASE PADA TABEL ITEM PEOPLE DIRECTORY PORTFOLIO */
/* 


id,idupline,
idkategori,idkategorisub,
judul,deskripsi,
tglpost,jampost,
tgltampil,jamtampil,
tglselesaitampil,jamselesaitampil,
timeunix,gambarkecil,
gambarbesar,dikomentari,
dilampirkan,dilihat,
statustampil,idusers,
idadmin,direktorigambar 


$id,$idupline,
$idkategori,$idkategorisub,
$judul,$deskripsi,
$tglpost,$jampost,
$tgltampil,$jamtampil,
$tglselesaitampil,$jamselesaitampil,
$timeunix,$gambarkecil, 
$gambarbesar,$dikomentari, 
$dilampirkan,$dilihat, 
$statustampil,$idusers, 
$idadmin,$direktorigambar


*/  
	/* Fungsi Buat ID Otomatis Untuk ID peopledirectory Item . */
	function peopledirectoryItem_CreateID( $tbl_peopledirectory ){
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$UID = $data["id"];
		$UID = $UID+1;  
		return $UID;
	}	 

 	/*  Fungsi Periksa Judul peopledirectory Kategori */
	function peopledirectoryItem_PeriksaJudul( $tbl_peopledirectory, $judul ){
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE judul = '$judul'");
		return $sql;	
	}


/* Fungsi periksa data users berdasarkan kategori, subkategori dan idusers */
function cekdatausers_by_kategorisubkategori( $tbl_peopledirectory, $idkategori, $idkategorisub, $idusers ){  
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE 
			 
			idkategori='$idkategori' AND
			idkategorisub='$idkategorisub' AND
			idusers = '$idusers' 
			
			ORDER BY id DESC ");  
  		$hitung = mysql_num_rows($sql);
  		return $hitung;	
}




 
 	/* FUNGSI TAMBAH DATA ITEM PORDUK */
	function peopledirectoryItem_TambahData(
		$tbl_peopledirectory,
		$id,$idupline,
		$idkategori,$idkategorisub,
		$judul,$deskripsi,
		$tglpost,$jampost,
		$tgltampil,$jamtampil,
		$tglselesaitampil,$jamselesaitampil,
		$timeunix,$gambarkecil, 
		$gambarbesar,$dikomentari, 
		$dilampirkan,$dilihat, 
		$statustampil,$idusers, 
		$idadmin,$direktorigambar
	){

		$sql = mysql_query("INSERT INTO $tbl_peopledirectory
		(

				id,idupline,
				idkategori,idkategorisub,
				judul,deskripsi,
				tglpost,jampost,
				tgltampil,jamtampil,
				tglselesaitampil,jamselesaitampil,
				timeunix,gambarkecil,
				gambarbesar,dikomentari,
				dilampirkan,dilihat,
				statustampil,idusers,
				idadmin,direktorigambar 

		)VALUES(
	
				'$id','$idupline',
				'$idkategori','$idkategorisub',
				'$judul','$deskripsi',
				'$tglpost','$jampost',
				'$tgltampil','$jamtampil',
				'$tglselesaitampil','$jamselesaitampil',
				'$timeunix','$gambarkecil', 
				'$gambarbesar','$dikomentari', 
				'$dilampirkan','$dilihat', 
				'$statustampil','$idusers', 
				'$idadmin','$direktorigambar'
  
		)");
		return $sql;
	}
	
	
/* FUNGSI BACA DATA ITEM DETIL */
function peopledirectoryItem_BacaDataDetil( $tbl_peopledirectory, $id ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE id = '$id'");
	$result = mysql_fetch_object($sql);
	return $result;
}



/* FUNGSI UPDATE DATA peopledirectory ITEM */
function peopledirectoryItem_UpdateData(
		$tbl_peopledirectory,
		$id,$idupline,
		$idkategori,$idkategorisub,
		$judul,$deskripsi,
		$tglpost,$jampost,
		$tgltampil,$jamtampil,
		$tglselesaitampil,$jamselesaitampil,
		$timeunix,$gambarkecil, 
		$gambarbesar,$dikomentari, 
		$dilampirkan,$dilihat, 
		$statustampil,$idusers, 
		$idadmin,$direktorigambar
		){
		$sql = mysql_query(
		"
				UPDATE $tbl_peopledirectory SET 
			

					idupline = '$idupline',
					idkategori = '$idkategori', idkategorisub = '$idkategorisub',
					judul = '$judul' , deskripsi = '$deskripsi',
					tglpost = '$tglpost' , jampost = '$jampost',
					tgltampil = '$tgltampil', jamtampil = '$jamtampil',
					tglselesaitampil = '$tglselesaitampil', jamselesaitampil = '$jamselesaitampil',
					timeunix = '$timeunix', gambarkecil = '$gambarkecil', 
					gambarbesar = '$gambarbesar', dikomentari = '$dikomentari', 
					dilampirkan = '$dilampirkan', dilihat = '$dilihat', 
					statustampil = '$statustampil', idusers = '$idusers', 
					idadmin = '$idadmin' , direktorigambar = '$direktorigambar'
			
				WHERE

					id ='$id'
	
		");
		
return $sql;
		
}

/* -------------------- *//* -------------------- *//* -------------------- *//* -------------------- *//* -------------------- *//* -------------------- */

/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) TERKINI ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_All( $tbl_peopledirectory , $offset , $dataPerPage){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory ORDER BY id DESC LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_peopledirectoryItem_BacaDataListing_All( $tbl_peopledirectory ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_peopledirectory");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}

/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) TERKOMENTARI ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_DiKomentari_All( $tbl_peopledirectory , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE dikomentari != '0' ORDER BY id DESC LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_peopledirectoryItem_BacaDataListing_DiKomentari_All( $tbl_peopledirectory ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_peopledirectory WHERE dikomentari != '0' ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) DENGAN FILE LAMPIRAN ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_DiLampirkan_All( $tbl_peopledirectory  , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE dilampirkan != '0' ORDER BY id DESC LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_peopledirectoryItem_BacaDataListing_DiLampirkan_All( $tbl_peopledirectory ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_peopledirectory WHERE dilampirkan != '0'  ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) PILIHAN ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_Pilihan_All( $tbl_peopledirectory , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE pilihan != '0' ORDER BY id DESC LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_peopledirectoryItem_BacaDataListing_Pilihan_All( $tbl_peopledirectory ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_peopledirectory WHERE pilihan != '0'  ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_TidakTampil_All( $tbl_peopledirectory , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE statustampil != '1' ORDER BY id DESC LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_peopledirectoryItem_BacaDataListing_TidakTampil_All( $tbl_peopledirectory ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_peopledirectory WHERE statustampil != '1'  ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) TIDAK DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_Tampil_All( $tbl_peopledirectory , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE statustampil = '0' ORDER BY id DESC LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_peopledirectoryItem_BacaDataListing_Tampil_All( $tbl_peopledirectory ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_peopledirectory WHERE statustampil = '0'  ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}



/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) DI HEADLINE ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_Headline_All( $tbl_peopledirectory , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE headline != '0' ORDER BY id DESC LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_peopledirectoryItem_BacaDataListing_Headline_All( $tbl_peopledirectory ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_peopledirectory WHERE headline != '0' ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) DI HOTSPOT ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_Hotspot_All( $tbl_peopledirectory , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE hotspot != '0' ORDER BY id DESC LIMIT $offset, $dataPerPage");
	return $sql;
}

function GetJML_peopledirectoryItem_BacaDataListing_Hotspot_All( $tbl_peopledirectory ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_peopledirectory WHERE hotspot != '0' ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}

/* FUNGSI BACA DATA ITEM LISTING ( ALL DATA ) TIDAK POPULER ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_TidakPopuler_All( $tbl_peopledirectory , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE dilihat < '10' ORDER BY id DESC LIMIT $offset, $dataPerPage
	");
	return $sql;
}

function GetJML_peopledirectoryItem_BacaDataListing_TidakPopuler_All( $tbl_peopledirectory ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_peopledirectory WHERE dilihat < '10' ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


 
function peopledirectoryItem_BacaDataListing_Terpopuler_All_ByPage( $tbl_peopledirectory , $offset , $dataPerPage ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory ORDER BY dilihat DESC LIMIT $offset, $dataPerPage");
	return $sql;
}
 
function peopledirectoryItem_BacaDataListing_Terpopuler_All( $tbl_peopledirectory ){
/* Terpopuler sortir dilihat desc */
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory ORDER BY dilihat DESC");
	return $sql;
}


function GetJML_peopledirectoryItem_BacaDataListing_Terpopuler_All( $tbl_peopledirectory ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_peopledirectory WHERE dilihat >= '10' ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


function Search_Item_peopledirectory_ALL($tbl_peopledirectory, $cari , $offset , $dataPerPage ){ /* peopledirectory Search */
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE 
		
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 
 
			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
			
		ORDER BY id DESC LIMIT $offset, $dataPerPage");  
  		return $sql;
}


function GetJML_Search_Item_peopledirectory_ALL( $tbl_peopledirectory, $cari ){ /* peopledirectory Search Count */
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_peopledirectory WHERE 
			judul LIKE '%$cari%' OR
			deskripsi  LIKE '%$cari%'
		");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}
	

function Search_Item_peopledirectory_Publish_ByPage($tbl_peopledirectory, $cari , $offset , $dataPerPage ){ /* peopledirectory Search */
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE 
			statustampil = '1' AND
			judul LIKE '%$cari%' OR
			deskripsi  LIKE '%$cari%' OR
			
		ORDER BY id DESC LIMIT $offset, $dataPerPage");  
  		return $sql;
}

function Search_Item_peopledirectory_Publish($tbl_peopledirectory, $cari ){ /* peopledirectory Search */
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE 
			statustampil = '1' AND
			judul LIKE '%$cari%' OR
			deskripsi  LIKE '%$cari%' 
		ORDER BY id DESC ");  
  		return $sql;
}

 function Search_Item_peopledirectory_All_data($tbl_peopledirectory, $cari ){ /* peopledirectory Search */
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE 
			 
			judul LIKE '%$cari%' OR
			deskripsi  LIKE '%$cari%' 
			
		ORDER BY id DESC ");  
  		return $sql;
}



function GetJML_Search_Item_peopledirectory_Publish( $tbl_peopledirectory, $cari ){ /* peopledirectory Search Count */
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_peopledirectory WHERE 
			statustampil = '1' AND
			judul LIKE '%$cari%' OR
			deskripsi  LIKE '%$cari%'
		");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


function Select_Item_peopledirectory_Terkait_ALL($tbl_peopledirectory, $keyword , $offset ){ /* peopledirectory Terkait All */
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE keyword LIKE '%$keyword%' ORDER BY id DESC LIMIT $offset");  
  		return $sql;
}

function Select_Item_peopledirectory_Terkait_Publish($tbl_peopledirectory, $keyword , $offset , $id ){ /* peopledirectory Terkait Publish */
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE id!='$id' AND statustampil = '1' AND keyword LIKE '%$keyword%' ORDER BY id DESC LIMIT $offset");  
  		return $sql;
}

/* -------------------- */







/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) TERKINI ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_ByKategori_Terkini_All( $tbl_peopledirectory , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE idkategori = '$idkategori' ORDER BY id DESC ");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) TERKOMENTARI ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_ByKategori_Dikomentari_All( $tbl_peopledirectory , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE idkategori = '$idkategori' AND dikomentari != '0' ORDER BY id DESC ");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) DENGAN FILE LAMPIRAN ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_ByKategori_DiLampirkan_All( $tbl_peopledirectory , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE idkategori = '$idkategori' AND dilampirkan != '0' ORDER BY id DESC ");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) PILIHAN ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_ByKategori_Pilihan_All( $tbl_peopledirectory , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE idkategori = '$idkategori' AND pilihan != '0' ORDER BY id DESC ");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_ByKategori_Tampil_All( $tbl_peopledirectory , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE idkategori = '$idkategori' AND statustampil != '0' ORDER BY id DESC ");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) TIDAK DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_ByKategori_TidakTampil_All( $tbl_peopledirectory , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE idkategori = '$idkategori' AND statustampil == '0' ORDER BY id DESC ");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) DI HEADLINE ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_ByKategori_Headline_All( $tbl_peopledirectory , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE idkategori = '$idkategori' AND headline != '0' ORDER BY id DESC ");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) DI HOTSPOT ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_ByKategori_Hotspot_All( $tbl_peopledirectory , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE idkategori = '$idkategori' AND hotspot != '0' ORDER BY id DESC ");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) TIDAK POPULER ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_ByKategori_TidakPopuler_All( $tbl_peopledirectory , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE idkategori = '$idkategori' AND dilihat < '10' ORDER BY id DESC ");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY KATEGORI ) POPULER ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_ByKategori_Terpopuler_All( $tbl_peopledirectory , $idkategori ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE idkategori = '$idkategori' AND dilihat > '20' ORDER BY id DESC ");
	return $sql;
}


/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) TERKINI ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_ByKategoriSub_Terkini_All( $tbl_peopledirectory , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub' ORDER BY id DESC ");
	return $sql;
}




/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) TERKOMENTARI ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_ByKategoriSub_DiKomentari_All( $tbl_peopledirectory , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND dikomentari != '0' ORDER BY id DESC ");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) DENGAN FILE LAMPIRAN ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_ByKategoriSub_DiLampirkan_All( $tbl_peopledirectory , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND dilampirkan != '0' ORDER BY id DESC ");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) PILIHAN ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_ByKategoriSub_Pilihan_All( $tbl_peopledirectory , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND pilihan != '0' ORDER BY id DESC ");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_ByKategoriSub_Tampil_All( $tbl_peopledirectory , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND statustampil != '0' ORDER BY id DESC ");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) TIDAK DI TAMPILKAN ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_ByKategoriSub_TidakTampil_All( $tbl_peopledirectory , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND statustampil == '0' ORDER BY id DESC ");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) DI HEADLINE ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_ByKategoriSub_Headline_All( $tbl_peopledirectory , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND headline != '0' ORDER BY id DESC ");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) DI HOTSPOT ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_ByKategoriSub_Hotspot_All( $tbl_peopledirectory , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND hotspot != '0' ORDER BY id DESC ");
	return $sql;
}

/* FUNGSI BACA DATA ITEM LISTING ( BY SUB KATEGORI ) TIDAK POPULER ( UNTUK HALAMAN ADMIN ) */
function peopledirectoryItem_BacaDataListing_ByKategoriSub_TidakPopuler_All( $tbl_peopledirectory , $idkategori, $idkategorisub ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'  AND dilihat < '10' ORDER BY id DESC ");
	return $sql;
}


 
	/* Buat Direktori Untuk File Item peopledirectory */
	function peopledirectoryItem_CreateDirektori(  
	  	$tanggalhariini
	){
 		$direktoribuat =  "filemodul/peopledirectory/" . "file_item/" . $tanggalhariini . "/";
			 mkdir( $direktoribuat,'0777',true); 
			 chmod( $direktoribuat, 0777);
		return $direktoribuat;
	}


 	
/* ITEM peopledirectory : hitung total item peopledirectory berdasarkan format tanggal bulan dan tahun */	
	function jmlArrtbl_peopledirectory($blnth,$idkat){
		$sqlText = "SELECT count(id) as jml FROM $tbl_peopledirectory where date_format(thedate, '%M %Y') = '$blnth'
					and idkat = $idkat";
					
  		$res = mysql_query($sqlText);
  		$row = mysql_fetch_object($res);
  		$jml = $row->jml;
  		return $jml;	
	}


	function Select_Item_peopledirectory_By_Search($cari)
	{
		
		$sqlText = "SELECT * FROM $tbl_peopledirectory WHERE judul LIKE '%$cari%' OR
			judulinggris 		LIKE '%$cari%' OR subjudul LIKE '%$cari%' OR
			subjudulinggris 	LIKE '%$cari%' OR preview  LIKE '%$cari%' OR
			previewinggris 		LIKE '%$cari%' 
		ORDER BY id DESC ";  

  		
  		$result = mysql_query($sqlText);
  		return $result;
	}
	
	
	
	

	/* select detail item peopledirectory berdasarkan id terpilih */	
	function Select_Detail_Item_peopledirectory($tbl_peopledirectory, $id){
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE id = '$id'");
		return mysql_fetch_object($sql);
	}

	

	/* Hitung Jumlah peopledirectory By Kategori & Sub Kategori */
	function GetJmlTotalpeopledirectory( $tbl_peopledirectory, $idkategori, $idkategorisub ){
  		$sqlText = "SELECT count(id) AS jml FROM $tbl_peopledirectory WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub'";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
	
	function GetJmlTotalpeopledirectoryByUser( $idkategori , $idkategorisub , $posted ){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_peopledirectory WHERE 
		idkategori = '$idkategori' AND 
		idkategorisub = '$idkategorisub' AND 
		posted = '$posted'";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
 
 
 	function GetJmlTotal_peopledirectoryTerkini( $tbl_peopledirectory, $idkategori, $idkategorisub ){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_peopledirectory";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
 
 	function peopledirectory_hostpot($sesid){
		$sqlText = "SELECT * FROM $tbl_peopledirectory where hostpot_headline = 1 and sesid = $sesid ORDER BY thedate DESC, thetime DESC limit 4 ";
		return mysql_query($sqlText);
	}
	
	function peopledirectory_hostpot_rev($time_stam,$sesid){	
  		$sqlText = "SELECT * FROM $tbl_peopledirectory where thejmt < $time_stam and hostpot_headline = 1 and sesid = $sesid ORDER BY thejmt DESC limit 4";  
  		return mysql_query($sqlText);
	}
	
	
	function list_indeks_peopledirectory($time_stam,$sesid){
  		$sqlText = "SELECT * FROM $tbl_peopledirectory where thedate = '$time_stam' and sesid = $sesid ORDER BY thedate DESC";  
  		return mysql_query($sqlText);
	}
	
	
	function detail_peopledirectory_hostpot($sesid){
		$sqlText = "SELECT * FROM $tbl_peopledirectory where hostpot_headline = 1 and sesid = $sesid ORDER BY thedate DESC, thetime DESC";
		$result = mysql_query($sqlText);
		return mysql_fetch_object($result);
	}
	
	
	function detail_peopledirectory_hostpot_rev($time_stam,$sesid){
   		$sqlText = "SELECT * FROM $tbl_peopledirectory where thejmt < $time_stam and hostpot_headline = 1 and sesid = $sesid ORDER BY thejmt DESC";  
  		$result = mysql_query($sqlText);
		return mysql_fetch_object($result);
	}
	
	function peopledirectory_hostpot_kategori($idkat){
		$sqlText = "SELECT * FROM $tbl_peopledirectory where peopledirectory_single = 1 and idkat = $idkat ORDER BY thedate DESC, thetime DESC";
		$result = mysql_query($sqlText);
		return mysql_fetch_object($result);
	}


	
	function peopledirectory_hostpot_kategori_rev($time_stam,$idkat){
  		
  		$sqlText = "SELECT * FROM $tbl_peopledirectory where thejmt < $time_stam and peopledirectory_single = 1 and idkat = $idkat ORDER BY thejmt DESC";  
  		$result = mysql_query($sqlText);
		return mysql_fetch_object($result);
	}
	
	
	
	function cekKategoripeopledirectory($idkat){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_peopledirectory where idkat = $idkat";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
	

	
/* ITEM peopledirectory : Update item peopledirectory dilihat */
	function peopledirectoryDiLihat( $tbl_peopledirectory, $Det ){
	
			$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE id='$Det'");
			$datapeopledirectory = mysql_fetch_array($sql);
			$dilihat = $datapeopledirectory ['dilihat'];
			$dilihat = $dilihat+1;
	
			$sqlupdate = mysql_query("UPDATE $tbl_peopledirectory SET dilihat='$dilihat' WHERE id='$Det'");
			
			return $sqlupdate;
	}



/* ITEM peopledirectory : select detail item peopledirectory berdasarkan tanggal tampil, jam tampil , status tampil */
	function ViewDetail_Item_peopledirectory( $tbl_peopledirectory, $id ){
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE id = '$id'");
		$result = mysql_fetch_object($sql);
		return $result;
	}

/* View detail peopledirectory by kategori , sub kategori  */
	function ViewDetail_Item_peopledirectory_Kategori( $tbl_peopledirectory, $idkategori, $idkategorisub ){
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE 
			idkategori = '$idkategori' AND 
			idkategorisub = '$idkategorisub' 
			
		ORDER BY id DESC
		");
		$result = mysql_fetch_object($sql);
		return $result;
	}


	
/* ITEM peopledirectory : select item peopledirectory berdasarkan tanggal tampil >= tanggal saat ini  , jam tampil >= jam saat ini , status tampil = 1 */	
	
	function peopledirectoryTerbaru($tbl_peopledirectory, $tanggalhariini, $Cat, $SubCat ){
		$sqlText = "SELECT * FROM $tbl_peopledirectory WHERE 
						
						tgltampil <= '$tanggalhariini' AND
						jamtampil <= '$jamsaatini' AND
						statustampil = '1' AND 

						idkategori = '$Cat' AND 
						idkategorisub = '$SubCat' AND
						
						ORDER BY id DESC , jamtampil DESC limit 5";
						
		return mysql_query($sqlText);
	}
	
/* ambil data kemarin */	
	$tglkemarin = date("Y-m-d",mktime (0,0,0, date("m"), date("d")-1, date("Y")));
/* ITEM peopledirectory : select item peopledirectory berdasarkan tanggal tampil = tanggal kemarin, status tampil = 1 , kanal dan sub kanal terkait pengurutan berdasarkan tanggal tampil & jam tampil limit 5 baris */
	function peopledirectoryKemaren( $tbl_peopledirectory, $tglkemarin, $Cat, $SubCat ){
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE

						tgltampil = '$tglkemarin' AND
						statustampil='1' AND 

						idkategori = '$Cat' AND 
						idkategorisub = '$SubCat' 
						
						ORDER BY 
						
						tgltampil DESC, jamtampil DESC limit 5");
		return $sql;
	}


	function peopledirectoryTerkait( $tbl_peopledirectory, $tanggalhariini, $Cat, $SubCat )
	{
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE
		
						tgltampil <= '$tanggalhariini' AND
						jamtampil <= '$jamsaatini' AND
						statustampil='1' AND 
		
						idkategori = '$Cat' AND 
						idkategorisub = '$SubCat' 
						
						ORDER BY id DESC limit 5");
						
		return $sql;
	}
	
/* ITEM peopledirectory : select item peopledirectory berdasarkan kanal terkait */	
	function peopledirectoryKategoriTerkait( $tbl_peopledirectory,  $tanggalhariini, $Cat, $Det )
	{
	
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE
		
						tgltampil <= '$tanggalhariini' AND
						statustampil='1' AND 
		
						idkategori = '$Cat'
						 
						
						ORDER BY id DESC limit 7");
						
		return $sql;
	}




function peopledirectoryItem_PageLimit_Terkini_By_Kategori_Publik( $tbl_peopledirectory, $tanggalhariini, $idkategori , $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_peopledirectory WHERE 
			
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			idkategori = '$idkategori'
			
		ORDER BY id DESC LIMIT $dataPerPage");
		return $sql;
		
}

function peopledirectoryItem_PageLimit_Terkini_By_SubKategori_Publik( $tbl_peopledirectory, $tanggalhariini, $idkategori , $idkategorisub, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_peopledirectory WHERE 
			tgltampil <= '$timeunix'
			statustampil='1' AND
			idkategori = '$idkategori' AND
			idkategorisub = '$idkategorisub'
			
		ORDER BY id DESC LIMIT $dataPerPage");
		return $sql;
}


 
 
/* Terkini Homepage */
function peopledirectoryItem_PageLimit_Terkini_All_Publik( $tbl_peopledirectory, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_peopledirectory WHERE 
			statustampil = '1' AND
			tgltampil <= '$tanggalhariini'
			
		ORDER BY id DESC LIMIT $dataPerPage");
		return $sql;
}

/* Terkini By Kanal */
function peopledirectoryItem_PageLimit_Terkini_All_Publik_By_Kategori( $tbl_peopledirectory, $idkategori, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_peopledirectory WHERE 
			idkategori = '$idkategori' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' 
		ORDER BY id DESC LIMIT $dataPerPage");
		return $sql;
}

/* Terkini By SubKanal */
function peopledirectoryItem_PageLimit_Terkini_All_Publik_By_SubKategori( $tbl_peopledirectory, $idkategorisub, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_peopledirectory WHERE 
			idkategorisub = '$idkategorisub' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' 
		ORDER BY id DESC LIMIT $dataPerPage");
		return $sql;
}



/* peopledirectory Terpopuler publik */
function peopledirectoryItem_PageLimit_Populer_All_Publik( $tbl_peopledirectory, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_peopledirectory WHERE 
			
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			dilihat >= '5'
			
		ORDER BY id DESC LIMIT $dataPerPage");
		return $sql;
}

/* peopledirectory Terpopuler Berdasarkan Kategori Terkait */
function peopledirectoryItem_PageLimit_Populer_All_Publik_ByKategori( $tbl_peopledirectory, $idkategori, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_peopledirectory WHERE 
			idkategori = '$idkategori' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			tgltampil <= '$tanggalhariini' AND
			dilihat >= '5'
			
		ORDER BY id DESC LIMIT $dataPerPage");
		return $sql;
}

/* Halaman Sub Kanal Untuk Box peopledirectory Terpopuler Berdasarkan Sub Kategori Terkait */
function peopledirectoryItem_PageLimit_Populer_All_Publik_BySubKategori( $tbl_peopledirectory, $idkategorisub, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_peopledirectory WHERE 
			 
			idkategorisub = '$idkategorisub' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			dilihat >= '5'
			
		ORDER BY id DESC LIMIT $dataPerPage");
		return $sql;
}







/* peopledirectory terkomentari publik */
function peopledirectoryItem_PageLimit_Terkomentari_All_Publik( $tbl_peopledirectory, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_peopledirectory WHERE 
			
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			dikomentari = '1'
			
		ORDER BY id DESC LIMIT $dataPerPage");
		return $sql;
}

/* peopledirectory pilihan publik */
function peopledirectoryItem_PageLimit_Pilihan_All_Publik( $tbl_peopledirectory, $tanggalhariini, $dataPerPage ){
		$sql = mysql_query("
		SELECT * FROM $tbl_peopledirectory WHERE 
			
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND
			pilihan = '1'
			
		ORDER BY id DESC LIMIT $dataPerPage");
		return $sql;
}

/* Revisi 10/12/2010 */
function Detail_peopledirectoryItem_Publik_Hotspot( $tbl_peopledirectory, $idkategori, $idsubkategori, $tanggalhariini ){
		$sql = mysql_query("
		SELECT * FROM $tbl_peopledirectory WHERE 
			idkategori = '$idkategori' AND
			idkategorisub = '$idsubkategori' AND
			tgltampil <= '$tanggalhariini' AND
			headline = '1' AND
			statustampil='1' 
			ORDER BY id DESC ");
		$result = mysql_fetch_object($sql);
		return $result;
}

function Select_peopledirectoryItem_Publik_LineUnderHotspot( $tbl_peopledirectory, $idkategori, $idsubkategori, $tanggalhariini, $limit ){ /* Line Item peopledirectory Under Hotspot Sub Kanal */
		$sql = mysql_query("
		SELECT * FROM $tbl_peopledirectory WHERE 
			idkategori = '$idkategori' AND
			idkategorisub = '$idsubkategori' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' 
		 ORDER BY id DESC LIMIT $limit	
		");
		return $sql;
}

function peopledirectoryItem_PageLimit_Headline_UtamaHome( $tbl_peopledirectory, $tanggalhariini , $dataPerPage ){

					$sql = mysql_query("
						SELECT * FROM peopledirectory WHERE 
							tgltampil <='$tanggalhariini' AND
							statustampil ='1' AND
							headline = '1' 
								ORDER BY id DESC LIMIT $dataPerPage
					");
					return $sql;
}


function peopledirectoryItem_PageLimit_Headline_By_Kategori_Publik( $tbl_peopledirectory, $tanggalhariini, $idkategori , $dataPerPage ){
					$sql = mysql_query("
						SELECT * FROM peopledirectory WHERE 
							tgltampil <='$tanggalhariini' AND
							statustampil ='1' AND
							idkategori = '$idkategori' AND
							headline = '1' 
								ORDER BY id DESC LIMIT $dataPerPage
					");
					return $sql;
}

function peopledirectoryItem_PageLimit_Headline_By_SubKategori_Publik( $tbl_peopledirectory, $tanggalhariini, $idkategorisub , $dataPerPage ){
					$sql = mysql_query("
						SELECT * FROM peopledirectory WHERE 
							tgltampil <='$tanggalhariini' AND
							statustampil ='1' AND
							idkategorisub = '$idkategorisub' AND
							headline = '1' 
								ORDER BY id DESC LIMIT $dataPerPage
					");
					return $sql;
}


function peopledirectoryItem_PageLimit_Headline_Line_By_Kategori_Publik( $tbl_peopledirectory, $tanggalhariini, $idkategori , $dataPerPage ){

					$sql = mysql_query("
						SELECT * FROM peopledirectory WHERE 
							statustampil = '1' AND
							tgltampil <= '$tanggalhariini' AND
				  			idkategori = '$idkategori' AND
							pilihan = '1' AND
							headline !='1'
						 
								ORDER BY id DESC LIMIT $dataPerPage
					");
					return $sql;


}



	function Search_Item_peopledirectory_By_Publik($cari, $tanggalhariini){
		
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE 
		
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND 
							
			judul LIKE '%$cari%' OR
			judulinggris LIKE '%$cari%' OR 
 
			deskripsi  LIKE '%$cari%' OR
			deskripsiinggris LIKE '%$cari%' 
			
		ORDER BY id DESC ");  

  		return $sql;
	}
	

	function  peopledirectoryItem_HapusData( $tbl_peopledirectory, $id){ /* Hapus Data Item */
		$sql = mysql_query("
			DELETE FROM $tbl_peopledirectory WHERE id='$id'
		");
		return $sql;
	}
	
	
	function peopledirectoryItem_StatusTampil( $tbl_peopledirectory, $statustampil, $id ){ /* Tampil Kan Data */
		$sql = mysql_query("
			UPDATE $tbl_peopledirectory SET
				statustampil = '$statustampil' 
			WHERE
				id = '$id'
		");
		return $sql;
	}


	function peopledirectoryItem_HeadlineTampil( $tbl_peopledirectory, $statustampil, $id ){ /* Tampilkan data di headline terkait */
		$sql = mysql_query("
			UPDATE $tbl_peopledirectory SET
				headline = '$statustampil' 
			WHERE
				id = '$id'
		");
		return $sql;
	}


	function peopledirectoryItem_PilihanTampil( $tbl_peopledirectory, $statustampil, $id ){ /* tampilkan data pada pilihan terkait */
		$sql = mysql_query("
			UPDATE $tbl_peopledirectory SET
				pilihan = '$statustampil' 
			WHERE
			id = '$id'
		");
		return $sql;
	}

	function peopledirectoryItem_HotspotTampil( $tbl_peopledirectory, $statustampil, $id ){ /* tampilkan data pada hotspot terkait */
		$sql = mysql_query("
			UPDATE $tbl_peopledirectory SET
				hotspot = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}



	function peopledirectoryItem_HapusImage( $tbl_peopledirectory, $id ){
		$sql = mysql_query("
			UPDATE $tbl_peopledirectory SET
				gambarkecil = '',
				gambarbesar = '',
				direktorigambar = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function peopledirectoryItem_UpdateFileLampiran( $tbl_peopledirectory, $id , $status ){
		$sql = mysql_query("
			UPDATE $tbl_peopledirectory SET
				dilampirkan = '$status'
			WHERE
				id = '$id'
		");
	return $sql;
	}
	

	function peopledirectoryItem_UpdateKomentar( $tbl_peopledirectory, $id , $status  ){
		$sql = mysql_query("
			UPDATE $tbl_peopledirectory SET
				dikomentari = '$status'
			WHERE
				id = '$id'
		");
	return $sql;
	}
	

	function SelectPublish_peopledirectoryItem_Terkait( $tbl_peopledirectory, $idkategori, $keyword , $tanggalhariini ){ /* Publish Item peopledirectory Terkait */
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE 
			idkategori = '$idkategori' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='1' AND 
			keyword LIKE '%$keyword%' 
		ORDER BY id DESC ");  
  		return $sql;
	}
	
	function SelectNonPublish_peopledirectoryItem_Terkait( $tbl_peopledirectory, $idkategori, $keyword , $tanggalhariini ){ /* Non Publish Item peopledirectory Terkait */
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE 
			idkategori = '$idkategori' AND
			tgltampil <= '$tanggalhariini' AND
			statustampil='0' AND 
			keyword LIKE '%$keyword%' 
		ORDER BY id DESC ");  
  		return $sql;
	}




function List_Indeks_peopledirectory_Item($tbl_peopledirectory, $tanggalhariini ){ 
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE 
			statustampil='1' AND
			tgltampil = '$tanggalhariini'
			ORDER BY id DESC ");  
  		return $sql;
}

function List_Indeks_peopledirectory_Item_By_Tanggal($tbl_peopledirectory, $tanggalhariini ){  
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE 
			statustampil = '1' AND
			tgltampil = '$tanggalhariini'
		ORDER BY id DESC ");  
  		return $sql;
}

function Total_Indeks_peopledirectory_Item_By_Tanggal( $tbl_peopledirectory, $tanggal ){  
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE 
			statustampil='1' AND
			tgltampil='$tanggal'  
			ORDER BY id DESC ");  
  		$hitung = mysql_num_rows($sql);
  		 
  		return $hitung;	
}


function List_Indeks_peopledirectory_Item_Kategori_ByPage($tbl_peopledirectory, $idkategori , $offset , $dataPerPage ){  
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE 
			statustampil = '1' AND
			idkategori ='$idkategori'
		ORDER BY id DESC LIMIT $offset, $dataPerPage");  
  		return $sql;
}


/* List Item peopledirectory By Kategori untuk di homepage */
function List_Indeks_peopledirectory_Item_Kategori_Homepage($tbl_peopledirectory, $idkategori , $dataPerPage ){  
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE 
			statustampil = '1' AND
			idkategori ='$idkategori'
		ORDER BY id DESC LIMIT $dataPerPage");  
  		return $sql;
}


 


/* Fungsi list peopledirectory item berdasarkan sub kategori */
function List_Indeks_peopledirectory_Item_SubKategori_ByPage( $tbl_peopledirectory, $idkategori , $idkategorisub,  $offset , $dataPerPage ){  
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE 
			statustampil = '1' AND
			idkategori = '$idkategori' AND
			idkategorisub = '$idkategorisub'
		ORDER BY id DESC LIMIT $offset, $dataPerPage");  
  		return $sql;
}


 function  List_ALL_PUBLISH_Item_peopledirectory_ByKategori_List($tbl_peopledirectory, $tanggalhariini, $idkategori ){  
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE 
			statustampil = '1' AND
			idkategori ='$idkategori'
		ORDER BY id DESC ");  
  		return $sql;
}


 function  list_all_publish_item_peopledirectory_bykategori_nolimit($tbl_peopledirectory, $idkategori, $idkategorisub ){  
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE 
			statustampil = '1' AND
			idkategori ='$idkategori' AND
			idkategorisub = '$idkategorisub'
		ORDER BY id DESC ");  
  		return $sql;
}



function  list_all_publish_item_peopledirectory_bysubkategori_limit($tbl_peopledirectory, $idkategorisub, $dataperpage ){  
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE 
			statustampil = '1' AND
			idkategorisub ='$idkategorisub'
		ORDER BY id DESC LIMIT $dataperpage");  
  		return $sql;
}


 function  list_all_publish_item_peopledirectory_bysubkategori_nolimit($tbl_peopledirectory, $idkategorisub ){  
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE 
			statustampil = '1' AND
			idkategorisub ='$idkategorisub'
		ORDER BY id DESC ");  
  		return $sql;
}

function Total_LIST_ALL_PUBLISH_Indeks_peopledirectory_Item_ByKategori( $tbl_peopledirectory, $tanggal, $idkategori ){  
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE 
			statustampil='1' AND
			idkategori='$idkategori'
			ORDER BY id DESC ");  
  		$hitung = mysql_num_rows($sql);
  		return $hitung;		
}


/* Fungsi menampilkan data item peopledirectory berdasarkan kategori & subkategori */
function Total_LIST_ALL_PUBLISH_Indeks_peopledirectory_Item_BySubKategori( $tbl_peopledirectory, $idkategori, $idkategorisub ){  
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE 
			statustampil='1' AND
			idkategori='$idkategori' AND
			idkategorisub='$idkategorisub'
			ORDER BY id DESC ");  
  		$hitung = mysql_num_rows($sql);
  		return $hitung;	
}

function Total_Indeks_peopledirectory_Item( $tbl_peopledirectory, $tanggalhariini ){  
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectory WHERE 
			statustampil='1' AND
			tgltampil = '$tanggalhariini'
			ORDER BY id DESC ");  
  		$hitung = mysql_num_rows($sql);
  		return $hitung;	
}
	

	

function List_Item_peopledirectory_Publish_view_Halaman( $tbl_peopledirectory, $idkategori, $idsubkategori,$offset, $dataPerPage ){
		$sql = mysql_query("
				SELECT * FROM $tbl_peopledirectory WHERE 
						statustampil = '1' AND
						idkategori='$idkategori' AND
						idkategorisub='$idsubkategori' 
			
				ORDER BY id DESC LIMIT $offset, $dataPerPage
			
		");
		return $sql;
}


function List_peopledirectory_File_Group_With_LimitPage( $tbl_peopledirectory, $idkategori, $idsubkategori , $offset, $dataPerPage){

	$sql = mysql_query("
				SELECT * FROM $tbl_peopledirectory WHERE 

						idkategori='$idkategori' AND
						idkategorisub='$idsubkategori' 
			
				ORDER BY id DESC LIMIT $offset, $dataPerPage
			
		");
		
	return $sql;
}







/* 22 Maret 2011 */
function peopledirectoryItem_PageLimit_Terkini( $tbl_peopledirectory, $dataPerPage ){

					$sql = mysql_query("
						SELECT * FROM $tbl_peopledirectory ORDER BY id DESC LIMIT $dataPerPage
					");
					return $sql;
}


function peopledirectoryItem_PageLimit_Terkini_Headline( $tbl_peopledirectory, $dataPerPage ){

					$sql = mysql_query("
						SELECT * FROM $tbl_peopledirectory WHERE gambarbesar !='' ORDER BY dilihat DESC LIMIT $dataPerPage
					");
					return $sql;
}



 
function list_all_peopledirectory_item_terkini_bykategori( $tbl_peopledirectory ){
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectory ORDER BY idkategori ASC");
	return $sql;
}


?>