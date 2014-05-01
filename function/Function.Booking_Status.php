<?php
/* LIST FUNCTION UNTUK TABEL BOOKING STATUS */
/* 

id
kodestatus
name
description
notifikasiemail


$id
$kodestatus
$name
$description
$notifikasiemail


$id,
$kodestatus,
$name,
$description,
$notifikasiemail,
*/  

/* Fungsi Tabel Booking Status */

function bookingstatus_createid( $tbl_bookingstatus ){ /* Fungsi buat id booking status */
		$sql = mysql_query("SELECT * FROM $tbl_bookingstatus ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$UID = $data["id"];
		$UID = $UID+1;  
		return $UID;
}

function bookingstatus_tambahdata( $tbl_bookingstatus, 
$id, $kodestatus, $name, $description, $notifikasiemail  ){ /* fungsi tambah data / insert data */
		$sql = mysql_query("INSERT INTO $tbl_bookingstatus
		(
			id, kodestatus, name, 
			description, notifikasiemail
			
		)VALUES(
			'$id', '$kodestatus', '$name',
			'$description', '$notifikasiemail'
		)");
		return $sql;
}

function bookingstatus_updatedata( $tbl_bookingstatus, 
$id, $kodestatus, $name, $description, $notifikasiemail  ){ /* Fungsi update data by id */

	$sql = mysql_query("
	UPDATE $tbl_bookingstatus SET
	 
		kodestatus ='$kodestatus',
		name = '$name',
		description = '$description',
		notifikasiemail = '$notifikasiemail'

	WHERE
		id = '$id'
	");
	return $sql;
}

function bookingstatus_deletedata( $tbl_bookingstatus, $id ){ /* Fungsi delete data by id */
		$sql = mysql_query("
			DELETE FROM $tbl_bookingstatus WHERE id='$id'
		");
		return $sql;
}


function bookingstatus_viewdetail( $tbl_bookingstatus, $id ){ /* Fungsi view detail data pada tabel booking detail */
		$sql = mysql_query("SELECT * FROM $tbl_bookingstatus WHERE id='$id'");
		return $sql;
}


function bookingstatus_listdata( $tbl_bookingstatus ){ /* Fungsi list detail data pada tabel booking detail */
		$sql  = mysql_query("SELECT * FROM $tbl_bookingstatus");
		return $sql;
}




function bookingstatus_searchdata( $tbl_bookingstatus, $cari ){ /* Fungsi search data pada tabel booking status  */
		$sql = mysql_query("SELECT * FROM $tbl_bookingstatus WHERE 
		
			kodestatus LIKE '%$cari%' OR,
			name LIKE '%$cari%' OR,
			description LIKE '%$cari%' OR,
			notifikasiemail LIKE '%$cari%'

				ORDER BY id ASC
		");  
  		return $sql;
}


function bookingstatus_searchdata_all_bypage( $tbl_bookingstatus, $cari, $offset, $dataperPage ){
		$sql = mysql_query("SELECT * FROM $tbl_bookingstatus WHERE 
		
			kodestatus LIKE '%$cari%' OR,
			name LIKE '%$cari%' OR,
			description LIKE '%$cari%' OR,
			notifikasiemail LIKE '%$cari%'

				ORDER BY id ASC LIMIT $offset, $dataperPage
		");  
  		return $sql;
}


function bookingstatus_searchdata_countdata( $tbl_bookingstatus , $cari ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_bookingstatus WHERE 
			kodestatus LIKE '%$cari%' OR,
			name LIKE '%$cari%' OR,
			description LIKE '%$cari%' OR,
			notifikasiemail LIKE '%$cari%'
		");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}



?>