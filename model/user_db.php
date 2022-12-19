<?php

use LDAP\Result;

class User_DB
{


    function openConn()
    {

        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "e_gov";
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

        return $conn;
    }

    function isExist($conn, $tableName, $nid)
    {
        $sql_string = "SELECT * FROM " . $tableName . " WHERE NID='" . $nid . "'";

        if (mysqli_num_rows($conn->query($sql_string)) == 1) {

            return true;
        } else {

            return false;
        }
    }



    function insertUser($conn, $tableName, $title, $name, $father, $mother, $birthday, $NID, $gender, $email, $mobile, $division, $city, $address, $password, $get_notification, $image, $pdf)
    {

        $sql_string = "INSERT INTO $tableName (title,name,father,mother,birthday,NID,gender,email,mobile,division,city,address,password,get_notification,image,pdf,isApproved) VALUES ('$title','$name','$father','$mother','$birthday','$NID','$gender','$email','$mobile','$division','$city','$address','$password','$get_notification','$image','$pdf',1)";

        if ($conn->query($sql_string) === true) {

            return true;
        } else {
            return false;
        }
    }






    function CheckUser($conn, $table, $nid, $password)
    {
        $result = $conn->query("SELECT * FROM " . $table . " WHERE NID='" . $nid . "' AND password='" . $password . "'");
        return $result;
    }








    // function ShowAll($conn, $table)
    // {
    //     $result = $conn->query("SELECT * FROM  $table");
    //     return $result;
    // }

    function UpdateUserPinfo($conn, $table, $title, $name, $father, $mother, $dob, $gender, $nid)
    {
        $sql = "UPDATE $table SET title='$title', name='$name',father ='$father',mother='$mother',birthday = '$dob',gender='$gender' WHERE NID='$nid'";

        if ($conn->query($sql) === TRUE) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return  $result;
    }

    function UpdateUserContect($conn, $table, $email, $phone, $divi, $city, $address, $nid)
    {
        $sql = "UPDATE $table SET email='$email', mobile='$phone' , address ='$address' , division='$divi' , city='$city' WHERE NID='$nid'";

        if ($conn->query($sql) === TRUE) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return  $result;
    }

    function UpdateUserOthers($conn, $table, $newPass, $img, $pdf, $nid)
    {
        $sql = "UPDATE $table SET password='$newPass', image = '$img'  , pdf = '$pdf' WHERE NID='$nid'";

        if ($conn->query($sql) === TRUE) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return  $result;
    }


    function insertIssue($conn, $tableName, $date, $nid, $name, $mobile, $issue, $des)
    {

        $sql_string = "INSERT INTO $tableName (date,nid,name,mobile,issue,des) VALUES ('$date','$nid','$name','$mobile','$issue','$des')";

        if ($conn->query($sql_string) === true) {

            return true;
        } else {
            return false;
        }
    }

    function getTax($conn, $table, $nid)
    {
        $sql_string = "SELECT amount, paid, due FROM " . $table . " WHERE NID='" . $nid . "'";

        return $conn->query($sql_string);
    }

    function setTax($conn, $table, $amout, $paid, $due, $nid)
    {
        $sql_string = "UPDATE $table SET amount = $amout, paid=$paid, due = $due WHERE NID='$nid'";

        if ($conn->query($sql_string) === true) {

            return true;
        } else {
            return false;
        }
    }

    function setHist($conn, $table, $nid, $date, $paid, $due, $tax_for)
    {
        $sql_string = "INSERT INTO $table (nid,date,paid,due,tax_for) VALUES ('$nid','$date','$paid','$due','$tax_for')";

        if ($conn->query($sql_string) === true) {

            return true;
        } else {
            return false;
        }
    }

    function getHist($conn, $table, $nid)
    {

        $sql_string = "SELECT date, paid, due, tax_for FROM " . $table . " WHERE NID='" . $nid . "'";

        return $conn->query($sql_string);
    }

    function getContects($conn, $table, $name)
    {
        $sql = "SELECT * FROM $table WHERE firstname LIKE '%" . $name . "%' OR presentaddress LIKE '%" . $name . "%'";
        return $conn->query($sql);
    }


    function deleteUser($conn, $table, $nid)

    {

        $result = $conn->query("DELETE FROM $table WHERE NID = '$nid'");

        if ($result) {

            return true;
        } else {

            return false;
        }
    }

    function histbeforeDate($conn, $table, $nid, $date)
    {
        return $result = $conn->query("SELECT * FROM $table WHERE NID = '$nid' AND date < '$date'");
    }
    function histAfterDate($conn, $table, $nid, $date)
    {
        return $result = $conn->query("SELECT * FROM $table WHERE NID = '$nid' AND date > '$date'");
    }

    function CloseCon($conn)
    {
        $conn->close();
    }
}
