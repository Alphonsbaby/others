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

?>
<center>
<h1>Add Student</h1>

<form name="form" action="paynow.php" id="form" method="post" onsubmit="return valid()">
<table width="500" height="80" border="0"> 
<tr><td>Student Id no</td><td>

<input type="text" name="id" id="id" onchange="showst()"/></td>
</tr></table><table>
<tr><td>

<div id="u"></div></td></tr>
<tr><td><input type="submit" value="Pay now"  /></td></tr>
</table>
</form>

<script type="text/javascript" src="../prototype.js">
</script>
<script>
function showst(s)
{
	  
//alert("ok");
	new Ajax.Request("pay.php",
	{
	method:'post',
	postBody:'s='+$F('id'),

	onComplete:rstate
	});
}
function rstate(r)
{
	$('u').innerHTML=r.responseText;
}

</script>
</center>
</body>
</html>
