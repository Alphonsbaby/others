<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function valid()
{
	if(document.form.image.value=="")//textbox name=name
{
alert("enter your name");
document.form.image.focus();
return false;
    }
<!----------alphabets only------------------>
	if(!(isNaN(document.form.image.value)))
{
alert("Only alphabets are allowed");
document.form.image.focus();
return false;
}
if(document.form.f.value=="")
{
alert("select your image");
document.form.f.focus();
return false;
    }
}
</script>
</head>
<?php
include("layout.php");
?>

<body bgcolor="#FFA54A">
<div id="page-wrapper">
			<div class="main-page">
<center>
<h1>Add Form</h1>
<form name="form" action="addformprocess.php" id="form" method="post" onsubmit="return valid()" enctype="multipart/form-data" >
<table width="500" height="100" border="0"> 
<tr><td>Image Name</td><td>
<input type="text" name="image" /></td>	</tr>

<tr><td>Image Upload</td>
<td><input type="file" name="f" /></td></tr>


</table>
<label>&nbsp;</label>
<label>&nbsp;</label><br />
<input type="submit" value="Save" width="200" /> 
</form>
</center>
</body>
</div>
</div>
</html>
