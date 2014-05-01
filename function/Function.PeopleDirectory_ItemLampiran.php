<?php
/* PUSTAKA FUNGSI QUERY DATABASE PADA TABEL ITEM LAMPIRAN peopledirectory */
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
  
  
 	/* Fungsi Buat ID Otomatis Untuk ID peopledirectory File . */
	function peopledirectoryItemFile_CreateID( $tbl_peopledirectoryfile ){
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectoryfile ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$CID = $data["id"];
		$CID = $CID+1;  
		return $CID;
	}	 

 
 
 	/* Fungsi Tambah Data peopledirectory Item File */
	function peopledirectoryItemFile_TambahData(
		$tbl_peopledirectoryfile,
		$id, $idkonten, $urutan,
		$judul, $preview, $isi,
		$namafile, $tipefile, $gambar,
		$gambarpreview, $statustampil,  
		$tanggalpost, $jampost, $direktorifile,
		$userposting, $hitcounter, $linkjudul,
		$keyword

	){
		$sql = mysql_query("INSERT INTO $tbl_peopledirectoryfile
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

 
 	/* Fungsi Tambah Data peopledirectory Item File */
	function peopledirectoryItemFile_UpdateData(
		$tbl_peopledirectoryfile,
		$id, $idkonten, $urutan,
		$judul, $preview, $isi,
		$namafile, $tipefile, $gambar,
		$gambarpreview, $statustampil, 
		$tanggalpost, $jampost, $direktorifile,
		$userposting, $hitcounter, $linkjudul,
		$keyword

	){
		$sql = mysql_query("
		
		UPDATE $tbl_peopledirectoryfile
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




 	/* Buat Direktori Untuk File Item File peopledirectory */
	function peopledirectoryItemFile_CreateDirektori(  
	  	$tanggalhariini
	){
 		$direktoribuat =  "filemodul/peopledirectory/" . "fileattachement/" . $tanggalhariini . "/";
	  	if (is_dir( $direktoribuat )) 
	  	{  }
	  	else
	  	{
			 mkdir( $direktoribuat,'0777',true); 
			 chmod( $direktoribuat, 0777);
	  	}
		return $direktoribuat;
	}
 

	function ViewDetail_peopledirectoryFileLampiran( $tbl_peopledirectoryfile, $id ){
		$sqlText = "SELECT * FROM $tbl_peopledirectoryfile where id = '$id'";
		$rows = mysql_query($sqlText);
		return mysql_fetch_object($rows);
	}
	
		
	function Hapus_peopledirectoryFileLampiran( $tbl_peopledirectoryfile, $id){
		$sql = mysql_query("DELETE FROM $tbl_peopledirectoryfile WHERE id = '$id'");
		return $sql;
	}

 
	function List_peopledirectoryFileLampiran_Berdasarkan_IdItem($id)
	{
		$sqlText = "SELECT * FROM $tbl_peopledirectoryfile WHERE idpeopledirectory = '$id'";
		$rows = mysql_query($sqlText);
		return mysql_fetch_object($rows);
	}

	
	function TotalAllDatapeopledirectoryItemLampiran( $tbl_peopledirectoryfile, $idkonten ){
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectoryfile WHERE idkonten = '$idkonten' ");
		$hitung = mysql_num_rows($sql);
		return $hitung;
	}


	function TotalAllTampilDatapeopledirectoryItemLampiran( $tbl_peopledirectoryfile, $idkonten ){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_peopledirectoryfile WHERE statustampil = '1' AND idkonten = '$idkonten'";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}


	function HitungpeopledirectoryItemLampiran( $tbl_peopledirectoryfile, $idkonten ){ /* Alternatif 2  Function hitung data */
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectoryfile WHERE idkonten = '$idkonten' ");
		$hitung = mysql_num_rows($sql);
		return $hitung;
	}

	
	function ViewDetail_peopledirectoryItemLampiran( $tbl_peopledirectoryfile, $id ){ /* View Detail Komentar peopledirectory  */
		$sqlText = "SELECT * FROM $tbl_peopledirectoryfile where id = '$id'";
		$row = mysql_query($sqlText);
		return mysql_fetch_object($row);
	}
	
	
	
	function SetStatusTampil_peopledirectoryItemLampiran( $tbl_peopledirectoryfile, $id, $status ){
	$sql = mysql_query("UPDATE $tbl_peopledirectoryfile SET statustampil = '$status' WHERE id = '$id'");
	return $sql;
	}
	
	function LihatDatapeopledirectoryItemLampiran( $tbl_peopledirectoryfile ){
		$sql=mysql_query("SELECT * FROM $tbl_peopledirectoryfile ORDER BY id DESC");
		return $sql;
	}	

	
	function ViewAll_peopledirectoryItemLampiran_ByItem( $tbl_peopledirectoryfile, $iditem ){ /* View All Komentar peopledirectory berdasarkan peopledirectory */
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectoryfile WHERE idkonten ='$iditem' ORDER BY urutan ASC");
		return $sql;
	} 

	
	function ViewAllTampil_peopledirectoryItemLampiran_ByItem( $tbl_peopledirectoryfile, $iditem ){ /* View All Komentar yang tampil berdasarkan id peopledirectory  */
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectoryfile WHERE statustampil = '1' AND idkonten ='$iditem' ORDER BY urutan ASC");
		return $sql;
	} 

	
	function UpdateStatusTampilpeopledirectoryItemLampiran( $tbl_peopledirectoryfile, $id, $status ){/* Update status tampil komentar */
		$sql = mysql_query("UPDATE $tbl_peopledirectoryfile SET statustampil = '$status' WHERE id = '$id'");
		return $sql;
	}
	
	
	function Select_ItemLampiran_peopledirectory_By_Search_Page( $tbl_peopledirectoryfile , $iditem, $cari , $offset, $dataPerPage ){
  		$sqlText = mysql_query("
			SELECT * FROM $tbl_peopledirectoryfile 
					WHERE idkonten = '$iditem' AND 
				judul LIKE '%$cari%' OR
				isi  LIKE '%$cari%' 

			LIMIT $offset, $dataPerPage
		");
  		return $sqlText;
	}




 
	function peopledirectoryfileDiLihat( $tbl_peopledirectoryfile, $Det ){
	
			$sql = mysql_query("SELECT * FROM $tbl_peopledirectoryfile WHERE id='$Det'");
			$datapeopledirectory = mysql_fetch_object($sql);
			$hitcounter = $datapeopledirectory->hitcounter;
			$hitcounter = $hitcounter+1;
	
			$sqlupdate = mysql_query("UPDATE $tbl_peopledirectoryfile SET hitcounter ='$hitcounter' WHERE id='$Det'");
			
			return $sqlupdate;
	}


?>