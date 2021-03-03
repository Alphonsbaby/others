<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("layout.php");
?>
<div id="page-wrapper">
			<div class="main-page">
<div class="tables">
					<h2 class="title1">COURSE</h2>
					<div class="panel-body widget-shadow">
						<h4>View Course</h4>
						<table class="table">
							<thead>
								<tr>
								  <th>id</th>
								  <th>Course name</th>
								  <th>Department Name</th>
								  <th>Years</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								  
<?php
include("../connection.php");
$ob=new connection();

$q="select * from addcourse";
$res=$ob->execute($q);
while($r=mysqli_fetch_array($res))
{
$c=$r['dept_id'];
 $h="select dept_name from adddepartment where dept_id=$c";
$res2=$ob->execute($h);
$g=mysqli_fetch_array($res2);

	
?>
                                  <td><?php echo $r[0];?></td>
								  <td><?php echo $r[2];?></td>
								  <td><?php echo $g[0];?></td>
								  <td><?php echo $r[3];?></td>
                                  <td><a href="editcourse.php?id=<?php echo $r[0];?>" > edit</a> </td>
                                  
                                  <td><a href="deletecourse.php?id=<?php echo $r[0];?>" > delete</a> </td>
								</tr>
								<?php
}
								?>
							</tbody>
						</table>
					</div>
				


</table>

</body>
</div>
</div>
</center>

</html>