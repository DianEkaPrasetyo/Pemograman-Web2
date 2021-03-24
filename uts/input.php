<!DOCTYPE html>
<html>
  <head>
    <title>Data Pemantauan covid-19</title>
  </head>
  <style>
    html, body {
    margin: 0px;
    padding: 0px;
    background-color: #f16059;
  }
  h1 {
    text-align: center;
    margin-top: 100px;
    color: white;
  }
  form {
    width: 400px;
    height: 270px;
    background-color: ghostwhite;
    margin: 50px auto 0px auto;
    padding: 10px;
    border-radius: 10px;
  }
  .form-table{
    margin : 20px auto 0px auto;
  }
  .btn-submit{
    margin : 30px 180px;
  } 
  </style>
  <body>
    <h1>Tambah Data pasien</h1>
    <form action="" method="post">
      <table class="form-table">
        <tr>
          <td><label for="wilayah">Nama Wilayah : </label></td>
          <td>
            <select name="wilayah" id="wilayah">
              <option value="pilih" disabled selected>Pilih Wilayah</option>
              <option value="DKI Jakarta">DKI Jakarta</option>
              <option value="Jawa Barat">Jawa Barat</option>
              <option value="Banten">Banten</option>
              <option value="Jawa Tengah">Jawa Tengah</option>
            </select>
        </td>
        </tr>
        <tr>
          <td><label for="positif">Jumlah Positif : </label></td>
          <td><input type="text" name="positif" id="positif"></td>
        </tr>
        <tr>
          <td><label for="dirawat">Jumlah Dirawat : </label></td>
          <td><input type="text" name="dirawat" id="dirawat"></td>
        </tr>
        <tr>
          <td><label for="sembuh">Jumlah Sembuh : </label></td>
          <td><input type="text" name="sembuh" id="sembuh"></td>
        </tr>
        <tr>
          <td><label for="meninggal">Jumlah Meninggal : </label></td>
          <td><input type="text" name="meninggal" id="meninggal"></td>
        </tr>
        <tr>
          <td><label for="nama">Nama Operator : </label></td>
          <td><input type="text" name="nama" id="nama"></td>
        </tr>
        <tr>
          <td><label for="nim">NIM Mahasiswa : </label></td>
          <td><input type="text" name="nim" id="nim"></td>
        </tr>
      </table>
      <button type="submit" name="submit" class="btn-submit">Submit</button>
    </form>
  </body>
</html>

<?php 
  if(isset($_POST["submit"])){
    $myFile = fopen("data.txt", "w") or die("Unable to open file!");
    $data = explode("|", implode("|", $_POST));
    $wilayah = $data[0];
    $positif = $data[1];
    $dirawat = $data[2];
    $sembuh = $data[3];
    $meninggal = $data[4];
    $operator = $data[5];
    $nim = $data[6];
    $currentDate = date('d F Y h:i:s', time());
    $stringData = "Wilayah|Positif|Dirawat|Sembuh|Meninggal|Operator|Nim\n".$data[0]."|".$data[1]."|".$data[2]."|".$data[3]."|".$data[4]."|".$data[5]."|".$data[6];
    fwrite($myFile, $stringData);
    fclose($myFile);
      header("location: beranda.php");
  
        exit;
  
    
  } 
?>