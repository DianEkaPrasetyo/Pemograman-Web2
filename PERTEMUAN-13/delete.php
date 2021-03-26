
<?php 
	include 'koneksi.php';
	
	$idArtikel = $_GET['id'];
	
	$query = mysqli_query($koneksi,"DELETE FROM tbl_artikel WHERE id='$idArtikel'");

	if ($query) {
		echo "<style>
		*{
  				margin: 0;
  				padding: 50px;
  				box-sizing: border-box;
  				outline: none;
				font-family: 'Josefin Sans', sans-serif;
			}

		body{
  			background: #fece0c;
					}
						</style>";
		echo "<center><a href='edit.php'><h3>Artikel berhasil dihapus klik disini kembali<h3></a><br></center>";
 		
	}

 ?>

