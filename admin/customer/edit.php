<?php
?>
<h1>  Edit your information</h1>

      <form id="edit" name="edit" method="post" action="customer_update.php">
      <?php


include ("../../db/config.php");

$id=$_GET['cid'];
$sql="SELECT * FROM customers WHERE action=1 AND customer_id='$id' ";
$result=mysqli_query($myconnect,$sql);
while($row=mysqli_fetch_array($result))
{

$cid=$row['customer_id'];
$cfname=$row['customer_first_name'];
$clname=$row['customer_last_name'];
$cemail=$row['customer_email'];
$cage = $row['customer_age'];
$ccountry=$row['customer_coutry'];
$cpass=$row['customer_password'];





 
//echo ' <p> Id: <input type="number" name="id" value="'.$id.'"readonly> <br> Name:<input type="text"</p>';

}

?>
<table border="2" width="40%"> 
<tr><td> Id:</td><td><input type="number" name="id" value=<?= $cid; ?>"readonly></td></tr> 
<tr><td> First Name:</td><td><input type="text" name="fname" value="<?= $cfname; ?>"></td></tr> 
<tr><td> Last Name:</td><td><input type="text" name="lname" value="<?= $clname; ?>"></td></tr>
<tr><td> Email:</td><td><input type="email" name="email" value="<?= $cemail; ?>"readonly></td></tr> 
<tr><td> Age:</td><td><input type="number" name="age" value="<?= $cage; ?>"></td></tr> 
<tr><td> Country:</td><td><input type="text" name="country" value="<?= $ccountry; ?>"readonly></td></tr> 
<tr><td> password:</td><td><input type="text" name="password" value="<?= $cpass; ?>"></td></tr> 
</table>
      
          
<input type="submit" value="Update" onclick="return confirm()">
      
      </form>