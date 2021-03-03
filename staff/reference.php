<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script type="text/javascript" src="../prototype.js">
</script>
<script>
function statesd(s)
{  
	new Ajax.Request("statepros.php",
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
function subject()
{  
	new Ajax.Request("subject.php",
	{
	method:'post',
	postBody:'s='+$F('semester') +'&fe='+$F('course'),
	onComplete:rsubject
	});
}
function rsubject(r)
{
	$('fs').innerHTML=r.responseText;
}
</script>
</head>

<body>
<?php
include("../connection.php");
$ob=new connection();
?>
<center>
<h1>Subject Reference</h1>
<table width="500" height="100" border="0">
  <tr>
    <td>Course</td>
    <td><select name="course" id="course" onchange="statesd(this.value)">
    <option value="0">----------select----------</option>
    <?php

$q="select * from addcourse";
$res=$ob->execute($q);
while($r=mysqli_fetch_array($res))
{
	$cid=$r['course_id'];
	$year=$r['years'];
	
?>	
<option value="<?php echo $r['course_id'];?>"><?php echo $r['course_name'];?></option>
<?php 
}

?></select></td>
   </tr>
   <tr>
   <td>Semester</td>
    <td><div id="u"></div></td>
  </tr>


</table>
<div id="fs"></div>
</center>
</body>
</html>
