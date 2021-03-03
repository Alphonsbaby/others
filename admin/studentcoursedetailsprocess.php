<?php
$ww=$_POST['course'];
$n=$_POST['year'];
$t=$_FILES['f']['name'];
move_uploaded_file($_FILES['f']['tmp_name'],"../upload/".$t);
$a=$_POST['semester'];
$ru=$_POST['cyear'];
$o=$_POST['edu'];
 $p=$_POST['dept'];

include("../connection.php");
$ob=new connection();    
$ql="select max(stud_id) from addpersonal";  
$res1=$ob->execute($ql);
$r=mysqli_fetch_array($res1);
$id=$r[0];  
$i="insert into addstudcoursedetails (stud_id,course,startyear,startsem,qualification,docupload,currentyear,dept_id)values('$id','$ww','$n','$a','$o','$t','$ru','$p')";  
$res=$ob->execute($i);
header("location:studentfacilitydetails.php");

?>
