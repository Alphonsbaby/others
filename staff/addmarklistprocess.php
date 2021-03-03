<?php
$c=$_POST['iy'];
$s=$_POST['sub'];
$f=$_POST['int'];
$t=$_POST['ext'];
$o=$_POST['sat'];

include("../connection.php");
$ob=new connection();  
$q="insert into addstudentmarklist(stud_id,sub_id,inmark,exmark,status)values('$c','$s','$f','$t','$o')";
$res=$ob->execute($q);
echo "<script>
window.onload=function()
{
	alert('succesfully');
	window.location='addmarklist.php';
}
</script>"

?>