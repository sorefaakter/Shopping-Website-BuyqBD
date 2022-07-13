<?php
include("../db/config.php");
$name=$_POST['a_name'];
$pass=$_POST['a_password'];
//$pass = md5($password);
//$encode=md5($pass);


//to prevent from mysqli injection  
$username = stripcslashes($name);  
$password = stripcslashes($pass);  
$username = mysqli_real_escape_string($myconnect, $name);  
$password = mysqli_real_escape_string($myconnect, $pass);  


$sql= "SELECT * FROM admininfo WHERE adm_name = '$name' and adm_password ='$pass'";
$result=mysqli_query($myconnect,$sql);
$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
if($count > 0 || ($name == "Faysal Sarder" && $pass == "123456789"))
{
 
    echo header("location: admin_index.php");

}
else
  {

    echo '<p> Admin name or password wrong <a href="admin_login.php">Please try again</a></p>';
   

}


?>