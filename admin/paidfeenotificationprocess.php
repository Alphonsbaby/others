<?php
$k=$_POST['radio'];
$t=$_POST['title'];
$m=$_POST['msg'];
$d=$_POST['date'];
$c=$_POST['checkbox'];
$da=$_POST['check'];
$to=$_POST['check1'];
include("../connection.php");
$ob=new connection();
$q="insert into paidfeenotification(title,msg,last_date,stud_id,role)values('$t','$m','$d','$c','$da','$to')";
$res=$ob->execute($q);
echo "<script>
window.onload=function()
{
	alert('succesfully');
	window.location='paidfeenotification.php';
}
</script>"

?>