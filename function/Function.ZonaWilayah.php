<?php
/*
zonawilayah
--
  `id` int(11) NOT NULL,
  `kodezona` text NOT NULL,
  `name` text NOT NULL,
  `keterangan` text NOT NULL,
  `keyword` text NOT NULL,
  
  id
  kodezona
  name
  keterangan
  keyword
  status
  urutan
  direktorifile
  gambar

*/

	function zonawilayah_createid( $tbl_zonawilayah ){
		$sql = mysql_query("SELECT * FROM $tbl_zonawilayah ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$UID = $data["id"];
		$UID = $UID+1;  
		return $UID;
	}	 
	

	function zonawilayah_periksanama( $tbl_zonawilayah, $keterangan ){
		$sql = mysql_query("SELECT * FROM $tbl_zonawilayah WHERE keterangan = '$keterangan' ");
		return $sql;	
	}
 

	function zonawilayah_tambahdata( /* Tambah data zona wilayah */
		$tbl_zonawilayah,
		$id, $kodezona, $name,
		$keterangan, $keyword, $status, $urutan,
		$direktorifile, $gambar
	){
		$sql = mysql_query("INSERT INTO $tbl_zonawilayah
		(
			id, kodezona, name,
			keterangan, keyword, status, urutan,
			direktorifile, gambar
		)VALUES(
			'$id', '$kodezona', '$name',
			'$keterangan', '$keyword', '$status' , '$urutan',
			'$direktorifile', '$gambar'
		)");
		return $sql;
	}
	
 	function zonawilayah_updatedata(
		$tbl_zonawilayah,
		$id, $kodezona, $name,
		$keterangan, $keyword, $status, $urutan,
		$direktorifile, $gambar
	){
	
	$sql = mysql_query("
	UPDATE $tbl_zonawilayah SET
		kodezona = '$kodezona', 
		name = '$name',
		keterangan = '$keterangan', 
		keyword = '$keyword',
		status = '$status',
		urutan = '$urutan',
		direktorifile = '$direktorifile',
		gambar = '$gambar'
	WHERE
		id = '$id'
	");
	return $sql;
	}


	function zonawilayah_viewdetail( $tbl_zonawilayah, $id ){
		$sql = mysql_query("SELECT * FROM $tbl_zonawilayah WHERE id = '$id'");
		return mysql_fetch_object($sql);
	}



	function zonawilayah_updateimage( $tbl_zonawilayah, $id, $direktorifile, $gambar ){
		$sql = mysql_query("
			UPDATE $tbl_zonawilayah SET
				direktorifile = '$direktorifile', 
				gambar = '$gambar'
			WHERE
				id = '$id'
		");
	return $sql;
	}



	function zonawilayah_statusaktif( $tbl_zonawilayah, $statusaktif, $id ){
		$sql = mysql_query("
			UPDATE $tbl_zonawilayah SET
				status = '$status' 
			WHERE
				id = '$id'
		");
	return $sql;
	}


	function zonawilayah_updateurutan( $tbl_zonawilayah, $urutan, $id ){
		$sql = mysql_query("
			UPDATE $tbl_zonawilayah SET
				urutan = '$urutan' 
			WHERE
				id = '$id'
		");
		return $sql;
	}

	function  zonawilayah_hapusdata( $tbl_zonawilayah, $id){
		$sql = mysql_query("
			DELETE FROM $tbl_zonawilayah WHERE id='$id'
		");
		return $sql;
	}
	


	function zonawilayah_buatdirektori(){
 		$direktoribuat =  "filemodul/zonawilayah/";
	  	if (is_dir( $direktoribuat )) 
	  	{  }
	  	else
	  	{
			 mkdir( $direktoribuat,'0777',true); 
			 chmod( $direktoribuat, 0777);
	  	}
		return $direktoribuat;
	}

 
	function zonawilayah_list_statustampil( $tbl_zonawilayah ){
		$sql = mysql_query("SELECT * FROM $tbl_zonawilayah WHERE status='1' ORDER BY urutan");
		return $sql;

	}
	
	 function zonawilayah_list_all( $tbl_zonawilayah ){
 		$sql = mysql_query(" SELECT * FROM $tbl_zonawilayah ORDER BY id DESC ");
 		return $sql;
	}


	function zonawilayah_hitungtotaldata(){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_zonawilayah";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}



?>