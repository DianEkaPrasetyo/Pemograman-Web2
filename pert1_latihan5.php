<?php  
	//ini adalah komentar dalam satu baris
	/*Kalau yang ini, komentar dalam banyak baris, yang baru akan selesai setelah diakhiri dengan*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>Test Penyisipan PHP pada HTML</title>
</head>
<body>
	<h1>Latihan 5 Pertemuan 1</h1>
	<h1>Dian Eka Prasetyo</h1>
	Kapal Asing, Silahkan identifikasikan diri anda! <br>
	<?php  
	// berikut ini adalah inisiasi beberapa variabel
	$namad = "Jean";
	$namat = "Luc";
	$namab = "Piccard";
	$nilai1 = 25;
	$nilai2 = 50;
	$hasil = $nilai1 * $nilai2;
	$a=2;
	$b=3;
	$hsl=pow($a, $b);
	?>
	<b>Ini adalah Kapal Federasi Planet USS Enterprise
	<?php 
	echo "Saya $namab, $namad $namat $namab, Kapten Kapal.</b></br>";
	echo "$nilai1 x $nilai2 = $hasil </br>";
	echo "$a ^ $b = $hsl ";
	?>
</body>
</html>