<?php
$id = 0;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}else {
    header("Location: index.php");
}

include_once('config/database.php');
$query = " select * from karyawan where id_karyawan  ='$id'";
$result = mysqli_query($db, $query);

$karyawan = [];
while($kyn = mysqli_fetch_array($result)){
    $karyawan = $kyn;
}

if (count($karyawan)=== 0){
    header("Location: index.php");
}
?>

<h1>Anda Yakin Ingin Hapus File Ini ?</h1>
<form action="proseshapus.php" method ="Post">
<table border = '1'>
<tr>
    <td>ID</td>
    <td><?= $karyawan['id_karyawan']  ?></td>
</tr>
<tr>
    <td>Nama</td>
    <td><?= $karyawan['nama_karyawan'] ?></td>
</tr>
<tr>
    <td>Alamat</td>
    <td><?=$karyawan['alamat_karyawan']  ?></td>
</tr>
<tr>
    <td>Tanggal Lahir</td>
    <td><?=$karyawan['dob_karyawan']  ?></td>
</tr>
<tr>
    <td>Jenis Kelamin</td>
    <td><?= $karyawan['jk_karyawan']  ?></td>
</tr>
</table>
<input type="Hidden" name = "id" value ="<?=$karyawan['id_karyawan'] ?>">
<a href="index.php">Kembali</a>
<input type="submit" value ="Hapus"/>


</form>