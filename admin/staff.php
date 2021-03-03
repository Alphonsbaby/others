<html>
<body>
<center>
<form name="form"  method="post">
  <?php 
   
	 $a=$_POST['s'];
	  //course
	 ?>
   
<table border="1" align="center"><tr>
    
    <th width="36">name</th>
    <th width="54">Address</th>
        <th width="50">Gender</th>
    <th width="62">Guardian</th>
    <th width="52">Contact</th>
    <th width="52">Select</th>
    </tr>
<?php
	include("../connection.php");
	$obj=new connection();
	

	
		$e="select * from addstaff where course_id=$a ";
		$res2=$obj->execute($e);
		
		while($x=mysqli_fetch_array($res2))
		{
	
	?>

    
  <tr>
    

    
    <td><?php echo $x[1];?></td>
    
 
  
     <td><?php echo $x[2];?> </td>
    
    <td><?php echo $x[3];?></td>
    
 
<td><?php echo $x[4];?></td>

<td><?php echo $x[5];?></td>
<td><input type="checkbox" name="check" value="<?php echo $x[0];?>"/> </td></tr>

    
	
	<?php
		}
	
	?>
</table>
</body>
</form>
</center>
</html>