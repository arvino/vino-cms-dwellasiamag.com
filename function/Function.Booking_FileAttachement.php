<?php
/* LIST FUNCTION UNTUK TABEL BOOKING DETAIL */
/* 

Booking File Attachement

$id
$idbooking
$judul
$pesan
$namafile
$tipefile
$tanggalpost
$jampost
$direktorifile
$clientid
$adminid

*/  

function bookingfileattachement_createid( $tbl_bookingfileattachement ){ /* Fungsi buat id */
		$sql = mysql_query("SELECT * FROM $tbl_bookingfileattachement ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$UID = $data["id"];
		$UID = $UID+1;  
		return $UID;
}

function bookingfileattachement_tambahdata( $tbl_bookingfileattachement, 
		$id, $idbooking, $judul, $pesan, $namafile, $tipefile, $tanggalpost, 
		$jampost, $direktorifile, $clientid, $adminid
){ /* Fungsi tambah data / Insert Data */
	$sql = mysql_query("INSERT INTO $tbl_bookingfileattachement (
		id, idbooking, judul,
		pesan, namafile, tipefile,
		tanggalpost, jampost, direktorifile,
		clientid, adminid
	) VALUES (
		'$id', '$idbooking', '$judul',
		'$pesan', '$namafile', '$tipefile',
		'$tanggalpost', '$jampost', '$direktorifile',
		'$clientid', '$adminid'
	)
	");
	return $sql;
}


function bookingfileattachement_updatedata( $tbl_bookingfileattachement , $idbooking,
$judul, $pesan, $namafile, $tipefile, $tanggalpost, $jampost,
$direktorifile, $clientid, $adminid ){ /* Fungsi update data by id */
	$sql = mysql_query("UPDATE $tbl_bookingfileattachement SET
		idbooking='$idbooking', judul='$judul', pesan = '$pesan',
		namafile = '$namafile', tipefile = '$tipefile',
		tanggalpost = '$tanggalpost', jampost = '$jampost',
		direktorifile = '$direktorifile', clientid = '$clientid'
		adminid = '$adminid' 
	WHERE
		id='$id'
		");
	return $sql;
}



function bookingfileattachement_deletedata( $tbl_bookingfileattachement, $id ){ /* Fungsi delete data by id */
	$sql = mysql_query("DELETE * FROM $tbl_bookingfileattachement  WHERE id='$id'");
	return $sql;
}


function bookingfileattachement_viewdetail( $tbl_bookingfileattachement, $id ){ /* Fungsi view detail data pada tabel booking file attachement */
	$sql = mysql_query("SELECT * FROM $tbl_bookingfileattachement WHERE id ='$id'");
	$result = mysql_fetch_object($sql);
	return $result;
}


function bookingfileattachement_listdata( $tbl_bookingfileattachement ){ /* Fungsi list detail data pada tabel booking file attachement */
	$sql = mysql_query("SELECT * FROM $tbl_bookingfileattachement ORDER BY id DESC");
	return $sql;
}

function bookingfileattachement_searchdata( $tbl_bookingstatus ){ /* Fungsi search data pada tabel booking detail  */
$sql = mysql_query("
			SELECT * FROM $tbl_bookingstatus WHERE 
		
				kodestatus LIKE '%$cari%' OR,
				name LIKE '%$cari%' OR,
			description LIKE '%$cari%' OR,
			notifikasiemail LIKE '%$cari%'

				ORDER BY id ASC LIMIT $offset, $dataperPage
");
return $sql;
}




?>