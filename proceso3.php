<?php
include 'cabecera.php';
?>
<!--  DESDE AQUI VA TU CODIGO -->              
<h5>USUARIOS</h5>
<hr size=1>           
<br><center>
<h1>ABM de Usuarios</h1>
<?php
  $con=mysqli_connect("localhost","root");
  mysqli_select_db($con,"supea");
  $res=mysqli_query($con,"select * from usuarios");

  //print_r($res);
  echo "<table border=1>";
  echo "<tr><th>Login</th><th>Clave SHA1</th><th>Usuario</th></tr>";
  while (($reg=mysqli_fetch_row($res))!=null){
     echo "<tr><td>";
  	 echo $reg[0] . "</td><td>";
     echo $reg[1] . "</td><td>";
     echo $reg[2] . "</td><td>";
     echo "<a href='edita.php?qlogin=$reg[0]'><img src='editar.jpg'></a></td><td>";
     echo "<a href='elimina.php?qlogin=$reg[0]'><img src='eliminar.jpg'></a></td></tr>"; 
  }
  echo "</table>";
?>
<!-- HASTA AQUI VA TU CODIGO ---->
<?php
include 'pie.php';
?>