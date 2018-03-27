
<?php include("header2.php");?>
<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php if(!isset($_SESSION["email"])){
	header("Location:giris.html");
}?>
<?php $Siparisler = Sonuc(Sorgu("SELECT * FROM siparisler"));?>
<?php 
if(isset($_POST['checkout'])){
	$urunler = "";
	$secenek = "";
		foreach( $_SESSION["urunler"] as $urun) {
			$Query = Sorgu("SELECT * FROM urunler WHERE id='$urun[id]'");
			if(mysql_num_rows($Query)>0) {
				$Row = mysql_fetch_array($Query);
				$urunler.= $Row["id"]."|".$urun["adet"]."//";
				$secenek[$Row['id']] = array( "id" => $urun['secenek']);
			}
		}
		$urun 		= $urunler;
		$uyeid		= p('uyeid');
		$fiyat		= p('fiyat');
		$ek		    = p('ek');
		$adres		= $_SESSION["adres"];
		$odemesekli	= p('odemesekli');
		$sec		= $secenek;
		if($Siparisler->sno > 0){
		$sno	 	= $Siparisler->sno+1;
		}else{
		$sno	 	= 00001;	
		}
		$ip			= ip();
		$t			= date("Y-m-d H:i:s");
		$tarih		= tarih($t);
		if(isset($secenek) && is_array($secenek)){
			$secenek = json_encode($secenek,true);
		}else{
			$secenek = json_encode(array(),true);
		}
		$siparis_ver = Sorgu("INSERT INTO siparisler SET
							urun		=	'$urun',
							uyeid		=	'$uyeid',
							fiyat		=	'$fiyat',
							ek		    =	'$ek',
							adres		=	'$adres',
							secenek		=	'$secenek',
							odeme_sekli	=	'$odemesekli',
							sno			=	'$sno',
							ip			=	'$ip',
							tarih		=	'$tarih'");
							
			if($siparis_ver){
				unset($_SESSION['urunler']);
				$bilgi = $sno;
		 }
		
	}
	if(isset($_POST['mc_gross']) && isset($_POST['payment_status'])){
		if($_POST['payment_status'] == "Pending" ){ // Eğer ödeme yapıldıysa
		$urunler = "";
		$secenek = "";
		foreach($_SESSION["urunler"] as $urun) {
			$Query = Sorgu("SELECT * FROM urunler WHERE id='$urun[id]'");
			if(mysql_num_rows($Query)>0) {
				$Row = mysql_fetch_array($Query);
				$urunler.= $Row["id"]."|".$urun["adet"]."//";
				$secenek[$Row['id']] = array( "id" => $urun['secenek']);
			}
		}
		$urun 		= $urunler;
		$uyeid		= p('uyeid');
		$fiyat		= p('mc_gross');
		$adres		= $_SESSION["adres"];
		$odemesekli	= "PAYPAL";
		$sec		= $secenek;
		if($Siparisler->sno > 0){
		$sno	 	= $Siparisler->sno+1;
		}else{
		$sno	 	= 00001;	
		}
		$ip			= ip();
		$t			= date("Y-m-d H:i:s");
		$tarih		= tarih($t);
		if(isset($secenek) && is_array($secenek)){
			$secenek = json_encode($secenek,true);
		}else{
			$secenek = json_encode(array(),true);
		}
		$siparis_ver = Sorgu("INSERT INTO siparisler SET
							urun		=	'$urun',
							uyeid		=	'$uyeid',
							fiyat		=	'$fiyat',
							ek  		=	'$ek',
							adres		=	'$adres',
							secenek		=	'$secenek',
							odeme_sekli	=	'$odemesekli',
							sno			=	'$sno',
							ip			=	'$ip',
							tarih		=	'$tarih'");
							
			if($siparis_ver){
			unset($_SESSION['urunler']);
			unset($_POST);
			$bilgi = $sno;
		 }
		}
	}
?>
		
		               
  <!-- page wapper-->
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="index.html" title="Anasayfaya Git">Anasayfa</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Siparişiniz Tamamlandı!</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading no-line">
            <span class="page-heading-title2">SİPARİŞİNİZ TAMAMLANDI!</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content page-order">
          
			<div class="heading-counter warning">
			<div class="well margin-top-10">
				Siparişiniz başarılı bir şekilde tamamlanarak <strong><?php echo $bilgi;?></strong> sipariş numarası ile kayıt edilmiştir.<br><br>
				Eğer ödeme şekli olarak Banka Havalesi seçeneğini tercih ettiyseniz <a href="hesap-numaralari.html">Buraya Tıklayarak</a> banka hesap numaralarımıza ulaşabilirsiniz.<br><br>
				Her türlü sorunuz için bize <?php echo $ayar->firma_tel; ?> numaralı telefonumuzdan ulaşabilir veya <a href="ticket.html">Buraya Tıklayarak</a> müşteri hizmetlerimizden online yardım talep edebilirsiniz.<br><br>
				Teşekkür Ederiz,<br>
				<?php echo $ayar->firma_adi; ?>
			</div>
			</div>	
        </div>
    </div>
</div>

<?php include("footer.php");?>
	