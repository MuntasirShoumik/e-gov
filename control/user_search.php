<?php

include("../model/user_db.php");

$mydb = new User_DB();
$connobj = $mydb->openConn();


$result = $mydb->getContects($connobj, "govt_officials", $_POST['input']);

if (mysqli_num_rows($result) > 0) {
    foreach ($result as $row) {
        echo "	<tr>
        <td>" . $row['firstname'] . "</td>
        <td>" . $row['lastname'] . "</td>
        <td>" . $row['presentaddress'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['phone'] . "</td>
      </tr>";
    }
} else {
    echo "<tr><td>0 result's found</td></tr>";
}


// $con = mysqli_connect("localhost", "root", "", "e_gov");
// if (!$con) {
//     echo "connection faild";
// }
