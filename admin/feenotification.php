<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
<?php
include("../connection.php");
$ob=new connection();
include("layout.php");
?>

<div id="page-wrapper">
			<div class="main-page">
 
            <div class=" form-grids row form-grids-right">
						<div class="" data-example-id="basic-forms"> 
							<div class="form-title">
                             <center>
<h1>Fee Notification</h1></div></center>
<form name="form" action="feenotificationprocess.php" class="form-horizontal" id="form" method="post" onsubmit="return valid()" >


 <div class="form-group"> <label for="exampleInputPassword1">Title</label> <input  type="text" name="title" id="title" class="form-control" id="exampleInputPassword1" placeholder="last date"> </div> 
 
 
 <div class="form-group">
<label for="txtarea1" >Message</label>
									<textarea   name="msg"  cols="50" rows="4" class="form-control1"></textarea></div>
								
                                
                                
                                
                                
                               

<div class="form-group"> <label class="col-sm-2 control-label">Choose Course</label> <div class="col-sm-9"> <select  name="coursename" id="coursename" onChange="statesd(this.value)" class="form-control1">

<option value="0">------------select--------------</option><?php

$q="select * from addcourse";
$res=$ob->execute($q);
while($r=mysqli_fetch_array($res))
{
	
?>	
<option value="<?php echo$r['course_id'];?>"><?php echo$r['course_name'];?></option>
<?php
}
?>

</select></div></div>
<div class="form-group"> <label class="col-sm-2 control-label">semester</label> 
<div id="u"></div> </div>
 
<div class="form-group"> <label >fee</label> 
 <div id="fs"></div></div>

 <div class="form-group"> <label for="exampleInputPassword1">addtional payment</label> <input   type="text" name="addi" id="addi" class="form-control" id="exampleInputPassword1" placeholder="addtional payment"> </div> 
 
 <div class="form-group"> <label for="exampleInputPassword1">Last date</label> <input  type="date" name="cdate" id="cdate" class="form-control" id="exampleInputPassword1" placeholder="addtional payment"> </div> 
 
 
 <button type="submit" class="btn btn-default">Save</button>
						</div>
					</div>
					</form>
                    
<script src="jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>


function valid()
{
	if(document.form.title.value=="")//textbox name=name
{
alert("enter your title");
document.form.title.focus();
return false;
    }
<!----------alphabets only------------------>
	if(!(isNaN(document.form.title.value)))
{
alert("Only alphabets are allowed");
document.form.title.focus();
return false;
}
if(document.form.msg.value=="")//textbox name=name
{
alert("enter your msg");
document.form.msg.focus();
return false;
    }
<!----------alphabets only------------------>
	if(!(isNaN(document.form.msg.value)))
{
alert("Only alphabets are allowed");
document.form.msg.focus();
return false;
}


	if(document.form.course.value=="0")//textbox name=name
{
alert("select the course");
document.form.course.focus();
return false;
}
if(document.form.semester.value=="0")//textbox name=name
{
alert("select the semester");
document.form.semester.focus();
return false;
}
if(document.form.addu.value=="")
{
	alert("enter the fee");
	document.form.addi.focus();
	return false;
}
if(isNaN(document.form.addi.value))
{
	alert("only numbers are allowed");
	document.form.addi.focus();
	return false;
}
}
</script>

<script type="text/javascript" src="../prototype.js">
</script>
<script>
function statesd(s)
{  
	new Ajax.Request("statepro.php",
	{
	method:'post',
	postBody:'s='+$F('coursename'),
	onComplete:rstate
	});
}
function rstate(r)
{
	$('u').innerHTML=r.responseText;
}



function fee()
{  
//alert(s);
	new Ajax.Request("feepro.php",
	{
	method:'post',
	postBody:'se='+$F('semester') +'&fe='+$F('coursename'),
	onComplete:rfee
	});
}
function rfee(r1)
{
	$('fs').innerHTML=r1.responseText;
}
</script>





</body>

</div></div>
</html>
