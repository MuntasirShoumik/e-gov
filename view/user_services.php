<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if (empty($_SESSION["username"])) {
    header("Location: /SecH/e-gov/view/user_login.php"); // Redirecting To login page
}
include("../control/user_services_control.php");


?>


<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/user_style.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
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

    <div class="issue-container">

        <h3> Issue Box:</h3>
        <br>
        <hr>
        <br>
        <form class="issue-form" action="" method="post">

            <table>
                <tr>
                    <td><label for="issue">select issue:</label></td>
                    <td><select name="issue" id="issue">
                            <option value="payment"> payment issue</option>
                            <option value="approval"> approval issue</option>
                            <option value="connection"> connection issue</option>
                        </select></td>
                </tr>
                <tr>
                    <td><label for="description">description: </label></td>
                    <td><textarea name="description" id="description" cols="60" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" name="send" id="send" value="send" /></td>
                </tr>
            </table>
        </form>
    </div>

    <br>
    <hr>
    <br>

    <div class="search-container">

        <h3>Contect office:</h3>

        <div class="search-box">
            <input type="text" name="search" placeholder="search name or location" id="search">
        </div>

        <div class="search-box-result">
            <table border="1">
                <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Location</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody id="output">

                </tbody>
            </table>
        </div>






        <script type="text/javascript">
            $(document).ready(function() {

                $("#search").keyup(function() {
                    var input = $(this).val();
                    if (input != "") {
                        $.ajax({
                            url: "../control/user_search.php",
                            method: "POST",
                            data: {
                                input: input
                            },
                            success: function(data) {
                                $("#output").html(data);
                            }
                        });
                    } else {
                        $("#output").css("display", "nonne");
                    }
                });
            });
        </script>
    </div>





</body>

</html>