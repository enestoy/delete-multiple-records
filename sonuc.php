<?php 
require 'database.php';


$GelenSecimDegerleri = $_POST["secim"];

foreach($GelenSecimDegerleri as $SilinecekDeger){
  $SilinecekID = Filtrele($SilinecekDeger);
  $Sil = $db->prepare("DELETE FROM users WHERE id= ? LIMIT 1");
  $Sil->execute([$SilinecekID]);
}


  header("Location:index.php");
  exit();
?>