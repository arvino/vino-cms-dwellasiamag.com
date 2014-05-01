<?php
/* Fungsi Buat ID Otomatis Untuk ID polling jawaban . */
	function pollingItemjawaban_CreateID( $tbl_pollingvoting ){
		$sql = mysql_query("SELECT * FROM $tbl_pollingvoting ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$CID = $data["id"];
		$CID = $CID+1;  
		return $CID;
	}	 



 	/* Fungsi Tambah Data polling Item jawaban */
	function pollingItemjawaban_TambahData(
		$tbl_pollingvoting,
		$id,$iditem,$pilihan,$jawaban,
		$statustampil,$urutan,$warna,$gambar,
		$tanggal,$direktorigambar
	){
		$sql = mysql_query("INSERT INTO $tbl_pollingvoting
		(
			id,iditem,pilihan,jawaban,
			statustampil,urutan,warna,gambar,
			tanggal,direktorigambar
		)VALUES(
			'$id','$iditem','$pilihan','$jawaban','$statustampil',
			'$urutan','$warna','$gambar','$tanggal','$direktorigambar'
		)");
		return $sql;
	}

 
 	/* Fungsi Tambah Data polling Item jawaban */
	function pollingItemjawaban_UpdateData(
		$tbl_pollingvoting,
		$id,$iditem,$pilihan,$jawaban,
		$statustampil,$urutan,$warna,$gambar,
		$tanggal,$direktorigambar
	){
		$sql = mysql_query("
		
		UPDATE $tbl_pollingvoting
		SET 
			iditem = '$iditem', pilihan = '$pilihan', jawaban = '$jawaban', statustampil = '$statustampil',
			urutan = '$urutan', warna = '$warna', gambar = '$gambar', tanggal = '$tanggal', direktorigambar = '$direktorigambar'
		WHERE
			id='$id'
		");
		return $sql;
	}

 
 	/* Buat Direktori Untuk jawaban Item jawaban polling */
	function pollingItemjawaban_CreateDirektori(  
	  	$tanggalhariini
	){
 		$direktoribuat =  "jawabanmodul/polling/" . "jawabanattachement/" . $tanggalhariini . "/";
	  	if (is_dir( $direktoribuat )) 
	  	{  }
	  	else
	  	{
			 mkdir( $direktoribuat,'0777',true); 
			 chmod( $direktoribuat, 0777);
	  	}
		return $direktoribuat;
	}
 

	function ViewDetail_polling_jawaban( $tbl_pollingvoting, $id ){
		$sqlText = "SELECT * FROM $tbl_pollingvoting where id = '$id'";
		$rows = mysql_query($sqlText);
		return mysql_fetch_object($rows);
	}

	function selectdetail_publish_pollingjawaban( $tbl_pollingvoting, $id ){
		$sql = mysql_query("SELECT * FROM $tbl_pollingvoting WHERE id = '$id'");
		return $sql;
	}
	
	
		
	function Hapus_polling_jawaban( $tbl_pollingvoting, $id){
		$sql = mysql_query("DELETE FROM $tbl_pollingvoting WHERE id = '$id'");
		return $sql;
	}

 
	function List_polling_jawaban_Berdasarkan_IdItem($id)
	{
		$sqlText = "SELECT * FROM $tbl_pollingvoting WHERE idpolling = '$id'";
		$rows = mysql_query($sqlText);
		return mysql_fetch_object($rows);
	}

	
	function pollingjawaban_read_count_by_idkonten( $tbl_pollingvoting, $iditem ){
  		$sql = mysql_query("SELECT * FROM $tbl_pollingvoting WHERE  iditem = '$iditem'");
  		$result = mysql_num_rows($sql);
  		return $result;
	}


	function TotalAllTampilDatapollingItemjawaban( $tbl_pollingvoting, $iditem ){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_pollingvoting WHERE statustampil = '1' AND iditem = '$iditem'";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}


	function HitungpollingItemjawaban( $tbl_pollingvoting, $iditem ){ /* Alternatif 2  Function hitung data */
		$sql = mysql_query("SELECT * FROM $tbl_pollingvoting WHERE iditem = '$iditem' ");
		$hitung = mysql_num_rows($sql);
		return $hitung;
	}

	
	function ViewDetail_pollingItemjawaban( $tbl_pollingvoting, $id ){ /* View Detail Komentar polling  */
		$sqlText = "SELECT * FROM $tbl_pollingvoting where id = '$id'";
		$row = mysql_query($sqlText);
		return mysql_fetch_object($row);
	}
	
	
	
	function SetStatusTampil_pollingItemjawaban( $tbl_pollingvoting, $id, $status ){
	$sql = mysql_query("UPDATE $tbl_pollingvoting SET statustampil = '$status' WHERE id = '$id'");
	return $sql;
	}
	
	function LihatDatapollingItemjawaban( $tbl_pollingvoting ){
		$sql=mysql_query("SELECT * FROM $tbl_pollingvoting ORDER BY id DESC");
		return $sql;
	}	

	
	function ViewAll_pollingItemjawaban_ByItem( $tbl_pollingvoting, $iditem ){ /* View All Komentar polling berdasarkan polling */
		$sql = mysql_query("SELECT * FROM $tbl_pollingvoting WHERE iditem ='$iditem' ORDER BY id ASC");
		return $sql;
	} 

 
	
	function ViewAllTampil_pollingItemjawaban_ByItem( $tbl_pollingvoting, $iditem ){ /* View All Komentar yang tampil berdasarkan id polling  */
		$sql = mysql_query("SELECT * FROM $tbl_pollingvoting WHERE statustampil = '1' AND iditem ='$iditem' ORDER BY urutan ASC");
		return $sql;
	} 

	
	function UpdateStatusTampilpollingItemjawaban( $tbl_pollingvoting, $id, $status ){/* Update status tampil komentar */
		$sql = mysql_query("UPDATE $tbl_pollingvoting SET statustampil = '$status' WHERE id = '$id'");
		return $sql;
	}



	function updatejawaban_pollingItemjawaban( $tbl_pollingvoting, $id ){
			$sql = mysql_query("SELECT * FROM $tbl_pollingvoting WHERE id='$id'");
			$datapolling = mysql_fetch_array($sql);
			$jawaban = $datapolling ['jawaban'];
			$jawaban = $jawaban + 2;
			$sqlupdate = mysql_query("UPDATE $tbl_pollingvoting SET jawaban='$jawaban' WHERE id='$id'");
			return $sqlupdate;
	}


	
	function Select_Itemjawaban_polling_By_Search_Page( $tbl_pollingvoting , $iditem, $cari , $offset, $dataPerPage ){
  		$sqlText = mysql_query("
			SELECT * FROM $tbl_pollingvoting 
					WHERE iditem = '$iditem' AND 
				judul LIKE '%$cari%' OR
				isi  LIKE '%$cari%' 

			LIMIT $offset, $dataPerPage
		");
  		return $sqlText;
	}


?>