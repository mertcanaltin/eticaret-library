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
</div>
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                
                                <div class="col-main">
                                                                        <div class="my-account"><div class="page-title">
    <h1>Üyelik BİLGİLERİM</h1>
</div>
<form action="bilgiguncelle.html" method="post">
<input id="uyeid" name="uyeid" type="hidden" class="form-control" value="<?php echo $_SESSION['uyeid'];?>">
    <div class="fieldset" style="">
	<label for="ad">Adınız</label>
							<input id="ad" style="text-transform: capitalize;" value="<?php echo $bilgilerim->ad; ?>" type="text" name="ad" class="form-control input-sm">
							<label for="soyad">Soyadınız</label>
							<input style="text-transform: uppercase;" id="soyad" value="<?php echo $bilgilerim->soyad; ?>" type="text" name="soyad" class="form-control input-sm">
							<label for="telefon">Cep Telefonu</label>
							<input id="telefon" name="telefon" type="text" value="<?php echo $bilgilerim->telefon; ?>" class="form-control input-sm">
							<label for="email">E-mail Adresiniz</label>
							<input id="email" type="text" name="email" value="<?php echo $bilgilerim->email; ?>" class="form-control input-sm">
      	<label for="email">Doğum Tarihi</label>
							<div class="form-inline">
							<select class="input form-control input-sm" name="gun" id="gun">
							<option value="">Gün</option>
							<?php for ($i=1;$i<=31;$i++){?>
							<option <?php echo($bilgilerim->gun == $i ? 'selected' : '');?> value="<?php echo $i;?>"><?php echo $i;?></option>
							<?php }?>
							</select>
							  -
							<select class="input form-control input-sm" name="ay" id="ay">
								<option value="">Ay</option>
								<option <?php echo($bilgilerim->ay == "Ocak" ? 'selected' : '');?> value="Ocak">Ocak</option>
								<option <?php echo($bilgilerim->ay == "Şubat" ? 'selected' : '');?> value="Şubat">Şubat</option>
								<option <?php echo($bilgilerim->ay == "Mart" ? 'selected' : '');?> value="Mart">Mart</option>
								<option <?php echo($bilgilerim->ay == "Nisan" ? 'selected' : '');?> value="Nisan">Nisan</option>
								<option <?php echo($bilgilerim->ay == "Mayıs" ? 'selected' : '');?> value="Mayıs">Mayıs</option>
								<option <?php echo($bilgilerim->ay == "Haziran" ? 'selected' : '');?> value="Haziran">Haziran</option>
								<option <?php echo($bilgilerim->ay == "Temmuz" ? 'selected' : '');?> value="Temmuz">Temmuz</option>
								<option <?php echo($bilgilerim->ay == "Ağustos" ? 'selected' : '');?> value="Ağustos">Ağustos</option>
								<option <?php echo($bilgilerim->ay == "Eylül" ? 'selected' : '');?> value="Eylül">Eylül</option>
								<option <?php echo($bilgilerim->ay == "Ekim" ? 'selected' : '');?> value="Ekim">Ekim</option>
								<option <?php echo($bilgilerim->ay == "Kasım" ? 'selected' : '');?> value="Kasım">Kasım</option>
								<option <?php echo($bilgilerim->ay == "Aralık" ? 'selected' : '');?> value="Aralık">Aralık</option>
							</select>
							  -
							<select class="input form-control input-sm" name="yil" id="yil">
								<option value="">Yıl</option>
								<?php for ($i=1916;$i<=2002;$i++){?>
								<option <?php echo($bilgilerim->yil == $i ? 'selected' : '');?> value="<?php echo $i;?>"><?php echo $i;?></option>
								<?php }?>
							</select>
							</div>
      <label>Cinsiyet</label>
                            <div class="custom_select" style="width: 34%;">
                                <select class="input form-control input-sm" name="cinsiyet" id="cinsiyet">
                                    <option value="">Seçiniz</option>
                                    <option <?php echo($bilgilerim->cinsiyet == "Erkek" ? 'selected' : '');?> value="Erkek">Erkek</option>
                                    <option <?php echo($bilgilerim->cinsiyet == "Kadın" ? 'selected' : '');?> value="Kadın">Kadın</option>
                                </select>
                            </div>
    </div>
    <div class="buttons-set">

   
        <button type="submit" title="Kaydet" class="button"><span><span>Kaydet</span></span></button>
    </div>
</form>
</div>                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
<?php include("footer.php");?>
	