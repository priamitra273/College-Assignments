<?php
// Array Associative 
// Array yang indexnya berupa string,yang berpasangan dengan nilainya 



$mahasiswa = [
    [
    "nama" => "Moch Priamitra Nur Alif", 
    "npm" => "213040063", 
    "email" => "priamitra@gmail.com", 
    "jurusan" => "Teknik Informatika"
],
    [
    "nama" => "Audi Hzr", 
    "npm" => "213040066", 
    "email" => "Audihzr@gmail.com", 
    "jurusan" => "Teknik Informatika"
],
    [
    "nama" => "Juan Aditya", 
    "npm" => "213040053", 
    "email" => "juanadt@gmail.com", 
    "jurusan" =>"Teknik Informatika"
],
    [
    "nama" => "Faisal", 
    "npm" => "213040012", 
    "email" =>"faisal@gmail.com", 
    "jurusan" => "Teknik Informatika"
    ]
];





// var_dump($mahasiswa [1]["email"]);
?> 








<?php foreach($mahasiswa as $m) { ?>
    <ul>
        <li>Nama:<?= echo $m["nama"]?></li>
        <li>NPM:<?= echo $m["npm"]?></li>
        <li>Email:<?= echo $m["email"]?></li>
        <li>Jurusan:<?= echo $m["jurusan"]?></li>
    </ul>
<?php } ?>







