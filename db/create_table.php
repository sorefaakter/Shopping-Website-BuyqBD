
<?php
include("config.php");


//----Customer information--
$customer_info="CREATE TABLE IF NOT EXISTS customers(
    customer_id INT(11) NOT NULL auto_increment,
    PRIMARY KEY (customer_id ),
    customer_first_name VARCHAR(25) NOT NULL,
    customer_last_name VARCHAR(25) NOT NULL,
    customer_email VARCHAR(50) NOT NULL,
    UNIQUE (customer_email),
    customer_age INT(3) NOT NULL,
    customer_coutry VARCHAR(25) NOT NULL,
    customer_password VARCHAR(15) NOT NULL,
    action INT(2) NOT NULL
)";
$cinfo=mysqli_query($myconnect,$customer_info);
    if($cinfo===TRUE)

    {
        echo '<p>Customer information table created</> <br>';
    }
else{
        echo "Customer information table not created " . mysqli_error($myconnect);
    }
$test=var_dump($cinfo);
echo $test;


//------- Product info-------------------

$tbl_product="CREATE TABLE IF NOT EXISTS product(
    p_id int NOT NULL auto_increment,
       PRIMARY KEY(p_id),
       p_name VARCHAR (50) NOT NULL,
      img_name VARCHAR(50) NOT NULL,
      img_path VARCHAR(50) NOT NULL ,
      img_type VARCHAR(5) NOT NULL, 
       quentiy int (50) NOT NULL,
       price int (20) NOT NULL,
       prodesc VARCHAR(500) NOT NULL
   
   )";
       $product= mysqli_query($myconnect,$tbl_product);
   
   if($product===TRUE)
       {
       echo "<br>Product table created ";
   }
       else {
       echo "product not table created  ";
   }
   


   //------- Admin info-------------------

$tbl_admin="CREATE TABLE IF NOT EXISTS admininfo(
    adm_id int NOT NULL auto_increment,
       PRIMARY KEY(adm_id),
       adm_name VARCHAR (50) NOT NULL,
       UNIQUE KEY (adm_name),
      adm_password VARCHAR (50) NOT NULL
   
   )";
       $admininfo= mysqli_query($myconnect,$tbl_admin);
   
   if($admininfo===TRUE)
       {
       echo "<br>Admin table created ";
   }
       else {
       echo "Admin not table created  ";
   }



   //------------order table--------------
$tbl_order="CREATE TABLE IF NOT EXISTS cu_order(
    or_id int  NOT NULL auto_increment,
       PRIMARY KEY(or_id),
       c_f_name VARCHAR (25) NOT NULL,
       c_l_name VARCHAR (25) NOT NULL,
       date DATETIME NOT NULL,
       o_email VARCHAR (50) NOT NULL,
       customer_id int   NOT NULL,
       p_id int  NOT NULL,
       quentiy int (11) NOT NULL,
       phn_number int (11) NOT NULL,
       address VARCHAR (200) NOT NULL,
       action INT(2) NOT NULL
      /* FOREIGN KEY(customer_id) REFERENCES customers (customer_id),
       FOREIGN KEY(p_id) REFERENCES product (p_id)
       */
      )";
       $order= mysqli_query($myconnect,$tbl_order);
   
   if($order===TRUE)
       {
       echo "<br>Order table created :) ";
   }
       else {
       echo " <br>Order table not created  :( ";
   }

   //----------order list-------------
$tbl_orderlist = "CREATE TABLE IF NOT EXISTS orderlist(

    or_id INT(10) NOT NULL auto_increment ,
    PRIMARY KEY(or_id),
    customer_id INT NOT NULL,
    date DATETIME NOT NULL,
    total INT(10) NOT NULL ,
    paid INT(10) NOT NULL,
    dues INT(10) NOT NULL
   /* FOREIGN KEY(customer_id) REFERENCES customers (customer_id) */
    )";


$query = mysqli_query($myconnect, $tbl_orderlist);

if($query===TRUE)
{
echo "<br>Order List table created :) ";
}
else {
echo " <br>Order list table not created  :( ";
}




?>