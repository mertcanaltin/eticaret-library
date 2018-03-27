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
        <h1>DESTEK HİZMETİ</h1>
    </div>
  <div class="content-text clearfix">
					<div class="row">
					<div class="col-sm-12">
					<div class="box-authentication">
						<div class="row">
						  <div class="col-xs-12 col-sm-12 col-md-"><a class="btn btn-success pull-right" href="ticket-olustur.html"><i style="margin-top: 3px;" class="fa fa-plus-circle"></i> Yeni Destek Talebi Gönderin</a></div>
						</div>
						<table id="example1" style="margin-top:10px;" class="table table-bordered table-hover">
                    <thead id="ticket" style="background: #F6F6F6;">
                      <tr>
                        <th>Tarih</th>
                        <th>Departman</th>
                        <th>Başlık</th>
                        <th>Durum</th>
                        <th>Son Güncelleme</th>
                        <th style="width:100px;">İşlemler</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php $Sorgu = Sorgu("SELECT * FROM ticket WHERE uyeid = '{$_SESSION['uyeid']}' ORDER BY id DESC");
					while($Sonuc = Sonuc($Sorgu)){?>
                      <tr>
                        <td><?php echo $Sonuc->tarih;?></td>
                        <td>
						<?php if($Sonuc->departman=='1'){?>
							Ödeme İşlemleri
						<?php }elseif($Sonuc->departman=='2'){?>
							Üyelik İşlemleri
						<?php }elseif($Sonuc->departman=='3'){?>
						
						<?php }?>
						</td>
                        <td><a href="ticket-oku.html?id=<?php echo $Sonuc->id;?>"><?php echo $Sonuc->baslik;?></a></td>
                        <td style="text-align: center;">
						<?php
			 				if($Sonuc->durum=='0'){?>
                             <span class="label label-danger">Yanıtlandı</span>
                             <?php } else { ?>
                             <span class="label label-success">Açık</span>
						 <?php } ?>
						</td>
                        <td><?php echo $Sonuc->guncelleme;?></td>
                        <td style="text-align: center;">
						 <a href="ticket-oku.html?id=<?php echo $Sonuc->id;?>" class="btn btn-info btn-xs" title="Düzenle" id="add-sticky">
						 Bildirimi Görüntüle
						 </a>
                        </td>
                      </tr>
					<?php }?>  
                    </tbody>
                  </table>
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
	