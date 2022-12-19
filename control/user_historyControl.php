<?php

include("../model/user_db.php");


$mydb = new User_DB();
$connobj = $mydb->openConn();

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if (isset($_POST['Search'])) {

    if (isset($_POST['dateSearch']) && $_POST['con'] == "before") {

        $date = $_POST['dateSearch'];
        $result = $mydb->histbeforeDate($connobj, "tax_history", $_SESSION["username"], $date);
        echo "<table class = " . "hist-tbl" . " border = " . "1" . ">";

        echo "<tr>";
        echo "<td>date</td>";
        echo "<td>tax for</td>";
        echo "<td>paid</td>";
        echo "<td>due</td>";

        echo "</tr>";

        foreach ($result as $row) {
            echo "<tr>";


            echo "<td> " . $row['date'] . " </td>";

            echo "<td> " . $row['tax_for'] . " </td>";

            echo "<td>" . $row['paid'] . "</td>";

            echo "<td>" . $row['due'] . "</td>";


            echo "</tr>";
        }

        echo "</table>";
    } elseif (isset($_POST['dateSearch']) && $_POST['con'] == "after") {
        $date = $_POST['dateSearch'];
        $result = $mydb->histAfterDate($connobj, "tax_history", $_SESSION["username"], $date);
        echo "<table class = " . "hist-tbl" . " border = " . "1" . ">";

        echo "<tr>";
        echo "<td>date</td>";
        echo "<td>tax for</td>";
        echo "<td>paid</td>";
        echo "<td>due</td>";

        echo "</tr>";

        foreach ($result as $row) {
            echo "<tr>";


            echo "<td> " . $row['date'] . " </td>";

            echo "<td> " . $row['tax_for'] . " </td>";

            echo "<td>" . $row['paid'] . "</td>";

            echo "<td>" . $row['due'] . "</td>";


            echo "</tr>";
        }

        echo "</table>";
    }
} else {

    $result = $mydb->getHist($connobj, "tax_history", $_SESSION["username"]);


    echo "<table class = " . "hist-tbl" . " border = " . "1" . ">";

    echo "<tr>";
    echo "<td>date</td>";
    echo "<td>tax for</td>";
    echo "<td>paid</td>";
    echo "<td>due</td>";

    echo "</tr>";

    foreach ($result as $row) {
        echo "<tr>";


        echo "<td> " . $row['date'] . " </td>";

        echo "<td> " . $row['tax_for'] . " </td>";

        echo "<td>" . $row['paid'] . "</td>";

        echo "<td>" . $row['due'] . "</td>";


        echo "</tr>";
    }

    echo "</table>";
}
