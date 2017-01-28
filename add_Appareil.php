<?php

include("Conn_Bdd.php");
try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $sth = $conn->prepare("INSERT INTO Appareil (Nom, Type, Marque) VALUES
            (?,?,?)");



            $sth->execute(array($_POST['Nom'],$_POST['Type'],$_POST['Marque']));

            header("location: AdminAppareil.php");

        } catch (PDOException $pe) {
            die("Could not connect to the database $db_name :" . $pe->getMessage());
        }

?>
