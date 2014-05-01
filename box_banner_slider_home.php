
<div class="wrap" id="headering">
	    <div style="width:980px" class="header1">
			<div id="Mod22" class="ja-moduletable moduletable  clearfix">
						<div class="ja-box-ct clearfix">
		
    <div class="djslider-loader" id="djslider-loader22" style="background: none repeat scroll 0% 0% transparent;">
	
    <div class="djslider" id="djslider22" style="visibility: visible; opacity: 1; display: block;">
        <div class="slider-container" id="slider-container22">
        	<ul id="slider22" style="position: relative; left: -3015px; width: 5025px;">

<?php
/* Seleksi banner slider idkategori=9 idsubkategori=0 */
	$dataPerPage = 5;
	$no_banner = 1;
	$result_banner_item = Show_banner($tbl_banner, $idkategori=9, $idkategorisub=0, $dataPerPage );
	while($row_banner_item = mysql_fetch_object($result_banner_item)){
	$judul_substr_item = potong_judul($row_banner_item->judul);
	$link_banner = "$link_host"."banner-$row_banner_item->id-detail"."$extention";
/*
RewriteRule ^banner-([0-9]+)-detail\.surfaceasia.magz$ page_banner_detail.php?modul=banner&id=$1
*/
?>
 <li>
 <a target="<?php
echo $row_banner_item->target ?>" href="<?php
echo $link_banner ?>">
	 <img  src="<?php
echo $link_host ?><?php
echo $row_banner_item->direktorigambar ?><?php
echo $row_banner_item->namafile ?>">
 </a>
					 
							

<!-- Slide description area: START -->
 						<div class="slide-desc">
									<div class="slide-title">
										<a target="<?php
echo $row_banner_item->target ?>" href="<?php
echo $link_banner ?>" class="slide-title">										
											<?php
echo strtoupper($row_banner_item->judul) ?>							
										</a>								
									</div>
									 
						</div>
 
 <!-- Slide description area: END -->





					</li>
<?php
$no_news++;
} 
?>
                          			 
                        	</ul>
        </div>
        
        
        <div class="navigation-container" id="navigation22" style="height: 35px;">
        	<a class="prev-button" id="prev22" href="javascript:void(0)"><img alt="Previous" src="<?php
echo $link_host ?>images/prev.png"></a>
			<a class="next-button" id="next22" href="javascript:void(0)"><img alt="»" src="<?php
echo $link_host ?>images/next.png"></a>
			<img alt="Play" src="<?php
echo $link_host ?>images/play.png" class="play-button" id="play22" style="visibility: hidden; opacity: 0;">
			<img alt="Pause" src="<?php
echo $link_host ?>images/pause.png" class="pause-button" id="pause22" style="visibility: hidden; opacity: 0; display: none;">
        </div>
        
        
    </div>
	</div>
	
	<div style="clear: both"></div>		</div>
    </div>
	
    </div>
	
	</div>

