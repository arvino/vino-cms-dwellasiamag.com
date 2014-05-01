<?php
/* LIST FUNCTION UNTUK TABEL produk komentar */
/* 

id
idproduk
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



function produkkomentar_createid($tbl_produkkomentar){ /* Fungsi buat id */
	$sql = mysql_query("SELECT * FROM $tbl_produkkomentar ");
	return $sql;
}


function produkkomentar_tambahdata( $tbl_produkkomentar, 
		$id, $idproduk, $idclient,
		$idadmin, $judul, $pesan,
		$tanggalpost, $jampost, $tgltampil,
		$jamtampil, $statustampil, $ipaddress
 ){ /* Fungsi tambah data / Insert Data */
	$sql = mysql_query("INSERT INTO $tbl_produkkomentar (
		id, idproduk, idclient,
		idadmin, judul, pesan,
		tanggalpost, jampost, tgltampil,
		jamtampil, statustampil, ipaddress
	) VALUES (
		'$id', '$idproduk', '$idclient',
		'$idadmin', '$judul', '$pesan',
		'$tanggalpost', '$jampost', '$tgltampil',
		'$jamtampil', '$statustampil', '$ipaddress'
	)
	");
	return $sql;
}

function produkkomentar_updatedata($tbl_produkkomentar, $id){ /* Fungsi update data by id */
	$sql = mysql_query("UPDATE $tbl_produkkomentar SET
	 
idproduk = '$idproduk',
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

function produkkomentar_deletedata($tbl_produkkomentar, $id){ /* Fungsi delete data by id */
	$sql = mysql_query("DELETE * FROM $tbl_produkkomentar WHERE id = '$id'");
	return $sql;
}


function produkkomentar_viewdetail($tbl_produkkomentar){ /* Fungsi view detail data pada tabel produk komentar */
		$sql = mysql_query("SELECT * FROM $tbl_produkkomentar WHERE id='$id'");
		return $sql;
}


function produkkomentar_listdata($tbl_produkkomentar){ /* Fungsi list detail data pada tabel produk komentar */
		$sql  = mysql_query("SELECT * FROM $tbl_produkkomentar");
		return $sql;
}






function produkkomentar_searchdata( $tbl_produkkomentar, $cari ){ /* Fungsi search data pada tabel produk komentar  */
		$sql = mysql_query("SELECT * FROM $tbl_produkkomentar WHERE 
			judul LIKE '$cari' OR
			pesan LIKE '$cari' 
				ORDER BY id ASC  
		");  
  		return $sql;
}

function produkkomentar_searchdata_all_bypage( $tbl_produkkomentar, $cari, $offset, $dataperPage ){ /* Fungsi search data pada tabel produk komentar  */
		$sql = mysql_query("SELECT * FROM $tbl_produkkomentar WHERE 
			judul LIKE '$cari' OR
			pesan LIKE '$cari' 
				ORDER BY id ASC LIMIT $offset, $dataperPage
		");  
  		return $sql;
}



function produkkomentar_searchdata_countdata( $tbl_produkkomentar , $cari ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_produkkomentar WHERE 
			judul LIKE '$cari' OR
			pesan LIKE '$cari' 
		");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}



?>