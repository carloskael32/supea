<?php
include 'cabecera.php';
?>
<!--  DESDE AQUI VA TU CODIGO -->              
<h5>PRODUCTOS</h5>
<hr size=1>           
<br><center>
<h1>ABM de Usuarios</h1>
<?php
  $con=mysqli_connect("localhost","root");
  mysqli_select_db($con,"supea");
  $res=mysqli_query($con,"select * from ventas");

  //print_r($res);
  echo "<table border=1>";
  echo "<tr><th>ID</th><th>Fecha</th><th>Usuario</th><th>Producto</th><th>Cantidad</th></tr>";
  while (($reg=mysqli_fetch_row($res))!=null){
     echo "<tr><td>";
  	 echo $reg[0] . "</td><td>";
     echo $reg[1] . "</td><td>";
     echo $reg[2] . "</td><td>";
     echo $reg[3] . "</td><td>";
     echo $reg[4] .  "</td>";
     echo "</td></tr>";
  }
  echo "</table>";
?>
<!-- HASTA AQUI VA TU CODIGO ---->
<?php
include 'pie.php';
?>