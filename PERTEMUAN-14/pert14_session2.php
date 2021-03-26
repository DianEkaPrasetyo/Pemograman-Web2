<!DOCTYPE HTML>
<html>
    <head>
<link href="https://fonts.googleapis.com/css?family=Bungee|Bungee+Shade|Covered+By+Your+Grace" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="style.css">
        <title>Halaman Login</title>
        <style>
		.login {
			padding: 2em;
			margin: 8em auto;
			width: 17em;
			background: #fff;
			border-radius: 3px;
		}				
		
		h4 {
			font-size: 40px;
			font-family: 'Bungee', cursive;
			margin-bottom: 20px;
			margin-top: 10px;
		}
        blockquote {
            font: 2em/1em 'Open Sans', sans-serif;
            -webkit-text-stroke: 1px black;
            text-shadow: 2px 2px #000;
            margin: 0px 0 100px 0;
            color: #fff;
        }
        h1, h2, h3, h6 {
            font-family: 'Bungee Shade', cursive;
            margin-top: 150px;
        }
        </style>
        <body>

<?php
session_start();
//pemeriksaan session
if (isset($_SESSION['login'])) {
//jika sudah login
//menampilkan isi session
echo "<center><h1>Selamat Datang ". $_SESSION['login'] ."</h1></center>";
echo "<center><blockquote id='timeEvent'>Halaman ini hanya bisa diakses jika Anda sudah login</blockquote><center>";
echo "<center><h1>Klik dibawah ini untuk LOGOUT</h1><center>";
echo "<center><blcokquote id='timeEvent'><a href='pert14_session3.php'>di sini
(session3.php)</a></blockquote></center>";
} else {
//session belum ada artinya belum login
die ("Anda belum login! Anda tidak berhak masuk ke halaman
ini.Silahkan login <a href='pert14_session1.php'>di sini</a>"); 
}
 ?>
 </body>
</html>