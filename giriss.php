<?php
include("ozzzpanel/system/ayar.php");
include("ozzzpanel/system/fonksiyon.php");
?>
		<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>Giriş Sistemi</title>

  <link rel="stylesheet" type="text/css" media="all" href="style.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>




  <div id="w">
    <div id="content">

		
		
		
		
	<?php
	$email	 	= p('email');
	$sifre	 	= p('sifre');
	$t			= date("Y-m-d H:i:s");
	$tarih		= tarih($t);
	
	
	if(empty($sifre) || empty($email)){
		echo '<div class="notify errorbox">
        <h1>Hata!</h1>
        <span class="alerticon"><img src="images/error.png" alt="error" /></span>
        <p>Hatalı kullanıcı adı veya şifre girdiniz. Lütfen kontrol ediniz.</p>
      </div>
      
		<meta http-equiv="refresh" content="2; url=giris.html">';
			
		}else{
			$UyeSorgu	=	Sorgu("SELECT * FROM uyeler WHERE email = '{$email}' AND sifre = '{$sifre}'");
			$uyeSonuc	=	Sonuc($UyeSorgu);
			if(say($UyeSorgu) >0 ){
				$_SESSION['uyeid'] 	= $uyeSonuc->id;
				$_SESSION['email'] 	= $uyeSonuc->email;
				$_SESSION['ad'] 	= $uyeSonuc->ad;
				$_SESSION['soyad'] 	= $uyeSonuc->soyad;
				echo '<div class="notify successbox">
        <h1>Başarılı!</h1>
        <span class="alerticon"><img src="images/check.png" alt="checkmark" /></span>
        <p>Sisteme girişiniz başarıyla tamamlandı. Anasayfaya yönlendiriyorsunuz. İyi alışverişler :)</p>
      </div>
			
				<meta http-equiv="refresh" content="1; url=hesabim.html">';
			}else{
				echo '<div class="notify errorbox">
        <h1>Hata!</h1>
        <span class="alerticon"><img src="images/error.png" alt="error" /></span>
        <p>Hatalı kullanıcı adı veya şifre</p>
      </div>
      
		<meta http-equiv="refresh" content="2; url=giris.html">';
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