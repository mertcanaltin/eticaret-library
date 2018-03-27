<?php include("header2.php");?>   
<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php if(isset($_SESSION["email"])){
	header("Location:index.html");
}?>
<?php $email = p('email');?>
<div class="main-container col1-layout">
                        <div class="container">
                <div class="main">
                    <div class="col-main">
                                                <div class="account-create">
    <div class="page-title">
        <h1>Hesap Oluştur</h1>
    </div>
            <form action="uyeol.html" method="post" id="form-validate">
        <div class="fieldset">
            <input name="durum" value="0" type="hidden">
      
            <h2 class="legend">Üyelik Bilgileri</h2>
            <ul class="form-list">
                <li class="fields">
                    <div class="customer-name">
    <div class="field name-firstname">
        <label for="firstname" class="required"><em>*</em>Adınız</label>
        <div class="input-box">
            <input id="firstname" name="ad" value="" title="Adınız" maxlength="255" class="input-text required-entry" type="text">
        </div>
    </div>
    <div class="field name-lastname">
        <label for="lastname" class="required"><em>*</em>Soyadınız</label>
        <div class="input-box">
            <input id="lastname" name="soyad" value="" title="Soyadınız" maxlength="255" class="input-text required-entry" type="text">
        </div>
    </div>
</div>
    <div class="field name-lastname">
        <label for="lastname" class="required"><em>*</em>Telefon</label>
        <div class="input-box">
            <input id="lastname" name="telefon" value="" title="Telefon" maxlength="255" class="input-text required-entry" type="text">
        </div>
    </div>            </li>
                <li>
                    <label for="email_address" class="required"><em>*</em>Email Adresiniz</label>
                    <div class="input-box">
                        <input name="email" id="email_address" value="" title="Email Adresiniz" class="input-text validate-email required-entry" type="text">
                    </div>
                </li>
				
				<li class="control">
                    <div class="input-box">
                        <input name="sozlesme" title="" value="1" id="is_subscribed" class="checkbox" type="checkbox">
                    </div>
                    <label for="is_subscribed"><a href="kullanici-sozlesmesi.html" target="_blank">Kullanıcı sözleşmesini</a> okudum ve onaylıyorum.</label>
                </li>
				
                          
                                                                                                    </ul>
        </div>
            <div class="fieldset">
            <h2 class="legend">Kullanıcı Bilgileri</h2>
            <ul class="form-list">
                <li class="fields">
                    <div class="field">
                        <label for="password" class="required"><em>*</em>Şifreniz</label>
                        <div class="input-box">
                            <input name="sifre" id="password" title="Password" class="input-text required-entry validate-password" type="password">
                        </div>
                    </div>
                    <div class="field">
                        <label for="confirmation" class="required"><em>*</em>Şifrenizi Tekrarlayınız</label>
                        <div class="input-box">
                            <input name="sifret" title="Confirm Password" id="confirmation" class="input-text required-entry validate-cpassword" type="password">
                        </div>
                    </div>
                </li>
                                            </ul>
            

<script type="text/javascript">
//<![CDATA[
    function toggleRememberMepopup(event){
        if($('remember-me-popup')){
            var viewportHeight = document.viewport.getHeight(),
                docHeight      = $$('body')[0].getHeight(),
                height         = docHeight > viewportHeight ? docHeight : viewportHeight;
            $('remember-me-popup').toggle();
            $('window-overlay').setStyle({ height: height + 'px' }).toggle();
        }
        Event.stop(event);
    }

    document.observe("dom:loaded", function() {
        new Insertion.Bottom($$('body')[0], $('window-overlay'));
        new Insertion.Bottom($$('body')[0], $('remember-me-popup'));

        $$('.remember-me-popup-close').each(function(element){
            Event.observe(element, 'click', toggleRememberMepopup);
        })
        $$('#remember-me-box a').each(function(element) {
            Event.observe(element, 'click', toggleRememberMepopup);
        });
    });
//]]>
</script>
        </div>
        <div class="buttons-set">
            <p class="required">*Gerekli Alan</p>
           
            <button type="submit" title="Gönder" class="button"><span><span>Gönder</span></span></button>
        </div>
            </form>
    <script type="text/javascript">
    //<![CDATA[
        var dataForm = new VarienForm('form-validate', true);
            //]]>
    </script>
</div>
                    </div>
                </div>
            </div>
        </div>
<?php include("footer.php");?>
	