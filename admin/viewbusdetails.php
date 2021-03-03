<?php
include("layout.php");
?>
<div id="page-wrapper">
			<div class="main-page">
<div class="tables">
					<h2 class="title1">BUS DETAILS</h2>
					<div class="panel-body widget-shadow">
						<h4>View Bus Details</h4>
						<table class="table">
						  <thead>
								<tr>
								  <th>Id</th>
								  <th>Route</th>
								  <th>Rate</th>
								  <th>Student Name</th>
                                   <th>Course</th>
								  <th>Semester</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								  
<?php
include("../connection.php");
$ob=new connection();

$q="select * from addbusdetails";
$res=$ob->execute($q);
while($r=mysqli_fetch_array($res))
{
$c=$r['stud_id'];
 $h="select name from addpersonal where stud_id=$c";
$res2=$ob->execute($h);
$g=mysqli_fetch_array($res2);

 $h1="select * from addstudcoursedetails where stud_id=$c";
$res3=$ob->execute($h1);
$f=mysqli_fetch_array($res3);
	$k=$f['course'];
	$h2="select course_name from addcourse where course_id=$k";
$res4=$ob->execute($h2);
$f1=mysqli_fetch_array($res4);
?>
                                  <td><?php echo $r[2];?></td>
                                  								  <td><?php echo $r[0];?></td>
								  <td><?php echo $r[1];?></td>
								  <td><?php echo $g[0];?></td>
                                  <td><?php echo $f1[0];?></td>
								  <td><?php echo $f[4];?></td>
                                  <td><a href="editbusdetails.php?id=<?php echo $r[2];?>" > edit</a> </td>
                                  
                                  <td><a href="deletebusdetails.php?id=<?php echo $r[2];?>" > delete</a> </td>
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