<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function  valid()
{
	if(document.form.coursename.value=="")
{
	alert("enter the department name");
document.form.coursename.focus();
return false;
}
if(!(isNaN(document.form.coursename.value)))
{
	alert("only alphabets are allowed");
	document.form.coursename.focus();
	return false;
}
if(document.form.noofyear.value=="")
{
	alert("enter the year");
	document.form.nooftear.focus();
	return false;
}
if(isNaN(document.form.noofyear.value))
{
	alert("only numbers are allowed");
	document.form.noofyear.focus();
	return false;
}
}
</script>
</head>

<body>
<?php
include("../connection.php");
$ob=new connection();

include("layout.php");

?>
<center>
<div id="page-wrapper">
			<div class="main-page">
            <div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">
	
							
							<div class="form-body">
<h1> Add Course</h1>
<form action="courseprocess.php" name="form"  class="form-horizontal"  id="form" method="post" onsubmit="return valid()">

<div class="form-group"> <label class="col-sm-2 control-label">Choose Department </label> <div class="col-sm-9"> <select  name="department" id="dept" class="form-control1">


<option value="0">---------select---------</option>
<?php

$q="select * from adddepartment";
$res=$ob->execute($q);
while($r=mysqli_fetch_array($res))
{
?>
	
<option value="<?php echo$r['dept_id'];?>"><?php echo$r['dept_name'];?></option>
<?php
}
?>
</select></div></div>
        <div class="form-group"> <label class="col-sm-2 control-label">Course Name</label> <div class="col-sm-9"> <input type="text"  name="coursename" id="course"  class="form-control"  placeholder="your course name"> </div> </div> 
        
        <div class="form-group"> <label class="col-sm-2 control-label">No Of Year</label> <div class="col-sm-9"> <input type="text"  name="noofyear" id="noofyear"   class="form-control"  placeholder="no of year"> </div> </div> 
         <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">Save</button> </div> 
							</div>
						</div>

</center>
</form>

</body>
</div>
</div>
</html>
