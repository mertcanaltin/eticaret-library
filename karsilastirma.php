<?php include("header2.php");?>


		
		
		               
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
Ürün Karşılaştırma</strong>
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
<h2>Ürün Karşılaştırma</h2>
</div>


<!-- page wapper-->
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="index.html" title="Anasayfaya Git">Anasayfa</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Karşılaştır</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title">ÜRÜN KARŞILAŞTIRMA LİSTESİ</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content" style="font-size:12px;">
		<?php if (!isset($_SESSION["karsilastirmalar"]) || count($_SESSION["karsilastirmalar"]) < 1) {?>
				<div class="well margin-top-10">Karşılaştırma listenizde ürün bulunmuyor.</div>
			<?php } else {?>
            <table class="table table-bordered table-compare">
                <tr>
                    <td class="compare-label">Ürün Resmi</td>
					<?php
					if (isset($_SESSION["karsilastirmalar"]) && count($_SESSION["karsilastirmalar"]) >= 1) { 
					 foreach($_SESSION["karsilastirmalar"] as $key1 => $value1){
					   for($i=0; $i<count($key1)/2; $i++){
						$deger	= $value1["id"];
						$KCek = Sonuc(Sorgu("SELECT * FROM urunler WHERE id = '$deger'"));?>
                    <td>
                        <a href="urun-detay-<?php echo $KCek->seo;?>.html"><img width="150px" height="150px" src="uploads/urunler/<?php echo $KCek->resim;?>" alt="Product"></a>
                    </td>
					<?php }}}?>
                </tr>
                <tr>
                    <td class="compare-label">Ürün İsmi</td>
					<?php
					if (isset($_SESSION["karsilastirmalar"]) && count($_SESSION["karsilastirmalar"]) >= 1) { 
					 foreach($_SESSION["karsilastirmalar"] as $key1 => $value1){
					   for($i=0; $i<count($key1)/2; $i++){
						$deger	= $value1["id"];
						$KCek = Sonuc(Sorgu("SELECT * FROM urunler WHERE id = '$deger'"));?>
                    <td>
                        <a href="urun-detay-<?php echo $KCek->seo;?>.html"><?php echo $KCek->adi;?></a>
                    </td>
					<?php }}}?>
                </tr>
                <tr>
                    <td class="compare-label">Puanlama</td>
					<?php
					if (isset($_SESSION["karsilastirmalar"]) && count($_SESSION["karsilastirmalar"]) >= 1) { 
					 foreach($_SESSION["karsilastirmalar"] as $key1 => $value1){
					   for($i=0; $i<count($key1)/2; $i++){
						$deger	= $value1["id"];
						$KCek = Sonuc(Sorgu("SELECT * FROM urunler WHERE id = '$deger'"));?>
                    <td>
					<?php $YorumVarmi = Sonuc(Sorgu("SELECT * FROM urun_yorum WHERE durum = '1' AND urun_id = '$KCek->id'"));?>
					<?php $urunyorumsayisi = Sorgu("SELECT * FROM urun_yorum WHERE durum = '1' AND urun_id = '$KCek->id'");?>
					<?php if($YorumVarmi > 0){?>
						<?php $YSorgu = Sorgu("SELECT * FROM urun_yorum WHERE durum = '1' AND urun_id = '$KCek->id' ORDER BY id DESC");
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
						<div class="product-star">
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<span>('.mysql_num_rows($urunyorumsayisi).' Yorum)</span>
						</div>
						';
					}elseif($yorumorani <= 30){
						echo '
						<div class="product-star">
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<span>('.mysql_num_rows($urunyorumsayisi).' Yorum)</span>
						</div>
						';
					}elseif($yorumorani <= 40){
						echo '
						<div class="product-star">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<span>('.mysql_num_rows($urunyorumsayisi).' Yorum)</span>
						</div>
						';
					}elseif($yorumorani <= 50){
						echo '
						<div class="product-star">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<span>('.mysql_num_rows($urunyorumsayisi).' Yorum)</span>
						</div>
						';
					}elseif($yorumorani <= 60){
						echo '
						<div class="product-star">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<span>('.mysql_num_rows($urunyorumsayisi).' Yorum)</span>
						</div>
						';
					}elseif($yorumorani <= 70){
						echo '
						<div class="product-star">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
						<i class="fa fa-star-o"></i>
						<span>('.mysql_num_rows($urunyorumsayisi).' Yorum)</span>
						</div>
						';
					}elseif($yorumorani <= 80){
						echo '
						<div class="product-star">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
						<span>('.mysql_num_rows($urunyorumsayisi).' Yorum)</span>
						</div>
						';
					}elseif($yorumorani <= 90){
						echo '
						<div class="product-star">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
						<span>('.mysql_num_rows($urunyorumsayisi).' Yorum)</span>
						</div>
						';
					}elseif($yorumorani <= 100){
						echo '
						<div class="product-star">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<span>('.mysql_num_rows($urunyorumsayisi).' Yorum)</span>
						</div>
						';
					}
					?>
					
					<?php }else{?>
					<div class="product-star">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<span>(<?php echo mysql_num_rows($urunyorumsayisi);?> Yorum)</span>
					</div>
					<?php }?>
                    </td>
					<?php }}}?>
                </tr>
                <tr>
                    <td class="compare-label">Fiyat</td>
					<?php
					if (isset($_SESSION["karsilastirmalar"]) && count($_SESSION["karsilastirmalar"]) >= 1) { 
					 foreach($_SESSION["karsilastirmalar"] as $key1 => $value1){
					   for($i=0; $i<count($key1)/2; $i++){
						$deger	= $value1["id"];
						$KCek = Sonuc(Sorgu("SELECT * FROM urunler WHERE id = '$deger'"));?>
                    <td class="price"><?php echo $KCek->fiyat;?> TL</td>
					<?php }}}?>
                </tr>
                <tr>
                    <td class="compare-label">Özellikler</td>
					<?php
					if (isset($_SESSION["karsilastirmalar"]) && count($_SESSION["karsilastirmalar"]) >= 1) { 
					 foreach($_SESSION["karsilastirmalar"] as $key1 => $value1){
					   for($i=0; $i<count($key1)/2; $i++){
						$deger	= $value1["id"];
						$KCek = Sonuc(Sorgu("SELECT * FROM urunler WHERE id = '$deger'"));?>
						<td>
							<table class="table table-bordered" style="margin-bottom: 0px;">
							 <?php $parcala = explode("|",$KCek->ozellik);
							 foreach($parcala as $ozellik){?>
								 <tr>
										<td><?php echo $ozellik;?></td>
								 </tr>
							 <?php }?> 
							</table>
						</td>
					<?php }}}?>
                </tr>

                <tr>
                    <td class="compare-label">Stok</td>
					<?php
					if (isset($_SESSION["karsilastirmalar"]) && count($_SESSION["karsilastirmalar"]) >= 1) { 
					 foreach($_SESSION["karsilastirmalar"] as $key1 => $value1){
					   for($i=0; $i<count($key1)/2; $i++){
						$deger	= $value1["id"];
						$KCek = Sonuc(Sorgu("SELECT * FROM urunler WHERE id = '$deger'"));?>
                    <td><?php echo($KCek->stok > 0 ? '<span class="in-stock"> Var </span>' : '<span class="out-stock"> Tükendi</span>');?></td>
					<?php }}}?>
                </tr>

                <tr>
                    <td class="compare-label">İşlem</td>
					<?php
					if (isset($_SESSION["karsilastirmalar"]) && count($_SESSION["karsilastirmalar"]) >= 1) { 
					 foreach($_SESSION["karsilastirmalar"] as $key1 => $value1){
					   for($i=0; $i<count($key1)/2; $i++){
						$deger	= $value1["id"];
						$KCek = Sonuc(Sorgu("SELECT * FROM urunler WHERE id = '$deger'"));?>
                    <td class="action">
					<?php if($KCek->secenek != ""){?>
						<form action="urun-detay-<?php echo $KCek->seo;?>.html" method="post" style="display: inline-block;">
						<?php }else{?>
						<form action="?ekle=<?php echo $KCek->id;?>" method="post" style="display: inline-block;">
						<?php }?>
						<input type="hidden" name="adet" value="1" />
                        <button class="add-cart button button-sm">Sepete Ekle</button>
						</form>
                        <form style="display: -webkit-inline-box;" action="?ksil=<?php echo $KCek->id;?>" method="post"><button class="button button-sm"><i class="fa fa-close"></i></button></form>
                    </td>
					<?php }}}?>
                </tr>
            </table>
			<?php }?>
        </div>
    </div>
</div>
<!-- ./page wapper-->
</div>

</div>
</div>


</div>
</div></div>                    </div>
                </div>
            </div>
        </div>
        
		
		
		
		

<?php include("footer.php");?>
	