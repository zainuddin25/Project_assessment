<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas Hotel Mawar</title>
<link rel="stylesheet" href="asset/css/all.css">
<link rel="stylesheet" href="asset/css/bootstrap.min.css">
<link rel="shortcut icon" href="asset/images/skyscraper.png">
<style>
    #box{
        width:300px;
        height:10px;
        background:green;
    }
    #star{
        color: gold ;
    }
</style>
</head>
<body>

<!-- Navbar -->

<div class="row">
    <div class="col">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand mt-3 mb-3" style="color: white;" href="index.php">HotelMawar.COM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a style="color: white;" class="nav-link ml-3" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a style="color: white;" class="nav-link ml-3" href="crud/beli.php">Daftar Sebagai Pengunjung <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a style="color: white;" class="nav-link ml-3" href="crud/daftar.php">Daftar Pengunjung Hotel <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a style="color: white;" class="nav-link ml-3" href="fasilitas.php">Fasilitas Kami<span class="sr-only">(current)</span></a>
            </li>
            </ul>
        </div>
        </nav>
    </div>
</div>

<!-- Bagian Rating -->

<div class="container">
    <div class="row">
        <div class="col-5 mx-auto mt-3">
            <h4 style="text-align: center;" class="mb-5">Rating</h4>
            <div class="border rounded border-primary p-3">
                <p style="text-align: center;">Kebersihan :  <i id="star" class="fas fa-star"></i> <i id="star" class="fas fa-star"></i> <i id="star" class="fas fa-star"></i> <i id="star" class="fas fa-star"></i><i id="star" class="fas fa-star-half-alt"></i> </p>
                <p style="text-align: center;">Kenyamanan :  <i id="star" class="fas fa-star"></i> <i id="star" class="fas fa-star"></i> <i id="star" class="fas fa-star"></i> <i id="star" class="fas fa-star"></i> <i id="star" class="fas fa-star"></i> </p>
                <p style="text-align: center;">Keamanan :  <i id="star" class="fas fa-star"></i> <i id="star" class="fas fa-star"></i> <i id="star" class="fas fa-star"></i> <i id="star" class="fas fa-star"></i> <i id="star" class="fas fa-star"></i></p>
                <p style="text-align: center;">Fasilitas :  <i id="star" class="fas fa-star"></i> <i id="star" class="fas fa-star"></i> <i id="star" class="fas fa-star"></i> <i id="star" class="fas fa-star"></i> <i id="star" class="fas fa-star-half-alt"></i></p>
            </div>
        </div>
    </div>
</div>

<!-- Fasilitas -->

<h4 class="mt-5 mb-5" style="text-align:center;">Fasilitas Yang Ada di Hotel Mawar</h4>
<div class="container">
    <div class="row mt-3 border rounded border border-primary p-3">
        <div class="col-3">
            <img src="asset/images/wifi.jpg" alt="fasilitas1" width="150px">
        </div>
        <div class="col-9">
            <p style="text-align: center;" class="mt-4">
                <h4>Internet Wifi Gratis</h4>
                <p> Dengan Kekuatan Sinyal Yang Sangat Kencang dan Tanpa Mengeluarkan Biaya </p> 
            </p>
        </div>
    </div>
    <div class="row border rounded border border-primary  p-3 mt-3">
        <div class="col-9">
            <p class="mt-4" style="text-align: center;">
                <h4>Makanan Gratis Setiap Hari Minggu</h4> 
                <p> Makanan Gratis Setiap Hari Minggu. Dengan Lauk Yang Terbilang Lezat Kini
                HotelMawar Memberikan Makana Gertis Kepada Seluruh Pengunjung atau Penginap Pada Hari Minggu Tepat Pada Pukul 06:30, 11:30, dan 17:30. </p> 
            </p>
        </div>
        <div class="col-3">
            <img class="float-right" src="asset\images\fasilitas1.jpg" alt="fasilitas2" width="150px">
        </div>
        </div>
    <div class="row border rounded border border-primary p-3 mt-3">
        <div class="col-3">
            <img src="asset\images\fasilitas.2.jpg" alt="fasilitas3" width="150px">
        </div>
        <div class="col-9">
            <p class="mt-5" style="text-align: center;">
                <h4>Area Rokok</h4> 
                <p>Kami Menyediakan Area Khusus Perokok Dengan Suasana Yang Sangat Nyaman dan Bersih</p>
            </p>
        </div>
    </div>
    <div class="row border rounded border border-primary p-3 mt-3">
        <div class="col-9">
            <p class="mt-5" style="text-align: center;">
                <h4>Keamanan Terjamin</h4> 
                <p> Kami Sangat Menjamin Keamanan Pengunjung HotelMawar Agar Tetap Selalu Aman dan Sejahtera</
            </p>
        </div>
        <div class="col-3">
            <img src="asset\images\fasilitas.3.jpg" alt="fasilitas4" class="float-right" width="150px">
        </div>
    </div>
    <div class="row border rounded border border-primary p-3 mt-3">
        <div class="col-3">
            <img src="asset\images\fasilitas.4.jpg" alt="fasilitas5" width="150px">
        </div>
        <div class="col-9">
            <p class="mt-5" style="text-align: center;">
                <h4>Tempat Ibadah</h4>
                <p> Kami Menghadirkan Tempat Ibadah Yang Bersih dan Suasana Yang Tenang Jauh Dari Suasana Ramai.</p>
                dan Masih Banyak Yang Bisa Kami Sediakan.
            </p>
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
                    <hr class="border-light" width="63%">
                    <p style="text-align: center;"><a style="text-decoration: none;" class="text-white" href="https://www.whatsapp.com/">Whatshapp : 085156970093</a> || <a style="text-decoration: none;" class="text-white" href="https://www.instagram.com/">Instragram : @zanuk_basyar</a> || <a style="text-decoration: none;" class="text-white" href="https://www.facebook.com/">Facebook : Zanuk</a> || <a style="text-decoration: none;" class="text-white" href="https://twitter.com/">Twitter : @RamezZ</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="asset/css/js/jquery-3.5.1.slim.min.js"></script>
<script src="asset/css/js/popper.min.js"></script>
<script src="asset/css/js/bootstrap.min.js"></script>    
</body>
</html>