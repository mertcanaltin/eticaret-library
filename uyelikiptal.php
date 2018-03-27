<?php include("header2.php");?>  
<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php if(!isset($_SESSION["email"])){
	header("Location:giris.html");
}?>
<?php
if(g('islem')=="iptal")
{
	$confirmCancellation = p('confirmCancellation');
	if($confirmCancellation){
		$id = p('customerID');
		$uye_sil_sorgu = Sorgu("DELETE FROM uyeler WHERE id='$id'");
		$adres_sil_sorgu = Sorgu("DELETE FROM adres WHERE uyeid='$id'");
		unset($_SESSION['uyeid']);
		unset($_SESSION['email']);
		unset($_SESSION['isim']);
		header("Location:index.html");
	}else{
		$bilgi = '<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong><i style="margin-top:2px;font-size:16px;" class="fa fa-exclamation-triangle"></i></strong> İptal işlemini onaylamanız gerekmektedir.
				</div>';
	}
	
}
?>
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
        <h1>ÜYELİK İPTALİ</h1>
    </div>
   
              <div class="content-text clearfix">
					<div class="row">
					<div class="col-sm-12">
						<div class="box-authentication">
						<form class="accountCancel" action="uyelik-iptal.html?islem=iptal" method="post" id="myForm" name="myForm" onsubmit="return Validator(this);">
						<?php echo $bilgi;?>
						<div class="checkbox">
							<label for="confirmCancellation" class="text-center">
								<input class="bigscale" style="margin-top: 3px;" type="checkbox" id="confirmCancellation" name="confirmCancellation" value="1"> 
								Hesabımı iptal ettikten sonra <?php echo $ayar->firma_adi; ?> 
								altyapısı üzerindeki hesabımla ilgili hiçbir veriye tekrar erişim sağlayamayacağımı ve 
								bu işlemden ötürü <?php echo $ayar->firma_adi; ?>'ün sorumluluğu olmadığını 
								<span style="text-decoration:underline;">kabul ediyorum</span> 
								ve hesabımın iptal edilmesini <span style="text-decoration:underline;">onaylıyorum</span>.
							</label>
						</div>
							
						<div class="form-group text-center">
							<button type="submit" class="btn btn-danger">Hesabımı İptal Et</button>
						</div>

						<input type="hidden" name="customerID" value="<?php echo $_SESSION['uyeid'];?>">
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
	