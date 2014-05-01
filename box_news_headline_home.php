
<div class="wrap" id="headering">
	    <div style="width:980px" class="header1">
			<div id="Mod22" class="ja-moduletable moduletable  clearfix">
						<div class="ja-box-ct clearfix">
		
    <div class="djslider-loader" id="djslider-loader22" style="background: none repeat scroll 0% 0% transparent;">
	
    <div class="djslider" id="djslider22" style="visibility: visible; opacity: 1; display: block;">
        <div class="slider-container" id="slider-container22">
        	<ul id="slider22" style="position: relative; left: -3015px; width: 5025px;">

<?php
$dataPerPage = 5;
	$no_news = 1;
	$result_news_item_headline_home = List_Indeks_news_Item_Kategori_Homepage($tbl_news, $dataPerPage );
	while($row_news_item_headline_home = mysql_fetch_object($result_news_item_headline_home)){
	$judul_substr_item = potong_judul($row_news_item_headline_home->judul);
	$link_news_item = "$link_host"."read-news-$row_news_item_headline_home->idkategori-$row_news_item_headline_home->idkategorisub-$row_news_item_headline_home->id-$judul_substr_item"."$extention";


?>
 <li>
 <a target="_self" href="<?php
echo $link_news_item ?>">
	 <img  src="<?php
echo $link_host ?><?php
echo $row_news_item_headline_home->direktorigambar ?><?php
echo $row_news_item_headline_home->gambarsedang ?>">
 </a>
					 
							

<!-- Slide description area: START -->
 						<div class="slide-desc">
									<div class="slide-title">
										<a href=""> section </a>
										<a target="_self" href="<?php
echo $link_news_item ?>" class="slide-title">										
											<?php
echo strtoupper($row_news_item_headline_home->judul) ?>							
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
        	<a class="prev-button" id="prev22" href="javascript:void(0)"><img alt="Previous" src="http://surfaceasiamag.com//modules/mod_djimageslider/tmpl/prev.png"></a>
			<a class="next-button" id="next22" href="javascript:void(0)"><img alt="»" src="http://surfaceasiamag.com//modules/mod_djimageslider/tmpl/next.png"></a>
			<img alt="Play" src="http://surfaceasiamag.com//modules/mod_djimageslider/tmpl/play.png" class="play-button" id="play22" style="visibility: hidden; opacity: 0;">
			<img alt="Pause" src="http://surfaceasiamag.com//modules/mod_djimageslider/tmpl/pause.png" class="pause-button" id="pause22" style="visibility: hidden; opacity: 0; display: none;">
        </div>
    </div>
	</div>
	
	<div style="clear: both"></div>		</div>
    </div>
	
    </div>
	
	</div>

