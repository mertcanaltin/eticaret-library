<?php include("header2.php");?>   
<div class="main-container col2-left-layout">
        
            
<div class="breadcrumbs">
    <div class="container">
        <ul>
                        
    </div>
</div>
 
            <div class="container">
                    <div class="main">
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <div class="col-left sidebar"><div class="nav-vcontainer hidden-xs hidden-sm">
    <div class="vmegamenu-title"><h2><i class="fa fa-bars"></i>Kategoriler</h2></div>
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







</div>
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                
                                <div class="col-main">
                                                                        <div id="messages_product_view">
        </div>

<div class="toolbar">
    

        <div class="sorter">
            
        <div class="sort-by">
            <label>SIKÇA SORULAN SORULAR</label>
           
                        
                    </div>
    </div>
        

</div>




                         <?php 
 $haberSorgu = mysql_query("SELECT * FROM sss WHERE durum = 1 ORDER BY id DESC");
 while($haberSonuc = mysql_fetch_object($haberSorgu)){
 ?>   
    <div class="postWrapper">
    <div class="row">
        <div class="col-sm-5 col-md-5 col-sms-6 col-smb-12">
            <img width="" height="" alt="blog" src="images/sss.jpg">        </div>
        <div class="col-sm-7 col-md-7 col-sms-7 col-smb-12">
        <div class="postTitle">
            <h2><a href="sss-detay-<?php echo $haberSonuc->seo;?>.html"><?php echo $haberSonuc->adi;?></a></h2>
            <h3><?php echo $haberSonuc->tarih;?></h3>
        </div>
        <div class="postContent"><p><?php echo substr($haberSonuc->aciklama,0,260);?> </p><a class="aw-blog-read-more" href="sss-detay-<?php echo $haberSonuc->seo;?>.html">Devamı</a></div>

           
       
        </div>
    </div>
    </div>
    
   
   
   
        
				                <?php }?>
   
   
   
   
   
   
   
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
<?php include("footer.php");?>
	