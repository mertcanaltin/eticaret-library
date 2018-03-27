<?php include("header2.php");?>  
<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php if(!isset($_SESSION["email"])){
	header("Location:giris.html");
}?> 
<div class="main-container col2-left-layout">
        
             
            <div class="container">
                    <div class="main">
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <div class="col-left sidebar"><div class="block block-account">
    <div class="block-title">
        <strong><span>Hesabım</span></strong>
    </div>
    <div class="block-content">
        <ul>
                                                                                                    <li class="current"><strong>Hesabım</strong></li>
                                                                                <li><a href="uyelik-bilgilerim.html">Üyelik Bilgilerim</a></li>
                                                                                <li><a href="siparislerim.html">Siparişlerim</a></li>
                                                                                <li><a href="adres-defteri.html">Adres Defteri</a></li>
                                                                                <li><a href="sifre-degistir.html">Şifre Değiştir</a></li>
                                                                                <li><a href="ticket-islemleri.html">Ticket İşlemleri</a></li>
                                                                                <li><a href="hesap-numaralari.html">Hesap Numaraları</a></li>
                                                                                <li><a href="uyelik-iptal.html">Üyelik İptali</a></li>
                                                                              
                                    </ul>
    </div>
</div>

<script type="text/javascript">
//<![CDATA[
var MEGAMENU_EFFECT = 0;

//]]>
</script></div>
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                
                                <div class="col-main">
                                                                        <div class="my-account"><div class="dashboard">
    <div class="page-title">
        <h1>Hesabım</h1>
    </div>
    <ul class="messages"><li class="success-msg"><ul><li><span>	Hoşgeldiniz Sayın <strong><?php echo $_SESSION['ad'];?> <?php echo $_SESSION['soyad'];?></strong> (<?php echo $_SESSION['email'];?>)<br><br>
						Üyelik menüsünden siparişlerinizi takip edebilir, bilgilerinizi güncelleyebilirsiniz.<br>
						Uygulamaya koyduğumuz ticket sistemi ile artık sormuş olduğunuz soruları kendi hesabınızdan takip edebileceksiniz.</span></li></ul></li></ul>    <div class="welcome-msg">
 
</div>
        <div class="box-account box-info">
        <div class="box-head">
            <h2>Hesap Bilgilerim</h2>
        </div>
                        <div class="col2-set">
    <div class="col-1">
        <div class="box">
            <div class="box-title">
                <h3>Üyelik Bilgilerim</h3>
                <a href="uyelik-bilgilerim.html">Düzenle</a>
            </div>
            <div class="box-content">
                <p>
                    <?php echo $_SESSION['ad'];?> <?php echo $_SESSION['soyad'];?><br>
                   <?php echo $_SESSION['email'];?><br>
                    <a href="sifre-degistir.html">Şifre Değiştir</a>
                </p>
            </div>
        </div>
    </div>
        <div class="col-2">
        <div class="box">
            <div class="box-title">
                <h3>Üyelik Feshi</h3>
                <a href="uyelik-iptal.html">Git</a>
            </div>
            <div class="box-content">
                <p>
                                           Üyeliğinizi iptal etmek için git butonuna tıklayınız.                               </p>
            </div>
        </div>
                    </div>
    </div>
   
    </div>
        </div></div>                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
<?php include("footer.php");?>
	