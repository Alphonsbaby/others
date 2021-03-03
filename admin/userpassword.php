<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
 
include("../connection.php");
	$obj=new connection();
	include("layout.php");
?>
<body>
<?php
$iy=$_GET['id'];
$w=$_GET['r'];
?>
<center>
<div id="page-wrapper">
			<div class="main-page">
<form name="form" action="userpasswordprocess.php" name="form" id="form" method="post" onsubmit="return valid()" >
<h1>User Account</h1>

						


<?php

if ($w=="student")
{
	$iy=$_GET['id'];
$q="select * from addpersonal where stud_id=$iy";
$res=$obj->execute($q);
while($r=mysqli_fetch_array($res))
{
	?>
    	<div class="form-body">
								<form class="form-horizontal"> <div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Email Id</label> <div class="col-sm-9"> <input type="email" class="form-control" name="email" id="email" value="<?php echo $r['email'];?>" id="inputEmail3" placeholder="Email"> </div> </div> 
	
    <input type="hidden" name="role" value="<?php echo $w;?>"/>
<input type="hidden" name="id" value="<?php echo $iy;?>"/>
<input type="hidden" name="c" value="<?php echo $r['contact'];?>"/>

	<?php
    }
}
else
{
	$q="select * from addstaff where staff_id=$iy";
$res=$obj->execute($q);
while($r=mysqli_fetch_array($res))
{
	?>
    <div class="form-body">
								<form class="form-horizontal"> <div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Email Id</label> <div class="col-sm-9"> <input type="email" class="form-control" name="email" id="email" value="<?php echo $r['email'];?>" id="inputEmail3" placeholder="Email"> </div> </div> 
                                
<input type="hidden" name="role" value="<?php echo $w;?>"/>
<input type="hidden" name="id" value="<?php echo $iy;?>"/>
<input type="hidden" name="c" value="<?php echo $r['contact'];?>"/>

<?php
}
}
?>


<!--<tr>
<td>Password</td>
<td><input type="text" name="password" id="password" /></td>
<td></td>
</tr>--></br></br>
<div class="col-sm-offset-2">
 <button type="submit" class="btn btn-default">Send Password</button> </div> </form> 
							</div>
						</div>
					</div>
</center>
</form>
</body>
</div>
</div>
</html>
