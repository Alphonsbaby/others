<?php
$r1=$_POST['from'];
$r2=$_POST['to'];
$r=$_POST['rate'];

include("../connection.php");
$ob=new connection();
echo $route=$r1."-".$r2;
/*$ql="select max(stud_id) from addpersonal";  
$res1=$ob->execute($ql);
$r=mysqli_fetch_array($res1);
$id=$r[0];
$q="insert into addbusdetails(route,rate,stud_id)values('$route','$r','$id')";
$res=$ob->execute($q);
header("location:studentfacilitydetails.php");
/*echo "<script>
window.onload.=function()
{
	alert('succesfully');
	window.location='addbusdetails.php';
}
</script>"*/
?>