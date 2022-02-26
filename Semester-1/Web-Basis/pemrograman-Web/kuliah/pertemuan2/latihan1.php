<?php 
// Pertemuan 2, Belajar sytax PHP


// Nilai
// angka (integer),tulisan(string),true/false (boolean)
echo 10; //integer
echo '<br>';
echo 'alip'; // string
echo '<br>';
echo false; //boolean null
echo '<hr>';

// VARIABEL
// tempat menampung nilai 
// awali dengan tanda $ 
// boleh menggandung angka tidak boleh di awali angka 
// tidak boleh ada spasi 

$nama = 'alip';
echo  "Halo, nama saya $nama" ;

echo '<hr>';

// String
// " " / ' '
$hari = "Sabtu";
echo $hari;
echo '<br>';

// contact/penggabung string 
// .
$nama_depan = "priamitra";
$nama_belakang = "nur";
echo $nama_depan . " " . $nama_belakang;
echo "<br>";
echo "<hr>";


// escape character
// (\)


// interpolasi
// mencetak langsung isi variabe 
// hanya bisa oleh ""
echo "Halo, nama Saya $nama";
echo '<br>';
echo '<hr>';



// Operator 
// Aritmatika 
// +,-,*
echo 1+1; // hasil dari 1 + 1 adalah 2 
echo '<br>';
echo ' hasil dari 1+1 adalah ' . 1 + 1;
echo '<br>';
echo (1+2) * 3 - 4 ;
echo '<hr>';

// perbandingan 
// <,>,<=,>=,!=
echo 1 < 5; 
echo '<br>';
echo 1 == '1';
echo '<hr>';

// identitas / strick Comparison 
// ===, !==
echo 1 === "1";
echo '<hr>';

// increment / decrement
// tambah / kurang 1
// ++ ,--

$x =10;
$x++;

echo $x;





























?>