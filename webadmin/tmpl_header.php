
 
<table width="970" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
   <td width="11"><img name="frame_vinocms_r2_c2" src="images/templates/frame_vinocms_r2_c2.png" width="11" height="11" border="0" alt=""></td>
   <td background="images/templates/frame_vinocms_r2_c4.png" width="949" height="11"> </td>
   <td width="10"><img name="frame_vinocms_r2_c6" src="images/templates/frame_vinocms_r2_c6.png" width="10" height="11" border="0" alt=""></td>
  </tr>
  <tr>
   <td background="images/templates/frame_vinocms_r3_c2.png" width="11" > </td>
   <td background="images/templates/frame_vinocms_r3_c4.png">  
   
   
   
<table width="948"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr valign="top">
    <td>    


<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr valign="top">
<td width="62%">

  <div align="left">
  	<a href="<?php
echo $link_host ?><?php
echo $dir_admin ?>">
  		<img src="images/logo-web-site-administrator.png"   border="0">
	</a>	    
  </div>


</td>
<td width="12%">

</td>
<td width="26%" align="right">

<div align="right">
<div id='menunavigasi_horisontal' class='menunavigasi_horisontal'>
<ul>
<?php
if( $sesi_id == "" ){
}else{
?>




<?php
$KodeKeamananhalaman  = "token_help"; /* Token Help ? */
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
}else{
?>
		<li><a href="users_help.php" title="Help Page ( Help & Guide)"> HELP ? </a></li> 
<?php
} ?>


 


<?php
$KodeKeamananhalaman  = "token_frontpage"; /* Token Help ? */
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
}else{
?>
<li><a href="<?php
echo $link_host ?>" target="_blank" title="Go To The Front Page."> FRONT PAGE </a></li> 
<?php
} ?>


<li><a href="users_logout.php?pesan_error=LOGOUT SUCCESS."><b><u> LOGOUT </u></b> </a></li>
<?php
} ?> 
</ul>
</div>	 
</div>
</td>
</tr>
</table>


</td>
  </tr>
</table>

	 
	 
	 
	 
	 
	 
	 
	 
	 </td>
   <td background="images/templates/frame_vinocms_r3_c6.png" width="10" > </td>
  </tr>
  <tr>
   <td><img name="frame_vinocms_r4_c2" src="images/templates/frame_vinocms_r4_c2.png" width="11" height="8" border="0" alt=""></td>
   <td background="images/templates/frame_vinocms_r4_c4.png" width="10" height="8"> </td>
   <td><img name="frame_vinocms_r4_c6" src="images/templates/frame_vinocms_r4_c6.png" width="10" height="8" border="0" alt=""></td>
  </tr>
  <tr valign="top">
   <td background="images/templates/frame_vinocms_r5_c2.png" width="11"  > </td>
   <td background="images/templates/frame_vinocms_r5_c4.png"> 
   
 <?php
include"menu_atas.php";?>
 
 
  </td>
   <td background="images/templates/frame_vinocms_r5_c6.png" width="10"  > </td>
  </tr>
  <tr>
   <td><img name="frame_vinocms_r6_c2" src="images/templates/frame_vinocms_r6_c2.png" width="11" height="7" border="0" alt=""></td>
   <td background="images/templates/frame_vinocms_r6_c4.png" width="10" height="7"> </td>
   <td><img name="frame_vinocms_r6_c6" src="images/templates/frame_vinocms_r6_c6.png" width="10" height="7" border="0" alt=""></td>
  </tr>
  <tr valign="top">
   <td background="images/templates/frame_vinocms_r9_c2.png" width="11" height="19"> </td>
   <td background="images/templates/frame_vinocms_r9_c4.png">  
		