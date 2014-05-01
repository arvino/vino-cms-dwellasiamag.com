<?php
session_start(); 
include "sc_session.php";
include("kelas_function.php");
?>
<?php
if($_SERVER['HTTP_HOST']=="dwellasiamag.com"){
	$link_host = "http://" . $_SERVER['HTTP_HOST'] ."/";
}else{
	$link_host = "http://" . $_SERVER['HTTP_HOST'] ."/client/mpgmedia.co.id/dwellasiamag.com/docs/";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include('head_meta_tags.php'); ?>
<?php
include('head.php'); ?>
</head>
<body id="dwell">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="wrapper" class="themagazine zoneLayout1 landing">
<?php include('section_header.php'); ?>
<?php include('section_content_section.php'); ?>
<?php include('section_footer.php'); ?>
</div>
<div style="position: absolute; left: -999px; top: -999px; font-size: 11px; font-weight: normal; font-family: Tahoma,Arial,san-serif; width: auto; white-space: nowrap;">Newsletters</div>
</body>
</html>