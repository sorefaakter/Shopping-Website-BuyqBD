<?php
$id=$_GET['oid'];
include("../../db/config.php");

$sql="DELETE FROM cu_order WHERE cu_order.or_id ='" . $id . "'";
$query=mysqli_query($myconnect,$sql);
//header("location:../product_delete.php");
if($query)
{
    echo "Order Hard Delete Successfully.";
}
else{
    echo "No Order Hard delete occur.";
}

?>