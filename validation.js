function form_validation()
{
    var fname = document.forms['signup']['f_name'].value;
    var lname = document.forms['signup']['l_name'].value;
    var Age = document.forms['signup']['age'].value;
    var Gender = document.forms['signup']['male'].value;
    var pass = document.forms['signup']['password'].value;
    var Agree = document.forms['signup']['agree'].value;
    var mail=document.forms['signup']['email'].value;



if (fname == ""){
    window.alert("First Name is Empty");
    
}else {
    var regex = /^[a-zA-Z\s]+$/;              
    if(regex.test(fname) === false) {
       window.alert("Invalid first name");
       
    } 

}

 if (lname == ""){
    window.alert("Last Name is Empty");
    
}else {
    var lregex = /^[a-zA-Z\s]+$/;              
    if(lregex.test(lname) === false) {
       window.alert("Invalid last name");
       
    } 
}

 if (Age == ""){
    window.alert("Age is Empty");
    
}else {
    var a_ge = /^[1-9]+$/;              
    if(a_ge.test(Age) === false) {
       window.alert("Invalid age");
       
    } 
}

if(mail == "") {
    window.alert("Empty mail");
} else {
    
    var m_regex = /^\S+@\S+\.\S+$/;
    if(m_regex.test(mail) === false) {
       window.alert("Please enter a valid email address");
       
    }
}

 if (Gender == ""){
    window.alert("Select Gender");
    
}

 if (pass == ""){
    window.alert("password feild is empty");
    
}

if (Agree == ""){
    window.alert("Fill the check box");
    
}

     return false;
}
