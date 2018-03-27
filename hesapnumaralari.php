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
        <h1>HESAP NUMARALARI</h1>
    </div>
   
        <div class="content-text clearfix">
					<div class="row">
					<div class="col-sm-12">
						<div class="box-authentication">
						<?php $Sorgu = Sorgu("SELECT * FROM banka_hesaplari WHERE durum = 1 ORDER BY id DESC");
						while($Sonuc = Sonuc($Sorgu)){?>
							<div class="col-md-6" style="margin-left:-15px;margin-right:10px;">
								<div class="well">
									<strong></strong> <br>
									<address>
											  <strong>Banka Adı :</strong> <?php echo $Sonuc->banka_adi;?><br>
											  Hesap Sahibi : <?php echo $Sonuc->alici;?><br>
											  <?php echo $Sonuc->sube_adi;?>, Şube kodu : <?php echo $Sonuc->sube_kodu;?><br>
											  Hesap Numarası : <?php echo $Sonuc->hesap_no;?><br> IBAN NO : <?php echo $Sonuc->IBAN;?></address>
								</div>
							</div>
						<?php }?> 	
							<div class="clearfix"></div>
							<p>Yukarıda ödeme yapabileceğiniz hesap numaralarımız yer almaktadır. Detaylı bilgi için müşteri temsilciniz ile görüşebilirsiniz.</p>
							<div class="clearfix"></div>
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
	