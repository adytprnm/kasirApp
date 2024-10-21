<?php  
session_start();
if(!isset($_SESSION['username'])&&!isset($_SESSION['password'])){
?>
<meta http-equiv="refresh" content="0;url=../login.php">
<?php 
}else{
?>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelanggan</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
</head>
<body>
<?php include "../header.php" ?>
<main class="container border py-3">
<br><br><br>
<!-- pencarian -->


<main>
            <h2>Aplikasi Ini Dibuat Oleh</h2>
            <div class="container">
                <div class="row g-3">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-header">
                                <h2>Aditya Purnama</h2>
                            </div>
                            <div class="card-body">
                                <img src="../gambar/adit.jpeg" style="width: 150px;s" alt="bangbung" class="rounded">
                                <p>Kelas</p>
                                <p>Asal Sekolah</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-header">
                                <h2>Dini Hadiniyah</h2>
                            </div>
                            <div class="card-body">
                                <img src="../gambar/dini.jpeg" style="width: 150px;s" alt="bangbung" class="rounded">
                                <p>Kelas</p>
                                <p>Asal Sekolah</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-header">
                                <h2>Ismi Aziz</h2>
                            </div>
                            <div class="card-body">
                                <img src="../gambar/ismi.jpeg" style="width: 150px;s" alt="bangbung" class="rounded">
                                <p>Kelas</p>
                                <p>Asal Sekolah</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-header">
                                <h2>Nurmayanti</h2>
                            </div>
                            <div class="card-body">
                                <img src="../gambar/nur.jpeg" style="width: 150px;s" alt="bangbung" class="rounded">
                                <p>Kelas</p>
                                <p>Asal Sekolah</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-header">
                                <h2>Nely Amelia Putri</h2>
                            </div>
                            <div class="card-body">
                                <img src="../gambar/kurami.jpeg" style="width: 150px;s" alt="bangbung" class="rounded">
                                <p>Kelas</p>
                                <p>Asal Sekolah</p>
                            </div>
                        </div>
                    </div>
</main>
<?php include "../footer.php" ?>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>