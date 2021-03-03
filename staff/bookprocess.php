<?php
$name=$_POST['bookname'];
$author=$_POST['author'];
$course=$_POST['course'];
$details=$_POST['details'];

include("../connection.php");
$ob=new connection();
$q="insert into addbook(bookname,author,course,details)values('$name','$author','$course','$details')";
$res=$ob->execute($q);
header("location:addbook.php");
?>
<!--$ql="select max(bookid)from addbook";
$res1=$ob->execute($ql);
$r=mysqli_fetch_array($res1);

?>
<!--$q2="insert into registration(Name,Age,Address,State,Gender,Logid,Status) values('$dname',$age,'$address','$state','$Gender',$id,0)";
$res=$ob->execute($q2);
-->

