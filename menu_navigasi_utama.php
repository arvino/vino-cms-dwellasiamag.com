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
		
		$LinkSubNya  = "$link_host" . "news-subchannel-$result_kanal_menu->id-0-$LINKJUDUL_KANAL_MENU$extention";
		
		if ( ($result_kanal_menu->id==$_GET[idkategori]) ||
		($result_kanal_menu->id==$_GET[idkategori]) AND $modul=="news"){
			$libg='class="activeMenuItem2"' ;
		} else {
			$libg='' ;
		}
?>
		<li>
			<a href="<?php echo $LinkSubNya ?>" <?php echo $libg?>>
				<?php echo strtoupper($KET_MENU) ?> 
			</a> 
		</li>
<?php
}else{ 
?>

<?php
$LinkSubNya  = "$link_host" . "news-channel-$result_kanal_menu->id-$LINKJUDUL_KANAL_MENU$extention";

				
							
		if ( ($result_kanal_menu->id==$_GET[idkategori]) ||
		($result_kanal_menu->id==$_GET[idkategori]) AND $modul=="news"){
		
		
		
			if(	$request_uri == $link_host . "news-channel-1-products". $extention OR $_GET[idkategori] == "1" ){
				$libg = 'class="activeMenuItem_first"';
			}else{
				$libg = 'class="activeMenuItem2"';
			}
			
			
			 
		} else {
			$libg='' ;
		}
?>
		<li> 
				<a href="<?php echo $LinkSubNya ?>" <?php echo $libg?>> <?php echo $KET_MENU?> </a> 
								<ul>
								<?php
$sql_subkanal_menu = Select_All_SubKategori_news_By_Kategori( $tbl_newskategorisub, $idkategori );
									while($result_subkanal_menu = mysql_fetch_object( $sql_subkanal_menu)){
									$KET_SUBMENU = $result_subkanal_menu->keterangan;
								 	$LINKJUDUL_SUBKANAL_MENU = potong_judul( $KET_SUBMENU );
									$libg2='class="submenu_mainmenu"' ;
									$LinkSubNya  = "$link_host" . "news-subchannel-$result_subkanal_menu->idkategori-$result_subkanal_menu->id-$LINKJUDUL_SUBKANAL_MENU$extention";
								?>
								
										<li> <a href="<?php echo $LinkSubNya?>" <?php echo $libg2?>> <?php echo $result_subkanal_menu->keterangan?> </a> </li>
										
								 <?php
} ?>
            					 </ul>
			
		</li>
<?php
} } ?>
</ul>


 
</div>


<div id="mainmenu_sideright">
		<a id="mainmenu_newsletter" href="<?php
echo $link_host ?>newsletter-<?php
echo $extention ?>" <?php echo $newsletters_class ?>> newsletters </a>
		<a id="mainmenu_subscribe" href="<?php
echo $link_host ?>subscribe<?php
echo $extention ?>"> subscribe </a> 
</div>
 
</div>