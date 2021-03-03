<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include("layout.php");
?>
<body >
<div id="page-wrapper">
			<div class="main-page">
             <div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">
	<center>
<h1>Bus Fee Notification</h1>
							</div>
							<div class="form-body">
<form name="form" action="busfeenotificationprocess.php" id="form"  class="form-horizontal" method="post" onsubmit="return valid()"  >
 <div class="form-group"> <label for="exampleInputEmail1">Title</label> <input type="text" name="title" id="title"  class="form-control" id="exampleInputEmail1" placeholder="title"> <label for="exampleInputEmail1">Date</label> <input type="text" name="cdate" value="<?php echo date("d/m/Y");?>" class="form-control" id="exampleInputEmail1" placeholder="title"></div> 
 
 
 
 <div class="form-group">
<label for="txtarea1" >Message</label>
									<textarea  name="msg" cols="50" rows="4" class="form-control1"></textarea></div>
								
 
 
 
 <div class="form-group"> <label for="exampleInputPassword1">Last Date</label> <input  type="date" name="date" id="date" class="form-control" id="exampleInputPassword1" placeholder="last date"> </div> 
 
 <button type="submit" class="btn btn-default">Submit</button> </form> 
						</div>
					</div>
					


</center>
</body>
</div>
</div>
</form>

</html>
