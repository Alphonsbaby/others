<?php
$dept=$_POST['department'];
$name=$_POST['coursename'];
$year=$_POST['noofyear'];
include("../connection.php");
$ob=new connection();  echo
$q="insert into addcourse(dept_id,course_name,years)values('$dept','$name','$year')";
$res=$ob->execute($q);
header("location:course.php");
?>