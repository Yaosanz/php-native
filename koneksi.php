<?php 
// Konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "siswa_db";
// Perintah php untuk akses ke database
$koneksi = mysqli_connect($host, $user, $password, $database);
// Mengecek Apakah DB berhasil terkoneksi/tidak
// echo "Berhasil Terkoneksi....    ";
// if (!$koneksi) {
//     die("Gagal terhubung dengan database: " . mysqli_connect_error());
// }
?>