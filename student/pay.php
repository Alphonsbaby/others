<html>
<form >
<?php
 $a=$_POST['s'];
//echo "ok";
	
	include("../connection.php");
		
	$obj=new connection();
$q="select *from addpersonal where stud_id=$a ";
	$e=$obj->execute($q);
	$r=mysqli_fetch_array($e);
	
		$q1="select *from addstudcoursedetails where stud_id=$a ";
	$e1=$obj->execute($q1);
$r1=mysqli_fetch_array($e1);
	
	$c=$r1['course'];
	$sem=$r1['startsem'];
	
		
?>
<table width="700" height="300" border="0"> 	
<tr><td>Name</td>
<td><input type="text" name="Name" value="<?php echo $r['name'];?>" />&nbsp;&nbsp;</td>

<td>Address</td>
<td><input type="text" name="address" value="<?php echo $r['address'];?>" /></td></tr>

<tr><td>Course</td>
<td><input type="text" name="course" value="<?php echo $r1['course'];?>" /></td>
<td>Department</td>
<td><input type="text" name="dept" value="<?php echo $r1['dept_id'];?>" /></td></tr>
<tr><td>Email</td>
<td><input type="email" name="email"  value="<?php echo $r['email'];?>"/></td>
<td>Guardian</td>
<td><input type="text" name="gua" value="<?php echo $r['gurdian'];?>" /></td></tr>
<tr>
<?php
$p="select fee from setsemfee where course_id=$c and sem=$sem";
$p1=$obj->execute($p);
$r2=mysqli_fetch_array($p1);

?>
<td>Sem Fee</td>
<td><input type="text" name="semfee" value="<?php echo $r2['fee'];?>"/><input type="checkbox" name="sem" value="semfee"/></td>
</tr>

<tr>
<?php
$p2="select rate from addbusdetails where stud_id=$a";
$p3=$obj->execute($p2);
$r3=mysqli_fetch_array($p3);

?>
<td>Bus Fee</td>
<td><input type="text" name="busfee" value="<?php echo $r3['rate'];?>" /><input type="checkbox" name="bus" value="busfee"  /></td>
</tr>
<tr>

<?php
$p4="select additionalpay from feenotification where course_id=$c";
$p5=$obj->execute($p4);
$r4=mysqli_fetch_array($p5);

?>
<td>Additional Fee</td>
<td><input type="text" name="afee" value="<?php echo $r4[0];?>"  /><input type="checkbox" name="add" value="afee" /></td>
</tr>
</table>