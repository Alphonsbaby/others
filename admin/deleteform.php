<?php
$iy=$_GET['id'];

include("../connection.php");



$ob=new connection();
$q="delete from addform where img_id=$iy";
$res=$ob->execute($q);

header("location:viewform.php");
?>
