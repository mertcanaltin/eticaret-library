<?php include("header2.php");?>  
<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php if(!isset($_SESSION["email"])){
	header("Location:giris.html");
}?>
<?php
if(g('islem')=="duzenle")
{
	$id 		= p('adresid');
	$adresbul 	= Sonuc(Sorgu("SELECT * FROM adres WHERE id='$id'"));
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
    var reorderFormDetail = new VarienForm('reorder-validate-detail');
//]]>
</script>
</div>
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                
                                <div class="col-main">
                                                                        <div class="my-account"><div class="page-title title-buttons">
    <h1>Adres Defteri</h1>
    <button type="button" title="Adres Ekle" class="button" onclick="window.location='adres-ekle.html';"><span><span>Adres Ekle</span></span></button>
</div>
<div class="col2-set addresses-list"><br>
		      <!-- Content page -->
                <div class="content-text clearfix">
					<div class="row">
					<div class="col-sm-12">
						<div class="box-authentication">
							<div id="adresnote" style="width:300px;position:fixed;top:10px;right: 5px;z-index:99999;font-size:12px;"></div>
							<form id="adresform" method="POST" action="adresekle.html" style="margin-top: -20px;">
							<label for="adrestipi">Adres Tipi Seçiniz </label>
							<ul>
								<li style="float:left;margin-right:5px;">
								
									<label class=""><input id="adrestipi" name="adrestipi" type="radio" onchange="adrestipi()" checked="checked" value="bireysel" <?php echo($adresbul->adres_tipi == "bireysel" ? 'checked="checked"' : '');?>  style="float: left;width: 15px;"> Bireysel ( Şahıs )  </label>
								</li>
								<li style="float:left;">
									<label class=""><input id="adrestipi" name="adrestipi" type="radio" onchange="adrestipi()" value="kurumsal" <?php echo($adresbul->adres_tipi == "kurumsal" ? 'checked="checked"' : '');?> style="float: left;width: 15px;">Kurumsal ( Firma )</label>
								</li>
							</ul>
							<div style="clear:both;"></div>
							<label for="baslik">Adres Başlığı</label>
							<input id="baslik" style="text-transform: capitalize;" type="text" name="baslik" value="<?php echo $adresbul->baslik;?>" class="form-control input-sm">
							<label for="ad">Adınız</label>
							<input id="ad" style="text-transform: capitalize;" type="text" name="ad" value="<?php echo $adresbul->ad;?>" class="form-control input-sm">
							<label for="soyad">Soyadınız</label>
							<input style="text-transform: uppercase;" id="soyad" type="text" name="soyad" value="<?php echo $adresbul->soyad;?>" class="form-control input-sm">
							<label for="firma_adi">Firma Adı (Kurumlar İçin)</label>
							<input id="firma_adi" name="firma_adi" value="<?php echo $adresbul->firma_adi;?>" type="text" class="form-control input-sm">
							<label for="adres">Adres</label>
							<textarea class="form-control input-sm" rows="3" id="adres" name="adres"><?php echo $adresbul->adres;?></textarea>
							<label>Şehir</label>
                            <div class="custom_select" style="width: 34%;">
                                <select class="input form-control" name="il" id="il">
                                    <option value="0">Lütfen Şehir Seçiniz</option>
									<?php $Sorgu = Sorgu("SELECT * FROM iller ORDER BY baslik ASC");
									while($Sonuc = Sonuc($Sorgu)){?>
                                    <option <?php echo($adresbul->sehir == $Sonuc->id ? 'selected' : '');?> value="<?php echo $Sonuc->id;?>"><?php echo $Sonuc->baslik;?></option>
									<?php }?>
                                </select>
                            </div>
								<label for="postakodu">Semt / İlçe</label>
							<input id="ilce" type="text" name="ilce" value="<?php echo $adresbul->ilce;?>" class="form-control input-sm">
							<label for="postakodu">Posta Kodu</label>
							<input id="postakodu" type="text" name="postakodu" value="<?php echo $adresbul->postakodu;?>" class="form-control input-sm">
							<label for="vd">Vergi Dairesi (Kurumlar İçin)</label>
							<input id="vd" type="text" name="vd" value="<?php echo $adresbul->vd;?>" class="form-control input-sm">
							<label for="vn">Vergi Numarası (Kurumlar İçin) </label>
							<input id="vn" type="text" name="vn" value="<?php echo $adresbul->vn;?>" class="form-control input-sm">
							<label for="tc">TC Kimlik No(Şahıslar İçin) </label>
							<input id="tc" type="text" name="tc" value="<?php echo $adresbul->tc;?>" class="form-control input-sm">
							<label for="ceptel">CEP Telefon </label>
							<input id="ceptel" type="text" name="ceptel" value="<?php echo $adresbul->ceptel;?>" class="form-control input-sm">
							<label for="evtel">EV Telefon </label>
							<input id="evtel" type="text" name="evtel" value="<?php echo $adresbul->evtel;?>"  class="form-control input-sm">
							<label for="istel">Diğer veya İş Telefon </label>
							<input id="istel" type="text" name="istel" class="form-control input-sm">
							<input id="uyeid" name="uyeid" type="hidden" class="form-control" value="<?php echo $_SESSION['uyeid'];?>">
							<?php if($_GET['islem']=="duzenle"){?>
							<button id="adresguncelle" type="submit" class="button"><i class="fa fa-user"></i> Bilgileri Güncelle</button>
							<input type="hidden" name="adresid" id="adresid" value="<?php echo $id;?>">
							<?php }else{?>
							<button id="adresekle" type="submit" class="button"><i class="fa fa-user"></i> Bilgileri Kaydet</button>
							<?php }?>
							</form>
						</div>
					</div>
				</div>
                </div>

</div>

</div>                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
<?php include("footer.php");?>
	