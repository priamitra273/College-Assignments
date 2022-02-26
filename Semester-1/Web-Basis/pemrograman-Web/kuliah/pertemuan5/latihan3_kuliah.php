<?php

$mahasiswa = [
    ["Moch Priamitra Nur Alif", "213040063", "priamitra@gmail.com", "Teknik Informatika"],
    ["Audi Hzr", "213040066", "Audihzr@gmail.com", "Teknik Informatika"],
    ["Juan Aditya", "213040053", "juanadt@gmail.com", "Teknik Informatika"],
    ["Faisal", "213040012", "faisal@gmail.com", "Teknik Informatika"]
];








?>

<?php foreach($mahasiswa as $m) { ?>
    <ul>
        <li>Nama:<?php echo $m[0]?></li>
        <li>NPM:<?php echo $m[1]?></li>
        <li>Email:<?php echo $m[2]?></li>
        <li>Jurusan:<?php echo $m[3]?></li>
    </ul>
<?php } ?>

