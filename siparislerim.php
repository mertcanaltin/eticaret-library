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


</script>
<script type="text/javascript">
//<![CDATA[
    var reorderFormDetail = new VarienForm('reorder-validate-detail');
//]]>
</script>
</div>
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                
                                <div class="col-main">
                                                                        <div class="my-account"><div class="page-title">
    <h1>SİPARİŞLERİM</h1>
</div>


    
<table class="data-table" id="my-orders-table">
    <colgroup><col width="1">
    <col width="1">
    <col>
    <col width="1">
    <col width="1">
    <col width="1">
    </colgroup><thead>
        <tr class="first last">
            <th>SİPARİŞ NO# </th>
            <th>SİPARİŞ TARİHİ</th>
            <th>ÖDEME ŞEKLİ</th>
            <th><span class="nobr">SİPARİŞ TUTARI</span></th>
            <th><span class="nobr"> Durum</span></th>
            <th>İŞLEM</th>
        </tr>
    </thead>
    <tbody>				<?php $Sorgu = Sorgu("SELECT * FROM siparisler WHERE uyeid = '{$_SESSION['uyeid']}' ORDER BY id DESC");
								if(!mysql_affected_rows()){?>
								<tr>
								<td colspan="7">
									Siparişiniz bulunmuyor
								</td>	
								</tr>
								<?php }else{
								while($Sonuc = Sonuc($Sorgu)){?>
								<tr>
                        <tr class="first last odd">
           <a href="siparis-detay-<?php echo $Sonuc->id;?>.html"> <td># <?php echo $Sonuc->sno;?></td></a>
            <td><span class="nobr"><?php echo $Sonuc->tarih;?></span></td>
            <td> <?php echo $Sonuc->odeme_sekli;?></td>
            <td><span class="price"> <?php echo $Sonuc->fiyat;?> ₺</span></td>
            <td><em>Onay Bekliyor</em></td>
            <td class="a-center last">
                <span class="nobr"><a href="siparis-detay-<?php echo $Sonuc->id;?>.html">Detay</a>
                                                            <span class="separator">
                                </span>
            </td>
        </tr>
            </tbody><?php }}?>
</table>
<script type="text/javascript">decorateTable('my-orders-table');</script>

   
</div>                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
<?php include("footer.php");?>
	