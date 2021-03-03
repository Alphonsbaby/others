<?php

 $sid=$_POST['id'];

$cid=$_POST['course'];
$s1=$_POST['semfee'];
$b1=$_POST['busfee'];
$a1=$_POST['afee'];

if(isset($_POST['sem']))
{
 $sfee=$_POST['semfee'];
 }
 else
 {
 $sfee=0;
 }
 
if(isset($_POST['bus']))
{
  $bfee=$_POST['busfee'];
  }
  else
  {
  $bfee=0;
  }
if(isset($_POST['add']))

{




  $addfee=$_POST['afee'];
 

}
else
{
$addfee=0;
}
  $tot=$s1+$b1+$a1;
  $pamt=$sfee+$bfee+$addfee;
 $bal=$tot-$pamt;
$a=date("Y-m-d");
?>
<form method="post" name="f" action="paymentprocess.php">
                    <table width="750" height="100" cellpadding="10" cellspacing="20" align="center">

 
 
 <tr>    <td><b><font color="#CC0000">Card type </td>

      <td><select name="type" >
<option value="0">--Select card type--</option>
    <option value="Debit card">Debit card</option>
    <option value="Credit card">Credit card</option>
	  <option value="Visa card">Visa card</option>
	  <option value="Master card">Master card</option>
	 
	</select></td><td><b><font color="#CC0000">CVV</td>
  <td><input type="text" name="cvv" placeholder="Enter your cvv no"></td></tr>

<TR><td><b><font color="#CC0000">Expiry date</td><td><input type="date" name="exp" min="<?php echo $a;?>"></td>
<td><b><font color="#CC0000">Date of payment</td><td><input type="text" name="date" value="<?php echo $a;?>" >


</td></TR>
<TR><td><b><font color="#CC0000">Total Fees</td><td><input type="text" name="pamt" value="Rs.<?php echo $pamt;?>" >
<input type="hidden" name="sid" value="<?php echo $sid;?>">
<input type="hidden" name="cid" value="<?php echo $cid;?>">
<input type="hidden" name="sfee" value="<?php echo $sfee;?>">
<input type="hidden" name="bfee" value="<?php echo $bfee;?>">
<input type="hidden" name="addfee" value="<?php echo $addfee;?>">
<input type="hidden" name="total" value="<?php echo $tot;?>">
<input type="hidden" name="bal" value="<?php echo $bal;?>">


</td></tr>
<tr><td colspan="2" align="center">
   <input type="submit" value="PAY"   id="submit" name="b" onClick="return valid()"/></td>
 
 

 
    </tr>
    
</table>

</form> 