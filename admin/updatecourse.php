<?php

 $id=$_POST['n'];
 $name=$_POST['name'];
 $dept=$_POST['d'];
$yer=$_POST['y'];

include("../connection.php");
$ob=new connection();
$q="update addcourse set dept_id='$dept',course_name='$name',years=$yer where course_id=$id";
$res=$ob->execute($q);
header("location:viewcourse.php");
?>
