<table width='100%' height='100%' align='center' cellpadding=0 cellspacing=0 >
<tr height='100%'>
<?php
$kolom=1;
while($row_otherpage_item = mysql_fetch_object($result_otherpage_item)){

$Link_Judul = potong_judul($row_otherpage_item->judul);
$id = $row_otherpage_item->id;
$idkategori = $row_otherpage_item->idkategori;
$idkategorisub = $row_otherpage_item->idkategorisub;

$HitungSubKategori = AmbilJumlahTotalotherpageKategoriSub_ByKategori( $tbl_otherpagekategorisub, $idkategori );

if($HitungSubKategori==0){/* Jika tidak ada sub kanal otherpage arahkan ke subkanal langsung */  	
$detail_kanal_otherpage = Select_Detail_Kategori_otherpage( $tbl_otherpagekategori, $idkategori );
$SubKanal_Keterangan = strtolower($detail_kanal_otherpage->keterangan);
$Keterangan_Kanal = $detail_kanal_otherpage->keterangan;
}else{
$detail_subkanal_otherpage = Detail_SubKanalotherpage_Publish( $tbl_otherpagekategorisub , $idkategorisub );
$SubKanal_Keterangan = strtolower($detail_subkanal_otherpage->keterangan);
$Keterangan_Kanal = $detail_subkanal_otherpage->keterangan;
}

$judul_substr_item = potong_judul($row_otherpage_item->judul);
$link_otherpage_item = "$link_host"."view-otherpage-$row_otherpage_item->idkategori-$row_otherpage_item->idkategorisub-$row_otherpage_item->id-$judul_substr_item"."$extention";

?>
<td width='<?php
echo $lebar_box ?>' height='100%' valign='top' onmouseover=\"javascript:style.backgroundColor='#FFFFDD'\" onmouseout=\"javascript:style.backgroundColor=''\" >

<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
 
  <tr valign="top">
    <td width="9"> </td>
    <td >
	

<div class="box_wrapper_item">
	<div class="item_title">
	<a href='<?php
echo $link_otherpage_item ?>' class="item_title">
		<?php
echo  $row_otherpage_item->judul ?>
	</a>
	</div>
	<?php
if($row_otherpage_item->gambarbesar !=''){
	?>
								
	<a href="<?php
echo $link_otherpage_item ?>" class="item_image"> 
		<img src="<?php
echo $link_host ?><?php
echo $row_otherpage_item->direktorigambar ?><?php
echo $row_otherpage_item->gambarkecil ?>" width="100%" height="80" hspace="5" vspace="5" border="0" class="item_image"> 
	</a>
	<?php
}else{
								
	}
	?>
	<div class="item_tanggal">
	<?php
echo $Keterangan_Kanal ?>  
	</div>

	<div class="item_preview">
	<?php
echo substr($row_otherpage_item->preview,0,$potong_preview); ?>...
	</div>
							 
</div>
						

</td>
    <td width="8"> </td>
  </tr>
  <tr>
    <td  width="9" height="10"> </td>
    <td > <hr class='line_box'> </td>
    <td width="8" height="10"> </td>
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