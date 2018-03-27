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
            <span class="navigation_page">Alışveriiş Sepeti</span>
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
				<p class="title_blockk">KARGO TESLİM ADRESİNİ SEÇİN</p>
                <!-- Content page -->
				<form action="sepet-odeme.html" method="POST">
                <div class="content-text clearfix">
                   <table class="table table-bordered table-wishlist">
                    <tbody>
					<?php $Sorgu = Sorgu("SELECT * FROM adres WHERE uyeid = '{$_SESSION['uyeid']}'");
					$say = 1;
						while($Sonuc = Sonuc($Sorgu)){?>
						<?php $ilce = Sonuc(Sorgu("SELECT * FROM ilceler WHERE id = '$Sonuc->semt'"));?>
						<?php $il = Sonuc(Sorgu("SELECT * FROM iller WHERE id = '$Sonuc->sehir'"));?>
                        <tr id="adreshover">
                            <td style="vertical-align: middle;">
							<input type="radio" id="Address<?php echo $Sonuc->id;?>" name="Address" value="<?php echo $Sonuc->id;?>" <?php echo($say++ == "1" ? 'checked="checked"' : '');?>></td>
                            <?php if($Sonuc->adres_tipi == "kurumsal"){?>
							<td style="vertical-align: middle;width:250px;"><label style="display: block;position: absolute;left: 0;width: 100%;padding: 61px 16px 61px 95px;margin-top: -70px;" for="Address<?php echo $Sonuc->id;?>"><?php echo $Sonuc->baslik;?></label></td>
                            <td><b>Firma : <?php echo $Sonuc->firma_adi;?></b><br>
								 Vergi Numarası : <?php echo $Sonuc->vn;?><br>
								 Vergi Dairesi : <?php echo $Sonuc->vd;?><br>
								 <?php echo $Sonuc->adres;?><br>
								 <?php echo $ilce->baslik;?>, <?php echo $Sonuc->postakodu;?><br>
								 <?php echo $il->baslik;?>, <br>
								 Telefon : <?php echo $Sonuc->ceptel;?>	
							</td>
							<?php }elseif($Sonuc->adres_tipi == "bireysel"){?>
							<td style="vertical-align: middle;width:250px;"><label style="display: block;position: absolute;left: 0;width: 100%;padding: 61px 16px 61px 95px;margin-top: -70px;" for="Address<?php echo $Sonuc->id;?>"><?php echo $Sonuc->baslik;?></label></td>
                            <td>
								<b>Ad,Soyad : <?php echo $Sonuc->ad;?> <?php echo $Sonuc->soyad;?></b><br>
								TC Kimlik No : <?php echo $Sonuc->tc;?><br>
								<?php echo $Sonuc->adres;?><br>
								<?php echo $ilce->baslik;?>, <?php echo $Sonuc->postakodu;?><br>
								<?php echo $il->baslik;?>, <br>
								Telefon : <?php echo $Sonuc->ceptel;?>
							</td>
							<?php }?>
                        </tr>
						<?php }?>
                    </tbody>
                </table>
</form>
                </div>
                <!-- ./Content page -->
			    <a href="adres-ekle.html">  <button type="submit" title="Yeni Adres Ekle" class="button" onclick="billing.save()"><span><span>Yeni Adres Ekle</span></span></button></a>
			    <a href="sepet-odeme.html">  <button type="submit" title="Satın Al" class="button" onclick="billing.save()"><span><span>Satın Al</span></span></button></a>
				
				
				
				<br>
				
            </div>
            <!-- ./ Center colunm -->
			<!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block category -->
                <div class="block left-module">
				<p class="title_block">SİPARİŞ ÖZETİ</p>
				<style>
				.p-rightt{
					margin-left: 110px;
				}
				.title_blockk {
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
				#adreshover label{
					cursor:pointer;
				}
				#adreshover:hover{
					background:#EEEEEE;
					cursor:pointer;
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
                                        <a href="urun-detay-<?php echo $SepetCek->seo;?>.html">
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
								<span class="toal-pricee pull-right"><?php echo number_format($toplam, 2, ',', '.');?> ₺</span>
							</div>
							<div class="toal-cartt">
								<span>Kargo Ücreti</span>
								<span class="toal-pricee pull-right">0,00 ₺</span>
							</div>
							<div class="toal-cartt">
								<span><strong>Genel Toplam</strong></span>
								<span class="toal-pricee pull-right"><?php echo number_format($toplam, 2, ',', '.');?> ₺</span>
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
	