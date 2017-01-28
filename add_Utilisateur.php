<?php

include("Conn_Bdd.php");
try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $sth = $conn->prepare("INSERT INTO Utilisateurs (Nom, Prenom, IPN, Mot_De_Passe, Email, Profil) VALUES
            (?,?,?,?,?,?)");



            $sth->execute(array($_POST['Nom'],$_POST['Prenom'],$_POST['IPN'],$_POST['Mot_De_Passe'],$_POST['Email'],$_POST['Profil']));

            header("location: AdminUtilisateurs.php");
        } catch (PDOException $pe) {
            die("Could not connect to the database $db_name :" . $pe->getMessage());
        }

?>
