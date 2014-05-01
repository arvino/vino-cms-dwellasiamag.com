
 
 
<div>

<div>
	<h2> <?php
echo $detail_news_item->judul ?> </h2>
</div>

 

 
	<?php
$iditem = $detail_news_item->id;
        $result_itemlampiran = ViewAll_newsItemLampiran_ByItem( $tbl_newsfile, $iditem );
    ?>
     
    <?php
/* Jika data file extra tidak ada tampilkan satu foto aja */
    if($detail_news_item->gambarbesar==''){
        $show_gambar = " ";
    }else{
        $show_gambar1 = $link_host . $detail_news_item->direktorigambar . $detail_news_item->gambarbesar;
    ?>
        <img src='<?php
echo $show_gambar1 ?>' border='0' title='<?php echo $detail_news_item->judul ?>' alt='<?php echo $detail_news_item->judul ?>' class='item_image_pagedetail'> 
    <?php
}
    ?>
 
	

		<div class="item_description_pagedetail">
			<?php
echo htmlspecialchars_decode($detail_news_item->deskripsi) ?>
		</div>

<div style="clear:both;padding:10px;"></div>


</div>

  
	
	 