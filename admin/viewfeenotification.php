
<?php
include("layout.php");
?>
<div id="page-wrapper">
			<div class="main-page">
<div class="tables">
					<h2 class="title1">Notification</h2>
					<div class="panel-body widget-shadow">
						<h4>View Fee Notification</h4>
						<table class="table">
							<thead>
								<tr>
								  <th>id</th>
								  <th>Title</th>
								  <th>message</th>
								  <th>Date</th>
                                  <th>Course name</th>
                                 <th>Semester</th>
                                  <th>Fee
                                  </th>
                                  <th>Addtional pay</th>
                                 
								</tr>
							</thead>
							<tbody>
								<tr>
								  
<?php
include("../connection.php");
$ob=new connection();

$q="select * from feenotification";
$res=$ob->execute($q);
while($r=mysqli_fetch_array($res))
{

$v=$r['course_id'];
$q1="select course_name from addcourse where course_id=$v";
$res2=$ob->execute($q1);

$g=mysqli_fetch_array($res2);
	
?>
                                  <td><?php echo $r[0];?></td>
								  <td><?php echo $r[2];?></td>
								  <td><?php echo $r[3];?></td>
								  <td><?php echo $r[1];?></td>
                                  
								  <td><?php echo $g[0];?></td>
                                  <td><?php echo $r[5];?></td>
                                  <td><?php echo $r[6];?></td>
                                  <td><?php echo $r[7];?></td>
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
