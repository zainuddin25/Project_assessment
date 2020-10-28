<?php 
include "connection.php";
include 'function.php';


if(isset($_POST['add'])){
    inputData($_POST);
    header('Location:beli.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Pengunjung Hotel Mawar</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<link rel="stylesheet" href="../asset/css/all.css">
<link rel="stylesheet" href="../asset/css/jquery/jquery.css">
<link rel="stylesheet" href="../asset/css/bootstrap.min.css">
<link rel="stylesheet" href="../asset/images/download.png">
<link rel="shortcut icon" href="../asset/images/skyscraper.png">
</head>
<body>

<!-- Navbar -->

<div class="row">
    <div class="col">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark border-lg">
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

<!-- Form Penambah Data -->

<div class="container">
    <div class="row mt-5">
        <div class="col-4 border rounded border border-primary p-3 mx-auto">
            <form action="beli.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="nama" class="form-control" required placeholder="Nama Pengunjung" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Penyewaan</label>
                    <input type="text" id="date" name="tanggal" class="form-control" required placeholder="Tanggal Penyewaan" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Lama Penyewaan</label>
                    <input type="text" name="lama" class="form-control" required placeholder="Lama Penyewaan" autocomplete="off">
                </div>
                    <button type="submit" name="add" class="btn btn-outline-primary">Kirim Data</button>
            </form>  
        </div>
    </div>
</div>

<!-- Table -->

<div class="container">
    <div class="row">
        <div class="col-11 pt-5 mx-auto">
        <table class="table border rounded">
            <thead class="thead-dark">
                <tr>
                <th style="text-align: center;" scope="col">Nama Pengunjung</th>
                <th style="text-align: center;" scope="col">Tanggal Penyewaan</th>
                <th style="text-align: center;" scope="col">Lama Penyewaan</th>
                </tr>
            </thead>
            <?php foreach($data_siswa as $key) : ?>
            <tbody>
                <tr>
                    <td class="border rounded border border-secondary"><?php echo $key['nama']; ?></td>
                    <td class="border rounded border border-secondary"><?php echo $key['tanggal']; ?></td>
                    <td class="border rounded border border-secondary"><?php echo $key['lama']; ?></td>
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
        </div>
    </div>
</div>

<!-- Footer -->

<div class="row mt-5">
    <div class="col bg-dark">
        <div class="container">
            <div class="row">
                <div class="col text-white">
                    <p class="mt-3" style="text-align: center;"> &copy; CopyRight by : Muhammad Zainuddin Basyar</p>
                    <p style="text-align: center;"><a style="text-decoration: none;" class="text-white" href="https://www.whatsapp.com/">Whatshapp : 085156970093</a> || <a style="text-decoration: none;" class="text-white" href="https://www.instagram.com/">Instragram : @zanuk_basyar</a> || <a style="text-decoration: none;" class="text-white" href="https://www.facebook.com/">Facebook : Zanuk</a> || <a style="text-decoration: none;" class="text-white" href="https://twitter.com/">Twitter : @RamezZ</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../asset/css/js/jquery-3.5.1.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="../asset/css/js/popper.min.js"></script>
<script src="../asset/css/js/bootstrap.min.js"></script>   
<script>
$( function() {
    $( "#date" ).datepicker({dateFormat : 'dd-mm-yy'});
} );
</script> 
</body>
</html>