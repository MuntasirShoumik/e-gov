
<?php

include("../model/db.php");


$mydb = new AC_DB();
$connobj = $mydb->openConn();

session_start();

$result = $mydb->getHist($connobj, "tax_history");

echo "<h3> User Transection History </h3>";
echo "<table border = " . "2" . ">";
echo "<tr>";
echo "<td>Nid</td>";
echo "<td>Date</td>";
echo "<td>Paid</td>";
echo "<td>Due</td>";
echo "</tr>";

foreach ($result as $row) 
{
    echo "<tr>";
    echo "<td>" .$row['nid'] . " </td>";
    echo "<td>" .$row['date'] . " </td>";
    echo "<td>" .$row['paid'] . "</td>";
    echo "<td>" .$row['due'] . "</td>";
    echo "</tr>";
}

echo"</table>";

if(isset($_POST["delete"])){

    $mydb = new AC_DB();
    $connobj = $mydb->openConn();

    $result = $mydb ->deleteUserHist($connobj, "tax_history",$_POST['NID']);
   
    if($_POST['NID']){
        echo "All transection from ". $_POST['NID'] ." hasbeen deleted successfully";
    }
    
    else{
        echo "Unable to delete data";
    }
    $mydb->CloseCon($connobj);
}

?>