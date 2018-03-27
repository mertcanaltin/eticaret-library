<?php include("header2.php");?>  
        <?php $id = g('id');?>
<?php $sayfa = Sonuc(Sorgu("SELECT * FROM urun_kategori WHERE seo = '$id'"));?>
		
		 
<div class="main-container col2-left-layout">
        
            

 
            <div class="container">
                    <div class="main">
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <div class="col-left sidebar"><div class="nav-vcontainer hidden-xs hidden-sm">
    <div class="vmegamenu-title"><h2><i class="fa fa-bars"></i>Kategoriler</h2></div>
  <div id="nav_vmegamenu" class="nav_vmegamenu">
               
			                    <?php $Sorgu = Sorgu("SELECT * FROM urun_kategori WHERE durum = '1' ORDER BY id ASC LIMIT 11");
							while($Sonuc = Sonuc($Sorgu)){?>
							<?php $varmi = Sonuc(Sorgu("SELECT * FROM alt_urun_kategori WHERE durum = '1' AND ust_id = '$Sonuc->id'"));?>
							<?php $link = Sonuc(Sorgu("SELECT * FROM alt_urun_kategori WHERE durum = '1' AND ust_id = '$Sonuc->id'"));?>
                <div id="megamenu_catid_3" class="megamenu nav-<?php echo $Sonuc->icon;?>">
<div class="level-top">
<a href="kategorim-detay-<?php echo $Sonuc->seo;?>.html"><span> <?php echo $Sonuc->kategori_adi;?></span><i class="fa fa-angle-down"></i></a>
</div><div id="dropdown3" class="dropdown" >

<div class="block1" id="block13">

	   <?php 
 $haberSorguu = mysql_query("SELECT * FROM alt_urun_kategori WHERE durum = '1' AND ust_id = '$Sonuc->id' AND sira = '1'ORDER BY id DESC limit 1");
 while($haberSonucc = mysql_fetch_object($haberSorguu)){
 ?>   



<div class="column first col1">

<div class="itemMenu level1"><a class="itemMenuName level1" href="kategori-detay-<?php echo $haberSonucc->seo;?>.html"><span><?php echo $haberSonucc->kategori_adi;?></span></a>


<div class="itemSubMenu level1">
<div class="itemMenu level2">


   <?php 
 $haberSorgu = mysql_query("SELECT * FROM urunler WHERE durum = '1' AND altkategori = '$haberSonucc->id' ORDER BY id DESC limit 5");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   



<a class="itemMenuName level2" href="urun-detay-<?php echo $haberSonuc->seo;?>.html"><span><?php echo $haberSonuc->adi;?></span></a>




     <?php }?>





</div>







</div>









</div>










</div>



     <?php }?>
	
	 
	 
	 
	  <?php 
 $haberSorgum = mysql_query("SELECT * FROM alt_urun_kategori WHERE durum = '1' AND ust_id = '$Sonuc->id' AND sira = '2'ORDER BY id DESC limit 1");
 while($haberSonucm = mysql_fetch_object($haberSorgum)){
 ?>   


<div class="column first col1">

<div class="itemMenu level1"><a class="itemMenuName level1" href="kategori-detay-<?php echo $haberSonucm->seo;?>.html"><span><?php echo $haberSonucm->kategori_adi;?></span></a>


<div class="itemSubMenu level1"><div class="itemMenu level2">


 <?php 
 $haberSorgu = mysql_query("SELECT * FROM urunler WHERE durum = '1' AND altkategori = '$haberSonucm->id' ORDER BY id DESC limit 5");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   

<a class="itemMenuName level2" href="urun-detay-<?php echo $haberSonuc->seo;?>.html"><span><?php echo $haberSonuc->adi;?></span></a>




     <?php }?>


</div></div>









</div>










</div>



     <?php }?>
	 
	 
	 
	 
	  <div class="clearBoth"></div>
	 
      <?php 
 $haberSorguz = mysql_query("SELECT * FROM alt_urun_kategori WHERE durum = '1' AND ust_id = '$Sonuc->id' AND sira = '3'ORDER BY id DESC limit 1");
 while($haberSonucz = mysql_fetch_object($haberSorguz)){
 ?>   



<div class="column last col2">
<div class="itemMenu level1">





<a class="itemMenuName level1" href="kategori-detay-<?php echo $haberSonucz->seo;?>.html"><span><?php echo $haberSonucz->kategori_adi;?></span></a>



<div class="itemSubMenu level1"><div class="itemMenu level2">

 <?php 
 $haberSorgu = mysql_query("SELECT * FROM urunler WHERE durum = '1' AND altkategori = '$haberSonucz->id' ORDER BY id DESC limit 5");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   

<a class="itemMenuName level2" href="urun-detay-<?php echo $haberSonuc->seo;?>.html"><span><?php echo $haberSonuc->adi;?></span></a>




     <?php }?>



</div></div>















</div>









</div>



     <?php }?>


 <?php 
 $haberSorgut = mysql_query("SELECT * FROM alt_urun_kategori WHERE durum = '1' AND ust_id = '$Sonuc->id' AND sira = '4'ORDER BY id DESC limit 1");
 while($haberSonuct = mysql_fetch_object($haberSorgut)){
 ?>   


<div class="column last col2">
<div class="itemMenu level1">





<a class="itemMenuName level1" href="kategori-detay-<?php echo $haberSonuct->seo;?>.html"><span><?php echo $haberSonuct->kategori_adi;?></span></a>



<div class="itemSubMenu level1"><div class="itemMenu level2">



 <?php 
 $haberSorgu = mysql_query("SELECT * FROM urunler WHERE durum = '1' AND altkategori = '$haberSonuct->id' ORDER BY id DESC limit 5");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   

<a class="itemMenuName level2" href="urun-detay-<?php echo $haberSonuc->seo;?>.html"><span><?php echo $haberSonuc->adi;?></span></a>




     <?php }?>




</div></div>















</div>









</div>



     <?php }?>




<div class="clearBoth"></div>








</div>












</div></div>


	<?php } ?>

</div>
</div>
<script type="text/javascript">
//<![CDATA[
var MEGAMENU_EFFECT = 0;

//]]>
</script>
<br><br><br><br><br><br><br><br><br><br><br>
<div class="block_compares">
<div class="bx-title">
    <div class="bg-title">
        <h2><i class="fa fa-bookmark"></i>                    </h2>
    </div>
    <div class="block-content">
            <p class="empty"></p>
        </div>
</div>
</div>

 

</div>
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                
                                <div class="col-main">
                                                                        <div class="page-title category-title">
        <h1><?php echo $sayfa->kategori_adi;?></h1>
</div>


    <p class="category-image"><img src="uploads/urunkategori/<?php echo $sayfa->resim;?>" alt="<?php echo $sayfa->adi;?>" title="<?php echo $sayfa->adi;?>"></p>

    <div class="category-products">
    
                <ol class="products-list" id="products-list">
				
				
					       <?php $USorgu = Sorgu("SELECT * FROM urunler WHERE durum = '1' AND kategori = '$sayfa->id' ORDER BY tarih DESC");
								   while($USonuc = Sonuc($USorgu)){?>  	
				
				
				<?php $ys = Sorgu("SELECT * FROM urun_yorum WHERE urun_id = '$USonuc->id'");?>
            <li class=" item odd">
        <div class="row">
            <div class=" col-sm-4 col-md-4 col-sms-6 col-smb-12">
                
                    <div class="box-images">
                        <div class="imageslider">
                        <a href="urun-detay-<?php echo $USonuc->seo;?>.html" title="" class="product-image"><img src="uploads/urunler/<?php echo $USonuc->resim;?>" width="232" height="232" alt="" /></a>
                           	<?php echo $USonuc->yeni == 'Evet' ? '<span class="icon-new">Yeni</span>	' : null; ?>                      </div>
                        
                    </div>
                    
                
            </div>
            <div class="product-shop col-sm-8 col-md-8 col-sms-6 col-smb-12">
                <div class="f-fix">
                                        <h2 class="product-name"><a href="urun-detay-<?php echo $USonuc->seo;?>.html" title=" "><?php echo $USonuc->adi;?> </a></h2>
        							    <div class="ratings">
                    <div class="rating-box">
					
					
					
					
					
					
					
					<?php $YorumVarmi = Sonuc(Sorgu("SELECT * FROM urun_yorum WHERE durum = '1' AND urun_id = '$USonuc->id'"));?>
											<?php if($YorumVarmi > 0){?>
												<?php $YSorgu = Sorgu("SELECT * FROM urun_yorum WHERE durum = '1' AND urun_id = '$USonuc->id' ORDER BY id DESC");
												$ytoplam = 0;
												$ysay = 0;
												while($YSonuc = Sonuc($YSorgu)){?>
												<?php $ytoplam+=$YSonuc->puan;?>
												<?php $ysay++;?>
												<?php }?>
											<?php $yorumorani = ($ytoplam) / ($ysay*5) * 100;?>
											<?php 
											if($yorumorani <= 20){
												echo '
																
                <div class="rating" style="width:20%"></div>
												';
											}elseif($yorumorani <= 30){
												echo '
																
                <div class="rating" style="width:30%"></div>
												';
											}elseif($yorumorani <= 40){
												echo '
															
                <div class="rating" style="width:40%"></div>
												';
											}elseif($yorumorani <= 50){
												echo '
																
                <div class="rating" style="width:50%"></div>
												';
											}elseif($yorumorani <= 60){
												echo '
																
                <div class="rating" style="width:60%"></div>
												';
											}elseif($yorumorani <= 70){
												echo '
																
                <div class="rating" style="width:70%"></div>
												';
											}elseif($yorumorani <= 80){
												echo '
																
                <div class="rating" style="width:80%"></div>
												';
											}elseif($yorumorani <= 90){
												echo '
																
                <div class="rating" style="width:90%"></div>
												';
											}elseif($yorumorani <= 100){
												echo '
																
                <div class="rating" style="width:1000%"></div>
												';
											}
											?>
											
											<?php }else{?>
														
                <div class="rating" style="width:0%"></div>
											<?php }?>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
	
            </div>
         <p class="rating-links">
            <a href="#">Yorum Sayısı (<?php echo mysql_num_rows($ys);?>)</a>
  
           
        </p>
    </div>                      

                        
   <div class="price-box">
                                            
                     <?php if($USonuc->indirim == "1"){?>      

                            <p class="special-price">
                    <span class="price-label">İndirimli Fiyatı</span>
                <span class="price" id="product-price-17">
                   <?php echo number_format($USonuc->ifiyat, 2, ',', '.'); ?>   ₺             </span>
                </p>
                        <p class="old-price">
                <span class="price-label">Eski Fiyatı:</span>
                <span class="price" id="old-price-17">
                   <?php echo number_format($USonuc->fiyat, 2, ',', '.'); ?>  ₺              </span>
            </p>
        <?php }elseif($USonuc->indirim == "0"){?>	
                  <p class="special-price">
                    <span class="price-label">Fiyat</span>
                <span class="price" id="product-price-17">
                   <?php echo number_format($USonuc->fiyat, 2, ',', '.'); ?>   ₺             </span>
                </p>
                     
        	<?php }?>
        </div>

						

                    <div class="desc std">
                                              <?php echo substr($USonuc->aciklama,0,250);?>            <a href="urun-detay-<?php echo $USonuc->seo;?>.html" title=" " class="link-learn">Detay</a>
                    </div>
                    
                    <div class="actions">
          
									<ul class="add-to-links">
																					<li><p><button type="button" title="Sepete Ekle" class="button btn-cart" onclick="setLocation('urun-detay-<?php echo $USonuc->seo;?>.html')"><span><span><i class="fa fa-shopping-cart" style="font-size: 16px; vertical-align:middle;"></i></span></span></button></p></li>
																																		<li><a href="?kekle=<?php echo $USonuc->id;?>" class="link-compare"><i class="fa fa-compress"></i></a></li>
																																		<li><a href="urun-detay-<?php echo $USonuc->seo;?>.html" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
																			
					</ul>
                    </div>
                </div>
            </div> </div> 
        </li>
           
		   
		   
		      <?php }?> 
		   
		   
		   
		   
		   
		   
		   
		   
                </ol>

    </div>
    
    

    </div>
</div>
    </div>
</div>
<script type="text/javascript">
    
</script>
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
<?php include("footer.php");?>
	