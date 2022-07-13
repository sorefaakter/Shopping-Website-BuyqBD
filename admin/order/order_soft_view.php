<?php
include("../../db/config.php");
$sql=" SELECT * FROM cu_order";
$query=mysqli_query($myconnect,$sql);
echo'<center><table border="8px" width="95%" > <tr>
<td width="8%" >Order ID</td>
<td width="10%" >Customer First Name</td>
<td width="10%" >Customer Last Name</td>
<td width="8%" >Date Time</td>
<td width="15%" >Email</td>
<td width="5%" >Customer ID</td>
<td width="5%" >Product ID</td>
<td width="5%" >Quentity</td>
<td width="8%" >Phone No</td>
<td width="8%" >Address</td>
<td width="8%" >Action</td>
<td width="8%" >Action</td>

</tr>
</table></center>';
while($row=mysqli_fetch_array($query))
{

$oid=$row['or_id'];
$cfn=$row['c_f_name'];
$cln=$row['c_l_name'];
$date = $row['date'];
$oemil=$row['o_email'];
$cid=$row['customer_id'];
$pid=$row['p_id'];
$quentity=$row['quentiy'];
$phn=$row['phn_number'];
$address=$row['address'];

echo'<form method="post" action="order_Sdelete_now.php" onclick="delete();"><center><table border="1px" width="95%" >
<tr>

<td width="8%">'.$oid.'</td>
<td width="10%">'.$cfn.'</td>
<td width="10%">'.$cln.'</td>
<td width="8%">'.$date.'</td>
<td width="15%">'.$oemil.'</td>
<td width="5%">'.$cid.'</td>
<td width="5%">'.$pid.'</td>
<td width="5%">'.$quentity.'</td>
<td width="8%">'.$phn.'</td>
<td width="8%">'.$address.'</td>
<td width="8%" ><a href="../delete/order_Sdelete_now.php?oid='.$oid.'" >&nbsp <p style="color:red;">Soft Delete</p></a></td>
</tr>
</table></center></form>';





}

?>

