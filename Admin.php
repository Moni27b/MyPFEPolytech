<!DOCTYPE html>
<html lang="fr">

<?php include ("head.php");
if ($_SESSION['Profil'] == 'Administrateur') {
}
else {
 die( "Il faut etre Admin" );
}
?>




  <body>

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <img src="img/Groupe_Renault.png" width="100" height="30"></img>
          </a>
          <a class="navbar-brand" href="#">Tracker des appreils mobile</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="./Home.php">Accueil</a></li>
            <li class="dropdown">
            <a href="Statistique.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Indicateurs <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="Statistique.php">Statistique Overview </a></li>
              <li><a href="StatistiqueTab.php">Tableaux des Mesures </a></li>
              <li><a href="StatistiqueLoc.php">Localisation </a></li>
              <li><a href="StatistiqueUtilisation.php">L'utilisation </a></li>
              <li><a href="#"></a></li>
            </ul>
            </li>
            <li class="active"><a  href="#contact">Admin</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">

                <ul class=" bouton-right">
                    <a  href="./Deconnect.php" class="btn btn-danger " role="button">
                          <span class="glyphicon glyphicon-log-out " aria-hidden="true"></span>Se deconnecter
                    </a>
                </ul>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
              <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
              <li><a href="AdminTracker.php">Tracker</a></li>
              <li><a href="AdminAppareil.php">Appareils</a></li>
              <li><a href="AdminUtilisateurs.php">Utilisateurs</a></li>
            </ul>

          </div>
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Vue Globale</h1>

                    <div class="dashhead">


                <!-- On selectionne les donneés de la base Mysql -->
                <?php include("Select_Data.php"); ?>

                      <div id="container" style="width:100%; height:400px;"></div>
                      <div id="user" style="width:100%; height:400px;"></div>
                    </div>
                  </div>



          </div>
        </div>
      </div>

    </div> <!-- /container -->
      <?php include("buttom.php"); ?>
      <script src="js/chart.js"></script>
      <script src="https://code.highcharts.com/highcharts.js"></script>
      <script src="https://code.highcharts.com/modules/exporting.js"></script>

  </body>
</html>
