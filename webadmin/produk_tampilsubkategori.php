<?php
include"kelas_function.php";
/* */
$idkategori=$_GET["idkategori"];
$idsubkategori = $_GET["idkategorisub"];
$idkategorisub = $_GET["idkategorisub"];


if($idkategori=="" || $idkategori=="none"){
$idkategori = 0;
}

if( $idsubkategori =="" ){
$idsubkategori = 0;
}

	$r_produksubkategori = Select_SubKategori_produk_By_Id( $tbl_produkkategorisub1, $idsubkategori );
	$produksubkategori_id = $r_produksubkategori->id;

if( $idsubkategori == 0 ){ 
	$produksubkategori_keterangan = "TANPA SUB KATEGORI";
}else{

	$produksubkategori_keterangan = $r_produksubkategori->keterangan;
	$produksubkategori_keterangan = strtoupper($produksubkategori_keterangan);
}

?>
<b>Sub Kategori produk :</b> 
<select name='idkategorisub'>
<option value='<?php
echo $produksubkategori_id  ?>'> -- <?php
echo $produksubkategori_keterangan ?> -- </option>
<?php
$result_subkanal = Select_All_SubKategori_produk_By_NOTIDSUB( $tbl_produkkategorisub1, $idkategori, $idkategorisub );
while($rows_subkanal = mysql_fetch_object($result_subkanal)){
?>
<option value='<?php
echo $rows_subkanal->id  ?>'><?php
echo strtoupper($rows_subkanal->keterangan) ?> </option>
<?php
} ?>
</select>
