<?php
 $codprod = $_REQUEST['qcodprod'];
 $descripcion = $_REQUEST['qdescripcion'];
 $precio = $_REQUEST['qprecio'];
 $linea = $_REQUEST['qlinea'];
 $con=mysqli_connect("localhost","root");
 mysqli_select_db($con,"supea");
 $sql="update productos set descripcion='$descripcion', precio=$precio, linea='$linea' where codprod = '$codprod'";
 mysqli_query($con,$sql);
 header("location: proceso5.php");
?>

