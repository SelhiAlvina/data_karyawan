<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>From Tambah Karyawan</title>
</head>
<body>
<h1>Form Tambah Karyawan</h1>
    <form action="prosestambah.php" method="get">
        <p>
            <input type="text" name="id_karyawan" placeholder='id_karyawan' required/>
</p>
<p>
<input type="text" name="nama_karyawan" placeholder='Nama Karyawan' required/>
</p>
<p>
                <select name = "jk_karyawan">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </p>
            <p>
                <input type ="date" name="dob_karyawan" placeholder='Tanggal lahir Karyawan' required/>
            </p>
            <p>
                <textarea name="alamat_karyawan" placeholder="Alamat Karyawan" cols="30" rows="10" required></textarea>
            </p>
            <p>
                <button type ="submit">Simpan</button>
            </p>
            </form>
    </body>
</html>