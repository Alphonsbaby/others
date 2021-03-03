
<?php
$c=$_POST['coursename'];
$s=$_POST['semester'];
$f=$_POST['fee'];
include("../connection.php");
$ob=new connection();
$q="insert into setsemfee(course_id,sem,fee)values('$c','$s','$f')";
$res=$ob->execute($q);
echo "<script>
window.onload=function()
{
	alert('succesfully');
	window.location='setsemfee.php';
}
</script>"

?>