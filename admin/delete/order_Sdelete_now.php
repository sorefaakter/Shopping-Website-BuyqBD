<?php
$id=$_GET['oid'];
include("../../db/config.php");


$sodeletesql="UPDATE cu_order SET action=1 WHERE or_id='$id' ";
 
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