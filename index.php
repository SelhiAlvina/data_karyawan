<?php
include_once('config/database.php');
$result = mysqli_query($db, 'select * from karyawan');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title>List Data Karyawan</title>
</head>
<body>
    <h1>List Karyawan<?= date ('j F Y') ?></h1>
    <a href="formtambah.php">Tambah Karyawan</a>
    <table border='1'>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Action</th>
    </tr>
    <?php
    while($karyawan = mysqli_fetch_array($result)){
        $tanggalLahir = date('Y, j F', strtotime($karyawan['dob_karyawan']));
    ?>
        <tr>
            <td><?= $karyawan['id_karyawan'] ?></td>
            <td><?= $karyawan['nama_karyawan'] ?></td>
            <td><?= $karyawan['jk_karyawan'] === 'L' ?'Laki-Laki' : 'Perempuan'?></td>
            <td><?= $tanggalLahir ?></td>
            <td><?= $karyawan['alamat_karyawan'] ?></td>
            <td><a href="formubah.php?id=<?= $karyawan['id_karyawan'] ?>">Edit</a> | 
            <a href="konfirmasihapus.php?id=<?= $karyawan['id_karyawan'] ?>">Delete</a></td>
        </tr>
    <?php
    }
    ?>
    </table>
                
            </body>
        </html>