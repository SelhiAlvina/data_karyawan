<?php
$id = 0;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}else {
    header("Location: index.php");
}

include_once('config/database.php');
$query = " select * from karyawan where id_karyawan ='$id'";
$result = mysqli_query($db, $query);
$karyawan = [];
while($kyn = mysqli_fetch_array($result)) {
    $karyawan = $kyn;
}
if(count($karyawan) ===0){
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Form Ubah Karyawan</title>
    </head>
    <body>
        <h1>Form Ubah Karyawan</h1>
        <form action="prosesubah.php" method="get">
            <p>
                <input type ="text" readonly value ="<?= $karyawan['id_karyawan'] ?>" name="id_karyawan" placeholder='Id_Karyawan' required/>
            </p>
            <p>
                <input type ="text" value ="<?= $karyawan['nama_karyawan'] ?>" name="nama_karyawan" placeholder='Nama Karyawan' required/>
            </p>
            <p>
                <select name = "jk_karyawan">
                    <?php
                    $sL = $karyawan['jk_karyawan'] === 'L' ? 'selected' : '';
                    $sP = $karyawan['jk_karyawan'] === 'P' ? 'selected' : '';
                    ?>
                    <option <?= $sL ?> value="L">Laki-laki</option>
                    <option <?= $sP ?> value="P">Perempuan</option>
                </select>
            </p>
            <p>
                <input type ="date" value ="<?= $karyawan['dob_karyawan'] ?>" name="dob_karyawan" placeholder='Tanggal lahir Karyawan' required/>
            </p>
            <p>
                <textarea name="alamat_karyawan" placeholder="Alamat Karyawan" cols="30" rows="10" required><?= $karyawan['alamat_karyawan'] ?></textarea>
            </p>
            <p>
                <a href="index.php">Kembali</a>
                <button type ="submit">Simpan</button>
            </p>
            </form>
    </body>
</html>
