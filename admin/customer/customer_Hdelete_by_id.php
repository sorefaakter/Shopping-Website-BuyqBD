<?php
include("../db/config.php");
$sql=" SELECT * FROM customers";
$query=mysqli_query($myconnect,$sql);

echo'<center><table border="2px" width="95%" > <tr>
<td width="7%" >Customer ID</td>
<td width="10%" >Customer First Name</td>
<td width="10%" >Customer Last Name</td>
<td width="18%" >Customer Email</td>
<td width="7%" >Customer Age</td>
<td width="10%" >Customer Country</td>
<td width="10%" >Customer Password</td>
<td width="8%" >Action</td>
<td width="8%" >Action</td>

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
    
echo'<form method="post" action="customer_Hdelete_now.php" onclick="delete();"><center><table border="1px" width="95%" >
<tr>

<td width="7%">'.$cid.'</td> 
<td width="10%">'.$cfname.'</td>
<td width="10%">'.$clname.'</td>
<td width="18%">'.$cemail.'</td>
<td width="7%">'.$cage.'</td>
<td width="10%">'.$ccountry.'</td>
<td width="10%">'.$cpass.'</td> 
<td width="8%" ><a href="customer/customer_Hdelete_now.php? cid='.$cid.'" >&nbsp <p style="color:red;">Hard Delete</p></a></td>
<td width="8%" ><a href="#? cid='.$cid.'" >&nbsp <p style="color:red;">Soft Delete</p></a></td>
</tr>
</table></center></form>';





}

?>

