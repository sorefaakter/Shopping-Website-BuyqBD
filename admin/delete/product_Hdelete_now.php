<?php
$id=$_GET['pid'];
include("../../db/config.php");

$sql="DELETE FROM product WHERE product.p_id ='" . $id . "'";
$query=mysqli_query($myconnect,$sql);
//header("location:../product_delete.php");
if($query)
{
    echo "Hard Delete Successfully.";
}
else{
    echo "No Hard delete occur.";
}

?>