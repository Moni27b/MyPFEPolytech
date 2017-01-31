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
              <li><a href="StatistiqueTab.php">Tableau des Mesures  </a></li>
              <li><a href="StatistiqueLoc.php">Localisation  </a></li>
              <li><a href="StatistiqueUtilisation.php"> Utilisation </a></li>
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
      <?php include("CalculTab.php");?>
      <h2 class="sub-header">Tableau des mesures </h2>

      <div class="panel-body">

        <div class="panel panel-default filterable">
          <div class="panel-heading">
            <p>  </p>
            <div class="pull-right">
               <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
           </div>
         </div>

      <!-- Table -->

      <table id="example" class="table table-bordered">
        <thead>
          <tr class="filters">
               <th><input type="text" class="form-control" placeholder="Nom de l'appareil" disabled></th>
               <th><input type="text" class="form-control" placeholder="Date" disabled></th>
               <th><input type="text" class="form-control" placeholder="Dureé d'utilisation (h) " disabled></th>
               <th><input type="text" class="form-control" placeholder="Localisation" disabled></th>

           </tr>
       </thead>
            <?php for($i = 0; $i < $nb/2; $i+=1) {?>
                    <tr>
                      <td  style="text-align:center;"><? echo $id[$i]; ?></td>
                      <td  style="text-align:center;"><? echo $datefin[$i]; ?></td>
                      <td  style="text-align:center;"><? echo $total[$i]; ?></td>
                      <td  style="text-align:center;"><? echo $locat[$i]; ?></td>

                    </tr>
             <?php } ?>
      </table>
     </div>

     </div>

   </div>
 </div>
</div>
</div>

    </div> <!-- /container -->

    <?php include("buttom.php"); ?>
    <script src="js/filtre.js"></script>
    <script src="js/script.js"></script>
    <script>
              $(document).ready(function() {
                    $('#example').DataTable( {
                       "order": [[ 1, "desc" ]],
                      dom: 'Bfrtip',
                      buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                        } );
                      } );



    </script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>



  </body>
</html>
