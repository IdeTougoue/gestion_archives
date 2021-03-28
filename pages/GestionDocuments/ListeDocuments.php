<?= include('../_Includes/Header.php'); ?>

  <!-- Emballage de contenu. Contient le contenu de la page -->
  <div class="content-wrapper">
    <!-- Emballage de contenu. Contient le contenu de la page -->
  <div  class = " content-wrapper ">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>LISTES DES DOCUMENTS</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
    <!-- En-tête de contenu (En-tête de page) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-12 row">
          <div class="col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-info"><i class="far fa-file"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Nombre de documents</span>
                  <span class="info-box-number">1,410</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-success"><i class="fas fa-chart-pie"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Nombre de categories</span>
                  <span class="info-box-number">410</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
          <!-- /.col -->
        </div>
          
          

        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des documents</h3>

                <div class="card-tools">
                  <a href="AjouterDocument.php" class="btn-sm shadow btn-success">
                    <i class="fas fa-plus"></i> Ajouter
                  </a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Designation du document</th>
                      <th>Insertion</th>
                      <th>Taille</th>
                      <th>Details</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Update software</td>
                      <td>Update software</td>
                      <td>Update software</td>
                      <td>Update software</td>
                    </tr>
                    <tr>
                      <td>Update software</td>
                      <td>Update software</td>
                      <td>Update software</td>
                      <td>Update software</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->

        </div>
      </div> 
      <!-- /.conteneur-fluide -->
    </section>
    <!-- /.contenu -->
  </div>

<?= include ( '../_Includes/footer.php' ); ?> 