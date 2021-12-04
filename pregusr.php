<?php
$codprod = $_REQUEST["qcod"];
$descripcion = $_REQUEST["qdesc"];
$precio = $_REQUEST["qprec"];
$linea = $_REQUEST["qlin"];
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"supea");
mysqli_query($con,"insert into productos values ('$codprod','$descripcion','$precio','$linea')");
header("location: proceso4 .php");
?>