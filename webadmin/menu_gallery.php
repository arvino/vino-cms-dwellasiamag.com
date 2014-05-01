<?php
include"gallery_form_search.php";?>
<br>
<br>
<?php
$KodeKeamananhalaman  = "token_gallery";
$KodeKeamananhalaman_Keterangan = "ACCESS DENIED !";
if ((!in_array($KodeKeamananhalaman , $halamandiizinkan) OR !isset($KodeKeamananhalaman ))) {
		
}else{

?>
<table class='tabelform' width='100%' cellspacing='1' cellpadding='1'>
  <tr>
    <td>
	
	<div id='menunavigasi_vertikal' class='menunavigasi_vertikal'>
	<ul>
		<li><a href='gallery_kanal.php'> ENTRY SECTION</a></li>
	</ul>
	</div>
	
	</td>
  </tr>
</table>
<br>
<table class='tabelform' width='100%' cellspacing='1' cellpadding='1'>
<tr class='judulform'>
    <td class='judulform'>SECTION</td>
</tr>

  <tr>
    <td>
<div id='menunavigasi_vertikal' class='menunavigasi_vertikal'>
	<ul>
	
<?php
$resultkategorigallery = Select_All_Kategori_gallery_By_Urutan( $tbl_gallerykategori );
while ($datakategorigallery = mysql_fetch_array($resultkategorigallery)){

$idkategori = $datakategorigallery['id'];
$namakategori = $datakategorigallery['keterangan'];
$namakategori = strtoupper($namakategori);
?>
<li><a href='gallery_subkanal.php?idkategori=<?php
echo $idkategori ?>'> <?php
echo $namakategori ?> </a></li>
<?php
}
?>
 

	</ul>
</div>
	
	</td>
  </tr>
</table>
<br>
<?php
} 
?>
