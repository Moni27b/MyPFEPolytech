<?php


include ("Conn_Bdd.php");

$sql = "SELECT count(Nom) as iNom ,Localisation, Nom FROM Appareil,Routeur, Tracker, Mesure WHERE Tracker.Id_Appareil= Appareil.Id_Appareil AND Tracker.Id_Tracker = Mesure.Id_Tracker AND Routeur.Id_Routeur = Mesure.Id_Routeur  group by Localisation, Nom";
$result = $conn->query($sql);

$selectdata = array();

while($row = $result->fetch()) {
  //echo  $row['Id_Mesure'] . "\t" . $row['Adresse_Routeur']. "\n";
  $selectdata []= $row;


}

echo json_encode($selectdata);

?>
