<?php
$id = $_GET['id']; /* periksa id item news*/
$idkategori = $_GET['idkategori']; /* periksa id kategori news */
$idkategorisub = $_GET['idsubkategori']; /* periksa id sub kategori news*/

$detail_news_kanal = Select_Detail_Kategori_news( $tbl_newskategori, $idkategori );
$detail_news_subkanal = Select_Detail_KategoriSub_news( $tbl_newskategorisub, $idkategorisub );
$detail_news_item = Select_Detail_Item_news($tbl_news, $id);


$newsHitKategori = newsKanalDiLihat( $tbl_newskategori, $idkategori );
$newsHitKategoriSub = newsSubKanalDiLihat( $tbl_newskategorisub, $idkategorisub );
$newsHitItem = newsDiLihat( $tbl_news, $id );

?>

<div id="content_wrapper">

<div id="content_main">

	<div id="content_headline_slider_detail"> 
	
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
		<div id="content_sideleft_whitebox">
		
		
				<div id="content_sideleft_whitebox_text_writter">
   			 		Written By: 
			 	</div>
				<div id="content_sideleft_whitebox_writter">
					<?php
echo $detail_news_item->penulis ?> 
				</div>

    			<div id="content_sideleft_whitebox_text_datepublished"> 
					Published: 
				</div>
				<div id="content_sideleft_whitebox_datepublished"> 
					<?php
echo bulanenglish($detail_news_item->tgltampil) ?> 
				</div>
				 


 

		</div>
		<div id="content_sideleft_blackbox"> 

<?php include('menu_subsection.php'); ?>
		
		</div>
</div>



	</div> 
	


<div id="content_main_news_detail_wrapper">

<?php
include('box_news_itemdetail.php'); ?>

</div>

	  </div><!-- END CONTENT MAINPAGE -->
	  <div id="content_sidebar">
			  <?php include('sidebar.php'); ?>
	  </div>
</div>
