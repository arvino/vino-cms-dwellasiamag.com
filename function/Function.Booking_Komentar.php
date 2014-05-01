<?php
/* LIST FUNCTION UNTUK TABEL booking komentar */
/* 

id
idbooking
idclient
idadmin
judul
pesan
tanggalpost
jampost
tgltampil
jamtampil
statustampil
ipaddress

*/  



function bookingkomentar_createid($tbl_bookingkomentar){ /* Fungsi buat id */
	$sql = mysql_query("SELECT * FROM $tbl_bookingkomentar ");
	return $sql;
}


function bookingkomentar_tambahdata( $tbl_bookingkomentar, 
		$id, $idbooking, $idclient,
		$idadmin, $judul, $pesan,
		$tanggalpost, $jampost, $tgltampil,
		$jamtampil, $statustampil, $ipaddress
 ){ /* Fungsi tambah data / Insert Data */
	$sql = mysql_query("INSERT INTO $tbl_bookingkomentar (
		id, idbooking, idclient,
		idadmin, judul, pesan,
		tanggalpost, jampost, tgltampil,
		jamtampil, statustampil, ipaddress
	) VALUES (
		'$id', '$idbooking', '$idclient',
		'$idadmin', '$judul', '$pesan',
		'$tanggalpost', '$jampost', '$tgltampil',
		'$jamtampil', '$statustampil', '$ipaddress'
	)
	");
	return $sql;
}

function bookingkomentar_updatedata($tbl_bookingkomentar, $id){ /* Fungsi update data by id */
	$sql = mysql_query("UPDATE $tbl_bookingkomentar SET
	 
idbooking = '$idbooking',
idclient = '$idclient',
idadmin = '$idadmin',
judul = '$judul',
pesan = '$pesan',
tanggalpost = '$tanggalpost',
jampost = '$jampost',
tgltampil = '$tgltampil',
jamtampil = '$jamtampil',
statustampil = '$statustampil',
ipaddress = '$ipaddress'

		WHERE id='$id'
	");
	return $sql;
}

function bookingkomentar_deletedata($tbl_bookingkomentar, $id){ /* Fungsi delete data by id */
	$sql = mysql_query("DELETE * FROM $tbl_bookingkomentar WHERE id = '$id'");
	return $sql;
}


function bookingkomentar_viewdetail($tbl_bookingkomentar){ /* Fungsi view detail data pada tabel booking komentar */
		$sql = mysql_query("SELECT * FROM $tbl_bookingkomentar WHERE id='$id'");
		return $sql;
}


function bookingkomentar_listdata($tbl_bookingkomentar){ /* Fungsi list detail data pada tabel booking komentar */
		$sql  = mysql_query("SELECT * FROM $tbl_bookingkomentar");
		return $sql;
}






function bookingkomentar_searchdata( $tbl_bookingkomentar, $cari ){ /* Fungsi search data pada tabel booking komentar  */
		$sql = mysql_query("SELECT * FROM $tbl_bookingkomentar WHERE 
			judul LIKE '$cari' OR
			pesan LIKE '$cari' 
				ORDER BY id ASC  
		");  
  		return $sql;
}

function bookingkomentar_searchdata_all_bypage( $tbl_bookingkomentar, $cari, $offset, $dataperPage ){ /* Fungsi search data pada tabel booking komentar  */
		$sql = mysql_query("SELECT * FROM $tbl_bookingkomentar WHERE 
			judul LIKE '$cari' OR
			pesan LIKE '$cari' 
				ORDER BY id ASC LIMIT $offset, $dataperPage
		");  
  		return $sql;
}



function bookingkomentar_searchdata_countdata( $tbl_bookingkomentar , $cari ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_bookingkomentar WHERE 
			judul LIKE '$cari' OR
			pesan LIKE '$cari' 
		");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}



?>