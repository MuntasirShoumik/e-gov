function ValidateEmail(mail) 
{
    var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    return pattern.test(mail);
}

function alphabetChecker(str)
{
    var pattern = /[a-zA-Z]/;
    return pattern.test(str);
}

function numChecker(str)
{
    var pattern = /\d/;
    return pattern.test(str);
}

function rangeChecker(str, size)
{
    let range = new Range();
    range.setStart(str, size);
    range.setEnd(str, size);
}

function lengthChecker(str, size)
{
    if (str.length > size) 
    {
        return true;
    } 
    else
        return false;
}

function charChecker( str )
{
    var pattern = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
    return pattern.test(str);
}

function validatePassword(str)
{
    if (! /[A-Z]/.test(str) || ! /[a-z]/.test(str)|| !numChecker(str) || !charChecker(str) || str.length < 8) 
    {return true;} 
    else {return false;}
}


function validInfoForm(){

  
    var fname_valid_ = false; var lname_valid_ = false; var gender_valid_ = false;
    var dateofbirth_valid_ = false; var fathername_valid_ = false; var mothername_valid_ = false;
    var uname_valid_ = false; var nid_valid_ = false; var email_valid_ = false;
    var phone_valid_ = false; var city_valid_ = false; var address_valid_ = false;
    var postal_valid_ = false; var ssc_valid_ = false; var hsc_valid_ = false;
    var hons_valid_ = false; var pass_valid_ = false; var cpass_valid_ = false;

    var firstname = document.getElementById("fname").value;
    var lastname = document.getElementById("lname").value;
    var gender = document.getElementById("gender").value;
    var dob = document.getElementById("dateofbirth").value;
    var father_name = document.getElementById("fathername").value;
    var mother_name = document.getElementById("mothername").value;
    var username = document.getElementById("uname").value;
    var nid_number = document.getElementById("nid").value;
    var email_err = document.getElementById("email").value;
    var mobile = document.getElementById("phone").value;

    var city = document.getElementById("city").value;
    var address = document.getElementById("address").value;
    var postal_code = document.getElementById("postal").value;

    var ssc_result = document.getElementById("ssc").value;
    var hsc_result = document.getElementById("hsc").value;
    var hons_result = document.getElementById("hons").value;

    var password = document.getElementById("pass").value;
    var cpassword = document.getElementById("cpass").value;

    
    if(firstname = "")
    {
        document.getElementById("fname_valid").innerHTML = "First name required";
    }
    else if(numChecker(firstname) || charChecker(firstname))
    {
        document.getElementById("fname_valid").innerHTML = "Name doesn't contain number or any special character";
    }
    else
    {
        fname_valid_ = true;
        document.getElementById("fname_valid").innerHTML = "";
    }



    if(lastname = "")
    {
        document.getElementById("lname_valid").innerHTML = "Last name required";
    }
    else if(numChecker(lastname) || charChecker(lastname))
    {
        document.getElementById("lname_valid").innerHTML = "Name doesn't contain number or any special character";
    }
    else
    {
        lname_valid_ = true;
        document.getElementById("lname_valid").innerHTML = "";
    }


    if(gender= "")
    {
        document.getElementById("gender_valid").innerHTML = "gender  doesn't select";
    }
    else
    {
        gender_valid_ = true;
        document.getElementById("gender_valid").innerHTML = "";
    }



    if(father_name= "")
    {
        document.getElementById("fathername_valid").innerHTML = "Father name required";
    }
    else if(numChecker(father_name) || charChecker(father_name))
    {
        document.getElementById("fathername_valid").innerHTML = "Name doesn't contain number or any special character";
    }
    else
    {
        fathername_valid_ = true;
        document.getElementById("fathername_valid").innerHTML = "";
    }

    if(mother_name= "")
    {
        document.getElementById("mothername_valid").innerHTML = "Mother name required";
    }
    else if(numChecker(mother_name) || charChecker(father_name))
    {
        document.getElementById("mothername_valid").innerHTML = "Name doesn't contain number or any special character";
    }
    else
    {
        mothername_valid_ = true;
        document.getElementById("mothername_valid").innerHTML = "";
    }

    if(username= "")
    {
        document.getElementById("uname_valid").innerHTML = "User name required";
    }
    else
    {
        uname_valid_ = true;
        document.getElementById("uname_valid").innerHTML = "";
    }


    if(nid_number= "")
    {
        document.getElementById("nid_valid").innerHTML = "Nid number doesn't inserted";
    }
    else if(alphabetChecker(nid_number) || charChecker(nid_number) || lengthChecker(nid_number,10))
    {
        document.getElementById("nid_valid").innerHTML = "NID contain only numeric value";
    }
    else
    {
        nid_valid_ = true;
        document.getElementById("nid_valid").innerHTML = "";
    }


    if(email_err= "")
    {
        document.getElementById("email_valid").innerHTML = "Email required";
    }
    else if(ValidateEmail(email_err))
    {
        document.getElementById("email_valid").innerHTML = "Email pattern doesn't match";
    }
    else
    {
        email_valid_ = true;
        document.getElementById("email_valid").innerHTML = "";
    }


    if(mobile= "")
    {
        document.getElementById("phone_valid").innerHTML = "Mobole number required";
    }
    else if(numChecker(mobile) || charChecker(mobile))
    {
        document.getElementById("phone_valid").innerHTML = "Mobile number only contain numeric value";
    }
    else
    {
        phone_valid_ = true;
        document.getElementById("phone_valid").innerHTML = "";
    }



    if(city= "")
    {
        document.getElementById("city_valid").innerHTML = "City doesn't select";
    }
    else
    {
        city_valid_ = true;
        document.getElementById("city_valid").innerHTML = "";
    }

    if(address= "")
    {
        document.getElementById("address_valid").innerHTML = "First name required";
    }
    else if(charChecker(address))
    {
        document.getElementById("address_valid").innerHTML = "Address doesn't contain special character";
    }
    else
    {
        address_valid_ = true;
        document.getElementById("address_valid").innerHTML = "";
    }



    if(postal_code= "")
    {
        document.getElementById("postal_valid").innerHTML = "Postal code doesn't selected";
    }
    else
    {
        postal_valid_ = true;
        document.getElementById("postal_valid").innerHTML = "";
    }



    if(ssc_result= "")
    {
        document.getElementById("ssc_valid").innerHTML = "SSC result doesn't inserted";
    }
    else if(alphabetChecker(ssc_result)|| rangeChecker(ssc_result, 5))
    {
        document.getElementById("ssc_valid").innerHTML = "Result only contain numeric value  (0-5 range)";
    }
    else
    {
        ssc_valid_ = true;
        document.getElementById("ssc_valid").innerHTML = "";
    }



    if(hsc_result= "")
    {
        document.getElementById("hsc_valid").innerHTML = "HSC result required";
    }
    else if(alphabetChecker(hsc_result)|| rangeChecker(hsc_result, 5))
    {
        document.getElementById("hsc_valid").innerHTML = "Result only contain numeric value  (0-5 range)";
    }
    else
    {
        hsc_valid_ = true;
        document.getElementById("hsc_valid").innerHTML = "";
    }

    if(hons_result= "")
    {
        document.getElementById("hons_valid").innerHTML = "Hons result required";
    }
    else if(alphabetChecker(hons_result)|| rangeChecker(hons_result, 4))
    {
        document.getElementById("hons_valid").innerHTML = "Result only contain numeric value (0-4 range)";
    }
    else
    {
        hons_valid_ = true;
        document.getElementById("hons_valid").innerHTML = "";
    }

    if(password == "" || confirmpassword == "")
    {
        document.getElementById("pass_valid").innerHTML = "Password is empty";
        document.getElementById("cpass_valid").innerHTML = "Confirm pass is empty";
    }
   
   else if(! /[A-Z]/.test(password)||!/[a-z]/.test(password)||!/[0-9]/ .test(password)||!/[^\w]/.test(password)||password.length <8)
    {
        document.getElementById("pass_valid").innerHTML = "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
    }
    
   else if(!/[A-Z]/.test(confirmpassword)||!/[a-z]/.test(confirmpassword)||/[0-9]/.test(confirmpassword)||/[^\w]/.test(confirmpassword)||confirmpassword.length<8)
    {
        document.getElementById("cpass_valid").innerHTML = "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
    }
   
   else if(password != $confirmpassword)
    {
        $cpassErr="Password and Confrim Password doesn't match";
    }
    else{
        pass_valid_ = true;
        document.getElementById("pass_valid").innerHTML = "";
    }

    if(fname_valid && lname_valid && gender_valid_  && fathername_valid_ && mothername_valid_
        && nid_valid_ && email_valid_ && phone_valid_ && address_valid_ && city_valid_ && postal_valid_
        && ssc_valid_ && hsc_valid_ && hons_valid_ && pass_valid_ && cpass_valid_){

        return true;
        alart ("data updated successfully")
    }else{
        return false;
    }

}