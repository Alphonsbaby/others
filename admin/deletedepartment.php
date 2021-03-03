
<?php
$iy=$_GET['id'];

include("../connection.php");



$ob=new connection();
$q="delete from adddepartment where dept_id=$iy";
$res=$ob->execute($q);

header("location:viewdepartment.php");
?>
