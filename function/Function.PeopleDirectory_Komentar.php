<?php
/* LIST FUNCTION UNTUK TABEL peopledirectory komentar */
/* 

id
idpeopledirectory
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



function peopledirectorykomentar_createid($tbl_peopledirectorykomentar){ /* Fungsi buat id */
	$sql = mysql_query("SELECT * FROM $tbl_peopledirectorykomentar ");
	return $sql;
}


function peopledirectorykomentar_tambahdata( $tbl_peopledirectorykomentar, 
		$id, $idpeopledirectory, $idclient,
		$idadmin, $judul, $pesan,
		$tanggalpost, $jampost, $tgltampil,
		$jamtampil, $statustampil, $ipaddress
 ){ /* Fungsi tambah data / Insert Data */
	$sql = mysql_query("INSERT INTO $tbl_peopledirectorykomentar (
		id, idpeopledirectory, idclient,
		idadmin, judul, pesan,
		tanggalpost, jampost, tgltampil,
		jamtampil, statustampil, ipaddress
	) VALUES (
		'$id', '$idpeopledirectory', '$idclient',
		'$idadmin', '$judul', '$pesan',
		'$tanggalpost', '$jampost', '$tgltampil',
		'$jamtampil', '$statustampil', '$ipaddress'
	)
	");
	return $sql;
}

function peopledirectorykomentar_updatedata($tbl_peopledirectorykomentar, $id){ /* Fungsi update data by id */
	$sql = mysql_query("UPDATE $tbl_peopledirectorykomentar SET
	 
idpeopledirectory = '$idpeopledirectory',
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

function peopledirectorykomentar_deletedata($tbl_peopledirectorykomentar, $id){ /* Fungsi delete data by id */
	$sql = mysql_query("DELETE * FROM $tbl_peopledirectorykomentar WHERE id = '$id'");
	return $sql;
}


function peopledirectorykomentar_viewdetail($tbl_peopledirectorykomentar){ /* Fungsi view detail data pada tabel peopledirectory komentar */
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectorykomentar WHERE id='$id'");
		return $sql;
}


function peopledirectorykomentar_listdata($tbl_peopledirectorykomentar){ /* Fungsi list detail data pada tabel peopledirectory komentar */
		$sql  = mysql_query("SELECT * FROM $tbl_peopledirectorykomentar");
		return $sql;
}






function peopledirectorykomentar_searchdata( $tbl_peopledirectorykomentar, $cari ){ /* Fungsi search data pada tabel peopledirectory komentar  */
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectorykomentar WHERE 
			judul LIKE '$cari' OR
			pesan LIKE '$cari' 
				ORDER BY id ASC  
		");  
  		return $sql;
}

function peopledirectorykomentar_searchdata_all_bypage( $tbl_peopledirectorykomentar, $cari, $offset, $dataperPage ){ /* Fungsi search data pada tabel peopledirectory komentar  */
		$sql = mysql_query("SELECT * FROM $tbl_peopledirectorykomentar WHERE 
			judul LIKE '$cari' OR
			pesan LIKE '$cari' 
				ORDER BY id ASC LIMIT $offset, $dataperPage
		");  
  		return $sql;
}



function peopledirectorykomentar_searchdata_countdata( $tbl_peopledirectorykomentar , $cari ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_peopledirectorykomentar WHERE 
			judul LIKE '$cari' OR
			pesan LIKE '$cari' 
		");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}



?>