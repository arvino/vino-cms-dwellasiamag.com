<div id="header_wrapper">

<div id="header_brand">
	<a href="<?php
echo $link_host ?>"><img src="<?php
echo $link_host ?>/images/logo2.png" width="250" align="left" /></a>
</div>

<div id="header_sideright">

  <div id="header_formsearch">
	
    <form id="search_form" action="<?php
echo $link_host ?>search-data<?php
echo $extention ?>" method="post">
	<div id="search_form_wrapper"> 
		<input id="search_input" name="form_search" type="text" onfocus="if (this.value == 'Search site...') this.value = '';" onBlur="if (this.value == '') this.value = 'Search site...';"  value="Search site..." size="20">
		<button id="search_btn" type="submit" class="submit"> GO </button>
    </div>
	</form>
	
  </div>


<?php include('box_banner_header.php'); ?>
</div>


<?php include('menu_navigasi_utama.php') ?>  

  
  
</div>

