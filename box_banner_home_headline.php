<div class="pagination" id="paginate-slider1">
</div>

<div class="sliderwrapper" id="slider1">

			
<?php
$dataPerPage = 6;
$no_banner = 1;
$result_banner_item = Show_banner($tbl_banner, $idkategori=5, $idkategorisub=0, $dataPerPage );
while($row_banner_item = mysql_fetch_object($result_banner_item)){
$judul_substr_item = potong_judul($row_banner_item->judul);
$link_banner = "$link_host"."banner-$row_banner_item->id-detail"."$extention";
?>
	 
 
	 
	 
		<div class="contentdiv">
					<div class="slide-thumbnail">
					     <a target="<?php
echo $row_banner_item->target ?>" href="<?php
echo $link_banner ?>">
						<img src="<?php
echo $link_host ?><?php
echo $row_banner_item->direktorigambar ?><?php
echo $row_banner_item->namafile ?>" alt="<?php
echo $row_banner_item->judul ?>"  title="<?php
echo $row_banner_item->judul ?>">
						</a>
					</div>
						<div class="slide-details">
							<h7><a target="<?php
echo $row_banner_item->target ?>" href="<?php
echo $link_banner ?>"> <?php
echo $row_banner_item->judul ?> </a></h7>
							<p> <?php
echo $row_banner_item->deskripsi ?>  </p>
							 
						 </div>

 
					<div class="clear"></div>
		</div>
<?php
} 
?>


</div>


<script type="text/javascript">

featuredcontentslider.init({
	id: "slider1",  //id of main slider DIV
	contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
	toc: "#increment",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
	nextprev: ["", ""],  //labels for "prev" and "next" links. Set to "" to hide.
	revealtype: "mouseover", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
	enablefade: [true, 0.2],  //[true/false, fadedegree]
	autorotate: [true, 3000],  //[true/false, pausetime]
	onChange: function(previndex, curindex){  //event handler fired whenever script changes slide
		//previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
		//curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
	}
})

</script>