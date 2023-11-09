<?php 
require 'koneksi.php';
// Menyimpan data kedalam variabel
$siswa_id = $_GET['siswa_id'];

// Query SQL untuk DELETE DATA
$query = "DELETE FROM tbl_siswa WHERE siswa_id='$siswa_id' ";
mysqli_query($koneksi, $query);
// Mengalihkan ke halaman index.php
header("location:daftar_siswa.php")
?>