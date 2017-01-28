<?php

include("Conn_Bdd.php");
try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            $id = $_GET['id'];

            $sqldel = "DELETE FROM Utilisateurs WHERE id = '$id'" ;
            $conn->query($sqldel);

            header("location: AdminUtilisateurs.php");

        } catch (PDOException $pe) {
            die("Could not connect to the database $db_name :" . $pe->getMessage());
        }



?>
