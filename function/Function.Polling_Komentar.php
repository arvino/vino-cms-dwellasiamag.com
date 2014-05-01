<?php
function pollingkomentar_createid($tbl_pollingkomentar){ /* Fungsi buat id */
		$sql = mysql_query("SELECT * FROM $tbl_pollingkomentar ORDER BY id DESC");
		$data = mysql_fetch_object($sql);
		$id = $data->id + 1;
		return $id;
	}


	function pollingkomentar_create( $tbl_pollingkomentar, 
		$id,$idkonten,$idusers,$fb_id,$fb_email,$fb_pic,$fb_profil, 
		$judul,$pesan, $tglpost,$jampost,$tgltampil,$jamtampil,$statustampil,
		$idadmin,$noaktifasi,$ipaddress
	 ){
		$sql = mysql_query("INSERT INTO $tbl_pollingkomentar (
			id,idkonten,idusers,fb_id,fb_email,fb_pic,fb_profil, 
			judul,pesan,tglpost,jampost,tgltampil,jamtampil,statustampil,
			idadmin,noaktifasi,ipaddress
		) VALUES (
			'$id','$idkonten','$idusers','$fb_id','$fb_email','$fb_pic','$fb_profil', 
			'$judul','$pesan','$tglpost','$jampost','$tgltampil','$jamtampil','$statustampil',
			'$idadmin','$noaktifasi','$ipaddress'
		)
		");
		return $sql;
	}

	function pollingkomentar_updatedata( $tbl_pollingkomentar, 
		$id,$idkonten,$idusers,$fb_id,$fb_email,$fb_pic,$fb_profil, 
		$judul,$pesan, $tglpost,$jampost,$tgltampil,$jamtampil,$statustampil,
		$idadmin,$noaktifasi,$ipaddress
	){ 
		$sql = mysql_query("UPDATE $tbl_pollingkomentar SET

				idkonten = '$idkonten',
				idusers = '$idusers',
				fb_id = '$fb_id',
				fb_email = '$fb_email',
				fb_pic = '$fb_pic',
				fb_profil = '$fb_profil',
				judul = '$judul',
				pesan = '$pesan',
				tglpost = '$tglpost',
				jampost = '$jampost',
				tgltampil = '$tgltampil',
				jamtampil = '$jamtampil',
				statustampil = '$statustampil',
				idadmin = '$idadmin',
				noaktifasi = '$noaktifasi',
				ipaddress = '$ipaddress'

			WHERE 
				
				id='$id'
		");
		return $sql;
	}
	
	function pollingkomentar_update_statustampil( $tbl_pollingkomentar, $id, $statustampil ){
		$sql = mysql_query("UPDATE $tbl_pollingkomentar SET statustampil='$statustampil' WHERE id='$id'");
		return $sql;
	}

	function pollingkomentar_deletedata($tbl_pollingkomentar, $id){ /* Fungsi delete data by id */
		$sql = mysql_query("DELETE FROM $tbl_pollingkomentar WHERE id = '$id'");
		return $sql;
	}
	
	function pollingkomentar_viewdetail($tbl_pollingkomentar){ /* Fungsi view detail data pada tabel polling komentar */
			$sql = mysql_query("SELECT * FROM $tbl_pollingkomentar WHERE id='$id'");
			return $sql;
	}

	function pollingkomentar_listdata($tbl_pollingkomentar){ /* Fungsi list detail data pada tabel polling komentar */
			$sql  = mysql_query("SELECT * FROM $tbl_pollingkomentar");
			return $sql;
	}

	function pollingkomentar_read_list_by_idkonten($tbl_pollingkomentar, $iditem){ 
			$sql  = mysql_query("SELECT * FROM $tbl_pollingkomentar WHERE idkonten = '$iditem'");
			return $sql;
	}


	function pollingkomentar_read_list_by_statustampil($tbl_pollingkomentar, $iditem){ 
			$sql  = mysql_query("SELECT * FROM $tbl_pollingkomentar WHERE statustampil='1' AND idkonten = '$iditem'");
			return $sql;
	}


	function pollingkomentar_read_item_publish_by_page( $tbl_polling, $offset, $dataPerPage ){
		$sql = mysql_query("SELECT * FROM $tbl_polling WHERE statustampil='1' ORDER BY id DESC LIMIT $offset, $dataPerPage");
		return $sql;
	}


	function pollingkomentar_read_count_by_idkonten( $tbl_pollingkomentar , $iditem ){
			$sql = mysql_query("SELECT count(id) as jml FROM $tbl_pollingkomentar WHERE 
				idkonten LIKE '$iditem'
			");
			$row = mysql_fetch_object($sql);
			$jml = $row->jml;
			return $jml;	
	}

	function pollingkomentar_searchdata( $tbl_pollingkomentar, $cari ){ /* Fungsi search data pada tabel polling komentar  */
			$sql = mysql_query("SELECT * FROM $tbl_pollingkomentar WHERE 
				judul LIKE '$cari' OR
				pesan LIKE '$cari' 
					ORDER BY id ASC  
			");  
			return $sql;
	}
	

	function pollingkomentar_searchdata_all_bypage( $tbl_pollingkomentar, $cari, $offset, $dataperPage ){ /* Fungsi search data pada tabel polling komentar  */
			$sql = mysql_query("SELECT * FROM $tbl_pollingkomentar WHERE 
				judul LIKE '$cari' OR
				pesan LIKE '$cari' 
					ORDER BY id ASC LIMIT $offset, $dataperPage
			");  
			return $sql;
	}
	
	function pollingkomentar_searchdata_countdata( $tbl_pollingkomentar , $cari ){
			$sql = mysql_query("SELECT count(id) as jml FROM $tbl_pollingkomentar WHERE 
				judul LIKE '$cari' OR
				pesan LIKE '$cari' 
			");
			$row = mysql_fetch_object($sql);
			$jml = $row->jml;
			return $jml;	
	}



?>