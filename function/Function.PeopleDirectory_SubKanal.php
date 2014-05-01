<?php
/* PUSTAKA FUNGSI QUERY DATABASE PADA TABEL SUB KANAL peopledirectory */
 	/* Fungsi Buat ID Otomatis Untuk peopledirectory Kategori Sub . */
	function peopledirectoryKategoriSub_CreateID( $tbl_peopledirectorykategorisub ){
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectorykategorisub ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$UID = $data["id"];
		$UID = $UID+1;  
		return $UID;
	}	 

 
	/*  Fungsi Periksa Judul peopledirectory Sub Kategori */
	function peopledirectoryKategoriSub_PeriksaJudul( $tbl_peopledirectorykategorisub, $idkategori, $keterangan, $keteranganinggris ){
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectorykategorisub WHERE idkategori = '$idkategori' AND 
		keterangan = '$keterangan' AND 
		keteranganinggris = '$keteranganinggris'");
		return $sql;	
	}

	/* Fungsi Tambah Data peopledirectory Kategori Sub */
	function peopledirectoryKategoriSub_TambahData(
		$tbl_peopledirectorykategorisub,
		$id, $idupline, $idkategori,
		$keterangan, $keteranganinggris,
		$statustampil, $menuatas1, $menuatas2,
		$menubawah1, $menubawah2, $homepagetampil,
		$posisi, $urutan,
		$imagefile, $imagelogo, $imageheader, $imagebackground,
		$hit, $linkjudul, $keyword 
	){
		$sql = mysql_query("INSERT INTO $tbl_peopledirectorykategorisub
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


	function peopledirectoryKategoriSub_UpdateData(
		$tbl_peopledirectorykategorisub,
		$id, $idupline, $idkategori,
		$keterangan, $keteranganinggris,
		$statustampil, $menuatas1, $menuatas2,
		$menubawah1, $menubawah2, $homepagetampil,
		$posisi, $urutan,
		$imagefile, $imagelogo, $imageheader, $imagebackground,
		$hit, $linkjudul, $keyword 
	){
	
	$sql = mysql_query("
	UPDATE $tbl_peopledirectorykategorisub SET
 
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


	function Select_Detail_KategoriSub_peopledirectory( $tbl_peopledirectorykategorisub, $id ){
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectorykategorisub WHERE id = '$id'");
		return mysql_fetch_object($sql);
	}





/* ---------- Start Function Image ------ */

/* Function Hapus Image Location / Path */
	function peopledirectoryKategoriSub_HapusImage( $tbl_peopledirectorykategorisub, $id ){
		$sql = mysql_query("
			UPDATE $tbl_peopledirectorykategorisub SET
				imagefile = '' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


/* Function Hapus Image Logo */
	function peopledirectoryKategoriSub_HapusImageLogo( $tbl_peopledirectorykategorisub, $id ){
		$sql = mysql_query("
			UPDATE $tbl_peopledirectorykategorisub SET
				imagelogo = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}
	
/* Function Hapus Image Header  */
	function peopledirectoryKategoriSub_HapusImageHeader( $tbl_peopledirectorykategorisub, $id ){
		$sql = mysql_query("
			UPDATE $tbl_peopledirectorykategorisub SET
				imageheader = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}	
	
/* Function Hapus Image Background  */
	function peopledirectoryKategoriSub_HapusImageBackground( $tbl_peopledirectorykategorisub, $id ){
		$sql = mysql_query("
			UPDATE $tbl_peopledirectorykategorisub SET
 				imagebackground = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}	
	
/* ---------- End Function Hapus Image */


/* Start status tampil */

	function peopledirectoryKategoriSub_StatusTampil( $tbl_peopledirectorykategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_peopledirectorykategorisub SET
				statustampil = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}


	function peopledirectoryKategoriSub_HomepageTampil( $tbl_peopledirectorykategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_peopledirectorykategorisub SET
				homepagetampil = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}


	function peopledirectoryKategoriSub_MenuAtas1Tampil( $tbl_peopledirectorykategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_peopledirectorykategorisub SET
				menuatas1 = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}

	function peopledirectoryKategoriSub_MenuAtas2Tampil( $tbl_peopledirectorykategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_peopledirectorykategorisub SET
				menuatas2 = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}

	function peopledirectoryKategoriSub_MenuBawah1Tampil( $tbl_peopledirectorykategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_peopledirectorykategorisub SET
				menubawah1 = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}

	function peopledirectoryKategoriSub_MenuBawah2Tampil( $tbl_peopledirectorykategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_peopledirectorykategorisub SET
				menubawah2 = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}


/* End Function tampil */




	/* SUB KANAL peopledirectory : hapus sub kanal peopledirectory berdasarkan id terpilih */
	function  peopledirectoryKategoriSub_HapusData( $tbl_peopledirectorykategorisub, $id){
		$sql = mysql_query("
			DELETE FROM $tbl_peopledirectorykategorisub WHERE id='$id'
		");
		return $sql;
	}
	

	
	/* Buat Direktori Untuk File Sub Kategori peopledirectory */
	function peopledirectoryKategoriSub_CreateDirektori(  
	  	$tanggalhariini
	){
 		$direktoribuat =  "filemodul/peopledirectory/" . "subkategoriimage/" . $tanggalhariini . "/";
	  	if (is_dir( $direktoribuat )) 
	  	{  }
	  	else
	  	{
			 mkdir( $direktoribuat,'0777',true); 
			 chmod( $direktoribuat, 0777);
	  	}
		return $direktoribuat;
	}


 
	
 	function AmbilJumlahTotalpeopledirectoryKategoriSub()
	{
  		$sqlText = "SELECT count(id) as jml FROM $tbl_peopledirectorykategorisub";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
	

 	function AmbilJumlahTotalpeopledirectoryKategoriSub_ByKategori( $tbl_peopledirectorykategorisub, $idkategori )
	{
  		$sqlText = "SELECT count(id) as jml FROM $tbl_peopledirectorykategorisub WHERE idkategori='$idkategori'";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
	


  
	function Select_All_SubKategori_peopledirectory_By_Urutan( $tbl_peopledirectorykategorisub, $idkategori ){
		 $sql = mysql_query("SELECT * FROM $tbl_peopledirectorykategorisub WHERE idkategori='$idkategori' ORDER BY id");
		 return $sql;
	}

  	/* */
	function Select_All_SubKategori_peopledirectory_By_NOTIDSUB( $tbl_peopledirectorykategorisub, $idkategori, $idkategorisub ){
		 $sql = mysql_query("SELECT * FROM $tbl_peopledirectorykategorisub WHERE idkategori='$idkategori' ORDER BY id");
		 return $sql;
	}



function Box_Subkanal_peopledirectory_TampilHomepage($tbl_peopledirectorykategorisub, $posisi){
$sql = mysql_query("SELECT * FROM $tbl_peopledirectorykategorisub WHERE homepagetampil='1' AND posisi = '$posisi'");
return $sql;
}



/* TAMPILKAN SUB KATEGORI DI MENU 2 */
function List_MenuTampil2_SubKanalpeopledirectory( $tbl_peopledirectorykategorisub, $idkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectorykategorisub WHERE idkategori='$idkategori' AND menutampil2 ='1' ORDER BY urutan ");
		return $sql;
}

 

function Select_SubKategori_peopledirectory_By_Id( $tbl_peopledirectorykategorisub, $idsubkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectorykategorisub WHERE id = '$idsubkategori'");
		return $sql;
}


	function Detail_SubKanalpeopledirectory_Publish( $tbl_peopledirectorykategorisub , $idkategorisub ){
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectorykategorisub WHERE statustampil='1' AND id='$idkategorisub'");
		$result = mysql_fetch_object($sql);
		return $result;
	}

 
	function peopledirectorySubKanalDiLihat( $tbl_peopledirectorykategorisub, $id ){ /* Hit Counter Sub Kanal peopledirectory */
	
			$sql = mysql_query("SELECT * FROM $tbl_peopledirectorykategorisub WHERE id='$id'");
			$datapeopledirectory = mysql_fetch_array($sql);
			$hit = $datapeopledirectory ['hit'];
			$hit = $hit+1;
	
			$sqlupdate = mysql_query("UPDATE $tbl_peopledirectorykategorisub SET hit='$hit' WHERE id='$id'");
			
			return $sqlupdate;
	}


	function cekJmlHits_SubKanalpeopledirectory( $tbl_peopledirectorykategorisub ){ /* Cek Jumlah Hits peopledirectory Sub Kanal */
		$sqlText = "SELECT sum(hit) as jml FROM $tbl_peopledirectorykategorisub";
		$result = mysql_query($sqlText);
		$row = mysql_fetch_object($result);
		$jml = $row->jml;
		return $jml;
	}

	function List_SubKanalpeopledirectory_Publish( $tbl_peopledirectorykategorisub , $idkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectorykategorisub WHERE idkategori='$idkategori' 
		AND statustampil ='1' ORDER BY urutan ");
		return $sql;
	}

	function Select_All_Publish_peopledirectory_SubKategori_Desc_Urutan( $tbl_peopledirectorykategorisub , $idkategori){
		 $sql = mysql_query("SELECT * FROM $tbl_peopledirectorykategorisub WHERE 
		 	statustampil = '1' AND
		 	idkategori = '$idkategori' 
		 ORDER BY urutan DESC");
		 return $sql;
	}
	
	/* List peopledirectory subkanal tampil di homepage */
  
	function Select_All_Publish_peopledirectory_SubKategori_Desc_Homepage( $tbl_peopledirectorykategorisub , $idkategori, $dataperpage){
		 $sql = mysql_query("SELECT * FROM $tbl_peopledirectorykategorisub WHERE 
		 	statustampil = '1' AND
			keterangan NOT LIKE '%china%'  AND
		 	idkategori = '$idkategori' 
		 ORDER BY hit DESC LIMIT $dataperpage");
		 return $sql;
	}

?>