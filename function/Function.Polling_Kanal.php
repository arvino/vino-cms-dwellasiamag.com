<?php
/* Fungsi Buat ID Otomatis Untuk polling Kategori. */
	function pollingKategori_CreateID( $tbl_pollingkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_pollingkategori ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$UID = $data["id"];
		$UID = $UID+1;  
		return $UID;
	}	 
	

	/*  Fungsi Periksa Judul polling Kategori */
	function pollingKategori_Periksaketerangan( $tbl_pollingkategori, $keterangan, $keteranganinggris ){
		$sql = mysql_query("SELECT * FROM $tbl_pollingkategori WHERE keterangan = '$keterangan' AND keteranganinggris = '$keteranganinggris'");
		return $sql;	
	}
 
	/* Fungsi Tambah Data polling Kategori */
	function pollingKategori_TambahData(
		$tbl_pollingkategori,
		$id, $idupline, $keterangan, $keteranganinggris,
		$posisi, $urutan,
		$homepagetampil, $menuatas1, $menuatas2,
		$menubawah1, $menubawah2, $statustampil,
		$imagefile, $imagelogo, $imageheader, $imagebackground,
		$hit, $linkjudul, $keyword

	){
		$sql = mysql_query("INSERT INTO $tbl_pollingkategori
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
 	function pollingKategori_UpdateData(
		$tbl_pollingkategori,
		$id, $idupline, $keterangan, $keteranganinggris,
		$posisi, $urutan,
		$homepagetampil, $menuatas1, $menuatas2,
		$menubawah1, $menubawah2, $statustampil,
		$imagefile, $imagelogo, $imageheader, $imagebackground,
		$hit, $linkjudul, $keyword
	){
	
	$sql = mysql_query("
	UPDATE $tbl_pollingkategori SET

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


	/* TAMPILKAN DETAIL KATEGORI polling BERDASARKAN ID */
	function Select_Detail_Kategori_polling( $tbl_pollingkategori, $id ){
		$sql = mysql_query("SELECT * FROM $tbl_pollingkategori WHERE id = '$id'");
		return mysql_fetch_object($sql);
	}




/* Start Update Image */

	function pollingKategori_update_image_logo( $tbl_pollingkategori, $id ){
		$sql = mysql_query("
			UPDATE $tbl_pollingkategori SET
				imagelogo = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function pollingKategori_update_image_header( $tbl_pollingkategori, $id ){
		$sql = mysql_query("
			UPDATE $tbl_pollingkategori SET
				imageheader = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function pollingKategori_update_image_background( $tbl_pollingkategori, $id ){
		$sql = mysql_query("
			UPDATE $tbl_pollingkategori SET
				imagebackground = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}
/* End Update Image */
	
	
	
/* Start Function Update Status Tampil */

	function pollingKategori_StatusTampil( $tbl_pollingkategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_pollingkategori SET
				statustampil = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


	function pollingKategori_HomepageTampil( $tbl_pollingkategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_pollingkategori SET
				homepagetampil = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


	function View_Kanalpolling_Publish_MenuAtas1( $tbl_pollingkategori ){ /* menu tampil di atas */
		$sql = mysql_query("SELECT * FROM $tbl_pollingkategori WHERE 
			homepagetampil = '1' AND
			statustampil='1' AND 
			menuatas1 = '1'
		ORDER BY urutan ASC
		");
	 
		return $sql;
	}


	function pollingKategori_menuatas1_tampil( $tbl_pollingkategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_pollingkategori SET
				menuatas1 = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


	function pollingKategori_menuatas2_tampil( $tbl_pollingkategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_pollingkategori SET
				menuatas2 = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function pollingKategori_menubawah1_tampil( $tbl_pollingkategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_pollingkategori SET
				menubawah1 = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function pollingKategori_menubawah2_tampil( $tbl_pollingkategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_pollingkategori SET
				menubawah2 = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


/* End Function Update Status Tampil */




	/* KANAL polling : hapus kanal polling berdasarkan id terpilih */
	function  pollingKategori_HapusData( $tbl_pollingkategori, $id){
		$sql = mysql_query("
			DELETE FROM $tbl_pollingkategori WHERE id='$id'
		");
		return $sql;
	}
	
	
	/* Buat Direktori Untuk File Kategori polling */
	function pollingKategori_CreateDirektori(  
	  	$tanggalhariini
	){
 		$direktoribuat =  "filemodul/polling/" . "kategoriimage/" . $tanggalhariini . "/";
	  	if (is_dir( $direktoribuat )) 
	  	{  }
	  	else
	  	{
			 mkdir( $direktoribuat,'0777',true); 
			 chmod( $direktoribuat, 0777);
	  	}
		return $direktoribuat;
	}

 
 	
	/* select kanal polling berdasarkan id terpilih */
	
	
	/* KANAL polling : select kanal polling berdasarkan status tampil = 1 pengurutan berdasarkan field urutan terbesar ( desc )*/	
	function Select_All_Publish_polling_Kategori( $tbl_pollingkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_pollingkategori WHERE statustampil='1' ORDER BY urutan");
		return $sql;

	}

 
	/* KANAL polling : */		
	function getJmlTotalpollingKategori(){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_pollingkategori";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}

 	
 	function hapusgambarpollingkategori($id){
		$sqlText = "UPDATE $this->tbl_pollingkategori SET imagefile = '', imagelogo='' where id = $id";
		return mysql_query($sqlText);
	}

	
 
 	function Select_All_Kategori_polling_By_Urutan( $tbl_pollingkategori ){
 		$sql = mysql_query(" SELECT * FROM $tbl_pollingkategori ORDER BY urutan ");
 		return $sql;
	}


	/* TAMPILKAN DATA KATEGORI BERDASARKAN ID KATEGORI */
	function Select_Kategori_polling_By_Id( $tbl_pollingkategori, $idkategori ){
		$sql = mysql_query("
			SELECT * FROM $tbl_pollingkategori WHERE id ='$idkategori'
		");
		return $sql;
	}





	/* TAMPILKAN KATEGORI DI MENU ATAS 1 */
	function List_MenuAtas1_Kanalpolling( $tbl_pollingkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_pollingkategori WHERE menuatas1 ='1' ORDER BY urutan ");
		return $sql;
	}

	/* TAMPILKAN KATEGORI DI MENU ATAS 2 */
	function List_MenuAtas2_Kanalpolling( $tbl_pollingkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_pollingkategori WHERE menuatas2 ='1' ORDER BY urutan ");
		return $sql;
	}

	/* TAMPILKAN KATEGORI DI MENU BAWAH 1 */
	function List_MenuBawah1_Kanalpolling( $tbl_pollingkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_pollingkategori WHERE menubawah1 ='1' ORDER BY urutan ");
		return $sql;
	}

	/* TAMPILKAN KATEGORI DI MENU BAWAH 2 */
	function List_MenuBawah2_Kanalpolling( $tbl_pollingkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_pollingkategori WHERE menubawah2 ='1' ORDER BY urutan ");
		return $sql;
	}




	/* TAMPILKAN KATEGORI / KANAL YANG TAMPIL DI HOMEPAGE */
	function Select_Kanalpolling_TampilDiHomepage( $tbl_pollingkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_pollingkategori WHERE statustampil ='1' ORDER BY urutan ");
		return $sql;
	}

	/* TAMPILKAN KATEGORI */
	function Detail_Kanalpolling_Publish( $tbl_pollingkategori , $idkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_pollingkategori WHERE statustampil='1' AND id='$idkategori'");
		$result = mysql_fetch_object($sql);
		return $result;
	}



 
	function pollingKanalDiLihat( $tbl_pollingkategori, $id ){ /* Hit Counter Kanal polling */
	
			$sql = mysql_query("SELECT * FROM $tbl_pollingkategori WHERE id='$id'");
			$datapolling = mysql_fetch_array($sql);
			$hit = $datapolling ['hit'];
			$hit = $hit+1;
	
			$sqlupdate = mysql_query("UPDATE $tbl_pollingkategori SET hit='$hit' WHERE id='$id'");
			
			return $sqlupdate;
	}


	function cekJmlHits_Kanalpolling( $tbl_pollingkategori ){ /* Cek Jumlah Hits polling Kanal */
		$sqlText = "SELECT sum(hit) as jml FROM $tbl_pollingkategori";
		$result = mysql_query($sqlText);
		$row = mysql_fetch_object($result);
		$jml = $row->jml;
		return $jml;
	}



?>