<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PPDB SMA NEGERI X MEDAN</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>

    <div class="top">
        <div class="container me-4">
            <img src="icon/icon.png" width="100" height="100" style="margin-bottom: -120px; margin-left: -120px;">
            <h4 class="mt-3">PENERIMAAN SISWA BARU ONLINE</h4>
            <h5>SMA NEGERI X MEDAN - SUMATERA UTARA</h5>
            <p class="almt">Jl. Merah Putih No. 202 Medan, Sumatera Utara, 20371, Phone : 0811 XXXX XXXX, Email :
                info@smanmeda.sch.id</p>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-light p-2 start-50 translate-middle mt-5"
        style="width: 1300px; border-radius: 10px;">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-3 mt-2">
                        <a href="index.php" class="bi bi-house-door text-secondary" style="font-size: 17px;">
                            Beranda</a>
                    </li>
                    <li class="nav-item me-3 mt-2">
                        <a href="registrasi.php" class="bi bi-person-plus text-secondary" style="font-size: 17px;">
                            Pendaftaran</a>
                    </li>
                    <li class="nav-item me-3 mt-2">
                        <a href="daftar_siswa.php" class="bi bi-clipboard-data text-secondary" style="font-size: 17px;">
                            Daftar
                            Siswa</a>
                    </li>
                    <li class="nav-item me-3 mt-2">
                        <a href="pengumuman.php" class="bi bi-bell text-secondary" style="font-size: 17px; ">
                            Pengumuman</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Cari" aria-label="search">
                    <button class="btn btn-outline-success" type="submit">Cari</button>
                </form>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <table class="table table-bordered border-dark">
                        <tr>
                            <th style="text-align: center; background-color:rgb(190, 222, 239); ">No</th>
                            <th style="text-align: center; background-color:rgb(190, 222, 239);">Username</th>
                            <th style="text-align: center; background-color:rgb(190, 222, 239);">Password</th>
                            <th style="text-align: center; background-color:rgb(190, 222, 239);">Nama Lengkap</th>
                            <th style="text-align: center; background-color:rgb(190, 222, 239);">Email</th>
                            <th style="text-align: center; background-color:rgb(190, 222, 239);">Opsi</th>
                        </tr>
                        <?php
                        require 'koneksi.php';
                        $no = 1;    
                        $sql = mysqli_query($koneksi, 'SELECT * FROM `tbl_siswa`');
                        while ($data = mysqli_fetch_array($sql)) {
                            ?>

                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['siswa_username']; ?></td>
                            <td>******</td>
                            <td><?php echo $data['siswa_nama']; ?></td>
                            <td><?php echo $data['siswa_email']; ?></td>
                            <td>
                                <div class="button">
                                    <a href='edit_pendaftaran.php?siswa_id=<?php echo $data["siswa_id"] ?> '
                                        class="btn btn-primary bi bi-pencil-square "> Edit</a>
                                    <a href="hapus.php?siswa_id=<?php echo $data["siswa_id"];?>"
                                        class="btn btn-danger bi bi-trash ">
                                        Delete</a>
                                </div>
                            </td>
                        </tr>

                        <?php } ?>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <p>Copyright &copy <?php echo date('Y'); ?>
                <a href="index.php">SMA NEGERI X MEDAN</a>
            </p>
        </div>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>