<?php
include ("../db/config.php");


//upload product into image folder  

if(isset($_POST['btn_upload']))
{
    $filetmp = $_FILES["img"]["tmp_name"];
    $filename = $_FILES["img"]["name"];
    $filetype = $_FILES["img"]["type"];
    $filepath = "../img/".$filename;
    
    move_uploaded_file($filetmp,$filepath);
    
    
}

//product insert to the database 

$pname=$_POST['pname'];
$pquentity=$_POST['quentity'];
$pprice=$_POST['price'];
$prodesc=$_POST['pdesc'];
$sql="INSERT INTO product(p_name,img_name,img_path,img_type,quentiy,price, prodesc) VALUES('$pname','$filename','$filepath','$filetype','$pquentity','$pprice','$prodesc')";
$result=mysqli_query($myconnect,$sql);
//header("location:../index.php"); 
if($result===TRUE)
{
    
    echo "Product stored successfully into database";
  
}
else
{
 echo  " Product info  not added to database" . mysqli_error($myconnect);
}



?>


