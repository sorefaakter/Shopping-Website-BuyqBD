<?php
include("../../db/config.php");
$id=$_GET['cid'];

$sodeletesql="UPDATE customers SET action=0 WHERE customer_id='$id' ";
 
$deleteresult=mysqli_query($myconnect,$sodeletesql);
if($deleteresult===TRUE)
{
//header("location:../index.php");
echo "Successfully Deleted (Soft)";
}
else
{
echo("data not in the database (soft)");
}



?>