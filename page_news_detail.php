<?php
session_start(); 
include "sc_session.php";
include("kelas_function.php");
?>
<?php
$id = $_GET['id']; /* periksa id item news*/
$idkategori = $_GET['idkategori']; /* periksa id kategori news */
$idkategorisub = $_GET['idsubkategori']; /* periksa id sub kategori news*/

$detail_news_kanal = Select_Detail_Kategori_news( $tbl_newskategori, $idkategori );
$detail_news_subkanal = Select_Detail_KategoriSub_news( $tbl_newskategorisub, $idkategorisub );
$detail_news_item = Select_Detail_Item_news($tbl_news, $id);

$newsHitKategori = newsKanalDiLihat( $tbl_newskategori, $idkategori );
$newsHitKategoriSub = newsSubKanalDiLihat( $tbl_newskategorisub, $idkategorisub );
$newsHitItem = newsDiLihat( $tbl_news, $id );

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
$titlewebsites =  $detail_news_item->judul; ?>
<?php
include('head_meta_tags.php'); ?>
<?php
include('head_detail.php'); ?>
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
<?php include('section_content_news_detail.php');?>
<?php include('section_footer.php');?>
</div>

</body>
</html>
