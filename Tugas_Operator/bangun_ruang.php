<?php
  echo "<h1>Volume Bangun Ruang</h1>";
  echo "<hr>";
  echo "<b>1. Volume Kubus <br></b>";
  $sisi = 12;
  $volume = $sisi*$sisi*$sisi;
  echo "Panjang sisi kubus = $sisi <br>";
  echo "volume kubus = ($sisi x $sisi x $sisi) = ". $sisi * $sisi * $sisi." <br>";
  echo "<hr>";

  echo "<b>2. Volume Prisma <br></b>";
  $luas_alas = 20;
  $tinggi = 8;
  $volume = $luas_alas*$tinggi;
  echo "Luas alas prisma= $luas_alas <br>";
  echo "Tinggi prisma = $tinggi <br>";
  echo "Volume prisma = ($luas_alas x $tinggi) = ". $luas_alas * $tinggi." <br>";
  echo "<hr>";

  echo "<b>3. Volume Limas<br></b>";
  $luas_alas = 48;
  $tinggi = 16;
  $volume = 1/3*$luas_alas*$tinggi;
 
  echo "Luas alas limas = $luas_alas<br>";
  echo "Tinggi limas= $tinggi <br>";
  echo "Volume limas = (1/3 x $luas_alas x $tinggi) = ". round(1/3 * $luas_alas * $tinggi,2) ."<br>";
  echo "<hr>";

  echo "<b>4. Volume Balok <br></b>";
  $panjang = 10;
  $lebar = 5;
  $tinggi = 15;
  $volume = $panjang*$lebar*$tinggi;

  echo "Panjang balok = $panjang <br>";
  echo "Lebar balok = $lebar <br>";
  echo "Tinggi balok = $tinggi <br>";
  echo "Volume balok =  ($panjang x $lebar x $tinggi) = ". $panjang * $lebar * $tinggi." <br>";
  echo "<hr>";
  
  echo "<b>5. Volume Tabung <br></b>";
  $diameter = 14;
  $jari2 = $diameter/2;
  $tinggi = 10;
  $phi = 22/7;
  $volume = 22/7 * $jari2 * $jari2 * $tinggi;
 
  echo "Diameter tabung = $diameter <br>";
  echo "Jari-jari tabung = $jari2<br>";
  echo "Tinggi tabung = $tinggi <br>";
  echo "Volume tabung = (22/7 x $jari2 x $jari2 x $tinggi) = ". round(22/7 * $jari2 * $jari2 *$tinggi,2) ."<br>";
  echo "<hr>";
?>
