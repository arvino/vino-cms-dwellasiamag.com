<?php
session_start(); 
$sesi_id = $_SESSION['users_id'];
$sesi_idpegawai = $_SESSION['users_idpegawai'];
$sesi_username = $_SESSION['users_username'];
$sesi_email = $_SESSION['users_email'];
$sesi_aksesmodul = $_SESSION['users_aksesmodul'];
$id_produklog = $_SESSION['id_produklog'];
$id_produklog_file = $_SESSION['filelampiran_$id_produklog'];

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
//produklog_updatedata( $tbl_produklog, $id_produklog, $tanggalhariini, $jamsaatini );
?>
<script>
window.close();
</script>
<?php
}
?>