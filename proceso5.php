<?php
include 'cabecera.php';
?>
<!--  DESDE AQUI VA TU CODIGO -->              
<h5>PRODUCTOS</h5>
<hr size=1>           
<br><center>
<h1>ABM de Productos</h1>
<?php
  $con=mysqli_connect("localhost","root");
  mysqli_select_db($con,"supea");
  $res=mysqli_query($con,"select * from productos");

  //print_r($res);
  echo "<table border=1>";
  echo "<tr><th>CodProducto</th><th>Producto</th><th>Precio</th><th>Linea</th></tr>";
  while (($reg=mysqli_fetch_row($res))!=null){
     echo "<tr><td>";
  	 echo $reg[0] . "</td><td>";
     echo $reg[1] . "</td><td>";
     echo $reg[2] . "</td><td>";
     echo $reg[3] .  "</td><td>";
     echo "<a href='pedita.php?qcodprod=$reg[0]'><img src='editar.jpg'></a></td><td>";
     echo "<a href='pelimina.php?qcodprod=$reg[0]'><img src='eliminar.jpg'></a></td></tr>"; 
  }
  echo "</table>";
?>
<!-- HASTA AQUI VA TU CODIGO ---->
<?php
include 'pie.php';
?>