<?php
session_start(); 
include "sc_session.php";
include("kelas_function.php");
?>
<?php
$id = $_GET['id']; /* periksa id item */
$idkategori = $_GET['idkategori']; /* periksa id kategori */
$idkategorisub = $_GET['idsubkategori']; /* periksa id sub kategori */
$detail_otherpage_kanal = Detail_Kanalotherpage_Publish( $tbl_otherpagekategori , $idkategori );
$detail_otherpage_subkanal = Detail_SubKanalotherpage_Publish( $tbl_otherpagekategorisub , $idkategorisub );
$detail_otherpage_item123 = ListDetail_Item_otherpage_Kategori( $tbl_otherpage, $idkategori, $idkategorisub );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include('head_meta_tags.php'); ?>
<?php
include('head.php');?>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<div id="wrapper">
<?php include('section_header.php');?>
<?php include('section_content_otherpage_subsection.php');?>
<?php include('section_footer.php');?>
</div>
</body>
</html>