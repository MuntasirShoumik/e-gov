<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if (empty($_SESSION["username"])) {
    header("Location: /SecH/e-gov/view/user_login.php");
}
// include("../control/user_historyControl.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/user_style.css" />
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
    <div>
        hh
    </div>



    <div class="hist-container">
        <div class="hist-search">
            <form action="" method="post">
                <table>
                    <tr>

                        <td><input type="date" id="dateSearch" name="dateSearch" /></td>

                        <!-- <td><input type="submit" name="Search" class="Search" value="Search" /></td> -->
                    </tr>
                    <tr>
                        <td>Before <input type="radio" name="con" id="before" value="before" />
                            After<input type="radio" name="con" id="after" value="after" /></td>
                    </tr>
                    <tr>

                        <td><input type="submit" name="Search" class="Search" value="Search" /></td>

                    </tr>
                </table>
            </form>
        </div>

        <?php
        include("../control/user_historyControl.php");
        ?>
    </div>

</body>

</html>