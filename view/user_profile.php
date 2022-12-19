<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if (empty($_SESSION["username"])) {
    header("Location: /SecH/e-gov/view/user_login.php"); // Redirecting To login page
}
include("../control/user_profileControl.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/user_style.css" />
    <script src="../js/user_updateValidation.js"></script>

    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    <div class="about-container">

        <div class="profile-img">
            <img src=<?php echo  $image; ?> alt="" />
        </div>

        <div class="about-section">
            <div class="details">
                <div>
                    <p>NAME: <?php echo "$name"; ?></p>
                    <p>NID: <?php echo "$NID"; ?></p>
                    <p>PHONE: <?php echo "$mobile"; ?></p>
                </div>

                <div>
                    <p>DIVISION: <?php echo "$division"; ?></p>
                    <p>CITY: <?php echo "$city"; ?></p>
                    <p>ADDRESS: <?php echo "$address"; ?></p>
                </div>

            </div>
        </div>


    </div>








    <div class="edit-profile-container">
        <h1>Edit profile</h1>


        <div class="genarel-info-section">

            <h3>Personal info:</h3>
            <form action="" method="POST" onsubmit="return validinfo() ">
                <table>
                    <tr>


                        <td>
                            <label for="text">Name</label>

                        </td>
                        <td>

                            <select name="select" id="select">
                                <option value="Mr." <?php echo $mr; ?>>Mr.</option>
                                <option value="Ms." <?php echo $ms; ?>>Ms.</option>
                                <option value="Mrs." <?php echo $mrs; ?>> Mrs.</option>

                            </select>
                            <input type="text" name="user_name" id="user_name" value="<?php echo "$name"; ?>">
                        </td>
                        <td>
                            <span id="name_err"> <?php echo $userName_err ?></span>
                        </td>
                    </tr>


                    <tr>
                        <td><label for="text">Father's name:</label></td>

                        <td><input type="text" name="Father_name" id="Father_name" value="<?php echo $father; ?>"></td>
                        <td>
                            <span id="fathername_err"> <?php echo $fatherName_err ?></span>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="text">Mother's name:</label></td>

                        <td><input type="text" name="Mother_name" id="Mother_name" value="<?php echo $mother; ?>"></td>
                        <td>
                            <span id="mothername_err"> <?php echo $motherName_err ?></span>
                        </td>
                    </tr>



                    <tr>
                        <td><label for="birthday">Date of barth:</label></td>

                        <td><input type="date" id="birthday" name="birthday" value="<?php echo $birthday; ?>"></td>
                        <td>
                            <span id="dob_err"></span>
                        </td>
                    </tr>



                    <tr>
                        <td><label for="radio">Gender:</label></td>

                        <td>Male <input type="radio" name="gender" value="male" <?php echo $isMale; ?>>
                            Fimale<input type="radio" name="gender" value="female" <?php echo $isFemale; ?>></td>
                    </tr>

                    <tr>
                        <td><input type="submit" name="update_genarelInfo" value="Update"></td>
                    </tr>

                </table>


            </form>
        </div>

        <hr>


        <div class="contect-info-section">

            <h3>Contect info:</h3>

            <form action="" method="POST" onsubmit=" return validContect()">
                <table>
                    <tr>
                        <td><label for="text">Mobile number:</label></td>

                        <td><input type="text" name="mobile_number" id="mobile_number" value="<?php echo $mobile; ?>"></td>
                        <td>
                            <span id="mobile_number_err"></span>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="text">Email:</label></td>

                        <td><input type="text" name="email" id="email" value="<?php echo $email; ?>"></td>
                        <td>
                            <span id="email_err"></span>
                        </td>
                    </tr>


                    <tr>
                        <td><label for="text">Division:</label></td>

                        <td><select name="select_division" id="select_division">
                                <option value="Dhaka" <?php echo $dk; ?>>Dhaka</option>
                                <option value="Barishal" <?php echo $br; ?>>Barishal</option>
                                <option value="Chattogram" <?php echo $cht; ?>>Chattogram</option>
                                <option value="Khulna" <?php echo $khu; ?>>Khulna</option>
                                <option value="Mymensingh" <?php echo $mym; ?>>Mymensingh</option>
                                <option value="Rajshahi" <?php echo $raj; ?>>Rajshahi</option>
                                <option value="Rangpur" <?php echo $ran; ?>>Rangpur</option>
                                <option value="Sylhet" <?php echo $syl; ?>>Sylhet</option>

                            </select></td>
                    </tr>


                    <tr>
                        <td><label for="text">City:</label></td>

                        <td><input type="text" name="city" id="city" value="<?php echo $city; ?>"></td>
                        <td>
                            <span id="city_err"></span>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="text">Address:</label></td>

                        <td><textarea name="address" cols="30" rows="3" id="address"><?php echo $address; ?></textarea> </td>
                        <td>
                            <span id="address_err"></span>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="submit" name="update_contect" value="Update"></td>
                    </tr>

                </table>
            </form>

        </div>


        <hr>


        <div class="pass-section">

            <h3>Others:</h3>

            <form action="" method="POST" onsubmit=" " enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label for="password">Current password:</label></td>

                        <td><input type="password" id="password" name="current_password"></td>
                        <td>
                            <span id=""><?php echo $current_pass_err; ?></span>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="password">New password:</label></td>

                        <td><input type="password" name="confirm_password" id="confirm_password"></td>
                        <td>
                            <span id=""><?php echo $newpass_err; ?></span>
                        </td>
                    </tr>



                    <tr>

                        <td>
                            <label for="checkbox">Get notifi via email:</label>
                        </td>
                        <td>
                            <input type="checkbox" name="email_notification" value=" <?php echo $getNotification; ?>">
                        </td>

                    </tr>

                    <tr>
                        <td>
                            <label for="file">upload new profile image:</label>

                        </td>
                        <td><input type="file" name="image"></td>
                        <td>
                            <span id=""><?php echo $img_errors; ?></span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="file">Re submit your land ownership docoment (pdf only):</label>
                        </td>
                        <td><input type="file" name="pdf"></td>
                        <td>
                            <span id=""><?php echo $pdf_errors; ?></span>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="submit" name="update_others" value="Update"></td>
                    </tr>

                </table>

            </form>

        </div>


    </div>

    <div class="dlt-box">
        <form action="" method="post">
            <table>
                <tr>
                    <td>Delete Your Account ?</td>
                    <td><input type="submit" class="delete" name="delete" value="Delete"></td>
                </tr>
            </table>

        </form>
    </div>






</body>

</html>