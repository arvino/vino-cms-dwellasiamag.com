<?php
/* PUSTAKA FUNGSI QUERY DATABASE PADA TABEL SUB KANAL weblink */
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
 	/* Fungsi Buat ID Otomatis Untuk weblink Kategori Sub . */
	function weblinkKategoriSub_CreateID( $tbl_weblinkkategorisub ){
		$sql = mysql_query("SELECT * FROM $tbl_weblinkkategorisub ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$UID = $data["id"];
		$UID = $UID+1;  
		return $UID;
	}	 

 
	/*  Fungsi Periksa Judul weblink Sub Kategori */
	function weblinkKategoriSub_PeriksaJudul( $tbl_weblinkkategorisub, $idkategori, $keterangan, $keteranganinggris ){
		$sql = mysql_query("SELECT * FROM $tbl_weblinkkategorisub WHERE idkategori = '$idkategori' AND 
		keterangan = '$keterangan' AND 
		keteranganinggris = '$keteranganinggris'");
		return $sql;	
	}

	/* Fungsi Tambah Data weblink Kategori Sub */
	function weblinkKategoriSub_TambahData(
		$tbl_weblinkkategorisub,
		$id, $idupline, $idkategori,
		$keterangan, $keteranganinggris,
		$statustampil, $menuatas1, $menuatas2,
		$menubawah1, $menubawah2, $homepagetampil,
		$posisi, $urutan,
		$imagefile, $imagelogo, $imageheader, $imagebackground,
		$hit, $linkjudul, $keyword 
	){
		$sql = mysql_query("INSERT INTO $tbl_weblinkkategorisub
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


	function weblinkKategoriSub_UpdateData(
		$tbl_weblinkkategorisub,
		$id, $idupline, $idkategori,
		$keterangan, $keteranganinggris,
		$statustampil, $menuatas1, $menuatas2,
		$menubawah1, $menubawah2, $homepagetampil,
		$posisi, $urutan,
		$imagefile, $imagelogo, $imageheader, $imagebackground,
		$hit, $linkjudul, $keyword 
	){
	
	$sql = mysql_query("
	UPDATE $tbl_weblinkkategorisub SET
 
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


	function Select_Detail_KategoriSub_weblink( $tbl_weblinkkategorisub, $id ){
		$sql = mysql_query("SELECT * FROM $tbl_weblinkkategorisub WHERE id = '$id'");
		return mysql_fetch_object($sql);
	}





/* ---------- Start Function Image ------ */

/* Function Hapus Image Location / Path */
	function weblinkKategoriSub_HapusImage( $tbl_weblinkkategorisub, $id ){
		$sql = mysql_query("
			UPDATE $tbl_weblinkkategorisub SET
				imagefile = '' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


/* Function Hapus Image Logo */
	function weblinkKategoriSub_HapusImageLogo( $tbl_weblinkkategorisub, $id ){
		$sql = mysql_query("
			UPDATE $tbl_weblinkkategorisub SET
				imagelogo = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}
	
/* Function Hapus Image Header  */
	function weblinkKategoriSub_HapusImageHeader( $tbl_weblinkkategorisub, $id ){
		$sql = mysql_query("
			UPDATE $tbl_weblinkkategorisub SET
				imageheader = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}	
	
/* Function Hapus Image Background  */
	function weblinkKategoriSub_HapusImageBackground( $tbl_weblinkkategorisub, $id ){
		$sql = mysql_query("
			UPDATE $tbl_weblinkkategorisub SET
 				imagebackground = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}	
	
/* ---------- End Function Hapus Image */


/* Start status tampil */

	function weblinkKategoriSub_StatusTampil( $tbl_weblinkkategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_weblinkkategorisub SET
				statustampil = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}


	function weblinkKategoriSub_HomepageTampil( $tbl_weblinkkategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_weblinkkategorisub SET
				homepagetampil = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}


	function weblinkKategoriSub_MenuAtas1Tampil( $tbl_weblinkkategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_weblinkkategorisub SET
				menuatas1 = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}

	function weblinkKategoriSub_MenuAtas2Tampil( $tbl_weblinkkategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_weblinkkategorisub SET
				menuatas2 = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}

	function weblinkKategoriSub_MenuBawah1Tampil( $tbl_weblinkkategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_weblinkkategorisub SET
				menubawah1 = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}

	function weblinkKategoriSub_MenuBawah2Tampil( $tbl_weblinkkategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_weblinkkategorisub SET
				menubawah2 = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}


/* End Function tampil */




	/* SUB KANAL weblink : hapus sub kanal weblink berdasarkan id terpilih */
	function  weblinkKategoriSub_HapusData( $tbl_weblinkkategorisub, $id){
		$sql = mysql_query("
			DELETE FROM $tbl_weblinkkategorisub WHERE id='$id'
		");
		return $sql;
	}
	

	
	/* Buat Direktori Untuk File Sub Kategori weblink */
	function weblinkKategoriSub_CreateDirektori(  
	  	$tanggalhariini
	){
 		$direktoribuat =  "filemodul/weblink/" . "subkategoriimage/" . $tanggalhariini . "/";
	  	if (is_dir( $direktoribuat )) 
	  	{  }
	  	else
	  	{
			 mkdir( $direktoribuat,'0777',true); 
			 chmod( $direktoribuat, 0777);
	  	}
		return $direktoribuat;
	}


 
	
 	function AmbilJumlahTotalweblinkKategoriSub()
	{
  		$sqlText = "SELECT count(id) as jml FROM $tbl_weblinkkategorisub";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
	

 	function AmbilJumlahTotalweblinkKategoriSub_ByKategori( $tbl_weblinkkategorisub, $idkategori )
	{
  		$sqlText = "SELECT count(id) as jml FROM $tbl_weblinkkategorisub WHERE idkategori='$idkategori'";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
	

	function Select_All_Publish_weblink_SubKategori_Desc_Urutan( $tbl_weblinkkategorisub , $idkategori){
		 $sql = mysql_query("SELECT * FROM $tbl_weblinkkategorisub WHERE 
		 	statustampil = '1' AND
		 	idkategori = '$idkategori' 
		 ORDER BY urutan ASC");
		 return $sql;
	}
  
	function Select_All_SubKategori_weblink_By_Urutan( $tbl_weblinkkategorisub, $idkategori ){
		 $sql = mysql_query("SELECT * FROM $tbl_weblinkkategorisub WHERE idkategori='$idkategori' ORDER BY id");
		 return $sql;
	}

  
	function Select_All_SubKategori_weblink_By_NOTIDSUB( $tbl_weblinkkategorisub, $idkategori, $idkategorisub ){
		 $sql = mysql_query("SELECT * FROM $tbl_weblinkkategorisub WHERE idkategori='$idkategori' ORDER BY id");
		 return $sql;
	}



function Box_Subkanal_weblink_TampilHomepage($tbl_weblinkkategorisub, $posisi){
$sql = mysql_query("SELECT * FROM $tbl_weblinkkategorisub WHERE homepagetampil='1' AND posisi = '$posisi'");
return $sql;
}



/* TAMPILKAN SUB KATEGORI DI MENU 2 */
function List_MenuTampil2_SubKanalweblink( $tbl_weblinkkategorisub, $idkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_weblinkkategorisub WHERE idkategori='$idkategori' AND menutampil2 ='1' ORDER BY urutan ");
		return $sql;
}

 

function Select_SubKategori_weblink_By_Id( $tbl_weblinkkategorisub, $idsubkategori ){

		$sql = mysql_query("SELECT * FROM $tbl_weblinkkategorisub WHERE id = '$idsubkategori'");
		$result = mysql_fetch_object($sql);
		return $result;

}


	function Detail_SubKanalweblink_Publish( $tbl_weblinkkategorisub , $idkategorisub ){
		$sql = mysql_query("SELECT * FROM $tbl_weblinkkategorisub WHERE statustampil='1' AND id='$idkategorisub'");
		$result = mysql_fetch_object($sql);
		return $result;
	}

 
	function weblinkSubKanalDiLihat( $tbl_weblinkkategorisub, $id ){ /* Hit Counter Sub Kanal weblink */
	
			$sql = mysql_query("SELECT * FROM $tbl_weblinkkategorisub WHERE id='$id'");
			$dataweblink = mysql_fetch_array($sql);
			$hit = $dataweblink ['hit'];
			$hit = $hit+1;
	
			$sqlupdate = mysql_query("UPDATE $tbl_weblinkkategorisub SET hit='$hit' WHERE id='$id'");
			
			return $sqlupdate;
	}


	function cekJmlHits_SubKanalweblink( $tbl_weblinkkategorisub ){ /* Cek Jumlah Hits weblink Sub Kanal */
		$sqlText = "SELECT sum(hit) as jml FROM $tbl_weblinkkategorisub";
		$result = mysql_query($sqlText);
		$row = mysql_fetch_object($result);
		$jml = $row->jml;
		return $jml;
	}




/* TAMPILKAN SUB KATEGORI DI MENU 2 */
function List_SubKanalweblink_Publish( $tbl_weblinkkategorisub , $idkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_weblinkkategorisub WHERE idkategori='$idkategori' AND statustampil ='1' ORDER BY urutan ");
		return $sql;
}
;

?>