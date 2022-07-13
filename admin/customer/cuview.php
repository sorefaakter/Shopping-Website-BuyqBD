<?php
include ("../db/config.php");

$sql="SELECT * FROM customers WHERE action=1";
$result=mysqli_query($myconnect,$sql);


echo '<table border="2px" width="100%"> 
<row> <th width="20%"> Customer Id </th><th width="20%">Customer First Name </th> <th width="20%">Customer Last Name </th><th width="20%"> Customer Email</th>  <th width="20%">Customer Age </th> <th width="20%">Customer Country </th> <th width="20%"> Customer Password</th> <th width="20%" colspan="3"> Action</th></row> 
';

while($row=mysqli_fetch_array($result))
{

$cid=$row['customer_id'];
$cfname=$row['customer_first_name'];
$clname=$row['customer_last_name'];
$cemail=$row['customer_email'];
$cage = $row['customer_age'];
$ccountry=$row['customer_coutry'];
$cpass=$row['customer_password'];



echo '<tr> <td>'.$cid.'</td>
<td>'.$cfname.'</td>
<td>'.$clname.'</td>
<td>'.$cemail.'</td>
<td>'.$cage.'</td>
<td>'.$ccountry.'</td>
<td>'.$cpass.'</td>
<td><a href="customer/edit.php? cid='.$cid.'">Edit</a></td>
<td><a href="customer/customer_Hdelete_now.php? cid='.$cid.'" onclick="return confirm()">HDelete</a></td>
<td><a href="customer/customer_soft_delete.php? cid='.$cid.'" onclick="return confirm()">SoftDelete</a></td>

</tr>  ';

}



echo '</table>'


?>