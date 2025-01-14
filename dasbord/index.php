<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
?>
    <meta http-equiv="refresh" content="0;url=../login.php">
    <?php
} else {
    }
    ?>
        <?php
        include "../config.php";
        $tahun = date('Y');
        $sql = "SELECT MONTH(tanggal) AS bulan, COUNT(*) AS count FROM penjualan WHERE YEAR(tanggal) = $tahun GROUP BY bulan";
        $result = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $penjualan[] = ['bulan' => $row['bulan'], 'count' => $row['count']];
        }
        $json_penjualan = json_encode($penjualan);
        
        $sql = "SELECT SUM(jumlah) AS jumlah,nama_produk FROM `detail_penjualan` GROUP BY nama_produk";
        $result = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $produk[] = ['nama_produk' => $row['nama_produk'], 'jumlah' => $row['jumlah']];
        }
    $json_produk = json_encode($produk);
        ?>
        <html>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Dashboard</title>
            <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
            <script src="../popper.min.js"></script>
            <link href="../img/logo.png" rel='shortcut icon'>
            <style>

                .chart {
                    width: 650px;
                    padding-top: 5px;
                }
            </style>
        </head>

        <body>
            <?php
            include "../header.php";
            ?>
            <br><br><br>
            <main class="pt-5">
                <div class="container pt-3">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="chart">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                        <div class="col-sm-4">

                            <canvas id="Charts"></canvas>
                        </div>

                        <!-- akhir modal Form -->
            </main>
            <?php include "../footer.php" ?>
            <script src="../chart.js"></script>
            <script src="../bootstrap/js/bootstrap.min.js"></script>
            <script>
                const grafik = <?= $json_penjualan; ?>;
                const ctx = document.getElementById('myChart').getContext('2d')
                const bulan = ['januari', 'februari', 'maret', 'april', 'mei', 'juni', 'juli', 'agustus', 'september', 'oktober', 'november', 'desember']
                const myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: grafik.map((item) => bulan[item.bulan - 1]),
                        datasets: [{
                            label: 'Jumlah Transaksi',
                            data: grafik.map(item => item.count),
                            backgroundColor: "green",
                            borderColor: "green",
                            borderWidth: "1"
                        }]

                    },
                });

                const charts = document.getElementById('Charts').getContext('2d')
                const grafiks = <?= $json_produk; ?>;
                new Chart(charts, {
                    type: 'doughnut',
                    data: {
                        labels: grafiks.map((item) => item.nama_produk),
                        datasets: [{
                            label: 'Jumlah Terjual',
                            data: grafiks.map(item => item.jumlah),
                        }]

                    },
                });
            </script>
        </body>
    
        </html>
<?php 
?>