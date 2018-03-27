<?php
include("ozzzpanel/system/ayar.php");
include("ozzzpanel/system/fonksiyon.php");
?>
		<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>Şifre Güncelleme</title>

  <link rel="stylesheet" type="text/css" media="all" href="style.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>




  <div id="w">
    <div id="content">
	
	
	
	
	
	
	<?php
	$uyeid	= p('uyeid');
	$msifre	= p('msifre');
	$sifre	= p('sifre');
	$sifret	= p('sifret');
	$varmi 	= Sorgu("SELECT * FROM uyeler WHERE id = '{$uyeid}' AND sifre = '{$msifre}'");
	if(empty($sifre) || empty($sifret) || empty($msifre)){
		echo '	
<div class="notify errorbox">
        <h1>Hata!</h1>
        <span class="alerticon"><img src="images/error.png" alt="error" /></span>
        <p>Hatalı şifre</p>
      </div>
      
		<meta http-equiv="refresh" content="2; url=sifre-degistir.html">';
		}elseif($sifre != $sifret){
			echo '	
<div class="notify errorbox">
        <h1>Hata!</h1>
        <span class="alerticon"><img src="images/error.png" alt="error" /></span>
        <p>Girdğiniz şifreler uyuşmuyor.</p>
      </div>
      
		<meta http-equiv="refresh" content="2; url=sifre-degistir.html">';
		}else{
		if(mysql_num_rows($varmi)>0){
			$uye_sorgu	=	Sorgu("UPDATE uyeler SET
									sifre			=	'$sifre'
									WHERE id		=	'$uyeid'");	
			if($uye_sorgu){
				echo '<div class="notify successbox">
        <h1>Başarılı!</h1>
        <span class="alerticon"><img src="images/check.png" alt="checkmark" /></span>
        <p>Şifreniz başarılı bir şekilde değiştirilmiştir..Teşekkürler.</p>
      </div>
			
				<meta http-equiv="refresh" content="1; url=hesabim.html">';
			}else{
				echo '	
<div class="notify errorbox">
        <h1>Hata!</h1>
        <span class="alerticon"><img src="images/error.png" alt="error" /></span>
        <p>Tekrar deneyiniz.</p>
      </div>
      
		<meta http-equiv="refresh" content="2; url=sifre-degistir.html">';
			}
				
		}else{
			echo '	
<div class="notify errorbox">
        <h1>Hata!</h1>
        <span class="alerticon"><img src="images/error.png" alt="error" /></span>
        <p>Mevcut şifrenizi yanlış girdiniz.</p>
      </div>
      
		<meta http-equiv="refresh" content="2; url=sifre-degistir.html">';
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