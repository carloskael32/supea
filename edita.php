<?php
 include 'cabecera.php';
?>

<br><br><br><br>

<?php
$codigo = $_REQUEST['qlogin'];
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"supea");
$sql="select * from usuarios where login='$codigo'";
$res=mysqli_query($con,$sql);
$reg=mysqli_fetch_row($res);
//print_r($reg);
//echo "Bienvenido a la edici&oacute;n";
//echo "<br>";
//echo "Editando login = $codigo";
?>

<center>
<form name='modusr' action='modusr.php' method='GET'>
Login: <input type='text' name='qlogin' 
        value='<?php  echo $reg[0]; ?>' readonly><br>
Clave: <input type='text' name='qclave' size=50 
        value='<?php  echo $reg[1]; ?>' readonly><br>
Usuario:<input type='text' name='qusr' size=50
        value='<?php  echo $reg[2]; ?>'> <br>
Nivel: <input type='text' name='qniv' 
        value='<?php  echo $reg[3]; ?>'><br>
<input type='submit' value='ACTUALIZAR'>
</form>
</center>

<?php

include 'pie.php';
?>



