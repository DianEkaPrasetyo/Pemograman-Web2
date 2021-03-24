
<!DOCTYPE HTML>
<html>
  <head>
    <title>Data Covid-19 </title>
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
  </style>
  <body>
  <div style="text-align:center;">
  <?php
  $txt_file    = file_get_contents('data.txt');
  $rows        = explode("\n", $txt_file);
  array_shift($rows);
  $i=1;

  foreach($rows as $row => $data)
  {

        // Explode digunakan untuk memisahkan Item Data dariPemisah |, array pada PHP dimulaipada index ke-0
        $row_data = explode('|', $data);

        $info[$row]['wilayah']           = $row_data[0];
        $info[$row]['positif']         = $row_data[1];
        $info[$row]['dirawat']          = $row_data[2];
        $info[$row]['sembuh']      = $row_data[3];
        $info[$row]['meninggal']       = $row_data[4];
        $info[$row]['operator']       = $row_data[5];
        $info[$row]['nim']       = $row_data[6];

        // Menampilkan Data
        echo "<br><br>";
        echo "Data pemantauan Covid-19 Wilayah ";
        echo $info[$row]['wilayah'];
        echo "<br>Per ";
        echo date('d-F-Y')." ";
        echo date('H:i:s');

        echo "<br>".$info[$row]['operator'];
        echo "/".$info[$row]['nim']."<br>";
        


        
        echo "<br><br>";
        echo "<td><b>" . $info[$row]['wilayah'] . '</b><br/>';

        echo "<table bgcolor=#FFFFFF border =2 align=center>";

        echo "</tr>";
        echo "<td>Positif</td>";
        echo "<td>Dirawat</td>";
        echo "<td>Sembuh</td>";
        echo "<td>Meninggal</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><b>".$info[$row]['positif']."</b></td>";
        echo "<td><b>".$info[$row]['dirawat']."</b></td>";
        echo "<td><b>".$info[$row]['sembuh']."</b></td>";
        echo "<td><b>".$info[$row]['meninggal']."</b></td>";
        echo "</tr></table>"; 


  }
  ?>
  </div>
</body>
</html>