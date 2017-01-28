<?php


include ("Conn_Bdd.php");

$sql = "SELECT   count(id) as id ,Profil  FROM Utilisateurs GROUP BY Profil ";

$result = $conn->query($sql);

$selectdata = array();

while($row = $result->fetch()) {
  //echo  $row['Id_Mesure'] . "\t" . $row['Adresse_Routeur']. "\n";
  $selectdata []= $row;


}

echo json_encode($selectdata);

?>
