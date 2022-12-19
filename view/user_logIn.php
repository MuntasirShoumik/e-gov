<?php

session_start();
if (!empty($_SESSION["username"])) {
    header("Location: /SecH/e-gov/view/user_home.php"); // Redirecting To login page
}

include("../control/user_loginCheck.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/user_style.css">
    <title>Document</title>
</head>

<body>

    <div class="nav-container">
        <div class="head">
            <img height="50" width="130" src="../image/landlogo.png" alt="">
        </div>
        <div class="navbar">
            <ul class="nav-items">
                <li><a href="user_main_interface.php">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </div>

    </div>

    <div class="login-container">





        <div class="login-box">

            <form action="" method="POST">
                <table>

                    <th>
                        <div class="login-heading">
                            <h3>Please log in</h3>
                        </div>
                    </th>




                    <tr>
                        <td><label for="text">user NID:</label></td>

                        <td><input type="text" name="log_nid" placeholder="Enter your NID" value="<?php if (isset($_COOKIE["userNID"])) {
                                                                                                        echo $_COOKIE["userNID"];
                                                                                                    }    ?>"></td>
                    </tr>




                    <tr>
                        <td><label for="password">password:</label></td>

                        <td><input type="password" name="pass" placeholder="Enter your password" value="<?php if (isset($_COOKIE["userPass"])) {
                                                                                                            echo $_COOKIE["userPass"];
                                                                                                        }    ?>"></td>
                    </tr>

                    <tr>
                        <td>remember me<input type="checkbox" name="remember" id="remember"></td>
                    </tr>

                    <!-- <tr>
                        <td><a href="/SecH/e-gov/view/user_registration_page1.php"> don't have an account?</a></td>
                    </tr> -->




                </table>

                <div class="login-btn-container">
                    <a href="/SecH/e-gov/view/user_registration_page1.php"> don't have an account?</a>
                    <input type="submit" name="login" value="Log in" class="login-btn">
                </div>

            </form>

        </div>

    </div>
</body>

</html>