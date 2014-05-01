<?php
$idkategori = $_GET['idkategori'];
$idkategorisub = $_GET['idkategorisub'];

$result_box_kanal = Select_All_Kategori_news_By_Urutan( $tbl_newskategori );
 
/* Select Kanal Yang Tampil Di Home Page */
$jml_item_line1 = "1";
$lebar_box = "100%";
?>
<table width='98%'  align='center' cellpadding=0 cellspacing=0 >
<tr height='100%'>


<?php
$kolom=1;
while($row_box_kanal = mysql_fetch_object($result_box_kanal))	{
$Kanal_Id = $row_box_kanal->id;
			
$Kanal_Keterangan = $row_box_kanal->keterangan;
$Kanal_Keterangan  = strtoupper($Kanal_Keterangan );
$judulsubstrkanal= potong_judul( $Kanal_Keterangan );
 
/* Hitung Sub Kategori news */
$count_news_subkanal =  AmbilJumlahTotalnewsKategoriSub_ByKategori( $tbl_newskategorisub, $row_box_kanal->id );
if($count_news_subkanal==0){
	/* Jika tidak ada sub kanal - query item - arahkan ke halaman detail news */
	$idkategorisub_news = "0";
	$link_news_item = "$link_host"."news-subchannel-$row_box_kanal->id-0-$judulsubstrkanal"."$extention";

}else{
	$link_news_item = "$link_host"."news-channel-$row_box_kanal->id-$judulsubstrkanal"."$extention";
}

?>



<td width='<?php
echo $lebar_box ?>'  valign='top'>


<table border="0" cellpadding="0" cellspacing="0" width="100%">
            <!-- fwtable fwsrc="<?php
echo $link_host ?>box_plain_shadow.png" fwbase="box_plain_shadow_2.png" fwstyle="Dreamweaver" fwdocid = "1149244731" fwnested="0" -->
            <tr>
              <td width="2">&nbsp;</td>
              <td background="<?php
echo $link_host ?>images/box_plain_shadow_2/box_plain_shadow_2_r2_c5.png"> </td>
              <td width="2">&nbsp;</td>
            </tr>
            <tr>
              <td background="<?php
echo $link_host ?>images/box_plain_shadow_2/box_plain_shadow_2_r9_c4.png"> </td>
              <td background="<?php
echo $link_host ?>images/box_plain_shadow_2/box_plain_shadow_2_r9_c5.png">
                <div class="box_title_small"> 
				
				<a href='<?php
echo $link_news_item ?>' class='box_title_small'> <?php
echo $Kanal_Keterangan ?> </a>
				
				</div>
                				
			  </td>
              <td background="<?php
echo $link_host ?>images/box_plain_shadow_2/box_plain_shadow_2_r9_c6.png"> </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td background="<?php
echo $link_host ?>images/box_plain_shadow_2/box_plain_shadow_2_r16_c5.png"> </td>
              <td>&nbsp;</td>
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