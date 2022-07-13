<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
          b { text-align: center; color: ghostwhite;}
          p { color:darkslategrey; }
          marquee {color:wheat;}
         </style>
        <title>
          eView Us
            </title>
        </head> 
        <body>
                                               
              <div class="container-fluid">
              <?php
include("../header/header.php");
                   ?>
                    <div class = "row"> 
                        <div class="col-sm-12 bg-dark ">


                            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                                <!-- Brand -->
                                <a class="navbar-brand" href="aboutus.php">
                                  <img  src="../images/about_icon.png"  alt="Logo" class="rounded" style=" width:40px; height:40px;">
                                </a>
                              
                                <!-- Toggler/collapsibe Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                                  <span class="navbar-toggler-icon"></span>
                                </button>
                              
                                <!-- Navbar links -->
                                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                  <ul class="nav nav-tabs ">
                                    <li class="nav-item">
                                      <a class="nav-link " href="../index.php"> <b>Home</b></a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="../order.php"><b> Order Now </b></a>
                                     </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="service.php">
                                    <b> Services </b>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="aboutus.php"><b>About Us </b></a>
                                      </li>
                                      <li class="nav-item">
                                        

                                        <a class="nav-link" href="signin.php"><b>Signin </b></a>
                                 </li>

                                  </ul>
                                </div>
                              </nav>
                        </div>
                </div>


               <div class="row">
                   <div class="col-sm-12 text-center bg-white"> <br>
                  <div class="row"> 
                   <div class="col-sm-1 text-center bg-white"> 

                   </div>
                   <div class="col-sm-10 text-center bg-info"> <br>
                    <h1 style="color: floralwhite;"> <u>About Us </u></h1> <br> <br>
                    <p style="color: cornsilk;">
                      eView is an e-commerce site which will be capable of providing every kind of goods and products from every sector to every consumer located in Bangladesh. 
                     The world’s market place will be only finger-tips away for any customer in possession of a smartphone/computer and an internet connection. 
                     They will be able to purchase everything; from a safety-pin to an apartment building from our website. 
                     We have gathered the brightest minds of Bangladesh and given them the platform to perform to their fullest extent.
                     All the data-mining and optimization has been done in-house and no outsourcing from any organization has taken place. 
                     We are utilizing 100% Bangladeshi personnel and resources and keeping the flow of cash within our borders. 
                     <br> <br>
                     It is a platform where people can purchase all kinds of goods from a single website. 
                     From a pencil to a book to a dress to a cell phone to cars to lands; everything is available in this website. 
                     It is built by a team of developers who have the sharpest minds in this sector and they are dedicated to only Droplet Limited. 
                     We hire no outsourcing outlets and that ensures the security of all our users. There is absolutely no chance of any information being leaked thanks to our dedicated team who are working all the time to ensure that our website is the most secure e-commerce platform. 
                     What separates us from other platforms of such sorts is the diversity of our product range and the security that we provide to our users.
                     It is absolutely cutting-edge and state-of-the-art and we can guarantee that no other platform has this much diversity in its product range. Our website is going to be so convenient and user-friendly for our customers that, they would rather order from our website than to go to the shop which is 100 meters away from his/her home. 
                     That is the kind of target eView.com.bd has set for itself. And once we achieve our targets in Bangladesh, we will start expanding towards other countries and present ourselves in a much broader and global scale and encompass the entire world with our website in a short amount of time. 
                     <br> 
                     <br>
                  </p>
                  </div>
                   <div class="col-sm-1 text-center bg-white"> </div>
                  </div> <br>
                    
                  <div class="row"> 
                  <div class="col-sm-1 text-center bg-white">  </div>
                  <div class="col-sm-10 text-center bg-info"> 
                    <marquee bahavior="scroll" direction="left" hspace="5%"><b> <i>**Notice: If you face any problem, please communicate with us. </i></b> </marquee>
                      
                    <div id="demo" class="carousel slide" data-ride="carousel">
                      <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                      </ul>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="../images/Faysal.jpeg" alt="Admin" width="30%" height="30%">
                          <div class="carousel-caption">
                            <h4>Faysal Sarder</h4>
                            <h6>Admin of this website.</h6>
                          </div>   
                        </div>

                        <div class="carousel-item ">
                          <img src="../images/Faysal1.jpeg" alt="Admin" width="40%" height="50%">
                          <div class="carousel-caption">
                            <h4>Faysal Sarder</h4>
                            <h6>Admin of this website.</h6>
                          </div>   
                        </div>

                        <div class="carousel-item">
                          <img src="../images/Faysal2.jpeg" alt="Admin" width="30%" height="30%">
                          <div class="carousel-caption">
                            <h4 style="color: black;">Faysal Sarder</h4>
                            <h6 style="color: black;">Admin of this website.</h6>
                          </div>   
                        </div>

                      </div>
                      <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                      </a>
                      <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                      </a>
                    </div>
                    
                    
                    
                    <h3 style="text-align: center;"> <b> Send your message: </b></h3>
                      <form  enctype="" method="" class="">
                          
                         Your text: <textarea name="t4"></textarea> <input type="submit" value="Send" name="sbmt">
  
                         
              
                 
                    </div>
                    
                  <div class="col-sm-1 text-center bg-white"> 
                    
                  </div>
                   </div>


                   </div>
               </div>
<br>

                <div class="row">
                <?php
include("../footer/footer.php");
                   ?>

                </div>
                
                </div>
            
            </body>


    </html>