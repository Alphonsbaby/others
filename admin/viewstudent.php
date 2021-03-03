<form action="updatestaff.php" method="post">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
include("../connection.php");
$ob=new connection();
include("layout.php");
?>
<body>
<center>

<div id="page-wrapper">
			<div class="main-page">
<div class="tables">
					<h2 class="title1">STUDENT</h2>
					<div class="panel-body widget-shadow">
						<h4>View Student</h4>
						<table class="table">
							<thead>
								<tr>
								  <th>id</th>
								  <th>Name</th>
								  <th>Gender</th>
								  <th>Address</th>
                                  <th>Guardian</th>
								  <th>Course</th>
								  <th>Start Sem</th>
								  <th>Start Year</th>
                                  <th>Department name</th>
                                 
								</tr>
							</thead>
							<tbody>

<tr>
<?php
$q="select * from addpersonal ";
$res=$ob->execute($q);
while($r=mysqli_fetch_array($res))
{
$c=$r['stud_id'];
//$x=$r['course_id'];
$i="select *from addstudcoursedetails where stud_id=$c";
$res1=$ob->execute($i);
 $f=mysqli_fetch_array($res1);
$d=$f['dept_id'];
$x=$f['course'];

 $h="select dept_name from adddepartment where dept_id=$d";
$res2=$ob->execute($h);
$g=mysqli_fetch_array($res2);
$w=$g['dept_name'];
 $h1="select course_name from addcourse where course_id=$x";
$res3=$ob->execute($h1);
$u=mysqli_fetch_array($res3);
$n=$u['course_name'];
	
?>
<!--<div id="page-wrapper">
			<div class="main-page">-->
<td><?php echo $r[0];?></td>
<td><?php echo $r[1];?></td>
<td><?php echo $r[2];?></td>
<td><?php echo $r[4];?></td>
<td><?php echo $r[9];?></td>
<td><?php echo $n[0];?></td>
<td><?php echo $f[4];?></td>
<td><?php echo $f[3];?></td>
<td><?php echo $w[0];?></td>

</tr>
<?php

}

?>
</tbody>
						</table>
					</div>
				

</body>
</div>
</div>
</center>
</html>