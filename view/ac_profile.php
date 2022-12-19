<?php
include("../control/ac_profileControl.php");


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/interfacestyle.css" />
    <title>Document</title>
    <!-- <link rel = "stylesheet" type = "text/css" href = "../css/interfacestyle.css" /> -->
    <!-- <script src = " ../js/ax_updateValid.js"></script> -->
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



<!-- 
<div class = "land_logo">
        <a href ="#"><img src = "../image/landlogo.png" width = "130" height = "50"></a>
</div>

<nav>
    <ul >
        <li><a href = "../view/ac_home.php"> Home</a>
        <li><a href = "#"> About us</a>
        <li><a href = "../view/contact.php"> Contact</a>
    </ul>
</nav>

</div>
        </div> -->
                <div class = "middle">
                    <p>Name: <?php echo "$fname $lname"; ?></p>
                    <p>NID: <?php echo "$nid"; ?></p>
                    <p>Phone: <?php echo "$phone"; ?></p>
                    <p>Emial: <?php echo "$email"; ?></p>
                    <p>City: <?php echo "$city"; ?></p>
                    <p>Postal Code: <?php echo "$postal"; ?></p>
                    <p>Address: <?php echo "$address"; ?></p>
                </div>

            </div>
        </div>

    </div>
    
    <hr>
        <h1>Edit profile</h1>
            <form action="" method="POST" >
                <table class = "login_table">
                    <tr>
                        <td><h5>PERSONAL INFO:</h5></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="text">First Name</label>
                            <td><input type="text" name="fname"value="<?php echo "$fname"; ?>"></td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="text">Last Name</label>
                            <td><input type="text" name="lname" value="<?php echo "$lname"; ?>"></td>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="radio">Gender:</label></td>

                        <td>Male <input type="radio" name="gender"  value="male" <?php echo $isMale; ?>>
                            female<input type="radio" name="gender"  value="female" <?php echo $isFemale; ?>></td>
                    </tr>

                    <tr>
                        <td><label for="text">Father's name:</label></td>
                        <td><input type="text" name="fathername" value="<?php echo $father; ?>"></td>
                    </tr>

                    <tr>
                        <td><label for="text">Mother's name:</label></td>

                        <td><input type="text" name="mothername" value="<?php echo $mother; ?>"></td>
                    </tr>

            <tr><td><h5>ADDRESS & CONTACT:</h5><td></tr>

                    <tr>
                        <td><label for="text">Address:</label></td>

                        <td><textarea name="address" cols="30" rows="3" ><?php echo $address; ?></textarea> </td>
                    </tr>


                    <tr>
                        <td><label for="text">City:</label></td>

                        <td><select name="select_city" id="select_city">
                                <option value="DHAKA" <?php echo $DHAKA; ?>>DHAKA</option>
                                <option value="CHATTOGRAM" <?php echo $CHATTOGRAM; ?>>CHATTOGRAM</option>
                                <option value="KHULNA" <?php echo $KHULNA; ?>>KHULNA</option>
                                <option value="SYLHET" <?php echo $SYLHET; ?>>SYLHET</option>
                                <option value="RAJSHAHI" <?php echo $RAJSHAHI; ?>>RAJSHAHI</option>
                                <option value="THAKURGAON" <?php echo $THAKURGAON; ?>>THAKURGAON</option>
                                <option value="COXS_BAZAR" <?php echo $COXS_BAZAR; ?>>COXS_BAZAR</option>
                                <option value="BARISHAL" <?php echo $BARISHAL; ?>>BARISHAL</option>
                                <OPTION value="RANGPUR" <?php echo $RANGPUR; ?>>RANGPUR</option>
                                <option value="FENI" <?php echo $FENI; ?>>FENI</option>
                            </select></td>
                    </tr>

                    <tr>
                        <td><label for="text">Postal:</label></td>

                        <td><select name="select_postal" >
                                <option value="1211" <?php echo "$c1"; ?>>1211</option>
                                <option value="2222" <?php echo "2222"; ?>>2222</option>
                                <option value="5342" <?php echo "5342"; ?>>5342</option>
                                <option value="6333" <?php echo "6333"; ?>>6333</option>
                                <option value="8565" <?php echo "8565"; ?>>8565</option>
                                <option value="9755" <?php echo "9755"; ?>>9755</option>
                                <option value="5453" <?php echo "5453"; ?>>5453</option>
                                <option value="3254" <?php echo "3254"; ?>>3254</option>
                                <OPTION value="0767" <?php echo "0767"; ?>>0767</option>
                                <option value="2434" <?php echo "2434"; ?>>2434</option>
                            </select></td>
                    </tr>

                    <tr>
                        <td><label for="text">Email:</label></td>

                        <td><input type="text" name="email"  value="<?php echo $email; ?>"></td>
                    </tr>

                    <tr>
                        <td><label for="text">Phone number:</label></td>

                        <td><input type="text" name="phone"  value="<?php echo $phone; ?>"></td>
                    </tr>

            <tr><td><h5>ACADEMIC QUALIFICATION</h5></td></tr>

            <tr>
                <td><label for="text">SSC :</label></td>
                <td><input type="text" name="ssc"  value="<?php echo $ssc; ?>"></td>
            </tr>

            <tr>
                <td><label for="text">HSC :</label></td>
                <td><input type="text" name="hsc"  value="<?php echo $hsc; ?>"></td>
            </tr>

            <tr>
                <td><label for="text">Undergraduade :</label></td>
                <td><input type="text" name="hons"  value="<?php echo $hons; ?>"></td>
            </tr>

            <tr>
                <td><label for="file">Re-submit your CV</label></td>
                <td><input type="file" name="cv" ></td>
            </tr>

            <tr><td><h5>PASSWORD:</h5></td></tr>
                    <tr>
                        <td><label for="pass">password:</label></td>

                        <td><input type="password" name="pass"></td>
                    </tr>

                    <tr>
                        <td><label for="pass">Confirm password:</label></td>
                        <td><input type="pass" name="cpass" ></td>
                    </tr>

                <tr><td><h5>IMAGE:</h5></td></tr>

                    <tr>
                        <td>
                            <label for="file">upload new image:</label>

                        </td>
                        <td><input type="file" name="img"></td>
                    </tr>
                    <tr>
                        <tr><td><input type="submit" name="update" value="Update" id = "submit_page"></td></tr>
                        <br><br>
                        
                    </tr>
                </table>
               

            </form>
</hr>

</body>

</html>

