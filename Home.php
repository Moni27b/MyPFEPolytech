<!DOCTYPE html>
<html lang="en">

<?php include ("head.php"); ?>

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
            <li class ="active"><a href="./Home.php">Accueil</a></li>
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
            <li ><a  href="Admin.php">Admin</a></li>



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
      <div class="jumbotron">
        <h1> <?php echo 'Bonjour '.$_SESSION['Nom'].'  '.$_SESSION['Prenom'].'.'; ?></h1>
        <p><?php
        setlocale(LC_TIME, "fr_FR");
        echo strftime('Nous sommes le %A %d %B %Y, %H:%M');

        ?></p>
        <p>To see the difference between static and fixed top navbars, just scroll.</p>
        <p>

        </p>
      </div>

    </div> <!-- /container -->

    <?php include("buttom.php"); ?>


  </body>
</html>
