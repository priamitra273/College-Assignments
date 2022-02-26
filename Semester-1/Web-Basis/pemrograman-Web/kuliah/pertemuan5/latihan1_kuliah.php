<?php
// ARRAY
// Array Adalah Variable yang datang menyinpan lebih

$hari1 = 'Senin';
$hari2 = 'Selasa';
$hari7 = 'Minggu';

$bulan1 = 'Januari';
$bulan12 = 'Desember';

// Membuat Array

$hari = ["Senin","Selasa",'Rabu','Kamis']; //Cara Baru

$bulan = array ("januari","Februari","maret"); //Cara Lama

$myArray = [100, 'Priamitra', true];

// Menampilkan Array
// menempilkam 1 elemen menggunakan index,index dimulai dari 0

echo $hari[1];
echo  "<br>";
echo $bulan[2];

// menampilkan semua isi array sekalius
// var_dump atay print _r
// khusus untuk debugging

echo '<hr>';
var_dump($hari);
echo '<br>';
print_r($bulan);

echo '<hr>';

// mencetak semua isi array menggunakan looping

for ($i = 0; $i < count($hari); $i++){
    echo $hari[$i];
    echo '<br>';
    
    }

    echo '<hr>';

// For each 
foreach($bulan as $b) {
    echo $b;
    echo "<br>";
}

echo '<hr>';

// Memanipulasi Array 
// Menambahkan elemen di akhir array 
$hari[4] = "Jum`at";
$hari[5] = "Sabtu";
var_dump($hari);






?>            