<?php include("header2.php");?>   
<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php $id = g('id');?>
<?php $urun = Sonuc(Sorgu("SELECT * FROM urunler WHERE durum = '1' AND seo = '$id'"));?>
<?php $kategori = Sonuc(Sorgu("SELECT * FROM urun_kategori WHERE id = '$urun->kategori'"));?>
<?php $altkategori = Sonuc(Sorgu("SELECT * FROM alt_urun_kategori WHERE id = '$urun->altkategori'"));?>
<?php $link = Sonuc(Sorgu("SELECT * FROM alt_urun_kategori WHERE durum = '1'"));?>
<div class="main-container col2-left-layout">
        
            
<div class="breadcrumbs">
    <div class="container">
      
    </div>
</div>
 
            <div class="container">
                    <div class="main">
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <div class="col-left sidebar"><div class="nav-vcontainer hidden-xs hidden-sm">
    <div class="vmegamenu-title"><h2><i class="fa fa-bars"></i>KATEGORİLER</h2></div>
     <div id="nav_vmegamenu" class="nav_vmegamenu">
               
			                    <?php $Sorgu = Sorgu("SELECT * FROM urun_kategori WHERE durum = '1' ORDER BY id ASC LIMIT 11");
							while($Sonuc = Sonuc($Sorgu)){?>
							<?php $varmi = Sonuc(Sorgu("SELECT * FROM alt_urun_kategori WHERE durum = '1' AND ust_id = '$Sonuc->id'"));?>
							<?php $link = Sonuc(Sorgu("SELECT * FROM alt_urun_kategori WHERE durum = '1' AND ust_id = '$Sonuc->id'"));?>
                <div id="megamenu_catid_3" class="megamenu nav-<?php echo $Sonuc->icon;?>">
<div class="level-top">
<a href="kategorim-detay-<?php echo $Sonuc->seo;?>.html"><span> <?php echo $Sonuc->kategori_adi;?></span><i class="fa fa-angle-down"></i></a>
</div><div id="dropdown3" class="dropdown" >

<div class="block1" id="block13">

	   <?php 
 $haberSorguu = mysql_query("SELECT * FROM alt_urun_kategori WHERE durum = '1' AND ust_id = '$Sonuc->id' AND sira = '1'ORDER BY id DESC limit 1");
 while($haberSonucc = mysql_fetch_object($haberSorguu)){
 ?>   



<div class="column first col1">

<div class="itemMenu level1"><a class="itemMenuName level1" href="kategori-detay-<?php echo $haberSonucc->seo;?>.html"><span><?php echo $haberSonucc->kategori_adi;?></span></a>


<div class="itemSubMenu level1">
<div class="itemMenu level2">


   <?php 
 $haberSorgu = mysql_query("SELECT * FROM urunler WHERE durum = '1' AND altkategori = '$haberSonucc->id' ORDER BY id DESC limit 5");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   



<a class="itemMenuName level2" href="urun-detay-<?php echo $haberSonuc->seo;?>.html"><span><?php echo $haberSonuc->adi;?></span></a>




     <?php }?>





</div>







</div>









</div>










</div>



     <?php }?>
	
	 
	 
	 
	  <?php 
 $haberSorgum = mysql_query("SELECT * FROM alt_urun_kategori WHERE durum = '1' AND ust_id = '$Sonuc->id' AND sira = '2'ORDER BY id DESC limit 1");
 while($haberSonucm = mysql_fetch_object($haberSorgum)){
 ?>   


<div class="column first col1">

<div class="itemMenu level1"><a class="itemMenuName level1" href="kategori-detay-<?php echo $haberSonucm->seo;?>.html"><span><?php echo $haberSonucm->kategori_adi;?></span></a>


<div class="itemSubMenu level1"><div class="itemMenu level2">


 <?php 
 $haberSorgu = mysql_query("SELECT * FROM urunler WHERE durum = '1' AND altkategori = '$haberSonucm->id' ORDER BY id DESC limit 5");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   

<a class="itemMenuName level2" href="urun-detay-<?php echo $haberSonuc->seo;?>.html"><span><?php echo $haberSonuc->adi;?></span></a>




     <?php }?>


</div></div>









</div>










</div>



     <?php }?>
	 
	 
	 
	 
	  <div class="clearBoth"></div>
	 
      <?php 
 $haberSorguz = mysql_query("SELECT * FROM alt_urun_kategori WHERE durum = '1' AND ust_id = '$Sonuc->id' AND sira = '3'ORDER BY id DESC limit 1");
 while($haberSonucz = mysql_fetch_object($haberSorguz)){
 ?>   



<div class="column last col2">
<div class="itemMenu level1">





<a class="itemMenuName level1" href="kategori-detay-<?php echo $haberSonucz->seo;?>.html"><span><?php echo $haberSonucz->kategori_adi;?></span></a>



<div class="itemSubMenu level1"><div class="itemMenu level2">

 <?php 
 $haberSorgu = mysql_query("SELECT * FROM urunler WHERE durum = '1' AND altkategori = '$haberSonucz->id' ORDER BY id DESC limit 5");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   

<a class="itemMenuName level2" href="urun-detay-<?php echo $haberSonuc->seo;?>.html"><span><?php echo $haberSonuc->adi;?></span></a>




     <?php }?>



</div></div>















</div>









</div>



     <?php }?>


 <?php 
 $haberSorgut = mysql_query("SELECT * FROM alt_urun_kategori WHERE durum = '1' AND ust_id = '$Sonuc->id' AND sira = '4'ORDER BY id DESC limit 1");
 while($haberSonuct = mysql_fetch_object($haberSorgut)){
 ?>   


<div class="column last col2">
<div class="itemMenu level1">





<a class="itemMenuName level1" href="kategori-detay-<?php echo $haberSonuct->seo;?>.html"><span><?php echo $haberSonuct->kategori_adi;?></span></a>



<div class="itemSubMenu level1"><div class="itemMenu level2">



 <?php 
 $haberSorgu = mysql_query("SELECT * FROM urunler WHERE durum = '1' AND altkategori = '$haberSonuct->id' ORDER BY id DESC limit 5");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   

<a class="itemMenuName level2" href="urun-detay-<?php echo $haberSonuc->seo;?>.html"><span><?php echo $haberSonuc->adi;?></span></a>




     <?php }?>




</div></div>















</div>









</div>



     <?php }?>




<div class="clearBoth"></div>








</div>












</div></div>


	<?php } ?>

</div>
</div>
<script type="text/javascript">
//<![CDATA[
var MEGAMENU_EFFECT = 0;

//]]>
</script>

<br><br><br><br><br><br><br><br><br><br><br>






</div>
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                
                                <div class="col-main">
                                                                        <script type="text/javascript">
    var optionsPrice = new Product.OptionsPrice({"productId":"1","priceFormat":{"pattern":"$%s","precision":2,"requiredPrecision":2,"decimalSymbol":".","groupSymbol":",","groupLength":3,"integerRequired":1},"includeTax":"false","showIncludeTax":false,"showBothPrices":false,"productPrice":150,"productOldPrice":170,"priceInclTax":150,"priceExclTax":150,"skipCalculate":1,"defaultTax":0,"currentTax":0,"idSuffix":"_clone","oldPlusDisposition":0,"plusDisposition":0,"plusDispositionTax":0,"oldMinusDisposition":0,"minusDisposition":0,"tierPrices":[],"tierPricesInclTax":[]});
</script>
<div id="messages_product_view"></div>
<div class="product-view">
    <div class="product-essential">
    
        <div class="row">
	    
                <div class="product-img-box col-xs-5">
                <p class="product-image">
    	<!-- images for lightbox -->
	<a href="uploads/urunler/<?php echo $urun->resim;?>" class="lightbox" rel="lightbox[rotation]"></a>
	<!--++++++++++++-->
	<div id="wrap" style="top:0px;z-index:9;position:relative;"><a href="uploads/urunler/<?php echo $urun->resim;?>" class="cloud-zoom" id="tv-zoom1" style="position: relative; display: block;" rel="adjustX:10, adjustY:-2, zoomWidth:407, zoomHeight:407">
		<img style="display: block;" src="uploads/urunler/<?php echo $urun->resim;?>" alt="pleasure" title="pleasure">	</a><div class="mousetrap" style="background-image: url(&quot;js/themevast/plugin/blank.png&quot;); width: 345px; height: 345px; top: 0px; left: 0px; position: absolute; z-index: 9999; cursor: move;"></div></div>
</p>
				<div class="more-views thumbnail-container horizontal">
				
				<h2>Daha Fazla</h2>
					<div style="max-width: 463px; margin: 0px auto;" class="bx-wrapper"><div style="width: 100%; overflow: hidden; position: relative; height: 109px;" class="bx-viewport"><ul style="width: 715%; position: relative; transition-duration: 0s; transform: translate3d(-472px, 0px, 0px);" class="bxslider">
					
					
					
					
					
					<li style="float: left; list-style: outside none none; position: relative; width: 109px; margin-right: 9px;" class="thumbnail-item bx-clone">
							<a href="uploads/urunler/<?php echo $urun->resim;?>" class="cloud-zoom-gallery" title="" name="uploads/urunler/<?php echo $urun->resim;?>" rel="useZoom: 'tv-zoom1', smallImage: 'uploads/urunler/<?php echo $urun->resim;?>'">
							<img width="900px" height="900px"src="uploads/urunler/<?php echo $urun->resim;?>" alt=""></a>
						</li>
						
						
						
						
						
						
						
						
					
						
						
						
						
						<?php $Sorgu = Sorgu("SELECT * FROM urun_resim WHERE urun_id = '$urun->id'");
											while($Sonuc = Sonuc($Sorgu)){?>
						
						<li style="float: left; list-style: outside none none; position: relative; width: 109px; margin-right: 9px;" class="thumbnail-item bx-clone">
							<a href="uploads/urunler/diger/<?php echo $Sonuc->resim_yolu;?>" class="cloud-zoom-gallery" title="" name="uploads/urunler/diger/<?php echo $Sonuc->resim_yolu;?>" rel="useZoom: 'tv-zoom1', smallImage: 'uploads/urunler/diger/<?php echo $Sonuc->resim_yolu;?>'">
							<img src="uploads/urunler/diger/<?php echo $Sonuc->resim_yolu;?>" alt=""></a>
						</li>
						
						
						
							<?php }?>
						
						
						
						
						
						
						
						
						
						</ul></div><div class="bx-controls bx-has-controls-direction"><div class="bx-controls-direction"><a class="bx-prev" href="">Geri</a><a class="bx-next" href="">İleri</a></div></div></div>
									<ul class="thumb-light" style="display:none;">
													<li>
								<a href="uploads/urunler/<?php echo $urun->resim;?>" rel="lightbox[rotation]" title="pleasure"></a>
							</li>
							
							
							
							
							
								
						<?php $Sorgu = Sorgu("SELECT * FROM urun_resim WHERE urun_id = '$urun->id'");
											while($Sonuc = Sonuc($Sorgu)){?>
							
													<li>
								<a href="uploads/urunler/diger/<?php echo $Sonuc->resim_yolu;?>" rel="lightbox[rotation]" title="pleasure"></a>
							</li>
													
													
													
													
									<?php }?>
											
													
													
													
													
													
													
						                                                                
					</ul>
							</div>
			<script type="text/javascript">
				//<![CDATA[
					jQuery(document).ready(function($){
						$('.thumbnail-container .bxslider').bxSlider({
														slideWidth: 109,
							slideMargin: 9,
							mode: 'horizontal',
							minSlides: 3,
							maxSlides: 4,
														pager: false,
							speed: 500,
							pause: 3000
						});	
					});					
				//]]>
			</script>
	
     
            </div>
            <div class="product-shop col-xs-7">
                 <div class="product-name">
				<form action="?ekle=<?php echo $urun->id;?>" method="post">
                    <h1><?php echo $urun->adi;?></h1>
                </div>
           <div class="ratings">
                    <div class="rating-box">
					
					
					
					
					
					
					
					<?php $YorumVarmi = Sonuc(Sorgu("SELECT * FROM urun_yorum WHERE durum = '1' AND urun_id = '$USonuc->id'"));?>
											<?php if($YorumVarmi > 0){?>
												<?php $YSorgu = Sorgu("SELECT * FROM urun_yorum WHERE durum = '1' AND urun_id = '$USonuc->id' ORDER BY id DESC");
												$ytoplam = 0;
												$ysay = 0;
												while($YSonuc = Sonuc($YSorgu)){?>
												<?php $ytoplam+=$YSonuc->puan;?>
												<?php $ysay++;?>
												<?php }?>
											<?php $yorumorani = ($ytoplam) / ($ysay*5) * 100;?>
											<?php 
											if($yorumorani <= 20){
												echo '
																
                <div class="rating" style="width:20%"></div>
												';
											}elseif($yorumorani <= 30){
												echo '
																
                <div class="rating" style="width:30%"></div>
												';
											}elseif($yorumorani <= 40){
												echo '
															
                <div class="rating" style="width:40%"></div>
												';
											}elseif($yorumorani <= 50){
												echo '
																
                <div class="rating" style="width:50%"></div>
												';
											}elseif($yorumorani <= 60){
												echo '
																
                <div class="rating" style="width:60%"></div>
												';
											}elseif($yorumorani <= 70){
												echo '
																
                <div class="rating" style="width:70%"></div>
												';
											}elseif($yorumorani <= 80){
												echo '
																
                <div class="rating" style="width:80%"></div>
												';
											}elseif($yorumorani <= 90){
												echo '
																
                <div class="rating" style="width:90%"></div>
												';
											}elseif($yorumorani <= 100){
												echo '
																
                <div class="rating" style="width:1000%"></div>
												';
											}
											?>
											
											<?php }else{?>
														
                <div class="rating" style="width:0%"></div>
											<?php }?>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
	
            </div>
        			     <?php $urunyorumsayisi = Sorgu("SELECT * FROM urun_yorum WHERE durum = '1' AND urun_id = '$urun->id'");?>
                <p class="rating-links">
            <a href="">Toplam Yorum (<?php echo mysql_num_rows($urunyorumsayisi);?>)</a>
    </div>  
		<div class="availerble">
         <p>Ürün Kodu: <?php echo $urun->urun_kodu;?></p>
            <p class="availability in-stock">Stok Durumu: <span><?php echo($urun->stok > 0 ? '<span class="in-stock"> Var </span>' : '<span class="out-stock"> Tükendi</span>')?></span></p>
    

                       
   <div class="price-box">
                                            
                    <?php if($urun->indirim == "1"){?>     

                            <p class="special-price">
                    <span class="price-label">İndirimli Fiyatı</span>
                <span class="price" id="product-price-17">
                   <?php echo number_format($urun->ifiyat, 2, ',', '.'); ?>   ₺             </span>
                </p>
                        <p class="old-price">
                <span class="price-label">Eski Fiyatı:</span>
                <span class="price" id="old-price-17">
                   <?php echo number_format($urun->fiyat, 2, ',', '.'); ?>  ₺              </span>
            </p><?php 
									$fiyat1 	= $urun->fiyat - $urun->ifiyat; 
									$fiyat2 	= $urun->fiyat; 
									$yuzde 		= ($fiyat1 / $fiyat2) * 100;									
									$ff 		=  $urun->ifiyat;								
									?>   
        <?php }elseif($urun->indirim == "0"){?>	
                  <p class="special-price">
                    <span class="price-label">Fiyat</span>
                <span class="price" id="product-price-17">
                   <?php echo number_format($urun->fiyat, 2, ',', '.'); ?>  ₺             </span>
                </p>
                   <?php $ff 		=  $urun->fiyat;?>  
        	<?php }?>
        </div>

</div>           
                                		                
                                    <div class="product-options" id="product-options-wrapper">
    <script type="text/javascript">
//<![CDATA[
var DateOption = Class.create({

    getDaysInMonth: function(month, year)
    {
        var curDate = new Date();
        if (!month) {
            month = curDate.getMonth();
        }
        if (2 == month && !year) { // leap year assumption for unknown year
            return 29;
        }
        if (!year) {
            year = curDate.getFullYear();
        }
        return 32 - new Date(year, month - 1, 32).getDate();
    },

    reloadMonth: function(event)
    {
        var selectEl = event.findElement();
        var idParts = selectEl.id.split("_");
        if (idParts.length != 3) {
            return false;
        }
        var optionIdPrefix = idParts[0] + "_" + idParts[1];
        var month = parseInt($(optionIdPrefix + "_month").value);
        var year = parseInt($(optionIdPrefix + "_year").value);
        var dayEl = $(optionIdPrefix + "_day");

        var days = this.getDaysInMonth(month, year);

        //remove days
        for (var i = dayEl.options.length - 1; i >= 0; i--) {
            if (dayEl.options[i].value > days) {
                dayEl.remove(dayEl.options[i].index);
            }
        }

        // add days
        var lastDay = parseInt(dayEl.options[dayEl.options.length-1].value);
        for (i = lastDay + 1; i <= days; i++) {
            this.addOption(dayEl, i, i);
        }
    },

    addOption: function(select, text, value)
    {
        var option = document.createElement('OPTION');
        option.value = value;
        option.text = text;

        if (select.options.add) {
            select.options.add(option);
        } else {
            select.appendChild(option);
        }
    }
});
dateOption = new DateOption();
//]]>
</script>

    <script type="text/javascript">
    //<![CDATA[
    var optionFileUpload = {
        productForm : $('product_addtocart_form'),
        formAction : '',
        formElements : {},
        upload : function(element){
            this.formElements = this.productForm.select('input', 'select', 'textarea', 'button');
            this.removeRequire(element.readAttribute('id').sub('option_', ''));

            template = '<iframe id="upload_target" name="upload_target" style="width:0; height:0; border:0;"><\/iframe>';

            Element.insert($('option_'+element.readAttribute('id').sub('option_', '')+'_uploaded_file'), {after: template});

            this.formAction = this.productForm.action;

            var baseUrl = 'htt';
            var urlExt = 'option_id/'+element.readAttribute('id').sub('option_', '');

            this.productForm.action = parseSidUrl(baseUrl, urlExt);
            this.productForm.target = 'upload_target';
            this.productForm.submit();
            this.productForm.target = '';
            this.productForm.action = this.formAction;
        },
        removeRequire : function(skipElementId){
            for(var i=0; i<this.formElements.length; i++){
                if (this.formElements[i].readAttribute('id') != 'option_'+skipElementId+'_file' && this.formElements[i].type != 'button') {
                    this.formElements[i].disabled='disabled';
                }
            }
        },
        addRequire : function(skipElementId){
            for(var i=0; i<this.formElements.length; i++){
                if (this.formElements[i].readAttribute('name') != 'options_'+skipElementId+'_file' && this.formElements[i].type != 'button') {
                    this.formElements[i].disabled='';
                }
            }
        },
        uploadCallback : function(data){
            this.addRequire(data.optionId);
            $('upload_target').remove();

            if (data.error) {

            } else {
                $('option_'+data.optionId+'_uploaded_file').value = data.fileName;
                $('option_'+data.optionId+'_file').value = '';
                $('option_'+data.optionId+'_file').hide();
                $('option_'+data.optionId+'').hide();
                template = '<div id="option_'+data.optionId+'_file_box"><a href="#"><img src="var/options/'+data.fileName+'" alt=""><\/a><a href="#" onclick="optionFileUpload.removeFile('+data.optionId+')" title="Remove file" \/>Remove file<\/a>';

                Element.insert($('option_'+data.optionId+'_uploaded_file'), {after: template});
            }
        },
        removeFile : function(optionId)
        {
            $('option_'+optionId+'_uploaded_file').value= '';
            $('option_'+optionId+'_file').show();
            $('option_'+optionId+'').show();

            $('option_'+optionId+'_file_box').remove();
        }
    }
    var optionTextCounter = {
        count : function(field,cntfield,maxlimit){
            if (field.value.length > maxlimit){
                field.value = field.value.substring(0, maxlimit);
            } else {
                cntfield.innerHTML = maxlimit - field.value.length;
            }
        }
    }

    Product.Options = Class.create();
    Product.Options.prototype = {
        initialize : function(config) {
            this.config = config;
            this.reloadPrice();
            document.observe("dom:loaded", this.reloadPrice.bind(this));
        },
        reloadPrice : function() {
            var config = this.config;
            var skipIds = [];
            $$('body .product-custom-option').each(function(element){
                var optionId = 0;
                element.name.sub(/[0-9]+/, function(match){
                    optionId = parseInt(match[0], 10);
                });
                if (config[optionId]) {
                    var configOptions = config[optionId];
                    var curConfig = {price: 0};
                    if (element.type == 'checkbox' || element.type == 'radio') {
                        if (element.checked) {
                            if (typeof configOptions[element.getValue()] != 'undefined') {
                                curConfig = configOptions[element.getValue()];
                            }
                        }
                    } else if(element.hasClassName('datetime-picker') && !skipIds.include(optionId)) {
                        dateSelected = true;
                        $$('.product-custom-option[id^="options_' + optionId + '"]').each(function(dt){
                            if (dt.getValue() == '') {
                                dateSelected = false;
                            }
                        });
                        if (dateSelected) {
                            curConfig = configOptions;
                            skipIds[optionId] = optionId;
                        }
                    } else if(element.type == 'select-one' || element.type == 'select-multiple') {
                        if ('options' in element) {
                            $A(element.options).each(function(selectOption){
                                if ('selected' in selectOption && selectOption.selected) {
                                    if (typeof(configOptions[selectOption.value]) != 'undefined') {
                                        curConfig = configOptions[selectOption.value];
                                    }
                                }
                            });
                        }
                    } else {
                        if (element.getValue().strip() != '') {
                            curConfig = configOptions;
                        }
                    }
                    if(element.type == 'select-multiple' && ('options' in element)) {
                        $A(element.options).each(function(selectOption) {
                            if (('selected' in selectOption) && typeof(configOptions[selectOption.value]) != 'undefined') {
                                if (selectOption.selected) {
                                    curConfig = configOptions[selectOption.value];
                                } else {
                                    curConfig = {price: 0};
                                }
                                optionsPrice.addCustomPrices(optionId + '-' + selectOption.value, curConfig);
                                optionsPrice.reload();
                            }
                        });
                    } else {
                        optionsPrice.addCustomPrices(element.id || optionId, curConfig);
                        optionsPrice.reload();
                    }
                }
            });
        }
    }
    function validateOptionsCallback(elmId, result) {
        var container = $(elmId).up('ul.options-list');
        if (result == 'failed') {
            container.removeClassName('validation-passed');
            container.addClassName('validation-failed');
        } else {
            container.removeClassName('validation-failed');
            container.addClassName('validation-passed');
        }
    }
    var opConfig = new Product.Options({"7":{"14":{"price":0,"oldPrice":0,"priceValue":"0.0000","type":"fixed","excludeTax":0,"includeTax":0},"15":{"price":0,"oldPrice":0,"priceValue":"0.0000","type":"fixed","excludeTax":0,"includeTax":0}},"8":{"16":{"price":0,"oldPrice":0,"priceValue":"0.0000","type":"fixed","excludeTax":0,"includeTax":0},"17":{"price":0,"oldPrice":0,"priceValue":"0.0000","type":"fixed","excludeTax":0,"includeTax":0}}});
    //]]>
    </script><br><br><br><br><br><br>
    <dl class="last">
      

			<?php if($urun->ozellik){?>
                                
                                     <?php 
									 $parcala = explode("|",$urun->ozellik);
									 $index = end($parcala);
									 foreach($parcala as $ozellik){?>
										 <?php echo $ozellik;?><?php echo($ozellik != $index ? ',' : '');?>
									 <?php }?>
                               
								<?php }?>
                               
									<?php 
									$bol = explode("||",$altkategori->sec_kat);
									foreach ($bol as $b){
									$SecenekSorgu = Sorgu("SELECT * FROM secenek_kategori WHERE kategori_adi = '$b' ORDER BY id ASC");
									while($SecenekSonuc = Sonuc($SecenekSorgu)){?>

      
<dt><label class="required"><?php echo $SecenekSonuc->kategori_adi;?><em>*</em></label></dt>
<dd>
    <div class="input-box">
        <select name="secenek[]"  class=" required-entry product-custom-option">
		
		
		
	<?php 
											$sec = explode("||",$urun->secenek);
											foreach ($sec as $bb){
											$Sorgu = Sorgu("SELECT * FROM secenek WHERE kategori = '$SecenekSonuc->id' AND adi = '$bb' ORDER BY id ASC");
											while($Sonuc = Sonuc($Sorgu)){?>
                                                <option value="<?php echo $Sonuc->id;?>"><?php echo $Sonuc->adi;?></option>
											<?php }}?>
		
		
		</select>                                </div>
</dd>
            

			
		<?php }}?>	
			
			
			
        </dl>

<script type="text/javascript">
//<![CDATA[
enUS = {"m":{"wide":["January","February","March","April","May","June","July","August","September","October","November","December"],"abbr":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]}}; // en_US locale reference
Calendar._DN = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]; // full day names
Calendar._SDN = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]; // short day names
Calendar._FD = 0; // First day of the week. "0" means display Sunday first, "1" means display Monday first, etc.
Calendar._MN = ["January","February","March","April","May","June","July","August","September","October","November","December"]; // full month names
Calendar._SMN = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]; // short month names
Calendar._am = "AM"; // am/pm
Calendar._pm = "PM";

// tooltips
Calendar._TT = {};
Calendar._TT["INFO"] = "About the calendar";

Calendar._TT["ABOUT"] =
"DHTML Date/Time Selector\n" +
"(c) dynarch.com 2002-2005 / Author: Mihai Bazon\n" +
"For latest version visit: http://www.dynarch.com/projects/calendar/\n" +
"Distributed under GNU LGPL. See http://gnu.org/licenses/lgpl.html for details." +
"\n\n" +
"Date selection:\n" +
"- Use the \xab, \xbb buttons to select year\n" +
"- Use the " + String.fromCharCode(0x2039) + ", " + String.fromCharCode(0x203a) + " buttons to select month\n" +
"- Hold mouse button on any of the above buttons for faster selection.";
Calendar._TT["ABOUT_TIME"] = "\n\n" +
"Time selection:\n" +
"- Click on any of the time parts to increase it\n" +
"- or Shift-click to decrease it\n" +
"- or click and drag for faster selection.";

Calendar._TT["PREV_YEAR"] = "Prev. year (hold for menu)";
Calendar._TT["PREV_MONTH"] = "Prev. month (hold for menu)";
Calendar._TT["GO_TODAY"] = "Go Today";
Calendar._TT["NEXT_MONTH"] = "Next month (hold for menu)";
Calendar._TT["NEXT_YEAR"] = "Next year (hold for menu)";
Calendar._TT["SEL_DATE"] = "Select date";
Calendar._TT["DRAG_TO_MOVE"] = "Drag to move";
Calendar._TT["PART_TODAY"] = ' (' + "Today" + ')';

// the following is to inform that "%s" is to be the first day of week
Calendar._TT["DAY_FIRST"] = "Display %s first";

// This may be locale-dependent. It specifies the week-end days, as an array
// of comma-separated numbers. The numbers are from 0 to 6: 0 means Sunday, 1
// means Monday, etc.
Calendar._TT["WEEKEND"] = "0,6";

Calendar._TT["CLOSE"] = "Close";
Calendar._TT["TODAY"] = "Today";
Calendar._TT["TIME_PART"] = "(Shift-)Click or drag to change value";

// date formats
Calendar._TT["DEF_DATE_FORMAT"] = "%b %e, %Y";
Calendar._TT["TT_DATE_FORMAT"] = "%B %e, %Y";

Calendar._TT["WK"] = "Week";
Calendar._TT["TIME"] = "Time:";
//]]>
</script>
           
        
</div>
<script type="text/javascript">decorateGeneric($$('#product-options-wrapper dl'), ['last']);</script>

<div class="product-options-bottom">
    
    


    <div class="add-to-cart">
        <div class="input-content">
                <label for="qty">Adt:</label>
        <div class="box-qty">
            <input name="adet" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty" type="text">
            <div class="qty-arrows">
            <input onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" class="qty-increase" value="+" type="button">
            <input onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty > 0 ) qty_el.value--;return false;" class="qty-decrease" value="-" type="button">
            </div>
        </div>
                </div>
        <button type="submit" data-original-title="Sepete Ekle" rel="tooltip" class="button btn-cart"><span><span><i class="fa fa-shopping-cart"></i>Sepete Ekle</span></span></button>
            </div>


    <ul class="add-to-links">

    <li> <a href="?kekle=<?php echo $urun->id;?>" class="link-compare" data-original-title="Karşılaştır" rel="tooltip"><i class="fa fa-exchange"></i>Karşılaştır</a></li>
    
    <li><a  onclick="window.print();" class="link-wishlist" data-original-title="Yazdır" rel="tooltip"><i class="fa fa-heart"></i>Yazdır</a></li>
</ul>
    

</div>
                                                             
                				<div class="addthis_native_toolbox"></div>
		
		
            </div>
	    
		
	    </div>
	    
        </form></div>
        <div class="clearer"></div>
     
    <script type="text/javascript">
    //<![CDATA[
        var productAddToCartForm = new VarienForm('product_addtocart_form');
        productAddToCartForm.submit = function(button, url) {
            if (this.validator.validate()) {
                var form = this.form;
                var oldUrl = form.action;

                if (url) {
                   form.action = url;
                }
                var e = null;
                try {
                    this.form.submit();
                } catch (e) {
                }
                this.form.action = oldUrl;
                if (e) {
                    throw e;
                }

                if (button && button != 'undefined') {
                    button.disabled = true;
                }
            }
        }.bind(productAddToCartForm);

        productAddToCartForm.submitLight = function(button, url){
            if(this.validator) {
                var nv = Validation.methods;
                delete Validation.methods['required-entry'];
                delete Validation.methods['validate-one-required'];
                delete Validation.methods['validate-one-required-by-name'];
                // Remove custom datetime validators
                for (var methodName in Validation.methods) {
                    if (methodName.match(/^validate-datetime-.*/i)) {
                        delete Validation.methods[methodName];
                    }
                }

                if (this.validator.validate()) {
                    if (url) {
                        this.form.action = url;
                    }
                    this.form.submit();
                }
                Object.extend(Validation.methods, nv);
            }
        }.bind(productAddToCartForm);
    //]]>
    </script>
    </div>

    <div class="product-collateral row-fluid">
        <ul class="product-tabs">
                        <li id="product_tabs_description" class=" active first"><a href="javascript:void(0)">AÇIKLAMA</a></li><?php if($urun->ozellik){?>
						<li id="product_tabs_product_additional_datam" class=""><a href="javascript:void(0)">ÖZELLİKLER</a></li><?php }?>
                                            <li id="product_tabs_product_additional_data" class=""><a href="javascript:void(0)">YORUMLAR</a></li>
                                <li id="product_tabs_product_additional_datak" class=""><a href="javascript:void(0)">TAKSİT SEÇENEKLERİ</a></li>
								    <li id="product_tabs_product.tagss" class="last"><a href="javascript:void(0)">İADE KOŞULLARI</a></li>
            </ul>
            <div class="product-tabs-content" id="product_tabs_description_contents">    <h2></h2>
    <div class="std">
         <?php echo $urun->aciklama;?>   </div>
</div>







               <div style="display: none;" class="product-tabs-content" id="product_tabs_product_additional_datam_contents">
<div class="box-collateral box-reviews row" id="customer-reviews">
    <div class="col-xs-12 col-sm-5">
	<div class="review-col1"><?php if($urun->ozellik){?>
		<h2> <?php $parcala = explode("|",$urun->ozellik);
								 foreach($parcala as $ozellik){?>
									 <tr>
                                            <td><?php echo $ozellik;?></td><br>
                                     </tr>
								 <?php }?> 
							
                                </div>
								<?php }?></h2>
			
			</div>
    </div>

</div>
</div>



















                    <div style="display: none;" class="product-tabs-content" id="product_tabs_product_additional_data_contents">
<div class="box-collateral box-reviews row" id="customer-reviews">
    <div class="col-xs-12 col-sm-5">
	<div class="review-col1">
		<h2>Ürün Yorumları</h2>
		
		
		
			<?php $Sorgu = Sorgu("SELECT * FROM urun_yorum WHERE durum = '1' AND urun_id = '$urun->id' ORDER BY id DESC");
									if(!mysql_affected_rows()){
										echo '<div class="well">Bu ürün için henüz yorum yazılmamış. İlk yorumu siz yapmak istermisiniz?</div>';
									}else{
									while($Sonuc = Sonuc($Sorgu)){?>
									<?php $bilgilerim = Sonuc(Sorgu("SELECT * FROM uyeler WHERE durum = '1' AND id = '$Sonuc->uye_id'"));?>
		
		
		
		
		
		
		
		
		
		
				<dl>
				
				
				
				
				
				
				
				    <dt>
			<?php echo $Sonuc->baslik;?> <span></span>		    </dt>
		    <dd>
									<table class="ratings-table">
			            <span class="reviewRating">
													<?php if($Sonuc->puan == "1"){?>
                                                        <i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
														<i class="fa fa-star-o"></i>
														<i class="fa fa-star-o"></i>
														<i class="fa fa-star-o"></i>
													<?php }elseif($Sonuc->puan == "2"){?>
														<i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
														<i class="fa fa-star-o"></i>
														<i class="fa fa-star-o"></i>
													<?php }elseif($Sonuc->puan == "3"){?>
														<i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
													<?php }elseif($Sonuc->puan == "4"){?>
														<i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													<?php }elseif($Sonuc->puan == "5"){?>
														<i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
													<?php }?>
                                                    </span>
													
													
													
													
			</table> <?php echo $Sonuc->yorum;?><br>
						<?php echo $bilgilerim->ad;?> <?php echo $bilgilerim->soyad;?><br>		<small class="date"><?php echo $Sonuc->tarih;?></small>
		    </dd>
				 
		
				</dl>
				
				<?php }}?>
				
				
				
				
				
				
				
				
				
			</div>
    </div><?php if(isset($_SESSION["email"])){?>
    <div class="col-xs-12 col-sm-7">
	<div class="review-col2">
                <div class="form-add">
    <h2>Ürüne Yorum Yap</h2>
        <form action="urun-yorum.html" method="post" id="review-form">
     
        <fieldset>
                   	<input type="hidden" name="uyeid" id="uyeid" value="<?php echo $_SESSION['uyeid'];?>" />
	<input type="hidden" name="urunid" id="urunid" value="<?php echo $urun->id;?>" />  
                <span id="input-message-box"></span>
                <table class="data-table" id="product-review-table">
                    <colgroup><col>
                    <col width="1">
                    <col width="1">
                    <col width="1">
                    <col width="1">
                    <col width="1">
                    </colgroup><thead>
                        <tr class="first last">
                            <th>&nbsp;</th>
                            <th><span class="nobr">1 Yıldız</span></th>
                            <th><span class="nobr">2 Yıldız</span></th>
                            <th><span class="nobr">3 Yıldız</span></th>
                            <th><span class="nobr">4 Yıldız</span></th>
                            <th><span class="nobr">5 Yıldız</span></th>
                        </tr>
                    </thead>
                    <tbody>
                                            <tr class="first last odd">
                            <th>YILDIZ</th>
                                                    <td class="value"><input name="puan" id="puan" value="1" class="radio" type="radio"></td>
                                                    <td class="value"><input name="puan" id="puan" value="2" class="radio" type="radio"></td>
                                                    <td class="value"><input name="puan" id="puan" value="3" class="radio" type="radio"></td>
                                                    <td class="value"><input name="puan" id="puan" value="4" class="radio" type="radio"></td>
                                                    <td class="value last"><input name="puan" id="puan" value="5" class="radio" type="radio"></td>
                                                </tr>
                                        </tbody>
                </table>
                <input name="validate_rating" class="validate-rating" value="" type="hidden">
                <script type="text/javascript">decorateTable('product-review-table')</script>
                            <ul class="form-list">
                
                    <li>
                        <label for="summary_field" class="required"><em>*</em>Yorum Başlığı</label>
                        <div class="input-box">
                            <input name="yorumbaslik" id="summary_field" class="input-text required-entry" value="" type="text">
                        </div>
                    </li>
                    <li>
                        <label for="review_field" class="required"><em>*</em>Yorum</label>
                        <div class="input-box">
                            <textarea name="yorum" id="review_field" cols="5" rows="3" class="required-entry"></textarea>
                        </div>
                    </li>
                </ul>
            </fieldset>
            <div class="buttons-set">
                <button type="submit" title="Gönder" class="button"><span><span>Gönder</span></span></button>
            </div>
    </form>
    <script type="text/javascript">
    //<![CDATA[
        var dataForm = new VarienForm('review-form');
        Validation.addAllThese(
        [
               ['validate-rating', 'Please select one of each of the ratings above', function(v) {
                    var trs = $('product-review-table').select('tr');
                    var inputs;
                    var error = 1;

                    for( var j=0; j < trs.length; j++ ) {
                        var tr = trs[j];
                        if( j > 0 ) {
                            inputs = tr.select('input');

                            for( i in inputs ) {
                                if( inputs[i].checked == true ) {
                                    error = 0;
                                }
                            }

                            if( error == 1 ) {
                                return false;
                            } else {
                                error = 1;
                            }
                        }
                    }
                    return true;
                }]
        ]
        );
    //]]>
    </script>
    </div>
	</div>
    </div><?php }?>
</div>
</div>

            <div style="display: none;" class="product-tabs-content" id="product_tabs_product_additional_datak_contents">
<div class="box-collateral box-reviews row" id="customer-reviews">
    
	
	
	
	
	
	
	
	
	
	
	<div id="taksit" class="tab-panel">
									<table width="100%" cellspacing="0" cellpadding="0" border="0" class="BankIns">
									<tbody>
										<tr id="firstInsColumn">
											<th class="first"></th>
											<th align="center" class="instBG">3 Taksit</th>
											<th align="center" class="instBG">6 Taksit</th>
											<th align="center" class="instBG">9 Taksit</th>
										</tr>
										<tr>
											<td width="225" align="center" class="BankLogo" valign="middle"><span class="logo-ykb"><img src="http://demo.elektronik-ticaret.net/media/posicons/bonus.png"></span>
												<p class="Gray">Bonus Kart</p>
											</td>
											<td align="center" class="posr">
												<div class=" content3" style="margin-top:10px">
													<?php $t = taksit($ff,3,2.4);?>
													<p><strong><?=$t[2];?> TL X <?=$t[0];?></strong></p>
													<p class="Gray">Toplam: <?=$t[1];?> TL</p>
												</div>
											</td>
											<td align="center" class="posr">
												<div class=" content3" style="margin-top:10px">
													<?php $t = taksit($ff,6,3.4);?>
													<p><strong><?=$t[2];?> TL X <?=$t[0];?></strong></p>
													<p class="Gray">Toplam: <?=$t[1];?> TL</p>
												</div>
											</td>
											<td align="center" class="posr">
												<div class=" content3" style="margin-top:10px">
													<?php $t = taksit($ff,9,4.4);?>
													<p><strong><?=$t[2];?> TL X <?=$t[0];?></strong></p>
													<p class="Gray">Toplam: <?=$t[1];?> TL</p>
												</div>
											</td>
										</tr>
										<tr>
											<td width="225" align="center" class="BankLogo" valign="middle"><span class="logo-ykb"><img src="http://demo.elektronik-ticaret.net/media/posicons/axess.png"></span>
												<p class="Gray">Axess Kart</p>
											</td>
											<td align="center" class="posr">
												<div class=" content3" style="margin-top:10px">
													<?php $t = taksit($ff,3,2.4);?>
													<p><strong><?=$t[2];?> TL X <?=$t[0];?></strong></p>
													<p class="Gray">Toplam: <?=$t[1];?> TL</p>
												</div>
											</td>
											<td align="center" class="posr">
												<div class=" content3" style="margin-top:10px">
													<?php $t = taksit($ff,6,3.4);?>
													<p><strong><?=$t[2];?> TL X <?=$t[0];?></strong></p>
													<p class="Gray">Toplam: <?=$t[1];?> TL</p>
												</div>
											</td>
											<td align="center" class="posr">
												<div class=" content3" style="margin-top:10px">
													<?php $t = taksit($ff,9,4.4);?>
													<p><strong><?=$t[2];?> TL X <?=$t[0];?></strong></p>
													<p class="Gray">Toplam: <?=$t[1];?> TL</p>
												</div>
											</td>
										</tr>
										<tr>
											<td width="225" align="center" class="BankLogo" valign="middle"><span class="logo-ykb"><img src="http://demo.elektronik-ticaret.net/media/posicons/maximum.png"></span>
												<p class="Gray">Maximum</p>
											</td>
											<td align="center" class="posr">
												<div class=" content3" style="margin-top:10px">
													<?php $t = taksit($ff,3,2.4);?>
													<p><strong><?=$t[2];?> TL X <?=$t[0];?></strong></p>
													<p class="Gray">Toplam: <?=$t[1];?> TL</p>
												</div>
											</td>
											<td align="center" class="posr">
												<div class=" content3" style="margin-top:10px">
													<?php $t = taksit($ff,6,3.4);?>
													<p><strong><?=$t[2];?> TL X <?=$t[0];?></strong></p>
													<p class="Gray">Toplam: <?=$t[1];?> TL</p>
												</div>
											</td>
											<td align="center" class="posr">
												<div class=" content3" style="margin-top:10px">
													<?php $t = taksit($ff,9,4.4);?>
													<p><strong><?=$t[2];?> TL X <?=$t[0];?></strong></p>
													<p class="Gray">Toplam: <?=$t[1];?> TL</p>
												</div>
											</td>
										</tr>
										<tr>
											<td width="225" align="center" class="BankLogo" valign="middle"><span class="logo-ykb"><img src="http://demo.elektronik-ticaret.net/media/posicons/cardfinans.png"></span>
												<p class="Gray">Card Finans</p>
											</td>
											<td align="center" class="posr">
												<div class=" content3" style="margin-top:10px">
													<?php $t = taksit($ff,3,2.4);?>
													<p><strong><?=$t[2];?> TL X <?=$t[0];?></strong></p>
													<p class="Gray">Toplam: <?=$t[1];?> TL</p>
												</div>
											</td>
											<td align="center" class="posr">
												<div class=" content3" style="margin-top:10px">
													<?php $t = taksit($ff,6,3.4);?>
													<p><strong><?=$t[2];?> TL X <?=$t[0];?></strong></p>
													<p class="Gray">Toplam: <?=$t[1];?> TL</p>
												</div>
											</td>
											<td align="center" class="posr">
												<div class=" content3" style="margin-top:10px">
													<?php $t = taksit($ff,9,4.4);?>
													<p><strong><?=$t[2];?> TL X <?=$t[0];?></strong></p>
													<p class="Gray">Toplam: <?=$t[1];?> TL</p>
												</div>
											</td>
										</tr>
										<tr>
											<td width="225" align="center" class="BankLogo" valign="middle"><span class="logo-ykb"><img src="http://demo.elektronik-ticaret.net/media/posicons/world.png"></span>
												<p class="Gray">World Card</p>
											</td>
											<td align="center" class="posr">
												<div class=" content3" style="margin-top:10px">
													<?php $t = taksit($ff,3,2.4);?>
													<p><strong><?=$t[2];?> TL X <?=$t[0];?></strong></p>
													<p class="Gray">Toplam: <?=$t[1];?> TL</p>
												</div>
											</td>
											<td align="center" class="posr">
												<div class=" content3" style="margin-top:10px">
													<?php $t = taksit($ff,6,3.4);?>
													<p><strong><?=$t[2];?> TL X <?=$t[0];?></strong></p>
													<p class="Gray">Toplam: <?=$t[1];?> TL</p>
												</div>
											</td>
											<td align="center" class="posr">
												<div class=" content3" style="margin-top:10px">
													<?php $t = taksit($ff,9,4.4);?>
													<p><strong><?=$t[2];?> TL X <?=$t[0];?></strong></p>
													<p class="Gray">Toplam: <?=$t[1];?> TL</p>
												</div>
											</td>
										</tr>
										<tr>
											<td width="225" align="center" class="BankLogo" valign="middle"><span class="logo-ykb"><img src="http://demo.elektronik-ticaret.net/media/posicons/asyacard.png"></span>
												<p class="Gray">Asya Card</p>
											</td>
											<td align="center" class="posr">
												<div class=" content3" style="margin-top:10px">
													<?php $t = taksit($ff,3,2.4);?>
													<p><strong><?=$t[2];?> TL X <?=$t[0];?></strong></p>
													<p class="Gray">Toplam: <?=$t[1];?> TL</p>
												</div>
											</td>
											<td align="center" class="posr">
												<div class=" content3"><span class="CachePrice"></span>
													<p><strong></strong></p><strong>
													<p class="Gray"></p>
												</strong></div><strong>
											</strong></td>
											<td align="center" class="posr">
												<div class=" content3" style="margin-top:10px">
													<?php $t = taksit($ff,9,4.4);?>
													<p><strong><?=$t[2];?> TL X <?=$t[0];?></strong></p>
													<p class="Gray">Toplam: <?=$t[1];?> TL</p>
												</div>
											</td>
										</tr>
										<tr>
											<td width="225" align="center" class="BankLogo" valign="middle"><span class="logo-ykb"><img src="http://demo.elektronik-ticaret.net/media/posicons/paraf.png"></span>
												<p class="Gray">Paraf Card</p>
											</td>
											<td align="center" class="posr">
												<div class=" content3" style="margin-top:10px">
													<?php $t = taksit($ff,3,2.4);?>
													<p><strong><?=$t[2];?> TL X <?=$t[0];?></strong></p>
													<p class="Gray">Toplam: <?=$t[1];?> TL</p>
												</div>
											</td>
											<td align="center" class="posr">
												<div class=" content3" style="margin-top:10px">
													<?php $t = taksit($ff,6,3.4);?>
													<p><strong><?=$t[2];?> TL X <?=$t[0];?></strong></p>
													<p class="Gray">Toplam: <?=$t[1];?> TL</p>
												</div>
											</td>
											<td align="center" class="posr">
												<div class=" content3" style="margin-top:10px">
													<?php $t = taksit($ff,9,4.4);?>
													<p><strong><?=$t[2];?> TL X <?=$t[0];?></strong></p>
													<p class="Gray">Toplam: <?=$t[1];?> TL</p>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
                                </div>
    </div>

</div>









       
           <div style="display: none;" class="product-tabs-content" id="product_tabs_product.tagss_contents"><div class="box-collateral box-tags">
      <p>Ürün adresinize ulaştığı günden itibaren 14 gün içinde <?php echo $ayar->firma_tel; ?> numaramızdan müşteri hizmetlerimizle irtibata geçerek iade sürecinizi başlatabilirsiniz.</p> 
									<p>İade talebinizin kabul edilmesi için, ürünün hasar görmemiş ve kullanılmamış olması gerekmektedir.</p> 
									<p>Servis tarafından kurulum gerektiren ürünlerin kurulumunun yapılmasıyla ürünler kayıt altına alınmış olur. Böylece ikinci el statüsüne girmiş olur. İlgili mevzuat gereği cayma hakkı kapsamında "ürünün yeniden satılabilir özelliğinin kaybolmaması" gerekmektedir. Bu nedenle de servis tarafından kurulumu yapılmış olan ürünlerde cayma hakkı kapsamında iade alınamamaktadır.</p> 
									<p>*Ücret iadesi; iade işlemleriniz onaylandıktan sonra kredi kartınıza / banka hesabınıza 3 iş günü içinde yapılmaktadır.</p> 
									<p>Ödeme işlemlerinin hesaba yansıma süresi bankalara göre farklılık gösterebilir.</p>  

</div>
</div>
    <script type="text/javascript">
//<![CDATA[
Varien.Tabs = Class.create();
Varien.Tabs.prototype = {
  initialize: function(selector) {
    var self=this;
    $$(selector+' a').each(this.initTab.bind(this));
  },

  initTab: function(el) {
      el.href = 'javascript:void(0)';
      if ($(el.parentNode).hasClassName('active')) {
        this.showContent(el);
      }
      el.observe('click', this.showContent.bind(this, el));
  },

  showContent: function(a) {
    var li = $(a.parentNode), ul = $(li.parentNode);
    ul.select('li').each(function(el){
      var contents = $(el.id+'_contents');
      if (el==li) {
        el.addClassName('active');
        contents.show();
      } else {
        el.removeClassName('active');
        contents.hide();
      }
    });
  }
}
new Varien.Tabs('.product-tabs');
//]]>
</script>
        <div class="upsellslider">
    <div class="bx-title"><div class="bg-title"><h2 class="title">BENZER ÜRÜNLER</h2></div></div>	<div style="max-width: 867px; margin: 0px auto;" class="bx-wrapper">
	<div style="width: 100%; overflow: hidden; position: relative; height: 300px;" class="bx-viewport"><ul style="width: 715%; position: relative; transition-duration: 0s; transform: translate3d(-868px, 0px, 0px);" class="products-grid">
	
	
	
	
	
	 <?php $USorgu = Sorgu("SELECT * FROM urunler WHERE durum = '1'  ORDER BY id DESC limit 4");
								   while($USonuc = Sonuc($USorgu)){?>  		
	
	<li style="float: left; list-style: outside none none; position: relative; width: 216px; margin-right: 1px;" class="item bx-clone">
                
				
				
				
					<div class="item-inner">
				<div class="box-images">
					<a href="urun-detay-<?php echo $USonuc->seo;?>.html" title="" class="product-image"><img src="uploads/urunler/kucuk/<?php echo $USonuc->resim;?>" width="270" height="270" alt="" /></a>
				</div>
									<ul class="add-to-links">
																					<li><p><button type="button" title="Sepete Ekle" class="button btn-cart" onclick="setLocation('urun-detay-<?php echo $USonuc->seo;?>.html')"><span><span><i class="fa fa-shopping-cart" style="font-size: 16px; vertical-align:middle;"></i></span></span></button></p></li>
																																		<li><a href="?kekle=<?php echo $USonuc->id;?>" class="link-compare"><i class="fa fa-compress"></i></a></li>
																																		<li><a href="urun-detay-<?php echo $USonuc->seo;?>.html" class="link-wishlist"><i class="fa fa-heart"></i></a></li>
																			
					</ul>
								<div class="product-shop1">
												<h2 class="product-name"><a href="urun-detay-<?php echo $USonuc->seo;?>.html" title="<?php echo $USonuc->adi;?>"><?php echo $USonuc->adi;?></a></h2>
													    <div class="ratings">
                    <div class="rating-box">
					
					
					
					
					
					
					
					<?php $YorumVarmi = Sonuc(Sorgu("SELECT * FROM urun_yorum WHERE durum = '1' AND urun_id = '$USonuc->id'"));?>
											<?php if($YorumVarmi > 0){?>
												<?php $YSorgu = Sorgu("SELECT * FROM urun_yorum WHERE durum = '1' AND urun_id = '$USonuc->id' ORDER BY id DESC");
												$ytoplam = 0;
												$ysay = 0;
												while($YSonuc = Sonuc($YSorgu)){?>
												<?php $ytoplam+=$YSonuc->puan;?>
												<?php $ysay++;?>
												<?php }?>
											<?php $yorumorani = ($ytoplam) / ($ysay*5) * 100;?>
											<?php 
											if($yorumorani <= 20){
												echo '
																
                <div class="rating" style="width:20%"></div>
												';
											}elseif($yorumorani <= 30){
												echo '
																
                <div class="rating" style="width:30%"></div>
												';
											}elseif($yorumorani <= 40){
												echo '
															
                <div class="rating" style="width:40%"></div>
												';
											}elseif($yorumorani <= 50){
												echo '
																
                <div class="rating" style="width:50%"></div>
												';
											}elseif($yorumorani <= 60){
												echo '
																
                <div class="rating" style="width:60%"></div>
												';
											}elseif($yorumorani <= 70){
												echo '
																
                <div class="rating" style="width:70%"></div>
												';
											}elseif($yorumorani <= 80){
												echo '
																
                <div class="rating" style="width:80%"></div>
												';
											}elseif($yorumorani <= 90){
												echo '
																
                <div class="rating" style="width:90%"></div>
												';
											}elseif($yorumorani <= 100){
												echo '
																
                <div class="rating" style="width:1000%"></div>
												';
											}
											?>
											
											<?php }else{?>
														
                <div class="rating" style="width:0%"></div>
											<?php }?>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
	
            </div>
         
    </div>
																			

                 

                 
    <div class="price-box">
                                            
                     <?php if($USonuc->indirim == "1"){?>      

                            <p class="special-price">
                    <span class="price-label">İndirimli Fiyatı</span>
                <span class="price" id="product-price-17">
                   <?php echo number_format($USonuc->ifiyat, 2, ',', '.'); ?>   ₺             </span>
                </p>
                        <p class="old-price">
                <span class="price-label">Eski Fiyatı:</span>
                <span class="price" id="old-price-17">
                   <?php echo number_format($USonuc->fiyat, 2, ',', '.'); ?>  ₺              </span>
            </p>
        <?php }elseif($USonuc->indirim == "0"){?>	
                  <p class="special-price">
                    <span class="price-label">Fiyat</span>
                <span class="price" id="product-price-17">
                   <?php echo number_format($USonuc->fiyat, 2, ',', '.'); ?>   ₺             </span>
                </p>
                     
        	<?php }?>
        </div>
											
						
				
              
    
      
						
				</div>
			</div>
				
				
				
            </li>			     <?php }?></ul></div></div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function($){
        (function(selector){
            var $content = $(selector);
            var $slider  = $('.products-grid', $content);
            var slider   = $slider.bxSlider({
                auto: 1, speed: 600, controls: 1, pager: 0, maxSlides: 4, slideWidth: 216,                 //infiniteLoop: false,
                moveSlides:1,
                slideMargin: 1,
                autoHover: true, // stop while hover <=> slider.stopAuto(); + slider.startAuto();
            })

        })(".upsellslider");
    });
</script>

	    </div>
</div>

<script type="text/javascript">
    var lifetime = 3600;
    var expireAt = Mage.Cookies.expires;
    if (lifetime > 0) {
        expireAt = new Date();
        expireAt.setTime(expireAt.getTime() + lifetime * 1000);
    }
    Mage.Cookies.set('external_no_cache', 1, expireAt);
</script>
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
<?php include("footer.php");?>
	