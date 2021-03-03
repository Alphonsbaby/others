
<?php
$iy=$_GET['id'];

include("../connection.php");



$ob=new connection();
$q="delete from addbusdetails where route_id=$iy";
$res=$ob->execute($q);

header("location:viewbusdetails.php");
?>