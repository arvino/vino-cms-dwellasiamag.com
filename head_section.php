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

#floatMenu {
 		position:absolute;
		top:520px;
		bottom:200px;
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

<script language="javascript" src="javascript/jquery.dimensions.js" type="text/javascript"></script>

<script>
		
	var name = "#floatMenu";
	var menuYloc = 500;
	
	$(document).ready(function () {


		menuYloc = parseInt($(name).css("top").substring(0,$(name).css("top").indexOf("px")))
		$(window).scroll(function () { 
				offset = menuYloc+$(document).scrollTop()+"px";
				$(name).animate({top:offset},{duration:500,queue:false});
		});
		
	});
	
</script>
