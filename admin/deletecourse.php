<?php
$iy=$_GET['id'];

include("../connection.php");



$ob=new connection();
$q="delete from addcourse where course_id=$iy";
$res=$ob->execute($q);

header("location:viewcourse.php");
?>
