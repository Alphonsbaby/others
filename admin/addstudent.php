<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function valid()
{
	
if(document.form.FName.value=="")
{
	alert("enter the name");
document.form.FName.focus();
return false;
}
if(!(isNaN(document.form.FName.value)))
{
	alert("only alphabets are allowed");
	document.form.FName.focus();
	return false;
}
if(document.form.LName.value=="")
{
	alert("enter the name");
document.form.LName.focus();
return false;
}
if(!(isNaN(document.form.LName.value)))
{
	alert("only alphabets are allowed");
	document.form.LName.focus();
	return false;
}
if(document.form.fn.value=="")
{
	alert("enter the fname");
document.form.fn.focus();
return false;
}
if(!(isNaN(document.form.fn.value)))
{
	alert("only alphabets are allowed");
	document.form.fn.focus();
	return false;
}
if(document.form.mn.value=="")
{
	alert("enter the name");
document.form.mn.focus();
return false;
}
if(!(isNaN(document.form.mn.value)))
{
	alert("only alphabets are allowed");
	document.form.mn.focus();
	return false;
}
if(document.form.f.value=="")
{
alert("select your image");
document.form.f.focus();
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
	var phone=document.form.contact.value.length;

var max=10;
if((contact<max) || (contact>max))
{
alert("Please Enter your 10 digit mobile phone number");
document.form.contact.value="";
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


	if(document.form.gua.value=="")
{
	alert("enter the guardian");
document.form.gua.focus();
  return false;
}
if(!(isNaN(document.form.gua.value)))
{
	alert("only alphabets are allowed");
	document.form.gua.focus();
	return false;
}
if(document.form.occup.value=="")
{
	alert("enter the occupation");
document.form.occup.focus();
return false;
} 
if(!(isNaN(document.form.occup.value)))
{
	alert("only alphabets are allowed");
	document.form.occup.focus();
	return false;
}

	if(document.form.dist.value=="0")//textbox name=name
{
alert("select the dist");
document.form.dist.focus();
return false;
}
	if(document.form.state.value=="0")//textbox name=name
{
alert("select the state");
document.form.state.focus();
return false;
}
if(document.form.coutry.value=="0")//textbox name=name
{
alert("select the coutry");
document.form.coutry.focus();
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
                            <form name="form" action="addstudentprocess.php" id="form" method="post" onsubmit="return valid()" enctype="multipart/form-data" class="form-horizontal" >
  
  <h1>Add Student</h1><br />

								 <div class="form-group"> <label for="inputname" class="col-sm-2 control-label">FName</label> <div class="col-sm-9"> <input type="text" name="FName" class="form-control" id="name" placeholder="your Fname"> </div> </div> 
                           		 <div class="form-group"> <label for="inputname" class="col-sm-2 control-label">LName</label> <div class="col-sm-9"> <input type="text" name="LName" class="form-control" id="name" placeholder="your Fname"> </div> </div>      
                               
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
                                
                                
                                <div class="form-group"> <label class="col-sm-2 control-label">Guardian</label> <div class="col-sm-9"> <input type="text" name="gua" class="form-control" id="address" placeholder="your guardian"> </div> </div> 
                                
                                <div class="form-group"> <label class="col-sm-2 control-label">Guardian Occupation</label> <div class="col-sm-9"> <input type="text" name="occup"  class="form-control" id="address" placeholder="your occupation"> </div> </div> 
                                
        <div class="form-group"> <label class="col-sm-2 control-label">Guardian Address</label> <div class="col-sm-9"> <input type="text" name="gudaddress"  class="form-control" id="address" placeholder="your occupation"> </div> </div> 
                                
      
        <div class="form-group"> <label class="col-sm-2 control-label">Father Name</label> <div class="col-sm-9"> <input type="text" name="fn"   class="form-control" id="address" placeholder="your occupation"> </div> </div> 
                                
      
        <div class="form-group"> <label class="col-sm-2 control-label">Mother Name</label> <div class="col-sm-9"> <input type="text"  name="mn" class="form-control" id="address" placeholder="your occupation"> </div> </div> 
                                
      
       <div class="form-group"> <label class="col-sm-2 control-label">Coutry</label> <div class="col-sm-9"> <select  name="coutry" class="form-control1">
<option value="0">---------select---------</option>
      <option value="kottayam">kottayam</option>
        <option value="kollam">kollam</option>
      </select></div></div>
      
      <div class="form-group"> <label class="col-sm-2 control-label">State</label> <div class="col-sm-9"> <select  name="state" class="form-control1">
<option value="0">---------select---------</option>
      <option value="kottayam">kottayam</option>
        <option value="kollam">kollam</option>
      </select></div></div>
      
      
       <div class="form-group"> <label class="col-sm-2 control-label">District</label> <div class="col-sm-9"> <select  name="dist" class="form-control1">
<option value="0">---------select---------</option>
      <option value="kottayam">kottayam</option>
        <option value="kollam">kollam</option>
      </select></div></div>
      <div class="form-group"> <label  for="inputaddress" class="col-sm-2 control-label">Photo</label> <div class="col-sm-9">   <input type="file" name="f"  class="form-control" id="address" placeholder="choose photo"> </div> </div> 
                                
      
      
                                
                   
                    <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">Save</button> </div> 
							</div>
						</div>
    
      
      
   
</form>
</center>
</div>
</div>
</body>
</html>
