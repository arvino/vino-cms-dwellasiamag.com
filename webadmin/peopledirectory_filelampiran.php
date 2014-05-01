<?php
session_start(); 
$sesi_id = $_SESSION['users_id'];
$sesi_idpegawai = $_SESSION['users_idpegawai'];
$sesi_username = $_SESSION['users_username'];
$sesi_email = $_SESSION['users_email'];
$sesi_aksesmodul = $_SESSION['users_aksesmodul'];
$id_peopledirectorylog = $_SESSION['id_peopledirectorylog'];
$id_peopledirectorylog_file = $_SESSION['filelampiran_$id_peopledirectorylog'];

?>
<?php
if( $sesi_id == "" ){
?>
<script>
window.close();
</script>
<?php
}else{
include"kelas_function.php";
?>
<?php
//peopledirectorylog_updatedata( $tbl_peopledirectorylog, $id_peopledirectorylog, $tanggalhariini, $jamsaatini );
?>
<script>
window.close();
</script>
<?php
}
?>