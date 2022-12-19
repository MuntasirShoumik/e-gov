<?php

include("../model/db.php");
error_reporting(0);


$mydb = new AC_DB();

$connobj = $mydb->openConn();


$result = $mydb->ShowAllTaxList($connobj, "land_owner");

echo "<h3> USER TAX DETAILS </h3>";
echo "<table border = "."1".">";

echo "<tr>";
echo "<td>title</td>";
echo "<td>name</td>";
echo "<td>nid</td>";
echo "<td>amount</td>";
echo "</tr>";

foreach ($result as $row) {
echo "<tr>";


    echo "<td> ". $row['title'] ." </td>" ;

    echo "<td>".$row['name']."</td>" ;

    echo "<td>" .$row['NID']."</td>" ;

    echo "<td> ".$row['amount']."</td>" ;

    
echo "</tr>";
}

echo "</table>";


$mydb->CloseCon($connobj);



if(isset($_POST["Add"])){

    $mydb = new AC_DB();
   
    $connobj = $mydb->openConn();
    $result = $mydb->getAmount($connobj, "land_owner",$_POST['NID']);
    foreach ($result as $row) {
        
        $amount = $row['amount'];
    }
   
    $amount = $amount+$_POST['Amount'];
    
    $result = $mydb ->insertAmount($connobj, "land_owner",$_POST['NID'],$amount);
   
    if($_POST['NID']=="" && $_POST['Amount'] ==""){
        echo "Filled both box";
    }
    elseif($_POST['NID']=="" || $_POST['Amount']=="" ){
        echo "Filled both box";
    }
    else{
        echo "Tax added";
    }

    $mydb->reset($connobj, "land_owner",$amount,$_POST['NID']);

    $mydb->CloseCon($connobj);
}

?>