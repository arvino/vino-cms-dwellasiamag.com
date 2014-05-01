<?php
/* Fungsi Buat ID Otomatis Untuk ID polling File . */
	function pollingItemFile_CreateID( $tbl_pollingfile ){
		$sql = mysql_query("SELECT * FROM $tbl_pollingfile ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$CID = $data["id"];
		$CID = $CID+1;  
		return $CID;
	}	 

 
 
 	/* Fungsi Tambah Data polling Item File */
	function pollingItemFile_TambahData(
		$tbl_pollingfile,
		$id, $idkonten, $urutan,
		$judul, $preview, $isi,
		$namafile, $tipefile, $gambar,
		$gambarpreview, $statustampil,  
		$tanggalpost, $jampost, $direktorifile,
		$userposting, $hitcounter, $linkjudul,
		$keyword

	){
		$sql = mysql_query("INSERT INTO $tbl_pollingfile
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

 
 	/* Fungsi Tambah Data polling Item File */
	function pollingItemFile_UpdateData(
		$tbl_pollingfile,
		$id, $idkonten, $urutan,
		$judul, $preview, $isi,
		$namafile, $tipefile, $gambar,
		$gambarpreview, $statustampil, 
		$tanggalpost, $jampost, $direktorifile,
		$userposting, $hitcounter, $linkjudul,
		$keyword

	){
		$sql = mysql_query("
		
		UPDATE $tbl_pollingfile
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




 	/* Buat Direktori Untuk File Item File polling */
	function pollingItemFile_CreateDirektori(  
	  	$tanggalhariini
	){
 		$direktoribuat =  "filemodul/polling/" . "fileattachement/" . $tanggalhariini . "/";
	  	if (is_dir( $direktoribuat )) 
	  	{  }
	  	else
	  	{
			 mkdir( $direktoribuat,'0777',true); 
			 chmod( $direktoribuat, 0777);
	  	}
		return $direktoribuat;
	}
 

	function ViewDetail_pollingFileLampiran( $tbl_pollingfile, $id ){
		$sqlText = "SELECT * FROM $tbl_pollingfile where id = '$id'";
		$rows = mysql_query($sqlText);
		return mysql_fetch_object($rows);
	}
	
		
	function Hapus_pollingFileLampiran( $tbl_pollingfile, $id){
		$sql = mysql_query("DELETE FROM $tbl_pollingfile WHERE id = '$id'");
		return $sql;
	}

 
	function List_pollingFileLampiran_Berdasarkan_IdItem($id)
	{
		$sqlText = "SELECT * FROM $tbl_pollingfile WHERE idpolling = '$id'";
		$rows = mysql_query($sqlText);
		return mysql_fetch_object($rows);
	}

	
	function pollingfile_read_count_by_idkonten( $tbl_pollingfile, $idkonten ){
		$sql = mysql_query("SELECT * FROM $tbl_pollingfile WHERE idkonten = '$idkonten' ");
		$hitung = mysql_num_rows($sql);
		return $hitung;
	}



	function TotalAllTampilDatapollingItemLampiran( $tbl_pollingfile, $idkonten ){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_pollingfile WHERE statustampil = '1' AND idkonten = '$idkonten'";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}


	function HitungpollingItemLampiran( $tbl_pollingfile, $idkonten ){ /* Alternatif 2  Function hitung data */
		$sql = mysql_query("SELECT * FROM $tbl_pollingfile WHERE idkonten = '$idkonten' ");
		$hitung = mysql_num_rows($sql);
		return $hitung;
	}

	
	function ViewDetail_pollingItemLampiran( $tbl_pollingfile, $id ){ /* View Detail Komentar polling  */
		$sqlText = "SELECT * FROM $tbl_pollingfile where id = '$id'";
		$row = mysql_query($sqlText);
		return mysql_fetch_object($row);
	}
	
	
	
	function SetStatusTampil_pollingItemLampiran( $tbl_pollingfile, $id, $status ){
	$sql = mysql_query("UPDATE $tbl_pollingfile SET statustampil = '$status' WHERE id = '$id'");
	return $sql;
	}
	
	function LihatDatapollingItemLampiran( $tbl_pollingfile ){
		$sql=mysql_query("SELECT * FROM $tbl_pollingfile ORDER BY id DESC");
		return $sql;
	}	

	
	function ViewAll_pollingItemLampiran_ByItem( $tbl_pollingfile, $iditem ){ /* View All Komentar polling berdasarkan polling */
		$sql = mysql_query("SELECT * FROM $tbl_pollingfile WHERE idkonten ='$iditem' ORDER BY urutan ASC");
		return $sql;
	} 

	
	function ViewAllTampil_pollingItemLampiran_ByItem( $tbl_pollingfile, $iditem ){ /* View All Komentar yang tampil berdasarkan id polling  */
		$sql = mysql_query("SELECT * FROM $tbl_pollingfile WHERE statustampil = '1' AND idkonten ='$iditem' ORDER BY urutan ASC");
		return $sql;
	} 

	
	function UpdateStatusTampilpollingItemLampiran( $tbl_pollingfile, $id, $status ){/* Update status tampil komentar */
		$sql = mysql_query("UPDATE $tbl_pollingfile SET statustampil = '$status' WHERE id = '$id'");
		return $sql;
	}
	
	
	function Select_ItemLampiran_polling_By_Search_Page( $tbl_pollingfile , $iditem, $cari , $offset, $dataPerPage ){
  		$sqlText = mysql_query("
			SELECT * FROM $tbl_pollingfile 
					WHERE idkonten = '$iditem' AND 
				judul LIKE '%$cari%' OR
				isi  LIKE '%$cari%' 

			LIMIT $offset, $dataPerPage
		");
  		return $sqlText;
	}


	function pollingfileDiLihat( $tbl_pollingfile, $Det ){
	
			$sql = mysql_query("SELECT * FROM $tbl_pollingfile WHERE id='$Det'");
			$datapolling = mysql_fetch_object($sql);
			$hitcounter = $datapolling->hitcounter;
			$hitcounter = $hitcounter+1;
	
			$sqlupdate = mysql_query("UPDATE $tbl_pollingfile SET hitcounter ='$hitcounter' WHERE id='$Det'");
			
			return $sqlupdate;
	}


?>