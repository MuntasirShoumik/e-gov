<?php
include("../model/user_db.php");

$amount = 0;
$paid = 0;
$due = 0;

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$mydb = new User_DB();
$connobj = $mydb->openConn();

$result = $mydb->CheckUser($connobj, "land_owner", $_SESSION["username"], $_SESSION["password"]);


foreach ($result as $row) {

    $title = $row['title'];
    $name = $row['name'];
}

$result = $mydb->getTax($connobj, "land_owner", $_SESSION["username"]);

foreach ($result as $row) {

    $amount = $row['amount'];
    $paid =  $row['paid'];
    $due =  $row['due'];
}



$mydb->CloseCon($connobj);


if (isset($_POST['pay_btn'])) {
    $paid = $_POST['pay_amount'];
    if (!$paid > $amount) {
        $amount =  $amount - $paid;
        $due = $amount;

        $mydb = new User_DB();
        $connobj = $mydb->openConn();

        if ($mydb->setTax($connobj, "land_owner", $amount, $paid, $due, $_SESSION["username"])) {
            echo "paid";
        } else {
            echo "faild";
        }

        $date = date("Y/m/d");
        $mydb->setHist($connobj, "tax_history", $_SESSION["username"], $date, $paid, $due, "land tax");
        $mydb->CloseCon($connobj);
    } else {
        echo "invalid amount";
    }
}
