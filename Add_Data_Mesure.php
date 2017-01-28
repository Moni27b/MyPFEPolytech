<?php
    // Connect to MySQL
    include("Conn_Bdd.php");

    // Prepare the SQL statement
    $adrr = $_GET['AddrR'];
    $adrrTracker = $_GET["IdT"];
    $res = $conn->query("SELECT Id_Routeur FROM Routeur WHERE Adresse_Mac = '$adrr'");
    $resT = $conn->query("SELECT Id_Tracker FROM Tracker WHERE Adresse_Mac = '$adrrTracker'");
    $row = $res->fetch();
    $rowT = $resT->fetch();
    $id =  $row["Id_Routeur"];
    $idT =  $rowT["Id_Tracker"];

      $SQL = "INSERT INTO Mesure (Id_Tracker,Adresse_Routeur,Mode, Id_Routeur) VALUES ('".$idT."', '".$_GET["AddrR"]."', '".$_GET["Mode"]."','".$id."')";
      // Execute SQL statement
      $conn->exec($SQL);

      //$result = mysql_query($SQL) or die('Failed to update site table<br><br>'.mysql_error());
      echo 'donnee ajouter';
// http://localhost/PFE_Tracker/Add_Data_Mesure.php?IdT=azza&AddrR=33:33:33:33:33&Mode=ON
//http://localhost/PFE_Tracker/Add_Data_Mesure.php?IdT=44:55:66:77:88&AddrR=44:44:44:44&Mode=ON
//http://localhost/PFE_Tracker/Add_Data_Mesure.php?IdT=45:43:33:33:33:33&AddrR=44:44:44:44&Mode=ON
?>
