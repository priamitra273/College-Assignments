<?php 
require '../functions.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM dokter
            WHERE
            nama LIKE '%$keyword%'
            ";
$dokter = query($query);
 ?>
 <table border="1" cellpadding="13" cellspacing="0">
        <tr class="color1">
        <th scope="col">#</th>
        <th scope="col">Gambar</th>
        <th scope="col">Nama</th>
        <th scope="col">Tempat & Tanggal Lahir</th>
        <th scope="col">Agama</th>
        <th scope="col">Bidang Keahlian</th>
        </tr>
        <?php if(empty($dokter)) : ?>
            <tr>
                <td colspan="7">
                    <h1>Data Not Found.</h1>
                </td>
            </tr>
        <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach($dokter as $m) : ?>
            <tr>
                <td><?= $i; ?></td>
                </td>
                <td>
            <img src="img/<?= $m["gambar"]?>" width="50 px";
            class="rounded-circle">
        </td>
        <td> <?= $m["nama"]?> </td>
        <td><?= $m["lahir"]?></td>
        <td><?= $m["agama"]?></td>
        <td><?= $m["bidang"]?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        <?php endif; ?>
    </table>