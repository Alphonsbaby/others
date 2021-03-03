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
//include("layout.php");

?>
<center>
<!--<div id="page-wrapper">
			<div class="main-page">-->
<form name="form"  action="staffsubjectprocess.php" id="form" method="post" onsubmit="return valid()" >

<h1>Staff Subject</h1>
 <table  height="100" width="300" border="0">
  <tr>
  <td>Course</td>
  <td><select name="course" id="course" onChange="statesd(this.value)">
<option value="0">--select--</option>
<?php
$q="select * from addcourse";
$res=$ob->execute($q);
while($r=mysqli_fetch_array($res))
{
?>	
<option value="<?php echo $r['course_id'];?>"><?php echo $r['course_name'];?></option>
<?php
}
?>
</select> </td></tr>
<tr>
<td>Semester</td>
<td><div id="u2" ></div></td></tr>
<tr>
<td>Subject</td>
<td><div id="fs1"></div></td></tr>

</table>
<div id="s"></div>
<label>&nbsp;</label>
<label>&nbsp;</label><br /></br>
<input type="submit" value="Save" />

</center>
</form>
</div>
</div>
<script type="text/javascript" src="../prototype.js">
</script>
<script>
function statesd(s)
{  
	new Ajax.Request("statepro1.php",
	{
	method:'post',
	postBody:'s='+$F('course'),
	onComplete:rstate
	});
}
function rstate(rer)
{
	$('u2').innerHTML=rer.responseText;
}
function subject()
{  

	new Ajax.Request("subjectpro.php",
	{
	method:'post',
	postBody:'sw='+$F('semes') +'&fe1='+$F('course'),
	onComplete:rsubject
	});
}
function rsubject(rh)
{
	$('fs1').innerHTML=rh.responseText;
}
function staff()
{  
	new Ajax.Request("staff.php",
	{
	method:'post',
	postBody:'s='+$F('course'),
	onComplete:rstaff
	});
}
function rstaff(ry)
{
	$('s').innerHTML=ry.responseText;
}
</script>
</body>
</html>
 