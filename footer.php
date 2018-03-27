<section class="brandlogo-wrapper">
	<div class="container">
	<div class="brandlogo-contain">
		
			<div class="bx-title brand-title"><div class="bg-title"><h2><i class="fa fa-bookmark"></i></h2></div></div>
			<ul class="bxslider">
			
			
			
			
			
					                         <?php 
 $haberSorgu = mysql_query("SELECT * FROM markalar WHERE durum = 1 ORDER BY id DESC");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   
			
			
			
			
												<li class="item">
															<a target="_blank" href="<?php echo $haberSonuc->ingadi;?>" title=""><img src="uploads/markalar/thumb/<?php echo $haberSonuc->resim;?>" alt="<?php echo $haberSonuc->adi;?>" /></a>												
																																							             
				    								</li>
																
																
																
																
																
																
												 <?php }?>				
																
																
																
										    </ul>
		
		<script type="text/javascript">
	   //<![CDATA[
		jQuery(document).ready(function($){
		  $('.brandlogo-contain .bxslider').bxSlider(
			{
						  speed: 600,
			  pause: 3000,			  
			  minSlides: 1,
			  //infiniteLoop: false,
			  maxSlides: 7,
			  slideWidth: 162,
			  slideMargin: 6,
			  autoHover: true,
			  moveSlides:1,
		      
			  pager:false, 
										controls: true,
						}
		  );
		});
		//]]>
	</script>
	</div></div>
</section>

        

<div class="footer">

<div class="footer-information">
    <div class="container">
        <div class="row">
            <div class="f-col f-col1 col-sm-55 col-sm-6 col-sms-6 col-smb-12">
<div class="footer-static-title">
<h3>Adres BİLGİLERİ</h3>
</div>
<div class="footer-static-content">
<ul>
<li><?php echo $ayar->firma_adres; ?></li>
<li><?php echo $ayar->firma_tel; ?></li>
<li><?php echo $ayar->firma_fax; ?></li>
<li><?php echo $ayar->firma_email; ?></li>
</ul>
</div>
</div>
<div class="f-col f-col2 col-sm-55 col-sms-6 col-sm-6 col-smb-12">
<div class="footer-static-title">
<h3>KURUMSAL</h3>
</div>
<div class="footer-static-content">
<ul>








			                         <?php 
 $haberSorgu = mysql_query("SELECT * FROM sayfalar WHERE durum = 1 ORDER BY id DESC");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   
<li class="first"><a href="sayfa-detay-<?php echo $haberSonuc->seo;?>.html"><?php echo $haberSonuc->adi;?></a></li>



       <?php }?>





</ul>
</div>
</div>
<div class="f-col f-col3 col-sm-55 col-sms-6 col-sm-6 col-smb-12">
<div class="footer-static-title">
<h3>BİLGİLER</h3>
</div>
<div class="footer-static-content">
<ul>

			                         <?php 
 $haberSorgu = mysql_query("SELECT * FROM bilgiler WHERE durum = 1 ORDER BY id DESC");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   
<li class="first"><a href="bilgi-detay-<?php echo $haberSonuc->seo;?>.html"><?php echo $haberSonuc->adi;?></a></li>



       <?php }?>
</ul>
</div>
</div>
<div class="f-col f-col4 col-sm-55 col-sms-6 col-sm-6  col-smb-12">
<div class="footer-static-title">
<h3>YARDIM & DESTEK</h3>
</div>
<div class="footer-static-content">
<ul>
<li class="first"><a href="sss.html">Sıkça Sorulan Sorular</a></li>
<li><a href="ticket.html">Destek Talebi Gönder</a></li>
<li><a href="iletisim.html">Bize Ulaşın</a></li>


</ul>
</div>
</div>
<div class="f-col f-col5 col-sm-55 col-sms-12 col-sm-12 col-smb-12"><div class="block block-subscribe">
    <div class="footer-static-title">
        <h3>E-BÜLTEN ABONELİĞİ</h3>
    </div>
    <p> E-bültene kayıt olarak kampanya ve fırsatlardan erken haberdar olun.</p>
   <form action="ebulten.html" method="POST">
        <div class="subscribe-content">
            
            <div class="input-box">
               <input type="text" name="email" id="email" title="E-posta Adresiniz" class="input-text required-entry validate-email" placeholder="E-posta Adresiniz" />
               <div class="actions">
                    <button type="submit" title="KAYDET" class="button">KAYDET</button>
                </div>
            </div>
            
        </div>
    </form>
    <script type="text/javascript">
    //<![CDATA[
        var newsletterSubscriberFormDetail = new VarienForm('newsletter-validate-detail');
    //]]>
    </script>
</div>

<div class="footer-static-title">
<h3>SOSYAL MEDYA</h3>
</div>
<div class="connect">
<a class="social1" title="twitter" href="<?php echo $ayar->twitter; ?>"><span><em class="fa fa-twitter">&nbsp;</em></span></a>
 <a class="social2" title="facebook" href="<?php echo $ayar->facebook; ?>"><span><em class="fa fa-facebook">&nbsp;</em></span></a> 
 <a class="social3" title="skype" href="<?php echo $ayar->pinterest; ?>"><span><em class="fa fa-skype">&nbsp;</em></span></a> 
 <a class="social4" title="google" href="<?php echo $ayar->gplus; ?>"><span><em class="fa fa-google-plus">&nbsp;</em></span></a> 
 <a class="social5" title="vine" href="<?php echo $ayar->renk; ?>"><span><em class="fa fa-youtube">&nbsp;</em></span></a></div>
</div>        </div>
    </div>
</div>

                    
<div class="footer-container">
    <div class="container">
        <div class="footer1">
            <div class="row">
                
                <div class="col-md-6 col-sm-6">
                    <div class="links-bottom">
    <a href="#"><em class="fa fa-cc-discover"></em></a>
    <a href="#"><em class="fa fa-cc-paypal"></em></a>
    <a href="#"><em class="fa fa-cc-mastercard"></em></a>
    <a href="#"><em class="fa fa-cc-visa"></em></a>
    <a href="#"><em class="fa fa-cc-stripe"></em></a>
</div>                </div>
                <div class="col-md-6 col-sm-6">
                    <address class="copyright"><?php echo $ayar->copyright; ?></address>
                </div>
            </div>
            <?php echo $ayar->google_analytics; ?>
            
        </div>
    </div>
</div>
</div>
<div class="block-social-right">
<ul>
<li><a id="facebook-btn" class="socialitems" href="<?php echo $ayar->facebook; ?>" target="_blank"> <span class="social-icon" style="overflow: hidden; width: 43px;"> <span class="social-text">Facebook'ta Takip Edin</span> </span> </a></li>
<li><a id="twitter-btn" class="socialitems" href="<?php echo $ayar->twitter; ?>" target="_blank"> <span class="social-icon" style="overflow: hidden; width: 43px;"> <span class="social-text">Twitter'de Takip Edin</span> </span> </a></li>
<li><a id="googleplus-btn" class="socialitems" href="<?php echo $ayar->gplus; ?>" target="_blank"> <span class="social-icon" style="overflow: hidden; width: 43px;"> <span class="social-text">Google'de Takip Edin</span> </span> </a></li>
<li><a id="youtube-btn" class="socialitems" href="<?php echo $ayar->renk; ?>" target="_blank"> <span class="social-icon" style="overflow: hidden; width: 43px;"> <span class="social-text">Youtube'de Abone Olun</span> </span> </a></li>

<li><a id="mail-btn" class="socialitems" href="mailto:<?php echo $ayar->firma_email; ?>" target="_blank"> <span class="social-icon"> <span class="social-text">Email Adresimiz</span> </span> </a></li>
</ul>
</div><div id="back-top" class="hidden-xs"><i class="fa fa-angle-up"></i></div>                

    </div>
</div>

</body>
</html>