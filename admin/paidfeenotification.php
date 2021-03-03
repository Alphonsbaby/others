<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function valid()
{
	if(document.form.title.value=="")//textbox name=name
{
alert("enter your title");
document.form.title.focus();
return false;
    }
<!----------alphabets only------------------>
	if(!(isNaN(document.form.title.value)))
{
alert("Only alphabets are allowed");
document.form.title.focus();
return false;
}
if(document.form.msg.value=="")//textbox name=name
{
alert("enter your msg");
document.form.msg.focus();
return false;
    }
<!----------alphabets only------------------>
	if(!(isNaN(document.form.msg.value)))
{
alert("Only alphabets are allowed");
document.form.msg.focus();
return false;
}


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
</head>

<body>
<?php
include("../connection.php");
include("layout.php");
$ob=new connection();
?>
<div id="page-wrapper">
			<div class="main-page">
<form name="form" action="paidfeenotificationprocess.php" name="form" id="form" method="post" onsubmit="return valid()" >
<center>
<h1>Notification</h1>
<table width="500" height="100" border="0" >
<tr>
<td>Category</td>
<td><input type ="radio" name="radio" value="sem"/>Sem&nbsp;
<input type ="radio" name="radio" value="bus" />Bus</td></tr>
<tr>
<td>Title</td>
<td><input type="text" name="title" id="title" /></td>
<td><input type="text" name="date" id="date" /></td>
</tr>
<tr>
<td>Message</td>
<td><input type="text" name="msg"  width="800" height="600" />
</td>
</tr>
<tr>
<td>Dead Line</td>
<td><input type="date" name="line" id="line" />
</td>
</tr>
<tr>
<td>Choose Course</td>
<td><select name="course" id="course" onChange="statesd(this.value)">
<option value="0">--select--</option>
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

</select></td>
<td>Semester</td>
<td><div id="u"></div></td>

<td><input type="checkbox" name="check" value="all" />All </td>
</tr>
</table>
<table width="400" height="80" border="1">
<tr><th>Student Id</th>
<th>Student Name</th>
<th>Select Student</th>

</tr>
<tr>
<?php

$q="select * from addpersonal";
$res=$ob->execute($q);
while($r=mysqli_fetch_array($res))
{
?>
<td><?php echo $r['stud_id'];?></td>
<td><?php echo $r['name'];?></td>

<td><input type="checkbox" name="check" value="<?php echo $r['stud_id'];?>">select</td></tr>
<?php
}
?>

</table>
<label>&nbsp;</label><br />
<input type="checkbox" name="check1" value="all" />Select All 
<label>&nbsp;</label>
<label>&nbsp;</label><br />
<input type="submit" value="Send" width="200" /> 
</center>
</form>
</div></div>
</body>
</html>
