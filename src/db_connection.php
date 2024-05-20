<?php
    $dbHost="127.0.0.1";
    $dbUser="root";
    $dbPass="";
    $dbdatabaseName="productspos";

    $conn=mysqli_connect($dbHost,$dbUser,$dbPass,$dbdatabaseName);
    
    if(!$conn){
        die("Connection Failed.") ;
    }
?>