<?php include("header2.php");?>   
<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php if(isset($_SESSION["email"])){
	header("Location:index.html");
}?>
<div class="main-container col1-layout">
                        <div class="container">
                <div class="main">
                    <div class="col-main">
                                                <div class="account-login">
    <div class="page-title">
        <h1>Hesap Oluştur</h1>
    </div>
        <form action="giriss.html" method="post" id="login-form">
      
        <div class="col2-set">
            <div class="col-1 new-users">
                <div class="content">
                    <h2>Üyelik Kaydı</h2>
                    <p>Sitemize üye olarak hızlı ve güvenli bir şekilde alışverişinizi yapabilir, kampanya fırsat ve indirimlerden anında haberdar olabilirsiniz.</p>
                </div>
            </div>
            <div class="col-2 registered-users">
                <div class="content">
                    <h2>Zaten ben üyeyim</h2>
                    <p>O halde lütfen sisteme giriş yapınız.</p>
                    <ul class="form-list">
                        <li>
                            <label for="email" class="required"><em>*</em>Email Adresiniz</label>
                            <div class="input-box">
                                <input name="email" value="" id="email" class="input-text required-entry validate-email" title="Email Adresiniz" type="text">
                            </div>
                        </li>
                        <li>
                            <label for="email" class="required"><em>*</em>Şifreniz</label>
                            <div class="input-box">
                                <input name="sifre" class="input-text required-entry validate-password" id="pass" title="Password" type="password">
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
                    <p class="required">* Gerekli Alan</p>
                </div>
            </div>
        </div>
        <div class="col2-set">
            <div class="col-1 new-users">
                <div class="buttons-set">
                    <button type="button" title="Üyelik Oluştur" class="button" onclick="window.location='uye-ol.html'"><span><span>Üyelik Oluştur</span></span></button>
                </div>
            </div>
            <div class="col-2 registered-users">
                <div class="buttons-set">
                    <a href="#" class="f-left">Parolamı Unuttum </a>
                    <button type="submit" class="button" title="Giriş Yap"  id="send2"><span><span>Giriş Yap</span></span></button>
                </div>
            </div>
        </div>
            </form>
    <script type="text/javascript">
    //<![CDATA[
        var dataForm = new VarienForm('login-form', true);
    //]]>
    </script>
</div>
                    </div>
                </div>
            </div>
        </div>
<?php include("footer.php");?>
	