<?php
$c=$_POST['course'];
$s=$_POST['sem'];
$iy=$_POST['name'];
$t=$_POST['link'];


include("../connection.php");
$ob=new connection();

$q="insert into addreference(subject,ref_link,course,sem)values('$iy','$t','$c','$s')";
$res=$ob->execute($q);
echo "<script>
window.onload=function()
{
	alert('succesfully');
	window.location='reference.php';
}
</script>"

?>