
<?php

 $id=$_POST['n'];
 $name=$_POST['name'];
 

include("../connection.php");
$ob=new connection();
$q="update addsubject set sub_name='$name' where sub_id=$id";
$res=$ob->execute($q);
header("location:viewsubject.php");
?>
