<?php include("header2.php");?>   
<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php if(!isset($_SESSION["email"])){
	header("Location:giris.html");
}?>
<?php $bilgilerim = Sonuc(Sorgu("SELECT * FROM uyeler WHERE durum = '1' AND id = '{$_SESSION['uyeid']}'"));?>
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
</div>
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                
                                <div class="col-main">
                                                                        <div class="my-account"><div class="page-title">
    <h1>ŞİFRE GÜNCELLEME</h1>
</div>


  	<div class="box-authentication">
							<div id="sifrenote" style="width:300px;position:fixed;top:10px;right: 5px;z-index:99999;font-size:12px;"></div>
							<form id="sifreform" method="POST" action="sifre-guncelle.html" style="margin-top: -20px;">
							<label for="msifre">Mevcut Şifreniz</label>
							<input id="msifre" type="password" name="msifre" class="form-control">
							<label for="sifre">Yeni Şifreniz</label>
							<input id="sifre" type="password" name="sifre" class="form-control">
							<label for="sifret">Yeni Şifreniz (tekrar)</label>
							<input id="sifret" name="sifret" type="password" class="form-control">
							<input id="uyeid" name="uyeid" type="hidden" class="form-control" value="<?php echo $_SESSION['uyeid'];?>">
							
						
						</div>
    <div class="buttons-set">

   
        <button type="submit" title="Kaydet" class="button"><span><span>Kaydet</span></span></button>
    </div>
</form>
</div>                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
<?php include("footer.php");?>
	