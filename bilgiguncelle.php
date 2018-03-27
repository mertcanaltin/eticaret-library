<?php
include("veritabin/system/ayar.php");
include("veritabin/system/fonksiyon.php");
?>
		<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>Bilgi Güncelleme Sistemi</title>

  <link rel="stylesheet" type="text/css" media="all" href="style.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>




  <div id="w">
    <div id="content">
<?php
	$uyeid		= p('uyeid');
	$ad			= p('ad');
	$soyad		= p('soyad');
	$telefon	= p('telefon');
	$email		= p('email');
	$gun		= p('gun');
	$ay			= p('ay');
	$yil		= p('yil');
	$cinsiyet	= p('cinsiyet');

	$varmi 	= Sorgu("SELECT * FROM uyeler WHERE id = '{$uyeid}'");
	if(empty($ad) || empty($soyad) || empty($email)){
		echo '<div class="notify errorbox">
        <h1>Hata!</h1>
        <span class="alerticon"><img src="images/error.png" alt="error" /></span>
        <p>Hatalı kullanıcı adı veya şifre</p>
      </div>
      
		<meta http-equiv="refresh" content="2; url="uyelik-bilgilerim.html">';
		}else{
		if(mysql_num_rows($varmi)>0){
			$uye_sorgu	=	Sorgu("UPDATE uyeler SET
									ad			=	'$ad',
									soyad		=	'$soyad',
									telefon		=	'$telefon',
									email		=	'$email',
									gun			=	'$gun',
									ay			=	'$ay',
									yil			=	'$yil',
									cinsiyet	=	'$cinsiyet'
									WHERE id	=	'$uyeid'");	
			if($uye_sorgu){
				echo '<div class="notify successbox">
        <h1>Başarılı!</h1>
        <span class="alerticon"><img src="images/check.png" alt="checkmark" /></span>
        <p>Bilgileriniz başarıyla güncellendi.</p> Yönlendiriliyorsunuz....
      </div>
			
				<meta http-equiv="refresh" content="1; url=hesabim.html">';
			}else{
				echo '<div class="notify errorbox">
        <h1>Hata!</h1>
        <span class="alerticon"><img src="images/error.png" alt="error" /></span>
        <p>İşlem başarısız tekrar deneyiniz.</p>
      </div>
      
		<meta http-equiv="refresh" content="2; url=uyelik-bilgilerim.html">';
			}
				
		}else{
			echo '<div class="notify errorbox">
        <h1>Hata!</h1>
        <span class="alerticon"><img src="images/error.png" alt="error" /></span>
        <p>Hata oluştu tekrar deneyiniz.</p>
      </div>';
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
	
	
	
	
	
	
	
	