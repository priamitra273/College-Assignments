<?php 
session_start();

if ( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

include 'functions.php';
$dokter = query("SELECT * FROM dokter");
if(isset($_GET["cari"])){
    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM dokter
				WHERE
			nama LIKE '%$keyword%' OR
			agama LIKE '%$keyword%' OR
			bidang LIKE '%$keyword%' OR
			lahir LIKE '%$keyword%'
			";
	$dokter = query($query);
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Dokter</title>
</head>
<body>
    
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Daftar Dokter</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="user.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="logout.php">Log Out</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <button class="hidden btn btn-danger mt-3" onclick="window.print()">
        <i class="bi bi-journal-plus">Cetak PDF</i>
    </button>

    <div class="row mt-4">
        <div class="col-4">
            <form action="" method="get">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="keyword" placeholder="Masukan keyword pencarian" autocomplete="off" id="keyword">
                <button class="btn btn-primary" type="submit" name="cari" id="tombol-cari">Cari</button>
            </div>
            </form>
        </div>
    <div>
        <form class="form-inline" action="" methode="post">
            <div class="form-group">
            <div class="row mt-4">
            <div id="container">
        <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Gambar</th>
        <th scope="col">Nama</th>
        <th scope="col">Tempat & Tanggal Lahir</th>
        <th scope="col">Agama</th>
        <th scope="col">Bidang Keahlian</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1 ?>
    <?php foreach($dokter as $m) { ?>
        <tr class="align-middle">
        <th scope="row"><?= $i++; ?></th>
        <td>
            <img src="img/<?= $m["gambar"]?>" width="50 px";
            class="rounded-circle">
        </td>
        <td> <?= $m["nama"]?> </td>
        <td><?= $m["lahir"]?></td>
        <td><?= $m["agama"]?></td>
        <td><?= $m["bidang"]?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="js/scriptuser.js"></script>
</body>
</html>