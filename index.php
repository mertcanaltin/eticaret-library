<?php include("header.php");?>
<?php include("yanmenu.php");?>
		

				<div class="flexslider tv-nivoslider image-effect">
					<div class="ajax_loading"><i class="fa fa-spinner fa-spin"></i></div>
					<div id="tv-inivoslider" class="sliders">
					
					
					
					
							                         <?php 
 $haberSorgu = mysql_query("SELECT * FROM slider WHERE durum = 1 ORDER BY id DESC");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   
					
												<div class="nivo-item">
								<a href="#" title=""><img src="uploads/slider/<?php echo $haberSonuc->resim;?>"  title="#caption1" alt="image" /></a>	
																	<div id="caption1" class="caption-item zoomIn animated">
										<div class="TopToBottom">
											<div class="title"></div>
											<div class="description"></div>
																							<div class="readmore">
													<a href="#" title=""></a>	
												</div>
																					</div>
									</div>	
																	
							</div>
															
											
											
											
									    <?php }?>		
											
											
											
											
											
											
											
																			</div>
				</div>
				
		
</figure>
<script type="text/javascript">
jQuery( document ).ready(function($) {
	(function(selector){
		var $content = $(selector);
		$content.nivoSlider({
			slices: 15,
			boxCols: 8,
			boxRows: 4,
			startSlide: 0,
			controlNavThumbs: false,
			pauseOnHover: true,
			manualAdvance: false,
			prevText: 'Prev',
			nextText: 'Next',
			effect: 'boxRain',
			animSpeed: 500,
			pauseTime: 5000,
			controlNav: 0,
			directionNav: 1/*,
			afterLoad: function(){
				$('.ajax_loading').css("display","none");
			},     
			beforeChange: function(){ 
				$content.find('.nivo-item .title').css("top","-500px" );
				$content.find('.nivo-item .description').css("top","-1000px");
				$content.find('.nivo-item .readmore').css("top","-2000px");
			}, 
			afterChange: function(){ 
				$content.find('.nivo-item .title').css("top","330px");
				$content.find('.nivo-item .description').css("top","390px");
				$content.find('.nivo-item .readmore').css("top","250px");
			}*/
		});

	})('#tv-inivoslider');
});
</script>



        <div class="main-container col2-left-layout">
        
             
            <div class="container">
                    <div class="main">
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <div class="col-left sidebar">
<div class="onsaleslider">
	
	<div class="bx-title"><div class="bg-title"><h2 class="title"><i class="fa fa-bookmark"></i>ÇOK SATANLAR</h2></div></div>		                                        <ul class="products-grid pdt-list zoomOut play">
	       <?php $USorgu = Sorgu("SELECT * FROM urunler WHERE durum = '1' AND cok = 'Evet' ORDER BY tarih DESC");
								   while($USonuc = Sonuc($USorgu)){?>  						
												
                    <li style="-webkit-animation-delay:0ms;-moz-animation-delay:0ms;-o-animation-delay:0ms;animation-delay:0ms;" class=" item first item-animate">
			<div class="item-inner">
				<div class="box-images">
					<a href="urun-detay-<?php echo $USonuc->seo;?>.html" title="" class="product-image"><img src="uploads/urunler/<?php echo $USonuc->resim;?>" width="270" height="270" alt="" /></a>
				</div>	
				
				<?php echo $USonuc->yeni == 'Evet' ? '<span class="icon-new">Yeni</span>	' : null; ?>
				
				
				
									<ul class="add-to-links">
																					<li><p><button type="button" title="Sepete Ekle" class="button btn-cart" onclick="setLocation('urun-detay-<?php echo $USonuc->seo;?>.html')"><span><span><i class="fa fa-shopping-cart" style="font-size: 16px; vertical-align:middle;"></i></span></span></button></p></li>
																																		<li><a href="?kekle=<?php echo $USonuc->id;?>" class="link-compare"><i class="fa fa-compress"></i></a></li>
																																		<li><a href="urun-detay-<?php echo $USonuc->seo;?>.html" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
																			
					</ul>
								<div class="product-shop1">
												<h2 class="product-name"><a href="urun-detay-<?php echo $USonuc->seo;?>.html" title="<?php echo $USonuc->adi;?>"><?php echo $USonuc->adi;?></a></h2>
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

											
						
				
              
    
      
						
				</div>
			</div>
            </li>
                                           
																									
						     <?php }?>              		
										</ul>
							
												
				
				
	
                			
</div>
<script type="text/javascript">
	jQuery(document).ready(function($){
		(function(selector){
			var $content = $(selector);
			var $slider  = $('.products-grid', $content);
			var slider 	 = $slider.bxSlider({
				auto: 1, speed: 500, controls: 1, pager: 0, maxSlides: 3, slideWidth: 270, 				infiniteLoop: false,
				moveSlides:1,
				slideMargin: 0,
				autoHover: true, // stop while hover <=> slider.stopAuto(); + slider.startAuto();
			})

		})(".onsaleslider");
	});
</script>

	
<div class="block-testimonial-sidebar">			
				<div class="testimonial-title bx-title">
			<div class="bg-title"><h2><i class="fa fa-bookmark"></i>ÜRÜN YORUMLARI</h2></div>
		</div>
		<div class="testimonial-content">
			<ul id="testimonialSidebar">			
										









		                         <?php 
 $haberSorgu = mysql_query("SELECT * FROM urun_yorum WHERE durum = 1 ORDER BY id DESC");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   
										
					<li class="testimonial-list">    <?php $USorgu = Sorgu("SELECT * FROM urunler WHERE durum = '1' AND id = '$haberSonuc->urun_id' ORDER BY id DESC");
								   while($USonuc = Sonuc($USorgu)){?>  
						<div class="testimonial-content-avatar">     
							<img src="uploads/urunler/<?php echo $USonuc->resim;?>" alt="test" height="66" width="66" />							
							<div class="post-by">							
										<a href="urun-detay-<?php echo $USonuc->seo;?>.html"><p class="testimonial-author"><?php echo $USonuc->adi;?></p></a> 
										<p class="testimonial-company"><?php echo $haberSonuc->baslik;?></p>
										<p class="testimonial-date"><span class="date"><?php echo substr($haberSonuc->tarih,0,2);?>   </span>
											<span class="month"><?php echo substr($haberSonuc->tarih,3,3);?>   </span>
										</p>
										
									</div>
						    </div>
									<?php }?>					
						<div class="testimonial-sidebar-content">						
							<div class="std">							
								<a href="" title="testimonial">							    
								<?php echo $haberSonuc->yorum;?>
								</a>					
							</div>						
											
						</div>
								                    
	                    					</li>							
											
					

    <?php }?>











					
						
			</ul>
		</div>	
		
</div>

<script type="text/javascript">		  
	jQuery(document).ready(function($) {				
		$('#testimonialSidebar').bxSlider({					
			auto: true,					
			mode: 'fade',					
			speed: 600,					
			preloadImages: 'visible',					
			controls: true,						
			pager: true,				  
		});			  
	});	
</script>

<div class="blog-testimonial">

	<div class="blog-content">
		
			<div class="bx-title"><div class="bg-title"><h2 class="title"><i class="fa fa-bookmark"></i>BLOG</h2></div></div>
			<ul class="bxslider">
			
			
			
			
			
			
			                        <?php 
 $haberSorgu = mysql_query("SELECT * FROM bloglar WHERE durum = 1 ORDER BY id DESC");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   
				   
			
			
			
			
			
			
			
			
												<li class="item">
						<img  width="244" height="155" alt="blog" src="uploads/bloglar/<?php echo $haberSonuc->resim;?>" />						<div class="main-blog">
							<p class="author"><i class="fa fa-user"></i><?php echo $haberSonuc->adi;?><span class="times"><span><?php echo substr($haberSonuc->tarih,0,2);?></span><span class="month"><?php echo substr($haberSonuc->tarih,3,4);?></span></span></p>							 <a href="blog-detay-<?php echo $haberSonuc->seo;?>.html" ><span class="title"><?php echo $haberSonuc->adi;?></span></a> 													
						
						<div class="des"><?php echo substr($haberSonuc->aciklama,0,200);?>...</div>						 <p class="link-more"><a href="blog-detay-<?php echo $haberSonuc->seo;?>.html"> <i class="fa fa-arrow-circle-o-right"></i>Devamı</a></p> 					</div>
					</li>
									
									
									
									
									
									
									
									           
				                <?php }?>
									
									
									
									
									
									
									
									
										</ul>
		</div>
		</div>
<script type="text/javascript">
	jQuery(document).ready(function($){
		$('.blog-content .bxslider').bxSlider({
			minSlides: 1,
			maxSlides: 3,
			slideWidth: 270,
			slideMargin: 30,
			moveSlides:1,
			auto: 0,
			autoControls: true,
			pager: true,
			controls: true,
			//mode: 'horizontal',
			speed: 450,
			pause: 600,
			//easing: 'jswing',
			autoHover: true
		});
	});
</script>
</div>
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                
                                <div class="col-main">
<?php include("kod.php");?>
</div>
<script type="text/javascript">
//<![CDATA[
    jQuery(document).ready(function($) {

        (function(selector){
            var popupCookie = Mage.Cookies.get('popupNewsletterOff');
            if(!popupCookie || popupCookie == 'undefined'){
                var $content = $(selector);
                var popup   = $('#popup-newsletter', $content);
                var pwidth =  951;
                var pheight =  437;
                var overlay = '#363636';
                popup.width(pwidth).height(pheight)
                $content.fancybox({
                    padding: '0px',
                    transitionIn: 'fade',
                    transitionOut: 'fade',
                    // showCloseButton: false,
                    centerOnScroll: true,
                    type: 'inline',
                    overlayColor: overlay,
                    href : '#popup-newsletter',
                }).trigger('click');
                $('.subscribe-bottom input', popup).on('click', function(){
                    if($(this).parent().find('input:checked').length){
                        Mage.Cookies.set('popupNewsletterOff', true);
                    } else {
                        Mage.Cookies.set('popupNewsletterOff', undefined);
                    }
                });
            }

        })(".block-subscribe.popup");
    });
//]]>
</script>
<div class="std"><div class="home-content"><div class="featuredproduct">
	
	<div class="featured-title bx-title"><div class="bg-title"><h2 class="title">FIRSAT ÜRÜNLERİ</h2></div></div>				<div class="slide-multirows">
	
	
	
	
		       <?php $USorgu = Sorgu("SELECT * FROM urunler WHERE durum = '1' AND sicak = 'Evet' ORDER BY tarih DESC");
								   while($USonuc = Sonuc($USorgu)){?>  
	
	
	                                        <ul class="products-grid">
                    <li class="item  first  item-animate">
		<div class="item-inner">
				<div class="box-images">
					<a href="urun-detay-<?php echo $USonuc->seo;?>.html" title="" class="product-image"><img src="uploads/urunler/<?php echo $USonuc->resim;?>" width="270" height="270" alt="" /></a>
				</div>	
				
				<?php echo $USonuc->cok == 'Evet' ? '<span class="icon-sale">Popüler</span>	' : null; ?>
				
				
				<?php echo $USonuc->yeni == 'Evet' ? '<span class="icon-new">Yeni</span>	' : null; ?>
				
				
				
				
				
				
				
									<ul class="add-to-links">
																					<li><p><button type="button" title="Sepete Ekle" class="button btn-cart" onclick="setLocation('urun-detay-<?php echo $USonuc->seo;?>.html')"><span><span><i class="fa fa-shopping-cart" style="font-size: 16px; vertical-align:middle;"></i></span></span></button></p></li>
																																		<li><a href="?kekle=<?php echo $USonuc->id;?>" class="link-compare"><i class="fa fa-compress"></i></a></li>
																																		<li><a href="urun-detay-<?php echo $USonuc->seo;?>.html" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
																			
					</ul>
								<div class="product-shop1">
												<h2 class="product-name"><a href="urun-detay-<?php echo $USonuc->seo;?>.html" title="<?php echo $USonuc->adi;?>"><?php echo $USonuc->adi;?></a></h2>
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
							
				    
			

				
				</div>
				
		</div>
            </li>
                                  
                </ul>
                   <?php }?>
                				</div>
				
</div>

<script type="text/javascript">
	jQuery(document).ready(function($){
		(function(selector){
			var $content = $(selector);
			var $slider  = $('.slide-multirows', $content);
			var slider 	 = $slider.bxSlider({
				auto: 0, speed: 600, controls: 1, pager: 0, maxSlides: 4, slideWidth: 216, 				//infiniteLoop: false,
				moveSlides:1,
				slideMargin: 2,
				autoHover: true, // stop while hover <=> slider.stopAuto(); + slider.startAuto();
			})

	       

		})(".featuredproduct");
	});
</script>
</div></div>


		             
<div class="banner_content_home1">

			                         <?php 
 $haberSorgu = mysql_query("SELECT * FROM haberler WHERE id = '1'");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   
					
								
								
	   
				                
				              
<div class="banner-box banner1">
<div class="box-image"><img src="uploads/haberler/<?php echo $haberSonuc->resim;?>" alt="" /></div>
<a href="<?php echo $haberSonuc->aciklama;?>" title="Devamı">&nbsp;</a></div>


      <?php }?>
		            
                      <?php 
 $haberSorgu = mysql_query("SELECT * FROM haberler WHERE id = '2'");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   
					

<div class="banner-position1">
<div class="banner-box banner2">
<div class="box-image"><img src="uploads/haberler/<?php echo $haberSonuc->resim;?>" alt="" /></div>
<a href="<?php echo $haberSonuc->aciklama;?>" title="Devamı">&nbsp;</a></div>
  <?php }?>


                      <?php 
 $haberSorgu = mysql_query("SELECT * FROM haberler WHERE id = '3'");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   
					

<div class="banner-box banner3">
<div class="box-image"><img src="uploads/haberler/<?php echo $haberSonuc->resim;?>" alt="" /></div>
<a href="<?php echo $haberSonuc->aciklama;?>" title="Devamı">&nbsp;</a></div>

</div>


  <?php }?>





</div>




<section>
<div class="newproductslider">
	<div class="bx-title new-title"><div class="bg-title"><h2>YENİ ÜRÜNLER</h2></div></div>		
	
			                         <?php 
 $haberSorgu = mysql_query("SELECT * FROM haberler WHERE id = 4 ORDER BY id DESC");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   
	<div class="images-thum">
				<img src="uploads/haberler/<?php echo $haberSonuc->resim;?>" alt="" />			</div>     <?php }?>
			<div class="slide-multirows">
	                                        <ul class="products-grid pdt-list zoomOut play">
											
											
			    <?php $USorgu = Sorgu("SELECT * FROM urunler WHERE durum = '1' AND yeni = 'Evet' ORDER BY tarih DESC limit 1");
								   while($USonuc = Sonuc($USorgu)){?>  					
                    <li class="item  first  item-animate">
			<div class="item-inner">
				<div class="box-images">
					<a href="urun-detay-<?php echo $USonuc->seo;?>.html" title="" class="product-image">
						<img src="uploads/urunler/<?php echo $USonuc->resim;?>" width="150" height="150" alt="" />
						
					</a>
					
					
				</div>
				
					
					
					
					
					
					
	
					
					
					
					
					
					
					
											
				
				<div class="product-shop1">
										<h2 class="product-name"><a href="urun-detay-<?php echo $USonuc->seo;?>.html" title=""><?php echo $USonuc->adi;?></a></h2>
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

																								<button type="button" title="Sepete Ekle" class="button btn-cart" onclick="setLocation('urun-detay-<?php echo $USonuc->seo;?>.html')"><span><span>Sepete Ekle</span></span></button>
															</div>
			</div>
            </li>
			
			
			
			
			   <?php }?>
			
			
			
			
			

											
			    <?php $USorgu = Sorgu("SELECT * FROM urunler WHERE durum = '1' AND yeni = 'Evet' ORDER BY tarih DESC limit 1,1");
								   while($USonuc = Sonuc($USorgu)){?>  					
                    <li class="item  last  item-animate">
			<div class="item-inner">
				<div class="box-images">
					<a href="uploads/urunler/<?php echo $USonuc->resim;?>" title="" class="product-image">
						<img src="uploads/urunler/<?php echo $USonuc->resim;?>" width="150" height="150" alt="Softwear" />
						
					</a>
					
					
				</div>
				
					
					
					
					
					
					
	
					
					
					
					
					
					
					
											
				
				<div class="product-shop1">
										<h2 class="product-name"><a href="urun-detay-<?php echo $USonuc->seo;?>.html" title=""><?php echo $USonuc->adi;?></a></h2>
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
					

																								<button type="button" title="Sepete Ekle" class="button btn-cart" onclick="setLocation('urun-detay-<?php echo $USonuc->seo;?>.html')"><span><span>Sepete Ekle</span></span></button>
															</div>
			</div>
            </li>
			
			
			
			
			   <?php }?>
			
                </ul>
                                                                           <ul class="products-grid pdt-list zoomOut play">
											
											
			    <?php $USorgu = Sorgu("SELECT * FROM urunler WHERE durum = '1' AND yeni = 'Evet' ORDER BY tarih DESC limit 2,1");
								   while($USonuc = Sonuc($USorgu)){?>  					
                    <li class="item  first  item-animate">
			<div class="item-inner">
				<div class="box-images">
					<a href="uploads/urunler/<?php echo $USonuc->resim;?>" title="" class="product-image">
						<img src="uploads/urunler/<?php echo $USonuc->resim;?>" width="150" height="150" alt="Softwear" />
						
					</a>
					
					
				</div>
				
					
					
					
					
					
					
	
					
					
					
					
					
					
					
											
				
				<div class="product-shop1">
										<h2 class="product-name"><a href="urun-detay-<?php echo $USonuc->seo;?>.html" title=""><?php echo $USonuc->adi;?></a></h2>
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
					

																								<button type="button" title="Sepete Ekle" class="button btn-cart" onclick="setLocation('urun-detay-<?php echo $USonuc->seo;?>.html')"><span><span>Sepete Ekle</span></span></button>
															</div>
			</div>
            </li>
			
			
			
			
			   <?php }?>
			
			
			
			
			

											
			    <?php $USorgu = Sorgu("SELECT * FROM urunler WHERE durum = '1' AND yeni = 'Evet' ORDER BY tarih DESC limit 3,1");
								   while($USonuc = Sonuc($USorgu)){?>  					
                    <li class="item  last  item-animate">
			<div class="item-inner">
				<div class="box-images">
					<a href="uploads/urunler/<?php echo $USonuc->resim;?>" title="" class="product-image">
						<img src="uploads/urunler/<?php echo $USonuc->resim;?>" width="150" height="150" alt="Softwear" />
						
					</a>
					
					
				</div>
				
					
					
					
					
					
					
	
					
					
					
					
					
					
					
											
				
				<div class="product-shop1">
										<h2 class="product-name"><a href="urun-detay-<?php echo $USonuc->seo;?>.html" title=""><?php echo $USonuc->adi;?></a></h2>
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
					

																								<button type="button" title="Sepete Ekle" class="button btn-cart" onclick="setLocation('urun-detay-<?php echo $USonuc->seo;?>.html')"><span><span>Sepete Ekle</span></span></button>
															</div>
			</div>
            </li>
			
			
			
			
			   <?php }?>
			
                </ul>
				
				
				
				
				
				
				
				
				
				                                     <ul class="products-grid pdt-list zoomOut play">
											
											
			    <?php $USorgu = Sorgu("SELECT * FROM urunler WHERE durum = '1' AND yeni = 'Evet' ORDER BY tarih DESC limit 4,1");
								   while($USonuc = Sonuc($USorgu)){?>  					
                    <li class="item  first  item-animate">
			<div class="item-inner">
				<div class="box-images">
					<a href="uploads/urunler/<?php echo $USonuc->resim;?>" title="" class="product-image">
						<img src="uploads/urunler/<?php echo $USonuc->resim;?>" width="150" height="150" alt="Softwear" />
						
					</a>
					
					
				</div>
				
					
					
					
					
					
					
	
					
					
					
					
					
					
					
											
				
				<div class="product-shop1">
										<h2 class="product-name"><a href="urun-detay-<?php echo $USonuc->seo;?>.html" title=""><?php echo $USonuc->adi;?></a></h2>
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

																								<button type="button" title="Sepete Ekle" class="button btn-cart" onclick="setLocation('urun-detay-<?php echo $USonuc->seo;?>.html')"><span><span>Sepete Ekle</span></span></button>
															</div>
			</div>
            </li>
			
			
			
			
			   <?php }?>
			
			
			
			
			

											
			    <?php $USorgu = Sorgu("SELECT * FROM urunler WHERE durum = '1' AND yeni = 'Evet' ORDER BY tarih DESC limit 5,1");
								   while($USonuc = Sonuc($USorgu)){?>  					
                    <li class="item  last  item-animate">
			<div class="item-inner">
				<div class="box-images">
					<a href="uploads/urunler/<?php echo $USonuc->resim;?>" title="" class="product-image">
						<img src="uploads/urunler/<?php echo $USonuc->resim;?>" width="150" height="150" alt="Softwear" />
						
					</a>
					
					
				</div>
				
					
					
					
					
					
					
	
					
					
					
					
					
					
					
											
				
				<div class="product-shop1">
										<h2 class="product-name"><a href="urun-detay-<?php echo $USonuc->seo;?>.html" title=""><?php echo $USonuc->adi;?></a></h2>
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

																								<button type="button" title="Sepete Ekle" class="button btn-cart" onclick="setLocation('urun-detay-<?php echo $USonuc->seo;?>.html')"><span><span>Sepete Ekle</span></span></button>
															</div>
			</div>
            </li>
			
			
			
			
			   <?php }?>
			
                </ul>
				
				
				
				
				
				
				
				                                     <ul class="products-grid pdt-list zoomOut play">
											
											
			    <?php $USorgu = Sorgu("SELECT * FROM urunler WHERE durum = '1' AND yeni = 'Evet' ORDER BY tarih DESC limit 6,1");
								   while($USonuc = Sonuc($USorgu)){?>  					
                    <li class="item  first  item-animate">
			<div class="item-inner">
				<div class="box-images">
					<a href="uploads/urunler/<?php echo $USonuc->resim;?>" title="" class="product-image">
						<img src="uploads/urunler/<?php echo $USonuc->resim;?>" width="150" height="150" alt="Softwear" />
						
					</a>
					
					
				</div>
				
					
					
					
					
					
					
	
					
					
					
					
					
					
					
											
				
				<div class="product-shop1">
										<h2 class="product-name"><a href="urun-detay-<?php echo $USonuc->seo;?>.html" title=""><?php echo $USonuc->adi;?></a></h2>
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
					

																								<button type="button" title="Sepete Ekle" class="button btn-cart" onclick="setLocation('urun-detay-<?php echo $USonuc->seo;?>.html')"><span><span>Sepete Ekle</span></span></button>
															</div>
			</div>
            </li>
			
			
			
			
			   <?php }?>
			
			
			
			
			

											
			    <?php $USorgu = Sorgu("SELECT * FROM urunler WHERE durum = '1' AND yeni = 'Evet' ORDER BY tarih DESC limit 7,1");
								   while($USonuc = Sonuc($USorgu)){?>  					
                    <li class="item  last  item-animate">
			<div class="item-inner">
				<div class="box-images">
					<a href="uploads/urunler/<?php echo $USonuc->resim;?>" title="" class="product-image">
						<img src="uploads/urunler/<?php echo $USonuc->resim;?>" width="150" height="150" alt="Softwear" />
						
					</a>
					
					
				</div>
				
					
					
					
					
					
					
	
					
					
					
					
					
					
					
											
				
				<div class="product-shop1">
										<h2 class="product-name"><a href="urun-detay-<?php echo $USonuc->seo;?>.html" title=""><?php echo $USonuc->adi;?></a></h2>
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
					

																								<button type="button" title="Sepete Ekle" class="button btn-cart" onclick="setLocation('urun-detay-<?php echo $USonuc->seo;?>.html')"><span><span>Sepete Ekle</span></span></button>
															</div>
			</div>
            </li>
			
			
			
			
			   <?php }?>
			
                </ul>
				
				
				
				
				
				
				
				
				
				
				
				
                				</div>
			 

<script type="text/javascript">
	jQuery(document).ready(function($){
		(function(selector){
			var $content = $(selector);
			var $slider  = $('.slide-multirows', $content);
			var slider 	 = $slider.bxSlider({
				auto: 0, speed: 1800, controls: 1, pager: 0, maxSlides: 2, slideWidth: 297, 				infiniteLoop: false,
				moveSlides:1,
				slideMargin: 5,
				autoHover: true, // stop while hover <=> slider.stopAuto(); + slider.startAuto();
			})

		})(".newproductslider");
	});
</script>

</div></section>                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
        <section>
	<div class="bestsellerslider">
		<div class="container">
		<div class="bx-title bestseller-title"><div class="bg-title"><h2><i class="fa fa-bookmark"></i>SON EKLENEN ÜRÜNLER</h2></div></div>			














	
                  













		<ul class="products-grid pdt-list zoomOut play">
		
		
		
		
		
		
		

		       <?php $USorgu = Sorgu("SELECT * FROM urunler WHERE durum = '1' AND sicak = 'Evet' ORDER BY tarih DESC");
								   while($USonuc = Sonuc($USorgu)){?>  
	
		
		
					<li class="item first item-animate">
			<div class="item-inner">
				<div class="box-images">
					<a href="urun-detay-<?php echo $USonuc->seo;?>.html" title="" class="product-image"><img src="uploads/urunler/<?php echo $USonuc->resim;?>" width="270" height="270" alt="" /></a>
				</div>	
				
				<?php echo $USonuc->cok == 'Evet' ? '<span class="icon-sale">Popüler</span>	' : null; ?>
				
				
				<?php echo $USonuc->yeni == 'Evet' ? '<span class="icon-new">Yeni</span>	' : null; ?>
				
				
				
				
				
				
				
									<ul class="add-to-links">
																					<li><p><button type="button" title="Sepete Ekle" class="button btn-cart" onclick="setLocation('urun-detay-<?php echo $USonuc->seo;?>.html')"><span><span><i class="fa fa-shopping-cart" style="font-size: 16px; vertical-align:middle;"></i></span></span></button></p></li>
																																		<li><a href="?kekle=<?php echo $USonuc->id;?>" class="link-compare"><i class="fa fa-compress"></i></a></li>
																																		<li><a href="urun-detay-<?php echo $USonuc->seo;?>.html" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
																			
					</ul>
								<div class="product-shop1">
												<h2 class="product-name"><a href="urun-detay-<?php echo $USonuc->seo;?>.html" title="<?php echo $USonuc->adi;?>"><?php echo $USonuc->adi;?></a></h2>
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
				    
			

				
				</div>
				
		</div>
			</li>
			
			
			
			
			
			
			
					
			 <?php }?>
			
	

				</ul>
											
		<script type="text/javascript">
		jQuery(document).ready(function($){
			(function(selector){
				var $content = $(selector);
				var $slider  = $('.products-grid', $content);
				var slider 	 = $slider.bxSlider({
					auto: 0, speed: 600, controls: 1, pager: 0, maxSlides: 5, slideWidth: 233, 					//infiniteLoop: false,
					moveSlides:1,
					slideMargin: 1,
					autoHover: true, // stop while hover <=> slider.stopAuto(); + slider.startAuto();
				})
	
			})(".bestsellerslider");
		});
		</script>
	</div></div>
</section>



       

<?php include("footer.php");?>
	