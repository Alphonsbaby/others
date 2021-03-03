<?php
$n=$_POST['image'];
$t=$_FILES['f']['name'];
move_uploaded_file($_FILES['f']['tmb_name'],"../upload/".$t);
include("../connection.php");
$ob=new connection();  
$i="insert into addform (img_name,image)values('$n','$t')";
$res=$ob->execute($i);
header("location:addform.php");

?>