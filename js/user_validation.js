
function checkSpacialChar( str )
{
    var pattern = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
     return pattern.test(str);
      
}


function checkNum(str)
{
    var pattern = /\d/;

    return pattern.test(str);
}

function checkLength(str, size)
{
    if (str.length > size) {
        return true;
    } else
        return false;
}

function checkAlphabet(str)
{
    var pattern = /[a-zA-Z]/;
    return pattern.test(str);
    
}


function checkOperator(str)
{

    var flag = false;
    var opr = ['3', '7', '9', '8', '5', '6'];
    opr.forEach(function (item){
        if(str[2] == item){
            flag = true;
        }
    })

    return flag;
}

function ValidateEmail(mail) 
{
    var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    return pattern.test(mail);
}


function validatePassword(str)
{

    if (! /[A-Z]/.test(str) || ! /[a-z]/.test(str)|| !checkNum(str) || ! checkSpacialChar(str) || str.length < 8) {
        return true;
    } else {
        return false;
    }
}

function validInfoForm(){
   

    
    var name_valid = false;
    var fatherName_valid = true;
    var motherName_valid = true;
    var dob_valid = false;
    var nid_valid = false;
    var gender_valid = false;

    var name = document.getElementById("user_name").value;
    var father = document.getElementById("Father_name").value;
    var mother = document.getElementById("Mother_name").value;
    var dob = document.getElementById("birthday").value;
    var nid = document.getElementById("NID_number").value;
    var gender = document.getElementById("gender").value;

if(name == ""){
    document.getElementById("name_err").innerHTML = "Name is requered";
    
}else if( checkSpacialChar(name) || checkNum(name) || checkLength(name, 20) ){
    document.getElementById("name_err").innerHTML = "A name can not contain any number or spacial character and have to be less then 20 character";
    
}else{
    name_valid = true;
    document.getElementById("name_err").innerHTML = "";
}


if (checkNum(father) || checkSpacialChar(father) || checkLength(father, 20)) {

    document.getElementById("fathername_err").innerHTML = "A name can not contain any number or spacial character and have to be less then 20 character";
    fatherName_valid = false;
}

if (checkNum(mother) || checkSpacialChar(mother) || checkLength(mother, 20)) {

    document.getElementById("mothername_err").innerHTML = "A name can not contain any number or spacial character and have to be less then 20 character";
    motherName_valid = false;
}

if(dob){
    dob_valid = true;
}else{
    document.getElementById("dob_err").innerHTML = "Birth date requerd";
}


if (!nid) {
    document.getElementById("nid_err").innerHTML =  "NID is requerd";
} else if (checkAlphabet(nid)  || checkSpacialChar(nid) ||  nid.length != 10) {
    document.getElementById("nid_err").innerHTML = "NID can not contain alphabet or spacial character and length must be 10";
} else {
    nid_valid = true;
}


if (gender) {
    gender_valid = true;
} else {
    document.getElementById("gender_err").innerHTML = "gender not chossen";
}


if(name_valid && fatherName_valid && motherName_valid && dob_valid && nid_valid && gender_valid){
    return true;
}else{
    return false;
}


}


function validContect(){

   
   var phone_valid = false;
   var email_valid = true;
   var divi_valid = false;
   var city_valid = false;
   var address_valid = false;

   var phoneNumber = document.getElementById('mobile_number').value;
   var email = document.getElementById('email').value;
   var division = document.getElementById('select_division').value;
   var city = document.getElementById('city').value;
   var address = document.getElementById('address').value;


    if (phoneNumber == "") {
        document.getElementById('mobile_number_err').innerHTML= "Mobile number is requerd";
    } else if (checkAlphabet(phoneNumber) || checkSpacialChar(phoneNumber) || phoneNumber.length != 11) {
        document.getElementById('mobile_number_err').innerHTML = "Phone number can not contain alphabet or spacial character and must be 11 digit";
    } else if (!checkOperator(phoneNumber)) {
        document.getElementById('mobile_number_err').innerHTML = "Invalid operator";
    } else {
        document.getElementById('mobile_number_err').innerHTML = "";
        phone_valid = true;
        
    }

    if(email){

        if (! ValidateEmail(email)) {
            document.getElementById('email_err').innerHTML = "email is not valid";
            email_valid = false;
        }else{
            document.getElementById('email_err').innerHTML = "";
        }
    }    
   


    if (division) {

        document.getElementById('divi_err').innerHTML = "";
        divi_valid = true;
    } else {
        document.getElementById('divi_err').innerHTML = "Division requerd";
    }



    if (! city) {
        document.getElementById('city_err').innerHTML = "city is requerd";
    } else {
        city_valid = true;
        document.getElementById('city_err').innerHTML = "";
    }



    if (! address) {
        document.getElementById('address_err').innerHTML = "address is requerd";
    } else {

        address_valid = true;
        document.getElementById('address_err').innerHTML = "";
    }

    

    if (city_valid && divi_valid && email_valid && phone_valid && address_valid) {
        
        return true;
    }else{
        
        return false;
        
    }

    

}


function validOthers(){

    password = document.getElementById('password').value;
    confirm_password = document.getElementById('confirm_password').value;
    
    pass_valid = false;
    conferm_valid = false;
   

    
    if (! password) {

        document.getElementById('password_err').innerHTML =  "password is not set";
    } else if (validatePassword(password)) {
        document.getElementById('password_err').innerHTML =  "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
    } else {

        pass_valid = true;
        document.getElementById('password_err').innerHTML = "";
    }

    if (! confirm_password) {

        document.getElementById('conferm_err').innerHTML =  "retype your password";
    } else if (confirm_password != password) {
        document.getElementById('conferm_err').innerHTML = "password dose not match";
    } else {    
        conferm_valid = true;
        document.getElementById('conferm_err').innerHTML = "";
    }

    

    if(pass_valid && conferm_valid){
        return true;
    }else{
        return false;
    }
}