<?php
/* 

id
idupline
idkategori
idkategorisub
judul
preview
deskripsi
tglpost
jampost
gambarkecil
gambarbesar
dilihat
statustampil
idadmin
direktorigambar
linkjudul
keyword
  
  
*/


	function polling_item_select ( $tbl_polling ){
	
	}
	
	
	function polling_item_insert ( $tbl_polling ){
	
	
	}
	
	function polling_item_update ( $tbl_polling ){
	
	}
	
	function polling_item_delete ( $tbl_polling ){
	
	}



	function pollingItem_CreateID( $tbl_polling ){
		$sql = mysql_query("SELECT * FROM $tbl_polling ORDER BY id DESC");  
		$data =	mysql_fetch_array($sql);
		$UID = $data["id"];
		$UID = $UID+1;  
		return $UID;
	}	 

	function pollingItem_PeriksaJudul( $tbl_polling, $judul, $judulinggris ){
		$sql = mysql_query("SELECT * FROM $tbl_polling WHERE judul = '$judul' AND judulinggris = '$judulinggris'");
		return $sql;	
	}

	function pollingItem_TambahData(

		$tbl_polling,
		$id, $idupline, $idkategori, $idkategorisub, $judul, $preview, $deskripsi,
		$tglpost, $jampost, $gambarkecil, $gambarbesar,
		$dilihat, $statustampil, $idadmin, $direktorigambar,
		$linkjudul, $keyword 

	){
		$sql = mysql_query("INSERT INTO $tbl_polling
		(

				id, idupline, idkategori,
				idkategorisub, judul,
				preview, deskripsi,
				tglpost, jampost,
				gambarkecil, gambarbesar,
				dilihat, statustampil,
				idadmin, direktorigambar,
				linkjudul, keyword

		)VALUES(
	
				'$id','$idupline',
				'$idkategori','$idkategorisub',
				'$judul','$preview',
				'$deskripsi','$tglpost',
				'$jampost','$gambarkecil',
				'$gambarbesar','$dilihat',
				'$statustampil','$idadmin',
				'$direktorigambar','$linkjudul','$keyword'

		)");
		return $sql;
	}
 

	function pollingItem_UpdateData(
			$tbl_polling,
			$id, $idupline, $idkategori, $idkategorisub, $judul, $preview, $deskripsi,
			$tglpost, $jampost, $gambarkecil, $gambarbesar,
			$dilihat, $statustampil, $idadmin, $direktorigambar,
			$linkjudul, $keyword 
			){
			$sql = mysql_query(
			"
	UPDATE $tbl_polling SET 
	
			idupline = '$idupline', idkategori = '$idkategori', idkategorisub = '$idkategorisub', judul = '$judul', 
			preview = '$preview', deskripsi = '$deskripsi',
			tglpost = '$tglpost', jampost = '$jampost', gambarkecil = '$gambarkecil', gambarbesar = '$gambarbesar',
			dilihat = '$dilihat', statustampil = '$statustampil', idadmin = '$idadmin', direktorigambar = '$direktorigambar',
			linkjudul = '$linkjudul', keyword = '$keyword'
	
	WHERE
		id ='$id'
			");
			
	return $sql;
	}
 
 
	function pollingItem_BacaDataListing_All( $tbl_polling , $offset , $dataPerPage){
		$sql = mysql_query("SELECT * FROM $tbl_polling ORDER BY id DESC	LIMIT $offset, $dataPerPage");
		return $sql;
	}
	
	function GetJML_pollingItem_BacaDataListing_All( $tbl_polling ){
			$sql = mysql_query("SELECT count(id) as jml FROM $tbl_polling");
			$row = mysql_fetch_object($sql);
			$jml = $row->jml;
			return $jml;	
	}

 
	function GetJML_pollingItem_BacaDataListing_DiKomentari_All( $tbl_polling ){
			$sql = mysql_query("SELECT count(id) as jml FROM $tbl_polling WHERE dikomentari != '0' ");
			$row = mysql_fetch_object($sql);
			$jml = $row->jml;
			return $jml;	
	}


	function pollingItem_BacaDataListing_ByKategoriSub_Terkini_All( $tbl_polling , $idkategori, $idkategorisub ){
		$sql = mysql_query("SELECT * FROM $tbl_polling WHERE idkategori = '$idkategori' AND idkategorisub = '$idkategorisub' ORDER BY judul ASC");
		return $sql;
	}
	
 
	function Search_Item_polling_ALL($tbl_polling, $cari , $offset , $dataPerPage ){ /* News Search */
			$sql = mysql_query("SELECT * FROM $tbl_polling WHERE 
				judul LIKE '%$cari%'  
			ORDER BY id DESC LIMIT $offset, $dataPerPage");  
			return $sql;
	}
	
	function GetJML_Search_Item_polling_ALL( $tbl_polling, $cari ){ /* News Search Count */
			$sql = mysql_query("SELECT count(id) as jml FROM $tbl_polling WHERE 
				judul LIKE '%$cari%' OR
				preview  LIKE '%$cari%'
				 
			");
			$row = mysql_fetch_object($sql);
			$jml = $row->jml;
			return $jml;	
	}
	

	function Search_Item_polling_Publish($tbl_polling, $cari , $offset , $dataPerPage ){ /* News Search */
			$sql = mysql_query("SELECT * FROM $tbl_polling WHERE 
				statustampil = '1' AND
				judul LIKE '%$cari%' 
			ORDER BY id DESC LIMIT $offset, $dataPerPage");  
			return $sql;
	}
	function GetJML_Search_Item_polling_Publish( $tbl_polling, $cari ){ /* News Search Count */
			$sql = mysql_query("SELECT count(id) as jml FROM $tbl_polling WHERE 
				statustampil = '1' AND
				judul LIKE '%$cari%' OR
				judulinggris LIKE '%$cari%' OR 
				subjudul LIKE '%$cari%' OR
				subjudulinggris LIKE '%$cari%' OR 
				preview  LIKE '%$cari%' OR
				previewinggris LIKE '%$cari%' 
			");
			$row = mysql_fetch_object($sql);
			$jml = $row->jml;
			return $jml;	
	}


 	function pollingItem_CreateDirektori(  
	  	$tanggalhariini
	){
 		$direktoribuat =  "filemodul/polling/" . "file_item/" . $tanggalhariini . "/";
			 mkdir( $direktoribuat,'0777',true); 
			 chmod( $direktoribuat, 0777);
		return $direktoribuat;
	}


 	function GetJmlTotalpolling( $tbl_polling ){
  		$sqlText = "SELECT count(id) AS jml FROM $tbl_polling";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
	
	function GetJmlTotalpollingByUser( $posted ){
  		$sqlText = "SELECT count(id) as jml FROM $tbl_polling WHERE 
		idadmin = '$idadmin'";
  		$result = mysql_query($sqlText);
  		$row = mysql_fetch_object($result);
  		$jml = $row->jml;
  		return $jml;
	}
 

	function pollingDiLihat( $tbl_polling, $Det ){
			$sql = mysql_query("SELECT * FROM $tbl_polling WHERE id='$Det'");
			$datapolling = mysql_fetch_array($sql);
			$dilihat = $datapolling ['dilihat'];
			$dilihat = $dilihat+1;
			$sqlupdate = mysql_query("UPDATE $tbl_polling SET dilihat='$dilihat' WHERE id='$Det'");
			return $sqlupdate;
	}

  
	function  pollingItem_HapusData( $tbl_polling, $id){ /* Hapus Data Item */
		$sql = mysql_query("
			DELETE FROM $tbl_polling WHERE id='$id'
		");
		return $sql;
	}
	
	
	function pollingItem_StatusTampil( $tbl_polling, $statustampil, $id ){ /* Tampil Kan Data */
		$sql = mysql_query("
			UPDATE $tbl_polling SET
				statustampil = '$statustampil' 
			WHERE
				id = '$id'
		");
		return $sql;
	}

 

	function pollingItem_HapusImage( $tbl_polling, $id ){
		$sql = mysql_query("
			UPDATE $tbl_polling SET
				gambarkecil = '',
				gambarbesar = '',
				direktorigambar = ''
			WHERE
				id = '$id'
		");
	return $sql;
	}
 
	function List_ItemPolling_Page_ALL($tbl_polling,  $offset, $dataPerPage){
	$sql = mysql_query("SELECT * FROM $tbl_polling ORDER BY id DESC LIMIT $offset, $dataPerPage");
	return ;
	}

function List_ItemPolling_ALL( $tbl_polling ){
$sql = mysql_query("SELECT * FROM $tbl_polling ORDER BY id DESC");
return $sql;
}


function List_ItemPolling_Publish( $tbl_polling ){
$sql = mysql_query("SELECT * FROM $tbl_polling WHERE statustampil='1' ORDER BY id DESC");
return $sql;
}


function List_ItemPolling_Publish_By_Page( $tbl_polling, $offset, $dataPerPage ){
$sql = mysql_query("SELECT * FROM $tbl_polling WHERE statustampil='1' ORDER BY id DESC LIMIT $offset, $dataPerPage");
return $sql;
}



function viewdetail_itempolling( $tbl_polling, $id ){
	$sql = mysql_query("SELECT * FROM $tbl_polling WHERE id='$id'");
	$result = mysql_fetch_object($sql);
	return $result;
}

function viewdetail_publish_itempolling( $tbl_polling, $id ){
	$sql = mysql_query("SELECT * FROM $tbl_polling WHERE statustampil='1' AND id='$id'");
	$result = mysql_fetch_object($sql);
	return $result;
}


function GetJML_pollingItem_HIT( $tbl_polling ){
		$sql = mysql_query("SELECT sum(dilihat) as jml FROM $tbl_polling");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


function Count_PollingItem_ByUsers( $tbl_polling, $idusers ){
		$sql = mysql_query("SELECT count(id) as jml FROM $tbl_polling WHERE idadmin = '$idusers'  ");
  		$row = mysql_fetch_object($sql);
  		$jml = $row->jml;
  		return $jml;	
}


function List_polling_File_Group_With_LimitPage( $tbl_polling, $idkategori, $idsubkategori , $offset, $dataPerPage){

	$sql = mysql_query("
				SELECT * FROM $tbl_polling WHERE 

						idkategori='$idkategori' AND
						idkategorisub='$idsubkategori' 
			
				ORDER BY judul ASC
				LIMIT $offset, $dataPerPage
			
		");
		
	return $sql;
}

	function pollingItem_BacaDataListing_Terpopuler_All( $tbl_polling ){
		$sql = mysql_query("SELECT * FROM $tbl_polling ORDER BY dilihat DESC");
		return $sql;
	}

	function pollingItem_BacaDataListing_Terpopuler_All_ByPage( $tbl_polling , $offset , $dataPerPage ){
		$sql = mysql_query("SELECT * FROM $tbl_polling ORDER BY dilihat DESC LIMIT $offset, $dataPerPage");
		return $sql;
	}


	function list_polling_item_by_kategori_publik( $tbl_polling, $idkategori , $dataPerPage ){
		$sql = mysql_query("
			SELECT * FROM $tbl_polling WHERE 
				statustampil = '1' AND 
				idkategori = '$idkategori'  
			ORDER BY id DESC 
				LIMIT $dataPerPage
			
		");
	return $sql;

}

 function  list_all_publish_item_polling_bykategori_list( $tbl_polling, $idkategori, $idkategorisub ){  
		$sql = mysql_query("SELECT * FROM $tbl_polling WHERE 
		
			statustampil = '1' AND
			idkategori ='$idkategori' AND
			idkategorisub = '$idkategorisub'
			
		ORDER BY id DESC");  
  		return $sql;
}



?>