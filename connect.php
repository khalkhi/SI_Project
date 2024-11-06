<?php


//database info

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "railway_db";
//create connection

try{
    $conn = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);


    $conn->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
}

    catch (PDOException $e){
        echo "Error in connection";
    }

    //ANOTHER WAY TO CONNECT DB
    //////////////////////////////





   /* $servername = "localhost";
    $username = "root";
    $password = "'";
    $db_name = "railway_db" ;

// Create connection
    $conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
/*
//to close the connection
//$conn->close();

*/
?>