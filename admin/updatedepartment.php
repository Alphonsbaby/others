<?php

 $id=$_POST['n'];
 $name=$_POST['name'];


include("../connection.php");
$ob=new connection();
$q="update adddepartment set dept_name='$name'where dept_id=$id";
$res=$ob->execute($q);
header("location:viewdepartment.php");
?>