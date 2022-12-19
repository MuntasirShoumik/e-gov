
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "../css/interfacestyle.css" />
    <link rel = "stylesheet" type = "text/css" href = "../css/transection.css" />
    <script src = " ../js/ac_validation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href = "../css/interfaceStyle.css" />
    <script src = " ../js/ac_validation.js"></script>
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


    <!-- <div class = "land_logo">
        <a href ="#"><img src = "../image/landlogo.png" width = "130" height = "50"></a>
</div>

<nav>
    <ul>
        <li><a href = "ac_home.php"> Home</a>
        <li><a href = "#"> About us</a>
        <li><a href = "../view/contact.php"> Contact</a>
        <li><a href = "../view/logout.php"> logout </a>
    </ul>
</nav> -->

<?php
include("../control/ac_taxUpdateControl.php")
?>

</div>
<body>
    <form action = "" method= "POST" enctype = "multipart/form-data">
        <table>
            <tr>
                <td>
                    <input type="text" name= "NID" placeholder = "insert nid" require>
                </td>
                <td>
                    <input type="text" name= "Amount" placeholder = "insert amount" require>
                </td>
                <td>
                <input type="submit" name="Add" value="Add" id = "submit_page">
                </td>
            </tr>
            <tr>
            <td>
                
                </td>
            </tr>
        </table>
</form>
<table>
    <tr>
        <td><input type="text" name= "search" placeholder = "Search user by name or nid" id= "search"></td>
</tr>
</table>
<table border="1">

        <thead>
            <tr>
                <th>Title</th>
                <th>Name</th>
                <th>NID</th>
                <th>Tax Amount</th>
            </tr>
        </thead>
        <tbody id="output">
        </tbody>
    </table>
    <script type="text/javascript">

        $(document).ready(function() {

            $("#search").keyup(function() {

                var input = $(this).val();

                if (input != "") {

                    $.ajax({
                        url: "../control/ac_search.php",
                        method: "POST",
                        data: {
                            input: input
                        },
                        success: function(data) {
                            $("#output").html(data);
                        }
                    });
                } else {
                    $("#output").css("display", "none");
                }
            });
        });
    </script>
</body>

</html>