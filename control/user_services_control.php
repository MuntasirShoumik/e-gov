<?php
include("../model/user_db.php");

if (isset($_POST["send"])) {

    $issue = $_POST['issue'];
    $des = $_POST['description'];
    $date = date('d-m-y h:i:s');


    if (!empty($issue) && !empty($des)) {
        $mydb = new User_DB();
        $connobj = $mydb->openConn();
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $result = $mydb->CheckUser($connobj, "land_owner", $_SESSION["username"], $_SESSION["password"]);


        foreach ($result as $row) {


            $name = $row['name'];

            $nid = $row['NID'];

            $mobile = $row['mobile'];
        }

        if ($mydb->insertIssue($connobj, "issue", $date, $nid, $name, $mobile, $issue, $des)) {
            echo "issue sent";
        } else {
            echo "problem sending issue";
        }

        $mydb->CloseCon($connobj);
    }
}
