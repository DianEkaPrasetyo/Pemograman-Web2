<!DOCTYPE HTML>
<html>
    <head>
<link href="https://fonts.googleapis.com/css?family=Bungee|Bungee+Shade|Covered+By+Your+Grace" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="style.css">
        <title>Halaman Login</title>
        <style>
		blockquote {
			font: 2em/1em 'Open Sans', sans-serif;
			-webkit-text-stroke: 1px black;
			text-shadow: 2px 2px #000;
			margin: -80px 0 100px 0;
			color: #fff;
		}
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
            h1, h2, h3, h6 {
            font-family: 'Bungee Shade', cursive;
            margin-top: 0px;
        }
        </style>
        <body>
<?php 

	session_start();
	if (isset($_SESSION['login'])) {
		unset($_SESSION);
		session_destroy();

		echo "<center><blockquote id='timeEvent'>Anda Berhasil LOGOUT</blockquote></center>";
		echo "<center><blockquote id='timeEvent'><a href='pert14_session1.php'>disini</a>untuk LOGIN kembali</blockquote></center>";

		echo "<center><blockquote id='timeEvent'>Anda sekarang tidak bisa masuk kehalaman <a href='pert14_session2.php'>session2.php</a></blockquote></center>";
	}
 ?>



</body>
</html>