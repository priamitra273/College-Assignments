<?php
require 'functions.php';
session_start();

if ( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$id = $_GET["id"];

$dok = query("SELECT * FROM dokter WHERE id =$id")[0];


if( isset($_POST["submit"])) {

	if( ubah($_POST) > 0) {
		echo "
			<script>
			alert ('data berhasil diubah!');
			document.location.href = 'homeadmin.php';
			</script>
		";
	} else {
		echo "
		<script>
		alert ('data gagal diubah!');
		document.location.href = 'homeadmin.php';
		</script>
		";
	}


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

    <title>Edit Data</title>
</head>
<body>
    
        <div class="container">
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
		<div class="container-fluid">
        <a class="navbar-brand" href="#">Edit Data</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        </div>
    </nav>

    <blockquote class="blockquote">
        <a href="homeadmin.php" type="button" class="btn btn-info mt-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
		<path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
		</svg> Kembali Ke Daftar Dokter
		</a>
    </blockquote>

    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $dok["id"];?>">
    <input type="hidden" name="gambarlama" value="<?= $dok["gambar"];?>">

        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" id="nama" value="<?= $dok["nama"];?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="agama" class="col-sm-2 col-form-label">Agama</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="agama" id="agama" value="<?= $dok["agama"];?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="bidang" class="col-sm-2 col-form-label">Bidang Keahlian</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="bidang" id="bidang" value="<?= $dok["bidang"];?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="lahir" class="col-sm-2 col-form-label">Tempat & Tanggal Lahir</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="lahir" id="lahir" value="<?= $dok["lahir"];?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-10">
            <span class="input-group-text col-sm-2"><img src= img/<?=$dok["gambar"]; ?> width="150px"></span>
            <input type="file" class="form-control" name="gambar" id="gambar">
            </div>
        </div>

        <div class="mb-3 row">
            <button type="submit" name="submit" class="btn btn-primary">Edit Data</button>
        </div>
    </form>






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


