<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#FFCCFF">
<center>
<h1>VIEW MARK</h1>

<table border="1" align="center"><tr>

    <th width="55" height="35">subject</th>
    <th width="55">internal mark</th>
    <th width="59">external mark</th>
        <th width="96">status</th>
</tr>

       <tr>
<?php
  $iy=$_GET['id'];

include("../connection.php");
	$obj=new connection();
	?>
<?php
$i="select *from addstudentmarklist where stud_id='$iy'";
	$res1=$obj->execute($i);
	while($w=mysqli_fetch_array($res1))
	{
		?>
 
        <td height="55"><?php echo $w['sub_id'];?></td>
        <td><?php echo $w['inmark'];?></td>
        <td><?php echo $w['exmark'];?></td>
  <td><?php echo $w['status'];?></td></tr>
        <?php
	}
	?>
</table>
</body>
</center>
</html>