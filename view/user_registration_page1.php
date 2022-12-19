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

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/user_style.css" />
    <script src="../js/user_validation.js"></script>
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






    <form action="" method="POST" onsubmit="return validInfoForm() ">

        <div class="reg-container">

            <table class="reg-table">
                <th>

                    <div class="heading">
                        <p>Personal info:</p>
                    </div>


                </th>

                <tr>
                    <!-- <td></td> -->

                    <td>
                        <label for="text">Your name</label>

                    </td>
                    <td>
                        <select name="select" id="select">
                            <option value="Mr.">Mr.</option>
                            <option value="Ms.">Ms.</option>
                            <option value="Mrs.">Mrs.</option>

                        </select>
                        <input type="text" name="user_name" id="user_name" placeholder="Enter your name" />
                    </td>
                    <td>
                        <span id="name_err"></span>
                    </td>
                </tr>


                <tr>
                    <td><label for="text">Father's name:</label></td>

                    <td><input type="text" name="Father_name" id="Father_name" placeholder="Enter your Father's name" /></td>
                    <td>
                        <span id="fathername_err"></span>
                    </td>
                </tr>

                <tr>
                    <td><label for="text">Mother's name:</label></td>

                    <td><input type="text" name="Mother_name" id="Mother_name" placeholder="Enter your Mother's name" /></td>
                    <td>
                        <span id="mothername_err"></span>
                    </td>
                </tr>



                <tr>
                    <td><label for="birthday">Date of barth:</label></td>

                    <td><input type="date" id="birthday" name="birthday" /></td>
                    <td>
                        <span id="dob_err"></span>
                    </td>
                </tr>


                <tr>
                    <td><label for="text">NID number:</label></td>

                    <td><input type="text" name="NID_number" id="NID_number" placeholder="Enter your NID number" /></td>
                    <td>
                        <span id="nid_err"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="radio">Gender:</label></td>

                    <td>Male <input type="radio" name="gender" id="gender" value="male" />
                        Fimale<input type="radio" name="gender" id="gender" value="female" /></td>
                    <td>
                        <span id="gender_err"></span>
                    </td>

                </tr>






                <!-- <tr>
                        <td><input type="submit" name="submit_page1" id="submit_page1" value="Next" /></td>
                    </tr> -->



            </table>


        </div>

        <div class="btn-container"><input type="submit" name="submit_page1" class="submit-btn" value="Next" /></div>

    </form>


</body>
</body>

</html>