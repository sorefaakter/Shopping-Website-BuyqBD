<?php
$servername="localhost";
$username="root";
$password="";
$dbname="buyqbd";
// Create connection
$myconnect=mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$myconnect) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>