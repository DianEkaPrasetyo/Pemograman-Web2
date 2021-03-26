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
		input[type="password"],
		input[type="text"],
		input[type="email"],
		textarea {
		padding: 8px;
		width: 95%;
		background: #efefef;
		border: 0;
		font-size: 10pt;
		margin: 6px 0px;
		}
		h4 {
			font-size: 40px;
			font-family: 'Bungee', cursive;
			margin-bottom: 20px;
			margin-top: 10px;
		}
        </style>
    </head>
    <body>
	<div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12 mx-auto">
			
                <div class="login">
				<center><h4>Login</h4></center>
            <form method="post">
                <input type="text" name="user" placeholder="USER"><br>
                <input type="password" name="pass" placeholder="PASSWORD"><br>
                <input class="btn" type="submit" name="login" id="partyTimeButton" value="Login">
            </form>
        </div>     
		<?php 
session_start();
	if (isset($_POST['login'])) {
			$user = $_POST['user'];
			$pass = $_POST['pass'];
	}

	if ($user === "dianeka" && $pass = "paketasiap") {
		$_SESSION['login'] = $user;
		echo "<script>alert('Anda Berhasil Login')</script>";
		echo "<center><h1>Klik <a href='pert14_session2.php'>disini (session2.php)</h1><center>";
	}else {
	
	}
 ?>
    </body>
</html>