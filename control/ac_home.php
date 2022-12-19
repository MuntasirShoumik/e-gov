
<?php
include("../model/db.php");


$mydb = new AC_DB();

$connobj = $mydb->openConn();




$result = $mydb->ShowAllTaxList($connobj, "land_owner");


echo "<table border = "."1".">";

echo "<tr>";
echo "<td>title</td>";
echo "<td>name</td>";
echo "<td>nid</td>";
echo "<td>email</td>";
echo "<td>phone</td>";
echo "<td>paid</td>";
echo "<td>due</td>";
echo "</tr>";

foreach ($result as $row) {
echo "<tr>";


    echo "<td> ". $row['title'] ." </td>" ;

    echo "<td>".$row['name']."</td>" ;

    echo "<td>" .$row['NID']."</td>" ;

    echo "<td> ".$row['email']."</td>" ;

    echo "<td>".$row['mobile']." </td>" ;
    echo "<td>".$row['paid']." </td>" ;
    echo "<td>".$row['due']." </td>" ;
    
echo "</tr>";
}

echo "</table>";


$mydb->CloseCon($connobj);

?>