<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include('Tugas3_inc.php')
?>
<h4>BIODATA</h4>
<form method="POST" action="Tugas3_post.php">
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><?php echo $_POST['Nama']; //menampilkan data nama?></td>
	</tr>
	<tr>
		<td>NPM</td>
		<td>:</td>
		<td><?php echo $_POST['Npm']; //menampilkan data NPM?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $_POST['Alamat']; //menampilkan data Alamat?></td>
	</tr>
	<tr>
		<td>No.Telpon</td>
		<td>:</td>
		<td><?php echo $_POST['Telpon']; //menampilkan data No.Telp?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td>:</td>
		<td><?php echo $_POST['Email']; //menampilkan data email?></td>
	</tr>
	<tr>
		<td>TTL</td>
		<td>:</td>
		<td><?php echo $_POST['tempat']; //menampilkan data tempat lahir?>,<?php echo $_POST['Tgllahir']; //menampilkan data tgl lahir?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><?php echo $_POST['jk']; //menampilkan data jenis kelamin?></td>
	</tr>
	<tr>
		<td>Foto Profil</td>
		<td>:</td>
		<td><img src="<?php echo $_POST['image']; //menampilkan data foto?>" height="200px" width="200px" alt=""></td>
	</tr>
	<tr>
		<td>Universitas</td>
		<td>:</td>
		<td><?php echo $_POST['Universitas']; //menampilkan data universitas?></td>
	</tr>
	<tr>
		<td>Tahun Angkatan</td>
		<td>:</td>
		<td><?php echo $_POST['Angkatan']; //menampilkan data angkatan?></td>
	</tr>
</table>
</body>
</html>