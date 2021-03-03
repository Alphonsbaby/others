<?php
$c=$_POST['coursename'];
 $s=$_POST['semester'];
 $f=$_POST['fee'];
$t=$_POST['title'];
$m=$_POST['msg'];

$a=$_POST['addi'];
$da=$_POST['cdate'];

include("../connection.php");
$ob=new connection();
$to=$f+$a;  
 $q="insert into feenotification(title,msg,course_id,sem,fee,additionalpay,total,last_date)values('$t','$m','$c','$s','$f','$a','$to','$da')";
$res=$ob->execute($q);
echo "<script>
window.onload=function()
{
	alert('succesfully');
	window.location='feenotification.php';
}
</script>"

?>