
<form name="form" action="generalnotificationprocess.php" name="form" id="form" method="post">
<?php
$a=$_POST['s'];
$q=$_POST['d'];
$w=$_POST['f'];
$e=$_POST['g'];
	

	include("../connection.php");
		
	$obj=new connection();

?>
<table width="400" height="80" border="1">
<tr><th>Course Id</th>
<th>Course Name</th>
<th>Select Course</th>

</tr>
<tr>
<?php

$q="select * from addcourse";
$res=$ob->execute($q);
while($r=mysqli_fetch_array($res))
{
?>
<td><?php echo $r['course_id'];?></td>
<td><?php echo $r['course_name'];?></td>

<td><input type="checkbox" name="check" value="<?php echo $r['course_id'];?>">select</td></tr>
<?php
}
	
?>


</table>
</form>