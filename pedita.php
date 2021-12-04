<?php
 include 'cabecera.php';
?>

<br><br><br><br>


<?php
$codigo = $_REQUEST['qcodprod'];
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"supea");
$sql="select * from productos where codprod='$codigo'";
$res=mysqli_query($con,$sql);
$reg=mysqli_fetch_row($res);
//print_r($reg);
//echo "Bienvenido a la edici&oacute;n";
//echo "<br>";
//echo "Editando login = $codigo";
?>

<center>
<form name='pmodusr' action='pmodusr.php' method='GET'>
Codprod: <input type='text' name='qcodprod' 
        value='<?php  echo $reg[0]; ?>' readonly><br>
Descripcion: <input type='text' name='qdescripcion' size=50 
        value='<?php  echo $reg[1]; ?>' readonly><br>
Precio:<input type='text' name='qprecio' size=50
        value='<?php  echo $reg[2]; ?>'> <br>
Linea: <input type='text' name='qlinea' 
        value='<?php  echo $reg[3]; ?>'><br>
<input type='submit' value='ACTUALIZAR'>
</form>
</center>

<?php

include 'pie.php';
?>



