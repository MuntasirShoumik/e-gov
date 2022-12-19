<?php

session_start();
if (empty($_SESSION["nid"])) {
    header("Location: /SecH/e-gov/view/ac_login.php"); // Redirecting To login page
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href = "../css/transection.css" />
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
            <li><a href = "ac_home.php"> Home</a>
        <li><a href = "../view/ac_profile.php">Update Profile</a>
        <li><a href = "totalTaxCollect.php"> Total Tax Collect</a>
        <li><a href = "ac_taxUpdate.php"> Update Tax </a>
        <li><a href = "transection.php"> User Transection </a>
        <li><a href = "../view/contact.php"> Contact</a>
        <li><a href="../control/ac_logout.php">logout</a></li>
            </ul>
        </div>
    </div>
    <div>fixed</div>

<div class = "hight-box">

</div>



<!-- <div class = "land_logo">
        <a href ="#"><img src = "../image/landlogo.png" width = "130" height = "50"></a>
</div> -->

<!-- <nav>
    <ul>
        <li><a href = "ac_home.php"> Home</a>
        <li><a href = "../view/ac_profile.php">Update Profile</a>
        <li><a href = "totalTaxCollect.php"> Total Tax Collect</a>
        <li><a href = "ac_taxUpdate.php"> Update Tax </a>
        <li><a href = "transection.php"> User Transection </a>
        <li><a href = "../view/contact.php"> Contact</a>
        <li><a href="../control/ac_logout.php">logout</a></li>
    </ul>
</nav> -->

<?php 
include("../control/ac_home.php");
?>


</body>