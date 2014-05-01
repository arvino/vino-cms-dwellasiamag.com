<?php
$dataPerPage = 1;
$no_banner = 1;
$result_banner_item = Show_banner($tbl_banner, $idkategori=4, $idkategorisub=0, $dataPerPage );
while($row_banner_item = mysql_fetch_object($result_banner_item)){
$judul_substr_item = potong_judul($row_banner_item->judul);
$link_banner = "$link_host"."banner-$row_banner_item->id-detail"."$extention";
?>
<div id="banner_rightside_double">
<div id="banner_rightside_double_txt"> ADVERTISING </div>

 <a target="<?php
echo $row_banner_item->target ?>" href="<?php
echo $link_banner ?>">
	 <img src="<?php
echo $link_host ?><?php
echo $row_banner_item->direktorigambar ?><?php
echo $row_banner_item->namafile ?>" alt="<?php
echo $row_banner_item->judul ?>">
 </a>

</div>

<?php
} 
?>


<?php
$dataPerPage = 1;
$no_banner = 1;
$result_banner_item = Show_banner($tbl_banner, $idkategori=5, $idkategorisub=0, $dataPerPage );
while($row_banner_item = mysql_fetch_object($result_banner_item)){
$judul_substr_item = potong_judul($row_banner_item->judul);
$link_banner = "$link_host"."banner-$row_banner_item->id-detail"."$extention";
?>
<div id="banner_rightside_double">
<div id="banner_rightside_double_txt"> ADVERTISING </div>



<?php
$FormatFileBanner = end(explode(".",  $row_banner_item->namafile));
$tipefileBanner = strtolower($FormatFileBanner);
if($tipefileBanner=="swf" OR $tipefileBanner=="SWF"){
?>

<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0"  width="300" height="300">
  <param name="movie" value="<?php
echo $link_host ?><?php
echo $row_banner_item->direktorigambar ?><?php
echo $row_banner_item->namafile ?>">
  <param name="quality" value="high">
  <embed src="<?php
echo $link_host ?><?php
echo $row_banner_item->direktorigambar ?><?php
echo $row_banner_item->namafile ?>" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"  width="300" height="300"></embed>
</object>


<?php
}else{
?>

 <a target="<?php
echo $row_banner_item->target ?>" href="<?php
echo $link_banner ?>">
	 <img src="<?php
echo $link_host ?><?php
echo $row_banner_item->direktorigambar ?><?php
echo $row_banner_item->namafile ?>" alt="<?php
echo $row_banner_item->judul ?>">
 </a>
 
<?php
} ?> 
</div>
<?php
} 
?>
