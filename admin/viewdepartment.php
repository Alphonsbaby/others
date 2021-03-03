<?php
include("layout.php");
?>
<div id="page-wrapper">
			<div class="main-page">
<div class="tables">
					<h2 class="title1">DEPARTMENT</h2>
					<div class="panel-body widget-shadow">
						<h4>View Department</h4>
						<table class="table">
							<thead>
								<tr>
								  <th>id</th>
						
								  <th>Department Name</th>
						
                                  <th>Edit</th>
                                  <th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								  
<?php
include("../connection.php");
$ob=new connection();

$q="select * from adddepartment";
$res=$ob->execute($q);
while($r=mysqli_fetch_array($res))
{


	
?>
                                  <td><?php echo $r[0];?></td>
								  <td><?php echo $r[1];?></td>
								 
                                  <td><a href="editdepartment.php?id=<?php echo $r[0];?>" > edit</a> </td>
                                  
                                  <td><a href="deletedepartment.php?id=<?php echo $r[0];?>" > delete</a> </td>
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