<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$pid=$_GET['pid'];
include("../connection.php");
$ob=new connection();  

$t="select * from feepayment where id=$pid";
$res1=$ob->execute($t);
$r=mysqli_fetch_array($res1);
$cid=$r['cid'];
$stid=$r['sid'];

$t3="select * from addpersonal where stud_id=$stid";
$t4=$ob->execute($t3);
$r2=mysqli_fetch_array($t4);




$t1="select * from addcourse where course_id=$cid";
$t2=$ob->execute($t1);
$r1=mysqli_fetch_array($t2);

?>
<a href="index.php">Home</a><br /><br /><br /><br />
<table align="center" width="700" height="400" >
		<tr height="50" bgcolor="#84A6E6"><td align="center" colspan="6"><B><font color="#0033FF"><h2><font color="#FFFF00">FEE RECEIPT</font></B></td></tr>

	<TR><TD align="center" colspan="6"><a href="javascript:window.print()"><img src="printer-xxl.png">Click here to Print</a></TD></TR>
	<tr bgcolor="#C2E0E0" height="50"><td>COURSE</td><td>STUDENT NAME</td><td>SEMESTER FEES</td><td>BUS FEE</td><td>ADDITIONAL FEE</td><td>DATE OF PAYMENT</td></tr>
	<tr><td colspan="6"><hr /></td></tr>
	<tr><td><?php echo $r1['course_name'];?></td><td><?php echo $r2['name'];?></td><td>Rs.<?php echo $r['semfee'];?></td><td>Rs.<?php echo $r['busfee'];?></td>
	<td>Rs.<?php echo $r['addfee'];?></td><td><?php echo $r['date'];?></td></tr>
	<tr><td colspan="6"><hr /></td></tr>
	<tr><td colspan="5" align="center"><font color="#FF0000">Total Amount</td><td><b>Rs.<?php echo $r['totalamount'];?></td></tr>
	<tr><td  colspan="5" align="center"><font color="#FF0000">Paid Amount</td><td><b><?php echo $r['payamount'];?></td></tr>
	<tr><td  colspan="5" align="center"><font color="#FF0000">Balance Due</td><td><b>Rs.<?php echo $r['bal'];?></td></tr>
	<tr><td colspan="6"><hr /></td></tr>
	

	
	
</body>
</html>
