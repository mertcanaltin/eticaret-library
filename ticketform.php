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
	$uyeid		= p('uyeid');
	$baslik		= p('baslikk');
	$isim		= p('isim');
	$email		= p('email');
	$durum		= "1";
	$departman	= p('departman');
	$oncelik	= p('oncelik');
	$mesaj		= p('mesaj');
	$t			= date("Y-m-d H:i:s");
	$tt			= date("Y-m-d H:i:s");
	$guncelleme	= tarih($t);
	$tarih		= tarih($tt);
	
	
		if(empty($isim) || empty($baslik) || empty($email) || empty($departman) || empty($oncelik) || empty($mesaj)){
			echo '<div class="notify errorbox">
        <h1>Hata!</h1>
        <span class="alerticon"><img src="images/error.png" alt="error" /></span>
        <p>Lütfen gerekli alanları  kontrol ederek tekrar giriniz.</p>
      </div>
      
		<meta http-equiv="refresh" content="2; url=ticket.html">';
		}else{
			$ticketekle = Sorgu("INSERT INTO ticket SET
								uyeid		=	'$uyeid',
								isim		=	'$isim',
								baslik		=	'$baslik',
								email		=	'$email',
								departman	=	'$departman',
								oncelik		=	'$oncelik',
								durum		=	'$durum',
								mesaj		=	'$mesaj',
								tarih		=	'$tarih',
								guncelleme	=	'$guncelleme'");
			
			if($ticketekle){
				echo ' <div class="notify successbox">
        <h1>Başarılı!</h1>
        <span class="alerticon"><img src="images/check.png" alt="checkmark" /></span>
        <p>Destek talebiniz alınmıştır. En kısa sürede yanıtlanacaktır. Teşekkürler.</p>
      </div>
			
				<meta http-equiv="refresh" content="1; url=ticket-islemleri.html">';
				echo '<meta id="refresh" http-equiv="refresh" content="2; url=ticket.html" />'; 
			}else{
				echo '<div class="notify errorbox">
        <h1>Hata!</h1>
        <span class="alerticon"><img src="images/error.png" alt="error" /></span>
        <p>Hata oluştu. Tekrar deneyiniz.</p>
      </div>
      
		<meta http-equiv="refresh" content="2; url=ticket.html">';
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