<?php
include 'connection.php';
include 'function.php';

if(isset($_GET['delete'])){
    deleteHotel($_GET);
    header('Location:daftar.php');
}

if(isset($_POST['add'])){
    editData($_POST['lama'],$_POST['id']);
    header('location:daftar.php');
}

$temp=[];
if(isset($_POST['cari'])) {
    $temp=searching($_POST['search']);
    if(!empty($temp)) {
        $data_siswa=$temp;
    }elseif(empty($temp)) {
        $error = "Ups, Input "."<b>".$_POST['search']."</b>"." Tidak Ditemukan";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftra Pengunjung Hotel Mawar</title>
<link rel="stylesheet" href="../asset/css/all.css">
<link rel="stylesheet" href="../asset/css/bootstrap.min.css">
<link rel="stylesheet" href="../asset/images/download.png">
<link rel="shortcut icon" href="../asset/images/skyscraper.png">
</head>
<body>
    
<!-- Bagian Navbar -->

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
            <form class="form-inline my-2 my-lg-0" method="POST">
                <input name="search" style="margin-left: 200px;" class="form-control mr-sm-2" type="search" placeholder="Cari Nama" aria-label="Search">
                <button name="cari" class="btn btn-outline-primary my-2 my-sm-0" type="submit">Cari Data</button>
            </form>
            </ul>
        </div>
        </nav>
    </div>
</div>

<!-- Alert Error -->

<div class="col-5 mx-auto mt-3">
    <?php if(isset($error)) : ?>
        <div role="alert" class="alert alert-danger">
            <?php echo $error; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>   
</div>

<!-- Daftar Pengunjung -->

<div class="container">
    <div class="row">
        <div class="col-6 mx-auto">
            <?php foreach($data_siswa as $key) : ?>
                <div class="card text-center mt-3 border border-secondary">
                    <div class="card-header">
                        <h6>Pengunjung</h6>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $key['nama']; ?></h5>
                        <p class="card-text"><?php echo " Menginap Pada Tanggal : ". $key['tanggal']; ?> 
                        <p class="card-text"><?php echo "Selama : ". $key['lama']; ?></p></p>
                        <a class="btn btn-secondary" href="daftar.php?delete=&id=<?php echo $key['id']?>">Selesai Menginap</a> | <a class="btn btn-secondary" href="edit.php?id=<?php echo $key['id']; ?>">Tambah Waktu</a></td>
                    </div>
                </div>
                <hr style="width: 75%;" class="border border-secondary">
            <?php endforeach; ?>
        </div>
    </div>
</div>


<script src="../asset/css/js/jquery-3.5.1.slim.min.js"></script>
<script src="../asset/css/js/popper.min.js"></script>
<script src="../asset/css/js/bootstrap.min.js"></script> 
</body>
</html>