<?php

//database info
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = 'railway_db' ;

// Create connection
    $conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //to close the connection
//$conn->close();
?>