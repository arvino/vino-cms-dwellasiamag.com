<?php
/* PUSTAKA FUNGSI QUERY DATABASE PADA TABEL KANAL downloadarea */
	/* Fungsi Buat ID Otomatis Untuk downloadarea Kategori. */
	function downloadareaKategori_CreateID( $tbl_downloadareakategori ){
		$sql = mysql_query("SELECT * FROM $tbl_downloadareakategori ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$UID = $data["id"];
		$UID = $UID+1;  
		return $UID;
	}	 
	

	/*  Fungsi Periksa Judul downloadarea Kategori */
	function downloadareaKategori_Periksaketerangan( $tbl_downloadareakategori, $keterangan, $keteranganinggris ){
		$sql = mysql_query("SELECT * FROM $tbl_downloadareakategori WHERE keterangan = '$keterangan' AND keteranganinggris = '$keteranganinggris'");
		return $sql;	
	}
 
	/* Fungsi Tambah Data downloadarea Kategori */
	function downloadareaKategori_TambahData(
		$tbl_downloadareakategori,
		$id, $idupline, $keterangan, $keteranganinggris,
		$posisi, $urutan,
		$homepagetampil, $menuatas1, $menuatas2,
		$menubawah1, $menubawah2, $statustampil,
		$imagefile, $imagelogo, $imageheader, $imagebackground,
		$hit, $linkjudul, $keyword

	){
		$sql = mysql_query("INSERT INTO $tbl_downloadareakategori
		(
			id, idupline, keterangan, keteranganinggris,
			posisi, urutan,
			homepagetampil, menuatas1, menuatas2,
			menubawah1, menubawah2, statustampil,
			imagefile, imagelogo, imageheader, imagebackground,
			hit, linkjudul, keyword
			
		)VALUES(
			'$id', '$idupline',
			'$keterangan', '$keteranganinggris',
			'$posisi', '$urutan',
			'$homepagetampil', '$menuatas1', '$menuatas2',
			'$menubawah1', '$menubawah2', '$statustampil',
			'$imagefile', '$imagelogo', '$imageheader', '$imagebackground',
			'$hit', '$linkjudul', '$keyword'
		)");
		return $sql;
	}
	
	
	
	
/* Kategori Update data */
 	function downloadareaKategori_UpdateData(
		$tbl_downloadareakategori,
		$id, $idupline, $keterangan, $keteranganinggris,
		$posisi, $urutan,
		$homepagetampil, $menuatas1, $menuatas2,
		$menubawah1, $menubawah2, $statustampil,
		$imagefile, $imagelogo, $imageheader, $imagebackground,
		$hit, $linkjudul, $keyword
	){
	
	$sql = mysql_query("
	UPDATE $tbl_downloadareakategori SET

		idupline = '$idupline',
		keterangan = '$keterangan',
		keteranganinggris = '$keteranganinggris',
		posisi = '$posisi',
		urutan = '$urutan',
		homepagetampil = '$homepagetampil',
		menuatas1 = '$menuatas1',
		menuatas2 = '$menuatas2',
		menubawah1 = '$menubawah1',
		menubawah2 = '$menubawah2',
		statustampil = '$statustampil',
 
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


	/* TAMPILKAN DETAIL KATEGORI downloadarea BERDASARKAN ID */
	function Select_Detail_Kategori_downloadarea( $tbl_downloadareakategori, $id ){
		$sql = mysql_query("SELECT * FROM $tbl_downloadareakategori WHERE id = '$id'");
		return mysql_fetch_object($sql);
	}




/* Start Update Image */

	function downloadareaKategori_update_image_logo( $tbl_downloadareakategori, $id ){
		$sql = mysql_query("
			UPDATE $tbl_downloadareakategori SET
				imagelogo = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function downloadareaKategori_update_image_header( $tbl_downloadareakategori, $id ){
		$sql = mysql_query("
			UPDATE $tbl_downloadareakategori SET
				imageheader = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function downloadareaKategori_update_image_background( $tbl_downloadareakategori, $id ){
		$sql = mysql_query("
			UPDATE $tbl_downloadareakategori SET
				imagebackground = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}
/* End Update Image */
	
	
	
/* Start Function Update Status Tampil */

	function downloadareaKategori_StatusTampil( $tbl_downloadareakategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_downloadareakategori SET
				statustampil = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


	function downloadareaKategori_HomepageTampil( $tbl_downloadareakategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_downloadareakategori SET
				homepagetampil = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


	function View_Kanaldownloadarea_Publish_MenuAtas1( $tbl_downloadareakategori ){ /* menu tampil di atas */
		$sql = mysql_query("SELECT * FROM $tbl_downloadareakategori WHERE 
			homepagetampil = '1' AND
			statustampil='1' AND 
			menuatas1 = '1'
		ORDER BY urutan ASC
		");
	 
		return $sql;
	}


	function downloadareaKategori_menuatas1_tampil( $tbl_downloadareakategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_downloadareakategori SET
				menuatas1 = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


	function downloadareaKategori_menuatas2_tampil( $tbl_downloadareakategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_downloadareakategori SET
				menuatas2 = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function downloadareaKategori_menubawah1_tampil( $tbl_downloadareakategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_downloadareakategori SET
				menubawah1 = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function downloadareaKategori_menubawah2_tampil( $tbl_downloadareakategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_downloadareakategori SET
				menubawah2 = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


/* End Function Update Status Tampil */




	/* KANAL downloadarea : hapus kanal downloadarea berdasarkan id terpilih */
	function  downloadareaKategori_HapusData( $tbl_downloadareakategori, $id){
		$sql = mysql_query("
			DELETE FROM $tbl_downloadareakategori WHERE id='$id'
		");
		return $sql;
	}
	
	
	/* Buat Direktori Untuk File Kategori downloadarea */
	function downloadareaKategori_CreateDirektori(  
	  	$tanggalhariini
	){
 		$direktoribuat =  "filemodul/downloadarea/" . "kategoriimage/" . $tanggalhariini . "/";
	  	if (is_dir( $direktoribuat )) 
	  	{  }
	  	else
	  	{
			 mkdir( $direktoribuat,'0777',true); 
			 chmod( $direktoribuat, 0777);
	  	}
		return $direktoribuat;
	}

 
 	
	/* select kanal downloadarea berdasarkan id terpilih */
	
	
	/* KANAL downloadarea : select kanal downloadarea berdasarkan status tampil = 1 pengurutan berdasarkan field urutan terbesar ( desc )*/	
	function Select_All_Publish_downloadarea_Kategori( $tbl_downloadareakategori ){
		$sql = mysql_query("SELECT * FROM $tbl_downloadareakategori WHERE statustampil='1' ORDER BY urutan");
		return $sql;

	}

 
	/* KANAL downloadarea : */		
	function getJmlTotaldownloadareaKategori(){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_downloadareakategori";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}

 	
 	function hapusgambardownloadareakategori($id){
		$sqlText = "UPDATE $this->tbl_downloadareakategori SET imagefile = '', imagelogo='' where id = $id";
		return mysql_query($sqlText);
	}

	
 
 	function Select_All_Kategori_downloadarea_By_Urutan( $tbl_downloadareakategori ){
 		$sql = mysql_query(" SELECT * FROM $tbl_downloadareakategori ORDER BY urutan ");
 		return $sql;
	}


	/* TAMPILKAN DATA KATEGORI BERDASARKAN ID KATEGORI */
	function Select_Kategori_downloadarea_By_Id( $tbl_downloadareakategori, $idkategori ){
		$sql = mysql_query("
			SELECT * FROM $tbl_downloadareakategori WHERE id ='$idkategori'
		");
		return $sql;
	}





	/* TAMPILKAN KATEGORI DI MENU ATAS 1 */
	function List_MenuAtas1_Kanaldownloadarea( $tbl_downloadareakategori ){
		$sql = mysql_query("SELECT * FROM $tbl_downloadareakategori WHERE menuatas1 ='1' ORDER BY urutan ");
		return $sql;
	}

	/* TAMPILKAN KATEGORI DI MENU ATAS 2 */
	function List_MenuAtas2_Kanaldownloadarea( $tbl_downloadareakategori ){
		$sql = mysql_query("SELECT * FROM $tbl_downloadareakategori WHERE menuatas2 ='1' ORDER BY urutan ");
		return $sql;
	}

	/* TAMPILKAN KATEGORI DI MENU BAWAH 1 */
	function List_MenuBawah1_Kanaldownloadarea( $tbl_downloadareakategori ){
		$sql = mysql_query("SELECT * FROM $tbl_downloadareakategori WHERE menubawah1 ='1' ORDER BY urutan ");
		return $sql;
	}

	/* TAMPILKAN KATEGORI DI MENU BAWAH 2 */
	function List_MenuBawah2_Kanaldownloadarea( $tbl_downloadareakategori ){
		$sql = mysql_query("SELECT * FROM $tbl_downloadareakategori WHERE menubawah2 ='1' ORDER BY urutan ");
		return $sql;
	}




	/* TAMPILKAN KATEGORI / KANAL YANG TAMPIL DI HOMEPAGE */
	function Select_Kanaldownloadarea_TampilDiHomepage( $tbl_downloadareakategori ){
		$sql = mysql_query("SELECT * FROM $tbl_downloadareakategori WHERE homepagetampil ='1' ORDER BY urutan ");
		return $sql;
	}

	/* TAMPILKAN KATEGORI */
	function Detail_Kanaldownloadarea_Publish( $tbl_downloadareakategori , $idkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_downloadareakategori WHERE statustampil='1' AND id='$idkategori'");
		$result = mysql_fetch_object($sql);
		return $result;
	}



 
	function downloadareaKanalDiLihat( $tbl_downloadareakategori, $id ){ /* Hit Counter Kanal downloadarea */
	
			$sql = mysql_query("SELECT * FROM $tbl_downloadareakategori WHERE id='$id'");
			$datadownloadarea = mysql_fetch_array($sql);
			$hit = $datadownloadarea ['hit'];
			$hit = $hit+1;
	
			$sqlupdate = mysql_query("UPDATE $tbl_downloadareakategori SET hit='$hit' WHERE id='$id'");
			
			return $sqlupdate;
	}


	function cekJmlHits_Kanaldownloadarea( $tbl_downloadareakategori ){ /* Cek Jumlah Hits downloadarea Kanal */
		$sqlText = "SELECT sum(hit) as jml FROM $tbl_downloadareakategori";
		$result = mysql_query($sqlText);
		$row = mysql_fetch_object($result);
		$jml = $row->jml;
		return $jml;
	}



?>