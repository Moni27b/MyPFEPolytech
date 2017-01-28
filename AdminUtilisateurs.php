<!DOCTYPE html>
<html lang="en">
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
              <li><a href="Admin.php">Overview</a></li>
              <li><a href="AdminTracker.php">Tracker</a></li>
              <li><a href="AdminAppareil.php">Appareils</a></li>
              <li class="active"><a href="#">Utilisateurs <span class="sr-only">(current)</span></a></li>
            </ul>
          </div>
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">


                <!-- On selectionne les donneés de la base Mysql -->
                <?php include("Select_Data.php"); ?>
                <!-- Table Utilisateurs -->
                <h2 class="sub-header">Table Utilisateurs</h2>
                <div class="panel-body">
                  <div class="panel panel-default filterable">
                      <div class="panel-heading">
                          <!-- Bouton ajouter un tracker  -->
                          <?php include("btn/btn_add_Utilisateur.php"); ?>
                            <div class="pull-right">
                                <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                            </div>
                      </div>

                <!-- Table -->

                  <table id="example" class="table table-bordered ">
                    <thead>
                      <tr  class="filters">
                           <th><input type="text" class="form-control" placeholder="Id Utilisateur" disabled></th>
                           <th><input type="text" class="form-control" placeholder="Nom" disabled></th>
                           <th><input type="text" class="form-control" placeholder="Prenom" disabled></th>
                           <th><input type="text" class="form-control" placeholder="IPN" disabled></th>
                           <th><input type="text" class="form-control" placeholder="Mot de Passe" disabled></th>
                           <th><input type="text" class="form-control" placeholder="Email" disabled></th>
                           <th><input type="text" class="form-control" placeholder="Profil" disabled></th>
                           <th></th>
                       </tr>
                   </thead>

                <?php while($row = $resultUtilisateur->fetch()) {?>
                  <tr>
                    <td><? echo $row['id']; ?></td>
                    <td><? echo $row['Nom']; ?></td>
                    <td><? echo $row['Prenom']; ?></td>
                    <td><? echo $row['IPN']; ?></td>
                    <td><? echo $row['Mot_De_Passe']; ?></td>
                    <td><? echo $row['Email']; ?></td>
                    <td><? echo $row['Profil']; ?></td>
                    <td><a href="delUser.php?id=<?echo $row['id'];?>"onclick="return confirm('Vous voulez vraiment supprimer !');">Delete</a></td>

                  </tr>
                  <?php } ?>
                </table>
               </div>
            </div>
          </div>
        </div>
      </div>

    </div> <!-- /container -->

    <?php include("buttom.php"); ?>

  </body>
</html>
