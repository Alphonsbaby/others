<?php
$c=$_POST['course'];
$s=$_POST['semester'];
$ch= implode(',', $_POST['check']);
include("../connection.php");
$ob=new connection();
$q="insert into addsubjecttocourse(course_id,sub_id,sem)values('$c','$ch','$s')";
$res=$ob->execute($q);
echo "<script>
window.onload=function()
{
	alert('succesfully');
	window.location='addsubjecttocourse.php';
}
</script>"

?>
