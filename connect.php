<?php

    $servername = "localhost";
    $argc = "root";

    $password = "";

    $db_name = 'railway_db' ;

// Create connection
    $conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>