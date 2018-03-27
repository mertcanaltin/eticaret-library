<?php include("header2.php");?>
<?php upla(); ?>
		

		
		
		
		
		               
        <div class="main-container col1-layout">
            
<div class="breadcrumbs">
    <div class="container">
        <ul>
                            <li class="home">
                                    <a href="index.html" title="Anasayfaya Dön">Anasayfa</a>
                    
                                                    <span>/ </span>
                                </li>
                            <li class="cms_page">
                                    <strong>
Sepetim</strong>
                                                </li>
                    </ul>
    </div>
</div>
            <div class="container">
                <div class="main">
                    <div class="col-main">
                                                <div class="std"><div class="f-fix about-page">
<div class="container">
<div class="f-block about-page">
<div class="row">
<div class="col-sm-8">




<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
  
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading no-line">
            <span class="page-heading-title2">ALIŞVERİŞ SEPETİNİZ</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content page-order">
   
			<?php if (!isset($_SESSION["urunler"]) || count($_SESSION["urunler"]) < 1) {?>
			<div class="heading-counter well">İşleme devam edebilmek için sepetinize ürün eklemelisiniz.</div>
			<?php } else {?>
            <div class="heading-counter warning">Sepetinizde toplam <strong><?php echo count($_SESSION["urunler"]);?></strong> ürün bulunuyor.</div>
			
            <div class="order-detail-content">
                <table class="table table-bordered table-responsive cart_summary">
                    <thead>
                        <tr>
                            <th class="cart_product">Ürün</th>
                            <th>Açıklama</th>
                            <th>Fiyat</th>
                            <th>Adet</th>
                            <th>Toplam</th>
                            <th  class="action"><i class="fa fa-trash-o"></i></th>
                        </tr>
                    </thead>
                    <tbody>
					<?php
					if (isset($_SESSION["urunler"]) && count($_SESSION["urunler"]) >= 1) { 
					$toplam = 0.00;
					 foreach($_SESSION["urunler"] as $key1 => $value1){
					   for($i=0; $i<count($key1)/2; $i++){
						$deger	= $value1["id"];
						$adet	= $value1["adet"];
						$secenek= explode("|",$value1["secenek"]);
						$SepetCek = Sonuc(Sorgu("SELECT * FROM urunler WHERE id = '$deger'"));
                        if(isset($xk)) $xk = "";
                        if(is_array($secenek)){
                        for ($i=0; $i < count($secenek) ; $i++) {
                        $sid = (isset($secenek[$i]) && is_numeric($secenek[$i])) ? $secenek[$i] : "0";
                        $xs = Sonuc(Sorgu("SELECT * FROM secenek WHERE id = '$sid'"));
                        if($xs){
                            $kid = $xs->kategori;
                            $kk = Sonuc(Sorgu("SELECT * FROM secenek_kategori WHERE id = '$kid'"));
                            if($kk){
                                $xk[] = array("adi" => $xs->adi,"baslik" => $kk->kategori_adi);
                            }
                        }
                        }
                    }
                        ?>
                        <tr>
                            <td class="cart_product">
                                <a href="urun-detay-<?php echo $SepetCek->seo;?>.html"><img src="uploads/urunler/kucuk/<?php echo $SepetCek->resim;?>" alt="<?php echo $SepetCek->adi;?>"></a>
                            </td>
                            <td class="cart_description">
                                <p class="product-name"><a href="urun-detay-<?php echo $SepetCek->seo;?>.html"><?php echo $SepetCek->adi;?> </a></p>
                                <small class="cart_ref">Ürün Kodu : #<?php echo $SepetCek->urun_kodu;?></small><br>
								<?php foreach($xk as $s){?>
								<?php echo "<small>".$s['baslik']." : ".$s['adi']."</small>";?><br>
								<?php }?>
                            </td>
							<?php if($SepetCek->indirim == "1"){?>
                            <td class="price">
								<span><?php echo number_format($SepetCek->ifiyat, 2, ',', '.'); ?> ₺</span>
							</td>
							<?php }elseif($SepetCek->indirim == "0"){?>
							<td class="price">
								<span><?php echo number_format($SepetCek->fiyat, 2, ',', '.'); ?>  ₺</span>
							</td>
							<?php }?>
                            <td class="qty">
                                <input class="form-control input-sm" type="text" name="qq<?=$deger?>" value="<?php echo $adet;?>">
                           
                            </td>
                            <?php if($SepetCek->indirim == "1"){?>
                            <td class="price">
								<span name="pp<?=$deger?>"><?php echo number_format($SepetCek->ifiyat*$adet, 2, ',', '.'); ?> ₺</span>
								<?php $toplam += $SepetCek->ifiyat*$adet;?>
							</td>
							<?php }elseif($SepetCek->indirim == "0"){?>
							<td class="price">
								<span name="pp<?=$deger?>"><?php echo number_format($SepetCek->fiyat*$adet, 2, ',', '.'); ?> ₺</span>
								<?php $toplam += $SepetCek->fiyat*$adet;?>
							</td>
							<?php }?>
                            <td class="action">
                                <a href="?sil=<?php echo $SepetCek->id;?>">X</a>
                            </td>
                        </tr>
					<?php }}} ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" rowspan="4"></td>
                            <td colspan="3">Ara Toplam</td>
                            <td colspan="2" id="tdtoplam"><?php echo number_format($toplam, 2, ',', '.');?> ₺</td>
                        </tr>
						<tr>
                            <td colspan="3">KDV Dahil</td>
                            <td colspan="2" id="kdvtoplam">
							<?php 
							$kdv = $toplam*0/100;
							echo number_format($toplam+$kdv, 2, ',', '.');
							?> 
							₺</td>
                        </tr>
						<tr>
                            <td colspan="3">Kargo Ücreti</td>
                            <td colspan="2">0,00 ₺</td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Genel Toplam</strong></td>
                            <td colspan="2" ><strong name="toplam"><?php echo number_format($toplam, 2, ',', '.');?> ₺</strong></td>
                        </tr>
						
                    </tfoot>    
                </table>
				
               <a href="index.html">  <button type="submit" title="Alışverişe Devam Et" class="button" onclick="billing.save()"><span><span>Alışverişe Devam Et</span></span></button></a>
			    <a href="sepet-adres.html">  <button type="submit" title="Satın Al" class="button" onclick="billing.save()"><span><span>Satın Al</span></span></button></a>
            </div>
			<?php } ?>
        </div>
    </div>
</div>
















</div>

</div>
</div>


</div>
</div></div>                    </div>
                </div>
            </div>
        </div>
        
		
		
		
		

<?php include("footer.php");?>
	