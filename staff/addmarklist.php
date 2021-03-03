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
	new Ajax.Request("satepro2.php",
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
function student()
{  
	new Ajax.Request("studentpro.php",
	{
	method:'post',
	postBody:'s='+$F('semester') +'&fe='+$F('course'),
	onComplete:rstudent
	});
}
function rstudent(r)
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
<form name="form"  name="form" id="form" method="post" onsubmit="return valid()" >

<center>
<h1>Add Student Mark List</h1>
<table width="487" height="92" border="0">
<tr>
  <td width="56"><table width="487" height="92" border="0">
    <tr></tr>
    <tr>
      <td width="56"><table width="487" height="92" border="0">
        <tr>
          <td width="44">Course</td>
          <td width="191"><select name="course" id="course" onchange="statesd(this.value)">
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
 	$d=date('Y-m-d');
?>
            <option value="<?php echo $r['course_id'];?>"><?php echo $r['course_name'];?></option>
            <?php 
}

?>
          </select></td>
          <td width="56">Semester</td>
          <td width="178"><div id="u"></div></td>
        </tr>
     
</table>
<div id="fs"></div>
	
  


</table>


</center>
</form>
</body>

</html>
