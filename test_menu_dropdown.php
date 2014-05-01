<?php
session_start(); 
include "sc_session.php";
include("kelas_function.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" href="css/styles.css" type="text/css" />




<style>
#slider-berita-terkait-wrapper{
    float: right;
    margin-left: 0;
    width: 383px;
	overflow:hidden;
	z-index:9000;
}



#slider_headline_tanggal{
    color:#A9A9A9;
    font-family: Helvetica,Arial,Tahoma;
    font-size: 11px;
    margin-bottom: 1px;
    margin-top: 1px;
}

#slider-berita-terkait-title{
    color: #666666;
    font-family: Helvetica,Arial,Tahoma;
    font-size: 12px;
    margin-bottom: 1px;
    margin-top: 1px;
	border-bottom:1px solid #ccc;
	width: 80px;

}
#slider-berita-terkait-wrapper ul{
    list-style-image: url("images/ic_list_square_red.png");
    margin-left: -15px;
	z-index:9000;
}

#slider-berita-terkait-wrapper li{
    color: #666666;
    font-family: Helvetica,Arial,Tahoma;
    font-size: 14px;
    margin-bottom: 1px;
    margin-top: 1px;
	z-index:9000;
}
</style>

<link rel="stylesheet" href="css/contentslider.css" type="text/css" />

<link rel="stylesheet" href="css/contentslider.css" type="text/css" />
<link rel="stylesheet" href="css/contentslider2.css" type="text/css" />
<link rel="stylesheet" href="css/contentslider3.css" type="text/css" />

<script language="javascript" src="javascript/jquery-1.7.1.min.js" type="text/javascript" ></script>
 
<script language="javascript" src="javascript/dropdown.js" type="text/javascript"></script>

<script language="javascript" src="javascript/contentslider.js" type="text/javascript"></script>
<script language="javascript" src="javascript/contentslider2.js" type="text/javascript"></script>
<script language="javascript" src="javascript/contentslider3.js" type="text/javascript"></script>

<script>
	
	$(document).ready(function () {


	$("ul#topnav li").hover(function() { //Hover over event on list item
		$(this).css({ 'background' : '#A39D9D url(topnav_active.gif) repeat-x'}); //Add background color + image on hovered list item
		$(this).find("span").show(); //Show the subnav
	} , function() { //on hover out...
		$(this).css({ 'background' : 'none'}); //Ditch the background
		$(this).find("span").hide(); //Hide the subnav
	});
	
		//set the default location (fix ie 6 issue)
		$('.lava').css({left:$('span.item:first').position()['left']});
		
		$('.item').mouseover(function () {
			//scroll the lava to current item position
			$('.lava').stop().animate({left:$(this).position()['left']}, {duration:200});
			
			//scroll the panel to the correct content
			$('.panel').stop().animate({left:$(this).position()['left'] * (-2)}, {duration:200});
		});
		
	});
	
</script>
</head>

<body>

<div id="menuutama_wrapper">
<?php
$modul = $_GET['modul'];
$request_uri = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
?>

<div id="mainmenu_sideleft">
 

 
<ul id="pgmenu">
<?php
$sql_kanal_menu = List_MenuAtas1_Kanalnews( $tbl_newskategori );
while($result_kanal_menu = mysql_fetch_object( $sql_kanal_menu)){

$KET_MENU = $result_kanal_menu->keterangan;
$LINKJUDUL_KANAL_MENU = potong_judul( $KET_MENU );

$idkategori = $result_kanal_menu->id;
$HitungSubKategori = newsCount_KategoriSub_ByKategori( $tbl_newskategorisub, $idkategori);

if($HitungSubKategori==0){/* Jika tidak ada sub kanal berita arahkan ke subkanal langsung */
		$LinkSubNya  = "$link_host" . "news-channel-$result_kanal_menu->id-$LINKJUDUL_KANAL_MENU$extention";
		if ( ($result_kanal_menu->id==$_GET[idkategori]) ||
		($result_kanal_menu->id==$_GET[idkategori]) AND $modul=="news"){
		$libg='id ="activeMenuItem"' ;
		} else {
		$libg='id ="menulink"' ;
		}
?>
		<li>
			<a href="<?php
echo $LinkSubNya ?>" <?php echo $libg?>>
				<?php
echo strtoupper($KET_MENU) ?> 
			</a> 
		</li>
<?php
}else{ ?>

<?php
$LinkSubNya  = "$link_host" . "news-subchannel-$result_kanal_menu->id-0-$LINKJUDUL_KANAL_MENU$extention";
		if ( ($result_kanal_menu->id==$_GET[idkategori]) ||
		($result_kanal_menu->id==$_GET[idkategori]) AND $modul=="news"){
		$libg='' ;
		} else {
		$libg='' ;
		}
?>
		<li> 
				<a href="<?php
echo $LinkSubNya ?>" class="sub"> <?php echo $KET_MENU?> </a> 
								<ul>
								<?php
$sql_subkanal_menu = Select_All_SubKategori_news_By_Kategori( $tbl_newskategorisub, $idkategori );
									while($result_subkanal_menu = mysql_fetch_object( $sql_subkanal_menu)){
									$KET_SUBMENU = $result_subkanal_menu->keterangan;
								 	$LINKJUDUL_SUBKANAL_MENU = potong_judul( $KET_SUBMENU );

									$LinkSubNya  = "$link_host" . "news-subchannel-$result_subkanal_menu->idkategori-$result_subkanal_menu->id-$LINKJUDUL_SUBKANAL_MENU$extention";

								?>
								
										<li><a href="<?php echo $LinkSubNya?>"> <?php echo $result_subkanal_menu->keterangan?> </a> </li>
										
								 <?php
} ?>
            					 </ul>
			
		</li>
<?php
} } ?>
</ul>

</div>
 
</div>

</body>
</html>
