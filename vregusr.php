<?php
$qfec = $_REQUEST["qfec"];
$qcod = $_REQUEST["qcod"];
$qcan = $_REQUEST["qcan"];
$qusr = $_REQUEST["qusr"];
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"supea");
mysqli_query($con,"insert into ventas (fecha,login,codprod,cantidad) values 
	('$qfec','$qusr','$qcod',$qcan)");
header("location: proceso8.php");
?>