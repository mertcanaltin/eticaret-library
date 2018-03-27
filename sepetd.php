<?php if(isset($_POST['islem'])){
		include("ozzzpanel/system/ayar.php");
include("ozzzpanel/system/fonksiyon.php");
		
		$mesaj['hata'] = false;
		$islem = $_POST['islem'];
		if($islem == "ekle"){
			
    	$gelen = $_POST['sid'];
		if (!isset($_SESSION["urunler"]) || count($_SESSION["urunler"]) < 1) { 
			$_SESSION["urunler"][] =  array("id" => $gelen, "adet" => intval($_POST['adet']));
		} else {//Düzeltilen kısım
			for ($i=0; $i <count($_SESSION["urunler"]) ; $i++) { 
				if($_SESSION["urunler"][$i]["id"] == $gelen){
					$_SESSION["urunler"][$i]["adet"]++;
					$mesaj['mesaj'] = "Ürüne 1 adet eklendi yeni adet : ".$_SESSION["urunler"][$i]["adet"];
					$mesaj['adet'] = $_SESSION["urunler"][$i]["adet"];
		   			$adet	= $_SESSION["urunler"][$i]["adet"];
		   			$SepetCek = Sonuc(Sorgu("SELECT * FROM urunler WHERE id = '$gelen'"));
		   			$topla = 0;
			if($SepetCek->indirim == "1"){
                $topla = intval($adet) * $SepetCek->ifiyat;
			}elseif($SepetCek->indirim == "0"){
                $topla = intval($adet) * $SepetCek->fiyat;
				}
			foreach($_SESSION["urunler"] as $key1 => $value1){
		   for($i=0; $i<count($key1)/2; $i++){
			$deger	= $value1["id"];
		   	$adet	= $value1["adet"];
		   	$SepetCek = Sonuc(Sorgu("SELECT * FROM urunler WHERE id = '$deger'"));
			if($SepetCek->indirim == "1"){
                $t = intval($adet) * $SepetCek->ifiyat;
				$STOPLAM += $t;
			}elseif($SepetCek->indirim == "0"){
                $t = intval($adet) * $SepetCek->fiyat;
				$STOPLAM += $t;	
				}
			}
		}
				$kdv = $STOPLAM*0/100;
				$kargo = 0.00;
				$mesaj['geneltoplam'] = number_format($STOPLAM+$kdv+$kargo, 2, ',', '.')." TL";
				$mesaj['aratoplam'] = number_format($STOPLAM, 2, ',', '.')." TL";
				$mesaj['kdvtoplam'] = number_format($STOPLAM+$kdv, 2, ',', '.')." TL";
				$mesaj['fiyat'] = number_format($topla, 2, ',', '.')." TL";
				}

			}//Düzeltilen kısım
		}
		}
		
		elseif($islem == "sil"){
			
		$gelen 		= $_POST['sid'];
		if (!isset($_SESSION["urunler"]) || count($_SESSION["urunler"]) < 1) { 
			$_SESSION["urunler"][] =  array("id" => $gelen, "adet" => intval($_POST['adet']));
		} else {//Düzeltilen kısım
			for ($i=0; $i <count($_SESSION["urunler"]) ; $i++) { 
				if($_SESSION["urunler"][$i]["id"] == $gelen){
					if($_SESSION["urunler"][$i]["adet"] > 1){
					$_SESSION["urunler"][$i]["adet"]--;
					$mesaj['mesaj'] = "Üründen 1 adet silindi yeni adet : ".$_SESSION["urunler"][$i]["adet"];
					$mesaj['adet'] = $_SESSION["urunler"][$i]["adet"];
		   			$adet	= $_SESSION["urunler"][$i]["adet"];
		   			$SepetCek = Sonuc(Sorgu("SELECT * FROM urunler WHERE id = '$gelen'"));
		   			$topla = 0;
			if($SepetCek->indirim == "1"){
                $topla = intval($adet) * $SepetCek->ifiyat;
			}elseif($SepetCek->indirim == "0"){
                $topla = intval($adet) * $SepetCek->fiyat;
				}
			foreach($_SESSION["urunler"] as $key1 => $value1){
		   for($i=0; $i<count($key1)/2; $i++){
			$deger	= $value1["id"];
		   	$adet	= $value1["adet"];
		   	$SepetCek = Sonuc(Sorgu("SELECT * FROM urunler WHERE id = '$deger'"));
			if($SepetCek->indirim == "1"){
                $t = intval($adet) * $SepetCek->ifiyat;
				$STOPLAM += $t;
			}elseif($SepetCek->indirim == "0"){
                $t = intval($adet) * $SepetCek->fiyat;
				$STOPLAM += $t;	
				}
			}
		}
				$kdv = $STOPLAM*0/100;
				$kargo = 0.00;
				$mesaj['geneltoplam'] = number_format($STOPLAM+$kdv+$kargo, 2, ',', '.')." TL";
				$mesaj['aratoplam'] = number_format($STOPLAM, 2, ',', '.')." TL";
				$mesaj['kdvtoplam'] = number_format($STOPLAM+$kdv, 2, ',', '.')." TL";
				$mesaj['fiyat'] = number_format($topla, 2, ',', '.')." TL";
				}else{
				$mesaj['hata'] = true;
			}
			}
			}//Düzeltilen kısım
		}
		
		}

		echo json_encode($mesaj);
	}else{
		$mesaj['mesaj'] = "Hiçbirşey gelmedi";
		echo json_encode($mesaj);
	}
	?>