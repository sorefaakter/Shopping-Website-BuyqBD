<?php
include("../db/config.php");
$c_email=$_POST['email'];
$pass=$_POST['password'];
//$pass = md5($password);
//$encode=md5($pass);


//to prevent from mysqli injection  
$username = stripcslashes($c_email);  
$password = stripcslashes($pass);  
$username = mysqli_real_escape_string($myconnect, $c_email);  
$password = mysqli_real_escape_string($myconnect, $pass);  


$sql= "SELECT * FROM customers WHERE customer_email = '$c_email' and customer_password ='$pass'";
$result=mysqli_query($myconnect,$sql);
$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
if($count > 0)
{
header("location:../view/view_product.php"); 
}
else
  {
   echo '<p> user name or password wrong <a href="../view/signin.php">Please try again</a></p>';
   

}
?>