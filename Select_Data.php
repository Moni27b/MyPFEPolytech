<?php
include("Conn_Bdd.php");
$sqlutilisateur   = "SELECT * FROM Utilisateurs";
  $sqlTracker       = "SELECT * FROM Tracker" ;
  $sqlRouteur       = "SELECT * FROM Routeur";
  $sqlApp       = "SELECT * FROM Appareil";
  $sqlMesure       = "SELECT * FROM Mesure";

  $sqlCalcul  = "SELECT * FROM Mesure,Appareil,Tracker where Mesure.Id_Tracker =Tracker.Id_Tracker and Tracker.Id_Appareil= Appareil.Id_Appareil and Mesure.Date_Mesure NOT BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 1 day)   order by Mesure.Id_Tracker, Mesure.Id_Mesure";

  $resultUtilisateur = $conn->query($sqlutilisateur);
  $resultTracker = $conn->query($sqlTracker );
  $resultRouteur = $conn->query($sqlRouteur);
  $resultApp = $conn->query($sqlApp);
  $resultMesure = $conn->query($sqlMesure);

  $resultCalcul = $conn->query($sqlCalcul);






  ?>
