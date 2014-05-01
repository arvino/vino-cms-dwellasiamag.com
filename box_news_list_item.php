 
<?php
$kolom=1;
while($row_news_item = mysql_fetch_object($result_news_item)){

$Link_Judul = potong_judul($row_news_item->judul);
$id = $row_news_item->id;
$idkategori = $row_news_item->idkategori;
$idkategorisub = $row_news_item->idkategorisub;

$HitungSubKategori = AmbilJumlahTotalnewsKategoriSub_ByKategori( $tbl_newskategorisub, $idkategori );

if($HitungSubKategori==0){/* Jika tidak ada sub kanal news arahkan ke subkanal langsung */  	
$detail_kanal_news = Select_Detail_Kategori_news( $tbl_newskategori, $idkategori );
$SubKanal_Keterangan = strtolower($detail_kanal_news->keterangan);
$Keterangan_Kanal = $detail_kanal_news->keterangan;
}else{
$detail_subkanal_news = Detail_SubKanalnews_Publish( $tbl_newskategorisub , $idkategorisub );
$SubKanal_Keterangan = strtolower($detail_subkanal_news->keterangan);
$Keterangan_Kanal = $detail_subkanal_news->keterangan;
}

$judul_substr_item = potong_judul($row_news_item->judul);
$link_news_item = "$link_host"."read-news-$row_news_item->idkategori-$row_news_item->idkategorisub-$row_news_item->id-$judul_substr_item"."$extention";

?>
 

<div>

<?php
if($row_news_item->gambarbesar !=''){
?>
	<div class="item_image">
		<a href="<?php
echo $link_news_item ?>" > 
		<img src="<?php
echo $link_host ?><?php
echo $row_news_item->direktorigambar ?><?php
echo $row_news_item->gambarkecil ?>"  border="0" class="item_image"> 
		</a>
	</div>
<?php
}else{
							
}
?>

	<div>
		<a href='<?php
echo $link_news_item ?>' class="item_title">
			<?php
echo  $row_news_item->judul ?>
		</a>
	</div>

 

	<div>
	<?php
echo bulanenglish($row_news_item->tgltampil) ?> / <?php
echo $Keterangan_Kanal ?> / <?php
echo strtolower($row_news_item->penulis) ?>
	</div>

	 

    
	
	<div class="item_preview">
	<?php
echo substr($row_news_item->preview,0, $potong_preview ); ?>...
	</div>
</div>
						
<div style="clear:both;padding:10px;border-top:1px solid #999999;"> </div>
				  
<?php
$kolom++;
}
?>
 