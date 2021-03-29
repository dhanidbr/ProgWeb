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
	<table rules="rows"><br>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input type="text" name="Nama" placeholder="Masukkan Nama Lengkap" required /></td>
		</tr>
		<tr>
			<td>NPM</td>
			<td>:</td>
			<td><input type="text" name="Npm" placeholder="Masukkan NPM" required /></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="Alamat" placeholder="Masukkan Alamat" required /></td>
		</tr>
		<tr>
			<td>No.Telpon</td>
			<td>:</td>
			<td><input type="text" name="Telpon" placeholder="Masukkan Nomer Telpon" required /></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="text" name="Email" placeholder="Masukkan Email" required /></td>
		</tr>
		<tr>
			<td>TTL</td>
			<td>:</td>
			<td><input type="text" name="tempat" placeholder="Masukkan Tempat Lahir" required /><input type="date" name="Tgllahir"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jk" value="laki-laki">laki-laki
				<input type="radio" name="jk" value="perempuan">perempuan
			</td>
		</tr>
		<tr>
			<td>Foto Profil</td>
			<td>:</td>
			<td><input type="file" name="image" accept="image/*"></td>
		</tr>
		<tr>
			<td>Perguruan Tinggi</td>
			<td>:</td>
			<td><select name="Universitas" id="">
				<option value="">Pilih Perguruan Tinggi</option>
				<option value="UPN Veteran Jawa Timur">UPN Veteran Jawa Timur</option>
				<option value="UPN Veteran Jakarta">UPN Veteran Jakarta</option>
				<option value="UPN Veteran Yogyakarta">UPN Veteran Yogyakarta</option>
			</select></td>
		</tr>
		<tr>
			<td>Tahun Angkatan</td>
			<td>:</td>
			<td><select name="Angkatan" id="">
				<option value="">Pilih Tahun Angkatan</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
			</select></td>
		</tr>
		<tr><td></td>
			<td></td><td><button type="submit" name="button">Submit</button>
			<input type="reset" name="reset" value="Reset"></td>
		</tr>
	</table>
	</form>
</body>
</html>