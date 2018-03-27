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
	$ticket_id	= p('ticket_id');
	$rutbe		= "0";
	$durum		= "1";
	$mesaj		= p('mesaj');
	$t			= date("Y-m-d H:i:s");
	$guncelleme	= tarih($t);
	
	
		if(empty($mesaj)){
			echo '<div class="notify errorbox">
        <h1>Hata!</h1>
        <span class="alerticon"><img src="images/error.png" alt="error" /></span>
        <p>Lütfen gerekli alanları  kontrol ederek tekrar giriniz.</p>
      </div>
      
		<meta http-equiv="refresh" content="2; url=ticket.html">';
		}else{
			$ticketekle = Sorgu("INSERT INTO ticket_cevap SET
								uye_id		=	'$uyeid',
								ticket_id	=	'$ticket_id',
								rutbe		=	'$rutbe',
								durum		=	'$durum',
								mesaj		=	'$mesaj',
								guncelleme	=	'$guncelleme'");
			$ticket_durum	=	Sorgu("UPDATE ticket SET 
									durum		=	'$durum',
									guncelleme	=	'$guncelleme'
									WHERE id	=	'$ticket_id'");
			
			if($ticketekle){
				echo '<div class="notify successbox">
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
        <p>Lütfen gerekli alanları  kontrol ederek tekrar giriniz.</p>
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