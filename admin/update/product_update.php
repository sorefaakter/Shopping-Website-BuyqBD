<?php
$pid=$_POST['pid'];
$name=$_POST['name'];
$picpath=$_POST['picpath'];
$quentity = $_POST['quentity'];
$price=$_POST['price'];
$pdesc=$_POST['pdesc'];

include_once("../../db/config.php");
$sql="UPDATE product SET p_name='$name',img_path='$picpath', quentiy= '$$quentity',  price='$price',prodesc='$pdesc' WHERE p_id='$pid'";
$query = mysqli_query($myconnect, $sql);

if($query)
{
   header("location:../product_edit.php ? pid=$pid");
}
else{
    echo " Failed to Update product";
}
exit();
?>
