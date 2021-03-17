<HTML> 
<HEAD> 
  <TITLE> Penggunaan List 2 </TITLE> 
</HEAD> 
<BODY> 
<h1>
DIAN EKA PRASETYO
</h1>
  <?php 
    $program = array('Bobo','Doraemon','Spiderman'); 
    list($Majalah, , $Film) = $program; 
    echo "Jenis Buku & Hiburan :"; 
    echo "<br />"; 
    echo "Cerpen : $Majalah"; 
    echo "<br />"; 
    echo "Bioskop : $Film"; 
  ?> 
</BODY> 
</HTML>