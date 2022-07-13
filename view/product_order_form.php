<?php
    
?>
<br>

<form id="order" name="order" method="post" action="../model/add_order_info.php">
    <table style="padding-left: 200px;">
    <tr> <td></td><td><marquee bahavior="scroll" direction="left"> Cash On Delivery**  </marquee> <br> <br></td> </tr>
    <tr><td></td> <td></td><td><b style="color: black;">First Name:</b><br> <br></td> <td><input type="text" id="fname" placeholder="First Name" name="fname" maxlength="50"> <br> <br></td> </tr>
    <tr> <td></td><td></td><td><b style="color: black;">Last Name:</b><br> <br></td> <td><input type="text" id="lname" placeholder="Last Name" name="lname" maxlength="50"> <br> <br></td> </tr>
    <tr> <td></td><td></td><td><b style="color: black;">Date:</b><br> <br></td> <td><input type="datetime-local" id="date" placeholder="date" name="date"> <br> <br></td> </tr>
    <tr> <td></td><td></td><td><b style="color: black;">Email:</b><br> <br></td> <td><input type="email" id="email" placeholder="E-mail" name="email" maxlength="25"> <br> <br></td> </tr>
    
<tr> <td></td> <td></td><td><b style="color: black;">Customer ID:</b><br> <br></td> <td><input type="number" id="p" name="cid" > <br> <br></td> </tr>
    <tr> <td></td> <td></td><td><b style="color: black;">Product ID:</b><br> <br></td> <td><input type="number" id="p"  name="pid" value="pid"> <br> <br></td> </tr>

    <tr> <td></td><td></td><td><b style="color: black;">Quentity</b><br> <br></td> <td><input type="number" id="quentity" placeholder="Quentity" name="quentity" maxlength="50"> <br> <br></td> </tr>
    <tr> <td></td> <td></td><td><b style="color: black;">Phone No:</b><br> <br></td> <td><input type="number" id="phn_no" placeholder="Mobile Number" name="phn_number" maxlength="11"> <br> <br></td> </tr>
    <tr> <td></td><td></td><td><b style="color: black;">Address:</b><br> <br></td> <td><input type="text" id="Address" placeholder="Address" name="address" > <br> <br></td> </tr>    


    
    
    <tr><td> </td> <td> </td><td><input type="submit" value="Submit"> 
        </td></tr>
    </table>


    </form>