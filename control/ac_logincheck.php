<?php

include("../model/db.php");


if (isset($_POST["login"])) {
    $mydb = new AC_DB();
    $connobj = $mydb->openConn();

    if (mysqli_num_rows($mydb->CheckUser($connobj, "accountant", $_POST["nid"], $_POST["pass"])) > 0) {
        echo "user exist";

        session_start();
        $_SESSION["fname"] = $_POST["fname"];
        $_SESSION["nid"] = $_POST["nid"];
        $_SESSION["password"] =  $_POST["pass"];
        $mydb->CloseCon($connobj);
        if(isset($_POST['remember']))
    {
         $nid = $_POST['nid'];
         $pass = $_POST['pass'];
        $remember;
        setcookie('AcNID',$nid, time()+60*60*24*30,"/");
        setcookie('AcPass',$pass, time()+60*60*24*30,"/");
    }
        header("Location: /SecH/e-gov/view/ac_home.php");
    } else {
        echo "user does not exist";
    }
    $mydb->CloseCon($connobj);

}
