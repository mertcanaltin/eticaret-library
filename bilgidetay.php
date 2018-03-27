<?php include("header2.php");?>

		
           <?php $id = g('id');?>
<?php $sayfa = Sonuc(Sorgu("SELECT * FROM bilgiler WHERE seo = '$id'"));?>
		
		
		
		
		
		
		               
        <div class="main-container col1-layout">
            
<div class="breadcrumbs">
    <div class="container">
        <ul>
                            <li class="home">
                                    <a href="index.html" title="Anasayfaya Dön">Anasayfa</a>
                    
                                                    <span>/ </span>
                                </li>
                            <li class="cms_page">
                                    <strong>
<?php echo $sayfa->adi;?></strong>
                                                </li>
                    </ul>
    </div>
</div>
            <div class="container">
                <div class="main">
                    <div class="col-main">
                                                <div class="std"><div class="f-fix about-page">
<div class="container">
<div class="f-block about-page">
<div class="row">
<div class="col-sm-8">
<div class="block-title">
<h2><?php echo $sayfa->adi;?></h2>
</div>


<p><?php echo $sayfa->aciklama;?></p>
</div>

</div>
</div>


</div>
</div></div>                    </div>
                </div>
            </div>
        </div>
        
		
		
		
		

<?php include("footer.php");?>
	