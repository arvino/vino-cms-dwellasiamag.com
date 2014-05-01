
<div id="content_wrapper">

<div id="content_main">

	<div id="content_headline_slider"> 

<?php include('box_news_section_headline.php'); ?>

	</div>



<?php
$idkategori = $_GET['idkategori'];
?>

<?php
$result_box_subkanal = Select_All_SubKategori_otherpage_By_Urutan( $tbl_newskategorisub, $idkategori );
$jml_item_line_subkanal = "1";  
$lebar_box_subkanal = "100%";
?>


	<div id="content_sideleft_wrapper">

 
		<div id="floatMenu"> 
				<div id="content_sideleft_blackbox"> 
				
		<?php include('menu_subsection.php'); ?>
				 
				 </div>
		</div>


	</div> 

<div id="content_main_news_section_wrapper">

<div id="content_main_news_subsection_innerwrapper">  

<?php
$id_excp1x = substr($id_excp1,0,-1);
if($id_excp1x==""){ echo "Data Not Available.."; }else{
?>

<?php
$dataPerPage = 6;
			
$noPage = 1;

$dataperhalamanX = "";
 
$offset = ($noPage - 1) * $dataPerPage;

$submit_kategori = $_GET['submit_kategori'];

$idkategori = $_GET['idkategori'];

$sql_indeks = list_all_publish_item_news_bykategoriAja_idexception( $tbl_news, $idkategori, $id_excp1x="$id_excp1x" );

$HitungJumlahItemnews  = mysql_num_rows($sql_indeks);

$opsetr = offsethalaman($halaman,$dataPerPage);
$offset = $opsetr[0];
$noPage = $opsetr[1];
		
$no = $offset + 1;

$kategori_halaman = "news-channel-";

$idkategori = $_GET['idkategori'];

$detail_kanal_news = Detail_Kanalnews_Publish( $tbl_newskategori, $idkategori );

$KETERANGAN_JUDUL = strtoupper($detail_kanal_news->keterangan);

$KETERANGAN_LINKJUDUL = potong_judul($detail_kanal_news->keterangan);

$posisihalaman = "$dataperhalamanX-$idkategori-$KETERANGAN_LINKJUDUL" . "$extention";

$idkategori = $_GET['idkategori'];

$result_news_item = List_Indeks_news_Item_KategoriAja_ByPage_idexception( $tbl_news,  $idkategori, $id_excp1x="$id_excp1x" , $offset , $dataPerPage );

$Total_Item_news =  total_list_all_publish_indeks_news_item_bykategoriAja_idexception( $tbl_news,  $idkategori, $id_excp1x="$id_excp1x" ); 

?>
<?php
$TAMPILKANHALAMANNYA =  tampilkanhalaman_hasil_indeks( $posisihalaman, $HitungJumlahItemnews ,$dataPerPage, $noPage, $halaman, $link_host, $kategori_halaman );
$navigasi_halaman = "<div class='pagination'>$TAMPILKANHALAMANNYA</div>";
?>

<?php
$kolom=1;
$jml_item_line1 = "3"; /* Jumlah  perbaris */
?>
              
<?php include('box_news_item.php'); ?>

<?php echo $navigasi_halaman?>

<?php
} ?>

</div>

</div> 

	  </div><!-- END CONTENT MAINPAGE -->
	  <div id="content_sidebar">
			  <?php include('sidebar.php'); ?>
	  </div>
</div>
