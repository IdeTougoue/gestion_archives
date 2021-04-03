<?= include ( '../_Includes/Header.php' ); ?>
 
  <!-- Emballage de contenu. Contient le contenu de la page -->
  <div  class = " content-wrapper ">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>AJOUTER UN DOCUMENT</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
    <!-- En-tête de contenu (En-tête de page) -->
    <section class="content-header">
      <div class="container-fluid">
      <div class="col-md-12">
      <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Formulaire d'ajout</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form>
            <div class="card-body">
              <div class="form-group col-md-4">
                <label for="exampleInputName">Nom du document</label>
                <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name">
              </div>
              <div class="form-group">
                <label for="exampleInputDetail">Details</label>
                <input type="text" class="form-control" id="exampleInputDetails" placeholder="details">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Catégorie </label>
                <div class="form-group">
                  <select class="form-control select2" style="width: 100%; " placeholder="Selectionner une Catégorie">
                    <option selected="selected">marché bouclé</option>
                    <option>projet </option>
                    <option>Marché</option>
                    <option>Appel d'offre</option>
                    <option>dossier fiscal</option>
                    <option>dossiers de soumission d'appel d'offre</option>
                    <option>Marché en cours</option>
                  </select>
                </div>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">OK</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

          </div>
          <!-- /.col -->
      </div> 
      <!-- /.conteneur-fluide -->
    </section>
    <!-- /.contenu -->
  </div>

<?= include ( '../_Includes/footer.php' ); ?> 