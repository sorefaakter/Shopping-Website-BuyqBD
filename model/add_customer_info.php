<?php
include("../db/config.php");
$f_name=$_POST['fname'];
$l_name=$_POST['lname'];
$c_email=$_POST['email'];
$c_age=$_POST['age'];
$c_country=$_POST['country'];
$pass=$_POST['password'];
//$passw=$_POST['password'];
//$pass = md5 ($passw);
$action="1";

$sql="INSERT INTO customers(customer_first_name,customer_last_name, customer_email, customer_age, customer_coutry, customer_password, action) VALUES('$f_name', '$l_name','$c_email', '$c_age' , '$c_country' ,'$pass','$action')";
$datainsert=mysqli_query($myconnect,$sql);
if($datainsert===TRUE)
{
    
    echo header("location: ../view/signin.php");
  
}
else
{
 echo  " customer info  not added" . mysqli_error($myconnect);
}


?>
