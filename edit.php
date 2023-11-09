<?php
include 'koneksi.php';

$siswa_id = $_POST['siswa_id'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$email = $_POST['email'];

// query SQL untuk insert data
$query="UPDATE tbl_siswa SET siswa_username='$username',siswa_password='$password',siswa_nama='$nama',siswa_email='$email' where siswa_id='$siswa_id'";
mysqli_query($koneksi, $query);

header("location:daftar_siswa.php");

?>