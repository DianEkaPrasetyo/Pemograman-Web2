<?php
include "koneksi.php";


		$ID = $_POST['idartikel'];
		$judul = $_POST['title'];
		$penulis = $_POST['author'];
		$lead = $_POST['abstraksi'];
		$content = $_POST['konten'];
		


		$update="UPDATE tbl_artikel SET judul='$judul', penulis='$penulis', lead='$lead', content='$content' WHERE id='$ID'";
		$hasil=mysqli_query($koneksi,$update);

			if ($hasil) {

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
				echo "
					<font color='blue'>
						<center>
							<h3><a href='tampilkan.php'><p>Artikel Berhasil Diupdate. klik disini</p></a></h3>
						</center>	
					</font>";
			} else {
				echo "Artikel gagal di update";
			}
?>


