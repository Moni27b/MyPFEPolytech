<?php

include("Conn_Bdd.php");


$login = $_POST['login'];
$motdepasse = $_POST['motdepasse'];



$sql = "SELECT * FROM Utilisateurs WHERE IPN = '$login'  AND Mot_De_Passe = '$motdepasse'";


$result = $conn->query($sql);






if (!$row = $result->fetch()){
  echo '<body onLoad="alert(\'IPN ou Mot de Passe incorrect.\')">';
  die( "IPN ou Mot de Passe incorrect." );
  } else {
    // on la démarre :)
  session_start ();
  // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
  $_SESSION['id'] = $row['id'];
  $_SESSION['Nom'] = $row['Nom'];
  $_SESSION['Prenom'] = $row['Prenom'];
  $_SESSION['Profil'] = $row['Profil'];

    //header('Location: /Home.php');
    //echo '<body onLoad="alert(\'Connection en cours.\')">';
    if ($_SESSION['Profil'] == 'Utilisateur') {
		    header('Location: HomeUser.php');
	       }
  	else {
  		  header('Location: Home.php');
  	}

  }

?>
