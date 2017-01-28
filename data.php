<?php


include ("Conn_Bdd.php");

$sql = "SELECT  count(Id_Appareil) as Id_Appareil,Nom  FROM Appareil GROUP BY Nom";
$result = $conn->query($sql);

$selectdata = array();

while($row = $result->fetch()) {
  //echo  $row['Id_Mesure'] . "\t" . $row['Adresse_Routeur']. "\n";
  $selectdata []= $row;


}

echo json_encode($selectdata);

?>
