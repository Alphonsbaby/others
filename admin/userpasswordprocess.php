<?php

 $g=$_POST['role'];

include("../connection.php");
$ob=new connection();
function getRandomWord($len = 7) {
    $word = array_merge(range('0', '9'), range('A', 'Z'));
    shuffle($word);
    return substr(implode($word), 0, $len);
}

$otp = getRandomWord();
$e=$_POST['email'];
$p=$_POST['otp'];
$m=$_POST['c'];
$f=$_POST['id'];

	 $q="insert into login(user_name,password,status,id,role,contact)values('$e','$otp','1','$f','$g','$m')";
$res=$ob->execute($q);


header("location:addstudent.php");
	

?>