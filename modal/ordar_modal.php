<?php
?>

     <!-- Button to Open the Modal -->
     <p style="text-align:center;">  Not a member yet? <button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal">
            <b style="color:crimson;">  SignUp  </b>
          </button> </p>
          
<!-- The Modal -->
<div class="modal" id="myModal">
              <div class="modal-dialog">
              <div class="modal-content">
              
                  <!-- Modal Header -->
                  <div class="modal-header">
                  <h4 class="modal-title">SignUp</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  
                  <!-- Modal body -->
                  <div class="modal-body bg-info">
                  
                    <p style="text-align: center;"> <img  src="../images/sign-up.png"  alt="Logo" class="rounded" style=" width:100px; height:100px;"> </p>

                      <form id="signup" name="signup" method="post" action="../model/add_customer_info.php" onsubmit="return form_validation()">
                          <div class="form-group">
                          <label for="fusr">First Name:</label>
                          <input type="text" class="form-control" id="f_name" placeholder="first name" name="fname" maxlength="25">
                          </div>

                          <div class="form-group">
                              <label for="lusr">Last Name:</label>
                              <input type="text" class="form-control" id="l_name" placeholder="last name" name="lname"maxlength="25">
                              </div> 
                              <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="email" name="email">
                              </div> 
                            <div class="form-group">
                              <label for="age">Age:</label>
                              <input type="number" class="form-control" id="age" placeholder="Age" name="age" maxlength="3">
                            </div> 

                            

                            <div class="form-group">
                              <label for="country">Country:</label>
                              <input type="text" class="form-control" id="country" value="Bangladesh" name="country" readonly>
                            </div>

                            <div class="form-group">
                              <label for="pwd">Password:</label>
                              <input type="password" class="form-control" id="password" placeholder="passsword" minlength="6" maxlength="15" name="password">
                              </div>

              

                            <div class="form-group">
                              <label for="gender">Gender:</label>
                              <input type="radio" id="male" > <label for="male">male</label>
                              <input type="radio" id="female" > <label for="female">female</label>
                              <input type="radio" id="other" > <label for="other">other</label>
                            </div>

                            
                          <div class="form-group">
                            Agree: <input type="checkbox" id="agree" name="agree">
                          <label for="agree"> yes!</label>
                         </div>
                          <button type="submit" class="btn btn-primary" onclick="return confirm()">Submit</button> 
                          
                          <input type="reset" value="Reset">
                      </form>




                  </div>
                  
                  <!-- Modal footer -->
                  <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Exit</button>
                  </div>
                  
              </div>
              </div>
          </div>



