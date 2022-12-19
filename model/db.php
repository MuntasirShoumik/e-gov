<?php

class AC_DB
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
        $sql_string = "SELECT * FROM " . $tableName . " WHERE nid='" . $nid . "'";

        if (mysqli_num_rows($conn->query($sql_string)) == 1) {

            return true;
        } else {

            return false;
        }
    }



    function insertUser($conn, $tablename, $fname, $lname, $gender, $dateofbirth, $fathername, $mothername, $uname, $nid, $address, $city, $postal, $email, $phone, $ssc, $hsc, $hons, $cv, $pass, $img)
    {

        $sql_string = "INSERT INTO $tablename  (fname, lname, gender, dateofbirth, fathername, mothername, uname, nid, address, city, postal, email, phone, ssc, hsc, hons, cv, pass, img) VALUES ('$fname', '$lname', '$gender', '$dateofbirth', '$fathername', '$mothername', '$uname', '$nid', '$address', '$city', '$postal', '$email', '$phone', '$ssc', '$hsc', '$hons', '$cv', '$pass', '$img')";

        if ($conn->query($sql_string) === true) {

            return true;
        } else {
            return false;
        }
    }

    function CheckUser($conn, $tablename, $nid, $password)
    {
        $result = $conn->query("SELECT * FROM " . $tablename . " WHERE nid='" . $nid . "' AND pass='" . $password . "'");
        return $result;
    }

    function deleteUserHist($conn, $tableName, $nid)
    {
        $result = $conn->query("DELETE FROM $tableName WHERE nid = '$nid'");
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function totalTaxCollect($conn, $tablename)
    {
        $result = $conn->query("SELECT SUM(paid) FROM $tablename");
    }
    // function deleteHistory($conn, $tableName, $nid)
    // {
    //     $sql_string = "DELETE FROM $tableName WHERE nid = '$nid'";
    // }

    function ShowAll($conn, $tablename)
    {
        $result = $conn->query("SELECT * FROM  $tablename");
        return $result;
    }

    function getHist($conn, $table)
    {
        $sql_string = "SELECT * FROM $table";

        return $conn->query($sql_string);
    }

    function ShowAllTaxList($conn, $tablename)
    {
        $result = $conn->query("SELECT * FROM  $tablename WHERE isApproved = 1");
        return $result;
    }

    function ShowAllTaxListSearch($conn, $table, $name)
    {

        $sql = "SELECT * FROM $table WHERE name LIKE '%" . $name . "%' OR NID LIKE '%" . $name . "%'";
        return $conn->query($sql);
    }


    function insertAmount($conn, $table, $nid, $amount)
    {

        $result = $conn->query("UPDATE $table SET amount = $amount WHERE NID = '$nid'");
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function getAmount($conn, $table, $nid)
    {
        $sql_string = "SELECT amount from $table WHERE NID = '$nid'";
        return $conn->query($sql_string);
    }

    function reset($conn, $table, $due, $nid)
    {

        $result = $conn->query("UPDATE $table SET paid = 0, due = $due WHERE NID = '$nid'");
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function updateAcc(
        $conn,
        $table,
        $fname,
        $lname,
        $gender,
        $fathername,
        $mothername,
        $address,
        $city,
        $postal,
        $email,
        $phone,
        $ssc,
        $hsc,
        $hons,
        $cv,
        $pass,
        $img,
        $nid
    ) {
        $result = $conn->query("UPDATE $table SET fname = '$fname',lname='$lname',gender = '$gender',fathername='$fathername',   
        mothername='$mothername', address='$address', city='$city',postal = '$postal', email='$email',
        phone = '$phone', ssc = '$ssc', hsc = '$hsc', hons = '$hons',cv='$cv', pass = '$pass', img = '$img' WHERE NID = '$nid'");
        if ($result) {
            return true;
        } else {
            return false;
        }
    }




    function CloseCon($conn)
    {
        $conn->close();
    }
}
