<html>
<form >
  <?php
//echo "ok";
	
	include("../connection.php");
		
	$obj=new connection();

?>

					<h2 class="title1">Department</h2>
					
						
						<table class="table">
							<thead>
								<tr>
								<th>Department Id</th>
<th>Department Name</th>
<th>Select Department</th>
								</tr>
							</thead>
							<tbody>
								<tr>
  
      <?php

$q="select * from adddepartment";
$res=$obj->execute($q);
while($r=mysqli_fetch_array($res))
{
?>
      <td><?php echo $r['dept_id'];?></td>
      <td><?php echo $r['dept_name'];?></td>
      <td><input type="checkbox" name="check[]" value="<?php echo $r['dept_id'];?>">
        select</td>
    </tr>
    <?php
}
	
?>
 </tbody>
						</table>
				<br><br><br><br><br><br>
  
</form>

</html>