<?php
session_start();
unset($_SESSION["customer_id"]);
unset($_SESSION["customer_email"]);
header("Location:../view/signin.php");
//echo "User Successfully Logout.";
?>