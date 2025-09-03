<?php
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "db_awfulportfolio";

    $conn = new mysqli($host, $username, $password, $database); 

    if ($conn->connect_error) { 
        die("Verbinding mislukt: " . $conn->connect_error); 
    } else {
        echo "Verbinding geslaagd!";
    }
?>
<!DOCTYPE html>
<html lang="nl">
<head>              
