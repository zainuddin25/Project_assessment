<?php

include 'connection.php';
include 'function.php'; 

$siswa=$db->query("select * from hotel where id=".$_GET['id']);

$data_siswa=$siswa->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Hotel Mawar</title>
<link rel="stylesheet" href="../asset/css/all.css">
<link rel="stylesheet" href="../asset/css/bootstrap.min.css">
<link rel="stylesheet" href="asset/images/download.png">
<link rel="shortcut icon" href="../asset/images/skyscraper.png">
</head>
<body>

<!-- Navbar -->

<div class="row">
    <div class="col">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand mt-3 mb-3" style="color: white;" href="../index.php">HotelMawar.COM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a style="color: white;" class="nav-link ml-3" href="../index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a style="color: white;" class="nav-link ml-3" href="beli.php">Daftar Sebagai Pengunjung <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a style="color: white;" class="nav-link ml-3" href="daftar.php">Daftar Pengunjung Hotel <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a style="color: white;" class="nav-link ml-3" href="../fasilitas.php">Fasilitas Kami<span class="sr-only">(current)</span></a>
            </li>
            </ul>
        </div>
        </nav>
    </div>
</div>

<!-- Form Edit -->

<div class="container">
    <div class="row">
        <div style="margin-top: 100px;" class="col-5 border rounded p-4 mx-auto">
        <h5 style="text-align: center;">Penambahan Waktu Penyewaan</h5>
        <form action="daftar.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Lama Penyewaan</label>
                <input type="text" name="lama" class="form-control" value="<?php echo $data_siswa[0]['lama'] ?>" placeholder="Tambahkan Hari Penyewaan" required autocomplete="off">
                <input type="hidden" name="id" class="form-control" value="<?php echo $data_siswa[0]["id"] ?>">
            </div>
            <button type="submit" name="add" class="btn btn-primary">Kirim Data</button>
        </form>
        </div>
    </div>
</div>

<!-- Footer -->

<div class="row mt-5 fixed-bottom">
    <div class="col bg-dark">
        <div class="container">
            <div class="row">
                <div class="col text-white">
                    <p class="mt-3" style="text-align: center;"> &copy; CopyRight by : Muhammad Zainuddin Basyar</p>
                    <hr width="63%" class="border-light">
                    <p style="text-align: center;"><a style="text-decoration: none;" class="text-white" href="https://www.whatsapp.com/">Whatshapp : 085156970093</a> || <a style="text-decoration: none;" class="text-white" href="https://www.instagram.com/">Instragram : @zanuk_basyar</a> || <a style="text-decoration: none;" class="text-white" href="https://www.facebook.com/">Facebook : Zanuk</a> || <a style="text-decoration: none;" class="text-white" href="https://twitter.com/">Twitter : @RamezZ</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../asset/css/js/jquery-3.5.1.slim.min.js"></script>
<script src="../asset/css/js/popper.min.js"></script>
<script src="../asset/css/js/bootstrap.min.js"></script>    
</body>
</html>