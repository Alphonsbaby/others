<?php
$name=$_POST['subname'];
include("../connection.php");
$ob=new connection();
$q="insert into addsubject(sub_name)values('$name')";
$res=$ob->execute($q);
header("location:subject.php");
?>