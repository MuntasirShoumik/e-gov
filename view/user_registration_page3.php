<?php
session_start();
if (!empty($_SESSION["username"])) {
    header("Location: /SecH/e-gov/view/user_home.php");
}
include("../control/user_registration_process.php");


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/user_style.css" />
    <script src="../js/user_validation.js"></script>
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
                <li><a href="user_login.php">Login</a></li>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </div>

    </div>
    <div>
        hh
    </div>




    <form action="" method="post" onsubmit="return validOthers()" enctype="multipart/form-data">
        <div class="reg-container">


            <table class="reg-table">

                <th>

                    <div class="heading">
                        <p>Set password:</p>
                    </div>


                </th>


                <tr>
                    <td><label for="password">Set password:</label></td>

                    <td><input type="password" name="password" id="password" placeholder="Set your password"></td>
                    <td>
                        <span id="password_err"></span>
                    </td>
                </tr>

                <tr>
                    <td><label for="password">Confirm password:</label></td>

                    <td><input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm your password"></td>
                    <td>
                        <span id="conferm_err"></span>
                    </td>
                </tr>



                <tr>

                    <td>
                        <label for="checkbox">Get notifi via email:</label>
                    </td>
                    <td>
                        <input type="checkbox" name="email_notification" value="yes">
                    </td>

                </tr>

                <tr>
                    <td>
                        <label for="file">upload your image:</label>

                    </td>
                    <td><input type="file" name="image"></td>
                    <td>
                        <span><?php echo $img_errors; ?></span>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="file">Scan and upload your land ownership docoment (pdf only):</label>
                    </td>
                    <td><input type="file" name="pdf"></td>
                    <td>
                        <span><?php echo $pdf_errors; ?></span>
                    </td>
                </tr>

                <!-- <tr>
                <td><input type="submit" name="submit_page3"></td>
            </tr> -->

            </table>
        </div>

        <div class="btn-container">
            <input type="submit" name="submit_page3" value="Next" class="submit-btn">
        </div>
    </form>

</body>

</html>