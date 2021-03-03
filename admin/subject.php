<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function  valid()
{
	if(document.form.subname.value=="")
{
	alert("enter the department name");
document.form.subname.focus();
return false;
}
if(!(isNaN(document.form.subname.value)))
{
	alert("only alphabets are allowed");
	document.form.subname.focus();
	return false;
}
}
</script>
</head>
<?php
include("layout.php");
?>
<body>
<div id="page-wrapper">
			<div class="main-page">
            <div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">
	
							
							<div class="form-body">
<form action="subjectprocess.php" name="form"  class="form-horizontal"  id="form" method="post" onsubmit="return valid()" >
<center>
<h1>Add Subject</h1><br>
<br>
<div class="form-group"> <label class="col-sm-2 control-label">Subject Name</label> <div class="col-sm-9"> <input type="text"  name="subname" id="subname" class="form-control"  placeholder="your subject name"> </div> </div>

 <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">Save</button> </div> 
							</div>
						</div>

</center>
</form>
</body>
</div>
</div>
</html>
