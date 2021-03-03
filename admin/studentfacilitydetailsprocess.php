<?php

$a=$_POST['check3'];
include("../connection.php");
$ob=new connection();
if($a=="bus")
{
	$ww=$_POST['check2'];
$n=$_POST['check1'];


 $u=$_POST['check4'];
	echo $from=$_POST['from'];
echo $to=$_POST['to'];
echo $e=$_POST['rate'];

$route=$from."-".$to;
$ql="select max(stud_id) from addpersonal";  
$res1=$ob->execute($ql);
$r1=mysqli_fetch_array($res1);
$id=$r1[0];
$q="insert into addbusdetails(route,rate,stud_id)values('$route','$e','$id')";
$res=$ob->execute($q);
$i="insert into addstudentfacility (stud_id,library,lab,bus,hostel)values('$id','$ww','$n','$a','$u')";
$res=$ob->execute($i);
}
else
{
	$ww=$_POST['check2'];
$n=$_POST['check1'];


 $u=$_POST['check4'];
$q2="select max(stud_id) from addpersonal";  
$res1=$ob->execute($q2);
$r2=mysqli_fetch_array($res1);
$id=$r2[0];  
$i="insert into addstudentfacility (stud_id,library,lab,bus,hostel)values('$id','$ww','$n','$a','$u')";
$res=$ob->execute($i);

}
$role="student";
header("location:userpassword.php?id=$id &r=$role");
?>