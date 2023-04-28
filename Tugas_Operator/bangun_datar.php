<?php
  echo "<h1>Luas Bangun Datar</h1>";
  echo "<hr>";
  echo "<b>1. Luas Persegi <br></b>";
  $sisi = 12;
 
  echo "Panjang sisi persegi = $sisi <br>";
  echo "Luas persegi = ($sisi x $sisi) = ". $sisi * $sisi." <br>";
  echo "<hr>";

  echo "<b>2. Luas Jajar Genjang <br></b>";
  $alas = 12;
  $tinggi = 8;
 
  echo "Alas jajar genjang= $alas <br>";
  echo "Tinggi jajar genjang = $tinggi <br>";
  echo "Luas jajar genjang = ($alas x $tinggi) = ". $alas * $tinggi." <br>";
  echo "<hr>";

  echo "<b>3. Luas Lingkaran <br></b>";
  $jari2 = 21;
 
  $luas_lingkaran = 22/7 * $jari2 * $jari2;
 
  echo "Jari-jari lingkaran = $jari2<br>";

  echo "Luas lingkaran = (22/7 x $jari2 x $jari2) = ". round(22/7 * $jari2 * $jari2,2) ."<br>";
  echo "<hr>";

  echo "<b>4. Luas Segitiga <br></b>";
  $alas = 10;
  $tinggi = 15;
 
  $sisi_miring = sqrt(($alas * $alas) + ($tinggi * $tinggi));
 
  echo "Alas segitiga = $alas <br>";
  echo "Tinggi segitiga = $tinggi <br>";
  echo "Sisi miring segitiga = ". round($sisi_miring,2) ." <br>";
  echo "Luas segitiga =  (1/2 x $alas x $tinggi) = ". round(1/2 * $alas * $tinggi,2) ."<br>";
  echo "<hr>";
  
  echo "<b>5. Luas Belah Ketupat <br></b>";
  $d1 = 10.25;
  $d2 = 15.75;
 
  echo "Panjang diagonal 1 belah ketupat = $d1 <br>";
  echo "Panjang diagonal 2 belah ketupat = $d2 <br>";
  echo "Luas belah ketupat =  (1/2 x $d1 x $d2) = ". round(1/2 * $d1 * $d2,2) ."<br>";
  echo "<hr>";
?>
