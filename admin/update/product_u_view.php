<?php
include("../db/config.php");
$sql=" SELECT * FROM product";
$query=mysqli_query($myconnect,$sql);
echo'<center><table border="2px" width="90%" > <tr>
<td width="15%" >Product ID</td>
<td width="15%" >Product Name</td>
<td width="15%" >Product Image</td>
<td width="8%" >Product Quentity</td>
<td width="8%" >Product Price</td>
<td width="15%" >Product Description</td>
<td width="10%" >Action</td>

</tr>
</table></center>';
while($row=mysqli_fetch_array($query))
{
$pid=$row['p_id'];
$pname=$row['p_name'];
$picpath=$row['img_path'];
$quentity = $row['quentiy'];
$price=$row['price'];
$pdesc=$row['prodesc'];

echo'<center><table border="2px" width="90%" >
<tr>
<td width="15%">'.$pid.'</td>
<td width="15%">'.$pname.'</td>
<td width="15%"><img src="../admin/'.$picpath.'" width="40%"height="40%"/></td>
<td width="8%">'.$quentity.'</td>
<td width="8%">'.$price.'</td>
<td width="15%">'.$pdesc.'</td>
<td width="10%" ><a href="update/product_Uview_by_id.php? pid='.$pid.'">&nbsp <b><p style="color:red;">Edit</p></b></a></td>
</tr>
</table></center>';

}

?>