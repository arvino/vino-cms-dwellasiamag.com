<?php
/* PUSTAKA FUNGSI QUERY DATABASE PADA TABEL KANAL tanyajawab */
/* 

id,
idupline,
keterangan,
keteranganinggris,
posisi,
urutan,
homepagetampil,
menuatas1,
menuatas2,
menubawah1,
menubawah2,
statustampil,
imagefile,
imagelogo,
imageheader,
imagebackground,
hit,
linkjudul,
keyword


 

$id,
$idupline,
$keterangan,
$keteranganinggris,
$posisi,
$urutan,
$homepagetampil,
$menuatas1,
$menuatas2,
$menubawah1,
$menubawah2,
$statustampil,
$imagefile,
$imagelogo,
$imageheader,
$imagebackground,
$hit,
$linkjudul,
$keyword




'$id', 
'$idupline',
'$keterangan',
'$keteranganinggris',
'$posisi',
'$urutan',
'$homepagetampil',
'$menuatas1',
'$menuatas2',
'$menubawah1',
'$menubawah2',
'$statustampil',

'$imagefile',
'$imagelogo',
'$imageheader',
'$imagebackground',

'$hit',
'$linkjudul',
'$keyword'





*/
	/* Fungsi Buat ID Otomatis Untuk tanyajawab Kategori. */
	function tanyajawabKategori_CreateID( $tbl_tanyajawabkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawabkategori ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$UID = $data["id"];
		$UID = $UID+1;  
		return $UID;
	}	 
	

	/*  Fungsi Periksa Judul tanyajawab Kategori */
	function tanyajawabKategori_Periksaketerangan( $tbl_tanyajawabkategori, $keterangan, $keteranganinggris ){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawabkategori WHERE keterangan = '$keterangan' AND keteranganinggris = '$keteranganinggris'");
		return $sql;	
	}
 
	/* Fungsi Tambah Data tanyajawab Kategori */
	function tanyajawabKategori_TambahData(
		$tbl_tanyajawabkategori,
		$id, $idupline, $keterangan, $keteranganinggris,
		$posisi, $urutan,
		$homepagetampil, $menuatas1, $menuatas2,
		$menubawah1, $menubawah2, $statustampil,
		$imagefile, $imagelogo, $imageheader, $imagebackground,
		$hit, $linkjudul, $keyword

	){
		$sql = mysql_query("INSERT INTO $tbl_tanyajawabkategori
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
 	function tanyajawabKategori_UpdateData(
		$tbl_tanyajawabkategori,
		$id, $idupline, $keterangan, $keteranganinggris,
		$posisi, $urutan,
		$homepagetampil, $menuatas1, $menuatas2,
		$menubawah1, $menubawah2, $statustampil,
		$imagefile, $imagelogo, $imageheader, $imagebackground,
		$hit, $linkjudul, $keyword
	){
	
	$sql = mysql_query("
	UPDATE $tbl_tanyajawabkategori SET

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


	/* TAMPILKAN DETAIL KATEGORI tanyajawab BERDASARKAN ID */
	function Select_Detail_Kategori_tanyajawab( $tbl_tanyajawabkategori, $id ){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawabkategori WHERE id = '$id'");
		return mysql_fetch_object($sql);
	}




/* Start Update Image */

	function tanyajawabKategori_update_image_logo( $tbl_tanyajawabkategori, $id ){
		$sql = mysql_query("
			UPDATE $tbl_tanyajawabkategori SET
				imagelogo = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function tanyajawabKategori_update_image_header( $tbl_tanyajawabkategori, $id ){
		$sql = mysql_query("
			UPDATE $tbl_tanyajawabkategori SET
				imageheader = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function tanyajawabKategori_update_image_background( $tbl_tanyajawabkategori, $id ){
		$sql = mysql_query("
			UPDATE $tbl_tanyajawabkategori SET
				imagebackground = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}
/* End Update Image */
	
	
	
/* Start Function Update Status Tampil */

	function tanyajawabKategori_StatusTampil( $tbl_tanyajawabkategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_tanyajawabkategori SET
				statustampil = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


	function tanyajawabKategori_HomepageTampil( $tbl_tanyajawabkategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_tanyajawabkategori SET
				homepagetampil = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


	function tanyajawabKategori_menuatas1_tampil( $tbl_tanyajawabkategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_tanyajawabkategori SET
				menuatas1 = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


	function tanyajawabKategori_menuatas2_tampil( $tbl_tanyajawabkategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_tanyajawabkategori SET
				menuatas2 = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function tanyajawabKategori_menubawah1_tampil( $tbl_tanyajawabkategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_tanyajawabkategori SET
				menubawah1 = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function tanyajawabKategori_menubawah2_tampil( $tbl_tanyajawabkategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_tanyajawabkategori SET
				menubawah2 = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


/* End Function Update Status Tampil */




	/* KANAL tanyajawab : hapus kanal tanyajawab berdasarkan id terpilih */
	function  tanyajawabKategori_HapusData( $tbl_tanyajawabkategori, $id){
		$sql = mysql_query("
			DELETE FROM $tbl_tanyajawabkategori WHERE id='$id'
		");
		return $sql;
	}
	
	
	/* Buat Direktori Untuk File Kategori tanyajawab */
	function tanyajawabKategori_CreateDirektori(  
	  	$tanggalhariini
	){
 		$direktoribuat =  "filemodul/tanyajawab/" . "kategoriimage/" . $tanggalhariini . "/";
	  	if (is_dir( $direktoribuat )) 
	  	{  }
	  	else
	  	{
			 mkdir( $direktoribuat,'0777',true); 
			 chmod( $direktoribuat, 0777);
	  	}
		return $direktoribuat;
	}

 
 	
	/* select kanal tanyajawab berdasarkan id terpilih */
	
	
	/* KANAL tanyajawab : select kanal tanyajawab berdasarkan status tampil = 1 pengurutan berdasarkan field urutan terbesar ( desc )*/	
	function Select_All_Publish_tanyajawab_Kategori( $tbl_tanyajawabkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawabkategori WHERE statustampil='1' ORDER BY urutan");
		return $sql;

	}

 
	/* KANAL tanyajawab : */		
	function getJmlTotaltanyajawabKategori(){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_tanyajawabkategori";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}

 	
 	function hapusgambartanyajawabkategori($id){
		$sqlText = "UPDATE $this->tbl_tanyajawabkategori SET imagefile = '', imagelogo='' where id = $id";
		return mysql_query($sqlText);
	}

	
 
 	function Select_All_Kategori_tanyajawab_By_Urutan( $tbl_tanyajawabkategori ){
 		$sql = mysql_query(" SELECT * FROM $tbl_tanyajawabkategori ORDER BY urutan ");
 		return $sql;
	}


	/* TAMPILKAN DATA KATEGORI BERDASARKAN ID KATEGORI */
	function Select_Kategori_tanyajawab_By_Id( $tbl_tanyajawabkategori, $idkategori ){
		$sql = mysql_query("
			SELECT * FROM $tbl_tanyajawabkategori WHERE id ='$idkategori'
		");
		return $sql;
	}





	/* TAMPILKAN KATEGORI DI MENU ATAS 1 */
	function List_MenuAtas1_Kanaltanyajawab( $tbl_tanyajawabkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawabkategori WHERE menuatas1 ='1' ORDER BY urutan ");
		return $sql;
	}

	/* TAMPILKAN KATEGORI DI MENU ATAS 2 */
	function List_MenuAtas2_Kanaltanyajawab( $tbl_tanyajawabkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawabkategori WHERE menuatas2 ='1' ORDER BY urutan ");
		return $sql;
	}

	/* TAMPILKAN KATEGORI DI MENU BAWAH 1 */
	function List_MenuBawah1_Kanaltanyajawab( $tbl_tanyajawabkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawabkategori WHERE menubawah1 ='1' ORDER BY urutan ");
		return $sql;
	}

	/* TAMPILKAN KATEGORI DI MENU BAWAH 2 */
	function List_MenuBawah2_Kanaltanyajawab( $tbl_tanyajawabkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawabkategori WHERE menubawah2 ='1' ORDER BY urutan ");
		return $sql;
	}




	/* TAMPILKAN KATEGORI / KANAL YANG TAMPIL DI HOMEPAGE */
	function Select_Kanaltanyajawab_TampilDiHomepage( $tbl_tanyajawabkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawabkategori WHERE homepagetampil ='1' ORDER BY urutan ");
		return $sql;
	}

	/* TAMPILKAN KATEGORI */
	function Detail_Kanaltanyajawab_Publish( $tbl_tanyajawabkategori , $idkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawabkategori WHERE statustampil='1' AND id='$idkategori'");
		$result = mysql_fetch_object($sql);
		return $result;
	}



 
	function tanyajawabKanalDiLihat( $tbl_tanyajawabkategori, $id ){ /* Hit Counter Kanal tanyajawab */
	
			$sql = mysql_query("SELECT * FROM $tbl_tanyajawabkategori WHERE id='$id'");
			$datatanyajawab = mysql_fetch_array($sql);
			$hit = $datatanyajawab ['hit'];
			$hit = $hit+1;
	
			$sqlupdate = mysql_query("UPDATE $tbl_tanyajawabkategori SET hit='$hit' WHERE id='$id'");
			
			return $sqlupdate;
	}


	function cekJmlHits_Kanaltanyajawab( $tbl_tanyajawabkategori ){ /* Cek Jumlah Hits tanyajawab Kanal */
		$sqlText = "SELECT sum(hit) as jml FROM $tbl_tanyajawabkategori";
		$result = mysql_query($sqlText);
		$row = mysql_fetch_object($result);
		$jml = $row->jml;
		return $jml;
	}




	/* TAMPILKAN OTHER PAGE UNTUK MENU FOOTER - MENU UTAMA  *//* 22 Maret 2011 */
	function View_Kanaltanyajawab_Publish_MenuAtas1( $tbl_tanyajawabkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawabkategori WHERE 
			homepagetampil = '1' AND
			statustampil='1' AND 
			menuatas1 = '1'
		ORDER BY urutan ASC
		");
	 
		return $sql;
	}

	/* TAMPILKAN OTHER PAGE UNTUK MENU FOOTER - MENU BAWAH 1 *//* 22 Maret 2011 */
	function View_Kanaltanyajawab_Publish_MenuBawah1( $tbl_tanyajawabkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_tanyajawabkategori WHERE 
			homepagetampil = '1' AND
			statustampil='1' AND 
			menubawah1 = '1'
		ORDER BY urutan ASC
		");
	 
		return $sql;
	}


?>