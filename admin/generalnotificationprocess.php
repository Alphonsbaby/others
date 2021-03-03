<?php
$t=$_POST['title'];
$m=$_POST['msg'];
$g=$_POST['radio'];
$date=$_POST['date'];

include("../connection.php");
$obj=new connection();
//$_POST['check'];
if($g=="staff")
{
	
$a=array();
  $rid= implode(',', $_POST['check']);
	

$a=explode(',',$rid);

 $d=sizeof($a);

for($i=0;$i<$d;$i++)
{
 $q3="select staff_id from addstaff where dept_id=$a[$i]";
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

$q="insert into generalnotification(date,title,msg,role,dept_id,stid)values('$date','$t','$m','$g',$a[$i],$b1[$j])";
$res=$obj->execute($q);

echo "<script>
window.onload=function()
{
	alert('succesfully');
	window.location='generalnotification.php';
}
</script>";

}
}


	
	}


}
if($g=="student")
{
		
$a=array();
  $rid= implode(',', $_POST['check']);
	

$a=explode(',',$rid);

 $d=sizeof($a);

for($i=0;$i<$d;$i++)
{
 $q3="select stud_id from addstudcoursedetails where dept_id=$a[$i]";
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

$q="insert into generalnotification(date,title,msg,role,dept_id,stid)values('$date','$t','$m','$g',$a[$i],$b1[$j])";
$res=$obj->execute($q);

echo "<script>
window.onload=function()
{
	alert('succesfully');
	window.location='generalnotification.php';
}
</script>";

}
}


	
	}

}
?>