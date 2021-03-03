

<?php
$iy=$_GET['id'];
//$iy=$_GET['id'];
include("../connection.php");
$ob=new connection();
include("layout.php");
$q="select * from addsubject where sub_id=$iy";
$res=$ob->execute($q);
$r=mysqli_fetch_array($res);
?>
<div id="page-wrapper">
			<div class="main-page">
            <div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">
							<h1>Edit Subject</h1>
							</div>
							<div class="form-body">
								<form class="form-horizontal" action="updatesubject.php" method="post"><input type="hidden" name="n" value="<?php echo $iy?>" />
 <div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">Subject name</label> 
  <div class="col-sm-9"> <input type="text" class="form-control"  name="name" id="inputEmail3" value="<?php echo $r[1];?>" >
   </div>
   </div> 
  
     <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">Save</button> </div> </form> 
							</div>
						</div>
					</div>


</body>
</div>
</div>
</html>