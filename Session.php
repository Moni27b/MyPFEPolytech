<?php

// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session


if (isset($_SESSION['Nom']) && isset($_SESSION['Prenom']) &&isset($_SESSION['id']) &&isset($_SESSION['Profil'])) {


}
else {

  die( "Login required." );
}

?>
