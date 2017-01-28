<?php


include ("Conn_Bdd.php");

$sql = "SELECT count(Id_Mesure) as Id_Mesure ,DATE_FORMAT(Date_Mesure, '%d/%m/%Y') as Date_Mesure, Mode  FROM Mesure  GROUP BY DATE_FORMAT(Date_Mesure, '%d/%m/%Y'), Mode ";

$result = $conn->query($sql);

$selectdata = array();

while($row = $result->fetch()) {
  //echo  $row['Id_Mesure'] . "\t" . $row['Adresse_Routeur']. "\n";
  $selectdata []= $row;


}

echo json_encode($selectdata);

?>
