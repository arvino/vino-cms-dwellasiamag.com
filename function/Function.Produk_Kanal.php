<?php
/* PUSTAKA FUNGSI QUERY DATABASE PADA TABEL KANAL produk */
	/* Fungsi Buat ID Otomatis Untuk produk Kategori. */
	function produkKategori_CreateID( $tbl_produkkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_produkkategori ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$UID = $data["id"];
		$UID = $UID+1;  
		return $UID;
	}	 
	

	/*  Fungsi Periksa Judul produk Kategori */
	function produkKategori_Periksaketerangan( $tbl_produkkategori, $keterangan, $keteranganinggris ){
		$sql = mysql_query("SELECT * FROM $tbl_produkkategori WHERE keterangan = '$keterangan' AND keteranganinggris = '$keteranganinggris'");
		return $sql;	
	}
 
	/* Fungsi Tambah Data produk Kategori */
	function produkKategori_TambahData(
		$tbl_produkkategori,
		$id, $idupline, $keterangan, $keteranganinggris,
		$posisi, $urutan,
		$homepagetampil, $menuatas1, $menuatas2,
		$menubawah1, $menubawah2, $statustampil,
		$imagefile, $imagelogo, $imageheader, $imagebackground,
		$hit, $linkjudul, $keyword

	){
		$sql = mysql_query("INSERT INTO $tbl_produkkategori
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
 	function produkKategori_UpdateData(
		$tbl_produkkategori,
		$id, $idupline, $keterangan, $keteranganinggris,
		$posisi, $urutan,
		$homepagetampil, $menuatas1, $menuatas2,
		$menubawah1, $menubawah2, $statustampil,
		$imagefile, $imagelogo, $imageheader, $imagebackground,
		$hit, $linkjudul, $keyword
	){
	
	$sql = mysql_query("
	UPDATE $tbl_produkkategori SET

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


	/* TAMPILKAN DETAIL KATEGORI produk BERDASARKAN ID */
	function Select_Detail_Kategori_produk( $tbl_produkkategori, $id ){
		$sql = mysql_query("SELECT * FROM $tbl_produkkategori WHERE id = '$id'");
		return mysql_fetch_object($sql);
	}




/* Start Update Image */

	function produkKategori_update_image_logo( $tbl_produkkategori, $id ){
		$sql = mysql_query("
			UPDATE $tbl_produkkategori SET
				imagelogo = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function produkKategori_update_image_header( $tbl_produkkategori, $id ){
		$sql = mysql_query("
			UPDATE $tbl_produkkategori SET
				imageheader = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function produkKategori_update_image_background( $tbl_produkkategori, $id ){
		$sql = mysql_query("
			UPDATE $tbl_produkkategori SET
				imagebackground = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}
/* End Update Image */
	
	
	
/* Start Function Update Status Tampil */

	function produkKategori_StatusTampil( $tbl_produkkategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_produkkategori SET
				statustampil = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


	function produkKategori_HomepageTampil( $tbl_produkkategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_produkkategori SET
				homepagetampil = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


	function View_KanalProduk_Publish_MenuAtas1( $tbl_produkkategori ){ /* menu tampil di atas */
		$sql = mysql_query("SELECT * FROM $tbl_produkkategori WHERE 
			homepagetampil = '1' AND
			statustampil='1' AND 
			menuatas1 = '1'
		ORDER BY urutan ASC
		");
	 
		return $sql;
	}


	function produkKategori_menuatas1_tampil( $tbl_produkkategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_produkkategori SET
				menuatas1 = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


	function produkKategori_menuatas2_tampil( $tbl_produkkategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_produkkategori SET
				menuatas2 = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function produkKategori_menubawah1_tampil( $tbl_produkkategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_produkkategori SET
				menubawah1 = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function produkKategori_menubawah2_tampil( $tbl_produkkategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_produkkategori SET
				menubawah2 = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


/* End Function Update Status Tampil */




	/* KANAL produk : hapus kanal produk berdasarkan id terpilih */
	function  produkKategori_HapusData( $tbl_produkkategori, $id){
		$sql = mysql_query("
			DELETE FROM $tbl_produkkategori WHERE id='$id'
		");
		return $sql;
	}
	
	
	/* Buat Direktori Untuk File Kategori produk */
	function produkKategori_CreateDirektori(  
	  	$tanggalhariini
	){
 		$direktoribuat =  "filemodul/produk/" . "kategoriimage/" . $tanggalhariini . "/";
	  	if (is_dir( $direktoribuat )) 
	  	{  }
	  	else
	  	{
			 mkdir( $direktoribuat,'0777',true); 
			 chmod( $direktoribuat, 0777);
	  	}
		return $direktoribuat;
	}

 
 	
	/* select kanal produk berdasarkan id terpilih */
	
	
	/* KANAL produk : select kanal produk berdasarkan status tampil = 1 pengurutan berdasarkan field urutan terbesar ( desc )*/	
	function Select_All_Publish_produk_Kategori( $tbl_produkkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_produkkategori WHERE statustampil='1' ORDER BY urutan");
		return $sql;

	}

 
	/* KANAL produk : */		
	function getJmlTotalprodukKategori(){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_produkkategori";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}

 	
 	function hapusgambarprodukkategori($id){
		$sqlText = "UPDATE $this->tbl_produkkategori SET imagefile = '', imagelogo='' where id = $id";
		return mysql_query($sqlText);
	}

	
 
 	function Select_All_Kategori_produk_By_Urutan( $tbl_produkkategori ){
 		$sql = mysql_query(" SELECT * FROM $tbl_produkkategori ORDER BY urutan ");
 		return $sql;
	}


	/* TAMPILKAN DATA KATEGORI BERDASARKAN ID KATEGORI */
	function Select_Kategori_produk_By_Id( $tbl_produkkategori, $idkategori ){
		$sql = mysql_query("
			SELECT * FROM $tbl_produkkategori WHERE id ='$idkategori'
		");
		return $sql;
	}





	/* TAMPILKAN KATEGORI DI MENU ATAS 1 */
	function List_MenuAtas1_Kanalproduk( $tbl_produkkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_produkkategori WHERE menuatas1 ='1' ORDER BY urutan ");
		return $sql;
	}

	/* TAMPILKAN KATEGORI DI MENU ATAS 2 */
	function List_MenuAtas2_Kanalproduk( $tbl_produkkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_produkkategori WHERE menuatas2 ='1' ORDER BY urutan ");
		return $sql;
	}

	/* TAMPILKAN KATEGORI DI MENU BAWAH 1 */
	function List_MenuBawah1_Kanalproduk( $tbl_produkkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_produkkategori WHERE menubawah1 ='1' ORDER BY urutan ");
		return $sql;
	}

	/* TAMPILKAN KATEGORI DI MENU BAWAH 2 */
	function List_MenuBawah2_Kanalproduk( $tbl_produkkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_produkkategori WHERE menubawah2 ='1' ORDER BY urutan ");
		return $sql;
	}




	/* TAMPILKAN KATEGORI / KANAL YANG TAMPIL DI HOMEPAGE */
	function Select_Kanalproduk_TampilDiHomepage( $tbl_produkkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_produkkategori WHERE statustampil='1' AND homepagetampil ='1' ORDER BY urutan ");
		return $sql;
	}

	/* TAMPILKAN KATEGORI */
	function Detail_Kanalproduk_Publish( $tbl_produkkategori , $idkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_produkkategori WHERE statustampil='1' AND id='$idkategori'");
		$result = mysql_fetch_object($sql);
		return $result;
	}



 
	function produkKanalDiLihat( $tbl_produkkategori, $id ){ /* Hit Counter Kanal produk */
	
			$sql = mysql_query("SELECT * FROM $tbl_produkkategori WHERE id='$id'");
			$dataproduk = mysql_fetch_array($sql);
			$hit = $dataproduk ['hit'];
			$hit = $hit+1;
	
			$sqlupdate = mysql_query("UPDATE $tbl_produkkategori SET hit='$hit' WHERE id='$id'");
			
			return $sqlupdate;
	}


	function cekJmlHits_Kanalproduk( $tbl_produkkategori ){ /* Cek Jumlah Hits produk Kanal */
		$sqlText = "SELECT sum(hit) as jml FROM $tbl_produkkategori";
		$result = mysql_query($sqlText);
		$row = mysql_fetch_object($result);
		$jml = $row->jml;
		return $jml;
	}



?>