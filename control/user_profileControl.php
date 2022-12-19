<?php

include("../model/user_db.php");



$mydb = new User_DB();
$connobj = $mydb->openConn();

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


$result = $mydb->CheckUser($connobj, "land_owner", $_SESSION["username"], $_SESSION["password"]);


foreach ($result as $row) {

    $title = $row['title'];
    $name = $row['name'];
    $father = $row['father'];
    $mother = $row['mother'];
    $birthday = $row['birthday'];
    $NID = $row['NID'];
    $gender = $row['gender'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $division = $row['division'];
    $city = $row['city'];
    $address = $row['address'];
    $password = $row['password'];
    $get_notification = $row['get_notification'];
    $image = $row['image'];
    $pdf = $row['pdf'];
}

$mydb->CloseCon($connobj);



// title drop down

$mr = "";
$ms = "";
$mrs = "";



switch ($title) {
    case 'Mr.':
        $mr = "selected";
        break;
    case 'Ms.':
        $ms = "selected";
        break;
    case 'Mrs.':
        $mrs = "selected";
        break;
    default:
}


// gendar radio button

$isMale = "";
$isFemale = "";


if ($gender == "male") {
    $isMale = "checked";
} else {
    $isFemale = "checked";
}


// division drop down 

$dk = "";
$br = "";
$cht = "";
$khu = "";
$mym = "";
$raj = "";
$ran = "";
$syl = "";



switch ($division) {
    case 'Dhaka':
        $dk = "selected";
        break;
    case 'Barishal':
        $br = "selected";
        break;
    case 'Chattogram':
        $cht = "selected";
        break;
    case 'Khulna':
        $khu = "selected";
        break;
    case 'Mymensingh':
        $mym = "selected";
        break;
    case 'Rajshahi':
        $raj = "selected";
        break;
    case 'Rangpur':
        $ran = "selected";
        break;
    case 'Sylhet':
        $syl = "selected";
        break;
    default:
}


// get email notification

$getNotification = "";



// update validation



function checkSpacialChar($str)
{

    if (preg_match('/[^a-z0-9 ]+/i', $str)) {
        return true;
    } else
        return false;
}

function checkNum($str)
{
    if (preg_match('#[0-9]#', $str)) {
        return true;
    } else
        return false;
}

function checkLength($str, $size)
{
    if (strlen($str) > $size) {
        return true;
    } else
        return false;
}


function checkAlphabet($str)
{
    if (preg_match("/[a-z]/i", $str)) {
        return true;
    } else
        return false;
}

function checkOperator($str)
{

    $flag = false;
    $opr = array('3', '7', '9', '8', '5', '6');
    foreach ($opr as $val) {

        if ($val == $str[2]) {
            $flag = true;
        }
    }

    return $flag;
}

function validateEmail($email)
{
    return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validatePassword($str)
{
    if (!preg_match('@[A-Z]@', $str) || !preg_match('@[a-z]@', $str) || !checkNum($str) || !checkSpacialChar($str) || strlen($str) < 8) {
        return true;
    } else {
        return false;
    }
}

$userName_err = "";
$fatherName_err = "";
$motherName_err = "";







if (isset($_POST["update_genarelInfo"])) {


    $title = $_POST["select"];
    $userName = $_POST["user_name"];
    $fatherName = $_POST["Father_name"];
    $motherName = $_POST["Mother_name"];
    $dob = $_POST["birthday"];
    $gender = $_POST["gender"];



    $name_valid = false;
    $fatherName_valid = true;
    $motherName_valid = true;







    if (empty($userName)) {
        $userName_err = "name is requerd";
    } elseif (checkSpacialChar($userName) || checkNum($userName) || checkLength($userName, 20)) {

        $userName_err = "A name can not contain any number or spacial character and have to be less then 20 character";
    } else {

        $name_valid = true;
    }


    if (empty($fatherName)) {
    } elseif (checkNum($fatherName) || checkSpacialChar($fatherName) || checkLength($fatherName, 20)) {

        $fatherName_err = "A name can not contain any number or spacial character and have to be less then 20 character";
        $fatherName_valid = false;
    } else {
    }


    if (empty($motherName)) {
    } elseif (checkNum($motherName) || checkSpacialChar($motherName) || checkLength($motherName, 20)) {

        $motherName_err = "A name can not contain any number or spacial character and have to be less then 20 character";
        $motherName_valid = false;
    } else {
    }




    if ($name_valid  && $fatherName_valid && $motherName_valid) {

        $mydb = new User_DB();
        $connobj = $mydb->openConn();
        if ($mydb->UpdateUserPinfo($connobj, "land_owner", $title, $userName, $fatherName, $motherName, $dob, $gender, $_SESSION["username"])) {
        } else {
            echo "unable to update personal info";
        }
    }
}




if (isset($_POST["update_contect"])) {

    $email = $_POST['email'];
    $mobile = $_POST['mobile_number'];
    $division = $_POST['select_division'];
    $city = $_POST['city'];
    $address = $_POST['address'];

    $mydb = new User_DB();
    $connobj = $mydb->openConn();
    if ($mydb->UpdateUserContect($connobj, "land_owner", $email, $mobile, $division, $city, $address, $_SESSION["username"])) {
    } else {
        echo "unable to update personal info";
    }
}

$newpass_err = "";
$current_pass_err = "";
$img_errors = "";
$pdf_errors = "";


if (isset($_POST["update_others"])) {


    $current_pass_valid = true;
    $newPass_valid = true;
    $img_valid = true;
    $ownership_valid = true;

    $isPassChanged = false;




    $current_pass = "";
    $new_pass = $password;

    //$get_notification = $_POST['email_notification'];
    $img =  $image;
    $pdf_doc = $pdf;

    if ($_POST['current_password'] != "") {
        $current_pass = $_POST['current_password'];
        if ($current_pass != $password) {
            $current_pass_err = "wrong password";
            $current_pass_valid = false;
        } else {
            $current_pass_err = "";
        }
    }

    if ($_POST['confirm_password'] != "") {
        $new_pass = $_POST['confirm_password'];
        $_POST['confirm_password'];
        if ($current_pass == "") {
            $newpass_err = "Enter your current password first";
            $newPass_valid = false;
        } else if (validatePassword($new_pass)) {
            $newpass_err = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
            $newPass_valid = false;
        } else {
            $isPassChanged = true;
        }
    }



    if (isset($_FILES["image"])) {


        $img_file_name = $_FILES['image']['name'];
        $img_file_size = $_FILES['image']['size'];
        $img_file_tmp = $_FILES['image']['tmp_name'];
        $img_file_type = $_FILES['image']['type'];
        $img_ext = explode('.', $_FILES['image']['name']);
        $img_file_ext = strtolower(end($img_ext));

        $img_extensions = array("jpeg", "jpg", "png");

        if (in_array($img_file_ext, $img_extensions) === false) {
            $img_errors = $img_errors . "extension not allowed, please choose a JPEG or PNG file.";
            $img_valid = false;
        }
        if ($img_file_size > 3097152) {
            $img_errors = $img_errors . 'File size must be less then 3 MB';
            $img_valid = false;
        }

        if ($img_errors == "") {
            move_uploaded_file($img_file_tmp, "../uploads/" . $img_file_name);
            $img = "../uploads/" . $img_file_name;
        }
    }


    if (isset($_FILES["pdf"])) {


        $pdf_file_name = $_FILES['pdf']['name'];
        $pdf_file_size = $_FILES['pdf']['size'];
        $pdf_file_tmp = $_FILES['pdf']['tmp_name'];
        $pdf_file_type = $_FILES['pdf']['type'];
        $pdf_ext = explode('.', $_FILES['pdf']['name']);
        $pdf_file_ext = strtolower(end($pdf_ext));

        $pdf_extensions = array("pdf");

        if (in_array($pdf_file_ext, $pdf_extensions) === false) {
            $pdf_errors = $pdf_errors . "extension not allowed, please choose .pdf";
            $ownership_valid = false;
        }
        if ($pdf_file_size > 5097152) {
            $pdf_errors = $pdf_errors . 'File size must be less then 5 MB';
            $ownership_valid = false;
        }

        if ($pdf_errors == "") {
            move_uploaded_file($pdf_file_tmp, "../uploads/" . $pdf_file_name);
            echo "Success pdf upload";
            $ownership_valid = true;
            $pdf_doc = "../uploads/" . $pdf_file_name;
        }
    }

    if ($current_pass_valid && $newPass_valid && $img_valid && $ownership_valid) {
        $mydb = new User_DB();
        $connobj = $mydb->openConn();
        if ($mydb->UpdateUserOthers($connobj, "land_owner", $new_pass, $img, $pdf_doc, $_SESSION["username"])) {
            echo "ok";
        } else {
            echo "unable to update personal info";
        }
    }
    if ($isPassChanged) {
        header("Location: /SecH/e-gov/control/user_logout.php");
    }
}



if (isset($_POST['delete'])) {
    $mydb = new User_DB();
    $connobj = $mydb->openConn();
    $result = $mydb->deleteUser($connobj, "land_owner", $_SESSION["username"]);
    if ($result) {
        header("Location: /SecH/e-gov/control/user_logout.php");
    } else {
        echo "unable to delet";
    }
}
