<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=coklukayit;charset=UTF8","root","");

}catch(PDOException $Hata){
    echo "Bağlantı Hatası";

}

function Filtrele($Deger){
    $Bir = trim($Deger);
    $iki = strip_tags($Bir);
    $Uc =  htmlspecialchars($iki, ENT_QUOTES);
    $Sonuc = $Uc;
    return $Sonuc;
  }

?>