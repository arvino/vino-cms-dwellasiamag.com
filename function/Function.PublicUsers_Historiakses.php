<?php
/* 
Tabel :
$tbl_publicusers = "publicusers";
$tbl_publicusers_historiakses = "publicusershistoriakses";
$tbl_publicusers_files = "publicusersfiles";

id
userid
email
ip
login
logout
timelogin
timelogout

*/


function modeling_publicusershistoriakses_createid( $tbl_publicusers_historiakses ){
$sql = mysql_query("SELECT * FROM $tbl_publicusers_historiakses ORDER BY id DESC");
$result = mysql_fetch_object($sql);
$id = $result->id + 1;
return $id;
}

function modeling_publicusershistoriakses_insertdata(
$tbl_publicusers_historiakses,
$cr_idhistori, $H_userid, $H_email, $REMOTE_ADDR, $tanggallogin, $jamlogin
){
$sql = mysql_query("
INSERT INTO $tbl_publicusers_historiakses ( id, userid, email, ip, login, timelogin ) VALUES ( '$cr_idhistori', 			
'$H_userid','$H_email','$REMOTE_ADDR','$tanggallogin','$jamlogin') ");
return $sql;
}

 

function modeling_publicusershistoriakses_listall( $tbl_publicusers_historiakses ){
$sql = mysql_query("SELECT * FROM $tbl_publicusers_historiakses ORDER BY id DESC ");
return $sql;
}/* Function listing histori akses users */ 

function modeling_publicusershistoriakses_listall_by_page( $tbl_publicusers_historiakses , $offset , $dataPerPage){
	$sql = mysql_query("SELECT * FROM $tbl_publicusers_historiakses ORDER BY id DESC LIMIT $offset, $dataPerPage");
	return $sql;
}


function modeling_publicusershistoriakses_hitungtotal( $tbl_publicusers_historiakses ){
$sql = mysql_query("SELECT * FROM $tbl_publicusers_historiakses ORDER BY id DESC");
$result = mysql_num_rows($sql);
return $result;
}


?>