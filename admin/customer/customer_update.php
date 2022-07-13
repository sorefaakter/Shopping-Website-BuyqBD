<?php
include("../../db/config.php");

$id=$_POST['id'];
$cfname=$_POST['fname'];
$clname=$_POST['lname'];
$cemail=$_POST['email'];
$cage = $_POST['age'];
$ccountry=$_POST['country'];
$cpass=$_POST['password'];



$sql="UPDATE customers SET customer_first_name='$cfname', customer_last_name='$clname', customer_email='$cemail', customer_age='$cage', customer_coutry='$ccountry', customer_password='$cpass' WHERE customer_id='$id' ";
$datupdate=mysqli_query($myconnect,$sql);

if($datupdate===TRUE)
{

//echo header("location:../index.php");
echo "Successfully Updated Customer.";
}
else
{
 echo  "customer info  not added . mysqli_error($datupdate)";
}


?>