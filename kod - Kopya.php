                                                                        <div class="block block-subscribe popup" style="display:none;">
    <div id="popup-newsletter">
        <div class="block-title">
            <strong><span>Newsletter</span></strong>
        </div>
        <form action="http://ma.themevast.com/arion/furniture/index.php/newsletter/subscriber/new/" method="post" id="popup-newsletter-validate-detail">
            <div class="block-content">
                <div class="form-subscribe-header">
                    <label for="newsletter">Subscribe to the Arion mailing list to receive updates on new arrivals, special offers
<br />and other discount information.</label>
                </div>
				
				
                <div class="input-box">
                   <input type="text" name="email" id="pnewsletter" title="Sign up for our newsletter" class="input-text required-entry validate-email" />
		   
                    <button type="submit" title="Subscribe" class="button"><span><span>Subscribe</span></span></button>
                
                </div>
                
				<!--<p class="promo-panel-text1"></p>
				<p class="promo-panel-text2"></p>-->
                <div class="subscribe-bottom">
                    <input type="checkbox" />Don’t show this popup again                </div>
            </div>
        </form>
        <script type="text/javascript">
        //<![CDATA[
            var newsletterSubscriberFormDetail = new VarienForm('popup-newsletter-validate-detail');
			var searchForm = new Varien.searchForm('popup-newsletter', 'pnewsletter', 'Enter Your Email Address Here...');
        //]]>
        </script>
    </div>