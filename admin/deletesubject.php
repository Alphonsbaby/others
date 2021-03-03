
<?php
$iy=$_GET['id'];

include("../connection.php");



$ob=new connection();
$q="delete from addsubject where sub_id=$iy";
$res=$ob->execute($q);

header("location:viewsubject.php");
?>