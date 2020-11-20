<div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="logo.png" alt="">
    <h2>Solution Export/Import</h2>
    <p class="lead">Cette solution développée par SRDi permet de faire de l'<b>Export/Import</b> des données sur les différentes <b>MarketPlace</b> et le site web <b>Rezervoir</b>.
    Le fichier de stock à importé doit être au format CSV.</p>
  </div>

  <div class="text-center">
        <div class="alert alert-success" role="alert">
          <strong>Veuillez choisir la MarketPlace ou le site Rezervoir pour votre opération</strong>.
        </div>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Menus</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
              <a href="" style="text-align: center;">
                <button type="button" class="btn btn-info" style="width: 250px; margin: auto;">Catégories</button>
              </a>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <a href="">
              <button type="button" class="btn btn-info" style="width: 250px; margin: auto;">Produits</button>
            </a>
          </div>
        </li>
      </ul>
    </div>

    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Formulaire d'importation Produits</h4>
      <form action="" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
        <div class="mb-3">
          <label for="username">Fichier CSV</label>
          <div class="input-group">
            <input type="file" class="form-control" name="fichier" id="username" placeholder="fichier à importé" required>
            <div class="invalid-feedback" style="width: 100%;">
              Champ obligatoire.
            </div>
          </div>
        </div>

        <hr class="mb-4">

        <button class="btn btn-primary btn-lg btn-block" type="submit" name="valider">Organiser et télécharger</button>
      </form>
    </div>
  </div>
</div>


<style>
    img:hover {
      opacity: 0.5;
    }
</style>
