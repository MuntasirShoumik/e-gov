<?php

include("../model/db.php");

$mydb = new AC_DB();

$connobj = $mydb->openConn();


$result = $mydb->ShowAllTaxListSearch($connobj, "land_owner", $_POST['input']);



if (mysqli_num_rows($result) > 0) {

    foreach ($result as $row) {

        echo "  <tr>

        <td>" . $row['title'] . "</td>

        <td>" . $row['name'] . "</td>

        <td>" . $row['NID'] . "</td>

        <td>" . $row['amount'] . "</td>

      </tr>";

    }

} else {

    echo "<tr><td>0 result's found</td></tr>";

}

?>