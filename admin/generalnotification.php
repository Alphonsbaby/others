<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script>
function valid()
{
	if(document.form.title.value=="")//textbox name=name
{
alert("enter your title");
document.form.title.focus();
return false;
    }

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
if((document.form.staff.checked==false) && (document.form.student.checked==false ))
{
alert("add your qualification");
document.form.staff.focus();

return false;
}
}
</script>




</head>
<?php
include("layout.php");
?>
<body>
<div id="page-wrapper">
			<div class="main-page">
<center>


      
      <div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">
	
							</div>
							<div class="form-body">
                            
<form name="form" action="generalnotificationprocess.php" class="form-horizontal" id="form" method="post" onsubmit="return valid()" >
<center>
<h1>Notification</h1></center>

 <div class="form-group"> <label for="exampleInputPassword1">Title</label> <input   type="text" name="title" id="title" class="form-control" id="exampleInputPassword1" placeholder="last date"> </div> 
 
 
 <div class="form-group">
<label for="txtarea1" >Message</label>
									<textarea   name="msg"  cols="50" rows="4" class="form-control1"></textarea></div>
<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Role</label>
								
									<label><input type="radio"  name="radio" value="student" onclick="showstud()"> Student
									<input type="radio" name="radio" value="staff" onclick="showstud()"> Staff</label>
                                        
                                        <div id="u"></div>
										
<button type="submit" class="btn btn-default">Submit</button> </form> 
						</div>
					</div>
</div></div></div>

</center>
</div>
</div>
<script type="text/javascript" src="prototype.js">
</script>
<script>
function showstud(s)
{
	  
//alert("ok");
	new Ajax.Request("general.php",
	{
	method:'post',
	postBody:'',

	onComplete:rstate
	});
}
function rstate(r)
{
	$('u').innerHTML=r.responseText;
}

</script>
<br><br><br><br><br><br><br><br><br><br>
</body>
</html>
