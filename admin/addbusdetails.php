<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function valid()
{
if(document.form.rate.value=="")
{
	alert("enter the rate");
	document.form.rate.focus();
	return false;
}
if(isNaN(document.form.rate.value))
{
	alert("only numbers are allowed");
	document.form.rate.focus();
	return false;
}
}
</script>
</head>
<?php

?>
<body bgcolor="#FFA87D">
<div id="page-wrapper">
			<div class="main-page">
<center>
<h1>Add Bus Details</h1>
<form name="form"   id="form"  method="post" onsubmit="return valid()" >



  <tr>
  <div class="form-body" data-example-id="simple-form-inline">
							<form class="form-inline"> <div class="form-group"> <label for="exampleInputName2">From</label> <input type="text"  name="from" id="from"  class="form-control" id="exampleInputName2" placeholder="from"> </div> 
                            
                            <div class="form-group"> <label for="exampleInputEmail2">To</label> <input type="text" class="form-control" name="to" id="to" id="exampleInputEmail2" placeholder=""> </div> 
						</div>
					</div>
                    
                        <div class="form-group"> <label class="col-sm-2 control-label">Rate</label> <div class="col-sm-9"> <input type="text" name="rate" id="rate" class="form-control" id="address" placeholder="rate"> </div> </div> 
    

</form>
</center>
</body>
</div>
</div>
</html>
 