<?php
include("../../db/config.php");
$pid=$_GET['pid'];
$sql=" SELECT * FROM product WHERE p_id=$pid";
$query=mysqli_query($myconnect,$sql);

echo'<center><table border="2px" width="90%" > <tr>
<td width="15%" >Product ID</td>
<td width="15%" >Product Name</td>
<td width="15%" >Product Image</td>
<td width="8%" >Product Quentity</td>
<td width="8%" >Product Price</td>
<td width="15%" >Product Description</td>
<td width="8%" >Action</td>
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
    

echo'<center>
<form method="post" action="product_update.php"><table border="1px" width="80%" >
<tr>
<td width="10%"><input  type="text" name="pid" value="'.$pid.'" /></td>
<td width=""><input type="text" name="name" value="'.$pname.'" /></td>
<td width=""><input type="text" name="picpath" value="'.$picpath.'" /></td>
<td width=""><input type="number"  name="quentity" value="'.$quentity.'" /></td>
<td width=""><input type="number"  name="price" value="'.$price.'" /></td>
<td width=""><textarea type="text" name="pdesc" >'.$pdesc.'</textarea></td>
<td width="" ><input type="submit" value="Update now" /></td>
</tr>
</table></form></center>';

}

?>

