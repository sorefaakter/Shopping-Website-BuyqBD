<?php
$pid=$_GET['product_id'];
include_once("../db/config.php");

    $sql="SELECT * FROM product WHERE p_id='$pid' ";
    $product=mysqli_query($myconnect, $sql);
    while ($row=mysqli_fetch_array($product)) {
        $pid=$row['p_id'];
        $pname=$row['p_name'];
        $picpath=$row['img_path'];
        $quentity = $row['quentiy'];
        $price=$row['price'];
        $pdesc=$row['prodesc'];
    
        $discount= round($price-$price*.20);

        echo ''.$pname.'<br><img src="'.$picpath.' " width="100" height="100"><br> Regular Price: <s>'.$price.' TK</s> <br> Offer Price:'.$discount.'<br>
<a href="view_product.php">Back to Shop page</a><br> <br><a href="#">Add to cart</a> <br> <br><a href="product_order.php">Order Now</a>';

}
?>


