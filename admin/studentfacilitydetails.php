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

<center>
<div id="page-wrapper">
			<div class="main-page">
<h1> Campus Details</h1>

<form name="form" action="studentfacilitydetailsprocess.php" id="form" method="post" onsubmit="return valid()" >

<div class="form-group">
									<label for="checkbox" class="col-sm-2 control-label"></label>
									<div class="col-sm-8">
										<div class="checkbox-inline"><label><input type="checkbox" name="check2" value="lib"> Library</label></div>
										<div class="checkbox-inline"><label><input type="checkbox" name="check1" value="lab"> Lab</label></div>
										<div class="checkbox-inline"><label><input type="checkbox" name="check3" value="bus"  onclick="bus()"> 
                                        Bus </label></div>
										<div class="checkbox-inline"><label><input type="checkbox" disabled="" name="check4" value="hostel">  Hostel</label></div>
									</div>
								</div>
                                
                                <div id="u"></div>

  <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">Save</button> </div> 
  </form>
							</div>
						</div>

</center>



<script>
function valid()
{
if((document.form.check1.checked==false) && (document.form.check2.checked==false )&&(document.form.check3.checked==false) && (document.form.check3.checked==false ))
{
alert("select the facility");
document.form.check1.focus();

return false;
}
}
</script>
<script type="text/javascript" src="../prototype.js">
</script>
<script>
function bus(s)
{  
	new Ajax.Request("addbusdetails.php",
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


</body>
</html>
