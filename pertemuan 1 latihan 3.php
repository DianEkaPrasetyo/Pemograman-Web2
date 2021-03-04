<!DOCTYPE html>
<html>
<head>
	<title>Variabel Static</title>
</head>
<body>
	<h1>Dian Eka Prasetyo</h1>
	<h1>Variabel Static</h1>
	<?php 
		function test(){
			static $a=0; 
			echo "Nilai A : ";
			echo $a;
			echo "</br>";
			$a++;
		}
		test();
		test();
		test();
		test();
		test();
		test();
	?>
</body>
</html>