

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
$iy=$_GET['id'];
//$iy=$_GET['id'];
include("../connection.php");
$ob=new connection();
include("layout.php");
$q="select * from addcourse where course_id=$iy";
$res=$ob->execute($q);
$r=mysqli_fetch_array($res);
$k=$r['dept_id'];
$t="select dept_name from adddepartment where dept_id=$k";
$res1=$ob->execute($t);
$r1=mysqli_fetch_array($res1);
?>
<div id="page-wrapper">
			<div class="main-page">
            <div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">
							<h1>Edit Course</h1>
							</div>
							<div class="form-body">
								<form class="form-horizontal" action="updatecourse.php" method="post"><input type="hidden" name="n" value="<?php echo $iy?>" />
 <div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">Course name</label> 
  <div class="col-sm-9"> <input type="text" class="form-control"  name="name" id="inputEmail3" value="<?php echo $r[2];?>" >
   </div>
   </div> 
   <div class="form-group"> <label for="inputPassword3" class="col-sm-2 control-label">Department Id</label>
    <div class="col-sm-9"> <input type="text" name="d" class="form-control" id="inputPassword3" value="<?php echo $r[1];?>" > </div> 
    </div>
    
     <div class="form-group"> <label for="inputPassword3" class="col-sm-2 control-label">Department Name</label>
    <div class="col-sm-9"> <input type="text" name="c" class="form-control" id="inputPassword3" value="<?php echo $r1[0];?>"  disabled="disabled" > </div> 
    </div>
    
    <div class="form-group"> <label for="inputPassword3" class="col-sm-2 control-label">Years</label> 
    <div class="col-sm-9"> <input type="text" name="y" class="form-control" id="inputPassword3" value="<?php echo $r[3];?>" > </div> </div>
     <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">Save</button> </div> </form> 
							</div>
						</div>
					</div>


</body>
</div>
</div>
</html>