<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("Conn_Bdd.php");

$sql       = "SELECT * FROM Mesure,Appareil,Tracker,Routeur where Mesure.Id_Routeur = Routeur.Id_Routeur and Mesure.Id_Tracker =Tracker.Id_Tracker and Tracker.Id_Appareil= Appareil.Id_Appareil and Mesure.Date_Mesure NOT BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 1 day)   order by Mesure.Id_Tracker, Mesure.Id_Mesure";

$resultMesure = $conn->query($sql);


while ($row = $resultMesure->fetch()  ){
      $date[] = $row['Date_Mesure'];
      $tracker[] = $row['Nom'];
      $loca[]= $row['Localisation'];
      $nb = count($date); // Nombre de ligne de envoyer de la table Mesure

}
/*    Recuperer la date de debut , mode = ON  */
for($i = 0; $i < $nb; $i+=2) {
  //echo $i.'<br>';
   $datedebut[] = $date[$i] ;
  $id[] = $tracker[$i];
  $loca[]=$loca[$i];

  //echo 'id '.$id[].'date '.$datedebut[];
  //echo '<br>';
}

/*    Recuperer la date de fin , mode = OFF */
for($i = 1; $i < $nb; $i+=2) {
  //echo $i.'<br>';
   $datefin[] = $date[$i];
  $id[] = $tracker[$i];
  $loca[]=$loca[$i];

//  echo '<br>';
}

/* recuper le nombre d'heure d'utilisation*/

for($i = 0; $i < $nb/2; $i+=1){

  $datedebut[$i];
  $datefin[$i];

  // Create fake date

  	$datedebut[$i] =  DateTime::createFromFormat("Y-m-d H:i:s", $datedebut[$i]);
  	$datefin[$i] = DateTime::createFromFormat("Y-m-d H:i:s", $datefin[$i]);

  	// Compute difference
  	$interval = $datedebut[$i]->diff($datefin[$i]);

    // Afficher date
    $datedebut[$i] = $datedebut[$i]->format('d-m-Y');
    $datefin[$i] = $datefin[$i]->format('d-m-Y');

    // localisation
    $loca[]=$loca[$i];
  	// Afficher la difference
    //$annee[$i] = $interval->format('Y');
    //$mois[$i] = $interval->format('m');
  	 $jours[$i] = $interval->format('%d');
     $heures[$i] = $interval->format('%h');
     $minutes[$i] = $interval->format('%i');

     // Convertir les jours en heures

      $minutes[$i] = round($heures[$i]/60, 2);
      $jr[$i] = 24*$jours[$i];
      $total[$i] = $jr[$i] + $heures[$i] + $minutes[$i];

      $taux[$i] = $total[$i] * 0.1;




}





 ?>
