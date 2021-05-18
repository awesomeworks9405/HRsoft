<?php

    $servername = "localhost";
    $database_name = "root";
    $password = "";
    $database = "sdi";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $database_name, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        header('location: index');
    }

?>