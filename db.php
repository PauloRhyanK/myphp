<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "usersTest";

    try{
        $conn = new PDO("mysql:host=$host;dbname=$database;charset=utf8",$user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // echo "Conexão bem sucedida";
        
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
?>