<?php
$t=$_POST['title'];
$m=$_POST['msg'];
$date=$_POST['date'];

$cdate=$_POST['cdate'];
include("../connection.php");
$obj=new connection();
$q3="select stud_id from addstudentfacility where bus='bus'";
	$e=$obj->execute($q3);

	while($m3=mysqli_fetch_array($e))
	{

$sid= $m3[0];

$b=array();
  //$sid= implode(',', $m3[0]);
	

$b1=explode(',',$sid);

 $d1=sizeof($b1);

for($j=0;$j<$d1;$j++)
{
$q="insert into busfeenotification (title,msg,last_date,stud_id,date)values('$t','$m','$date','$b1[$j]','$cdate')";
$res=$obj->execute($q);
}
	}
//header("location:busfeenotification.php");
?>