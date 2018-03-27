<?php
include("ozzzpanel/system/ayar.php");
include("ozzzpanel/system/fonksiyon.php");
?>
		<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>Adres Güncelleme</title>

  <link rel="stylesheet" type="text/css" media="all" href="style.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>




  <div id="w">
    <div id="content">
<?php
	$uyeid		= p('uyeid');
	$baslik		= p('baslik');
	$ad			= p('ad');
	$soyad		= p('soyad');
	$firma_adi	= p('firma_adi');
	$adres		= p('adres');
	$il			= p('il');
	$ilce		= p('ilce');
	$postakodu	= p('postakodu');
	$vd			= p('vd');
	$vn			= p('vn');
	$tc			= p('tc');
	$ceptel		= p('ceptel');
	$evtel		= p('evtel');
	$istel		= p('istel');
	$adrestipi	= p('adrestipi');
	
	
	if($adrestipi == "bireysel"){
		if(empty($ad) || empty($soyad) || empty($adres) || empty($il) || empty($tc)){
			echo '<div class="alert alert-danger" style="background:#f7a632;color:#FFF;">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-exclamation-triangle"></i></strong> 
				<strong>İşlem Başarısız </strong><br> 
				Gerekli alanları doldurunuz.
			</div>';
		}else{
			$adresekle = Sorgu("INSERT INTO adres SET
								uyeid		=	'$uyeid',
								adres_tipi	=	'$adrestipi',
								baslik		=	'$baslik',
								ad			=	'$ad',
								soyad		=	'$soyad',
								adres		=	'$adres',
								sehir		=	'$il',
								semt		=	'$ilce',
								postakodu	=	'$postakodu',
								tc			=	'$tc',
								ceptel		=	'$ceptel',
								evtel		=	'$evtel',
								istel		=	'$istel'");
			if($adresekle){
				echo '<div class="alert alert-success" style="background:#73B572;color:#FFF;">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-smile-o"></i></strong> 
					<strong>İşlem Tamamlandı. </strong><br> 
					Yönlendiriliyosunuz..
				</div>';
				echo '<meta id="refresh" http-equiv="refresh" content="0; url=adres-defteri.html" />'; 
			}else{
				echo '<div class="alert alert-danger" style="background:#f7a632;color:#FFF;">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-exclamation-triangle"></i></strong> 
					<strong>İşlem Başarısız </strong><br> 
					Hata oluştu.Lütfen tekrar deneyiniz.!
				</div>';
			}
		}		
	}elseif($adrestipi == "kurumsal"){
		if(empty($firma_adi) || empty($adres) || empty($il) || empty($ilce) || empty($vd) || empty($vn)){
			echo '<div class="alert alert-danger" style="background:#f7a632;color:#FFF;">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-exclamation-triangle"></i></strong> 
				<strong>İşlem Başarısız </strong><br> 
				Gerekli alanları doldurunuz.
			</div>';
		}else{
			$adresekle = Sorgu("INSERT INTO adres SET
								uyeid		=	'$uyeid',
								adres_tipi	=	'$adrestipi',
								baslik		=	'$baslik',
								firma_adi	=	'$firma_adi',
								adres		=	'$adres',
								sehir		=	'$il',
								semt		=	'$ilce',
								postakodu	=	'$postakodu',
								vd			=	'$vd',
								vn			=	'$vn',
								ceptel		=	'$ceptel',
								evtel		=	'$evtel',
								istel		=	'$istel'");
			if($adresekle){
				echo '<div class="alert alert-success" style="background:#73B572;color:#FFF;">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-smile-o"></i></strong> 
					<strong>İşlem Tamamlandı. </strong><br> 
					Yönlendiriliyosunuz..
				</div>';
				echo '<meta id="refresh" http-equiv="refresh" content="1; url="adres-defteri.html" />'; 
			}else{
				echo '<div class="alert alert-danger" style="background:#f7a632;color:#FFF;">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong style="float:left;margin-right:5px;"><i style="margin-top:5px;font-size:25px;" class="fa fa-exclamation-triangle"></i></strong> 
					<strong>İşlem Başarısız </strong><br> 
					Hata oluştu.Lütfen tekrar deneyiniz.!
				</div>';
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