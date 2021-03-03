<?php

 $id=$_POST['n'];
 $name=$_POST['name'];
 $dept=$_POST['d'];


include("../connection.php");
$ob=new connection();
$q="update addbusdetails set route='$name',rate='$dept' where route_id=$id";
$res=$ob->execute($q);
header("location:viewbusdetails.php");
?>
