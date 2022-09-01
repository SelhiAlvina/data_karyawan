<?php
include_once ('config\Koneksi.php');
class Karyawan{
    public $id;
    public $nama;
    public $jeniskelamin;
    public $dob;
    public $alamat;

    public function getAll(){
        $query = 'SELECT * FROM karyawan';
        $con = new Koneksi();
        return mysqli_query($con->koneksi, $query);
    }

    public function getByPrimarykey ($nim){
        $query = "SELECT * FROM karyawan where id_karyawan= '$id'";
        $con = new Koneksi();
        return mysqli_query($con->koneksi, $query);
    }

    public function insert(){
        $query = "insert into karyawan values (
            '$this->id',
            '$this->nama',
            '$this->jeniskelamin',
            '$this->dob',
            '$this->alamat')";
        $con = new Koneksi();
        return mysqli_query($con->koneksi, $query);
    }

    public function update(){
        $query = "UPDATE karyawan set
            nama_karyawan ='$this->nama',
            jk_karyawan ='$this->jeniskelamin',
            dob_karyawan ='$this->dob',
            alamat_karyawan ='$this->alamat'
            where id_karyawan= '$this->id'";
        $con = new Koneksi();
        return mysqli_query($con->koneksi, $query);
    }

    public function delete(){
        $query = "DELETE from karyawan where id_karyawan= '$this->id'";
        $con = new Koneksi();
        return mysqli_query($con->koneksi, $query);
    }
}
  