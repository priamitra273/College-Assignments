<?php 
    $mahasiswa = [
        [
        "nama" => "Moch Priamitra Nur Alif", 
        "npm" => "213040063", 
        "email" => "priamitra@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/audi.jpg"
    ],
        [
        "nama" => "Audi Hzr", 
        "npm" => "213040066", 
        "email" => "Audihzr@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/cb0.jpg"
    ],
        [
        "nama" => "Juan Aditya", 
        "npm" => "213040053", 
        "email" => "juanadt@gmail.com", 
        "jurusan" =>"Teknik Informatika",
        "gambar" => "img/faisal.jpg"
    ],
        [
        "nama" => "Faisal", 
        "npm" => "213040012", 
        "email" =>"faisal@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/juan.jpg"
        ],
        [
        "nama" => "Zalfa Mufrih Rifda", 
        "npm" => "213040069", 
        "email" => "zalfa@gmail.com", 
        "jurusan" =>"Teknik Informatika",
        "gambar" => "img/cowo1.jpg"
    ],
    [
        "nama" => "Gloria Rustama", 
        "npm" => "213040067", 
        "email" => "gloriar@gmail.com", 
        "jurusan" =>"Teknik Informatika",
        "gambar" => "img/cewe1.jpg"
    ],
    [
        "nama" => "Salma Salsabila", 
        "npm" => "213040064", 
        "email" => "salmas@gmail.com", 
        "jurusan" =>"Teknik Informatika",
        "gambar" => "img/cewe2.jfif"
    ],
    [
        "nama" => "Billy Ramadhan", 
        "npm" => "213040062", 
        "email" => "billyr@gmail.com", 
        "jurusan" =>"Teknik Informatika",
        "gambar" => "img/cowo2.jfif"
    ],
    [
        "nama" => "Iqbal Maulana Sidiq", 
        "npm" => "213040062", 
        "email" => "iqbal22@gmail.com", 
        "jurusan" =>"Teknik Informatika",
        "gambar" => "img/cowo3.jpg"
    ],
    [
        "nama" => "Lita Yusdia", 
        "npm" => "213040059", 
        "email" => "Litayusdi@gmail.com", 
        "jurusan" =>"Teknik Informatika",
        "gambar" => "img/cowo4.jfif"
    ]
    
    ];
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
</head>
<body>
    
    <div class="container">
        <h1>Daftar Mahasiswa</h1>
        <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Gambar</th>
        <th scope="col">Nama</th>
        <th scope="col">NPM</th>
        <th scope="col">Email</th>
        <th scope="col">Jurusan</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1 ?>
    <?php foreach($mahasiswa as $m) { ?>
        <tr class="align-middle">
        <th scope="row"><?= $i++; ?></th>
        <td>
            <img src="<?= $m["gambar"]?>" width="50 px";
            class="rounded-circle">
        </td>
        <td> <?= $m["nama"]?> </td>
        <td><?= $m["npm"]?></td>
        <td><?= $m["email"]?></td>
        <td><?= $m["jurusan"]?></td>
        <td>
            <a href="" class="btn badge bg-warning">edit</a>
            <a href="" class="btn badge bg-danger">delete</a>
        </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</html>