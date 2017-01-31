<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("Conn_Bdd.php");

$sql       = "SELECT * FROM Mesure,Appareil,Tracker where Mesure.Id_Tracker =Tracker.Id_Tracker and Tracker.Id_Appareil= Appareil.Id_Appareil and Mesure.Date_Mesure NOT BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 1 day)   order by Mesure.Id_Tracker, Mesure.Id_Mesure";

$resultMesure = $conn->query($sql);


while ($row = $resultMesure->fetch()  ){
      $date[] = $row['Date_Mesure'];
      $tracker[] = $row['Nom']; // Nom de l'appareil
      $nb = count($date); // Nombre de ligne de envoyer de la table Mesure

}
/*    Recuperer la date de debut , mode = ON  */
for($i = 0; $i < $nb; $i+=2) {
  //echo $i.'<br>';
   $datedebut[] = $date[$i] ;
  $id[] = $tracker[$i]; // Nom de l'appareil
  //echo 'id '.$id[].'date '.$datedebut[];
  //echo '<br>';
}

/*    Recuperer la date de debut , mode = OFF */
for($i = 1; $i < $nb; $i+=2) {
  //echo $i.'<br>';
   $datefin[] = $date[$i];
  $id[] = $tracker[$i];

//  echo '<br>';
}

/* recuper le nombre d'heure d'utilisation*/
$selectdata = array();
for($i = 0; $i < $nb/2; $i+=1){

  $time = $datedebut[$i];
  $timenow =$datefin[$i];

  // Create fake date
  	$time =  DateTime::createFromFormat("Y-m-d H:i:s", $time);
  	$timenow = DateTime::createFromFormat("Y-m-d H:i:s", $timenow);

  	// Compute difference
  	$interval = $time->diff($timenow);

    // Afficher date


    $date1 = $time->format('Y-m-d');
    $date2 = $timenow->format('Y-m-d');


  	// Afficher la difference
    //echo '<br>';

  	 $jours = $interval->format('%d');
     $heures = $interval->format('%h');
     $minutes = $interval->format('%i');





     // Convertir les jours en heures
     $minutes = round($heures/60, 1);
      $jr = 24*$jours;

      $total =  $jr + $heures + $minutes ;





     $info =array( "Nom_Appareil" => $id[$i],"total" => $total, "datedebut" =>$date1, "datefin" => $date2 );
     $selectdata[]=$info;
     // Durée d'utilisation
     /*if ($date1 == $date2){
            echo  'Appareil: '.$id[$i].' A la durée d\'utilisation est '.$jours.' et '.$heures.' '.$minutes.' le  '.$date1 ;
     }else {
              echo   'Appareil: '.$id[$i].' A la durée d\'utilisation est '.$jours.' et '.$heures.' '.$minutes.'entre le  '.$date1.'  et le  '.$date2;
     }*/
}


  echo json_encode($selectdata);

 ?>
