<?php
session_start();
unset($_SESSION["adm_id"]);
unset($_SESSION["adm_name"]);
header("Location:admin_login.php");
//echo "Admin Successfully Logout.";
?>