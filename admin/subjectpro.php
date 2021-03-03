


	<select name="subject" id="subject" onchange="staff()">
<option value="0">--select--</option>
<?php
	include("../connection.php");
	$obj=new connection();
	 $aold=$_POST['sw'];
	 $b=$_POST['fe1'];
		
	$q="select sub_id from addsubjecttocourse where course_id='$b' and sem='$aold'";
	$e=$obj->execute($q);
	while($f=mysqli_fetch_array($e))
	{
		echo $rid=$f['sub_id'];
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
	?>
	

<?php 
	}
	}
?>
</select>
	
	



