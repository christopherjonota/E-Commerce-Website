<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "ws101Project";

$conn = "";
    
try{
    // Create connection
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
}
catch(mysqli_sql_exception){
    echo "could not connect";
    die("ERROR! ERROR! ERROR!ERROR!ERROR!");
}