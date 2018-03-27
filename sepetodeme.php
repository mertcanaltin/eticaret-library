<?php include("header2.php");?>
<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php if(!isset($_SESSION["email"])){
	header("Location:giris.html");
}?>

		
		
		
		               
       <!-- page wapper-->
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="index.html" title="Anasayfaya Git">Anasayfa</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Alışveriş Sepeti</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
    
        <!-- ../page heading-->
        <div class="page-content page-order">
        
		<div class="heading-counter warning">Sepetinizde toplam <strong><?php echo count($_SESSION["urunler"]);?></strong> ürün bulunuyor.</div>	
		<!-- row -->
        <div class="row">
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
			<div class="row margin-top-10" style="margin-left: 0px;margin-top: 7px;">
			<ul id="myTab" class="nav nav-tabs margin-top-10">
				<li class="active"><a href="#Description" data-toggle="tab" aria-expanded="true">Kredi Kartı ile Öde</a></li>
				<li class=""><a href="#Passw" data-toggle="tab" aria-expanded="false">Paypal ile Öde</a></li>
				<li class=""><a href="#Docs" data-toggle="tab" aria-expanded="false">Banka Havalesi</a></li>
				<li class=""><a href="#Docss" data-toggle="tab" aria-expanded="false">Kapıda Ödeme</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade active in" id="Description" style="padding-top:10px;">
				Ödemenizi kredi kartı ile güvenli şekilde ödeyebilirsiniz.Bu ekrandan sonra paytr ödeme sayfasına yönleneceksiniz.
				<p class="title_blockk"></p>
					<FORM ACTION="https://www.paytr.com/odeme/guvenli" METHOD="POST" id="paytr" name="pptr">
					<?php 
						$uniq = microtime(true);
						$uniq = round($uniq);
						$_SESSION['sipid'] = $uniq;
						$ucret = (($STOPLAM*18/100)+$STOPLAM+8)*100;
						$sepet = "";
						if (isset($_SESSION["urunler"]) && count($_SESSION["urunler"]) >= 1) { 
							$toplam = 0.00;
							$vergi = 0.00;
							for($i=0; $i<count($_SESSION["urunler"]); $i++){
							$deger= $_SESSION["urunler"][$i]["id"];
							$adet= $_SESSION["urunler"][$i]["adet"];
							$SepetCek = Sonuc(Sorgu("SELECT * FROM urunler WHERE id = '$deger'"));
							if($SepetCek->indirim == "1"){
								$fiyat = ($SepetCek->ifiyat*18/100)+$SepetCek->ifiyat;
								$f_paypal = $SepetCek->ifiyat;
								$vergi += ($SepetCek->ifiyat*18/100)*$adet;
							}else{
								$fiyat = ($SepetCek->fiyat*18/100)+$SepetCek->fiyat;
								$f_paypal = $SepetCek->fiyat;
								$vergi += ($SepetCek->fiyat*18/100)*$adet;

							}
							$c = $i+1;
							if($i == 0){
								$sepet = array(array("$SepetCek->adi","$fiyat","$adet"));
								$b_paypal = array(
								"item_name_".$c => $SepetCek->adi,
								"item_number_".$c => $SepetCek->urun_kodu,
								"amount_".$c => $f_paypal,
								"quantity_".$c => $adet
								);
							}else{
								$sepet = array_merge(array(array("$SepetCek->adi","$fiyat","$adet")),$sepet);
								$b_paypal = array_merge(array(
								"item_name_".$c => $SepetCek->adi,
								"item_number_".$c => $SepetCek->urun_kodu,
								"amount_".$c => $f_paypal,
								"quantity_".$c => $adet
								),$b_paypal);
							}
							

						}
					}
						$pytr_hsp = Sonuc(Sorgu("SELECT * FROM poslar WHERE yontem ='1'"));
						$pytr_hsp = json_decode($pytr_hsp->secenek,true);
						$user_basket = base64_encode(json_encode($sepet));
						$hash_str= $pytr_hsp['merchant_id'].ip().$_SESSION['uyeid'].$uniq.$_SESSION['email'].$ucret.$user_basket."0"."9";
						$token = base64_encode(hash_hmac('sha256',$hash_str.$pytr_hsp['merchant_salt'],$pytr_hsp['merchant_key'],true));
						$kd = $_SESSION['uyeid'];
						$bilgi = Sonuc(Sorgu("SELECT * FROM uyeler WHERE id ='$kd'"));
						$ad = $_SESSION["adres"];
						$adress = Sonuc(Sorgu("SELECT * FROM adres WHERE id = '$ad' AND uyeid = '$kd'"));
						if($adress){
							$sehir = Sonuc(Sorgu("SELECT * FROM iller WHERE id ='$adress->sehir'"));
							$semt = Sonuc(Sorgu("SELECT * FROM ilceler WHERE id ='$adress->semt'"));
							$nerde = $adress->adres." ".$semt->baslik." ".$sehir->baslik;
							$shr = $sehir->baslik;
							$smt = $semt->baslik;
							$adrs = $adress->adres;
							$pk = $adress->postakodu;
							$tel = $adress->ceptel;
						}else{
							$nerde = "";
							$tel = "";
							$shr = "";
							$smt = "";
							$adrs = "";
							$pk = "";
						}
						?>
						<input type="hidden" name="merchant_id" value="<?=$pytr_hsp['merchant_id'];?>"/>
						<input type="hidden" name="user_ip" value="<?=ip();?>"/>
						<input type="hidden" name="merchant_oid" value="<?=$_SESSION['uyeid'].$uniq;?>"/>
						<input type="hidden" name="email" value="<?=$_SESSION['email'];?>"/>
						<input type="hidden" name="payment_amount" value="<?=$ucret;?>"/>
						<input type="hidden" name="no_installment" value="0"/>
						<input type="hidden" name="max_installment" value="9"/>
						<input type="hidden" name="user_name" value="<?=$_SESSION['ad'].' '.$_SESSION['soyad'];?>"/>
						<input type="hidden" name="merchant_ok_url" value="<?=$pytr_hsp['success'];?>"/>
						<input type="hidden" name="merchant_fail_url" value="<?=$pytr_hsp['fail'];?>"/>
						<input type="hidden" name="paytr_token" value="<?=$token;?>"/>
						<input type="hidden" name="user_basket" value="<?=$user_basket;?>"/>
						<input type="hidden" name="user_address" value="<?=$nerde;?>"/>
						<input type="hidden" name="user_phone" value="<?=$tel;?>"/>
						<input type="hidden" name="debug_on" value="1">
						<div class="column col-xs-12 col-sm-6" id="left_column">
							<table width="100%" cellpadding="0"style="margin-top:10px;" cellspacing="0">
                                      <tbody>
								<tr>
									<td width="20"><input type="checkbox" id="sozhavale1" tabindex="9" required></td>
									<td><label for="sozhavale1"><a target="_blank" href="on-bilgilendirme.html" class="Contracts" rel="preInfo">Ön bilgilendirme formunu</a> kabul ediyorum.</label></td>
								</tr>
								<tr>
									<td width="20"><input type="checkbox" id="sozhavale2" tabindex="8" required></td>
									<td><label for="sozhavale2"><a target="_blank" href="satis-sozlesmesi.html" class="Contracts" rel="agreement">Mesafeli satış sözleşmesini</a> kabul ediyorum.</label></td>
								</tr>
								</tbody>
							</table>
							</div>
							<div class="column col-xs-12 col-sm-6" id="right_column">
							<div class="fyt">
							<p class="strike" style="display: block;"><b>Toplam:</b><strong>  <?php $toplam = $STOPLAM; echo number_format($STOPLAM+8, 2, ',', '.'); ?> ₺</strong></p>
							</div>
							</div>
							<div class="cart_navigation" style="margin-bottom:10px;">
								<button class="button" type="submit">KREDİ KARTI İLE ÖDE</button>
								
								
								
								
							
								
								
								
								
							</div>
					</form>
					<div class="clearfix"></div>
					</div>
					<div class="tab-pane fade" id="Passw" style="padding-top:10px;">
					<FORM ACTION="https://www.paypal.com/cgi-bin/webscr" METHOD="POST">
						<?php
						$uniq = microtime(true);
						$uniq = round($uniq);
						$py_hsp = Sonuc(Sorgu("SELECT * FROM poslar WHERE yontem='2'"));
						$py_hsp = json_decode($py_hsp->secenek,true);
						?>
						<INPUT TYPE="hidden" NAME="business" VALUE="<?=$py_hsp['p_tc'];?>">
						<INPUT TYPE="hidden" NAME="cmd" VALUE="_cart">
						<input type="hidden" name="rm" value="2" />
						<input type="hidden" name="upload" value="1">
						<input type="hidden" name="tax_cart" value="<?=$vergi;?>">
						<input type="hidden" name="return" value="<?=$py_hsp['success'];?>">
						<input type="hidden" name="cancel_return" value="<?=$py_hsp['fail'];?>">
						<input type="hidden" name="handling_cart" value="8">
						<input type="hidden" name="shipping" value="8">
						<input type="hidden" name="lc" value="tr_TR">
						 <?php 
						 foreach ($b_paypal as $key => $value) {
						 	echo "<input type='hidden' name='".$key."' value='".$value."'>";
						 }
						 ?>
						
						
						<INPUT TYPE="hidden" NAME="currency_code" VALUE="TRY">
						<INPUT TYPE="hidden" NAME="first_name" VALUE="<?php echo $_SESSION['ad']; ?>">
						<input type="hidden" name="last_name" value="<?php echo $_SESSION['soyad']; ?>">
						<input type="hidden" name="address1" value="<?=$adrs." / ".$smt;?>">
						<input type="hidden" name="city" value="<?=$shr;?>">
						<input type="hidden" name="zip" value="<?=$pk;?>">
						<input type="hidden" name="email" value="<?=$_SESSION['email'];?>">
						<INPUT TYPE="hidden" name="charset" value="utf-8">
						<input type="hidden" name="state" value="TR">
						PayPal, online ödeme yapmanın ve almanın daha hızlı, kolay ve güvenli yoludur. Kullanıcılar, bir PayPal hesabı açtıklarında kredi kartı gibi finansal bilgilerini yalnızca bir kez girerler. Daha sonra PayPal ile yaptıkları alışverişlerde kart bilgilerini girmeden yalnızca PayPal'da kayı₺ı e-posta adresleri ve parolalarını kullanarak hızlı, kolay ve güvenli bir biçimde ödemelerini gerçekleştirirler.
							<p class="ti₺e_blockk"></p>
							
							<div class="column col-xs-12 col-sm-6" id="left_column">
							<table width="100%" cellpadding="0"style="margin-top:10px;" cellspacing="0">
                                    <tbody>
								<tr>
									<td width="20"><input type="checkbox" id="sozhavale1" tabindex="9" required></td>
									<td><label for="sozhavale1"><a target="_blank" href="on-bilgilendirme.html" class="Contracts" rel="preInfo">Ön bilgilendirme formunu</a> kabul ediyorum.</label></td>
								</tr>
								<tr>
									<td width="20"><input type="checkbox" id="sozhavale2" tabindex="8" required></td>
									<td><label for="sozhavale2"><a target="_blank" href="satis-sozlesmesi.html" class="Contracts" rel="agreement">Mesafeli satış sözleşmesini</a> kabul ediyorum.</label></td>
								</tr>
								</tbody>
							</table>
							</div>
							<div class="column col-xs-12 col-sm-6" id="right_column">
							<div class="fyt">
							<p class="strike" style="display: block;"><b>Toplam:</b><strong>  <?php $toplam = $STOPLAM; echo number_format($STOPLAM+8, 2, ',', '.'); ?> ₺</strong></p>
							</div>
							</div>
							<div class="cart_navigation" style="margin-bottom:10px;">
								<button class="button" type="submit">PAYPAL İLE ÖDE</button>
							</div>
						<div class="clearfix"></div>
						</FORM>	
					</div>
					<div class="tab-pane fade" id="Docs" style="padding-top:10px;">
					<form action="sepet-sonuc.html" name="form1" method="post">
						<p>Lütfen Ödeme yapacağınız bankayı seçerek "Siparişi Tamamla" butonuna basınız</p>
						<input type="hidden" name="odemesekli" id="odemesekli" value="Banka Havalesi">
						<input type="hidden" name="fiyat" id="fiyat" value="<?php echo number_format($STOPLAM+8, 2, ',', '.'); ?>">
						<input type="hidden" name="uyeid" id="uyeid" value="<?php echo $_SESSION["uyeid"];?>">
						<div id="contact" class="page-content page-contact">
						<div class="contact-form-box" style="margin-top:20px;">
						<div class="form-selector">
                            <label>Ödeme Yapmak İstediğiniz Banka</label>
                            <select class="form-control input-sm" id="subject">
							<?php $Sorgu = Sorgu("SELECT * FROM banka_hesaplari WHERE durum = 1 ORDER BY id DESC");
							while($Sonuc = Sonuc($Sorgu)){?>
                                <option value="<?php echo $Sonuc->banka_adi;?>"><?php echo $Sonuc->banka_adi;?> - <?php echo $Sonuc->sube_adi;?></option>
							 <?php }?> 	
                            </select>
                        </div>
                        </div>
                        </div>
						<div class="column col-xs-12 col-sm-6" id="left_column">
							<table width="100%" cellpadding="0"style="margin-top:10px;" cellspacing="0">
                                       <tbody>
								<tr>
									<td width="20"><input type="checkbox" id="sozhavale1" tabindex="9" required></td>
									<td><label for="sozhavale1"><a target="_blank" href="on-bilgilendirme.html" class="Contracts" rel="preInfo">Ön bilgilendirme formunu</a> kabul ediyorum.</label></td>
								</tr>
								<tr>
									<td width="20"><input type="checkbox" id="sozhavale2" tabindex="8" required></td>
									<td><label for="sozhavale2"><a target="_blank" href="satis-sozlesmesi.html" class="Contracts" rel="agreement">Mesafeli satış sözleşmesini</a> kabul ediyorum.</label></td>
								</tr>
								</tbody>
							</table>
							</div>
							<div class="column col-xs-12 col-sm-6" id="right_column">
							<div class="fyt">
							<p class="strike" style="display: block;"><b>Toplam:</b><strong>  <?php $toplam = $STOPLAM; echo number_format($STOPLAM+8, 2, ',', '.'); ?> ₺</strong></p>
							</div>
							</div>
							<div class="cart_navigation" style="margin-bottom:10px;">
								<button type="submit" name="checkout" class="button">SİPARİŞİ TAMAMLA</button>
							</div>

						<div class="clearfix"></div>
					</form>
					</div>
		<div class="tab-pane fade" id="Docss" style="padding-top:10px;">
					<form action="sepet-sonuc.html" name="form1" method="post">
						<p><font size="4" face="Arial" color="red">Kapıda Ödeme Ücreti 
</font></p>
						<input type="hidden" name="odemesekli" id="odemesekli" value="Kapıda Ödeme">
						<input type="hidden" name="ek" value="<?php echo $ayar->pinterest;?>">
						<input type="hidden" name="fiyat" id="fiyat" value="<?php echo number_format($STOPLAM+8, 2, ',', '.'); ?>">
						<input type="hidden" name="uyeid" id="uyeid" value="<?php echo $_SESSION["uyeid"];?>">
						<div id="contact" class="page-content page-contact">
						<div class="contact-form-box" style="margin-top:20px;">
						<div class="form-selector">
                            <label>Kargo görevlisi geldiğinde önce kargonuzun sağlam olduğunundan emin olun. Kargoda oluşmuş hertürlü zarar için lütfen kargo görevlisine tutanak tutanak tutturmayı unutmayınız.  </label>
                       
                        </div>
                        </div>
                        </div>
						<div class="column col-xs-12 col-sm-6" id="left_column">
							<table width="100%" cellpadding="0"style="margin-top:10px;" cellspacing="0">
                                <tbody>
								<tr>
									<td width="20"><input type="checkbox" id="sozhavale1" tabindex="9" required></td>
									<td><label for="sozhavale1"><a target="_blank" href="on-bilgilendirme.html" class="Contracts" rel="preInfo">Ön bilgilendirme formunu</a> kabul ediyorum.</label></td>
								</tr>
								<tr>
									<td width="20"><input type="checkbox" id="sozhavale2" tabindex="8" required></td>
									<td><label for="sozhavale2"><a target="_blank" href="satis-sozlesmesi.html" class="Contracts" rel="agreement">Mesafeli satış sözleşmesini</a> kabul ediyorum.</label></td>
								</tr>
								</tbody>
							</table>
							</div>
							<div class="column col-xs-12 col-sm-6" id="right_column">
							<div class="fyt">
							<p class="strike" style="display: block;"><b>Toplam:</b><strong>  
							
							
							
							
							<?php $toplam = $STOPLAM; echo number_format($STOPLAM+8, 2, ',', '.'); ?>
							
							

							</strong></p>
							</div>
							</div>
							<div class="cart_navigation" style="margin-bottom:10px;">
								<button type="submit" name="checkout" class="button">SİPARİŞİ TAMAMLA</button>
							</div>

						<div class="clearfix"></div>
					</form>
					</div>
				</div>
			</div>
            </div>
            <!-- ./ Center colunm -->
			<!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block category -->
                <div class="block left-module">
				<p class="ti₺e_block">SİPARİŞ ÖZETİ</p>
				<style>
				.p-rightt{
					margin-left: 110px;
				}
				.fyt{
					text-align: right;
					padding-top:30px;
				}
				.strike{
					
				}
				.ti₺e_blockk {
					font-size: 16px;
					font-weight: bold;
					border-bottom: 1px solid #eaeaea;
					padding-left: 5px;
					text-transform: uppercase;
					padding-top: 11px;
					padding-bottom: 12px;
				}
				.p-leftt{
					width: 100px;
					float: left;
					position: relative;
				}
				.p-namee{
					font-size: 12px;
				}
				.toal-cartt {
					margin-top: 10px;
				}
				.p-ricee{
					color: #0088cc;
				}
				.product-infoo {
					margin-top: 10px;
					border-bottom: 1px solid #eaeaea;
					display: block;
					overflow: hidden;
					padding-bottom: 10px;
				}
				.toal-pricee {
					font-size: 18px;
					color: #999;
				}
				</style>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-category">
                            <div class="layered-content">
							<ul>
							<?php
							if (isset($_SESSION["urunler"]) && count($_SESSION["urunler"]) >= 1) { 
							$toplam = 0.00;
							foreach($_SESSION["urunler"] as $key1 => $value1){
							for($i=0; $i<count($key1)/2; $i++){
							$deger= $value1["id"];
							$adet= $value1["adet"];
							$SepetCek = Sonuc(Sorgu("SELECT * FROM urunler WHERE id = '$deger'"));?>
                                <li class="product-infoo">
                                    <div class="p-leftt">
                                        <a href="Urun/<?php echo $SepetCek->seo;?>.html">
                                        <img class="img-responsive" style="max-width: 70%;" src="uploads/urunler/kucuk/<?php echo $SepetCek->resim;?>" alt="<?php echo $SepetCek->adi;?>">
                                        </a>
                                    </div>
                                    <div class="p-rightt">
                                        <p class="p-namee"><?php echo $SepetCek->adi;?></p>
										<?php if($SepetCek->indirim == "1"){?>
                                        <p class="p-ricee"><?php echo number_format($SepetCek->ifiyat, 2, ',', '.'); ?> ₺</p>
										<?php }else{?>
										<p class="p-ricee"><?php echo number_format($SepetCek->fiyat, 2, ',', '.'); ?> ₺</p>
										<?php }?>
                                        <p>Adet: <?php echo $adet;?></p>
                                    </div>
									<?php 
									  if($SepetCek->indirim == "1"){
										$toplam += $SepetCek->ifiyat*$adet;
									  }else{
										$toplam += $SepetCek->fiyat*$adet;
									}?>
                                </li>
								<?php }}}?>	
							</ul>
							<div class="toal-cartt">
								<span>KDV Dahil</span>
								<span class="toal-pricee pull-right"><?php $toplam = $STOPLAM; echo number_format($STOPLAM+8, 2, ',', '.'); ?>  ₺</span>
							</div>
							<div class="toal-cartt">
								<span>Kargo Ücreti</span>
								<span class="toal-pricee pull-right">0,00 ₺</span>
							</div>
							<div class="toal-cartt">
								<span><strong>Genel Toplam</strong></span>
								<span class="toal-pricee pull-right"><?php $toplam = $STOPLAM; echo number_format($STOPLAM+8, 2, ',', '.'); ?> ₺</span>
							</div>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
                <!-- ./block category  -->
            </div>
            <!-- ./left colunm -->
        </div>
        <!-- ./row-->
        </div>
    </div>
</div>
<!-- ./page wapper-->
		

<?php include("footer.php");?>
	