<!DOCTYPE html>
<html>
<head>
	<title>Konversi Tipe</title>
</head>
<body>
	<?php
	$a = 300.4; //memberi nilai pada $a
	echo $a; //menampilkan nilai $a
	echo "<br>";
	echo "tipe Double :", doubleval($a), "<br>"; //mengubah nilai a menjadi nilai double
	echo "tipe Integer :", intval($a), "<br>"; //mengubah nilai a menjadi nilai integer
	echo "tipe string :", strval($a); //mengubah nilai a menjadi nilai string
	?>

</body>
</html>