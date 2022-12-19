<?php
include("../model/db.php");

$mydb = new AC_DB();
$connobj = $mydb->openConn();

$result = $mydb->getHist($connobj, "tax_history");

$sum = 0;
$count = 0;

foreach ($result as $row) 
{
    $sum = $sum + $row['paid'];
    $count ++;
}

echo "Total Tax Collection: ".$sum."tk";
echo "<br>";
echo "Total Number of User: ".$count;


?>