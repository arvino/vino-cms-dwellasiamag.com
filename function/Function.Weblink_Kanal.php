<?php
/* PUSTAKA FUNGSI QUERY DATABASE PADA TABEL KANAL weblink */
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
	/* Fungsi Buat ID Otomatis Untuk weblink Kategori. */
	function weblinkKategori_CreateID( $tbl_weblinkkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_weblinkkategori ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$UID = $data["id"];
		$UID = $UID+1;  
		return $UID;
	}	 
	

	/*  Fungsi Periksa Judul weblink Kategori */
	function weblinkKategori_Periksaketerangan( $tbl_weblinkkategori, $keterangan, $keteranganinggris ){
		$sql = mysql_query("SELECT * FROM $tbl_weblinkkategori WHERE keterangan = '$keterangan' AND keteranganinggris = '$keteranganinggris'");
		return $sql;	
	}
 
	/* Fungsi Tambah Data weblink Kategori */
	function weblinkKategori_TambahData(
		$tbl_weblinkkategori,
		$id, $idupline, $keterangan, $keteranganinggris,
		$posisi, $urutan,
		$homepagetampil, $menuatas1, $menuatas2,
		$menubawah1, $menubawah2, $statustampil,
		$imagefile, $imagelogo, $imageheader, $imagebackground,
		$hit, $linkjudul, $keyword

	){
		$sql = mysql_query("INSERT INTO $tbl_weblinkkategori
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
 	function weblinkKategori_UpdateData(
		$tbl_weblinkkategori,
		$id, $idupline, $keterangan, $keteranganinggris,
		$posisi, $urutan,
		$homepagetampil, $menuatas1, $menuatas2,
		$menubawah1, $menubawah2, $statustampil,
		$imagefile, $imagelogo, $imageheader, $imagebackground,
		$hit, $linkjudul, $keyword
	){
	
	$sql = mysql_query("
	UPDATE $tbl_weblinkkategori SET

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


	/* TAMPILKAN DETAIL KATEGORI weblink BERDASARKAN ID */
	function Select_Detail_Kategori_weblink( $tbl_weblinkkategori, $id ){
		$sql = mysql_query("SELECT * FROM $tbl_weblinkkategori WHERE id = '$id'");
		return mysql_fetch_object($sql);
	}




/* Start Update Image */

	function weblinkKategori_update_image_logo( $tbl_weblinkkategori, $id ){
		$sql = mysql_query("
			UPDATE $tbl_weblinkkategori SET
				imagelogo = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function weblinkKategori_update_image_header( $tbl_weblinkkategori, $id ){
		$sql = mysql_query("
			UPDATE $tbl_weblinkkategori SET
				imageheader = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function weblinkKategori_update_image_background( $tbl_weblinkkategori, $id ){
		$sql = mysql_query("
			UPDATE $tbl_weblinkkategori SET
				imagebackground = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}
/* End Update Image */
	
	
	
/* Start Function Update Status Tampil */

	function weblinkKategori_StatusTampil( $tbl_weblinkkategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_weblinkkategori SET
				statustampil = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


	function weblinkKategori_HomepageTampil( $tbl_weblinkkategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_weblinkkategori SET
				homepagetampil = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


	function weblinkKategori_menuatas1_tampil( $tbl_weblinkkategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_weblinkkategori SET
				menuatas1 = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


	function weblinkKategori_menuatas2_tampil( $tbl_weblinkkategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_weblinkkategori SET
				menuatas2 = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function weblinkKategori_menubawah1_tampil( $tbl_weblinkkategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_weblinkkategori SET
				menubawah1 = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function weblinkKategori_menubawah2_tampil( $tbl_weblinkkategori, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_weblinkkategori SET
				menubawah2 = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


/* End Function Update Status Tampil */




	/* KANAL weblink : hapus kanal weblink berdasarkan id terpilih */
	function  weblinkKategori_HapusData( $tbl_weblinkkategori, $id){
		$sql = mysql_query("
			DELETE FROM $tbl_weblinkkategori WHERE id='$id'
		");
		return $sql;
	}
	
	
	/* Buat Direktori Untuk File Kategori weblink */
	function weblinkKategori_CreateDirektori(  
	  	$tanggalhariini
	){
 		$direktoribuat =  "filemodul/weblink/" . "kategoriimage/" . $tanggalhariini . "/";
	  	if (is_dir( $direktoribuat )) 
	  	{  }
	  	else
	  	{
			 mkdir( $direktoribuat,'0777',true); 
			 chmod( $direktoribuat, 0777);
	  	}
		return $direktoribuat;
	}

 
 	
	/* select kanal weblink berdasarkan id terpilih */
	
	
	/* KANAL weblink : select kanal weblink berdasarkan status tampil = 1 pengurutan berdasarkan field urutan terbesar ( desc )*/	
	function Select_All_Publish_weblink_Kategori( $tbl_weblinkkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_weblinkkategori WHERE statustampil='1' ORDER BY urutan");
		return $sql;

	}

 
	/* KANAL weblink : */		
	function getJmlTotalweblinkKategori(){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_weblinkkategori";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}

 	
 	function hapusgambarweblinkkategori($id){
		$sqlText = "UPDATE $this->tbl_weblinkkategori SET imagefile = '', imagelogo='' where id = $id";
		return mysql_query($sqlText);
	}

	
 
 	function Select_All_Kategori_weblink_By_Urutan( $tbl_weblinkkategori ){
 		$sql = mysql_query(" SELECT * FROM $tbl_weblinkkategori ORDER BY urutan ");
 		return $sql;
	}


	/* TAMPILKAN DATA KATEGORI BERDASARKAN ID KATEGORI */
	function Select_Kategori_weblink_By_Id( $tbl_weblinkkategori, $idkategori ){
		$sql = mysql_query("
			SELECT * FROM $tbl_weblinkkategori WHERE id ='$idkategori'
		");
		return $sql;
	}





	/* TAMPILKAN KATEGORI DI MENU ATAS 1 */
	function List_MenuAtas1_Kanalweblink( $tbl_weblinkkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_weblinkkategori WHERE menuatas1 ='1' ORDER BY urutan ");
		return $sql;
	}

	/* TAMPILKAN KATEGORI DI MENU ATAS 2 */
	function List_MenuAtas2_Kanalweblink( $tbl_weblinkkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_weblinkkategori WHERE menuatas2 ='1' ORDER BY urutan ");
		return $sql;
	}

	/* TAMPILKAN KATEGORI DI MENU BAWAH 1 */
	function List_MenuBawah1_Kanalweblink( $tbl_weblinkkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_weblinkkategori WHERE menubawah1 ='1' ORDER BY urutan ");
		return $sql;
	}

	/* TAMPILKAN KATEGORI DI MENU BAWAH 2 */
	function List_MenuBawah2_Kanalweblink( $tbl_weblinkkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_weblinkkategori WHERE menubawah2 ='1' ORDER BY urutan ");
		return $sql;
	}




	/* TAMPILKAN KATEGORI / KANAL YANG TAMPIL DI HOMEPAGE */
	function Select_Kanalweblink_TampilDiHomepage( $tbl_weblinkkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_weblinkkategori WHERE homepagetampil ='1' ORDER BY urutan ");
		return $sql;
	}

	/* TAMPILKAN KATEGORI */
	function Detail_Kanalweblink_Publish( $tbl_weblinkkategori , $idkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_weblinkkategori WHERE statustampil='1' AND id='$idkategori'");
		$result = mysql_fetch_object($sql);
		return $result;
	}



 
	function weblinkKanalDiLihat( $tbl_weblinkkategori, $id ){ /* Hit Counter Kanal weblink */
	
			$sql = mysql_query("SELECT * FROM $tbl_weblinkkategori WHERE id='$id'");
			$dataweblink = mysql_fetch_array($sql);
			$hit = $dataweblink ['hit'];
			$hit = $hit+1;
	
			$sqlupdate = mysql_query("UPDATE $tbl_weblinkkategori SET hit='$hit' WHERE id='$id'");
			
			return $sqlupdate;
	}


	function cekJmlHits_Kanalweblink( $tbl_weblinkkategori ){ /* Cek Jumlah Hits weblink Kanal */
		$sqlText = "SELECT sum(hit) as jml FROM $tbl_weblinkkategori";
		$result = mysql_query($sqlText);
		$row = mysql_fetch_object($result);
		$jml = $row->jml;
		return $jml;
	}




	/* TAMPILKAN OTHER PAGE UNTUK MENU FOOTER - MENU UTAMA  *//* 22 Maret 2011 */
	function View_Kanalweblink_Publish_MenuAtas1( $tbl_weblinkkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_weblinkkategori WHERE 
			homepagetampil = '1' AND
			statustampil='1' AND 
			menuatas1 = '1'
		ORDER BY urutan ASC
		");
	 
		return $sql;
	}

	/* TAMPILKAN OTHER PAGE UNTUK MENU FOOTER - MENU BAWAH 1 *//* 22 Maret 2011 */
	function View_Kanalweblink_Publish_MenuBawah1( $tbl_weblinkkategori ){
		$sql = mysql_query("SELECT * FROM $tbl_weblinkkategori WHERE 
			homepagetampil = '1' AND
			statustampil='1' AND 
			menubawah1 = '1'
		ORDER BY urutan ASC
		");
	 
		return $sql;
	}


?>