
<?php 	
	include 'koneksi.php';
	

	$judul = $_POST['title'];
	$penulis = $_POST['author'];
	$lead = $_POST['abstraksi'];
	$content = $_POST['konten'];

	$leadReplace = str_replace("\r\n", "<br>", "$lead");

	$contentReplace = str_replace("\r\n", "br>", "$content");

	$query = mysqli_query($koneksi, "INSERT INTO tbl_artikel VALUES('','$judul', '$penulis', '$lead', '$content')") or die (mysqli_error($koneksi,$query));

	if ($query) {
		echo "<style>
		*{
  				margin: 0;
  				padding: 100px;
  				box-sizing: border-box;
  				outline: none;
				font-family: 'Josefin Sans', sans-serif;
			}

		body{
  			background: #fece0c;
			}
</style>";
		echo "<h3 align=center><a href='\ntampilkan.php'>Proses Penambahan Artikel Berhasil klik disini</a><h3>";
		
			}else{
		echo "<h2 align=center>Proses Penambahan Artikel Gagal</h2>";
	}
 ?>
