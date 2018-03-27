<?php include("header2.php");?>   
<div class="main-container col1-layout">
                        <div class="container">
                <div class="main">
                    <div class="col-main">
                                                <div id="messages_product_view"></div>
<div class="page-title">
    <h1>İletişim</h1>
</div>
<div class="row">
<div class="col-sm-6">
<form action="mesaj.html" id="contactForm" method="post">
    <div class="fieldset">
        <h2 class="legend">İletişim Formu</h2>
        <ul class="form-list">
            <li class="fields">
                <div class="field">
                    <label for="name" class="required"><em>*</em>Adınız ve Soyadınız</label>
                    <div class="input-box">
                        <input name="isim" id="name" title="Ad ve Soyad" value="" class="input-text required-entry" type="text">
                    </div>
                </div>
                <div class="field">
                    <label for="email" class="required"><em>*</em>Email Adresiniz</label>
                    <div class="input-box">
                        <input name="email" id="email" title="Email" value="" class="input-text required-entry validate-email" type="text">
                    </div>
                </div>
            </li>
            <li>
    
        
                            <label>Konu Başlığı</label>
                            <select class="form-control input-sm" id="konu" name="konu">
                                <option value="Genel Sorular">Genel Sorular</option>
                                <option value="Fiyat Hakkında">Fiyat Hakkında</option>
                                <option value="Taşıma Hakkında">Taşıma Hakkında</option>
                                <option value="Diğer">Diğer</option>
                            </select>
                      
            </li>
            <li class="wide">
                <label for="comment" class="required"><em>*</em>Mesajınız</label>
                <div class="input-box">
                    <textarea name="mesaj" id="comment" title="Mesajınız" class="required-entry input-text" cols="5" rows="3"></textarea>
                </div>
            </li>
        </ul>
    </div>
    <div class="buttons-set">
        <p class="required">* Gerekli Alanlar</p>
     
        <button type="submit" title="Gönder" class="button"><span><span>Gönder</span></span></button>
    </div>
</form></div>

    <div class="col-sm-6">
<div class="maps"><iframe style="border: 0;" src="<?php echo $ayar->google_maps; ?>" frameborder="0" width="100%" height="350"></iframe></div>
</div>
<div style="clear: both; padding: 15px 0px;">&nbsp;</div>

<div class="col-md-3 col-sm-6 store-info">
<ul class="list-info">
<li class="item-info main-info">
<div class="info-content"><em class="fa fa-map-marker">&nbsp;</em>
<h2>Adres</h2>
<div class="des-info"><?php echo $ayar->firma_adres; ?></div>
</div>
</li>
<li class="item-info email-info">
<div class="info-content"><em class="fa fa-envelope">&nbsp;</em>
<h2>Email Adresimiz</h2>
<div class="des-info"><a class="mailto" title="Email Gönder" href="mailto:<?php echo $ayar->firma_email; ?>"><?php echo $ayar->firma_email; ?></a><br> <a class="mailto" title="Email Gönder" href="mailto:<?php echo $ayar->firma_email; ?>"><?php echo $ayar->firma_email; ?></a></div>
</div>
</li>
<li class="item-info phone-info">
<div class="info-content"><em class="fa fa-phone">&nbsp;</em>
<h2>Telefon</h2>
<div class="des-info"><a class="call-phone" title="Ara: <?php echo $ayar->firma_tel; ?>" href="tel:<?php echo $ayar->firma_tel; ?>"><?php echo $ayar->firma_tel; ?></a><br> <a class="call-phone" title="Ara: <?php echo $ayar->firma_fax; ?>" href="tel:<?php echo $ayar->firma_fax; ?>"><?php echo $ayar->firma_fax; ?></a></div>
</div>
</li>
</ul>
</div>




</div>

<script type="text/javascript">
//<![CDATA[
    var contactForm = new VarienForm('contactForm', true);
//]]>
</script>
                    </div>
                </div>
            </div>
        </div>
<?php include("footer.php");?>
	