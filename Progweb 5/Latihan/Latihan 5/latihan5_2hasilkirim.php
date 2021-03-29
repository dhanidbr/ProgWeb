<?php
if (empty($_POST['nama'])) {
	header("Location:latihan5_3kosong.php"); //menampilkanheader yg berada di file kosong
} else {
	echo "<center>Nama :".$_POST['nama']."</center><br>"; 
}
?>