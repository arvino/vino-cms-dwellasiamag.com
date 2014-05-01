<?php
/* PUSTAKA FUNGSI QUERY DATABASE PADA TABEL KANAL peopledirectory */
	/* Fungsi Buat ID Otomatis Untuk peopledirectory Kategori. */
	function peopledirectoryKategori_CreateID( $tbl_peopledirectorykategori ){
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectorykategori ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$UID = $data["id"];
		$UID = $UID+1;  
		return $UID;
	}	 
	

	/*  Fungsi Periksa Judul peopledirectory Kategori */
	function peopledirectoryKategori_Periksaketerangan( $tbl_peopledirectorykategori, $keterangan, $keteranganinggris ){
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectorykategori WHERE keterangan = '$keterangan' AND keteranganinggris = '$keteranganinggris'");
		return $sql;	
	}
 
	/* Fungsi Tambah Data peopledirectory Kategori */
	function peopledirectoryKategori_TambahData(
		$tbl_peopledirectorykategori,
		$id, $idupline, $keterangan, $keteranganinggris,
		$posisi, $urutan,
		$homepagetampil, $menuatas1, $menuatas2,
		$menubawah1, $menubawah2, $statustampil,
		$imagefile, $imagelogo, $imageheader, $imagebackground,
		$hit, $linkjudul, $keyword

	){
		$sql = mysql_query("INSERT INTO $tbl_peopledirectorykategori
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
 	function peopledirectoryKategori_UpdateData(
		$tbl_peopledirectorykategori,
		$id, $idupline, $keterangan, $keteranganinggris,
		$posisi, $urutan,
		$homepagetampil, $menuatas1, $menuatas2,
		$menubawah1, $menubawah2, $statustampil,
		$imagefile, $imagelogo, $imageheader, $imagebackground,
		$hit, $linkjudul, $keyword
	){
	
	$sql = mysql_query("
	UPDATE $tbl_peopledirectorykategori SET

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


	/* TAMPILKAN DETAIL KATEGORI peopledirectory BERDASARKAN ID */
	function Select_Detail_Kategori_peopledirectory( $tbl_peopledirectorykategori, $id ){
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectorykategori WHERE id = '$id'");
		return mysql_fetch_object($sql);
	}




/* Start Update Image */

	function peopledirectoryKategori_update_image_logo( $tbl_peopledirectorykategori, $id ){
		$sql = mysql_query("
			UPDATE $tbl_peopledirectorykategori SET
				imagelogo = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function peopledirectoryKategori_update_image_header( $tbl_peopledirectorykategori, $id ){
		$sql = mysql_query("
			UPDATE $tbl_peopledirectorykategori SET
				imageheader = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function peopledirectoryKategori_update_image_background( $tbl_peopledirectorykategori, $id ){
		$sql = mysql_query("
			UPDATE $tbl_peopledirectorykategori SET
				imagebackground = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}
/* End Update Image */
	
	
	
/* Start Function Update Status Tampil */

	function peopledirectoryKategori_StatusTampil( $tbl_peopledirectorykategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_peopledirectorykategori SET
				statustampil = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


	function peopledirectoryKategori_HomepageTampil( $tbl_peopledirectorykategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_peopledirectorykategori SET
				homepagetampil = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


	function View_Kanalpeopledirectory_Publish_MenuAtas1( $tbl_peopledirectorykategori ){ /* menu tampil di atas */
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectorykategori WHERE 
			homepagetampil = '1' AND
			statustampil='1' AND 
			menuatas1 = '1'
		ORDER BY urutan ASC
		");
	 
		return $sql;
	}


	function peopledirectoryKategori_menuatas1_tampil( $tbl_peopledirectorykategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_peopledirectorykategori SET
				menuatas1 = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


	function peopledirectoryKategori_menuatas2_tampil( $tbl_peopledirectorykategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_peopledirectorykategori SET
				menuatas2 = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function peopledirectoryKategori_menubawah1_tampil( $tbl_peopledirectorykategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_peopledirectorykategori SET
				menubawah1 = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function peopledirectoryKategori_menubawah2_tampil( $tbl_peopledirectorykategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_peopledirectorykategori SET
				menubawah2 = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


/* End Function Update Status Tampil */




	/* KANAL peopledirectory : hapus kanal peopledirectory berdasarkan id terpilih */
	function  peopledirectoryKategori_HapusData( $tbl_peopledirectorykategori, $id){
		$sql = mysql_query("
			DELETE FROM $tbl_peopledirectorykategori WHERE id='$id'
		");
		return $sql;
	}
	
	
	/* Buat Direktori Untuk File Kategori peopledirectory */
	function peopledirectoryKategori_CreateDirektori(  
	  	$tanggalhariini
	){
 		$direktoribuat =  "filemodul/peopledirectory/" . "kategoriimage/" . $tanggalhariini . "/";
	  	if (is_dir( $direktoribuat )) 
	  	{  }
	  	else
	  	{
			 mkdir( $direktoribuat,'0777',true); 
			 chmod( $direktoribuat, 0777);
	  	}
		return $direktoribuat;
	}

 
 	
	/* select kanal peopledirectory berdasarkan id terpilih */
	
	
	/* KANAL peopledirectory : select kanal peopledirectory berdasarkan status tampil = 1 pengurutan berdasarkan field urutan terbesar ( desc )*/	
	function Select_All_Publish_peopledirectory_Kategori( $tbl_peopledirectorykategori ){
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectorykategori WHERE statustampil='1' ORDER BY urutan");
		return $sql;

	}

 
	/* KANAL peopledirectory : */		
	function getJmlTotalpeopledirectoryKategori(){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_peopledirectorykategori";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}

 	
 	function hapusgambarpeopledirectorykategori($id){
		$sqlText = "UPDATE $this->tbl_peopledirectorykategori SET imagefile = '', imagelogo='' where id = $id";
		return mysql_query($sqlText);
	}

	
 
 	function Select_All_Kategori_peopledirectory_By_Urutan( $tbl_peopledirectorykategori ){
 		$sql = mysql_query(" SELECT * FROM $tbl_peopledirectorykategori ORDER BY urutan ");
 		return $sql;
	}


	/* TAMPILKAN DATA KATEGORI BERDASARKAN ID KATEGORI */
	function Select_Kategori_peopledirectory_By_Id( $tbl_peopledirectorykategori, $idkategori ){
		$sql = mysql_query("
			SELECT * FROM $tbl_peopledirectorykategori WHERE id ='$idkategori'
		");
		return $sql;
	}





	/* TAMPILKAN KATEGORI DI MENU ATAS 1 */
	function List_MenuAtas1_Kanalpeopledirectory( $tbl_peopledirectorykategori ){
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectorykategori WHERE menuatas1 ='1' ORDER BY urutan ");
		return $sql;
	}

	/* TAMPILKAN KATEGORI DI MENU ATAS 2 */
	function List_MenuAtas2_Kanalpeopledirectory( $tbl_peopledirectorykategori ){
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectorykategori WHERE menuatas2 ='1' ORDER BY urutan ");
		return $sql;
	}

	/* TAMPILKAN KATEGORI DI MENU BAWAH 1 */
	function List_MenuBawah1_Kanalpeopledirectory( $tbl_peopledirectorykategori ){
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectorykategori WHERE menubawah1 ='1' ORDER BY urutan ");
		return $sql;
	}

	/* TAMPILKAN KATEGORI DI MENU BAWAH 2 */
	function List_MenuBawah2_Kanalpeopledirectory( $tbl_peopledirectorykategori ){
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectorykategori WHERE menubawah2 ='1' ORDER BY urutan ");
		return $sql;
	}




	/* TAMPILKAN KATEGORI / KANAL YANG TAMPIL DI HOMEPAGE */
	function Select_Kanalpeopledirectory_TampilDiHomepage( $tbl_peopledirectorykategori ){
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectorykategori WHERE statustampil='1' AND homepagetampil ='1' ORDER BY urutan ");
		return $sql;
	}

	/* TAMPILKAN KATEGORI */
	function Detail_Kanalpeopledirectory_Publish( $tbl_peopledirectorykategori , $idkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectorykategori WHERE statustampil='1' AND id='$idkategori'");
		$result = mysql_fetch_object($sql);
		return $result;
	}



 
	function peopledirectoryKanalDiLihat( $tbl_peopledirectorykategori, $id ){ /* Hit Counter Kanal peopledirectory */
	
			$sql = mysql_query("SELECT * FROM $tbl_peopledirectorykategori WHERE id='$id'");
			$datapeopledirectory = mysql_fetch_array($sql);
			$hit = $datapeopledirectory ['hit'];
			$hit = $hit+1;
	
			$sqlupdate = mysql_query("UPDATE $tbl_peopledirectorykategori SET hit='$hit' WHERE id='$id'");
			
			return $sqlupdate;
	}


	function cekJmlHits_Kanalpeopledirectory( $tbl_peopledirectorykategori ){ /* Cek Jumlah Hits peopledirectory Kanal */
		$sqlText = "SELECT sum(hit) as jml FROM $tbl_peopledirectorykategori";
		$result = mysql_query($sqlText);
		$row = mysql_fetch_object($result);
		$jml = $row->jml;
		return $jml;
	}



?>