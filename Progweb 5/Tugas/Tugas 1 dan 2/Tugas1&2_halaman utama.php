<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<?php
	include('Tugas1&2_inc.php');
	?>
	</center>
	<center><h4>LOGIN</h4></center>
	<form method="POST" action="Tugas1&2_post.php">
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<div>
				<center><label>Nama:</label></center> <!--menampilkan Nama pada form awal-->
				<center><input type="text" name="nama" required /></center>
			</div>
			<div>
				<center><label>Email:</label></center> <!--menampilkan email pada form awal-->
				<center><input type="text" name="email" required /></center>
			</div>
			<br>
			<div>
				<center>
					<input type="submit" name="btnLogin" value="Login">
					<input type="reset" name="reset" value="Reset">
				</center>
			</div>
		</table>
	</form>
</body>
</html>