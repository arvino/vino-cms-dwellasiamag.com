<?php
/* 
id, 
idupline,
idfb,
userid,
username,
email,
password,
namadepan,
namabelakang,
namapanggilan,
jeniskelamin,
noponsel,
gambarkecil,
gambarbesar,
negara,
kota,
alamat,
newsletter,
agreetos,
im,
aksesmodul,
aksesproses,
status,
statusbaru,
tanggaldaftar,
tanggalaktif,
loginterakhir,
updateterakhir,
updateusers,
kodeaktifasi,
teraktif,
terpopuler,
direktori,
hit

*/

	function modeling_publicusers_createid($tbl_publicusers){
		$sql = mysql_query("SELECT * FROM $tbl_publicusers ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$UID = $data["id"];
		$UID = $UID+1;  
		return $UID;
	}	 
	

	function modeling_publicusers_checkemail($tbl_publicusers, $email){
		$sql = mysql_query("SELECT * FROM $tbl_publicusers WHERE email='$email'");  
		$data =	mysql_fetch_object($sql);
		return $data;
	}
	

	function modeling_publicusers_checkjumlahemail($tbl_publicusers, $email){
		$sql = mysql_query("SELECT * FROM $tbl_publicusers WHERE email='$email'");  
		$data =	mysql_num_rows($sql);
		return $data;
	}


	function modeling_publicusers_checkusername($tbl_publicusers, $username){
		$sql = mysql_query("SELECT * FROM $tbl_publicusers WHERE username='$username'");  
		$data =	mysql_num_rows($sql);
		return $data;
	}


	function modeling_publicusers_insertdata(
		$tbl_publicusers,
		$id, $idupline, $idfb, $userid, $username,
		$email, $password, $namadepan, $namabelakang, $namapanggilan,
		$jeniskelamin, $noponsel, $gambarkecil, $gambarbesar, $negara,
		$kota, $alamat, $newsletter, $agreetos, $im,
		$aksesmodul, $aksesproses, $status, $statusbaru, $tanggaldaftar,
		$tanggalaktif, $loginterakhir, $updateterakhir, $updateusers, $kodeaktifasi,
		$teraktif, $terpopuler, $direktori, $hit
	){
	
	
	$sql = mysql_query("INSERT INTO $tbl_publicusers
	(
		id, idupline, idfb, userid, username,
		email, password, namadepan, namabelakang, namapanggilan,
		jeniskelamin, noponsel, gambarkecil, gambarbesar, negara,
		kota, alamat, newsletter, agreetos, im,
		aksesmodul, aksesproses, status, statusbaru, tanggaldaftar,
		tanggalaktif, loginterakhir, updateterakhir, updateusers, kodeaktifasi,
		teraktif, terpopuler, direktori, hit
	
	)VALUES(

		'$id', '$idupline', '$idfb', '$userid', '$username',
		'$email', '$password', '$namadepan', '$namabelakang', '$namapanggilan',
		'$jeniskelamin', '$noponsel', '$gambarkecil', '$gambarbesar', '$negara',
		'$kota', '$alamat', '$newsletter', '$agreetos', '$im',
		'$aksesmodul', '$aksesproses', '$status', '$statusbaru', '$tanggaldaftar',
		'$tanggalaktif', '$loginterakhir', '$updateterakhir', '$updateusers', '$kodeaktifasi',
		'$teraktif', '$terpopuler', '$direktori', '$hit'

	)");
	
	return $sql;
	
	}




	function modeling_PublicUsers_EditProfile(
		$tbl_publicusers , 
		$id, $idupline, $idfb, $userid, $username,
		$email, $password, $namadepan, $namabelakang, $namapanggilan,
		$jeniskelamin, $noponsel, $gambarkecil, $gambarbesar, $negara,
		$kota, $alamat, $newsletter, $agreetos, $im,
		$aksesmodul, $aksesproses, $status, $statusbaru, $tanggaldaftar,
		$tanggalaktif, $loginterakhir, $updateterakhir, $updateusers, $kodeaktifasi,
		$teraktif, $terpopuler, $direktori, $hit
	){


		$sql = mysql_query("
		UPDATE $tbl_publicusers SET 
		
		idupline = '$idupline', idfb = '$idfb', userid = '$userid', username = '$username',
		email = '$email', password = '$password', namadepan = '$namadepan', namabelakang = '$namabelakang', namapanggilan = '$namapanggilan',
		jeniskelamin = '$jeniskelamin', noponsel = '$noponsel', gambarkecil = '$gambarkecil', gambarbesar = '$gambarbesar', negara = '$negara',
		kota = '$kota', alamat = '$alamat', newsletter = '$newsletter', agreetos = '$agreetos', im = '$im',
		aksesmodul = '$aksesmodul', aksesproses = '$aksesproses', status = '$status', statusbaru = '$statusbaru', tanggaldaftar = '$tanggaldaftar',
		tanggalaktif = '$tanggalaktif', loginterakhir = '$loginterakhir', updateterakhir = '$updateterakhir', updateusers = '$updateusers', kodeaktifasi = '$kodeaktifasi',
		teraktif = '$teraktif', terpopuler = '$terpopuler', direktori = '$direktori', hit = '$hit'
			
		
		WHERE
		
			id = '$id'
		
		");
		
	return $sql;
	}




	function controling_PublicUsers_KirimEmail(
			$lokasiurl, $tipeemail, $tanggalhariini, $jamsaatini, $namasitus, 
			$headeremail, $footeremail, $linkaktifasi, $linkalternatifaktifasi,
			$JudulEmail, $namapenerima, $emailpenerima, $namapengirim, $emailpengirim, 
			$nomoraktifasi , $password, $namaperusahaan, $idrandom
	){

  			$pengirim	=	"$namapengirim <$emailpengirim>";
			$penerima	=	"$namapenerima <$emailpenerima>";
  			$subject	=	"$JudulEmail ";
  			$headers	=	"From: $namapengirim <$emailpengirim>\n";
  	
	
			if($tipeemail == 'PublicUsersKirimRegister'){	
  				$NamaFileEmail	=	"../email/kirim_email_PublicUsers_pendaftaran.txt";
			}

			if($tipeemail == 'PublicUsersKirimResetPassword'){	
  				$NamaFileEmail	=	"../email/kirim_email_PublicUsers_reset_password.txt";
			}

			if($tipeemail == 'PublicUsersKirimBlokirAccount'){	
  				$NamaFileEmail	=	"../email/kirim_email_PublicUsers_blokir_akun.txt";
			}

			if($tipeemail == 'PublicUsersKirimEditProfile'){	
  				$NamaFileEmail	=	"../email/kirim_email_PublicUsers_edit_profile.txt";
			}

			if($tipeemail == 'PublicUsersKirimPengumuman'){	
  				$NamaFileEmail	=	"../email/kirim_email_PublicUsers_pengumuman.txt";
			}
	
			if($tipeemail == 'PublicUsersKirimPrivateMessages'){	
  				$NamaFileEmail	=	"../email/kirim_email_PublicUsers_privatemessages.txt";
			}
	
	
  				$fpFILEEMAIL = fopen($NamaFileEmail, "r");
  				$dataemail = fread($fpFILEEMAIL, filesize($NamaFileEmail));
  				fclose($fpFILEEMAIL);
	
	
				/* VARIABEL PADA TEMPLATES EMAIL PENDAFTARAN */
  				$dataemail = ereg_replace("{HEADERMAIL}", $headeremail, $dataemail);  	  		
  				$dataemail = ereg_replace("{NAMAPERUSAHAAN}", $namaperusahaan, $dataemail);
  				$dataemail = ereg_replace("{NAMASITUS}", $namasitus, $dataemail);
				$dataemail = ereg_replace("{LOKASIURL}", $lokasiurl, $dataemail);  	
  				$dataemail = ereg_replace("{TANGGALHARIINI}", $tanggalhariini, $dataemail);  
				$dataemail = ereg_replace("{JAMSAATINI}", $jamsaatini, $dataemail);  		  		
  				$dataemail = ereg_replace("{PublicUsersNAMA}", $namapenerima, $dataemail);	


	

				/* VARIABEL PADA TEMPLATES EMAIL PENDAFTARAN */
  				$dataemail = ereg_replace("{LINKAKTIFASI}", $linkaktifasi, $dataemail); 	
  				$dataemail = ereg_replace("{LINKALTERNATIFAKTIFASI}", $linkalternatifaktifasi, $dataemail);
				$dataemail = ereg_replace("{PublicUsersEMAIL}", $emailpenerima, $dataemail);
				$dataemail = ereg_replace("{PublicUsersPASSWORD}", $password, $dataemail);
				$dataemail = ereg_replace("{NOMORAKTIFASI}", $idrandom, $dataemail);
				

				
				$dataemail = ereg_replace("{FOOTERMAIL}", $footeremail, $dataemail);  	
	
				$message	=	$dataemail; 
	
				$KirimEmailKePublicUsers		=	@mail($penerima, $subject, $message, $headers) ;
 				


		}


	function modeling_list_PublicUsers_login( $tbl_publicusers, $txt_users, $password ){ /* Select Data For Login */
		$sql = mysql_query("SELECT * FROM $tbl_publicusers
			WHERE 
			email = '$txt_users' AND
			password ='$password'
			
		");
		return $sql;
	}
	
	function modeling_update_PublicUsers_login_log( $tbl_publicusers, $kunjunganterakhir, $kunjunganterakhir, $username ){
	$sql = mysql_query("UPDATE $tbl_publicusers SET 
			loginterakhir='$kunjunganterakhir',
			updateterakhir = '$kunjunganterakhir'
		WHERE 
			idpegawai='$username'");
	return $sql;
	}
	
	function modeling_update_PublicUsers_aktif_log( $tbl_publicusers, $tanggalhariini , $jamsaatini , $id ){
	$sql = mysql_query("UPDATE $tbl_publicusers SET 
			tanggalaktif ='$tanggalhariini, $jamsaatini'
		WHERE 
			id ='$id'");
	return $sql;
	}


	function modeling_PublicUsers_Select_Detail( $tbl_publicusers, $id ){
		$sqlText = "SELECT * FROM $tbl_publicusers WHERE id = '$id'";
		$result = mysql_query($sqlText);
		return mysql_fetch_object($result);
	}


	function modeling_ListPublicUsers_All( $tbl_publicusers ){
		$sql = mysql_query("
			SELECT * FROM $tbl_publicusers 		
			ORDER BY id DESC	
		");
		return $sql;
	}


	function modeling_ListPublicUsers_All_Aktif( $tbl_publicusers ){
		$sql = mysql_query("
			SELECT * FROM $tbl_publicusers WHERE statusbaru='7'		
			ORDER BY tanggalaktif DESC		
		");
		return $sql;
	}


	function modeling_ListPublicUsers_All_By_Page( $tbl_publicusers , $offset , $dataPerPage ){
		$sql = mysql_query("
			SELECT * FROM $tbl_publicusers 		
			ORDER BY id DESC
			LIMIT $offset, $dataPerPage
		");
		return $sql;
	}


	function modeling_ListPublicUsers_All_Aktif_By_Page( $tbl_publicusers , $offset , $dataPerPage ){
		$sql = mysql_query("
			SELECT * FROM $tbl_publicusers WHERE statusbaru = '7' 		
			ORDER BY tanggalaktif DESC
			LIMIT $offset, $dataPerPage
		");
		return $sql;
	}


					

	function controling_publicusers_createdirektori(  
		$direktoribuat
	){
		if (is_dir( $direktoribuat )) {
		}else{

			mkdir($direktoribuat); 
			chmod( $direktoribuat, 0777);

		}
	}
 
 
		function modeling_PublicUsers_Select_Detail_For_Aktifasi( $tbl_publicusers, $email, $kodeaktifasi ){
			$sqlText = "SELECT * FROM $tbl_publicusers WHERE 
				email = '$email' AND
				kodeaktifasi = '$kodeaktifasi'
			";
			$result = mysql_query($sqlText);
			return mysql_fetch_object($result);
		}



		function modeling_PublicUsers_Select_Detail_For_LostPassword( $tbl_publicusers, $txt_PublicUsersresetpassword_email ){
			$sql = "SELECT * FROM $tbl_publicusers WHERE 
				email = '$txt_PublicUsersresetpassword_email' 
			";
			$result = mysql_query($sql);
			return mysql_fetch_object($result);
		}/* Function Untuk Select Data  Reset Password */


	function modeling_PublicUsers_Select_Detail_For_ChangePassword( $tbl_publicusers, $email ){ /* Kelas Ganti Password */
				$sql = "SELECT * FROM $tbl_publicusers WHERE 
					idpegawai = '$email' 
				";
				$result = mysql_query($sql);
				return mysql_fetch_object($result);
	} 


		function modeling_PublicUsers_Update_Detail_For_LostPassword( $tbl_publicusers, $txt_PublicUsersresetpassword_email, $password_reset , $tanggalhariini, $jamsaatini  ){
			$sql = mysql_query("UPDATE $tbl_publicusers SET  
				password = '$password_reset' , 
				updateterakhir = '$tanggalhariini, $jamsaatini'
					WHERE
				email = '$txt_PublicUsersresetpassword_email'
			");
			return $sql;
		} /* Fungsi Update data untuk lost password */




		function modeling_PublicUsers_Update_Detail_For_ChangePassword( $tbl_publicusers, $email, $password_reset , $tanggalhariini, $jamsaatini  ){
			$sql = mysql_query("UPDATE $tbl_publicusers SET  
				password = '$password_reset' , 
				updateterakhir = '$tanggalhariini, $jamsaatini'
					WHERE
				email = '$email'
			");
			return $sql;
		} /* Fungsi Update data untuk change password */




		function modeling_publicusers_update_password_byid( $tbl_publicusers, $id, $password_reset ){
			$sql = mysql_query("UPDATE $tbl_publicusers SET  
				password = '$password_reset'  
					WHERE
				id = '$id'
			");
			return $sql;
		} 




		function modeling_Jumlah_PublicUsers_For_Aktifasi( $tbl_publicusers, $txt_PublicUsersaktifasi_email, $txt_PublicUsersaktifasi_kodeaktifasi ){
			$sql = mysql_query( "SELECT * FROM $tbl_publicusers WHERE 
				email = '$txt_PublicUsersaktifasi_email' AND
				kodeaktifasi = '$txt_PublicUsersaktifasi_kodeaktifasi'
			");
			
			return mysql_num_rows($sql);
		}


	function modeling_PublicUsers_Update_Detail_For_Aktifasi( $tbl_publicusers, $txt_PublicUsersaktifasi_email, $txt_PublicUsersaktifasi_kodeaktifasi, $tanggalhariini, $jamsaatini  ){
			$sql = mysql_query("UPDATE $tbl_publicusers SET  
				status = '1' ,	tanggalaktif = '$tanggalhariini, $jamsaatini'
					WHERE
				email = '$txt_PublicUsersaktifasi_email' AND
				kodeaktifasi = '$txt_PublicUsersaktifasi_kodeaktifasi'
			");
			
			return $sql;
		}


  
	
	function modeling_update_PublicUsersaccount_status( $tbl_publicusers, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_publicusers SET
				status = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}

	function modeling_update_PublicUsersaccount_aksesproses( $tbl_publicusers, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_publicusers SET
				aksesproses = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}



	function modeling_update_PublicUsersaccount_statusinternal( $tbl_publicusers, $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_publicusers SET
				statusinternal = '$statustampil' 
			WHERE
				id = '$id'
		");
	return $sql;
	}



	function modeling_GetJML_Search_PublicUsers_Account_ALL( $tbl_publicusers, $cari ){ /* PublicUsers Search Count */
	$sql = mysql_query("SELECT count(id) as jml FROM $tbl_publicusers WHERE 	
			userid LIKE '%$cari%' OR
			username LIKE '%$cari%' OR
			email LIKE '%$cari%' OR
			password LIKE '%$cari%' OR
			namadepan LIKE '%$cari%' OR
			namabelakang LIKE '%$cari%' OR
			namapanggilan LIKE '%$cari%' OR
			noponsel LIKE '%$cari%' OR
			negara LIKE '%$cari%' OR
			kota LIKE '%$cari%' OR
			alamat LIKE '%$cari%'
		");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
	}



	function modeling_PublicUsers_ListData_ViewByGroupPublicUsers_AksesModul( $tbl_publicusers , $aksesmodul ){
		$sql = mysql_query("SELECT * FROM $tbl_publicusers WHERE aksesmodul = '$aksesmodul' ORDER BY username ASC");
		return $sql;
	}




	function modeling_PublicUsers_ListData_ViewByGroupPublicUsers( $tbl_publicusers ){
		$sql = mysql_query("SELECT * FROM $tbl_publicusers ORDER BY username ASC");
		return $sql;
	}
	
	
	
	function modeling_PublicUsers_ListData_ViewByGroupPublicUsers_Statusbaru( $tbl_publicusers ){
		$sql = mysql_query("SELECT * FROM $tbl_publicusers WHERE statusbaru='7' ORDER BY tanggalaktif DESC");
		return $sql;
	}
	



function modeling_List_Search_PublicUsers_Account_ALL($tbl_publicusers, $cari  ){ /* Pencarian PublicUsers Search ALL */
		$sql = mysql_query("SELECT * FROM $tbl_publicusers WHERE 

			userid LIKE '%$cari%' OR
			username LIKE '%$cari%' OR
			email LIKE '%$cari%' OR
			password LIKE '%$cari%' OR
			namadepan LIKE '%$cari%' OR
			namabelakang LIKE '%$cari%' OR
			namapanggilan LIKE '%$cari%' OR
			noponsel LIKE '%$cari%' OR
			negara LIKE '%$cari%' OR
			kota LIKE '%$cari%' OR
			alamat LIKE '%$cari%'

		ORDER BY username ASC
		
		");
		
		return $sql;
}

function modeling_Search_PublicUsers_Account_ALL($tbl_publicusers, $cari , $offset , $dataPerPage ){ /* Pencarian PublicUsers Search ALL By page */
		$sql = mysql_query("SELECT * FROM $tbl_publicusers WHERE 
		
			userid LIKE '%$cari%' OR
			username LIKE '%$cari%' OR
			email LIKE '%$cari%' OR
			password LIKE '%$cari%' OR
			namadepan LIKE '%$cari%' OR
			namabelakang LIKE '%$cari%' OR
			namapanggilan LIKE '%$cari%' OR
			noponsel LIKE '%$cari%' OR
			negara LIKE '%$cari%' OR
			kota LIKE '%$cari%' OR
			alamat LIKE '%$cari%'

		ORDER BY username ASC LIMIT $offset, $dataPerPage");  
  		return $sql;
}




/* Fungsi untuk mengupdate PublicUsers teraktif  */
	function modeling_PublicUsers_UpdateTeraktif( $tbl_publicusers , $id ){
		$sql = mysql_query("
			UPDATE $tbl_publicusers SET
				teraktif = teraktif+1
			WHERE
			id = '$id'
		");
	return $sql;
	}


/* Fungsi untuk mengupdate PublicUsers terpopuler  */
	function modeling_PublicUsers_UpdateTerpopuler( $tbl_publicusers , $id ){
		$sql = mysql_query("
			UPDATE $tbl_publicusers SET
				terpopuler = terpopuler+1
			WHERE
			id = '$id'
		");
	return $sql;
	}


	function modeling_publicusers_update_login_log( $tbl_publicusers, $kunjunganterakhir, $kunjunganterakhir, $id ){
	$sql = mysql_query("UPDATE $tbl_publicusers SET 
			loginterakhir='$kunjunganterakhir',
			updateterakhir = '$kunjunganterakhir'
		WHERE 
			id = '$id' ");
	return $sql;
	}

/* Fungsi untuk mengaktifkan status PublicUsers internal  */
	function modeling_PublicUsers_StatusInternal( $tbl_publicusers , $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_publicusers SET
				statusinternal = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	
	
	}


	function modeling_PublicUsers_StatusAktif( $tbl_publicusers, $statustampil, $tanggalhariini, $jamsaatini, $id ){
		$sql = mysql_query("
			UPDATE $tbl_publicusers SET
				status = '$statustampil',
				tanggalaktif = '$tanggalhariini, $jamsaatini'
			WHERE
				id = '$id'
		");
	return $sql;
	
	
	}

	function modeling_PublicUsers_StatusBaruAktif( $tbl_publicusers , $statustampil, $id ){
		$sql = mysql_query("
			UPDATE $tbl_publicusers SET
				statusbaru = '$statustampil' 
			WHERE
			id = '$id'
		");
	return $sql;
	
	
	}


	function modeling_PublicUsers_hapusaccount( $tbl_publicusers , $id ){
		$sql = mysql_query("
			DELETE FROM $tbl_publicusers WHERE id='$id'
		");
	return $sql;
	
	
	}


	function modeling_PublicUsers_StatusAktif_ByKonfirmasi( $tbl_publicusers, $statustampil, $tanggalhariini, $jamsaatini, $kodeaktifasi ){
		$sql = mysql_query("
			UPDATE $tbl_publicusers SET
				status = '$statustampil',
				tanggalaktif = '$tanggalhariini, $jamsaatini'
			WHERE
				kodeaktifasi  = '$kodeaktifasi'
		");
	return $sql;
	}
	
	
	function modeling_PublicUsers_StatusBaruAktif_ByKonfirmasi( $tbl_publicusers , $statustampil, $kodeaktifasi ){
		$sql = mysql_query("
			UPDATE $tbl_publicusers SET
				statusbaru = '$statustampil' 
			WHERE
				kodeaktifasi = '$kodeaktifasi'
		");
	return $sql;
	}
	
	function modeling_publicusers_viewdetail( $tbl_publicusers , $kodeaktifasi ){
		$sqlText = "SELECT * FROM $tbl_publicusers WHERE kodeaktifasi = '$kodeaktifasi'";
		$result = mysql_query($sqlText);
		return mysql_fetch_object($result);
	}



	
	function modeling_PublicUsers_hapusimage( $tbl_publicusers , $id ){
	$sql = mysql_query("
		UPDATE $tbl_publicusers SET 
			gambarkecil = '',
			gambarbesar = ''
		WHERE
			id = '$id'
	
	");
	
	return $sql;
	
	}



?>