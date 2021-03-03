							<div class="form-body">
                          
<?php
	include("../connection.php");
	$obj=new connection();
  $a=$_POST['se'];
	  $b=$_POST['fe'];
		
	$q="select fee from setsemfee where course_id='$b' and sem='$a'";
	$e=$obj->execute($q);
	$f=mysqli_fetch_array($e);
	$fee=$f[0];
	?>
    <div class="form-group">  <div class="col-sm-9">
     <input type="text"  name="fee" value="<?php echo $fee;?>" class="form-control" > </div> </div>
	
	

    
	



