<?php
$kolom_subkanal=1;
while($row_box_subkanal = mysql_fetch_object($result_box_subkanal))	{
?>

<?php
$SubKanal_Id = $row_box_kanal->id;
	$SubKanal_Keterangan = $row_box_subkanal->keterangan;
	$SubKanal_Keterangan  = strtoupper($SubKanal_Keterangan);
	$LINKJUDUL_SUBKANAL_MENU = potong_judul( $SubKanal_Keterangan );
 
	$LinkKanalNya  = "$link_host" . "news-subchannel-$row_box_subkanal->idkategori-$row_box_subkanal->id-$LINKJUDUL_SUBKANAL_MENU"."$extention";

	if ( ($row_box_subkanal->id==$_GET['idkategorisub']) ||($row_box_subkanal->id==$_GET['idkategorisub']) AND $modul=="news"){
							$cssmenu_subsection='menu_subsection_current' ;
	} else {
							$cssmenu_subsection='menu_subsection' ;
	}

?>

<a href='<?php
echo $LinkKanalNya ?>' class="<?php echo $cssmenu_subsection?>">  <?php
echo $SubKanal_Keterangan;?>  </a>

<?php
} ?>