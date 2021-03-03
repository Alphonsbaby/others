<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>
<?php
include("layout.php");
?>
<body>
<?php
include("../connection.php");
$ob=new connection();
?>
<div id="page-wrapper">
			<div class="main-page">
             <div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">
	
							
							<div class="form-body">
<form name="form" action="addsubjecttocourseprocess.php"  class="form-horizontal" name="form" id="form" method="post" onsubmit="return valid()" >

<center>
<h1>Add Subject To Course</h1><br>

<div class="form-group"> <label class="col-sm-2 control-label">Choose Course</label> <div class="col-sm-9"> <select  name="course" id="course" onChange="statesd(this.value)" class="form-control1">


<option value="0">-------select-----------</option>
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
<div class="form-group"> <label class="col-sm-2 control-label">Semester </label><div class="col-sm-9">
<div id="u"></div></div></div>
</center>



<div class="tables">
					<h2 class="title1">subject</h2>
					<div class="panel-body widget-shadow">
						
						<table class="table">
							<thead>
								<tr>
								<th>Subject Id</th>
<th>Subject Name</th>
<th>Select Subject</th>
								</tr>
							</thead>
							<tbody>
								<tr>
                                <?php

$q="select * from addsubject";
$res=$ob->execute($q);
while($r=mysqli_fetch_array($res))
{
?>
<td><?php echo $r['sub_id'];?></td>
<td><?php echo $r['sub_name'];?></td>

<td><input type="checkbox" name="check[]" value="<?php echo $r['sub_id'];?>">select</td></tr>
<?php
}
?>
								 
								</tr>
							
							</tbody>
						</table>
					</div>
 <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">Save</button> </div> 
							</div>
						</div>
    



</form>
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
</div>
</div>
</html>
