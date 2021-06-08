<?php

include "koneksi.php";
//Inisialisasi nilai variabel awal
$kelamin = "";
$jumlah = null;
//Query SQL
$sql = "SELECT cita, COUNT(*) as 'total' from siswa WHERE kelamin = 'laki' GROUP by cita";
$hasil = mysqli_query($koneksi, $sql);
while ($data = mysqli_fetch_array($hasil)) {
    $idkelamin = $data['cita'];
    $sql_kelamin = mysqli_query($koneksi, "SELECT * FROM cita WHERE id = '$idkelamin'");
    while ($id_kel = mysqli_fetch_assoc($sql_kelamin)) {
        //Mengambil nilai rating dari database
        $kel = $id_kel['hobi'];
        $kelamin .= "'$kel'" . ", ";
    }
    //Mengambil nilai total dari database
    $jum = $data['total'];
    $jumlah .= "$jum" . ", ";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .warning {
            color: #FF0000;
        }
    </style>
    <title>Formulir</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="index.php">
                <img src="sma.png" id="icon" alt="User Icon" width="30">
                SMAN 1 Gedangan
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="import_excel.php">Import Excel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="import_pdf.php">Import PDF</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="grafik.php">Grafik</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col text-center mt-5 p-3">
                <div class="container p-3">
                    <div class="container p-3">
                        <div class="row mb-3">
                            <div class="col">
                                <h3>Rating Hobi yang disukai Laki - laki</h3>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-9 container mr-auto ml-auto">
                                <div>
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php echo $kelamin; ?>],
            datasets: [{
                label: ' Terbanyak',
                backgroundColor: ['rgb(26, 188, 156)', 'rgb(230, 126, 34)', 'rgb(231, 76, 60)', 'rgb(142, 68, 173)', 'rgb(44, 62, 80)', 'rgb(230, 126, 34)', 'rgb(211, 84, 0)', 'rgb(189, 195, 199)', 'rgb(52, 73, 94)', 'rgb(243, 156, 18)', 'rgb(155, 89, 182)'],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php echo $jumlah; ?>]
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>