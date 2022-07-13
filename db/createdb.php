<?php
$servername="localhost";
$username="root";
$password="";
// Create connection
$myconnect=mysqli_connect($servername, $username, $password);
// Check connection
if (!$myconnect) {
    die("Connection failed: " . mysqli_connect_error());
  }

$sql="CREATE DATABASE buyqbd";
$result=mysqli_query($myconnect,$sql);
    if($result===TRUE)
    {
        echo "Database Created";
    }
else
{
    echo "Database Not Created" . mysqli_error($myconnect);
}

?>