<?php 
define("GUVENLIK",true);?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php
include("veritabin/system/ayar.php");
include("veritabin/system/fonksiyon.php");
?><?php echo $ayar->site_title; ?></title>

<?php sepetekle();?>
<?php karsilastirmaekle();?>
<?php sepetsil();?>
<?php karsilastirmasil();?>
<?php
$STOPLAM = 0.00;
	if (isset($_SESSION["urunler"]) && count($_SESSION["urunler"]) >= 1) { 
		
     	 foreach($_SESSION["urunler"] as $key1 => $value1){
		   for($i=0; $i<count($key1)/2; $i++){
			$deger	= $value1["id"];
		   	$adet	= $value1["adet"];
		   	$SepetCek = Sonuc(Sorgu("SELECT * FROM urunler WHERE id = '$deger'"));
			if($SepetCek->indirim == "1"){
                $topla = intval($adet) * $SepetCek->ifiyat;
				$STOPLAM += $topla;
                $topla = 0;
			}elseif($SepetCek->indirim == "0"){
                $topla = intval($adet) * $SepetCek->fiyat;
				$STOPLAM += $topla;	
                $topla = 0;
				}
			}
		}
	}?>
<?php
if(isset($_GET['bosalt'])){
	session_destroy();
	 header('Location:'.$_SERVER['HTTP_REFERER']);
}?>
<?php
if(isset($_GET['cikis'])){
	unset($_SESSION['uyeid']);
	unset($_SESSION['email']);
	unset($_SESSION['isim']);
	header("Location:index.html");
}?>
<?php $url="http://".$_SERVER["HTTP_HOST"].dirname($_SERVER['PHP_SELF']); ?>
<meta name="keywords" content="<?php echo $ayar->site_meta; ?>" />
<meta name="Title" content="<?php echo $ayar->firma_adi; ?>" />
<meta name="page-topic" content="<?php echo $ayar->site_title; ?>" />
<link rel="shortcut icon" href="uploads/logo/<?php echo $ayar->firma_logo; ?>">
	<meta name="Copyright" content="<?php echo $ayar->copyright; ?>">
<!--[if lt IE 7]>
<script type="text/javascript">
//<![CDATA[
    var BLANK_URL = 'js/blank.html';
    var BLANK_IMG = 'js/spacer.gif';
//]]>
</script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="skin/frontend/tv_arion_package/tv_arion/themevast/plugin/css/jquery.bxslider.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/tv_arion_package/tv_arion/bootstrap/bootstrap.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/tv_arion_package/tv_arion/bootstrap/bootstrap-theme.css" media="all" />
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/tv_arion_package/tv_arion/css/styles.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/base/default/css/widgets.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/tv_arion_package/tv_arion/themevast/ajaxcart/css/ajaxcart.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/tv_arion_package/tv_arion/themevast/blog/css/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/tv_arion_package/tv_arion/themevast/lastesttweet/css/lastesttweet.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/tv_arion_package/tv_arion/themevast/megamenu/css/megamenu.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/tv_arion_package/tv_arion/themevast/megamenu/css/vmegamenu.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/tv_arion_package/tv_arion/themevast/relatedslider/css/relatedslider.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/tv_arion_package/tv_arion/themevast/testimonial/css/testimonial.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/tv_arion_package/tv_arion/themevast/plugin/css/jquery.fancybox.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/tv_arion_package/tv_arion/themevast/cattabs/css/cattabs.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/tv_arion_package/tv_arion/themevast/imageslider/css/imageslider.css" media="all" />
<link rel="stylesheet" type="text/css" href="skin/frontend/tv_arion_package/tv_arion/css/print.css" media="print" />
<!--div style="display:none"><a href="http://www..com" title=".Com">.Com</a></div>
<div style="display:none"><a href="http://www..com" title=".Com"></a></div-->
<script type="text/javascript" src="js/prototype/prototype.js"></script>
<script type="text/javascript" src="js/lib/ccard.js"></script>
<script type="text/javascript" src="js/prototype/validation.js"></script>
<script type="text/javascript" src="js/scriptaculous/builder.js"></script>
<script type="text/javascript" src="js/scriptaculous/effects.js"></script>
<script type="text/javascript" src="js/scriptaculous/dragdrop.js"></script>
<script type="text/javascript" src="js/scriptaculous/controls.js"></script>
<script type="text/javascript" src="js/scriptaculous/slider.js"></script>
<script type="text/javascript" src="js/varien/js.js"></script>
<script type="text/javascript" src="js/varien/form.js"></script>
<script type="text/javascript" src="js/varien/menu.js"></script>
<script type="text/javascript" src="js/mage/translate.js"></script>
<script type="text/javascript" src="js/mage/cookies.js"></script>
<script type="text/javascript" src="js/themevast/jquery.min.js"></script>
<script type="text/javascript" src="js/themevast/noconflict.js"></script>
<script type="text/javascript" src="js/themevast/backtotop.js"></script>
<script type="text/javascript" src="js/themevast/mobilemenu.js"></script>
<script type="text/javascript" src="js/themevast/bootstrap/bootstrap.js"></script>
<script type="text/javascript" src="js/themevast/bootstrap/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="js/themevast/ajaxcart.js"></script>
<script type="text/javascript" src="js/themevast/plugin/jquery.bxslider.js"></script>
<script type="text/javascript" src="js/themevast/megamenu.js"></script>
<script type="text/javascript" src="js/themevast/timer.js"></script>
<script type="text/javascript" src="js/themevast/plugin/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="js/themevast/plugin/jquery.nivo.slider.pack.js"></script>
<link href="index.php/blog/rss/index/store_id/1/" title="Blog" rel="alternate" type="application/rss+xml" />
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="skin/frontend/tv_arion_package/tv_arion/css/styles-ie.css" media="all" />
<![endif]-->
<!--[if lt IE 7]>
<script type="text/javascript" src="js/lib/ds-sleight.js"></script>
<script type="text/javascript" src="skin/frontend/base/default/js/ie6.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript" src="js/themevast/html5shiv.js"></script>
<script type="text/javascript" src="js/themevast/respond.min.js"></script>
<![endif]-->

<script type="text/javascript">
//<![CDATA[
Mage.Cookies.path     = '';
Mage.Cookies.domain   = '<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>';
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
optionalZipCountries = ["HK","IE","MO","PA"];
//]]>
</script>
<script type="text/javascript">//<![CDATA[
        var Translator = new Translate([]);
        //]]></script>
<link rel="stylesheet" type="text/css" href="skin/frontend/tv_arion_package/tv_arion/css/color/color/<?php echo $ayar->tema; ?>.css" media="all" />

<link rel="stylesheet" type="text/css" href="skin/frontend/tv_arion_package/tv_arion/css/mobileresponsive.css" media="all" />
</head>
<body class=" cms-index-index cms-home">
<div class="wrapper">
        <noscript>
        <div class="global-site-notice noscript">
            <div class="notice-inner">
                <p>
                    <strong>JavaScript tarayıcınızda kapalı görünüyor.</strong><br />
                   Sitenin düzgün görüntülenmesi için lütfen javascripti tarayıcınızda aktif hale getirin veya güncel sürümüyle güncelleyerek tekrar deneyiniz.                </p>
            </div>
        </div>
    </noscript>
    <div class="page">
        <div class="header">
        <div class="header-quick-access">
                <div class="container">
 
                                <p class="welcome-msg">Müşteri Hizmetleri : <?php echo $ayar->firma_tel; ?> </p>
                                <div class="header-col2">
                                        
                                    
                                    <div class="header-cart-mini">
                                                <div class="topcart-mini-container">
                                                    <div id ="mini_cart_block">
    <div class="block-cart mini_cart_ajax">
            <div class="block-cart">
                          <!--<span class="top-cart-icon"></span>-->
                <div class="cart-mini-title">
                    <a class="shopping-cart" href="sepet.html"><i class="fa fa-shopping-cart"></i>
                    <span class="cart-title">Sepetim</span>
                    
                    
                    <span class="cart-count"> <?php echo count($_SESSION["urunler"]); ?> Ürün<i class="fa fa-angle-down"></i></span>
                    </a>
                </div>
													
                <div class="top-cart-content">	<p class="empty">Sepette <?php echo count($_SESSION["urunler"]); ?> ürün bulunuyor.</p>	
																			
																<?php
							if (isset($_SESSION["urunler"]) && count($_SESSION["urunler"]) >= 1) { 
							$toplam = 0.00;
							foreach($_SESSION["urunler"] as $key1 => $value1){
							for($i=0; $i<count($key1)/2; $i++){
							$deger= $value1["id"];
							$adet= $value1["adet"];
							$SepetCek = Sonuc(Sorgu("SELECT * FROM urunler WHERE id = '$deger'"));?>
																<div class="top-cart-content">
                                                                
                                                                <ol id="cart-sidebar" class="mini-products-list">
                                                            <li class="item last odd">
            <a href="urun-detay-<?php echo $SepetCek->seo;?>.html" title="pleasure" class="product-image"><img src="uploads/urunler/kucuk/<?php echo $SepetCek->resim;?>" alt="pleasure" height="50" width="50"></a>
        <div class="product-details">
        <a href="index.html?sil=<?php echo $SepetCek->id;?>" title="Ürünü Sil">Ürünü Sil</a>
             
                <p class="product-name"><a href="urun-detay-<?php echo $SepetCek->seo;?>.html"><?php echo $SepetCek->adi;?></a></p>
        <strong><?php echo $adet;?></strong> x
<?php if($SepetCek->indirim == "1"){?>
                                <span class="price"><?php echo number_format($SepetCek->ifiyat, 2, ',', '.'); ?> ₺</span>                    

	<?php }else{?>
      <span class="price"> <?php echo number_format($SepetCek->fiyat, 2, ',', '.'); ?> ₺</span>   	<?php }?>
    
            </div><?php 
									  if($SepetCek->indirim == "1"){
										$toplam += $SepetCek->ifiyat*$adet;
									  }else{
										$toplam += $SepetCek->fiyat*$adet;
									}?>
</li><?php }}?>	
                                                    </ol>
                        
                                        <div class="top-subtotal">Toplam: <span class="price"><?php echo number_format($toplam, 2, ',', '.'); ?> ₺</span></div>
                                            <div class="actions">
                                                        <button type="button" title="Satın Al" class="button" onclick="setLocation('sepet.html')"><span><span>Satın Al</span></span></button>
                        </div>
                                    </div><?php }?>
                                        
                                    </div>
            </div>

    </div>
</div>

                                                </div>
                                        </div>
                                    <form id="search_mini_form" action="ara.html" method="post">
    <div class="input-box">
        <label for="search">Arama:</label>
		
        <input id="search" type="search" name="kelime" value="" class="input-text required-entry" maxlength="128" placeholder="Ürün Arama..." />
        <button type="submit" title="Ürün Arama" class="button search-button"><span><span><i class="fa fa-search"></i></span></span></button>
    </div>

    <div id="search_autocomplete" class="search-autocomplete"></div>
    <script type="text/javascript">
    //<![CDATA[
        var searchForm = new Varien.searchForm('search_mini_form', 'search', '');
        searchForm.initAutocomplete('index.php/catalogsearch/ajax/suggest/', 'search_autocomplete');
    //]]>
    </script>
</form>

                                    <div class="language-currency">
                                        <div class="header-language">
                                                <div class="form-language"> 
	<label class="select-language">Üye İşlemleri:</label>
    <ul class="drop-lang">
        <li class="drop-trigger"><?php if(isset($_SESSION['email'])){?>
                                                            <a class="en" href="#">Hoş Geldiniz, <?php echo $_SESSION['ad'];?> <?php echo $_SESSION['soyad'];?><i class="fa fa-caret-down"></i></a>
															
															
												<?php }else{?>		

<a class="en" href="#">Üye İşlemleri<i class="fa fa-caret-down"></i></a>




	<?php }?>


												
                                                                                                                                <ul class="sub-lang">
                  
				  
				  
				  
				  
				  
				  
				  
				  
				  
<?php if(isset($_SESSION['email'])){?>

                     			      
								
								
								   <li class="first" ><a href="hesabim.html" title="Hesabım" >Hesabım</a></li>
                                <li ><a href="siparislerim.html" title="Siparişlerim" >SİPARİŞLERİM</a></li>
								  <li class=" last" ><a href="ticket.html" title="Yardım Merkezi" >YARDIM MERKEZİ</a></li>
                                <li ><a href="karsilastirma.html" title="Karşılaştırma" class="top-link-cart">KARŞILAŞTIRMA</a></li>
                           
                                <li class=" last" ><a href="?cikis=1" title="Çıkış" >ÇIKIŞ</a></li>
								
								
								
								<?php }else{?>
								
					
								
								    <li ><a href="giris.html" title="Giriş Yap" >GİRİŞ YAP</a></li>
										   <li ><a href="siparislerim.html" title="Siparişlerim" class="top-link-cart">SİPARİŞLERİM</a></li>
										     <li ><a href="ticket.html" title="Yardım Merkezi" class="top-link-cart">YARDIM MERKEZİ</a></li>
                                <li ><a href="karsilastirma.html" title="Karşılaştırma" class="top-link-cart">KARŞILAŞTIRMA</a></li>
                           
                                <li class=" last" ><a href="iletisim.html" title="İLETİŞİM" >İLETİŞİM</a></li>
								
								
								
								
								
									<?php }?>
								
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
            </ul>
        </li>
    </ul>
</div>
                                        </div>
                       
                                    </div>
                                    
                                </div>
                </div>
        </div>
    <div class="header-container">
        <div class="container">
                <div class="row">
                        <div class="col-sm-2">
                                <div class="page-header-content">
                                                                        <h1 class="logo"><strong><?php echo $ayar->firma_adi; ?></strong><a href="index.html" title="<?php echo $ayar->firma_adi; ?>" class="logo"><img src="uploads/logo/<?php echo $ayar->firma_logo; ?>" alt="<?php echo $ayar->firma_adi; ?>" /></a></h1>
                                                                    </div>
                        </div>
                        <div class="col-sm-10">
                                <div class="block_banner_header">
<div class="main-banner banner1">
<p><span>ÜCRETSİZ</span>&nbsp;Kargo</p>
</div>
<div class="main-banner banner2">
<p><span>GÜVENLİ</span>&nbsp;ALIŞVERİŞ</p>
</div>
<div class="main-banner banner3">
<p>7/24&nbsp;<span>DESTEK</span></p>
</div>
<div class="main-banner banner4">
<p><span>KOLAY</span>&nbsp;PARA İADESİ</p>
</div>

</div>                        </div>
                        
                </div>
        </div>