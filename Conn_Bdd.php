<?php

$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=PFE_Tracker", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connexion avec succés".'<br />';
    }
catch(PDOException $e)
    {
    echo "Connexion perdu: " . $e->getMessage();
    }



?>
