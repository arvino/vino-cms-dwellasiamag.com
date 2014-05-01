<link rel="stylesheet" href="css/styles.css" type="text/css" />

<style>
#slider-berita-terkait-wrapper{
    float: right;
    margin-left: 0;
    width: 383px;
	overflow:hidden;
	z-index:9000;
}



#slider_headline_tanggal{
    color:#A9A9A9;
    font-family: Helvetica,Arial,Tahoma;
    font-size: 11px;
    margin-bottom: 1px;
    margin-top: 1px;
}

#slider-berita-terkait-title{
    color: #666666;
    font-family: Helvetica,Arial,Tahoma;
    font-size: 12px;
    margin-bottom: 1px;
    margin-top: 1px;
	border-bottom:1px solid #ccc;
	width: 80px;

}
#slider-berita-terkait-wrapper ul{
    list-style-image: url("images/ic_list_square_red.png");
    margin-left: -15px;
	z-index:9000;
}

#slider-berita-terkait-wrapper li{
    color: #666666;
    font-family: Helvetica,Arial,Tahoma;
    font-size: 14px;
    margin-bottom: 1px;
    margin-top: 1px;
	z-index:9000;
}
</style>

<link rel="stylesheet" href="css/contentslider.css" type="text/css" />

<link rel="stylesheet" href="css/contentslider.css" type="text/css" />
<link rel="stylesheet" href="css/contentslider2.css" type="text/css" />
<link rel="stylesheet" href="css/contentslider3.css" type="text/css" />

<script language="javascript" src="javascript/jquery-1.7.1.min.js" type="text/javascript" ></script>
 
<script language="javascript" src="javascript/dropdown.js" type="text/javascript"></script>
<script language="javascript" src="javascript/contentslider.js" type="text/javascript"></script>
<script language="javascript" src="javascript/contentslider2.js" type="text/javascript"></script>
<script language="javascript" src="javascript/contentslider3.js" type="text/javascript"></script>

<script>
	
	$(document).ready(function () {


	$("ul#topnav li").hover(function() { //Hover over event on list item
		$(this).css({ 'background' : '#A39D9D url(topnav_active.gif) repeat-x'}); //Add background color + image on hovered list item
		$(this).find("span").show(); //Show the subnav
	} , function() { //on hover out...
		$(this).css({ 'background' : 'none'}); //Ditch the background
		$(this).find("span").hide(); //Hide the subnav
	});
	
		//set the default location (fix ie 6 issue)
		$('.lava').css({left:$('span.item:first').position()['left']});
		
		$('.item').mouseover(function () {
			//scroll the lava to current item position
			$('.lava').stop().animate({left:$(this).position()['left']}, {duration:200});
			
			//scroll the panel to the correct content
			$('.panel').stop().animate({left:$(this).position()['left'] * (-2)}, {duration:200});
		});
		
	});
	
</script>

<style>
#content_getmagz_indigital a{
	color:#116E82;
	text-decoration:none;
	font-weight:bold;
	
}
</style>