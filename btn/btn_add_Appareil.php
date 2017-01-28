<form method="post" action="add_Appareil.php">
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
              <h4 class="modal-title" id="exampleModalLabel">Ajouter un appareil</h4>
            </div>
            <div class="modal-body">
              <form>

                <div class="form-group">
                  <label for="Nom" class="form-control-label">Nom</label>
                  <input type="text" class="form-control" id="Nom" placeholder="Nom" name="Nom">
                </div>
                <div class="form-group">
                  <label for="Type" class="form-control-label">Type</label>
                  <input type="text" class="form-control" id="Type" placeholder="Type" name="Type">
                </div>
                <div class="form-group">
                  <label for="Marque" class="form-control-label">Marque</label>
                  <input type="text" class="form-control" id="Marque" placeholder="Marque" name="Marque">
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
