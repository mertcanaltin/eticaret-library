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
        <h1>TİCKET OLUŞTUR</h1>
    </div>
   <div class="content-text clearfix">
					<div class="row">
					<div class="col-sm-12">
					<div class="box-authentication">
						<div id="ticketnote" style="width:300px;position:fixed;top:10px;right: 5px;z-index:99999;font-size:12px;"></div>
						<form id="ticketform" method="POST" action="ticketform.html" style="margin-top: -20px;">		
							<div style="clear:both;"></div>
							<label for="isim">İsim</label>
							<input id="isim" style="text-transform: capitalize;" value="<?php echo $bilgilerim->ad; ?> <?php echo $bilgilerim->soyad; ?>" disabled type="text" name="isim" class="form-control input-sm">
							<label for="email">E-posta Adresi</label>
							<input id="email" type="text" name="email" value="<?php echo $bilgilerim->email; ?>" disabled class="form-control input-sm">
							<label for="baslikk">Başlık</label>
							<input id="baslikk" type="text" name="baslikk" class="form-control input-sm">
							<label>Departman</label>
                            <div class="custom_select" style="width: 70%;">
                                <select class="input-sm form-control" name="departman" id="departman">
                                    <option value="1">Ödeme İşlemleri</option>
                                    <option value="2">Üyelik İşlemleri</option>
                                </select>
                            </div>
							<label>Öncelik</label>
                            <div class="custom_select" style="width: 70%;">
                                <select class="input-sm form-control" name="oncelik" id="oncelik">
                                    <option value="1">Yüksek</option>
                                    <option value="2">Orta</option>
                                    <option value="3">Düşük</option>
                                </select>
                            </div>
							<label for="adres">Mesaj</label>
							<textarea class="form-control input-sm" rows="5" id="mesaj" name="mesaj"></textarea>
							<input id="uyeid" name="uyeid" type="hidden" class="form-control" value="<?php echo $_SESSION['uyeid'];?>">
							<input id="isim" name="isim" type="hidden" class="form-control" value="<?php echo $bilgilerim->ad; ?> <?php echo $bilgilerim->soyad; ?>">
							<input id="email" name="email" type="hidden" class="form-control" value="<?php echo $bilgilerim->email; ?>">
			
							<button id="ticketgonder" type="submit" class="button"><i class="fa fa-check"></i> Gönder</button>
							
							</form>
						
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
	