<?php

if (isset($_SESSION["nid"])) 
{
    header("Location: SecH/e-gov/view/ac_home.php");
}

include('../control/ac_logincheck.php');
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href = "../css/interfaceStyle.css" />
    <script src = " ../js/ac_validation.js"></script>
</head>

<body>

<div class="nav-container">
        <div class="head">
            <img height="50" width="130" src="../image/landlogo.png" alt="">
        </div>
        <div class="navbar">
            <ul class="nav-items">
            <li><a href = "../view/main_interface.php"> Home</a>
            <li><a href = "#"> About us</a>
            <li><a href = "../view/contact.php"> Contact</a>
               
            </ul>
        </div>
    </div>
    <div>fixed</div>

<div class = "hight-box">

</div>
<h1 class = "heading" >Accountant Login</h1></tr>
    <form action ="" method="POST" enctype="multipart/form-data">        
<table class = login_table>
    <!-- <tr> <h1 class = "heading" >Accountant Login</h1></tr> -->
    <tr>
    <td>
        <lable><h3>NID NO :</h3></label>
       
    </td>
    <td> <input type="username" name="nid" placeholder="Enter your NID" value="<?php if (isset($_COOKIE["AcNID"])) {echo $_COOKIE["AcNID"];}?>"></td>
</tr>
<tr>
    <td>
        <lable><h3>Password  :</h3></label>
        
    </td>
    <td>
    <input type="password" name="pass" placeholder="Enter your Password" value="<?php if (isset($_COOKIE["AcPass"])) {echo $_COOKIE["AcPass"];}?>"</td>
<tr><td></td><tr>
                        <td>
                        <input type="checkbox" name="remember" value = "1" id="remember">Remember Me
                        </td>
                    </tr> 
       <tr>
           <td>
                          <td><input type="submit" name="login" id ="submit_page"></td>
                        </td>
                    </tr>
                    <td>
                    <tr>
                    <td>Do not have any account? <a href="../view/ac_registration.php">Sign Up</td>
                    </tr>       
</form>
</body>
</html>