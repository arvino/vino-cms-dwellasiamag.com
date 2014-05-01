 
	
	
<div class="menu_section_wrapper">

<?php
$idkategori = $_GET['idkategori'];
$idkategorisub = $_GET['idkategorisub'];
$result_box_subkanal = Select_All_SubKategori_otherpage_By_Urutan( $tbl_newskategorisub, $idkategori );
 
$no_menu=1;
while($row_box_subkanal = mysql_fetch_object($result_box_subkanal))	{
$SubKanal_Id = $row_box_subkanal->id;
			
$SubKanal_Keterangan = $row_box_subkanal->keterangan;
$SubKanal_Keterangan  =$SubKanal_Keterangan;
$judulsubstrkanal= potong_judul( $SubKanal_Keterangan );
 

$idkategori = $row_box_subkanal->idkategori;
$link_news_subkanal  = "$link_host" . "news-subchannel-$idkategori-$SubKanal_Id-$judulsubstrkanal"."$extention";

if( $no_menu % 2 ) $class = "menu_section_content_1"; else $class = "menu_section_content_2";
?>
 

 			  
             
				
					<a href="<?php
echo $link_news_subkanal ?>" class="<?php
echo $class ?>"> <?php
echo $SubKanal_Keterangan ?> </a>
				
				 
 


<?php
$no_menu++;
}
?>
</div>
 

