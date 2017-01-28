<?php

include("Conn_Bdd.php");
try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $nom = $_POST['IdApp'];
            $res = $conn->query("SELECT Id_Appareil FROM Appareil WHERE Appareil.Nom = '$nom'" );
            $row = $res->fetch();
             $id =  $row["Id_Appareil"];

            $sth = $conn->prepare("INSERT INTO Tracker (Adresse_Mac, Id_Appareil) VALUES
            (?,?)");



            $sth->execute(array($_POST['MacAdresse'],$id));

            header("location: AdminTracker.php");
        } catch (PDOException $pe) {
            die("Could not connect to the database $db_name :" . $pe->getMessage());
        }

?>
