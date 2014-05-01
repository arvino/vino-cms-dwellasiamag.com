<?php
session_start(); 
$sesi_id = $_SESSION['users_id'];
$sesi_idpegawai = $_SESSION['users_idpegawai'];
$sesi_username = $_SESSION['users_username'];
$sesi_email = $_SESSION['users_email'];
?>


<?php
if( $sesi_id == "" ){
header('location:users_login.php?pesan_error=PLEASE LOGIN FIRST.');
}else{
include"kelas_function.php";
?>


<html>
<head>

<?php
include"head.php"; ?>
</head>
 
<body leftmargin="0" topmargin="0" bottommargin="0"  rightmargin="0"   
style="background-image: url(images/bghalaman.png);background-repeat:no-repeat;
background-position:top;background-attachment:fixed;">


 
<?php
include"tmpl_header.php"; ?>
   
   
   <table width="100%" border="0" cellspacing="0" cellpadding="0">
     <tr>
       <td width="9" height="8"><img name="B2_Sudut_KiriAtas" src="images/box/B2_Sudut_KiriAtas.png" width="9" height="8" border="0" alt=""></td>
       <td background="images/box/B2_Batas_Atas.png"> </td>
       <td width="8" height="8"><img name="B2_Sudut_KananAtas" src="images/box/B2_Sudut_KananAtas.png" width="8" height="8" border="0" alt=""></td>
     </tr>
     <tr valign="top">
       <td background="images/box/B2_Batas_Kiri.png" width="9"> </td>
       <td background="images/box/B2_Latar.png"> <span class="JudulKanal_box1"> WEB STATISTIC</span>
           <hr class='line_box'>
           <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
             <tr>
               <td width="304">&nbsp;</td>
               <td width="21">&nbsp;</td>
               <td width="72">&nbsp;</td>
               <td width="205">&nbsp;</td>
               <td width="319" rowspan="10" valign="bottom"><?php
include "statistik_grafik.php";?></td>
             </tr>
             <tr>
               <td colspan="4">&nbsp;</td>
             </tr>
             <tr>
               <td> Today Web Visitor</td>
               <td><div align="center">:</div></td>
               <td><?php
print $hitungdatacounterhariini ?></td>
               <td><?php
print $hi_hariini ?>, <?php
print $bi_tanggalharini ?> </td>
             </tr>
             <tr>
               <td>Yesterday Web Visitor </td>
               <td><div align="center">:</div></td>
               <td><?php
print $hitungdatacounterharikemarin123 ?>&nbsp;</td>
               <td><?php
print $hi_harikemarin ?>, <?php
print $bi_tanggalharikemarin ?></td>
             </tr>
             <tr>
               <td>Yesterday Web Visitor 2 days ago</td>
               <td><div align="center">:</div></td>
               <td><?php
print $pengunjungweb2harilalu ?>&nbsp;</td>
               <td><?php
print $hi_lusakemarin ?>, <?php
print $bi_tanggallusakemarin ?>&nbsp;</td>
             </tr>
             <tr>
               <td>Yesterday Web Visitor 3 days ago</td>
               <td><div align="center">:</div></td>
               <td><?php
print $pengunjungweb3harilalu ?></td>
               <td><?php
print $hi_3harikemarin ?>, <?php
print $bi_tanggal3harikemarin ?></td>
             </tr>
             <tr>
               <td>Yesterday Web Visitor 4 days ago</td>
               <td><div align="center">:</div></td>
               <td><?php
print $pengunjungweb4harilalu ?>&nbsp;</td>
               <td><?php
print $hi_4harikemarin ?>, <?php
print $bi_tanggal4harikemarin ?></td>
             </tr>
             <tr>
               <td>Yesterday Web Visitor 5 days ago</td>
               <td><div align="center">:</div></td>
               <td><?php
print $pengunjungweb5harilalu ?></td>
               <td><?php
print $hi_5harikemarin ?>, <?php
print $bi_tanggal5harikemarin ?></td>
             </tr>
             <tr>
               <td>Yesterday Web Visitor 6 days ago</td>
               <td><div align="center">:</div></td>
               <td><?php
print $pengunjungweb6harilalu ?></td>
               <td><?php
print $hi_6harikemarin ?>, <?php
print $bi_tanggal6harikemarin ?></td>
             </tr>
             <tr>
               <td>Yesterday Web Visitors 7 days ago</td>
               <td><div align="center">:</div></td>
               <td><?php
print $pengunjungweb7harilalu ?></td>
               <td><?php
print $hi_7harikemarin ?>, <?php
print $bi_tanggal7harikemarin ?></td>
             </tr>
           </table>
 
 <?php
include"box_preview_visitor.php"?>
 
 
 </td>
       <td background="images/box/B2_Batas_Kanan.png" width="8"> </td>
     </tr>
     <tr>
       <td width="9" height="8"><img name="B2_Sudut_KiriBawah" src="images/box/B2_Sudut_KiriBawah.png" width="9" height="8" border="0" alt=""></td>
       <td background="images/box/B2_Batas_Bawah.png"> </td>
       <td width="8" height="8"><img name="B2_Sudut_KananBawah" src="images/box/B2_Sudut_KananBawah.png" width="8" height="8" border="0" alt=""></td>
     </tr>
   </table>
   
   
<?php
include"tmpl_footer.php"; ?>
</body>
</html>
<?php
} ?>