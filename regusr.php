<?php
$qlog = $_REQUEST["qlog"];
$qcla = $_REQUEST["qcla"];
$qusr = $_REQUEST["qusr"];
$qniv = $_REQUEST["qniv"];
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"supea");
mysqli_query($con,"insert into usuarios values ('$qlog',sha1('$qcla'),'$qusr',$qniv)");
header("location: proceso2.php");
?>