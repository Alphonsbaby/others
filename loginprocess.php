<?php
session_start();
$u=$_POST['username'];
$p=$_POST['password'];
include("connection.php");
$ob=new connection();
 $q="select * from login where user_name='$u' and password='$p' and status=1";
$res=$ob->execute($q);
$r=mysqli_fetch_array($res);
$_SESSION['id']=$r[4];
$_SESSION['username']=$r[1];
if($r[5]=="admin")
{
header("location:admin/adminhome.php");
}
else if($r[5]=="staff")
{
header("location:staff/addmarklist.php");
}
else
{
	?>
    <script>
	 alert("invalid username and password");
	 window.location='login.php';
	</script>
	<?php
}
?>
 