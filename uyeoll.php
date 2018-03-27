<?php
include("ozzzpanel/system/ayar.php");
include("ozzzpanel/system/fonksiyon.php");
?>
		<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>Mesaj Sistemi</title>

  <link rel="stylesheet" type="text/css" media="all" href="style.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>




  <div id="w">
    <div id="content">

	
	
	<?php
	$ad 		= ucfirst(p('ad'));
	$soyad	 	= ucfirst(p('soyad'));
	$telefon 	= p('telefon');
	$email 		= p('email');
	$sifre	 	= p('sifre');
	$sifret	 	= p('sifret');
	$sozlesme	= p('sozlesme');
	$ip			= ip();
	$t			= date("Y-m-d H:i:s");
	$tarih		= tarih($t);
	
	
	if(empty($ad) || empty($soyad) || empty($telefon) || empty($email) || empty($sifre) || empty($sifret)){
		echo '<div class="notify errorbox">
        <h1>Hata!</h1>
        <span class="alerticon"><img src="images/error.png" alt="error" /></span>
        <p>Gerekli alanları doldurunuz.</p>
      </div>
      
		<meta http-equiv="refresh" content="2; url=anasayfa.html">';
		}elseif($sifre != $sifret){
			echo '<div class="notify errorbox">
        <h1>Hata!</h1>
        <span class="alerticon"><img src="images/error.png" alt="error" /></span>
        <p>Şifreler Uyuşmuyor !</p>
      </div>
      
		<meta http-equiv="refresh" content="2; url=anasayfa.html">';
		}else{
		$varmi = Sorgu("SELECT * FROM uyeler WHERE email = '{$email}'");
		if(mysql_num_rows($varmi)>0){
			echo '<div class="notify errorbox">
        <h1>Hata!</h1>
        <span class="alerticon"><img src="images/error.png" alt="error" /></span>
        <p>Bu E-posta zaten sistemde kayıtlı.</p>
      </div>
      
		<meta http-equiv="refresh" content="2; url=anasayfa.html">';			
		}elseif(!$_POST['sozlesme']){;
			echo '<div class="notify errorbox">
        <h1>Hata!</h1>
        <span class="alerticon"><img src="images/error.png" alt="error" /></span>
        <p>Lütfen sözleşmeyi kabul ediniz.</p>
      </div>
      
		<meta http-equiv="refresh" content="2; url=anasayfa.html">';
		}else{
		$uyeler = Sorgu("INSERT INTO uyeler SET
							ad		=	'$ad',
							soyad	=	'$soyad',
							durum	=	'1',
							email	=	'$email',
							telefon	=	'$telefon',
							sifre	=	'$sifre',
							ip		=	'$ip',
							tarih	=	'$tarih'");	
		if($uyeler){
			echo '  <div class="notify successbox">
        <h1>Başarılı!</h1>
        <span class="alerticon"><img src="images/check.png" alt="checkmark" /></span>
        <p>Sitemize başarıyla üye oldunuz üyelik onayından sonra sisteme giriş yapabilirsiniz.</p> Yönlendiriliyorsunuz....
      </div>
			
				<meta http-equiv="refresh" content="1; url=anasayfa.html">';
			$UyeSorgu	=	Sorgu("SELECT * FROM uyeler WHERE email = '{$email}' AND sifre = '{$sifre}'");
			$uyeSonuc	=	Sonuc($UyeSorgu);
			$_SESSION['uyeid'] 	= $uyeSonuc->id;
			$_SESSION['email'] 	= $uyeSonuc->email;
			$_SESSION['ad'] 	= $uyeSonuc->ad;
			$_SESSION['soyad'] 	= $uyeSonuc->soyad;
			echo '';
			}else{
			echo '<div class="notify errorbox">
        <h1>Hata!</h1>
        <span class="alerticon"><img src="images/error.png" alt="error" /></span>
        <p>Hata oluştu tekrar deneyiniz.</p>
      </div>
      
		<meta http-equiv="refresh" content="2; url=anasayfa.html">';
			
			}
		}
	}
	?>
	
	
	
	
	
		
		
		
		
		
		
		

 
    </div><!-- @end #content -->
  </div><!-- @end #w -->
<script type="text/javascript">
$(function(){
  $('#content').on('click', '.notify', function(){
    $(this).fadeOut(350, function(){
      $(this).remove(); // after fadeout remove from DOM
    });
  });
  
  // handle the additional windows
  $('#newSuccessBox').on('click', function(e){
    e.preventDefault();
    var samplehtml = $('<div class="notify successbox"> <h1>Başarılı!</h1> <span class="alerticon"><img src="images/check.png" alt="checkmark" /></span> <p>Ebülten aboneliğiniz başarıyla oluşturuldu. Artık kampanya ve fırsatlardan email adresiniz üzerinden  haberdar olacaksınız.</p> </div>').prependTo('#content');
  });
  $('#newAlertBox').on('click', function(e){
    e.preventDefault();
    var samplehtml = $('<div class="notify errorbox"> <h1>Hata!</h1> <span class="alerticon"><img src="images/error.png" alt="error" /></span> <p>Lütfen email adresinizi kontrol ederek tekrar giriniz.</p> </div>').prependTo('#content');
  });
});
</script>
</body>
</html>
	
	
	
	
	
	
	
	