<?php
include ("../model/db.php");

$hasError=0; 
$nameErr = "";
$name2Err = "";
$fnameErr = "";
$mnameErr = "";
$genderErr = "";
$dobErr = "";
$uname = "";
$passErr = "";
$cpassErr = "";
$preaddressErr = "";
$emailErr = "";
$nidErr = "";
$phnErr = "";
$city =" ";
$postalcode = " ";
$fileErr = "";
$imgErr = "";
$filepath ="";
$imgpath ="";
$datasave="";
$presentaddress ="";
$gender=" ";
$ssc =" ";
$hsc = " ";
$hons = " ";
$city =" ";

if(isset($_POST["Submit"]))
{
    session_start();
  $name = $_POST["fname"];
  $name2 = $_POST["lname"];
  $dateofbirth = $_POST["dateofbirth"];
  $fathername = $_POST["fathername"];
  $mothername = $_POST["mothername"];
  $username = $_POST["uname"];
  $password = $_POST["pass"];
  $confirmpassword =$_POST["cpass"];
  $postalcode = $_POST["postal"];
  $city = $_POST["city"];
  $email = $_POST["email"];
  $nid = (int) $_POST["nid"];
  $phone =$_POST["phone"];
  $presentaddress = $_POST["address"];
  $currentDate = date("Y-m-d");
  $ssc = $_POST["ssc"];
  $hsc = $_POST["hsc"];
  $hons = $_POST["hons"];

/*
<tr>
	<td> Profession : </td>
	<td><input type = "checkbox" name = "student" value = "student">Student
	<td><input type = "checkbox" name = "teacher" value = "teacher">Teacher
    <td><input type = "checkbox" name = "engineer" value = "engineer">Engineer
	</td>

	</tr>

    if (isset($_REQUEST["student"]) || isset($_REQUEST["teacher"]) || isset($_REQUEST["engineer"])) {

        if(isset($_REQUEST["student"])){
            echo "Student ";
 
        }if(isset($_REQUEST["teacher"])){
            echo "Teacher ";
 
        }if(isset($_REQUEST["engineer"])){
            echo "Engineer ";
        }
     }

     
     else
     {
        echo "Checkbox is empty.";
        echo "<br>";
     }

*/
    if(empty($name))
    {
        echo "<br>";
        echo "First name is required";
        echo "<br>";
    }
    elseif(!preg_match("/^[a-zA-Z\Submit]+$/", $name))
    {
        echo "Name required only character";
    }
    else
    {
        echo "First name inserted";
        $_SESSION["firstName"] = $name;
    }

    if($_REQUEST["lname"] == "")
    {
        echo "Last name is required";
        echo "<br>";
    }
    elseif(!preg_match("/^[[a-zA-Z\Submit]+$/", $name2))
    {
        echo "Name required only character";
    }
    
    else
    {
        echo "Last name inserted";
        $_SESSION["lastName"] = $name2;
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
        $_SESSION["fatherName"] = $fathername;
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
        $_SESSION["motherName"] = $fathername;
    }
    if($_REQUEST["address"] == "")
    {
        echo "Address is required";
    }

    else
    {
        echo "Address inserted..";
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
        $_SESSION["sscResult"] = $ssc;
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
        $_SESSION["hscResult"] = $hsc;
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
        $_SESSION["honsResult"] = $hons;
    }

    $age = date_diff(date_create($dateofbirth), date_create($currentDate));
    if(empty($dateofbirth))
    {
        $dobErr = "Date of Birth is Empty";
    }
    
    else if($age->format('%y')<18)
    {
        $dobErr ="Age less than 18";
        echo "$dobErr";
    }
    else 
    {
        echo "Date of birth inserted";
        $dobErr ="Your Date of Birth is ". $dateofbirth;
        $_SESSION["dateofbirth"] = $dateofbirth;
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
        $cpassErr= '';
        $_SESSION["password"] = $cpassErr;
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
    $_SESSION["phone"] = $phnErr;
}

    if (isset($_POST["gender"]) )
        {

           $gender = $_POST["gender"];

        // if ($_POST["gender"]=="male") {
        //     $genderErr = 'You selected Male ';
        //     $_SESSION["gender"] = $gender;
         
        // }
        // else if ($_POST["gender"]=='female') {
        //     $genderErr = 'You selected Female';
        //     $_SESSION["gender"] = $gender;
         
        // }
        // else if($_POST["gender"]=='others')
        // {
        // $genderErr = 'You have selected Others';
        // $_SESSION["gender"] = $gender;
        // }
        // else
        // {
        //     echo "No gender select";
        // }
        
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
        $_SESSION["email"] = $email;
        echo '<br>';
    }

    if(empty($username))    
{
$phnErr = "Choose your user name";
}

else
{
    echo "user name inserted";
    
}

if(empty($nid))    
{
$nidErr = "Enter Nid Number";
}
else if(!is_numeric($nid))
{
    $nidErr = "Nid Number must be numeric";
}
else if(strlen($nid) == 10)
{
    $nidErr = "Nid Number is valid";
}
else
{
    $nidErr = "Nid Number is not Valid";
}


#image
if (!empty($_FILES['img']))
{
    $img_name = $_FILES['img']['name'];
    $file_size = $_FILES['img']['size'];
    $img_file_tmp = $_FILES['cv']['tmp_name'];
    $imgpath = $_FILES['img']['name'];
    $allowed_ext = array("jpg","jpeg","png","gif");
    $splitFileName = explode('.', $imgpath);
    $image_ext = strtolower(end($splitFileName));

    if (in_array($image_ext, $allowed_ext)) 
    {
        move_uploaded_file($img_file_tmp, "../uploads/".$img_name);
        echo "Image uploaded";
        $imgpath =  "../uploads/".$img_name;
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
    }
    else
    {
        echo "CV format does not match.";
    }
}


if(!empty($name)&&!empty($username)&&!empty($password) &&!empty($nid)&&strcmp($password,$confirmpassword)==0)
{
    

    $mydb = new AC_DB();
    $connobj = $mydb->openConn();
    if ($mydb->insertUser(
        $connobj,
        "accountant",
       
        $_POST["fname"],
        $_POST["lname"],
        $gender,
        $age -> format ('%y'),
        $fathername,
        $mothername,
        $username,
        $nid,
        $presentaddress,
        $city,
        $postalcode,
        $email,
        $phone,
        $ssc,
        $hsc,
        $hons,
        $filepath,
        $password,
        $imgpath 
      /*
        "iuorioww",
        "oiweurwo",
        "male",
        43,
        "uhdfituo",
        "jglkejg",
        "iuojfdio",
        '4578934785',
        "iuotoeter",
        "jktldgd",
        "ioutgodui",
        "986t9e0dd",
        01768394783,
        3.76,
        3.78,
        3.87,
        "suifsos",
        "kdkjfsld",
        "usifus"  
      */  
    )
    )
    {
    $mydb -> CloseCon($connobj);
    session_destroy();
    header("Location: /SecH/e-gov/view/ac_login.php");
    }

    else
    {
        $mydb -> CloseCon($connobj);
        session_destroy();
        echo "Unable to Register";
    }
}
/*
$formdata = array(
    'Full name'=>$_POST[""],
    'lastname'=>$_POST["lname"],
    'gender'=>$gender,
    'age'=>$age->format('%y'),
    'fathersname'=>$fathername,
    'mothersname'=> $mothername,
    'username'=>$username,
    'pass'=>$password,
    'email'=>$email,
    'Address'=>$presentaddress,
    'nid'=>$nid,
    'phone'=>$phone,
    'SSC RESULT' => $ssc,
    'HSC RESULT' => $hsc,
    'Undergraduate RESULT' => $hons,
    'Image Path'=> $imgpath
    
);
$existingdata = file_get_contents('../data/ac_data.json');
$tempJSONdata = json_decode($existingdata);
$tempJSONdata[] =$formdata;


$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
if(file_put_contents("../data/ac_data.json",$jsondata))
{
    $datasave= 'Data Successfully Saved';
}
else
$datasave=  'No Data Saved';

}
*/
}

?>