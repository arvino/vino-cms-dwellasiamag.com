<?php
include"galeri_form_search.php";?>
<br>
<br>

<table class='tabelform' width='100%' cellspacing='1' cellpadding='1'>
  <tr>
    <td>
	
	<div id='menunavigasi_vertikal' class='menunavigasi_vertikal'>
	<ul>
		<li><a href='galeri_kanal.php'> ENTRY SECTION</a></li>
	</ul>
	</div>
	
	</td>
  </tr>
</table>
<br>
<br>
<table class='tabelform' width='100%' cellspacing='1' cellpadding='1'>
<tr class='judulform'>
    <td class='judulform'> SECTION </td>
</tr>

  <tr>
    <td>
<div id='menunavigasi_vertikal' class='menunavigasi_vertikal'>
	<ul>
	
<?php
$resultkategorigaleri = Select_All_Kategori_galeri_By_Urutan( $tbl_galerikategori );
while ($datakategorigaleri = mysql_fetch_array($resultkategorigaleri)){

$idkategori = $datakategorigaleri['id'];
$namakategori = $datakategorigaleri['keterangan'];
$namakategori = strtoupper($namakategori);
?>
<li><a href='galeri_subkanal.php?idkategori=<?php
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

