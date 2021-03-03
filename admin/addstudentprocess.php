<?php
$ww=$_POST['FName'];
$n=$_POST['LName'];
$t=$_FILES['f']['name'];
move_uploaded_file($_FILES['f']['tmb_name'],"../upload/".$t);
$a=$_POST['address'];
$r=$_POST['radio'];
$c=$_POST['contact'];
$d=$_POST['dob'];
$e=$_POST['email'];
$j=$_POST['gua'];
$de=$_POST['occup'];
$dep=$_POST['gudaddress'];
$q=$_POST['fn'];
$cou=$_POST['mn'];
$dep1=$_POST['dist'];
$q1=$_POST['state'];
$cou1=$_POST['coutry'];

include("../connection.php");
$ob=new connection();
$n3=$ww.$n;  
$i="insert into addpersonal(name,gender,dob,address,contact,email,fname,mname,gurdian,occupation,gaddress,state,dist,country,photo)values('$n3','$r','$d','$a','$c','$e','$q','$cou','$j','$de','$dep','$q1','$dep1','$cou1','$t')";
$res=$ob->execute($i);
header("location:studentcoursedetails.php");

?>
