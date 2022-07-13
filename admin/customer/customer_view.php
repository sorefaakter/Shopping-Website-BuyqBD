<?php
include("../db/config.php");
$sql=" SELECT * FROM customers";
$query=mysqli_query($myconnect,$sql);
echo'<center><table border="4px" width="95%" > <tr>
<td width="15%" >Customer ID</td>
<td width="15%" >Customer First Name</td>
<td width="15%" >Customer Last Name</td>
<td width="25%" >Customer Email</td>
<td width="8%" >Customer Age</td>
<td width="15%" >Customer Country</td>
<td width="15%" >Customer Password</td>


</tr>
</table></center>';
while($row=mysqli_fetch_array($query))
{
$cid=$row['customer_id'];
$cfname=$row['customer_first_name'];
$clname=$row['customer_last_name'];
$cemail=$row['customer_email'];
$cage = $row['customer_age'];
$ccountry=$row['customer_coutry'];
$cpass=$row['customer_password'];

echo'<center><table border="2px" width="95%" >
<tr> 
<td width="15%">'.$cid.'</td> 
<td width="15%">'.$cfname.'</td>
<td width="15%">'.$clname.'</td>
<td width="25%">'.$cemail.'</td>
<td width="8%">'.$cage.'</td>
<td width="15%">'.$ccountry.'</td>
<td width="15%">'.$cpass.'</td> 
</tr>
</table></center>';

}

?>