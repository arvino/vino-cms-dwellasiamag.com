<?php
date_default_timezone_set('Asia/Jakarta');

$Config_Charset = "utf-8";
$Config_CompanyName = " Dwell Asia - MPG Media";
$Config_SystemUrl = $link_host;
$Config_Domain = "dwellasiamag.com";

$tagline = "";

if($_SERVER['HTTP_HOST']==$Config_Domain || $_SERVER['HTTP_HOST']=="www." . $Config_Domain)  {
	$link_host = "http://" . $_SERVER['HTTP_HOST'] ."/";
	$server ='localhost';
}else{
	$link_host = "http://" . $_SERVER['HTTP_HOST'] ."/dwellasiamag.com/";
	$server ='localhost';
}

$extention = ".dwellasia.magz";
$link_menu = "/";
$dir_admin = "webadmin/";

$server ='localhost';
$db_user ='root';
$db_pass ='1q2w3e4r5t';
$db_name ='k8184553_dadb';

$dbh=mysql_connect ("$server", "$db_user", "$db_pass") or die ('Cannot connect to database because : ' . mysql_error());
mysql_select_db ("$db_name"); 

/* Tabel Users */
$tbl_users = "users";
$tbl_usersgroups = "usersgroups";
$tbl_usershistoriakses = "usershistoriakses";
$tbl_usersroles = "usersroles";
$tbl_userstokens = "userstokens";
$tbl_usersfiles = "usersfiles";

/* Tabel Public Users */
$tbl_publicusers = "publicusers";
$tbl_publicusers_historiakses = "publicusershistoriakses";


/* Tabel Berita */
$tbl_news = "berita";
$tbl_newsfile = "beritafile";
$tbl_newskategori = "beritakategori";
$tbl_newskategorisub = "beritakategorisub";
$tbl_newskomentar = "beritakomentar"; 


/* Tabel Counter */
$tbl_counter_onlinevisitor = "counter_onlinevisitor";
$tbl_counter_web = "counter_web";


/* Tabel Newsletter */
$tbl_newsletter = "newsletter"; 

/* Tabel Subscription */
$tbl_subscription = "subscription";
 
/* Tabel Otherpage */
$tbl_otherpage = "otherpage";
$tbl_otherpagefile = "otherpagefile";
$tbl_otherpagekategori = "otherpagekategori";
$tbl_otherpagekategorisub = "otherpagekategorisub";

/* Tabel Banner */
$tbl_banner = "banner";
$tbl_bannerkategori = "bannerkategori";
$tbl_bannerkategorisub = "bannerkategorisub";
$tbl_bannerlog = "bannerlog";

$tglkemarin = date("Y-m-d",mktime (0,0,0, date("m"), date("d")-1, date("Y")));

$tanggalhariini = date('Y-m-d');
$jamsaatini = date('H:i:s');

$skr = 	date("m/d/Y H:i:s"); 
$timestamp = strtotime($skr);
$timestamp = $timestamp+18000;

$time_unix = date("Y-m-d H:i:s");
$time_unix = strtotime($time_unix);
$time_unix = $time_unix-10000;
$time_unix = date("Y-m-d H:i:s",$time_unix);
$time_unixS = strtotime($time_unix);

$time_now = date('YmdHis');

$read_more = "read more...";

$potong_preview = "100";

$titlewebsites ="Dwell Asia Magazine";
$titlewebadmin="Dwell Asia - Web Site Administrator";

$META_CONTENT_TYPE = "text/html; charset=$Config_Charset";
$META_CONTENT_LANGUAGE = "en-us";
$META_PAGE_REFRESH = "";
$META_AUTHOR = "Web developer by Arvino Zulka Harahap";
$META_DISTRIBUTION = "global";
$META_GENERATOR = "Dwell Asia, web master by Arvino Zulka Harahap";
$META_REVISIT = "1 days";
$META_LANGUAGE = "english";
$META_VERIFY_NAME = "dwellasiamag.com";
$META_VERIFY_CONTENT = "dwellasiamag.com";

$META_DESCRIPTION = "";

$META_KEYWOARD = "homes, modern, home, architecture, design, publication, 
prefab, pre-fab, renovate, green building, sustainable, contemporary, style, house, houses, 
reviews, event, exhibition, furniture, modern furniture, architects, architect, magazine, modernism, 
green architecture, The Dwell Home, nice modernist, building materials, photography, pritzker prize, 
modern furniture, prefab homes, prefabricated housing, kitchen, bathroom, architectural plans, modern design news, design news, 
modern blog, modern design blog, modern architects, modern architecture, web master by Arvino Zulka Harahap, 
julius ruslan, denise tjokrosaputro, petrina leong, 
Chairman : Julius Ruslan , Chief Executive Officer : Denise Tjokrosaputro , Co Publisher : Petrina Leong , 
Web Master : Arvino Zulka Harahap , Web Designer : Maria Gadis
";

$META_COPYRIGHT = "Dwell Asia Magazine";
$META_RATING = "1";
$META_TITLE_ALTERNATE = "$Config_CompanyName";
$META_LINK_ALTERNATE = "$Config_SystemUrl/rss/index.php";
$META_IMAGESRC = $link_host . "images/logo_dwellasiamag.com.png";

$msg_webdev = "Hello Researchers, 
This is messages from Web Developer , 
Web Developer By : Arvino Zulka Harahap ( Web Master ) & Maria Gadis ( Web Designer ) at November 2011 - 2012 for MPG Media ( Tiga Visi Utama ) and New Media Investment Web Development Project
, If Any Error OR Critical Comment Please Contact Us To Arvino ( arvinozulka@gmail.com ) or Gadis ( dechoky@gmail.com ).
";
?>