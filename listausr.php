<?php
include 'cabecera.php';
?>
<!--  DESDE AQUI VA TU CODIGO -->              
<h5>USUARIOS</h5>
<hr size=1>           
<br><center>
<h1>Listado de Usuarios</h1>
<?php
  $con=mysqli_connect("localhost","root");
  mysqli_select_db($con,"supea");
  $res=mysqli_query($con,"select * from usuarios");

  //print_r($res);
  while (($reg=mysqli_fetch_row($res))!=null){
  	 echo $reg[0] . " " . $reg[1] . " " . $reg[2] . "<br>"; 
  }
?>
<!-- HASTA AQUI VA TU CODIGO ---->
<?php
include 'pie.php';
?>