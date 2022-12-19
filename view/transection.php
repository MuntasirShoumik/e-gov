

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href = "../css/transection.css" />
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


<!-- <div class="nav-container">
        <div class="head">
            <img height="50" width="130" src="../image/landlogo.png" alt="">
        </div>
        <div class="navbar">
            <ul class="nav-items">
                <li><a href="user_home.php">Home</a></li>
                <li><a href="user_history.php">History</a></li>
                <li><a href="user_services.php">Services</a></li>
                <li><a href="user_profile.php">Profile</a></li>
                <li><a href="../control/logout.php">logout</a></li>
            </ul>
        </div>
    </div>
    <div>fixed</div> -->
    <div class = "tran">
<?php
    include('../control/transectionControl.php');
?>

<form action = "" method= "POST" enctype = "multipart/form-data">
<table>
<tr>
<input type="text" name="NID" placeholder="Enter NID for delete data" id = "txtbox"></tr><br>

<tr><input type="submit" name="delete" value="Delete transection" id = "delete">
</tr>
</table>
</form>
</div>
</body>
</html>