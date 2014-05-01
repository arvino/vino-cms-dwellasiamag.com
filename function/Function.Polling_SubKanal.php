<?php
function pollingKategoriSub_CreateID( $tbl_pollingkategorisub ){
		$sql = mysql_query("SELECT * FROM $tbl_pollingkategorisub ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$UID = $data["id"];
		$UID = $UID+1;  
		return $UID;
	}	 

 
	/*  Fungsi Periksa Judul polling Sub Kategori */
	function pollingKategoriSub_PeriksaJudul( $tbl_pollingkategorisub, $idkategori, $keterangan, $keteranganinggris ){
		$sql = mysql_query("SELECT * FROM $tbl_pollingkategorisub WHERE idkategori = '$idkategori' AND 
		keterangan = '$keterangan' AND 
		keteranganinggris = '$keteranganinggris'");
		return $sql;	
	}

	/* Fungsi Tambah Data polling Kategori Sub */
	function pollingKategoriSub_TambahData(
		$tbl_pollingkategorisub,
		$id, $idupline, $idkategori,
		$keterangan, $keteranganinggris,
		$statustampil, $menuatas1, $menuatas2,
		$menubawah1, $menubawah2, $homepagetampil,
		$posisi, $urutan,
		$imagefile, $imagelogo, $imageheader, $imagebackground,
		$hit, $linkjudul, $keyword 
	){
		$sql = mysql_query("INSERT INTO $tbl_pollingkategorisub
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


	function pollingKategoriSub_UpdateData(
		$tbl_pollingkategorisub,
		$id, $idupline, $idkategori,
		$keterangan, $keteranganinggris,
		$statustampil, $menuatas1, $menuatas2,
		$menubawah1, $menubawah2, $homepagetampil,
		$posisi, $urutan,
		$imagefile, $imagelogo, $imageheader, $imagebackground,
		$hit, $linkjudul, $keyword 
	){
	
	$sql = mysql_query("
	UPDATE $tbl_pollingkategorisub SET
 
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


	function Select_Detail_KategoriSub_polling( $tbl_pollingkategorisub, $id ){
		$sql = mysql_query("SELECT * FROM $tbl_pollingkategorisub WHERE id = '$id'");
		return mysql_fetch_object($sql);
	}





/* ---------- Start Function Image ------ */

/* Function Hapus Image Location / Path */
	function pollingKategoriSub_HapusImage( $tbl_pollingkategorisub, $id ){
		$sql = mysql_query("
			UPDATE $tbl_pollingkategorisub SET
				imagefile = '' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


/* Function Hapus Image Logo */
	function pollingKategoriSub_HapusImageLogo( $tbl_pollingkategorisub, $id ){
		$sql = mysql_query("
			UPDATE $tbl_pollingkategorisub SET
				imagelogo = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}
	
/* Function Hapus Image Header  */
	function pollingKategoriSub_HapusImageHeader( $tbl_pollingkategorisub, $id ){
		$sql = mysql_query("
			UPDATE $tbl_pollingkategorisub SET
				imageheader = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}	
	
/* Function Hapus Image Background  */
	function pollingKategoriSub_HapusImageBackground( $tbl_pollingkategorisub, $id ){
		$sql = mysql_query("
			UPDATE $tbl_pollingkategorisub SET
 				imagebackground = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}	
	
/* ---------- End Function Hapus Image */


/* Start status tampil */

	function pollingKategoriSub_StatusTampil( $tbl_pollingkategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_pollingkategorisub SET
				statustampil = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}


	function pollingKategoriSub_HomepageTampil( $tbl_pollingkategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_pollingkategorisub SET
				homepagetampil = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}


	function pollingKategoriSub_MenuAtas1Tampil( $tbl_pollingkategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_pollingkategorisub SET
				menuatas1 = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}

	function pollingKategoriSub_MenuAtas2Tampil( $tbl_pollingkategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_pollingkategorisub SET
				menuatas2 = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}

	function pollingKategoriSub_MenuBawah1Tampil( $tbl_pollingkategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_pollingkategorisub SET
				menubawah1 = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}

	function pollingKategoriSub_MenuBawah2Tampil( $tbl_pollingkategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_pollingkategorisub SET
				menubawah2 = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}


/* End Function tampil */




	/* SUB KANAL polling : hapus sub kanal polling berdasarkan id terpilih */
	function  pollingKategoriSub_HapusData( $tbl_pollingkategorisub, $id){
		$sql = mysql_query("
			DELETE FROM $tbl_pollingkategorisub WHERE id='$id'
		");
		return $sql;
	}
	

	
	/* Buat Direktori Untuk File Sub Kategori polling */
	function pollingKategoriSub_CreateDirektori(  
	  	$tanggalhariini
	){
 		$direktoribuat =  "filemodul/polling/" . "subkategoriimage/" . $tanggalhariini . "/";
	  	if (is_dir( $direktoribuat )) 
	  	{  }
	  	else
	  	{
			 mkdir( $direktoribuat,'0777',true); 
			 chmod( $direktoribuat, 0777);
	  	}
		return $direktoribuat;
	}


 
	
 	function AmbilJumlahTotalpollingKategoriSub()
	{
  		$sqlText = "SELECT count(id) as jml FROM $tbl_pollingkategorisub";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
	

 	function AmbilJumlahTotalpollingKategoriSub_ByKategori( $tbl_pollingkategorisub, $idkategori )
	{
  		$sqlText = "SELECT count(id) as jml FROM $tbl_pollingkategorisub WHERE idkategori='$idkategori'";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
	


  
	function Select_All_SubKategori_polling_By_Urutan( $tbl_pollingkategorisub, $idkategori ){
		 $sql = mysql_query("SELECT * FROM $tbl_pollingkategorisub WHERE idkategori='$idkategori' ORDER BY id");
		 return $sql;
	}

	function Select_All_SubKategori_polling_By_Kategori( $tbl_pollingkategorisub, $idkategori ){
		 $sql = mysql_query("SELECT * FROM $tbl_pollingkategorisub WHERE idkategori='$idkategori' ORDER BY urutan");
		 return $sql;
	}

  
  
	function Select_All_SubKategori_polling_By_NOTIDSUB( $tbl_pollingkategorisub, $idkategori, $idkategorisub ){
		 $sql = mysql_query("SELECT * FROM $tbl_pollingkategorisub WHERE idkategori='$idkategori' ORDER BY id");
		 return $sql;
	}



function Box_Subkanal_polling_TampilHomepage($tbl_pollingkategorisub, $posisi){
$sql = mysql_query("SELECT * FROM $tbl_pollingkategorisub WHERE homepagetampil='1' AND posisi = '$posisi'");
return $sql;
}



/* TAMPILKAN SUB KATEGORI DI MENU 2 */
function List_MenuTampil2_SubKanalpolling( $tbl_pollingkategorisub, $idkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_pollingkategorisub WHERE idkategori='$idkategori' AND menutampil2 ='1' ORDER BY urutan ");
		return $sql;
}

 

function Select_SubKategori_polling_By_Id( $tbl_pollingkategorisub, $idsubkategori ){

		$sql = mysql_query("SELECT * FROM $tbl_pollingkategorisub WHERE id = '$idsubkategori'");
		$result = mysql_fetch_object($sql);
		return $result;

}


	function Detail_SubKanalpolling_Publish( $tbl_pollingkategorisub , $idkategorisub ){
		$sql = mysql_query("SELECT * FROM $tbl_pollingkategorisub WHERE statustampil='1' AND id='$idkategorisub'");
		$result = mysql_fetch_object($sql);
		return $result;
	}

 
	function pollingSubKanalDiLihat( $tbl_pollingkategorisub, $id ){ /* Hit Counter Sub Kanal polling */
	
			$sql = mysql_query("SELECT * FROM $tbl_pollingkategorisub WHERE id='$id'");
			$datapolling = mysql_fetch_array($sql);
			$hit = $datapolling ['hit'];
			$hit = $hit+1;
	
			$sqlupdate = mysql_query("UPDATE pollingkategorisub SET hit='$hit' WHERE id='$id'");
			
			return $sqlupdate;
	}


	function cekJmlHits_SubKanalpolling( $tbl_pollingkategorisub ){ /* Cek Jumlah Hits polling Sub Kanal */
		$sqlText = "SELECT sum(hit) as jml FROM $tbl_pollingkategorisub";
		$result = mysql_query($sqlText);
		$row = mysql_fetch_object($result);
		$jml = $row->jml;
		return $jml;
	}

	function List_SubKanalpolling_Publish( $tbl_pollingkategorisub , $idkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_pollingkategorisub WHERE idkategori='$idkategori' 
		AND statustampil ='1' ORDER BY urutan ");
		return $sql;
	}

	function Select_All_Publish_polling_SubKategori_Desc_Urutan( $tbl_pollingkategorisub , $idkategori){
		 $sql = mysql_query("SELECT * FROM $tbl_pollingkategorisub WHERE 
		 	statustampil = '1' AND
		 	idkategori = '$idkategori' 
		 ORDER BY urutan DESC");
		 return $sql;
	}
	
	/* List polling subkanal tampil di homepage */
  
	function Select_All_Publish_polling_SubKategori_Desc_Homepage( $tbl_pollingkategorisub , $idkategori, $dataperpage){
		 $sql = mysql_query("SELECT * FROM $tbl_pollingkategorisub WHERE 
		 	statustampil = '1' AND
			keterangan NOT LIKE '%china%'  AND
		 	idkategori = '$idkategori' 
		 ORDER BY hit DESC LIMIT $dataperpage");
		 return $sql;
	}

?>