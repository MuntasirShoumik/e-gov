<?php
session_start();

if (session_destroy()) {
    header("Location: /SecH/e-gov/view/user_login.php"); // Redirecting To login Page
}
