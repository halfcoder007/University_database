<?php

function new_conn(){
	$servername = "localhost";
$username = "root";
$password = "";
try {
    $conn = new PDO("mysql:host=".$servername.";dbname=vit_movies", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
    return $conn;
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
}
?>