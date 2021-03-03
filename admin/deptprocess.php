<?php
$Name=$_POST['name'];
include("../connection.php");
$ob=new connection();
$q="insert into adddepartment(dept_name)values('$Name')";
$res=$ob->execute($q);
header("location:department.php");
?>

