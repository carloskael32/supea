<?php
 $qlog = $_REQUEST['qlogin'];
 $qcla = $_REQUEST['qclave'];
 $qusr = $_REQUEST['qusr'];
 $qniv = $_REQUEST['qniv'];
 $con=mysqli_connect("localhost","root");
 mysqli_select_db($con,"supea");
 $sql="update usuarios set usuario='$qusr', nivel=$qniv where login = '$qlog'";
 mysqli_query($con,$sql);
 header("location: proceso3.php");
?>

