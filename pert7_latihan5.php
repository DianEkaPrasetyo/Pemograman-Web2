<HTML> 
<HEAD> 
  <TITLE> Penggunaan List </TITLE> 
</HEAD> 
<BODY> 
<h1>
DIAN EKA PRASETYO
</h1>
  <?php 
    $program = array('Bobo','Doraemon','Spiderman'); 
    list($Majalah, $Komik, $Film) = $program; 
    echo "Jenis Buku & Hiburan :"; echo "<br />"; 
    echo "Cerpen : $Majalah"; echo "<br />"; 
    echo "Cerita Bergambar : $Komik"; 
    echo "<br />"; 
    echo "Bioskop : $Film"; 
  ?> 
</BODY> 
</HTML> 