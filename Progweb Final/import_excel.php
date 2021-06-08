<!DOCTYPE html>
<html>

<?php
include 'koneksi.php';

$sql = "SELECT * FROM siswa";
$data = mysqli_query($koneksi, $sql);
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Siswa.xls");
?>

<head>
    <title>Export Data Ke Excel Dengan PHP - SMAN 1 Gedangan</title>
</head>

<body>
    <style type="text/css">
        body {
            font-family: sans-serif;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #3c3c3c;
            padding: 3px 8px;

        }

        a {
            background: blue;
            color: #fff;
            padding: 8px 10px;
            text-decoration: none;
            border-radius: 2px;
        }
    </style>
    <center>
        <h1>Export Data Ke Excel Dengan PHP <br /> SMAN 1 Gedangan</h1>
    </center>

    <table>
        <tr>
            <th>No</th>
            <th>Jenis Pendaftaran</th>
            <th>NIS</th>
            <th>NISN</th>
            <th>Nomor Ujian</th>
            <th>SKHUN</th>
            <th>Ijazah</th>
            <th>Hobi</th>
            <th>Cita cita</th>
            <th>Nama Lengkap</th>
            <th>Kelamin</th>
            <th>NIK</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Kecamatan</th>
            <th>Tempat Tinggal</th>
            <th>Transportasi</th>
            <th>HP</th>
            <th>Email</th>
        </tr>
        <?php
        $no = 1;
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td>
                    <?php
                    if ($d['jenis_pendaftaran'] == 1) {
                        echo "Pindahan";
                    }
                    ?>
                </td>
                <td><?php echo $d['nis']; ?></td>
                <td><?php echo $d['nisn']; ?></td>
                <td><?php echo $d['nomor_ujian']; ?></td>
                <td><?php echo $d['skhun']; ?></td>
                <td><?php echo $d['ijazah']; ?></td>
                <td>
                    <?php
                    if ($d['hobi'] == 1) {
                        echo "Olahraga";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($d['cita'] == 4) {
                        echo "Dokter";
                    }
                    ?>
                </td>
                <td><?php echo $d['nama_lengkap']; ?></td>
                <td>
                    <?php
                    if ($d['kelamin'] == 1) {
                        echo "Laki laki";
                    }
                    if ($d['kelamin'] == 2) {
                        echo "Perempuan";
                    }
                    ?>
                </td>
                <td><?php echo $d['nik']; ?></td>
                <td>
                    <?php
                    if ($d['agama'] == 1) {
                        echo "Islam";
                    }
                    ?>
                </td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['kecamatan']; ?></td>
                <td>
                    <?php
                    if ($d['tempat_tinggal'] == 1) {
                        echo "Bersama Orang Tua";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($d['transportasi'] == 2) {
                        echo "Kendaraan Pribadi";
                    }
                    ?>
                </td>
                <td><?php echo $d['hp']; ?></td>
                <td><?php echo $d['email']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>