<?php

$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Nilai a = $a <br>";
echo "Nilai b = $b <br><br>";

echo "Hasil penjumlahan (a + b) = $hasilTambah <br>";
echo "Hasil pengurangan (a - b) = $hasilKurang <br>";
echo "Hasil perkalian (a * b) = $hasilKali <br>";
echo "Hasil pembagian (a / b) = $hasilBagi <br>";
echo "Sisa bagi (a % b) = $sisaBagi <br>";
echo "Pangkat (a ** b) = $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<b>Operator Pembanding</b><br>";
echo "Apakah a == b? "; var_dump($hasilSama); echo "<br>";
echo "Apakah a != b? "; var_dump($hasilTidakSama); echo "<br>";
echo "Apakah a < b? "; var_dump($hasilLebihKecil); echo "<br>";
echo "Apakah a > b? "; var_dump($hasilLebihBesar); echo "<br>";
echo "Apakah a <= b? "; var_dump($hasilLebihKecilSama); echo "<br>";
echo "Apakah a >= b? "; var_dump($hasilLebihBesarSama); echo "<br><hr>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<b>Operator Logika</b><br>";
echo "a && b = "; var_dump($hasilAnd); echo "<br>";
echo "a || b = "; var_dump($hasilOr); echo "<br>";
echo "!a = "; var_dump($hasilNotA); echo "<br>";
echo "!b = "; var_dump($hasilNotB); echo "<br>";


$a += $b; 
echo "Hasil a += b adalah $a <br>";

$a -= $b; 
echo "Hasil a -= b adalah $a <br>";

$a *= $b; 
echo "Hasil a *= b adalah $a <br>";

$a /= $b; 
echo "Hasil a /= b adalah $a <br>";

$a %= $b;
echo "Hasil a %= b adalah $a <br>";

$hasilIdentik = $a === $b;   
$hasilTidakIdentik = $a !== $b; 

echo "<b>Operator Identik</b><br>";
echo "Apakah a === b ? "; var_dump($hasilIdentik); echo "<br>";
echo "Apakah a !== b ? "; var_dump($hasilTidakIdentik); echo "<br>";

// Soal 3.6 - Menghitung persentase kursi kosong di restoran
$totalKursi = 45;
$kursiTerisi = 28;

$kursiKosong = $totalKursi - $kursiTerisi;

$persenKosong = ($kursiKosong / $totalKursi) * 100;

echo "<b>Perhitungan Kursi Restoran</b><br>";
echo "Total kursi: $totalKursi <br>";
echo "Kursi terisi: $kursiTerisi <br>";
echo "Kursi kosong: $kursiKosong <br>";
echo "Persentase kursi kosong: " . round($persenKosong, 2) . "%<br>";
?>


