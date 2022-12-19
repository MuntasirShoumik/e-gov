<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if (empty($_SESSION["username"])) {
    header("Location: /SecH/e-gov/view/user_login.php"); // Redirecting To login page
}


include("../control/user_homeControl.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/user_style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>

    <div class="nav-container">
        <div class="head">
            <img height="50" width="130" src="../image/landlogo.png" alt="">
        </div>
        <div class="navbar">
            <ul class="nav-items">
                <li><a href="user_home.php">Home</a></li>
                <li><a href="user_history.php">History</a></li>
                <li><a href="user_services.php">Services</a></li>
                <li><a href="user_profile.php">Profile</a></li>
                <li><a href="../control/user_logout.php">logout</a></li>
            </ul>
        </div>

    </div>





    <div class="home-container">

        <h3>Hii, <?php echo $title . " " . $name; ?></h3>
        <br>
        <div class="pay-box">

            <hr>
            <h5>Your tax: <?php echo $amount ?></h5>
            <h5>You paid : <?php echo $paid ?></h5>
            <h5>Your due from last transection: <?php echo $due ?></h5>
            <hr>
            <br>
            <form action="" method="post">
                <tr>
                    <td> <input type="text" name="pay_amount" placeholder="Enter payment ammount"></td>
                    <td><button name="pay_btn" id="pay_btn">pay</button></td>
                </tr>
            </form>
        </div>





    </div>




</body>

</html>