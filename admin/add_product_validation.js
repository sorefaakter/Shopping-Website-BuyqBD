function form_validation()
{
    var pname = document.forms['product']['pname'].value;
    var images = document.forms['product']['img'].value;
    var pprice = document.forms['product']['price'].value;
    var pquentity = document.forms['product']['quentity'].value;

if (pname == ""){
    window.alert("product Name is Empty");
    
}


/*
 if (images == ""){
    window.alert("Please upload image");
    
}else {
    var i_images = " #";              
    if (i_images.test(images) === false) {
       window.alert("Invalid image");
       
    } 
}
*/

if(pprice == "") {
    window.alert("Price firld is empty");
} else {
    
    var m_regex = /^[0-9]+$/;
    if(m_regex.test(pprice) === false) {
       window.alert("Please enter number");
       
    }
}

 if (pquentity == ""){
    window.alert("Please puts product quentity");
 } else {
    
    var q_regex = /^[0-9]+$/;
    if(q_regex.test(pquentity) === false) {
       window.alert("Please enter number");
       
    }
}
     return false;
}
