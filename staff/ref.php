<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<center>
<h1>Add Mark</h1>
<form action="referenceprocess.php" name="form" method="post">
<?php
 $iy=$_GET['id'];
  $c=$_GET['c'];
   $s=$_GET['s'];
 
include("../connection.php");
	$obj=new connection();
	
?>
<table>
<tr>
<td>Subject Name</td>
<input type="hidden" name="course" value="<?php echo $c;?>"/>
<input type="hidden" name="sem" value="<?php echo $s;?>"/>
    <td><input type="text" name="name" id="name" value="<?php echo $iy;?>"/></td></tr>
     
     <tr><td>Reference Link</td><td><input type="text" name="link" id="link"/></td></tr>
<tr><td></td>
<td><input type="submit" value="Save" /></td></tr>
</table>
</form>
</center>
</body>
</html>