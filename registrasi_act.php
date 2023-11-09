<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$email = $_POST['email'];

$result = mysqli_query($koneksi, "INSERT INTO tbl_siswa (`siswa_id`,`siswa_username`, `siswa_password`, `siswa_nama` , `siswa_email`) VALUES (NULL, '$username', '$password', '$nama', '$email' ) ");
if(!$result) {
    echo 'Gagal menyimpan data...!';
} else {
    echo 'Data berhasil disimpan...!';
    header('location:index.php');
}


?>