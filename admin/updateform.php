<?php

 $id=$_POST['n'];
 $name=$_POST['name'];
 
$t=$_FILES['d']['name'];
move_uploaded_file($_FILES['d']['tmb_name'],"../upload/".$t);

include("../connection.php");
$ob=new connection();
$q="update addform set img_name='$name',image='$t' where img_id=$id";
$res=$ob->execute($q);
header("location:viewform.php");
?>
