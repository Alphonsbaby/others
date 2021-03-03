<?php
$name=$_POST['Name'];
$p=$_FILES['f']['name'];
move_uploaded_file($_FILES['f']['tmb_name'],"../upload/".$p);
$a=$_POST['address'];
$r=$_POST['radio'];
$c=$_POST['contact'];
$d=$_POST['dob'];
$e=$_POST['email'];
$j=$_POST['job'];
$de=$_POST['desi'];
$dep=$_POST['department'];
$q=$_POST['quali'];
$cou=$_POST['course'];
$x=$_POST['dept'];
$res=$_FILES['f1']['name'];
move_uploaded_file($_FILES['f1']['tmb_name'],"../upload/".$res);
include("../connection.php");
$ob=new connection();  
$q="insert into addstaff(name,address,dob,contact,gender,email,job_cat,course_id,designation,resume,qualification,photo,dept_id)values('$name','$a','$d','$c','$r','$e','$j','$cou','$de','$res','$q','$p','$x')";  
$res=$ob->execute($q);

$role="staff";
header("location:userpassword.php?id=$id &r=$role");
/*echo "<script>
window.onload=function()
{
	alert('succesfully');
	window.location='addstaff.php';
}
</script>"*/

?>
