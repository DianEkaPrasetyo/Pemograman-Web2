<HTML> 
<HEAD> 
  <TITLE> Penggunaan Split </TITLE> 
</HEAD> 
<BODY> 
<h1>
DIAN EKA PRASETYO
</h1>
  <?php 
    $tanggal = "17-05-2010"; 
    // The split() function was removed in PHP 7.
    // list($hari, $bulan, $tahun) = split("-", $tanggal);
    list($hari, $bulan, $tahun) = explode("-", $tanggal);
    echo "Hari = $hari"; 
    echo "<br />"; 
    echo "Bulan = $bulan"; 
    echo "<br />"; 
    echo "Tahun = $tahun"; 
  ?> 
</BODY> 
</HTML> 