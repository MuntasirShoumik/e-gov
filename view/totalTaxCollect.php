
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "../css/interfaceStyle.css" />
    <title>Document</title>
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

<div class = "showtax">
<?php
include("../control/totalTaxCollectControl.php");
?>
</div>

</body>
</html>