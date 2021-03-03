
<?php
include("layout.php");
?>
<div id="page-wrapper">
			<div class="main-page">
<div class="tables">
					<h2 class="title1">SUBJECT</h2>
					<div class="panel-body widget-shadow">
						<h4>View  Course Subject</h4>
						<table class="table">
							<thead>
								<tr>
								  <th>Course Id</th>
								  <th>Subject name
								  </th>
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

$q="select * from addsubjecttocourse";
$res=$ob->execute($q);
while($r=mysqli_fetch_array($res))
{

	$cid=$r[0];
	echo $sid=$r['sub_id'];
	
	
	
	
	
	$q1="select * from addcourse where course_id=$cid";
$res1=$ob->execute($q1);
$rc=mysqli_fetch_array($res1);




	
$myArray = explode(',', $sid);}
$d=sizeof($myArray);
for($i=0;$i<$d;$i++)
{
 

$q2="select * from addsubject where sub_id=$myArray[$i]";
$res2=$ob->execute($q2);
$sub=mysqli_fetch_array($res2);











	
?>
                                  <td><?php echo $rc['course_name'];?></td>
							
								    <td><?php echo $sub['sub_name'];?></td>
										  <td><?php echo $r[2];?></td>
                                  <td><a href="editsubject.php?id=<?php echo $r[0];?>" > edit</a> </td>
                                  
                                  <td><a href="deletesubject.php?id=<?php echo $r[0];?>" > delete</a> </td>
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
