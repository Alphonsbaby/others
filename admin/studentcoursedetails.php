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
<div id="page-wrapper">
			<div class="main-page">
<center>

 <div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">
	
							</div>
							<div class="form-body">
                            <form name="form" action="studentcoursedetailsprocess.php" name="form" id="form" method="post" onsubmit="return valid()" enctype="multipart/form-data" class="form-horizontal" >
<h1>Course Details</h1>
 <div class="form-group"> <label class="col-sm-2 control-label">Department</label> <div class="col-sm-9"> <select name="dept" id="dept" class="form-control1">
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
<div class="form-group"> <label class="col-sm-2 control-label">Course</label> <div class="col-sm-9"> <select name="course" id="course" onChange="statesd(this.value)" class="form-control1">
<option value="0">---------select---------</option>


<?php

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

<div class="form-group"> <label class="col-sm-2 control-label">Start Year</label> <div class="col-sm-9"> <select name="year" id="year" class="form-control1">
<option value="0">---------select---------</option>


	
<option value="2018">2018</option>
<option value="2019">2019</option>
</select></div></div>


 <div class="form-group"> <label class="col-sm-2 control-label"> Education Qualification</label> <div class="col-sm-9"> <input type="text" name="edu" id="edu" class="form-control" id="address" placeholder="your qualification"> </div> </div> 
            
            
             <div class="form-group"> <label class="col-sm-2 control-label"> Upload Certificates</label> <div class="col-sm-9"> <input   type="file" name="f" class="form-control" id="address" placeholder="your certificates"> </div> </div> 
                               
                               
                               <div class="form-group"> <label class="col-sm-2 control-label"> Current Year</label> <div class="col-sm-9"> <input type="text" v class="form-control" id="address" placeholder="current year"> </div> </div> 
                               
                                <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">Save</button> </div> 
							</div>
						</div>
    

</form>

</div>
</div>

<script>
function valid()
{
	if(document.form.course.value=="0")//textbox name=name
{
alert("select the course");
document.form.course.focus();
return false;
}
if(document.form.semester.value=="0")//textbox name=name
{
alert("select the semester");
document.form.semester.focus();
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
	postBody:'s='+$F('course'),
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
