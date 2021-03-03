<?php
	$a=$_POST['s'];
	if($a!="")
	{
	include("../connection.php");
		
	$obj=new connection();
	
	$q="select years from addcourse where course_id=$a ";
	$e=$obj->execute($q);
	$f=mysqli_fetch_array($e);
	$year=$f['years'];
	?>
	
<select name="semester" id="semester" onChange="subject()">
<option value="0">------------select----------</option>
<?php
$sem=$year*2;

for($i=0;$i<=$sem;$i++)
{

?>
<option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php
}
?>
</select>
</td>
</tr>
<?php
}
?>