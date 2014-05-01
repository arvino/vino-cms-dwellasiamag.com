<?php
include"peopledirectory_form_search.php";?>
<br>
<br>
<table class='tabelform' width='100%' cellspacing='1' cellpadding='1'>
  <tr>
    <td>
	
	<div id='menunavigasi_vertikal' class='menunavigasi_vertikal'>
		<ul>
			<li><a href='peopledirectory_kanal.php'> SECTION </a></li>
			<li><a href='peopledirectory_subkanal.php?idkategori=1'> SUB SECTION </a></li>
			
			
			
		</ul>
	</div>
	
	</td>
  </tr>
</table>
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
$resultkategoripeopledirectory = Select_All_Kategori_peopledirectory_By_Urutan( $tbl_peopledirectorykategori );
			while ($datakategoripeopledirectory = mysql_fetch_array($resultkategoripeopledirectory)){
			
			$idkategori = $datakategoripeopledirectory['id'];
			$namakategori = $datakategoripeopledirectory['keterangan'];
			$namakategori = strtoupper($namakategori);
			?>
				<li><a href='peopledirectory_item.php?idkategori=<?php
echo $idkategori ?>&idsubkategori=0&action=ViewList'> <?php
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
<table class='tabelform' width='100%' cellspacing='1' cellpadding='1'>
  <tr>
    <td>
      <div id='menunavigasi_vertikal' class='menunavigasi_vertikal'>
        <ul>
		
          <li><a href='peopledirectory_item_lampiran.php'> LIST ALL PORTFOLIO </a></li>
         
        </ul>
    </div></td>
  </tr>
</table>

