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
            <li><a href="./Home.php">Accueil</a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Indicateurs <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="Statistique.php">Statistique Overview </a></li>
              <li><a href="StatistiqueTab.php">Tableaux des Mesures </a></li>
              <li><a href="StatistiqueLoc.php">Localisation </a></li>
              <li><a href="StatistiqueUtilisation.php">Utilisation</a></li>
              <li><a href="#"></a></li>
            </ul>
            </li>
            <li><a href="./Admin.php">Admin</a></li>



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
        <?php include("Select_Data.php"); ?>





        <h2 class="sub-header">Indicateur d'utilisation </h2>

        <form name ="myform4">
        <div class="form-group">
          <label for="Num_CB">Selectionner l'appareil</label>
          <select  class="form-control" id="app" name="app">
            <option  > Choisir </option>
            <?php while($row = $resultApp->fetch()) {?>
            <option  ><? echo  $row['Nom']; ?></option>


              <?php } ?>
          </select>
        </div>
       </form>
       <h4  >Total des heures d'utilisation: </4> <kbd class="bg-primary text-white" id="sum"></kbd>
         <div id="Filtre" style=" margin-top: 40px; width:100%; height:400px;"></div>




    </div> <!-- /container -->

    <?php include("buttom.php"); ?>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="js/chart.js"></script>


  </body>

</html>
