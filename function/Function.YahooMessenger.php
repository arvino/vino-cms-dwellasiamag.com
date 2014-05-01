<?php
/*
Yahoo Messenger


id
nama
url
keterangan
status
urutan
direktorifile
gambar
  
  

*/

	function yahoomessenger_createid( $tbl_yahoomessenger ){
		$sql = mysql_query("SELECT * FROM $tbl_yahoomessenger ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$UID = $data["id"];
		$UID = $UID+1;  
		return $UID;
	}	 
	

	function yahoomessenger_periksanama( $tbl_yahoomessenger, $nama ){
		$sql = mysql_query("SELECT * FROM $tbl_yahoomessenger WHERE nama = '$nama' ");
		return $sql;	
	}
 

	function yahoomessenger_tambahdata(
		$tbl_yahoomessenger,
		$id, $nama, $status,
		$kodeiso, $direktorifile, $gambar
	){
		$sql = mysql_query("INSERT INTO $tbl_yahoomessenger
		(
			id, nama, status,
			kodeiso, direktorifile, gambar
		)VALUES(
			'$id', '$nama', '$status',
			'$kodeiso', '$direktorifile', '$gambar'
		)");
		return $sql;
	}
	
	

 	function yahoomessenger_updatedata(
		$tbl_yahoomessenger,
		$id, $nama,
		$status, $kodeiso,
		$direktorifile, $gambar
	){
	
	$sql = mysql_query("
	UPDATE $tbl_yahoomessenger SET

		nama = '$nama',
		status = '$status', 
		kodeiso = '$kodeiso',
		direktorifile = '$direktorifile', 
		gambar = '$gambar'

	WHERE
		id = '$id'
	");
	return $sql;
	}


	function yahoomessenger_viewdetail( $tbl_yahoomessenger, $id ){
		$sql = mysql_query("SELECT * FROM $tbl_yahoomessenger WHERE id = '$id'");
		return mysql_fetch_object($sql);
	}



	function yahoomessenger_updateimage( $tbl_yahoomessenger, $id, $direktorifile, $gambar ){
		$sql = mysql_query("
			UPDATE $tbl_yahoomessenger SET
				direktorifile = '$direktorifile', 
				gambar = '$gambar'
			WHERE
				id = '$id'
		");
	return $sql;
	}



	function yahoomessenger_statusaktif( $tbl_yahoomessenger, $statusaktif, $id ){
		$sql = mysql_query("
			UPDATE $tbl_yahoomessenger SET
				statustampil = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}



	function  yahoomessenger_hapusdata( $tbl_yahoomessenger, $id){
		$sql = mysql_query("
			DELETE FROM $tbl_yahoomessenger WHERE id='$id'
		");
		return $sql;
	}
	


	function yahoomessenger_buatdirektori(){
 		$direktoribuat =  "filemodul/yahoomessenger/";
	  	if (is_dir( $direktoribuat )) 
	  	{  }
	  	else
	  	{
			 mkdir( $direktoribuat,'0777',true); 
			 chmod( $direktoribuat, 0777);
	  	}
		return $direktoribuat;
	}

 
	function yahoomessenger_list_statustampil( $tbl_yahoomessenger ){
		$sql = mysql_query("SELECT * FROM $tbl_yahoomessenger WHERE statustampil='1' ORDER BY urutan");
		return $sql;

	}
	
	 function yahoomessenger_list_all( $tbl_yahoomessenger ){
 		$sql = mysql_query(" SELECT * FROM $tbl_yahoomessenger ORDER BY id DESC ");
 		return $sql;
	}


	function yahoomessenger_hitungtotaldata(){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_yahoomessenger";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}



?>