<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siswa";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection
if (!$conn) {
	die("connection failed: " . mysqli_connect_error());
}

//Create table
$sql = "CREATE TABLE siswa (
	jenis_pendaftaran VARCHAR(100) NOT NULL,tanggal_masuk_sekolah VARCHAR(100) NOT NULL,
	nis VARCHAR(100) NOT NULL,
	nisn VARCHAR(100) NOT NULL,
	nomor_ujian VARCHAR(100) NOT NULL,
	paud VARCHAR(100) NOT NULL,
	tk VARCHAR(100) NOT NULL,
	skhun VARCHAR(100) NOT NULL,
	ijazah VARCHAR(100) NOT NULL,
	hobi VARCHAR(100) NOT NULL,
	cita VARCHAR(100) NOT NULL,
	nama_lengkap VARCHAR(100) NOT NULL,
	kelamin VARCHAR(100) NOT NULL,
	nik VARCHAR(100) NOT NULL,
	agama VARCHAR(100) NOT NULL,
	khusus VARCHAR(100) NOT NULL,
	alamat VARCHAR(100) NOT NULL,
	rt VARCHAR(100) NOT NULL,
	rw VARCHAR(100) NOT NULL,
	dusun VARCHAR(100) NOT NULL,
	desa VARCHAR(100) NOT NULL,
	kecamatan VARCHAR(100) NOT NULL,
	tempat_tinggal VARCHAR(100) NOT NULL,
	transportasi VARCHAR(100) NOT NULL,
	hp VARCHAR(100) NOT NULL,
	telp VARCHAR(100) NOT NULL,
	bantuan VARCHAR(100) NOT NULL,
	no_bantuan VARCHAR(100) NOT NULL,
	nama_lengkap_ayah_kandung VARCHAR(100) NOT NULL,
	tahun_lahir_ayah_kandung VARCHAR(100) NOT NULL,
	pendidikan_ayah_kandung VARCHAR(100) NOT NULL,
	pekerjaan_ayah_kandung VARCHAR(100) NOT NULL,
	penghasilan_ayah_kandung VARCHAR(100) NOT NULL,
	khusus_ayah_kandung VARCHAR(100) NOT NULL,
	nama_lengkap_ibu_kandung VARCHAR(100) NOT NULL,
	tahun_lahir_ibu_kandung VARCHAR(100) NOT NULL,
	pendidikan_ibu_kandung VARCHAR(100) NOT NULL,
	pekerjaan_ibu_kandung VARCHAR(100) NOT NULL,
	penghasilan_ibu_kandung VARCHAR(100) NOT NULL,
	khusus_ibu_kandung VARCHAR(100) NOT NULL,
	kewarganegaraan VARCHAR(100) NOT NULL,
	kodepos VARCHAR(100) NOT NULL,
	tempat_lahir VARCHAR(100) NOT NULL,
	tanggal_lahir VARCHAR(100) NOT NULL
)";
if (mysqli_query($conn, $sql)) {
	echo "Database created succesfully";
} else {
	echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
