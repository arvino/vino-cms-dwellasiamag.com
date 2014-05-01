<?php
/* PUSTAKA FUNGSI QUERY DATABASE PADA TABEL ITEM LAMPIRAN produk */
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
  
  
 	/* Fungsi Buat ID Otomatis Untuk ID produk File . */
	function produkItemFile_CreateID( $tbl_produkfile ){
		$sql = mysql_query("SELECT * FROM $tbl_produkfile ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$CID = $data["id"];
		$CID = $CID+1;  
		return $CID;
	}	 

 
 
 	/* Fungsi Tambah Data produk Item File */
	function produkItemFile_TambahData(
		$tbl_produkfile,
		$id, $idkonten, $urutan,
		$judul, $preview, $isi,
		$namafile, $tipefile, $gambar,
		$gambarpreview, $statustampil,  
		$tanggalpost, $jampost, $direktorifile,
		$userposting, $hitcounter, $linkjudul,
		$keyword

	){
		$sql = mysql_query("INSERT INTO $tbl_produkfile
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

 
 	/* Fungsi Tambah Data produk Item File */
	function produkItemFile_UpdateData(
		$tbl_produkfile,
		$id, $idkonten, $urutan,
		$judul, $preview, $isi,
		$namafile, $tipefile, $gambar,
		$gambarpreview, $statustampil, 
		$tanggalpost, $jampost, $direktorifile,
		$userposting, $hitcounter, $linkjudul,
		$keyword

	){
		$sql = mysql_query("
		
		UPDATE $tbl_produkfile
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




 	/* Buat Direktori Untuk File Item File produk */
	function produkItemFile_CreateDirektori(  
	  	$tanggalhariini
	){
 		$direktoribuat =  "filemodul/produk/" . "fileattachement/" . $tanggalhariini . "/";
	  	if (is_dir( $direktoribuat )) 
	  	{  }
	  	else
	  	{
			 mkdir( $direktoribuat,'0777',true); 
			 chmod( $direktoribuat, 0777);
	  	}
		return $direktoribuat;
	}
 

	function ViewDetail_produkFileLampiran( $tbl_produkfile, $id ){
		$sqlText = "SELECT * FROM $tbl_produkfile where id = '$id'";
		$rows = mysql_query($sqlText);
		return mysql_fetch_object($rows);
	}
	
		
	function Hapus_produkFileLampiran( $tbl_produkfile, $id){
		$sql = mysql_query("DELETE FROM $tbl_produkfile WHERE id = '$id'");
		return $sql;
	}

 
	function List_produkFileLampiran_Berdasarkan_IdItem($id)
	{
		$sqlText = "SELECT * FROM $tbl_produkfile WHERE idproduk = '$id'";
		$rows = mysql_query($sqlText);
		return mysql_fetch_object($rows);
	}

	
	function TotalAllDataprodukItemLampiran( $tbl_produkfile, $idkonten ){
		$sql = mysql_query("SELECT * FROM $tbl_produkfile WHERE idkonten = '$idkonten' ");
		$hitung = mysql_num_rows($sql);
		return $hitung;
	}


	function TotalAllTampilDataprodukItemLampiran( $tbl_produkfile, $idkonten ){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_produkfile WHERE statustampil = '1' AND idkonten = '$idkonten'";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}


	function HitungprodukItemLampiran( $tbl_produkfile, $idkonten ){ /* Alternatif 2  Function hitung data */
		$sql = mysql_query("SELECT * FROM $tbl_produkfile WHERE idkonten = '$idkonten' ");
		$hitung = mysql_num_rows($sql);
		return $hitung;
	}

	
	function ViewDetail_produkItemLampiran( $tbl_produkfile, $id ){ /* View Detail Komentar produk  */
		$sqlText = "SELECT * FROM $tbl_produkfile where id = '$id'";
		$row = mysql_query($sqlText);
		return mysql_fetch_object($row);
	}
	
	
	
	function SetStatusTampil_produkItemLampiran( $tbl_produkfile, $id, $status ){
	$sql = mysql_query("UPDATE $tbl_produkfile SET statustampil = '$status' WHERE id = '$id'");
	return $sql;
	}
	
	function LihatDataprodukItemLampiran( $tbl_produkfile ){
		$sql=mysql_query("SELECT * FROM $tbl_produkfile ORDER BY id DESC");
		return $sql;
	}	

	
	function ViewAll_produkItemLampiran_ByItem( $tbl_produkfile, $iditem ){ /* View All Komentar produk berdasarkan produk */
		$sql = mysql_query("SELECT * FROM $tbl_produkfile WHERE idkonten ='$iditem' ORDER BY urutan ASC");
		return $sql;
	} 

	
	function ViewAllTampil_produkItemLampiran_ByItem( $tbl_produkfile, $iditem ){ /* View All Komentar yang tampil berdasarkan id produk  */
		$sql = mysql_query("SELECT * FROM $tbl_produkfile WHERE statustampil = '1' AND idkonten ='$iditem' ORDER BY urutan ASC");
		return $sql;
	} 

	
	function UpdateStatusTampilprodukItemLampiran( $tbl_produkfile, $id, $status ){/* Update status tampil komentar */
		$sql = mysql_query("UPDATE $tbl_produkfile SET statustampil = '$status' WHERE id = '$id'");
		return $sql;
	}
	
	
	function Select_ItemLampiran_produk_By_Search_Page( $tbl_produkfile , $iditem, $cari , $offset, $dataPerPage ){
  		$sqlText = mysql_query("
			SELECT * FROM $tbl_produkfile 
					WHERE idkonten = '$iditem' AND 
				judul LIKE '%$cari%' OR
				isi  LIKE '%$cari%' 

			LIMIT $offset, $dataPerPage
		");
  		return $sqlText;
	}




 
	function produkfileDiLihat( $tbl_produkfile, $Det ){
	
			$sql = mysql_query("SELECT * FROM $tbl_produkfile WHERE id='$Det'");
			$dataproduk = mysql_fetch_object($sql);
			$hitcounter = $dataproduk->hitcounter;
			$hitcounter = $hitcounter+1;
	
			$sqlupdate = mysql_query("UPDATE $tbl_produkfile SET hitcounter ='$hitcounter' WHERE id='$Det'");
			
			return $sqlupdate;
	}


?>