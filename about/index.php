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
    <title>About</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
</head>
<body>
<?php include "../header.php" ?>
<br><br><br>
<!-- pencarian -->
<main>
    <center>
        <h2 class="mt-5">Aplikasi Ini Dibuat Oleh</h2>
    </center>
            <div class="container border py-5">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h2>Aditya Purnama</h2>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">

                                        <img src="../gambar/adit.jpeg" style="width: 150px;s" alt="bangbung" class="rounded">
                                    </div>
                                    <div class="col-8">
                                        <table cellpadding="10">
                                            <tr>
                                                <td>Kelas</td>
                                                <td>: 12 Rpl 3</td>
                                            </tr>
                                            <tr>
                                                <td>Asal Sekolah</td>
                                                <td>: SMKN 1 Kadipaten</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>: Kertajati</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h2>Dini Hadiniyah</h2>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">

                                        <img src="../gambar/dini.jpeg" style="width: 150px;s" alt="bangbung" class="rounded">
                                    </div>
                                    <div class="col-8">
                                        <table cellpadding="10">
                                            <tr>
                                                <td>Kelas</td>
                                                <td>: 12 Rpl 3</td>
                                            </tr>
                                            <tr>
                                                <td>Asal Sekolah</td>
                                                <td>: SMKN 1 Kadipaten</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>: majalengka</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h2>Ismi Aziz</h2>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">

                                        <img src="../gambar/ismi.jpeg" style="width: 150px;s" alt="bangbung" class="rounded">
                                    </div>
                                    <div class="col-8">
                                        <table cellpadding="10">
                                            <tr>
                                                <td>Kelas</td>
                                                <td>: 12 Rpl 3</td>
                                            </tr>
                                            <tr>
                                                <td>Asal Sekolah</td>
                                                <td>: SMKN 1 Kadipaten</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>: Kertajati</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h2>Nely Amelia Putri</h2>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">

                                        <img src="../gambar/kurami.jpeg" style="width: 150px;s" alt="bangbung" class="rounded">
                                    </div>
                                    <div class="col-8">
                                        <table cellpadding="10">
                                            <tr>
                                                <td>Kelas</td>
                                                <td>: 12 Rpl 3</td>
                                            </tr>
                                            <tr>
                                                <td>Asal Sekolah</td>
                                                <td>: SMKN 1 Kadipaten</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>: Panyingkiran</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h2>Nurmayanti</h2>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">

                                        <img src="../gambar/nur.jpeg" style="width: 150px;s" alt="bangbung" class="rounded">
                                    </div>
                                    <div class="col-8">
                                        <table cellpadding="10">
                                            <tr>
                                                <td>Kelas</td>
                                                <td>: 12 Rpl 3</td>
                                            </tr>
                                            <tr>
                                                <td>Asal Sekolah</td>
                                                <td>: SMKN 1 Kadipaten</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>: Kadipaten</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</main>
<?php include "../footer.php" ?>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>