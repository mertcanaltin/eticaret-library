<?php include("header2.php");?>   
<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php if(!isset($_SESSION["email"])){
	header("Location:giris.html");
}?>
<?php
if(g('islem')=="sil")
{
	$id = p('adresid');
	$adres_sil_sorgu = Sorgu("DELETE FROM adres WHERE id='$id'");
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
		<table style="width:60%;" cellpadding="10" cellspacing="3" border="0">
								<tbody>
								<?php $Sorgu = Sorgu("SELECT * FROM adres WHERE uyeid = '{$_SESSION['uyeid']}'");
								while($Sonuc = Sonuc($Sorgu)){?>
								<?php $ilce = Sonuc(Sorgu("SELECT * FROM ilceler WHERE id = '$Sonuc->semt'"));?>
								<?php $il = Sonuc(Sorgu("SELECT * FROM iller WHERE id = '$Sonuc->sehir'"));?>
								<tr>
								<?php if($Sonuc->adres_tipi == "kurumsal"){?>
									<td align="left" width="60%">
										<b>Firma : <?php echo $Sonuc->firma_adi;?></b><br>
										 Vergi Numarası : <?php echo $Sonuc->vn;?><br>
										 Vergi Dairesi : <?php echo $Sonuc->vd;?><br>
										 <?php echo $Sonuc->adres;?><br>
										 <?php echo $ilce->baslik;?>, <?php echo $Sonuc->postakodu;?><br>
										 <?php echo $il->baslik;?>, <br>
										 Telefon : <?php echo $Sonuc->ceptel;?>			  
									</td>
								<?php }elseif($Sonuc->adres_tipi == "bireysel"){?>
									<td align="left" width="60%">
										<b>Ad,Soyad : <?php echo $Sonuc->ad;?> <?php echo $Sonuc->soyad;?></b><br>
										TC Kimlik No : <?php echo $Sonuc->tc;?><br>
										<?php echo $Sonuc->adres;?><br>
										<?php echo $ilce->baslik;?>, <?php echo $Sonuc->postakodu;?><br>
										<?php echo $il->baslik;?>, <br>
										Telefon : <?php echo $Sonuc->ceptel;?>				  
									</td>
								<?php }?>
									 <td width="40%" align="right">
										<form name="formedit" action="adres-ekle.html?islem=duzenle" method="post">
										<input type="hidden" name="adresid" id="adresid" value="<?php echo $Sonuc->id;?>">
										<input type="submit" name="submit_edit" value="Değiştir" class="btn btn-primary">			
										</form>
										<br><br>
													  
										<form name="formedit" action="adres-defteri.html?islem=sil" method="post" onsubmit="return(confirm('Bu Adresi Kaldırmak İstediğinizden Emin Misiniz?'));">
										<input type="hidden" name="adresid" id="adresid" value="<?php echo $Sonuc->id;?>">
										<input type="submit" name="submit_delete" value="Kaldır" class="btn btn-danger">			
										</form>
									</td>
								</tr>
								<tr><td colspan="2"><hr></td></tr>
								<?php }?>
								</tbody>
							</table>
							

</div>

</div>                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
<?php include("footer.php");?>
	