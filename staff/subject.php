<html>
<body bgcolor="#FFCCFF">
<center>

<h1>Add reference</h1>
<form name="form" method="post">
<?php
 $cou=$_POST['s'];
	  $seme=$_POST['fe'];
include("../connection.php");
	$obj=new connection();
	
?>
<table width="500" height="160" border="1">
  <tr>
    
    <th>Subject Name</th>
    <th>reference link</th>
  </tr>
  
  <?php
  $i="select sub_id from addsubjecttocourse where course_id='$cou' and sem='$seme'";
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
       <tr> 
        <td height="59"><?php echo $m3['sub_name'];?></td>
	
   
	
   <td><a href="ref.php?id=<?php echo $m3['sub_name'];?> &c=<?php echo $cou;?> &s=<?php echo $seme;?>">Add Link</a></td>
  </tr> 
    
<?php
	}
}
}
?>
    
    
  

</table>

</form>
</center>
</body>
</html>