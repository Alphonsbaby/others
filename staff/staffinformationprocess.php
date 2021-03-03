<?php
$e=$_POST['title'];
$n=$_POST['msg'];
$t=$_FILES['f']['name'];
move_uploaded_file($_FILES['f']['tmb_name'],"../upload/".$t);
$co=$_POST['course'];
$s=$_POST['semester'];
$c=$_POST['cdate'];

include("../connection.php");
$ob=new connection();

$i="insert into staffinformation(title,msg,date,course_id,sem,file)values('$e','$n','$c','$co','$s','$t')";
$res=$ob->execute($i);
header("location:staffinformation.php");

?>