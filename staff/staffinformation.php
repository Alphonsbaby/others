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

<body bgcolor="#FFCCFF">
<?php
include("../connection.php");
$ob=new connection();
?>
<center>
<h1>Staff Information</h1>
<form name="form" action="staffinformationprocess.php" id="form" method="post" onsubmit="return valid()" enctype="multipart/form-data">
<?php
$d=date('Y-m-d');
?>
<table border="0" >
<tr>
<td>Title</td>
<td><input type="text" name="title" id="title" /></td>
<td></td>
<td><input type="date" name="cdate" id="cdate" value="<?php echo $d;?>" /></td>
</tr>
<tr>
<td>Message</td>
<td><input type="text" name="msg"  />
</td>
</tr>
<tr>
<td>File</td>
<td><input type="file" name="f"/></td>

</tr>
<tr>

<tr>
<td>Course</td>
<td><select name="course" id="course" onchange="statesd(this.value)">
            <option value="0">-------------select-----------</option>
            <?php

$q="select * from addcourse";
$res=$ob->execute($q);
while($r=mysqli_fetch_array($res))
{
	$cid=$r['course_id'];
	$year=$r['years'];
	$q1="select * from setsemfee";
	$sema=$r6['sem'];
 	//$d=date('Y-m-d');
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
<tr>
<td>&nbsp;</td>
<td><input type="submit" value="Send" /></td>
</tr>
</table>
</center>
</form>
</body>
</html>
