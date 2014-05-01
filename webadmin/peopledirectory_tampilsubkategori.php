<?php
include"kelas_function.php";
/* */
$idkategori=$_GET["idkategori"];
$idsubkategori = $_GET["idsubkategori"];
  
	$r_portfoliosub = Select_Detail_KategoriSub_peopledirectory( $tbl_peopledirectorykategorisub, $idsubkategori=$_GET['idsubkategori'] );
	$portfoliosub_id = $r_portfoliosub->id;
	$portfoliosub_keterangan = strtoupper($r_portfoliosub->keterangan );
 

?>
<b>SUB SECTION :</b> 
<select name='idkategorisub'>
<option value='<?php
echo $portfoliosub_id  ?>'> --  <?php
echo $portfoliosub_keterangan ?> -- </option>
<?php
$result_subkanal = Select_All_SubKategori_peopledirectory_By_NOTIDSUB( $tbl_peopledirectorykategorisub, $idkategori=1);
while($rows_subkanal = mysql_fetch_object($result_subkanal)){
?>
<option value='<?php
echo $rows_subkanal->id  ?>'><?php
echo strtoupper($rows_subkanal->keterangan) ?> </option>
<?php
} ?>
</select>
