<?php
$dataPerPage = 3;
$result_banner_item = Show_banner($tbl_banner, $idkategori=6, $idkategorisub=0, $dataPerPage );
while($row_banner_item = mysql_fetch_object($result_banner_item)){
$judul_substr_item = potong_judul($row_banner_item->judul);
$link_banner = "$link_host"."banner-$row_banner_item->id-detail"."$extention";
?>
<div id="banner_siderbar_covermagz_item">
	 <a target="<?php
echo $row_banner_item->target ?>" href="<?php
echo $link_banner ?>">
		<img src="<?php
echo $link_host ?><?php
echo $row_banner_item->direktorigambar ?><?php
echo $row_banner_item->namafile ?>" alt="<?php
echo $row_banner_item->judul ?>" style="margin-left:2px;" width="100px">
	</a>
</div>
<a id="banner_covermagz_inprint"> GET DWELL ASIA  </a>
<a id="banner_covermagz_indigital" href="<?php echo $link_host?>in-print<?php echo $extention?>"> IN PRINT <font size="1"> > </font> </a>
<a id="banner_covermagz_other" href="<?php echo $link_host?>in-digital<?php echo $extention?>">  IN DIGITAL <font size="1"> > </font> </a>
<a id="banner_covermagz_other" href="<?php echo $link_host?>newsletter-<?php echo $extention?>">  NEWSLETTERS <font size="1"> > </font> </a>
<?php
} 
?>
<!-- BANNER SIDEBAR COVERMAGZ -->