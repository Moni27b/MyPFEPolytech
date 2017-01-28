<form method="post" action="add_Utilisateur.php">
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
                                <h4 class="modal-title" id="exampleModalLabel">Ajouter un utilisateur</h4>
                            </div>
                            <div class="modal-body">
                              <form>
                                <div class="form-group">
                                  <label for="Nom" class="form-control-label">Nom</label>
                                  <input type="text" class="form-control" id="Nom" placeholder="Nom" name="Nom">
                                </div>
                                <div class="form-group">
                                  <label for="Prenom" class="form-control-label">Prenom</label>
                                  <input type="text" class="form-control" id="Prenom" placeholder="Prenom" name="Prenom">
                                </div>

                                <div class="form-group">
                                  <label for="IPN" class="form-control-label">IPN</label>
                                  <input type="text" class="form-control" id="IPN" placeholder="IPN" name="IPN">
                                </div>

                                <div class="form-group">
                                  <label for="Mot_De_Passe" class="form-control-label">Mot de Passe</label>
                                  <input type="text" class="form-control" id="Mot_De_Passe" placeholder="Mot_De_Passe" name="Mot_De_Passe">
                                </div>

                                <div class="form-group">
                                  <label for="Email" class="form-control-label">Email</label>
                                  <input type="text" class="form-control" id="Email" placeholder="Email" name="Email">
                                </div>

                                <div class="form-group">
                                  <label for="Profil" class="form-control-label">Profil</label>
                                  <select '<input type="text" class="form-control" id="Profil" placeholder="Profil" name="Profil">' >
                                    <option>Utilisateur</option>
                                    <option>Administrateur</option>
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
  </form>
