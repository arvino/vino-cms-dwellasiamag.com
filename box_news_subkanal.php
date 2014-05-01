<?php
$idkategori = $_GET['idkategori'];
$idkategorisub = $_GET['idkategorisub'];

$result_box_subkanal = Select_All_SubKategori_news_By_Kategori( $tbl_newskategorisub, $idkategori );
 
/* Select Kanal Yang Tampil Di Home Page */
$jml_item_line1 = "3";
$lebar_box = "33%";
?>
<table width='98%'  align='center' cellpadding=0 cellspacing=0 >
<tr height='100%'>
<?php
$kolom=1;
while($row_box_subkanal = mysql_fetch_object($result_box_subkanal))	{
$SubKanal_Id = $row_box_subkanal->id;
			
$SubKanal_Keterangan = $row_box_subkanal->keterangan;
$SubKanal_Keterangan  = strtoupper($SubKanal_Keterangan );
$judulsubstrkanal= potong_judul( $SubKanal_Keterangan );
 

$idkategori = $row_box_subkanal->idkategori;
$link_news_subkanal  = "$link_host" . "news-subchannel-$idkategori-$SubKanal_Id-$judulsubstrkanal"."$extention";

 
?>
<td width='<?php
echo $lebar_box ?>'  valign='top'>


  <table width="100%"  border="0" cellspacing="0" cellpadding="0">
    <tr valign="top">
      <td>
	  
					
		<div class='kategori_title'> 
			<a href='<?php
echo $link_news_subkanal ?>' class='kategori_title'> <?php
echo $SubKanal_Keterangan ?> </a>
		</div>			

		 </td>
		 </tr>
		

<?php
$dataPerPage = "1";
$idkategori = $_GET['idkategori'];
$idkategorisub  = $SubKanal_Id;

$sql_news_item = list_all_publish_item_news_bykategori_list( $tbl_news, $idkategori, $idkategorisub );
 
while($row_news_item = mysql_fetch_object($sql_news_item)){

	$judul_substr_item = potong_judul($row_news_item->judul);
	$link_news_item = "$link_host"."read-news-$row_news_item->idkategori-$row_news_item->idkategorisub-$row_news_item->id-$judul_substr_item"."$extention";

?>    
<tr> <td> 

<div class="box_wrapper_item">
	<div class="item_title">
		<a href="<?php
echo $link_news_item ?>" class="item_title">
			<?php
echo $row_news_item->judul ?>
		</a>
	</div>

	<?php
if($row_news_item->gambarbesar !=''){
	?>
	<a href="<?php
echo $link_news_item ?>" class="item_image"> 
		<img src="<?php
echo $link_host ?><?php
echo $row_news_item->direktorigambar ?><?php
echo $row_news_item->gambarkecil ?>" width="80" border="0"  class="item_image"> 
	</a>
	<?php
}
	?>

	<div class="item_preview">
		<?php
echo substr($row_news_item->preview,0,50) ?>
	</div> 

	<div class="item_moredetail"> 
		<a href="<?php
echo $link_news_item ?>" class="item_moredetail">  <?php
echo $read_more ?>  </a>
	</div>
</div>


</td>
</tr>
<?php
} ?>

</table>

 
 
  <?php
if($kolom==$jml_item_line1)
{
?>
</td>
</tr>
<?php
$kolom=1;
}  
else
$kolom++;
}
?>
</table>