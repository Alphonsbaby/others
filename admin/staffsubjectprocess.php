<?php
$c=$_POST['course'];
$s=$_POST['semester'];
$ch=$_POST['subject'];
$st=$_POST['check'];
include("../connection.php");
$ob=new connection();
$q="insert into staffcourse(staff_id,sub_id,course_id,sem)values('$st','$ch','$c','$s')";
$res=$ob->execute($q);
echo "<script>
window.onload=function()
{
	alert('succesfully');
	window.location='staffsubject.php';
}
</script>";

?>

