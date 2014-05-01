<?php
/* PUSTAKA FUNGSI QUERY DATABASE PADA TABEL SUB KANAL downloadarea */
 	/* Fungsi Buat ID Otomatis Untuk downloadarea Kategori Sub . */
	function downloadareaKategoriSub_CreateID( $tbl_downloadareakategorisub ){
		$sql = mysql_query("SELECT * FROM $tbl_downloadareakategorisub ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$UID = $data["id"];
		$UID = $UID+1;  
		return $UID;
	}	 

 
	/*  Fungsi Periksa Judul downloadarea Sub Kategori */
	function downloadareaKategoriSub_PeriksaJudul( $tbl_downloadareakategorisub, $idkategori, $keterangan, $keteranganinggris ){
		$sql = mysql_query("SELECT * FROM $tbl_downloadareakategorisub WHERE idkategori = '$idkategori' AND 
		keterangan = '$keterangan' AND 
		keteranganinggris = '$keteranganinggris'");
		return $sql;	
	}

	/* Fungsi Tambah Data downloadarea Kategori Sub */
	function downloadareaKategoriSub_TambahData(
		$tbl_downloadareakategorisub,
		$id, $idupline, $idkategori,
		$keterangan, $keteranganinggris,
		$statustampil, $menuatas1, $menuatas2,
		$menubawah1, $menubawah2, $homepagetampil,
		$posisi, $urutan,
		$imagefile, $imagelogo, $imageheader, $imagebackground,
		$hit, $linkjudul, $keyword 
	){
		$sql = mysql_query("INSERT INTO $tbl_downloadareakategorisub
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


	function downloadareaKategoriSub_UpdateData(
		$tbl_downloadareakategorisub,
		$id, $idupline, $idkategori,
		$keterangan, $keteranganinggris,
		$statustampil, $menuatas1, $menuatas2,
		$menubawah1, $menubawah2, $homepagetampil,
		$posisi, $urutan,
		$imagefile, $imagelogo, $imageheader, $imagebackground,
		$hit, $linkjudul, $keyword 
	){
	
	$sql = mysql_query("
	UPDATE $tbl_downloadareakategorisub SET
 
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


	function Select_Detail_KategoriSub_downloadarea( $tbl_downloadareakategorisub, $id ){
		$sql = mysql_query("SELECT * FROM $tbl_downloadareakategorisub WHERE id = '$id'");
		return mysql_fetch_object($sql);
	}





/* ---------- Start Function Image ------ */

/* Function Hapus Image Location / Path */
	function downloadareaKategoriSub_HapusImage( $tbl_downloadareakategorisub, $id ){
		$sql = mysql_query("
			UPDATE $tbl_downloadareakategorisub SET
				imagefile = '' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


/* Function Hapus Image Logo */
	function downloadareaKategoriSub_HapusImageLogo( $tbl_downloadareakategorisub, $id ){
		$sql = mysql_query("
			UPDATE $tbl_downloadareakategorisub SET
				imagelogo = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}
	
/* Function Hapus Image Header  */
	function downloadareaKategoriSub_HapusImageHeader( $tbl_downloadareakategorisub, $id ){
		$sql = mysql_query("
			UPDATE $tbl_downloadareakategorisub SET
				imageheader = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}	
	
/* Function Hapus Image Background  */
	function downloadareaKategoriSub_HapusImageBackground( $tbl_downloadareakategorisub, $id ){
		$sql = mysql_query("
			UPDATE $tbl_downloadareakategorisub SET
 				imagebackground = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}	
	
/* ---------- End Function Hapus Image */


/* Start status tampil */

	function downloadareaKategoriSub_StatusTampil( $tbl_downloadareakategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_downloadareakategorisub SET
				statustampil = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}


	function downloadareaKategoriSub_HomepageTampil( $tbl_downloadareakategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_downloadareakategorisub SET
				homepagetampil = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}


	function downloadareaKategoriSub_MenuAtas1Tampil( $tbl_downloadareakategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_downloadareakategorisub SET
				menuatas1 = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}
	
	

	function downloadareaKategoriSub_MenuAtas2Tampil( $tbl_downloadareakategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_downloadareakategorisub SET
				menuatas2 = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}

	function downloadareaKategoriSub_MenuBawah1Tampil( $tbl_downloadareakategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_downloadareakategorisub SET
				menubawah1 = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}

	function downloadareaKategoriSub_MenuBawah2Tampil( $tbl_downloadareakategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_downloadareakategorisub SET
				menubawah2 = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}


/* End Function tampil */




	/* SUB KANAL downloadarea : hapus sub kanal downloadarea berdasarkan id terpilih */
	function  downloadareaKategoriSub_HapusData( $tbl_downloadareakategorisub, $id){
		$sql = mysql_query("
			DELETE FROM $tbl_downloadareakategorisub WHERE id='$id'
		");
		return $sql;
	}
	

	
	/* Buat Direktori Untuk File Sub Kategori downloadarea */
	function downloadareaKategoriSub_CreateDirektori(  
	  	$tanggalhariini
	){
 		$direktoribuat =  "filemodul/downloadarea/" . "subkategoriimage/" . $tanggalhariini . "/";
	  	if (is_dir( $direktoribuat )) 
	  	{  }
	  	else
	  	{
			 mkdir( $direktoribuat,'0777',true); 
			 chmod( $direktoribuat, 0777);
	  	}
		return $direktoribuat;
	}


 
	
 	function AmbilJumlahTotaldownloadareaKategoriSub()
	{
  		$sqlText = "SELECT count(id) as jml FROM $tbl_downloadareakategorisub";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
	

 	function AmbilJumlahTotaldownloadareaKategoriSub_ByKategori( $tbl_downloadareakategorisub, $idkategori )
	{
  		$sqlText = "SELECT count(id) as jml FROM $tbl_downloadareakategorisub WHERE idkategori='$idkategori'";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
	


  
	function Select_All_SubKategori_downloadarea_By_Urutan( $tbl_downloadareakategorisub, $idkategori ){
		 $sql = mysql_query("SELECT * FROM $tbl_downloadareakategorisub WHERE idkategori='$idkategori' ORDER BY id");
		 return $sql;
	}

  
	function Select_All_SubKategori_downloadarea_By_NOTIDSUB( $tbl_downloadareakategorisub, $idkategori, $idkategorisub ){
		 $sql = mysql_query("SELECT * FROM $tbl_downloadareakategorisub WHERE idkategori='$idkategori' ORDER BY id");
		 return $sql;
	}



function Box_Subkanal_downloadarea_TampilHomepage($tbl_downloadareakategorisub, $posisi){
$sql = mysql_query("SELECT * FROM $tbl_downloadareakategorisub WHERE homepagetampil='1' AND posisi = '$posisi'");
return $sql;
}



/* TAMPILKAN SUB KATEGORI DI MENU 2 */
function List_MenuTampil2_SubKanaldownloadarea( $tbl_downloadareakategorisub, $idkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_downloadareakategorisub WHERE idkategori='$idkategori' AND menutampil2 ='1' ORDER BY urutan ");
		return $sql;
}

 

function Select_SubKategori_downloadarea_By_Id( $tbl_downloadareakategorisub, $idsubkategori ){

		$sql = mysql_query("SELECT * FROM $tbl_downloadareakategorisub WHERE id = '$idsubkategori'");
		$result = mysql_fetch_object($sql);
		return $result;

}


	function Detail_SubKanaldownloadarea_Publish( $tbl_downloadareakategorisub , $idkategorisub ){
		$sql = mysql_query("SELECT * FROM $tbl_downloadareakategorisub WHERE statustampil='1' AND id='$idkategorisub'");
		$result = mysql_fetch_object($sql);
		return $result;
	}

 
	function downloadareaSubKanalDiLihat( $tbl_downloadareakategorisub, $id ){ /* Hit Counter Sub Kanal downloadarea */
	
			$sql = mysql_query("SELECT * FROM $tbl_downloadareakategorisub WHERE id='$id'");
			$datadownloadarea = mysql_fetch_array($sql);
			$hit = $datadownloadarea ['hit'];
			$hit = $hit+1;
	
			$sqlupdate = mysql_query("UPDATE $tbl_downloadareakategorisub SET hit='$hit' WHERE id='$id'");
			
			return $sqlupdate;
	}


	function cekJmlHits_SubKanaldownloadarea( $tbl_downloadareakategorisub ){ /* Cek Jumlah Hits downloadarea Sub Kanal */
		$sqlText = "SELECT sum(hit) as jml FROM $tbl_downloadareakategorisub";
		$result = mysql_query($sqlText);
		$row = mysql_fetch_object($result);
		$jml = $row->jml;
		return $jml;
	}

	function List_SubKanaldownloadarea_Publish( $tbl_downloadareakategorisub , $idkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_downloadareakategorisub WHERE idkategori='$idkategori' 
		AND statustampil ='1' ORDER BY urutan ");
		return $sql;
	}

	function Select_All_Publish_downloadarea_SubKategori_Desc_Urutan( $tbl_downloadareakategorisub , $idkategori){
		 $sql = mysql_query("SELECT * FROM $tbl_downloadareakategorisub WHERE 
		 	statustampil = '1' AND
		 	idkategori = '$idkategori' 
		 ORDER BY urutan DESC");
		 return $sql;
	}
	
	/* List downloadarea subkanal tampil di homepage */
  
	function Select_All_Publish_downloadarea_SubKategori_Desc_Homepage( $tbl_downloadareakategorisub , $idkategori, $dataperpage){
		 $sql = mysql_query("SELECT * FROM $tbl_downloadareakategorisub WHERE 
		 	statustampil = '1' AND
			keterangan NOT LIKE '%china%'  AND
		 	idkategori = '$idkategori' 
		 ORDER BY hit DESC LIMIT $dataperpage");
		 return $sql;
	}

?>