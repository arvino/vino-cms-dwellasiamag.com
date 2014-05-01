<?php
/* LIST FUNCTION UNTUK TABEL downloadarea komentar */
/* 

id
iddownloadarea
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



function downloadareakomentar_createid($tbl_downloadareakomentar){ /* Fungsi buat id */
	$sql = mysql_query("SELECT * FROM $tbl_downloadareakomentar ");
	return $sql;
}


function downloadareakomentar_tambahdata( $tbl_downloadareakomentar, 
		$id, $iddownloadarea, $idclient,
		$idadmin, $judul, $pesan,
		$tanggalpost, $jampost, $tgltampil,
		$jamtampil, $statustampil, $ipaddress
 ){ /* Fungsi tambah data / Insert Data */
	$sql = mysql_query("INSERT INTO $tbl_downloadareakomentar (
		id, iddownloadarea, idclient,
		idadmin, judul, pesan,
		tanggalpost, jampost, tgltampil,
		jamtampil, statustampil, ipaddress
	) VALUES (
		'$id', '$iddownloadarea', '$idclient',
		'$idadmin', '$judul', '$pesan',
		'$tanggalpost', '$jampost', '$tgltampil',
		'$jamtampil', '$statustampil', '$ipaddress'
	)
	");
	return $sql;
}

function downloadareakomentar_updatedata($tbl_downloadareakomentar, $id){ /* Fungsi update data by id */
	$sql = mysql_query("UPDATE $tbl_downloadareakomentar SET
	 
iddownloadarea = '$iddownloadarea',
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

function downloadareakomentar_deletedata($tbl_downloadareakomentar, $id){ /* Fungsi delete data by id */
	$sql = mysql_query("DELETE * FROM $tbl_downloadareakomentar WHERE id = '$id'");
	return $sql;
}


function downloadareakomentar_viewdetail($tbl_downloadareakomentar){ /* Fungsi view detail data pada tabel downloadarea komentar */
		$sql = mysql_query("SELECT * FROM $tbl_downloadareakomentar WHERE id='$id'");
		return $sql;
}


function downloadareakomentar_listdata($tbl_downloadareakomentar){ /* Fungsi list detail data pada tabel downloadarea komentar */
		$sql  = mysql_query("SELECT * FROM $tbl_downloadareakomentar");
		return $sql;
}






function downloadareakomentar_searchdata( $tbl_downloadareakomentar, $cari ){ /* Fungsi search data pada tabel downloadarea komentar  */
		$sql = mysql_query("SELECT * FROM $tbl_downloadareakomentar WHERE 
			judul LIKE '$cari' OR
			pesan LIKE '$cari' 
				ORDER BY id ASC  
		");  
  		return $sql;
}

function downloadareakomentar_searchdata_all_bypage( $tbl_downloadareakomentar, $cari, $offset, $dataperPage ){ /* Fungsi search data pada tabel downloadarea komentar  */
		$sql = mysql_query("SELECT * FROM $tbl_downloadareakomentar WHERE 
			judul LIKE '$cari' OR
			pesan LIKE '$cari' 
				ORDER BY id ASC LIMIT $offset, $dataperPage
		");  
  		return $sql;
}



function downloadareakomentar_searchdata_countdata( $tbl_downloadareakomentar , $cari ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_downloadareakomentar WHERE 
			judul LIKE '$cari' OR
			pesan LIKE '$cari' 
		");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}



?>