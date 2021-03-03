<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function valid()
{
	
if(document.form.Name.value=="")
{
	alert("enter the name");
document.form.Name.focus();
return false;
}
if(!(isNaN(document.form.Name.value)))
{
	alert("only alphabets are allowed");
	document.form.Name.focus();
	return false;
}
if(document.form.contact.value=="")
{
	alert("enter the contact no");
	document.form.contact.focus();
	return false;
}
if(isNaN(document.form.contact.value))
{
	alert("only numbers are allowed");
	document.form.contact.focus();
	return false;
}
if(document.form.dob.value=="")//textbox name=name
{
alert("enter your date of birth");
document.form.dob.focus();
return false;
    }
	var email=document.form.email.value;
      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; 
 

if(document.form.email.value=="")
{
alert("enter your emailid");
document.form.email.focus();
return false;
}

 if(reg.test(email) == false)
 {
	  
        alert("Please enter a valid Email id");
        document.form.email.focus();
       return false;
    }


if(document.form.address.value=="")
{
	alert("enter the address");
document.form.address.focus();
return false;
}
if(!(isNaN(document.form.address.value)))
{
	alert("only alphabets are allowed");
	document.form.address.focus();
	return false;
}
	if(document.form.desi.value=="")
{
	alert("enter the designation");
document.form.desi.focus();
return false;
}
if(!(isNaN(document.form.desi.value)))
{
	alert("only alphabets are allowed");
	document.form.desi.focus();
	return false;
}
if(document.form.job.value=="")
{
	alert("enter the job category");
document.form.job.focus();
return false;
}
if(!(isNaN(document.form.job.value)))
{
	alert("only alphabets are allowed");
	document.form.job.focus();
	return false;
}

	if(document.form.course.value=="0")//textbox name=name
{
alert("select the course");
document.form.course.focus();
return false;
}
	if(document.form.department.value=="0")//textbox name=name
{
alert("select the department");
document.form.department.focus();
return false;
}
}
</script>
</head>

<body>
<?php
include("../connection.php");
include("layout.php");
$ob=new connection();
?>
<div id="page-wrapper">
			<div class="main-page">
<center>

    <div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">
	
							</div>
							<div class="form-body">
                            <form name="form" action="staffprocess.php" id="form" method="post" onsubmit="return valid()" enctype="multipart/form-data" class="form-horizontal" >
  
  <h1>Add Staff</h1><br />

								 <div class="form-group"> <label for="inputname" class="col-sm-2 control-label">Name</label> <div class="col-sm-9"> <input type="text" name="Name" class="form-control" id="name" placeholder="your name"> </div> </div> 
                                 
                                <div class="form-group"> <label for="txtarea1" class="col-sm-2 control-label">Address</label> <div class="col-sm-9"> <textarea name="address" id="address" placeholder="your address" cols="50" rows="4" class="form-control1"></textarea></div> </div> 
                                
                               <div class="form-group"> 
                                <label for="radio" class="col-sm-2 control-label">Gender</label>
									<div class="col-sm-2">
										<div class="radio-inline"><label><input type="radio"  name="radio" value="male"> Male</label></div>
										<div class="radio-inline"><label><input type="radio"  name="radio" value="female"> Female</label></div>
								</div></div>		
                                
                                
                                
                                
                                
                             
                                
                                <div class="form-group"> <label  for="inputaddress" class="col-sm-2 control-label">Contact</label> <div class="col-sm-9"> <input type="text" name="contact" class="form-control" id="address" placeholder="your contact"> </div> </div> 
                                
                                
                                <div class="form-group"> <label class="col-sm-2 control-label">DateOfBirth</label> <div class="col-sm-9"> <input type="date" name="dob" class="form-control" id="address" placeholder="your DOB"> </div> </div> 
                                
                                
                                <div class="form-group"> <label class="col-sm-2 control-label">Email</label> <div class="col-sm-9"> <input type="email" name="email" class="form-control" id="address" placeholder="your email"> </div> </div> 
                                
                                
                                <div class="form-group"> <label class="col-sm-2 control-label">Job Category</label> <div class="col-sm-9"> <input type="text" name="job" class="form-control" id="address" placeholder="your category"> </div> </div> 
                                
                                <div class="form-group"> <label class="col-sm-2 control-label">Designation</label> <div class="col-sm-9"> <input type="text" name="desi"  class="form-control" id="address" placeholder="your designation"> </div> </div> 
                                
                                
                                
                                
                                <div class="form-group"> <label class="col-sm-2 control-label">Department</label> <div class="col-sm-9"> <select name="department" id="dept" class="form-control1">
<option value="0">---------select---------</option>
<?php

$q="select * from adddepartment";
$res=$ob->execute($q);
while($r=mysqli_fetch_array($res))
{
	$b=$r['dept_id'];
?>
	
<option value="<?php echo$r['dept_id'];?>"><?php echo$r['dept_name'];?></option>
<?php
}
?>
</select> </div> </div> 
                              
                              <div class="form-group"> <label class="col-sm-2 control-label">Course</label> <div class="col-sm-9"> <select name="course" id="course" class="form-control1">
                                <option value="0">-------select-------</option>
        <?php

$q="select * from addcourse ";
$res=$ob->execute($q);
while($r=mysqli_fetch_array($res))
{
?>
        <option value="<?php echo$r['course_id'];?>"><?php echo$r['course_name'];?></option>
        <?php
}
?>
      </select></div></div>
                                <div class="form-group"> <label class="col-sm-2 control-label">Qualification</label> <div class="col-sm-9"> <input type="text" name="quali" class="form-control" id="address" placeholder="your qualification"> </div> </div> 
                                
                                <div class="form-group"> <label class="col-sm-2 control-label">Resume</label> <div class="col-sm-9"> <input type="file" name="f1" class="form-control" id="address" placeholder="your resume"> </div> </div> 
                                
                                     <div class="form-group"> <label class="col-sm-2 control-label">Photo</label> <div class="col-sm-9"> <input type="file" name="f" class="form-control" id="address" placeholder="your photo"> </div> </div>
                                
                                
                                
                    <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">Save</button> </div> 
							</div>
						</div>
    
       
</form>
</center>
</div></div>
</body>
</html>
