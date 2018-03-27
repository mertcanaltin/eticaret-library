<?php include("header2.php");?>   

<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php if(!isset($_SESSION["email"])){
	header("Location:giris.html");
}?>
<?php $siparisid = g('id');?>
<?php $Sip	   	= Sorgu("SELECT * FROM siparisler WHERE id = '{$siparisid}'");
if(!mysql_affected_rows()){?>
<?php }else{
while($Siparis = Sonuc($Sip)){?>
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
                                                                        <div class="my-account"><div class="page-title title-buttons">
    <h1> #<?php echo $Siparis->sno;?> nolu sipariş detayları</h1>
 
<a href="javascript:void(0);" onClick="window.print()" class="print"></a> <style> .print{display:block;background-image:url(http://4.bp.blogspot.com/-5oUvKakX8m4/Tx-uTUyj0PI/AAAAAAAAEXQ/-noPcL4_0fc/s1600/yzd.png);width:74px;height:24px;} .print:hover{background-position: 0px -25px;} .print:active{background-position: 0px -50px;} </style> 
</div>
<dl class="order-info">
    <dt>Sipariş Durumu:</dt>
    <dd>
                <ul id="order-info-tabs">
                                    <li class="current first last">Onaylandı</li>
                            </ul>
        <script type="text/javascript">decorateGeneric($('order-info-tabs').select('LI'),['first','last']);</script>
    </dd>
</dl>
<p class="order-date">Sipariş Tarihi: <?php echo $Siparis->tarih;?></p>
<div class="col2-set order-info-box">
    <div class="col-1">
        <div class="box">
            <div class="box-title">
                <h2>Fatura ve Teslimat Bilgileri</h2>
            </div>
            <div class="box-content">
                <address><?php $Sorgu = Sorgu("SELECT * FROM adres WHERE id = '$Siparis->adres'");
										while($Sonuc = Sonuc($Sorgu)){?>
										<?php $ilce = Sonuc(Sorgu("SELECT * FROM ilceler WHERE id = '$Sonuc->semt'"));?>
										<?php $il = Sonuc(Sorgu("SELECT * FROM iller WHERE id = '$Sonuc->sehir'"));?>
										<?php echo $Sonuc->adres;?><br><?php echo $ilce->baslik;?> - <?php echo $il->baslik;?> <?php echo $Sonuc->postakodu;?>
										<?php }?>
</address>
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="box">
            <div class="box-title">
                <h2>Ödeme Şekli</h2>
            </div>
            <div class="box-content">
                                    <?php echo $Siparis->odeme_sekli;?>                            </div>
        </div>
    </div>
</div>

<div class="order-items order-details">
            <h2 class="table-caption">Ürün Bilgileri          </h2>

    <table class="data-table" id="my-orders-table" summary="Items Ordered">
    <colgroup><col>
    <col width="1">
    <col width="1">
    <col width="1">
    <col width="1">
    </colgroup><thead>
        <tr class="first last">
            <th>ÜRÜN ADI / ÖZELLİK</th> 
          
            <th class="a-right">ADET</th>
             <th class="a-right">BİRİM FİYATI</th>
            <th class="a-right">TOPLAM</th>
        </tr>
    </thead>
    <tfoot><?php 
									$aratoplam = 0;
									$bol = explode("//",$Siparis->urun);
									foreach ($bol as $b) {
										$b = explode("|",$b);
										$c = explode("|",$b);
										if(gettype($b) == "array"){
											$sorguu = mysql_query("SELECT * FROM urunler WHERE id='$b[0]'");
											if(isset($secenekler) && is_array($secenekler)) $secenekler = "";
											$secenek  = json_decode($Siparis->secenek, true);
											if(is_array($secenek[$b[0]]) && count($secenek[$b[0]]) > 0){
												$secenek[$b[0]]['id'] = explode("|",$secenek[$b[0]]['id']);
												for ($i=0; $i < count($secenek[$b[0]]['id']) ; $i++) {
													$y = isset($secenek[$b[0]]['id'][$i]) ? $secenek[$b[0]]['id'][$i] : "0";
													$secbak = mysql_fetch_array(mysql_query("SELECT * FROM secenek WHERE id='$y'"));
													if($secbak){
														$xx = $secbak['kategori'];
														$baslik =mysql_fetch_array(mysql_query("SELECT * FROM secenek_kategori WHERE id='$xx'"));
														if($baslik){
															$secenekler[] = array("adi" => $secbak['adi'],"baslik" => $baslik['kategori_adi']);
														}
													}
												}
												
											}
											if(mysql_num_rows($sorguu)>0) {?>
												<?php $uu = mysql_fetch_array($sorguu);?>
                <tr class="subtotal first">
        <td colspan="4" class="a-right">
                        Ara Toplam :                    </td>
        <td class="last a-right">
                        <span class="price"><?php echo($uu['indirim'] == "1" ? ''.number_format($uu['ifiyat']*$b[1], 2, ',', '.').'' : ''.number_format($uu['fiyat']*$b[1], 2, ',', '.').'');?>
 ₺</span>                    </td>
    </tr>
            <tr class="shipping">
        <td colspan="4" class="a-right">
                        Kargo Fiyatı :                    </td>
        <td class="last a-right">
                        <span class="price">0 ₺</span>                    </td>
    </tr>
            <tr class="grand_total last">
        <td colspan="4" class="a-right">
                        <strong>Genel Toplam :</strong>
                    </td>
        <td class="last a-right">
                        <strong><span class="price">
<?php echo($uu['indirim'] == "1" ? ''.number_format($uu['ifiyat']*$b[1], 2, ',', '.').'' : ''.number_format($uu['fiyat']*$b[1], 2, ',', '.').'');?>



 ₺</span></strong>
                    </td>
    </tr>
        </tfoot>
                                                    <tbody class="odd">
            <tr class="border first last" id="order-item-row-18">
    <td><h3 class="product-name"><?php echo $uu['adi'];?> </br><?php 
															if(isset($secenekler) && is_array($secenekler)){
															foreach ($secenekler as $k) {
															 	echo "<strong>".$k['baslik']." :".$k['adi']."</strong><br>";
															 }
															} ?></h3>
                                                                </td>
    
    <td class="a-right">
                    <span class="price-excl-tax">
					
                                                    <span class="cart-price">
                
                                            <span class="price"><?php echo $b[1];?></span>                    
                </span>


                            </span>
            <br>
                    </td>
    <td class="a-right">
    	<?php echo ($uu['indirim'] == "1" ? ''.number_format($uu['ifiyat'], 2, ',', '.').'' : ''.number_format($uu['fiyat'], 2, ',', '.').'');?>  ₺
    </td>
    <td class="a-right last">
                    <span class="price-excl-tax">
                                                    <span class="cart-price">
                
                                            <span class="price">	


<?php echo($uu['indirim'] == "1" ? ''.number_format($uu['ifiyat']*$b[1], 2, ',', '.').'' : ''.number_format($uu['fiyat']*$b[1], 2, ',', '.').'');?>




											<?php 
													if($uu['indirim'] == "1"){
														$aratoplam += $uu['ifiyat']*$b[1];
													}else{
														$aratoplam += $uu['fiyat']*$b[1];
													}?>
												<?php }
											}	
										}
									?> ₺ </span>                    
                </span>


                            </span>
            <br>
                    </td>
    <!--
        <th class="a-right"><span class="price">$110.00</span></th>
            -->
</tr>
                    </tbody>
        </table>
<script type="text/javascript">decorateTable('my-orders-table', {'tbody' : ['odd', 'even'], 'tbody tr' : ['first', 'last']})</script>

  
</div></div>                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>



<?php }}?>

<?php include("footer.php");?>
	