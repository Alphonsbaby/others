<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<center>
<table border="1">
<tr><td>Id</td><td>Name</td><td>Gender</td><td>Job category</td><td>course</td><td>Department name</td></tr>
<tr>
<?php

include("../connection.php");
$ob=new connection();

$q="select * from addstaff ";
$res=$ob->execute($q);
while($r=mysqli_fetch_array($res))
{
$c=$r['dept_id'];
$x=$r['course_id'];
$i="select course_name from addcourse where course_id=$x";
$res1=$ob->execute($i);
 $f=mysqli_fetch_array($res1);
$d=$f['course_name'];
 $h="select dept_name from adddepartment where dept_id=$c";
$res2=$ob->execute($h);
$g=mysqli_fetch_array($res2);

	
?>
<div id="page-wrapper">
			<div class="main-page">
<td><?php echo $r[0];?></td>
<td><?php echo $r[1];?></td>
<td><?php echo $r[5];?></td>
<td><?php echo $r[7];?></td>
<td><?php echo $d;?></td>
<td><?php echo $g[0];?></td>

</tr>
<?php

}

?>
</table>

</body>
</div>
</div>
</center>
</html>