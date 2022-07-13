<?php
include("../db/config.php");
$f_name=$_POST['fname'];
$l_name=$_POST['lname'];
$o_date=$_POST['date'];
$oc_id=$_POST['cid'];
$op_id=$_POST['pid'];
$o_email=$_POST['email'];
$o_quentity=$_POST['quentity'];
$o_phn=$_POST['phn_number'];
$o_address=$_POST['address'];


$sql="INSERT INTO cu_order(c_f_name,c_l_name, date,customer_id, p_id, o_email, quentiy, phn_number, address) VALUES('$f_name', '$l_name','$o_date', '$oc_id','$op_id','$o_email' , '$o_quentity' ,'$o_phn','$o_address')";
$datainsert=mysqli_query($myconnect,$sql);
if($datainsert===TRUE)
{
    
    //echo header("location: ../view/signin.php");
    echo "Order Done!!";
  
}
else
{
 echo  " customer info  not added" . mysqli_error($myconnect);
}


?>
