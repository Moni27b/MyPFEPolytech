<form method="post" action="add_Tracker.php">
    <div class="bd-example">
      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" href="#exampleModal" data-whatever="@mdo">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter</button>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="exampleModalLabel">Ajouter un Tracker</h4>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="MacAdresse" class="form-control-label">Adresse Mac</label>
                  <input type="text" class="form-control" id="MacAdresse" placeholder="exp :5E:FF:56:A2:AF:15" name="MacAdresse">
                </div>
                <div class="form-group">
                  <?php include("Select_Data.php"); ?>
                  <label for="IdApp" class="form-control-label">Id Appareil</label>
                  <select class="form-control" id="IdApp" placeholder="Choisir appareil" name="IdApp">
                    <?php while($row = $resultApp->fetch()) {?>
                    <option><? echo $row['Nom']; ?></option>

                      <?php } ?>
                  </select>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
              <input type="submit" value="Ajouter" class="btn btn-primary"></button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
