<?php
$sid=$_POST['sid'];
$cid=$_POST['cid'];
$sfee=$_POST['sfee'];
$bus=$_POST['bfee'];
$afee=$_POST['addfee'];
$date=$_POST['date'];

$pamt=$_POST['pamt'];
$total=$_POST['total'];
$bal=$_POST['bal'];

include("../connection.php");
$ob=new connection();  
$q="insert into feepayment(cid,sid,semfee,busfee,addfee,date,totalamount,payamount,bal)values('$cid','$sid','$sfee','$bus','$afee','$date','$total','$pamt','$bal')";
$res=$ob->execute($q);
$t="select max(id) from feepayment";
$res1=$ob->execute($t);
$r=mysqli_fetch_array($res1);
$pid=$r[0];
header("location:receipt.php?pid=$pid");


?>