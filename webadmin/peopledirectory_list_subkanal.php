<?php
$KodeKeamananhalaman  = "token_peopledirectory";
$KodeKeamananhalaman_Keterangan = "ACCESS DENIED !";
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
	
	include"access_denied.php";
	
}else{

?>
<table class='tabelform'  align='center'  width='100%'  cellpadding='1' cellspacing='1'>
<tr class='judulform'>
<td width='43' height="27" class='judulform'> No. </td>
<td width="671" colspan="5" class='judulform'> LIST  SUB SECTION  </td>
</tr>
<?php
$idkategori = $_GET["idkategori"];
$result = mysql_query("SELECT * FROM $tbl_peopledirectorykategorisub WHERE idkategori = '$idkategori' ORDER BY id ");

?>
<?php
$no = 1;
while($row = mysql_fetch_object($result))
{

$peopledirectory_kategori_id = $row->id;
$peopledirectory_kategori_idupline = $row->idupline;
$peopledirectory_kategori_keterangan = $row->keterangan;
$peopledirectory_kategori_keteranganinggris = $row->keteranganinggris;
$peopledirectory_kategori_urutan = $row->posisi;
$peopledirectory_kategori_urutan = $row->urutan;
$peopledirectory_kategori_homehalamantampil = $row->homehalamantampil;
$peopledirectory_kategori_menutampil = $row->menutampil;
$peopledirectory_kategori_statustampil = $row->statustampil;
$peopledirectory_kategori_imagefile = $row->imagefile;
$peopledirectory_kategori_imagelogo = $row->imagelogo;
$peopledirectory_kategori_hit = $row->hit;

if( $no % 2 ) $BG = "#EEEEEE"; else $BG = "#F7F7F7";

?>

<tr  valign='top' bgcolor="<?php
echo $BG ?>" onmouseover="this.bgColor='#FFFFD7'" onmouseout="this.bgColor='<?php
print $BG ?>'">

<td width='43'><div align="center"><?php
echo $no ?>.</div></td>
<td colspan="5"> 


<?php
if( $row->imagelogo == "" || $row->imagelogo == "none" )
{
	$Preview_Image = "<img src='../images/cancel.png' border='0'>";
	$showImg = "../images/cancel.png";
}
else
{

	$loc_root = "../";	
	$location_dir =  $loc_root . $row->imagefile;
	$image_subkanal = $location_dir . $row->imagelogo;

	$Preview_Image = "<img src='$image_subkanal' width='100' border='0'>";
	$showImg = "../images/ok.png";
}
?>

  <table width="100%"  border="0" cellspacing="0" cellpadding="0">
    <tr valign="top">
      <td width="13%">

<div class="link_action">
  <ul>
	<li> <a href='peopledirectory_subkanal.php?idkategori=<?php
echo $idkategori ?>&id=<?php
echo $row->id ?>&action=EditData' class='link_action'> EDIT </a> </li>
  </ul>
</div>
	  </td>
      <td>
	  
<div class="Font_Item_Judul">  
<?php
echo $row->keterangan ?>
</div>
Order : <?php
echo $row->urutan ?>
 

 
  	  
	  
	  
	  </td>
      <td width="15%">
	  
	  
<div class="link_delete">
  	<ul class="link_delete">
  		<li class="link_delete"><a href='#' onClick="JavaScript_Konfirmasi( <?php
echo $row->idkategori ?>,<?php
echo $row->id ?> )" class="link_delete"> Delete </a></li>
	</ul>
</div>
	  </td>
    </tr>
  </table>



<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
	
	

  

	
	
	</td>
  </tr>
<tr><td>
<hr class='line_box'>
</td></tr>  

</table></td>
</tr>


<?php
$no ++;
}
?>

</table>
<?php
} ?>