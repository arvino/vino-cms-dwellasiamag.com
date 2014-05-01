<?php
$result_box_kanalhomepage = Select_Kanalnews_TampilDiHomepage( $tbl_newskategori );
/* Select Kanal Yang Tampil Di Home Page */
$jml_item_line1 = "1"; /* Jumlah  perbaris */
$lebar_box = "100%";
?>
<!-- START BOX KATEGORI --->
<table width='98%' height='100%' align='center' cellpadding=0 cellspacing=0 >
<tr height='100%'>
<?php
$kolom=1;
while($row_box_kanal = mysql_fetch_object($result_box_kanalhomepage))	{
	$SubKanal_Id = $row_box_kanal->id;
 
	$SubKanal_Keterangan = $row_box_kanal->keterangan;
	$SubKanal_Keterangan  = strtoupper($SubKanal_Keterangan);
	$LINKJUDUL_KANAL_MENU = potong_judul( $SubKanal_Keterangan );
 
	$idkategori = $row_box_kanal->id;

	
$HitungSubKategori = AmbilJumlahTotalnewsKategoriSub_ByKategori( $tbl_newskategorisub, $idkategori );

if($HitungSubKategori==0){/* Jika tidak ada sub kanal news arahkan ke subkanal langsung */

	$LinkKanalNya  = "$link_host" . "news-subchannel-$row_box_kanal->id-0-$LINKJUDUL_KANAL_MENU"."$extention";
	/* 
RewriteRule ^news-subchannel-([0-9]+)-([0-9]+)-(.*)\.html$ page_news_subkategori.php?
modul=news&idkategori=$1&idkategorisub=$2&keterangan=$3
	*/
}else{

	$LinkKanalNya  = "$link_host" . "news-channel-$row_box_kanal->id-$LINKJUDUL_KANAL_MENU"."$extention";
}

	
	

?>
<td width='<?php
echo $lebar_box ?>' valign='top'>
 
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
</td>
<td width="8" height="8">&nbsp;</td>
</tr>
<tr valign="top">
<td>
                    
<!-- THE BOX -->
<table style="border-right:1px solid #6699CC" width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
<tr valign="top">
<td>
    




<table width="97%" height="auto" border="0" align="center">
<tr >
  <td height="30" bgcolor="#2F3AA4"  background="images/bgBoxCategory.png"> 
  
	<a href='<?php
echo $LinkKanalNya ?>' class="box_title_2"> <font size="-5"> + </font> <?php
echo $SubKanal_Keterangan;?>  &nbsp;  </a>
 
 
 

</td>
</tr>
<tr valign="top">
<td valign="top">
    



<!-- START BOX ITEM --->
<table width='98%' height='100%' align='center' cellpadding=0 cellspacing=0 >
<tr height='100%'>
<?php
$jml_item_line12 = "1"; /* Jumlah  perbaris */
$lebar_box2 = "100%";

$kolom2=1;

$idkategori = $row_box_kanal->id;
$dataPerPage = "4";
$sql_news_item =  list_news_item_by_kategori_publik( $tbl_news, $idkategori , $dataPerPage );

while( $row_news_item = mysql_fetch_object($sql_news_item)){

$Link_Judul = potong_judul($row_news_item->judul);
$id = $row_news_item->id;
$id_excp = $row_news_item->id;

$idkategori = $row_news_item->idkategori;
$idkategorisub = $row_news_item->idkategorisub;
 
$HitungSubKategori = AmbilJumlahTotalnewsKategoriSub_ByKategori( $tbl_newskategorisub, $idkategori );

if($HitungSubKategori==0){
	$detail_kanal_news = Detail_Kanalnews_Publish( $tbl_newskategori , $idkategori );
	$SubKanal_Keterangan = strtolower($detail_kanal_news->keterangan);
}else{
	$detail_subkanal_news = Detail_SubKanalnews_Publish( $tbl_newskategorisub , $idkategorisub );
	$SubKanal_Keterangan = strtolower($detail_subkanal_news->keterangan);
}

	$judul_substr_item = potong_judul($row_news_item->judul);
	$link_news_item = "$link_host"."read-news-$row_news_item->idkategori-$row_news_item->idkategorisub-$row_news_item->id-$judul_substr_item"."$extention";

?>




<td width='<?php
echo $lebar_box2 ?>' valign='top'>



<div class="box_item">




<div> 
	<div class="box_title_item"> 
 		<a href='<?php
echo $link_news_item ?>' class="box_title_item"><?php
echo $row_news_item->judul ?></a>
	</div>
	
	<?php
if($row_news_item->gambarkecil==""){ 
		}else{
	?>

		<a href='<?php
echo $link_news_item ?>'>
			<img src="<?php
echo $link_host ?><?php
echo $row_news_item->direktorigambar ?><?php
echo $row_news_item->gambarkecil ?>" width="203" height="135" border="0"  align="left" class="box_image_item">
		</a>

	<?php
} ?>	


	<div class="box_description_item">
		<?php
echo substr($row_news_item->preview,0,150); ?>...
	</div>

	<div class="box_moredetail_item">
		<a href="<?php
echo $link_news_item ?>"> <?php
echo $readmore ?> </a>
	</div>
</div>
	
	
</div>



<?php
if($kolom2==$jml_item_line12)
{
?>
</td>
</tr>
<tr height='100%'>
  <td valign='top'> <hr> </td>
</tr>
<?php
$kolom2=1;
}  
else
$kolom2++;
}

?>
</table>







</td>
</tr>
</table>
    
	
	
	
	
</td>
</tr>

<tr valign="top">
<td>
	  
</td>
</tr>
</table>

<td>
</td>
</tr>

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