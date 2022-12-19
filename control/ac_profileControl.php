<?php

include("../model/db.php");


$fname = "";
$lname = "";
$gender = "";
$fathername= "";
$mothername = "";
$address= "";
$city= "";
$postal = "";
$email = "";
$phone =  "";
$ssc = "";
$hsc =  "";
$hons=  "";
$cv= "";
$pass= "";
$img= "";

$mydb = new AC_DB();
$connobj = $mydb->openConn();

session_start();

$result = $mydb->CheckUser($connobj, "accountant", $_SESSION["nid"], $_SESSION["password"]);

foreach ($result as $row) {
    $fname = $row['fname'];
    $lname = $row['lname'];
    $gender = $row['gender'];
    $dateofbirth = $row['dateofbirth'];
    $father = $row['fathername'];
    $mother = $row['mothername'];
    $uname = $row['uname'];
    $nid = $row['nid'];
    $address = $row['address'];
    $city = $row['city'];
    $postal = $row['postal'];
    $email = $row['email'];
    $phone = $row['phone'];
    $ssc = $row['ssc'];
    $hsc = $row['hsc'];
    $hons = $row['hons'];
    $cv = $row['cv'];
    $pass = $row['pass'];
    $img = $row['img'];


}

$mydb->CloseCon($connobj);

// gendar radio button

$isMale = "";
$isFemale = "";

if ($gender == "male") {
    $isMale = "checked";
} else {
    $isFemale = "checked";
}

// city drop down 

$DHAKA = "";
$CHATTOGRAM = "";
$KHULNA = "";
$SYLHET = "";
$RAJSHAHI = "";
$THAKURGAON = "";
$COXS_BAZAR = "";
$BARISHAL = "";
$RANGPUR = "";
$FENI = "";


switch ($city) {
    case 'DHAKA':
        $DHAKA = "selected";
        break;
    case 'CHATTOGRAM':
        $CHATTOGRAM = "selected";
        break;
    case 'KHULNA':
        $KHULNA = "selected";
        break;
    case 'SYLHET':
        $SYLHET = "selected";
        break;
    case 'RAJSHAHI':
        $RAJSHAHI = "selected";
        break;
    case 'THAKURGAON':
        $THAKURGAON = "selected";
        break;
    case 'COXS_BAZAR':
        $COXS_BAZAR = "selected";
        break;
    case 'BARISHAL':
        $BARISHAL = "selected";
    case 'RANGPUR':
        $RANGPUR = "selected";
    case 'FENI':
        $FENI = "selected";

        break;
    default:
}

//postal code drop down

switch ($postal) {
    case '1211':
        $c1 = "selected";
        break;
    case '2222':
        $c2 = "selected";
        break;
    case '5342':
        $c3 = "selected";
        break;
    case '6333':
        $c4 = "selected";
        break;
    case '8565':
        $c5 = "selected";
        break;
    case '9755':
        $c6 = "selected";
        break;
    case '5453':
        $c7 = "selected";
        break;
    case '3254':
        $c8 = "selected";
    case '0767':
        $c9 = "selected";
    case '2434':
        $c10 = "selected";    
        break;
    default:
}



if(isset($_POST['update'])){

    $fname_valid = false; $lname_valid = false; $gender_valid = false; $fathername_valid = false;
    $dateofbirth = false; $mothername_valid = false; $address = false;
    $city_valid = false; $postal_valid = false; $email_valid = false;
    $phone_valid = false; $ssc_valid = false; $hsc_valid = false;
    $hons_valid = false; $cv_valid = false; $pass_valid = false; $cpass_valid = false;
    $img_valid = false;

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $ssc = $_POST['ssc'];
    $hsc = $_POST['hons'];
    $cv = $_POST['cv'];
    $pass = $_POST['pass'];
    $img = $_POST['img'];


    if(empty($fname))
    {
        echo "<br>";
        echo "First name is required";
        echo "<br>";
    }
    elseif(!preg_match("/^[a-zA-Z\Submit]+$/", $fname))
    {
        echo "Name required only character";
    }
    else
    {
        echo "First name inserted";
        $fname_valid = true;
    }

    if($_REQUEST["lname"] == "")
    {
        echo "Last name is required";
        echo "<br>";
    }
    elseif(!preg_match("/^[[a-zA-Z\Submit]+$/", $lname))
    {
        echo "Name required only character";
    }
    
    else
    {
        echo "Last name inserted";
        $lname_valid = true;
    }

    if($_REQUEST["fathername"] == "")
    {
        echo "Father name is required";
    }

    else if(is_numeric( $fathername))
      {
        $Err ='Fathers Name can not be numeric';
      }
    elseif(!preg_match("/^[a-zA-Z\Submit]+$/", $fathername))
    {
        echo "Name required only character";
    }
    else
    {
        echo "Father name inserted";
        $fathername_valid = true;
    }

    if($_REQUEST["mothername"] == "")
    {
        echo "Mother name is required";
    }
    elseif(!preg_match("/^[a-zA-Z\Submit]+$/", $mothername))
    {
        echo "Name required only character";
    }
    else
    {
        echo "Mother name inserted";
         $mothername_valid = true; 
    }
    if($_REQUEST["address"] == "")
    {
        echo "Address is required";
    }

    else
    {
        echo "Address inserted..";
        $address = true;
    }
if($_REQUEST["ssc"] == "")
    {
        echo "SSC result is required";
    }
    

    elseif($_REQUEST["ssc"] > 5 )
    {
        echo "SSC result is not valid";
    }
    elseif($_REQUEST["ssc"] < 0)
    {
        echo "SSC result is not valid";
    }
    else
    {
        echo "SSC result inserted";
        $ssc_valid = true;
    }

if($_REQUEST["hsc"] == "")
    {
        echo "HSC result is required";
    }
    elseif($_REQUEST["hsc"] > 5 )
    {
        echo "HSC result is not valid";
    }
    elseif($_REQUEST["hsc"] < 0)
    {
        echo "HSC result is not valid";
    }
    else
    {
        echo "HSC result inserted";
        $hsc_valid = true;
    }
if($_REQUEST["hons"] == "")
    {
        echo "Undergraduate result is required";
    }
    elseif($_REQUEST["hons"] > 4 )
    {
        echo "Undergraduate result is not valid";
    }
    elseif($_REQUEST["hons"] < 0)
    {
        echo "Undergraduate result is not valid";
    }
    else
    {
        echo "Undergraduate result inserted";
        $hons_valid = true;
        
    }

    

    // if($_REQUEST["uname"]=="")
    // {
    //     echo "User Id is Empty";
    // }
    // else if(uniqid($username))
    // {
    //     echo "Your user id is valid";
    //     $_SESSION["userName"] = $username;
    // }
    // else 
    // {
    //     echo "Create Unique User ID";
    // }
    #Password
    if(empty($password)||empty($confirmpassword))
    {
        $passErr="Password is empty";
        $cpassErr="Confirm Password is empty";
    }
   
   else if(!preg_match('@[A-Z]@', $password)||!preg_match('@[a-z]@', $password)||!preg_match('@[0-9]@', $password)||!preg_match('@[^\w]@', $password)||strlen($password)<8)
    {
        $passErr='Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    }
    
   else if(!preg_match('@[A-Z]@', $confirmpassword)||!preg_match('@[a-z]@',$confirmpassword)||!preg_match('@[0-9]@',$confirmpassword)||!preg_match('@[^\w]@', $confirmpassword)||strlen($confirmpassword)<8)
    {
        $cpassErr='Confirm Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    }
   
   else if(strcmp($password,$confirmpassword))
    {
        $cpassErr="Password and Confrim Password doesn't match";
    }
    else{
        $cpassErr= 'Password valid';
        $pass_valid = false;
    }

if(empty($phone))    
{
$phnErr = "Enter Phone Number";
}

else if(!preg_match("/^[0-1]{2}-[0-9]{3}-[0-9]{6}$/", $phone))
{
    $phnErr = "Phone Number format incorrect. Phone Number must be numeric and length is 11";

}
else
{
    $phnErr ="Valid Phone Number";
    $phone_valid = true; 
}

    if (isset($_POST["gender"]) )
        {

           $gender = $_POST["gender"];
           $gender_valid = true;
        
    } 
    if(empty($email))
    {
        $emailErr = "Enter your email";
    } 
    else if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    { 
        $emailErr = "Wrong Email pattern";
    } 
    else
    {
        $emailErr= "Your email is ".$email;
        echo '<br>';
        $email_valid = true;
    }


#image
if (!empty($_FILES['img']))
{
    $file_name = $_FILES['img']['name'];
    $file_size = $_FILES['img']['size'];
    $img_file_tmp = $_FILES['cv']['tmp_name'];
    $imgpath = $_FILES['img']['name'];
    $allowed_ext = array("jpg","jpeg","png","gif");
    $splitFileName = explode('.', $imgpath);
    $image_ext = strtolower(end($splitFileName));

    if (in_array($image_ext, $allowed_ext)) 
    {
        move_uploaded_file($imgpath, "../uploads/".$file_name);
        echo "Image uploaded";
        $imgpath =  "../uploads/".$img_name;
        $img_valid = true;
    }
    else{
        echo "image format does not match.";
    }

}


#file

if (!empty($_FILES['img']))
{
    $file_name = $_FILES['cv']['name'];
    $file_size = $_FILES['cv']['size'];
    $pdf_file_tmp = $_FILES['cv']['tmp_name'];
    $filepath = $_FILES['cv']['name'];
    $allowed_ext = array("pdf","docx");
    $splitFileName = explode('.', $filepath);
    $image_ext = strtolower(end($splitFileName));

    if (in_array($image_ext, $allowed_ext)) 
    {
        move_uploaded_file($pdf_file_tmp, "../uploads/".$file_name);
        echo "CV uploaded";
        $filepath =  "../uploads/".$file_name;
        $cv_valid = true;
    }
    else
    {
        echo "CV format does not match.";
    }
}
if($fname_valid && $lname_valid  && $gender_valid &&  $fathername_valid && $mothername_valid && $address_valid 
&& $city_valid && $postal_valid && $email_valid&& $phone_valid && $ssc_valid && $hsc_valid && $hons_valid && 
$cv_valid && $pass_valid && $img_valid)
{
    $mydb = new AC_DB();
    $connobj = $mydb->openConn();
    $result = $mydb->updateAcc($connobj,"accountant",$fname,$lname,$gender,$fathername,$mothername,$address, $city,$postal,
    $email, $phone, $ssc, $hsc, $hons, $cv, $pass, $img,$_SESSION['nid']);
    if($result){
        echo "updated";
    }else{
        echo "faild";
    }
}
}

