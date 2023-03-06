<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "college";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        
    } 
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>