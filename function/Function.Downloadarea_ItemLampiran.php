<?php
/* PUSTAKA FUNGSI QUERY DATABASE PADA TABEL ITEM LAMPIRAN downloadarea */
/*

id 
idkonten 
urutan 
judul 
preview 
isi 
namafile 
tipefile 
gambar 
gambarpreview 
statustampil 
hotspot 
tanggalpost 
jampost 
direktorifile 
userposting 
hitcounter 
linkjudul 
keyword 

 */
  
  
 	/* Fungsi Buat ID Otomatis Untuk ID downloadarea File . */
	function downloadareaItemFile_CreateID( $tbl_downloadareafile ){
		$sql = mysql_query("SELECT * FROM $tbl_downloadareafile ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$CID = $data["id"];
		$CID = $CID+1;  
		return $CID;
	}	 

 
 
 	/* Fungsi Tambah Data downloadarea Item File */
	function downloadareaItemFile_TambahData(
		$tbl_downloadareafile,
		$id, $idkonten, $urutan,
		$judul, $preview, $isi,
		$namafile, $tipefile, $gambar,
		$gambarpreview, $statustampil,  
		$tanggalpost, $jampost, $direktorifile,
		$userposting, $hitcounter, $linkjudul,
		$keyword

	){
		$sql = mysql_query("INSERT INTO $tbl_downloadareafile
		(

			id, idkonten, urutan,
			judul, preview, isi,
			namafile, tipefile, gambar,
			gambarpreview, statustampil, 
			tanggalpost, jampost, direktorifile,
			userposting, hitcounter, linkjudul,
			keyword 

		)VALUES(

			'$id', '$idkonten', '$urutan',
			'$judul', '$preview', '$isi',
			'$namafile', '$tipefile', '$gambar',
			'$gambarpreview', '$statustampil', 
			'$tanggalpost', '$jampost', '$direktorifile',
			'$userposting', '$hitcounter', '$linkjudul',
			'$keyword'
	
		)");
		return $sql;
	}

 
 	/* Fungsi Tambah Data downloadarea Item File */
	function downloadareaItemFile_UpdateData(
		$tbl_downloadareafile,
		$id, $idkonten, $urutan,
		$judul, $preview, $isi,
		$namafile, $tipefile, $gambar,
		$gambarpreview, $statustampil, 
		$tanggalpost, $jampost, $direktorifile,
		$userposting, $hitcounter, $linkjudul,
		$keyword

	){
		$sql = mysql_query("
		
		UPDATE $tbl_downloadareafile
		SET 

			idkonten = '$idkonten',
			urutan = '$urutan',
			judul = '$judul',
			preview = '$preview',
			isi = '$isi',
			namafile = '$namafile',
			tipefile = '$tipefile',
			gambar = '$gambar',
			gambarpreview = '$gambarpreview',
			statustampil = '$statustampil',
			 
			tanggalpost = '$tanggalpost',
			jampost = '$jampost',
			direktorifile = '$direktorifile',
			userposting = '$userposting',
			hitcounter = '$hitcounter',
			linkjudul = '$linkjudul',
			keyword  = '$keyword'
		WHERE
			id='$id'
		");
		return $sql;
	}




 	/* Buat Direktori Untuk File Item File downloadarea */
	function downloadareaItemFile_CreateDirektori(  
	  	$tanggalhariini
	){
 		$direktoribuat =  "filemodul/downloadarea/" . "fileattachement/" . $tanggalhariini . "/";
	  	if (is_dir( $direktoribuat )) 
	  	{  }
	  	else
	  	{
			 mkdir( $direktoribuat,'0777',true); 
			 chmod( $direktoribuat, 0777);
	  	}
		return $direktoribuat;
	}
 

	function ViewDetail_downloadareaFileLampiran( $tbl_downloadareafile, $id ){
		$sqlText = "SELECT * FROM $tbl_downloadareafile where id = '$id'";
		$rows = mysql_query($sqlText);
		return mysql_fetch_object($rows);
	}
	
		
	function Hapus_downloadareaFileLampiran( $tbl_downloadareafile, $id){
		$sql = mysql_query("DELETE FROM $tbl_downloadareafile WHERE id = '$id'");
		return $sql;
	}

 
	function List_downloadareaFileLampiran_Berdasarkan_IdItem($id)
	{
		$sqlText = "SELECT * FROM $tbl_downloadareafile WHERE iddownloadarea = '$id'";
		$rows = mysql_query($sqlText);
		return mysql_fetch_object($rows);
	}

	
	function TotalAllDatadownloadareaItemLampiran( $tbl_downloadareafile, $idkonten ){
		$sql = mysql_query("SELECT * FROM $tbl_downloadareafile WHERE idkonten = '$idkonten' ");
		$hitung = mysql_num_rows($sql);
		return $hitung;
	}


	function TotalAllTampilDatadownloadareaItemLampiran( $tbl_downloadareafile, $idkonten ){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_downloadareafile WHERE statustampil = '1' AND idkonten = '$idkonten'";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}


	function HitungdownloadareaItemLampiran( $tbl_downloadareafile, $idkonten ){ /* Alternatif 2  Function hitung data */
		$sql = mysql_query("SELECT * FROM $tbl_downloadareafile WHERE idkonten = '$idkonten' ");
		$hitung = mysql_num_rows($sql);
		return $hitung;
	}

	
	function ViewDetail_downloadareaItemLampiran( $tbl_downloadareafile, $id ){ /* View Detail Komentar downloadarea  */
		$sqlText = "SELECT * FROM $tbl_downloadareafile where id = '$id'";
		$row = mysql_query($sqlText);
		return mysql_fetch_object($row);
	}
	
	
	
	function SetStatusTampil_downloadareaItemLampiran( $tbl_downloadareafile, $id, $status ){
	$sql = mysql_query("UPDATE $tbl_downloadareafile SET statustampil = '$status' WHERE id = '$id'");
	return $sql;
	}
	
	function LihatDatadownloadareaItemLampiran( $tbl_downloadareafile ){
		$sql=mysql_query("SELECT * FROM $tbl_downloadareafile ORDER BY id DESC");
		return $sql;
	}	

	
	function ViewAll_downloadareaItemLampiran_ByItem( $tbl_downloadareafile, $iditem ){ /* View All Komentar downloadarea berdasarkan downloadarea */
		$sql = mysql_query("SELECT * FROM $tbl_downloadareafile WHERE idkonten ='$iditem' ORDER BY urutan ASC");
		return $sql;
	} 

	
	function ViewAllTampil_downloadareaItemLampiran_ByItem( $tbl_downloadareafile, $iditem ){ /* View All Komentar yang tampil berdasarkan id downloadarea  */
		$sql = mysql_query("SELECT * FROM $tbl_downloadareafile WHERE statustampil = '1' AND idkonten ='$iditem' ORDER BY urutan ASC");
		return $sql;
	} 

	
	function UpdateStatusTampildownloadareaItemLampiran( $tbl_downloadareafile, $id, $status ){/* Update status tampil komentar */
		$sql = mysql_query("UPDATE $tbl_downloadareafile SET statustampil = '$status' WHERE id = '$id'");
		return $sql;
	}
	
	
	function Select_ItemLampiran_downloadarea_By_Search_Page( $tbl_downloadareafile , $iditem, $cari , $offset, $dataPerPage ){
  		$sqlText = mysql_query("
			SELECT * FROM $tbl_downloadareafile 
					WHERE idkonten = '$iditem' AND 
				judul LIKE '%$cari%' OR
				isi  LIKE '%$cari%' 

			LIMIT $offset, $dataPerPage
		");
  		return $sqlText;
	}




 
	function downloadareafileDiLihat( $tbl_downloadareafile, $Det ){
	
			$sql = mysql_query("SELECT * FROM $tbl_downloadareafile WHERE id='$Det'");
			$datadownloadarea = mysql_fetch_object($sql);
			$hitcounter = $datadownloadarea->hitcounter;
			$hitcounter = $hitcounter+1;
	
			$sqlupdate = mysql_query("UPDATE $tbl_downloadareafile SET hitcounter ='$hitcounter' WHERE id='$Det'");
			
			return $sqlupdate;
	}


?>