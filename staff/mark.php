<html>
<body bgcolor="#FFCCFF">
<center>
<h1>Add Mark</h1>
<form action="addmarklistprocess.php" name="form" method="post">
<?php
 echo $iy=$_GET['id'];
include("../connection.php");
	$obj=new connection();
	
?>
<table  align="center">
  <tr>
  <td>subject</td><input type="hidden" value="<?php echo $iy;?>" name="iy">
    <td>
  <select name="sub" id="sub" >
<option value="0">------------select----------</option>
  <?php

$q="select course,startsem from addstudcoursedetails where stud_id='$iy'";
$res=$obj->execute($q);
while($r=mysqli_fetch_array($res))

{
 $v=$r['course'];
$w=$r['startsem'];

	$i="select sub_id from addsubjecttocourse where course_id='$v' and sem='$w'";
$res1=$obj->execute($i);
while($o=mysqli_fetch_array($res1))
{
$rid=$o['sub_id'];

$a=array();
 //$rid= implode(',', $_POST['dis']);
	

$a=explode(',',$rid);

 $d=sizeof($a);

for($i=0;$i<$d;$i++)
{
 $q3="select sub_name from addsubject where sub_id=$a[$i]";
	$e=$obj->execute($q3);

	while($m3=mysqli_fetch_array($e))
	{
		?>
	<option value="<?php echo $m3['sub_name'];?>"><?php echo $m3['sub_name'];?></option>
    <?php
	}
}
	?>
	</select>
	</td></tr>
    
    
<?php
}
}


?>
<tr>
<td>int</td>
    <td><input type="text" name="int" id="int"/></td></tr>
     
     <tr><td>ext</td><td><input type="text" name="ext" id="ext"/></td></tr>
     <tr><td>status</td>
      <td><input type="text" name="sat" id="sat"/></td>
	
</tr>
<tr><td></td>
      <td><input type="submit" value="ok"/></td></tr>
</table>
 
</form>
</center>
</body>
</html>