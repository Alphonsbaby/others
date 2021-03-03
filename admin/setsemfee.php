<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


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
	
							</div>
							<div class="form-body">
                            <form name="form" action="setsemfeeprocess.php" id="form" method="post" onsubmit="return valid()" class="form-horizontal" >
<h1>Add Sem fee</h1>



<div class="form-group"> <label class="col-sm-2 control-label">Choose Course</label> <div class="col-sm-9"> <select  name="coursename" id="coursename" onChange="statesd(this.value)" class="form-control1">

<option value="0">------------select--------------</option><?php

$q="select * from addcourse";
$res=$ob->execute($q);
while($r=mysqli_fetch_array($res))
{
	
?>	
<option value="<?php echo$r['course_id'];?>"><?php echo$r['course_name'];?></option>
<?php
}
?>

</select></div></div>
<div class="form-group"> <label class="col-sm-2 control-label">semester</label> 
<div id="u"></div> </div>

 <div class="form-group"> <label class="col-sm-2 control-label">Fee</label> <div class="col-sm-9"> <input type="text" name="fee" id="fee"  class="form-control"  placeholder="fee"> </div> </div> 
                   <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">Save</button> </div> 
							</div>
						</div>
                 
</form>
</center>
</div>
</div>

<script src="jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

function valid()
{
	if(document.form.coursename.value=="0")//textbox name=name
{
alert("select the course");
document.form.coursename.focus();
return false;
}
	if(document.form.semester.value=="0")//textbox name=name
{
alert("select the semester");
document.form.semester.focus();
return false;
}
if(document.form.fee.value=="")
{
	alert("enter the fee");
	document.form.fee.focus();
	return false;
}
if(isNaN(document.form.fee.value))
{
	alert("only numbers are allowed");
	document.form.fee.focus();
	return false;
}
}
</script>
<script type="text/javascript" src="../prototype.js">
</script>
<script>
function statesd(s)
{  
	new Ajax.Request("statepro.php",
	{
	method:'post',
	postBody:'s='+$F('coursename'),
	onComplete:rstate
	});
}
function rstate(r)
{
	$('u').innerHTML=r.responseText;
}
</script>


</body>
</html>
