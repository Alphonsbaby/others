
<script type="text/javascript" src="../prototype.js">
</script>
<script>
function statesd(s)
{  
	new Ajax.Request("statepro1.php",
	{
	method:'post',
	postBody:'s='+$F('course'),
	onComplete:rstate
	});
}
function rstate(r)
{
	$('u').innerHTML=r.responseText;
}
function subject()
{  
	new Ajax.Request("subjectpro.php",
	{
	method:'post',
	postBody:'s='+$F('semester') +'&fe='+$F('course'),
	onComplete:rsubject
	});
}
function rsubject(r)
{
	$('fs').innerHTML=r.responseText;
}
</script>
</head>

<body>
<?php
include("../connection.php");
$ob=new connection();
?>
<center>
<form name="form" action="staffsubjectprocess.php" name="form" id="form" method="post" onsubmit="return valid()" >

<h1>Staff Subject</h1>
<table height="150" width="300" border="0">
  <tr>
    <td>Choose&nbsp;Staff</td>
    <td><select name="staffname" id="staffname" >
<option value="0">---------select---------</option>
<?php

$q="select * from addstaff";
$res=$ob->execute($q);
while($r=mysqli_fetch_array($res))
{
	$c=$r['course'];
?>
	
<option value="<?php echo $r['staff_id'];?>"><?php echo $r['name'];?></option>
<?php
}
?>
</select></td>
  </tr>
  <tr>
    <th>Job Category</th>
    <th>Address</th>
    <th>Course</th>
    <th>Gender</th>
 	<th>Designation</th>
 	<th>Email</th></tr>
    <td> <div id="st"></div></td>
    <?php
	$q="select course_name from addcourse where course_id='$c'";
$res=$ob->execute($q);
while($s=mysqli_fetch_array($res))
{

?>
<?php
}
?>
  

  </table>
  <table  height="100" width="300" border="0">
  <tr>
  <td>Course</td>
  <td><select name="course" id="course" onChange="statesd(this.value)">
<option value="0">--select--</option>
<?php
$q="select * from addcourse";
$res=$ob->execute($q);
while($r=mysqli_fetch_array($res))
{
?>	
<option value="<?php echo $r['course_id'];?>"><?php echo $r['course_name'];?></option>
<?php
}
?>
</select> </td></tr>
<tr>
<td>Semester</td>
<td><div id="u" ></div></td></tr>
<tr>
<td>Subject</td>
<td><div id="fs"></div></td></tr>
<tr><td></td><td><input type="submit" value="Add" /></td>
</tr>

<table width="500" border="1">
  <tr>
    <th scope="col">Course Name</th>
    <th scope="col">Semester</th>
    <th scope="col">Subject</th>
  </tr>
  <tr>
    <?php
		$query="select * from staffcourse";
		$exe=$ob->execute($query);
		while($ft=mysqli_fetch_array($exe))
		{
			$cid=$ft['course_id'];
			$sid=$ft['sub_id'];
			$query1="select * from addcourse where course_id=$cid";
			$exe1=$ob->execute($query1);
			while($ft1=mysqli_fetch_array($exe1))
			{
				$query2="select * from addsubject where sub_id=$sid";
				$exe2=$ob->execute($query2);
				while($ft2=mysqli_fetch_array($exe2))
				{
		?>
        <td><?php echo $ft1['course_name'];?></td>
        <td><?php echo $ft['sem'];?></td>
        <td><?php echo $ft2['sub_name'];?></td>
  </tr>
  <?php
		}
		}
		}
		?>
</table>
</table>
<label>&nbsp;</label>
<label>&nbsp;</label><br /></br>
<input type="submit" value="Save" />

</center>
</body>
</html>
 