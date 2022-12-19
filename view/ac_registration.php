<?php
if (empty($_SESSION["nid"]) == false) {
    header("Location: /SecH/govttax/view/ac_home.php");
}
    include("../control/ac_control.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
    <script src = "../js/ac_validation.js"></script>
</head>


<body>
<div class="nav-container">
        <div class="head">
            <img height="50" width="130" src="../image/landlogo.png" alt="">
        </div>
        <div class="navbar">
            <ul class="nav-items">
            <li><a href = "../view/main_interface.php"> Home</a>
            <li><a href = "#"> About us</a>
            <li><a href = "../view/contact.php"> Contact</a>
               
            </ul>
        </div>
    </div>
    <div>fixed</div>

<div class = "hight-box">

</div>
<div class = "heading-container">
<h2>Accountant Registration Form </h2>

</div>




<form action = "" method= "POST" enctype = "multipart/form-data"  onsubmit="return validInfoForm()">
            <table class = reg_table>
            <tr>
                        <td><label><h3>Personal Information</h3></label></td>
                    </tr>
                <tr>
                    <td>
                        <label>Firstname:</label>
                    </td>
                    <td> <input type="text" name="fname" id = "fname" placeholder="Enter your firstname" >
                </td>
                <td> 
                <span id = "fname_valid"></span>
                <td>
                </tr>
                 <tr>
                       <td>
                      <label>Lastname: </label> 
                     </td>
                    <td>
                     <input type="text" name="lname" id = "lname" placeholder="Enter your lastname" > 
                      </td>
                      <td><span id = "lname_valid"></span></td>
                </tr>
                </tr>
                 <tr><td><label>Gender: </label></td>
                    <td>
                           <input type="radio" name="gender" id = "gender" value="male">Male
                          <input type="radio" name="gender" id = "gender" value="female">Female
                         <input type="radio" name="gender" id = "gender" value="others">Others
                 </td>
                 <td> <span id = "gender_valid"></span></td>
                  </tr>
                  <tr>
                    <td><label>Date of Birth:</label></td>
                     <td><input type="date" name="dateofbirth" id = "dateofbirth"></td>
                     <td> <span id = "dateofbirth_valid"></span> </td>
                 </tr>
                 <tr>
                        <td><label>Father's Name: </label></td>
                        <td><input type="text" name="fathername" id = "fathername"  placeholder ="Enter your father's name" >
                    </td>
                    <td> <span id = "fathername_valid"></span></td>
                    </tr>
                    <tr>
                     <td><label>Mother's Name: </label></td>
                     <td><input type="text" name="mothername" id = "mothername"  placeholder ="Enter your mother's name" >
                    </td>
                    <td> <span id = "mother_valid"></span></td>
                 </tr>
                    
                  <tr>
                    <td>
                    <label>User ID: </label>
                       </td>
                       <td>
                       <input type="text" name="uname" id = "uname" placeholder="Enter your username" >
                    </td>
                    <td><span id = "uname_valid"></span></td>
                 </tr>
                 <tr>
                        <td> <label>NID Number: </label></td>
                        <td>
                        <input type="nid" name="nid" id = "nid" placeholder="XXXXXXXXXXXX" value = "<?php if(isset($_COOKIE['userNID']))?>">
                    </td>
                    <td> <span id = "nid_valid"></span><td>
                        </td>
                    </tr>
                    <tr>

</div>

                    </tr>
                        <td><label><h3>Address & Contact</h3></label></td>
                    </tr>
                    <td> <label>Address: </label></td>
                    <td><input type="text" name="address" id = "address" placeholder="Enter your address " >
                </td>
                <td> <span id = "address_valid"></span></td>
                   <tr>
                  <td><label for="city">City:</label></td>
                    <td>
                  <select name="city" id="city">
                  <option value="DHAKA">DHAKA</option>
                  <option value="CHATTOGRAM">CHATTOGRAM</option>
                  <option value="KHULNA">KHULNA</option>
                  <option value="SYLHET">SYLHET</option>
                  <option value="RAJSHAHI">RAJSHAHI</option>
                  <option value="THAKURGAON">THAKURGAON</option>
                  <option value="COXS_BAZAR">COXS_BAZAR</option>
                  <option value="BARISHAL">BARISHAL</option>
                  <option value="RANGPUR">RANGPUR</option>
                  <option value="FENI">FENI</option>
                 </select> 
                </td>
                <td> <span id = "city_valid"></span></td>
            </tr>
                <td>
                </td>
            <tr>
                    <td>
                    <label for="postal">Postal Code:</label>
                    <td><select name="postal" id="postal">
                    <option value="1211">1211</option>
                    <option value="2222">2222</option>
                    <option value="5342">5342</option>
                    <option value="6333">6333</option>
                    <option value="8565">8565</option>
                    <option value="9755">9755</option>
                    <option value="5453">5453</option>
                    <option value="3254">3254</option>
                    <option value="0767">0767</option>
                    <option value="2434">2434</option>
                    </td>
                    </select>
                    </td>
                    <td> <span id = "postal_valid"></span></td>
                </tr>
                   
                    <tr>
                        <td> <label>Email: </label></td>
                        <td><input type="email" name="email" id = "email"placeholder="Enter your email" >
                    </td>
                    <td> <span id = "email_valid"></span></td>
                    </tr>
                    
                    <tr>
                        <td>
                        <label for="phone">Phone:</label><br><br>
                    </td>
                        <td>
                        <input type="tel" id="phone" name="phone" id = "phone" placeholder="01XXXXXXXXX" >
                        <small>Format: 01XXXXXXXXX</small><br><br></td>
                        <td>
                        </td>
                        <td> <span id = "phone_valid"></span></td>
                        <tr>
                    </tr>
                    </tr>
                    <tr>
                        <td><label><h3>Academic Qualification</h3></label></td>
                    </tr>

                    <tr>
                       <td><label>SSC          : </label> </td>
                    <td>
                     <input type="text" name="ssc" id = "ssc" placeholder="GPA"  >
                     <small> Format: 5.00 </small><br><br></td> 
                     <td> <span id = "sscvalid"></span></td>

                </tr>

                <tr>
                       <td>
                      <label>HSC          : </label> 
                     </td>
                    <td>
                     <input type="text" name="hsc" id = "hsc" placeholder="GPA" > 
                     <small> Format: 5.00 </small><br><br></td>
                     <td><span id = "hsc_valid"></span></td>
                    </tr>
                    <tr>
                       <td>
                      <label>Undergraduade          : </label> 
                     </td>
                    <td>
                     <input type="text" name="hons" id = "hons" placeholder="CGPA"  >
                     <small> Format: 4.00 </small><br><br></td> 
                     <td><span id = "hons_valid"></span></td>
                    </tr>
                    <tr>
                        <td><label>Currieculum Vitae (CV): </label></td>
                        <td> <input type="file"  name="cv" id = "cv" accept="file/*"></td>  
                        <td><span id= cv_valid></span></td>
                    </tr>


                    <tr>
                        <tr>
                    </tr><tr></tr><tr></tr><tr></tr><tr></tr>
                    <tr>
                    <td><label><h3>Password</h3></label></td>
                    </tr>
                    <tr></tr><tr></tr>
                 <td>
                        <label>Password: </label> 
                        </td>
                        <td>
                        <input type="text" name="pass" id = "pass" placeholder ="Enter a New Password" value = "<?php if(isset($_COOKIE['userPass'])) ?>">  
                        <td><span id = pass_valid></span></td>
                    </tr>
                    <tr>
                        <td>
                        <label>Confirm Password: </label> 
                        </td>
                        <td>
                        <input type="text" name="cpass" id = "cpass" placeholder ="Enter your password again"> <td> <?php echo $cpassErr; ?></td> 
                        <td><span id = cpass_valid></span></td>
                    </tr>
                    <tr>
                    </tr><tr></tr><tr></tr><tr></tr><tr></tr>
                        <td><label><h3>Photo</h3></label></td>
                    </tr>

                    <tr>
                        <td><label>Image: </label></td>
                        <td> <input type="file"  name="img" id = "img" accept="image/*"></td>  
                        <td><span id = img_valid></span></td>
                    </tr></tr><tr></tr><tr></tr><tr></tr><tr></tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                    <tr>
                        </td>
                        <td>
                        <input type="submit" name="Submit" value="Register" id = "submit_page">
                        </td>
                        <td><input type="reset" value="Reset" id = "reset_page"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                    <br>
                </table>
                    
</form>
                <div class = "exist">
                    <ul>
                    <li>Already have an account... <a href="../view/ac_login.php">Login <li>
                        <ul>
                    </div>
</body>
</html>
