<?php 
	
	$koneksi = mysqli_connect("localhost","root","","dbartikel" );

	if (!$koneksi) {
		die("Gagal Terhubung dengan database".mysqli_connect_error());
	}

 ?>