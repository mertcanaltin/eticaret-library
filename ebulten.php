<?php
include("ozzzpanel/system/ayar.php");
include("ozzzpanel/system/fonksiyon.php");
?>
		<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>Ebülten Sistemi</title>

  <link rel="stylesheet" type="text/css" media="all" href="style.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>




  <div id="w">
    <div id="content">
<?php
	$email	 	= p('email');
	$ip			= ip();
	$t			= date("Y-m-d H:i:s");
	$tarih		= tarih($t);
	
	if(empty($email)){
		echo  ' <div class="notify errorbox">
        <h1>Hata!</h1>
        <span class="alerticon"><img src="images/error.png" alt="error" /></span>
        <p>Lütfen email adresinizi kontrol ederek tekrar giriniz.</p>
      </div>
      
		<meta http-equiv="refresh" content="2; url=anasayfa.html">';
		}else{
		$iletisim = Sorgu("INSERT INTO ebulten SET
							email	=	'$email',
							ip		=	'$ip',
							tarih	=	'$tarih'");	
		if($iletisim){
			echo '
			    
				  <div class="notify successbox">
        <h1>Başarılı!</h1>
        <span class="alerticon"><img src="images/check.png" alt="checkmark" /></span>
        <p>Ebülten aboneliğiniz başarıyla oluşturuldu. Artık kampanya ve fırsatlardan email adresiniz üzerinden  haberdar olacaksınız.</p>
      </div>
			
				<meta http-equiv="refresh" content="1; url=anasayfa.html">'; 
			}else{
			echo  '<div class="notify errorbox">
        <h1>Hata!</h1>
        <span class="alerticon"><img src="images/error.png" alt="error" /></span>
        <p>Hata oluştu tekrar deneyiniz.</p>
      </div>
      
		<meta http-equiv="refresh" content="2; url=anasayfa.html">';	
			}
		};?>
		
		
		
		
		
		
		
		
		
		
		

 
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