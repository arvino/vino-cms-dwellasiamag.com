<?php
/* PUSTAKA FUNGSI QUERY DATABASE PADA TABEL SUB KANAL tanyajawab */
/* 


id,
idupline,
idkategori,
keterangan,
keteranganinggris,
statustampil,
menuatas1,
menuatas2,
menubawah1,
menubawah2,
homepagetampil,
posisi,
urutan,
imagefile,
imagelogo,
imageheader,
imagebackground,
hit,
linkjudul,
keyword 
  

$id, 
$idupline,
$idkategori,
$keterangan,
$keteranganinggris,
$statustampil,
$menuatas1,
$menuatas2,
$menubawah1,
$menubawah2,
$homepagetampil,
$posisi,
$urutan,
$imagefile,
$imagelogo,
$hit,
$linkjudul,
$keyword 




'$id', 
'$idupline', 
'$idkategori', 
'$keterangan', 
'$keteranganinggris', 
'$statustampil', 
'$menuatas1', 
'$menuatas2', 
'$menubawah1', 
'$menubawah2', 
'$homepagetampil', 
'$posisi', 
'$urutan', 
'$imagefile', 
'$imagelogo', 
'$hit', 
'$linkjudul', 
'$keyword'


*/
 	/* Fungsi Buat ID Otomatis Untuk tanyajawab Kategori Sub . */
	function tanyajawabKategoriSub_CreateID( $tbl_tanyajawabkategorisub ){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawabkategorisub ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$UID = $data["id"];
		$UID = $UID+1;  
		return $UID;
	}	 

 
	/*  Fungsi Periksa Judul tanyajawab Sub Kategori */
	function tanyajawabKategoriSub_PeriksaJudul( $tbl_tanyajawabkategorisub, $idkategori, $keterangan, $keteranganinggris ){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawabkategorisub WHERE idkategori = '$idkategori' AND 
		keterangan = '$keterangan' AND 
		keteranganinggris = '$keteranganinggris'");
		return $sql;	
	}

	/* Fungsi Tambah Data tanyajawab Kategori Sub */
	function tanyajawabKategoriSub_TambahData(
		$tbl_tanyajawabkategorisub,
		$id, $idupline, $idkategori,
		$keterangan, $keteranganinggris,
		$statustampil, $menuatas1, $menuatas2,
		$menubawah1, $menubawah2, $homepagetampil,
		$posisi, $urutan,
		$imagefile, $imagelogo, $imageheader, $imagebackground,
		$hit, $linkjudul, $keyword 
	){
		$sql = mysql_query("INSERT INTO $tbl_tanyajawabkategorisub
		(

			id, idupline, idkategori,
			keterangan, keteranganinggris,
			statustampil, menuatas1, menuatas2,
			menubawah1, menubawah2, homepagetampil,
			posisi, urutan,
			imagefile, imagelogo, imageheader, imagebackground,
			hit, linkjudul, keyword 

		)VALUES(
	
			'$id', '$idupline', '$idkategori', 
			'$keterangan', '$keteranganinggris', 
			'$statustampil', '$menuatas1', '$menuatas2', 
			'$menubawah1', '$menubawah2', '$homepagetampil', 
			'$posisi', '$urutan', 
			'$imagefile', '$imagelogo', '$imageheader', '$imagebackground',
			'$hit', '$linkjudul', '$keyword'

		)");
		return $sql;
	}


	function tanyajawabKategoriSub_UpdateData(
		$tbl_tanyajawabkategorisub,
		$id, $idupline, $idkategori,
		$keterangan, $keteranganinggris,
		$statustampil, $menuatas1, $menuatas2,
		$menubawah1, $menubawah2, $homepagetampil,
		$posisi, $urutan,
		$imagefile, $imagelogo, $imageheader, $imagebackground,
		$hit, $linkjudul, $keyword 
	){
	
	$sql = mysql_query("
	UPDATE $tbl_tanyajawabkategorisub SET
 
		idupline = '$idupline',
		idkategori = '$idkategori',
		keterangan = '$keterangan',
		keteranganinggris = '$keteranganinggris',
		statustampil = '$statustampil',
		menuatas1 = '$menuatas1',
		menuatas2 = '$menuatas2',
		menubawah1 = '$menubawah1',
		menubawah2 = '$menubawah2',
		homepagetampil = '$homepagetampil',
		posisi = '$posisi',
		urutan = '$urutan',
		imagefile = '$imagefile',
		imagelogo = '$imagelogo',
		imageheader = '$imageheader',
		imagebackground = '$imagebackground',
		hit = '$hit',
		linkjudul = '$linkjudul',
		keyword = '$keyword'
		
	WHERE
	
		id = '$id'
	
	");
	return $sql;
	}


	function Select_Detail_KategoriSub_tanyajawab( $tbl_tanyajawabkategorisub, $id ){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawabkategorisub WHERE id = '$id'");
		return mysql_fetch_object($sql);
	}





/* ---------- Start Function Image ------ */

/* Function Hapus Image Location / Path */
	function tanyajawabKategoriSub_HapusImage( $tbl_tanyajawabkategorisub, $id ){
		$sql = mysql_query("
			UPDATE $tbl_tanyajawabkategorisub SET
				imagefile = '' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


/* Function Hapus Image Logo */
	function tanyajawabKategoriSub_HapusImageLogo( $tbl_tanyajawabkategorisub, $id ){
		$sql = mysql_query("
			UPDATE $tbl_tanyajawabkategorisub SET
				imagelogo = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}
	
/* Function Hapus Image Header  */
	function tanyajawabKategoriSub_HapusImageHeader( $tbl_tanyajawabkategorisub, $id ){
		$sql = mysql_query("
			UPDATE $tbl_tanyajawabkategorisub SET
				imageheader = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}	
	
/* Function Hapus Image Background  */
	function tanyajawabKategoriSub_HapusImageBackground( $tbl_tanyajawabkategorisub, $id ){
		$sql = mysql_query("
			UPDATE $tbl_tanyajawabkategorisub SET
 				imagebackground = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}	
	
/* ---------- End Function Hapus Image */


/* Start status tampil */

	function tanyajawabKategoriSub_StatusTampil( $tbl_tanyajawabkategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_tanyajawabkategorisub SET
				statustampil = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}


	function tanyajawabKategoriSub_HomepageTampil( $tbl_tanyajawabkategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_tanyajawabkategorisub SET
				homepagetampil = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}


	function tanyajawabKategoriSub_MenuAtas1Tampil( $tbl_tanyajawabkategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_tanyajawabkategorisub SET
				menuatas1 = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}

	function tanyajawabKategoriSub_MenuAtas2Tampil( $tbl_tanyajawabkategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_tanyajawabkategorisub SET
				menuatas2 = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}

	function tanyajawabKategoriSub_MenuBawah1Tampil( $tbl_tanyajawabkategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_tanyajawabkategorisub SET
				menubawah1 = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}

	function tanyajawabKategoriSub_MenuBawah2Tampil( $tbl_tanyajawabkategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_tanyajawabkategorisub SET
				menubawah2 = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}


/* End Function tampil */




	/* SUB KANAL tanyajawab : hapus sub kanal tanyajawab berdasarkan id terpilih */
	function  tanyajawabKategoriSub_HapusData( $tbl_tanyajawabkategorisub, $id){
		$sql = mysql_query("
			DELETE FROM $tbl_tanyajawabkategorisub WHERE id='$id'
		");
		return $sql;
	}
	

	
	/* Buat Direktori Untuk File Sub Kategori tanyajawab */
	function tanyajawabKategoriSub_CreateDirektori(  
	  	$tanggalhariini
	){
 		$direktoribuat =  "filemodul/tanyajawab/" . "subkategoriimage/" . $tanggalhariini . "/";
	  	if (is_dir( $direktoribuat )) 
	  	{  }
	  	else
	  	{
			 mkdir( $direktoribuat,'0777',true); 
			 chmod( $direktoribuat, 0777);
	  	}
		return $direktoribuat;
	}


 
	
 	function AmbilJumlahTotaltanyajawabKategoriSub()
	{
  		$sqlText = "SELECT count(id) as jml FROM $tbl_tanyajawabkategorisub";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
	

 	function AmbilJumlahTotaltanyajawabKategoriSub_ByKategori( $tbl_tanyajawabkategorisub, $idkategori )
	{
  		$sqlText = "SELECT count(id) as jml FROM $tbl_tanyajawabkategorisub WHERE idkategori='$idkategori'";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
	

	function Select_All_Publish_tanyajawab_SubKategori_Desc_Urutan( $tbl_tanyajawabkategorisub , $idkategori){
		 $sql = mysql_query("SELECT * FROM $tbl_tanyajawabkategorisub WHERE 
		 	statustampil = '1' AND
		 	idkategori = '$idkategori' 
		 ORDER BY urutan ASC");
		 return $sql;
	}
  
	function Select_All_SubKategori_tanyajawab_By_Urutan( $tbl_tanyajawabkategorisub, $idkategori ){
		 $sql = mysql_query("SELECT * FROM $tbl_tanyajawabkategorisub WHERE idkategori='$idkategori' ORDER BY id");
		 return $sql;
	}

  
	function Select_All_SubKategori_tanyajawab_By_NOTIDSUB( $tbl_tanyajawabkategorisub, $idkategori, $idkategorisub ){
		 $sql = mysql_query("SELECT * FROM $tbl_tanyajawabkategorisub WHERE idkategori='$idkategori' ORDER BY id");
		 return $sql;
	}



function Box_Subkanal_tanyajawab_TampilHomepage($tbl_tanyajawabkategorisub, $posisi){
$sql = mysql_query("SELECT * FROM $tbl_tanyajawabkategorisub WHERE homepagetampil='1' AND posisi = '$posisi'");
return $sql;
}



/* TAMPILKAN SUB KATEGORI DI MENU 2 */
function List_MenuTampil2_SubKanaltanyajawab( $tbl_tanyajawabkategorisub, $idkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawabkategorisub WHERE idkategori='$idkategori' AND menutampil2 ='1' ORDER BY urutan ");
		return $sql;
}

 

function Select_SubKategori_tanyajawab_By_Id( $tbl_tanyajawabkategorisub, $idsubkategori ){

		$sql = mysql_query("SELECT * FROM $tbl_tanyajawabkategorisub WHERE id = '$idsubkategori'");
		$result = mysql_fetch_object($sql);
		return $result;

}


	function Detail_SubKanaltanyajawab_Publish( $tbl_tanyajawabkategorisub , $idkategorisub ){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawabkategorisub WHERE statustampil='1' AND id='$idkategorisub'");
		$result = mysql_fetch_object($sql);
		return $result;
	}

 
	function tanyajawabSubKanalDiLihat( $tbl_tanyajawabkategorisub, $id ){ /* Hit Counter Sub Kanal tanyajawab */
	
			$sql = mysql_query("SELECT * FROM $tbl_tanyajawabkategorisub WHERE id='$id'");
			$datatanyajawab = mysql_fetch_array($sql);
			$hit = $datatanyajawab ['hit'];
			$hit = $hit+1;
	
			$sqlupdate = mysql_query("UPDATE $tbl_tanyajawabkategorisub SET hit='$hit' WHERE id='$id'");
			
			return $sqlupdate;
	}


	function cekJmlHits_SubKanaltanyajawab( $tbl_tanyajawabkategorisub ){ /* Cek Jumlah Hits tanyajawab Sub Kanal */
		$sqlText = "SELECT sum(hit) as jml FROM $tbl_tanyajawabkategorisub";
		$result = mysql_query($sqlText);
		$row = mysql_fetch_object($result);
		$jml = $row->jml;
		return $jml;
	}




/* TAMPILKAN SUB KATEGORI DI MENU 2 */
function List_SubKanaltanyajawab_Publish( $tbl_tanyajawabkategorisub , $idkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawabkategorisub WHERE idkategori='$idkategori' AND statustampil ='1' ORDER BY urutan ");
		return $sql;
}
;

?>