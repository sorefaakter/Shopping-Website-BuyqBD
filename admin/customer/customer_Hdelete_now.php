<?php
$id=$_GET['cid'];
include("../../db/config.php");

$sql="DELETE FROM customers WHERE customers.customer_id ='" . $id . "'";
$query=mysqli_query($myconnect,$sql);
//header("location:../product_delete.php");
if($query)
{
    echo "Hard Delete Successfully (Customer).";
}
else{
    echo "No Hard delete occur (Customer).";
}

?>