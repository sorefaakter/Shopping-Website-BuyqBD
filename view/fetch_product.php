<?php

include_once("../db/config.php");

$sql="SELECT * FROM product";
$product=mysqli_query($myconnect,$sql);
while($row=mysqli_fetch_array($product))     
{

$pid=$row['p_id'];
$pname=$row['p_name'];
$picpath=$row['img_path'];
$quentity = $row['quentiy'];
$price=$row['price'];
$pdesc=$row['prodesc'];


$discount= round($price-$price*.20);

echo ' <p style="color:black">'.$pname.' <br><a href="../img/'.$picpath.'" target="_blank"><img src="../img/'.$picpath.' " width="100" height="100"></a><br> Regular Price: <s>'.$price.' Tk</s>
<br>Offer Price:'.$discount.' Tk <br>  <a href="fetch_one_product.php? product_id='.$pid.'">Read more.</a><br> </p>';

}

?>
