<?php
include("layout.php");
?>
<div id="page-wrapper">
			<div class="main-page">
<div class="tables">
					<h2 class="title1">COURSE</h2>
					<div class="panel-body widget-shadow">
						<h4>View Bus Notification</h4>
						<table class="table">
							<thead>
								<tr>
								  <th>id</th>
								  <th>Title</th>
								  <th>message</th>
								  <th>Date</th>
                                 
								</tr>
							</thead>
							<tbody>
								<tr>
								  
<?php
include("../connection.php");
$ob=new connection();

$q="select * from busfeenotification";
$res=$ob->execute($q);
while($r=mysqli_fetch_array($res))
{


	
?>
                                  <td><?php echo $r[0];?></td>
								  <td><?php echo $r[1];?></td>
								  <td><?php echo $r[2];?></td>
								  <td><?php echo $r[5];?></td>
                                  
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
