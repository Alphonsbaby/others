<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function  valid()
{
	if(document.form.name.value=="")
{
	alert("enter the department name");
document.form.name.focus();
return false;
}
if(!(isNaN(document.form.name.value)))
{
	alert("only alphabets are allowed");
	document.form.name.focus();
	return false;
}
}
</script>
</head>
<?php
include("layout.php");
?>

<div id="page-wrapper">
			<div class="main-page">
<body>
 <div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">
	
							
							<div class="form-body">
<form action="deptprocess.php" name="form"  class="form-horizontal"  id="form" method="post" onsubmit="return valid()" >
<center>
<h1>Add Department</h1>
<div class="form-group"> <label class="col-sm-2 control-label">Department Name</label> <div class="col-sm-9"> <input type="text"  naname="name" id="name" class="form-control"  placeholder="your department name"> </div> </div>

 <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">Save</button> </div> 
							</div>
						</div>
</center>

</form>
</body>

</div></div>
</html>
