<html>
<body>
<center>
  <?php 
   
	 $a=$_POST['s'];
	  $b=$_POST['fe'];
	 ?>
   
<table border="1" align="center"><tr>
    <th width="55" height="35">Adm.No</th>
    <th width="36">name</th>
    <th width="54">Address</th>
        <th width="50">Gender</th>
    <th width="62">Guardian</th>
    <th width="52">Contact</th>
    <th width="103">Add Mark</th>
    </tr>
<?php
	include("../connection.php");
	$obj=new connection();
	

	$i="select stud_id from addstudcoursedetails where course='$b' and startsem='$a'";
	$res1=$obj->execute($i);
	while($w=mysqli_fetch_array($res1))
	{
		$t=$w[0];
	
		$e="select * from addpersonal where stud_id=$t ";
		$res2=$obj->execute($e);
		
		while($x=mysqli_fetch_array($res2))
		{
	
	?>

    
  <tr>
    <td height="41"><?php echo $x[0];?> </td>

    
    <td><?php echo $x[1];?></td>
    
 
  
     <td><?php echo $x[2];?> </td>
    
    <td><?php echo $x[3];?></td>
    
 
<td><?php echo $x[4];?></td>

<td><?php echo $x[5];?></td>
<td><a href="mark.php?id=<?php echo $x[0];?>">Add Mark</a></td>

    <td><a href="viewmark.php?id=<?php echo $x[0];?> "> view Mark</a></td></tr>
	
	<?php
		}
	}
	?>
</table>
</body>
</center>
</html>