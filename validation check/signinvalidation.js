function signin_validation()
{
    var pass = document.forms['signup']['password'].value;
    var mail=document.forms['signup']['email'].value;


if(mail == "") {
    window.alert("Empty mail");
} else {
    
    var m_regex = /^\S+@\S+\.\S+$/;
    if(m_regex.test(mail) === false) {
       window.alert("Please enter a valid email address");
       
    }
}

 if (pass == ""){
    window.alert("password feild is empty");
    
}

     return false;
}
