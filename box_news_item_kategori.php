<table width='99%' height='100%' align='center' cellpadding=0 cellspacing=0 >
<tr height='100%'>
<?php
while( $row_news_item = mysql_fetch_object( $result_news_item )){

	$Link_Judul = potong_judul($row_news_item->judul);
	$id = $row_news_item->id;
	$id_excp = $row_news_item->id;
	
	$idkategori = $row_news_item->idkategori;
	$idkategorisub = $row_news_item->idkategorisub;
	
	$detail_kanal = Select_Detail_Kategori_news( $tbl_newskategori, $idkategori );
	$detail_subkanal = Select_Detail_KategoriSub_news( $tbl_newskategorisub, $idkategorisub );
	 
	$HitungSubKategori = AmbilJumlahTotalnewsKategoriSub_ByKategori( $tbl_newskategorisub, $idkategori );

	$judul_substr_item = potong_judul($row_news_item->judul);
	$link_news_item = "$link_host"."read-news-$row_news_item->idkategori-$row_news_item->idkategorisub-$row_news_item->id-$judul_substr_item"."$extention";

?>

<td width='<?php
echo $lebar_box_news_kategori_item ?>' valign='top'>



<table width="100%" height="auto" border="0" align="center">


<tr valign="top">
<td valign="top">
    


<div class="box_wrapper_item">

<?php
if($row_news_item->gambarkecil != "" ){
?>
	<div class="item_image">
		<a href='<?php
echo $link_news_item ?>' class="item_image">
			<img src="<?php
echo $link_host ?><?php
echo $row_news_item->direktorigambar ?><?php
echo $row_news_item->gambarkecil ?>" width="100%" height="200px" border="0" class="item_image">
		</a>
	</div>
<?php
} ?>

	<div class="item_title"> 
 		<a href='<?php
echo $link_news_item ?>' class="item_title"><?php
echo $row_news_item->judul ?></a>
	</div>
 	<div class="item_tanggal">
		 <?php
echo harienglish($row_news_item->tglpost) ?>, <?php
echo bulanenglish($row_news_item->tglpost) ?> / <?php
echo strtolower($detail_kanal->keterangan) ?>
 	</div>
	<div  class="item_preview">
		<?php
echo wordwrap(potong_kata($row_news_item->preview,$word_count=20), 38, "<br />\n"); ?> ...	
	</div>
	
	<div class="item_moredetail"> 
		<a href='<?php
echo $link_news_item ?>' class="item_moredetail"> 
			 <?php
echo $read_more ?> 
		</a>
	</div>

</div>
    
</td>
</tr>

</table>
			  
<?php
if($kolom_news_kategori==$jml_item_line_news_kategori)
{
?>
</td>
</tr>
<?php
$kolom_news_kategori=1;
}  
else
$kolom_news_kategori++;
}

?>
</table>