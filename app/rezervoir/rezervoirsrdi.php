<div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="logo.png" alt="">
    <h2>Solution Export/Import</h2>
    <p class="lead">Cette solution développée par SRDi permet de faire de l'<b>Export/Import</b> des données sur le <b>Site Web Rezervoir</b></p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Navigations</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div style="margin:auto">
              <a href="index.php?page=home" style="text-align: center;">
                <button type="button" class="btn btn-info" style="width: 250px; margin: auto;"><i class="fa fa-home"></i>&nbsp;&nbsp;Accueil</button>
              </a>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div style="margin:auto">
            <a href="index.php?page=amazon">
              <button type="button" class="btn btn-info" style="width: 250px; margin: auto;"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>&nbsp;&nbsp;Amazon</button>
            </a>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div style="margin:auto">
            <a href="index.php?page=rakuten">
              <button type="button" class="btn btn-info" style="width: 250px; margin: auto;"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>&nbsp;&nbsp;Rakuten</button>
            </a>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div style="margin:auto">
            <a href="index.php?page=cdiscount">
              <button type="button" class="btn btn-info" style="width: 250px; margin: auto;"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>&nbsp;&nbsp;Cdiscount</button>
            </a>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div style="margin:auto">
            <a href="index.php?page=rezervoir">
              <button type="button" class="btn btn-info" style="width: 250px; margin: auto;"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>&nbsp;&nbsp;Rezervoir</button>
            </a>
          </div>
        </li>
      </ul>
    </div>

    <div class="col-md-8 order-md-1">

      <div class="py-5 text-center">
          <img class="d-block mx-auto mb-4" src="assets/img/rezervoir.jpg" style="width: 300px; height: 175px; margin-top:-100px;" alt="">
      </div>

      <hr class="mb-4" style="margin-top:-60px;">

      <div class="py-5 text-center" style="margin-top:-50px;">
        <p class="lead">Le fichier à importé doit-être au format CSV.</p>
      </div>

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

            <button class="btn btn-primary btn-lg btn-block" type="submit" name="valider">Importez vos stocks sur le site Rezervoir</button>
        </form>

    </div>
  </div>
</div>


<style>
    img:hover {
      opacity: 0.5;
    }
</style>
