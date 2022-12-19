<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
    header("Location: /SecH/e-gov/view/ac_login.php"); // Redirecting To Home Page
}
?>