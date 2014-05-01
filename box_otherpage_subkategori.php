<?php
$idkategori = $_GET['idkategori'];
$idkategorisub = $_GET['idkategorisub'];

$result_box_subkanal = Select_All_SubKategori_otherpage_By_Urutan( $tbl_otherpagekategorisub, $idkategori );
 
/* Select Kanal Yang Tampil Di Home Page */
$jml_item_line1 = "1";
$lebar_box = "100%";
?>
<table width='100%'  align='center' cellpadding=0 cellspacing=0 >
<tr height='100%'>
<?php
$kolom=1;
while($row_box_subkanal = mysql_fetch_object($result_box_subkanal))	{
$SubKanal_Id = $row_box_subkanal->id;
			
$SubKanal_Keterangan = $row_box_subkanal->keterangan;
$SubKanal_Keterangan  = strtoupper($SubKanal_Keterangan );
$judulsubstrkanal= potong_judul( $SubKanal_Keterangan );
 

$idkategori = $row_box_subkanal->idkategori;
$link_news_subkanal  = "$link_host" . "otherpage-subcategory-$idkategori-$SubKanal_Id-$judulsubstrkanal"."$extention";

?>

<td width='<?php
echo $lebar_box ?>'  valign='top'>


<table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
              <td width="2"> </td>
              <td>
					<div class="kategori_title"> 
					
					<a href='<?php
echo $link_news_subkanal ?>' class='kategori_title'> <?php
echo $SubKanal_Keterangan ?> </a>
					
					</div>
                				
			  </td>
              <td width="2" background="<?php
echo $link_host ?>images/box_plain_shadow_2/box_plain_shadow_2_r9_c6.png"> </td>
            </tr>
          </table>



<table width="100%"  border="0" cellspacing="0" cellpadding="0">
    <tr valign="top">
      <td width="1"> </td>
      <td>
        
		
		
		
		
		
		
    </tr>
    <tr valign="top">
      <td width="1" height="8"></td>
      <td> </td>
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