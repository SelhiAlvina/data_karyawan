<?php
$id = $_GET['id_karyawan'];
$nama = $_GET['nama_karyawan'];
$jenisKelamin = $_GET['jk_karyawan'];
$tanggalLahir = $_GET['dob_karyawan'];
$alamat = $_GET['alamat_karyawan'];

//2. Panggil settingan database
include_once('config/database.php');

//3.Eksekusi Query
$query ="insert into karyawan values ('$id', '$nama', '$jenisKelamin', '$tanggalLahir', '$alamat')";
$result = mysqli_query($db, $query);

header("location: index.php");
