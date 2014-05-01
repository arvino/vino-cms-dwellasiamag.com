<?php
session_start(); 
include "sc_session.php";
include("kelas_function.php");
?>
<?php
$id = $_GET['id']; /* periksa id item news*/
$idkategori = $_GET['idkategori']; /* periksa id kategori news */
$idkategorisub = $_GET['idsubkategori']; /* periksa id sub kategori news*/

$detail_news_kanal = Select_Detail_Kategori_news( $tbl_newskategori, $idkategori );
$detail_news_subkanal = Select_Detail_KategoriSub_news( $tbl_newskategorisub, $idkategorisub );
$detail_news_item = Select_Detail_Item_news($tbl_news, $id);

 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php
include('head_meta_tags.php'); ?>
<?php
include('head.php'); ?>

</head>

<body>


<div id="wrapper">
<?php
include('section_header.php');?>
   
<div id="content_wrapper">

	<div id="column_left">

<?php
include"box_news_kategori_indeks.php"; ?>

				
	</div> <!-- end column left -->

	<div id="column_right">  
 


<?php
$dataPerPage = 9;
		$noPage = 1;
		$dataperhalamanX = "";
		$offset = ($noPage - 1) * $dataPerPage;
	
		$judul_indeks = "ALL INDEX ARTICLE";
	
		$idkategori = $_GET['id'];
		
		$sql_indeks = List_Indeks_news_Item_all($tbl_news );
		$HitungJumlahItemnews  = mysql_num_rows($sql_indeks);


		$opsetr = offsethalaman($halaman,$dataPerPage);
		$offset = $opsetr[0];
		$noPage = $opsetr[1];
					
		$no = $offset + 1;



		$kategori_halaman = "indeks-";
		$idkategori = $_GET['id'];		  	

		$posisihalaman = "$dataperhalamanX" . "$extention";

		$result_news_item = List_Indeks_news_Item($tbl_news, $offset , $dataPerPage );
		$Total_Item_News =  Total_Indeks_news_Item_By_Tanggal( $tbl_news ); 

		$TAMPILKANHALAMANNYA =  tampilkanhalaman_hasil_indeks( $posisihalaman, $HitungJumlahItemnews ,$dataPerPage, $noPage, $halaman, $link_host, $kategori_halaman );
		$navigasi_halaman = "<div class='pagination'> $TAMPILKANHALAMANNYA </div>";

?>

	<div class="kategori_title"> <?php
echo $judul_indeks ?> </div>
	<hr>
	<?php
$jml_item_line1 = "3";
	$lebar_box = "33%";
	?>
	 
	<?php
include"box_news_list_item.php" 
	?>
	<?php
echo $navigasi_halaman ?> 
	
</div>

</div>	


<?php
include('section_footer.php');?>
 
</div>
</body>
</html>
