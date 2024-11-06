<?php

// Database info
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "railway_db";

// Create connection with MySQLi
try {
    $conn = new mysqli($serverName, $userName, $password, $dbName);

    // Check connection
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    echo "Connected successfully";
} catch (Exception $e) {
    // Handle connection error
    echo "Error in connection: " . $e->getMessage();
}

// Close the connection
//$conn->close();
/*
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
    //////////////////////////////not working and exception makes pages not show
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