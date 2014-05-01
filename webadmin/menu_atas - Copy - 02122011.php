<?php
if( $sesi_id == "" && $sesi_username == "" && $sesi_email == ""){

?>

<div id='menunavigasi_horisontal' class='menunavigasi_horisontal'>
<ul>
	<li><a href="users_register.php"  title="Users Registration Request." > Request Register </a></li>
	<li><a href="users_login.php"  title="Menu Users Login | Silahkan klik di sini untuk masuk." > Login </a></li>
	<li><a href="users_lupa_password.php" title="Menu Reset Password Users." > Reset Password </a></li>
	<li><a href="users_ganti_password.php"  title="Change Password" > Change password </a></li>
	<li><a href="users_help.php" title="Help & Guide"> Help & Guide for Users </a></li> 
</ul>     
</div>


<?php
}else{
?>


<?php
if($status_baru=="0"){

}else{


?>


<div id='menunavigasi_horisontal' class='menunavigasi_horisontal'>
	<ul>
	
<?php
$KodeKeamananhalaman  = "token_home";  
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
}else{
?>
		<li><a href="./" title="Admin Homehalaman">Home</a></li>
<?php
} ?>


<?php
$KodeKeamananhalaman  = "token_usersadmin";  
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
}else{
?>
		<li><a href="users_main.php" title="Admin halaman"> Admin </a></li>
<?php
} ?>


<?php
$KodeKeamananhalaman  = "token_publicusers";  
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
}else{
?>
		<li><a href="publicusers_main.php" title="Member halaman"> Member </a></li>	
<?php
} ?>



<?php
$KodeKeamananhalaman  = "token_otherhalaman";  
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
}else{
?>
		<li><a href="otherhalaman_main.php" title="Static halaman"> Statichalaman </a> </li>
<?php
} ?>

 
<?php
$KodeKeamananhalaman  = "token_news";  
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {

}else{
?>
		<li><a href="news_main.php" title="News Article halaman"> News Article </a></li>
<?php
} ?>


<?php
$KodeKeamananhalaman  = "token_peopledirectory";  
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
}else{
?>
		<li><a href="peopledirectory_main.php" title="Directory halaman">  Directory </a></li>
<?php
} ?>


<?php
$KodeKeamananhalaman  = "token_banner";  
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
}else{
?>
		<li><a href="banner_main.php" title="Banner halaman"> Banner </a> </li>
<?php
} ?>


<?php
$KodeKeamananhalaman  = "token_statistik";  
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
}else{
?>		
		<li><a href="statistik.php" title="Web Statistic halaman">Web Statistic</a></li>  
<?php
} ?>


<?php
$KodeKeamananhalaman  = "token_newsletter";  
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
}else{
?>		
		<li><a href="newsletter_main.php" title="Newsletter halaman"> Newsletter </a></li>  
<?php
} ?>

<?php
$KodeKeamananhalaman  = "token_subscription";  
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
}else{
?>		
		<li><a href="subscription_main.php" title="Subscription halaman"> Subscription </a></li>  
<?php
} ?>

 		
		
	</ul>   
</div>

<?php
} ?>

<?php
} ?>