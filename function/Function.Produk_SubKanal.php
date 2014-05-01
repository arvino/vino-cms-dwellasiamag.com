<?php
/* PUSTAKA FUNGSI QUERY DATABASE PADA TABEL SUB KANAL produk */
 	/* Fungsi Buat ID Otomatis Untuk produk Kategori Sub . */
	function produkKategoriSub_CreateID( $tbl_produkkategorisub ){
		$sql = mysql_query("SELECT * FROM $tbl_produkkategorisub ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$UID = $data["id"];
		$UID = $UID+1;  
		return $UID;
	}	 

 
	/*  Fungsi Periksa Judul produk Sub Kategori */
	function produkKategoriSub_PeriksaJudul( $tbl_produkkategorisub, $idkategori, $keterangan, $keteranganinggris ){
		$sql = mysql_query("SELECT * FROM $tbl_produkkategorisub WHERE idkategori = '$idkategori' AND 
		keterangan = '$keterangan' AND 
		keteranganinggris = '$keteranganinggris'");
		return $sql;	
	}

	/* Fungsi Tambah Data produk Kategori Sub */
	function produkKategoriSub_TambahData(
		$tbl_produkkategorisub,
		$id, $idupline, $idkategori,
		$keterangan, $keteranganinggris,
		$statustampil, $menuatas1, $menuatas2,
		$menubawah1, $menubawah2, $homepagetampil,
		$posisi, $urutan,
		$imagefile, $imagelogo, $imageheader, $imagebackground,
		$hit, $linkjudul, $keyword 
	){
		$sql = mysql_query("INSERT INTO $tbl_produkkategorisub
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


	function produkKategoriSub_UpdateData(
		$tbl_produkkategorisub,
		$id, $idupline, $idkategori,
		$keterangan, $keteranganinggris,
		$statustampil, $menuatas1, $menuatas2,
		$menubawah1, $menubawah2, $homepagetampil,
		$posisi, $urutan,
		$imagefile, $imagelogo, $imageheader, $imagebackground,
		$hit, $linkjudul, $keyword 
	){
	
	$sql = mysql_query("
	UPDATE $tbl_produkkategorisub SET
 
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


	function Select_Detail_KategoriSub_produk( $tbl_produkkategorisub, $id ){
		$sql = mysql_query("SELECT * FROM $tbl_produkkategorisub WHERE id = '$id'");
		return mysql_fetch_object($sql);
	}





/* ---------- Start Function Image ------ */

/* Function Hapus Image Location / Path */
	function produkKategoriSub_HapusImage( $tbl_produkkategorisub, $id ){
		$sql = mysql_query("
			UPDATE $tbl_produkkategorisub SET
				imagefile = '' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


/* Function Hapus Image Logo */
	function produkKategoriSub_HapusImageLogo( $tbl_produkkategorisub, $id ){
		$sql = mysql_query("
			UPDATE $tbl_produkkategorisub SET
				imagelogo = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}
	
/* Function Hapus Image Header  */
	function produkKategoriSub_HapusImageHeader( $tbl_produkkategorisub, $id ){
		$sql = mysql_query("
			UPDATE $tbl_produkkategorisub SET
				imageheader = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}	
	
/* Function Hapus Image Background  */
	function produkKategoriSub_HapusImageBackground( $tbl_produkkategorisub, $id ){
		$sql = mysql_query("
			UPDATE $tbl_produkkategorisub SET
 				imagebackground = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}	
	
/* ---------- End Function Hapus Image */


/* Start status tampil */

	function produkKategoriSub_StatusTampil( $tbl_produkkategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_produkkategorisub SET
				statustampil = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}


	function produkKategoriSub_HomepageTampil( $tbl_produkkategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_produkkategorisub SET
				homepagetampil = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}


	function produkKategoriSub_MenuAtas1Tampil( $tbl_produkkategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_produkkategorisub SET
				menuatas1 = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}

	function produkKategoriSub_MenuAtas2Tampil( $tbl_produkkategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_produkkategorisub SET
				menuatas2 = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}

	function produkKategoriSub_MenuBawah1Tampil( $tbl_produkkategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_produkkategorisub SET
				menubawah1 = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}

	function produkKategoriSub_MenuBawah2Tampil( $tbl_produkkategorisub, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_produkkategorisub SET
				menubawah2 = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	}


/* End Function tampil */




	/* SUB KANAL produk : hapus sub kanal produk berdasarkan id terpilih */
	function  produkKategoriSub_HapusData( $tbl_produkkategorisub, $id){
		$sql = mysql_query("
			DELETE FROM $tbl_produkkategorisub WHERE id='$id'
		");
		return $sql;
	}
	

	
	/* Buat Direktori Untuk File Sub Kategori produk */
	function produkKategoriSub_CreateDirektori(  
	  	$tanggalhariini
	){
 		$direktoribuat =  "filemodul/produk/" . "subkategoriimage/" . $tanggalhariini . "/";
	  	if (is_dir( $direktoribuat )) 
	  	{  }
	  	else
	  	{
			 mkdir( $direktoribuat,'0777',true); 
			 chmod( $direktoribuat, 0777);
	  	}
		return $direktoribuat;
	}


 
	
 	function AmbilJumlahTotalprodukKategoriSub()
	{
  		$sqlText = "SELECT count(id) as jml FROM $tbl_produkkategorisub";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
	

 	function AmbilJumlahTotalprodukKategoriSub_ByKategori( $tbl_produkkategorisub, $idkategori )
	{
  		$sqlText = "SELECT count(id) as jml FROM $tbl_produkkategorisub WHERE idkategori='$idkategori'";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
	


  
	function Select_All_SubKategori_produk_By_Urutan( $tbl_produkkategorisub, $idkategori ){
		 $sql = mysql_query("SELECT * FROM $tbl_produkkategorisub WHERE idkategori='$idkategori' ORDER BY id");
		 return $sql;
	}

  	/* */
	function Select_All_SubKategori_produk_By_NOTIDSUB( $tbl_produkkategorisub, $idkategori, $idkategorisub ){
		 $sql = mysql_query("SELECT * FROM $tbl_produkkategorisub WHERE idkategori='$idkategori' ORDER BY id");
		 return $sql;
	}



function Box_Subkanal_produk_TampilHomepage($tbl_produkkategorisub, $posisi){
$sql = mysql_query("SELECT * FROM $tbl_produkkategorisub WHERE homepagetampil='1' AND posisi = '$posisi'");
return $sql;
}



/* TAMPILKAN SUB KATEGORI DI MENU 2 */
function List_MenuTampil2_SubKanalproduk( $tbl_produkkategorisub, $idkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_produkkategorisub WHERE idkategori='$idkategori' AND menutampil2 ='1' ORDER BY urutan ");
		return $sql;
}

 

function Select_SubKategori_produk_By_Id( $tbl_produkkategorisub, $idsubkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_produkkategorisub WHERE id = '$idsubkategori'");
		return $sql;
}


	function Detail_SubKanalproduk_Publish( $tbl_produkkategorisub , $idkategorisub ){
		$sql = mysql_query("SELECT * FROM $tbl_produkkategorisub WHERE statustampil='1' AND id='$idkategorisub'");
		$result = mysql_fetch_object($sql);
		return $result;
	}

 
	function produkSubKanalDiLihat( $tbl_produkkategorisub, $id ){ /* Hit Counter Sub Kanal produk */
	
			$sql = mysql_query("SELECT * FROM $tbl_produkkategorisub WHERE id='$id'");
			$dataproduk = mysql_fetch_array($sql);
			$hit = $dataproduk ['hit'];
			$hit = $hit+1;
	
			$sqlupdate = mysql_query("UPDATE $tbl_produkkategorisub SET hit='$hit' WHERE id='$id'");
			
			return $sqlupdate;
	}


	function cekJmlHits_SubKanalproduk( $tbl_produkkategorisub ){ /* Cek Jumlah Hits produk Sub Kanal */
		$sqlText = "SELECT sum(hit) as jml FROM $tbl_produkkategorisub";
		$result = mysql_query($sqlText);
		$row = mysql_fetch_object($result);
		$jml = $row->jml;
		return $jml;
	}

	function List_SubKanalproduk_Publish( $tbl_produkkategorisub , $idkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_produkkategorisub WHERE idkategori='$idkategori' 
		AND statustampil ='1' ORDER BY urutan ");
		return $sql;
	}

	function Select_All_Publish_produk_SubKategori_Desc_Urutan( $tbl_produkkategorisub , $idkategori){
		 $sql = mysql_query("SELECT * FROM $tbl_produkkategorisub WHERE 
		 	statustampil = '1' AND
		 	idkategori = '$idkategori' 
		 ORDER BY urutan DESC");
		 return $sql;
	}
	
	/* List produk subkanal tampil di homepage */
  
	function Select_All_Publish_produk_SubKategori_Desc_Homepage( $tbl_produkkategorisub , $idkategori, $dataperpage){
		 $sql = mysql_query("SELECT * FROM $tbl_produkkategorisub WHERE 
		 	statustampil = '1' AND
			keterangan NOT LIKE '%china%'  AND
		 	idkategori = '$idkategori' 
		 ORDER BY hit DESC LIMIT $dataperpage");
		 return $sql;
	}

?>