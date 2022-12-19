<?php
session_start();
if (!empty($_SESSION["username"])) {
    header("Location: /SecH/e-gov/view/user_home.php"); // Redirecting To login page
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
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </div>

    </div>
    <div>
        hh
    </div>





    <form action="" method="post" onsubmit="return validContect() ">
        <div class="reg-container">

            <table class="reg-table">
                <th>

                    <div class="heading">
                        <p>Contect info:</p>
                    </div>


                </th>

                <tr>
                    <td><label for="text">Mobile number:</label></td>

                    <td><input type="text" name="mobile_number" id="mobile_number" placeholder="Enter your Mobile number"></td>
                    <td>
                        <span id="mobile_number_err"></span>
                    </td>
                </tr>

                <tr>
                    <td><label for="text">Email:</label></td>

                    <td><input type="text" name="email" id="email" placeholder="Enter your Email"></td>
                    <td>
                        <span id="email_err"></span>
                    </td>
                </tr>


                <tr>
                    <td><label for="text">Division:</label></td>

                    <td><select name="select_division" id="select_division">
                            <option value="Dhaka">Dhaka</option>
                            <option value="Barishal">Barishal</option>
                            <option value="Chattogram">Chattogram</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Mymensingh">Mymensingh</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Rangpur">Rangpur</option>
                            <option value="Sylhet">Sylhet</option>

                        </select></td>
                    <td>
                        <span id="divi_err"></span>
                    </td>
                </tr>


                <tr>
                    <td><label for="text">City:</label></td>

                    <td><input type="text" name="city" id="city" placeholder="Enter your City"></td>
                    <td>
                        <span id="city_err"></span>
                    </td>
                </tr>

                <tr>
                    <td><label for="text">Address:</label></td>

                    <td><textarea name="address" id="address" cols="30" rows="3" placeholder="Address here"></textarea> </td>
                    <td>
                        <span id="address_err"></span>
                    </td>

                </tr>

                <!-- <tr>



                    <td><input type="submit" name="submit_page2" class="submit-btn"></td>
                </tr> -->

            </table>

        </div>
        <div class="btn-container">
            <input type="submit" name="submit_page2" value="Next" class="submit-btn">
        </div>

    </form>

</body>

</html>