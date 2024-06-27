<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="asset/CSS/bootstrap.min.css">
  <link rel="stylesheet" href="asset/CSS/STYLE_combinéACCEUIL.css">
  <title>Document</title>
</head>

<body>

  <!--DEBUT NAVBAR -->
  <div>
    <img  id="imagecontact" src='https://placehold.it/1265x300' alt='' />
  </div>
       
  @extends('Layout.navbar')
  <!--FIN NAVBAR -->

  <div class="container w-75 mt-5" id="parent">

    <div class="mb-4">
      <h2 class="fw-bold text-center"> DECOUVREZ NOS DIFFERENTES PACKS PUBLICITAIRES
        ADAPTÉES À VOS BESOINS</h2>

    </div>
    <div class="row">
      <div class="col-md-4 mt-3">
        <div id="s3_first">
          <div class="text-center">
            <h4>Basique </h4>
            <p> 3000f/Mois </p>
          </div>
          <div class="span">
            <p>✔️ Mise en avant de votre profil dans les resultats de recherche</p>
            <p>✔️ </p>
            <p>✔️ Eligible aux récompenses</p>
            <p>✔️ Accès à tous les cours du niveau</p>
            <p>✔️ Accès aux web conférences</p>
            <p>✔️ Eligible aux récompenses</p>
          </div>
          <div id="s3_btn">
            <a class="btn btn-outline-success" href="">Souscrire</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mt-3">
        <div id="s3_first">
          <div class="text-center">
            <h4> Standard </h4>
            <p> 3000f/Mois </p>
          </div>
          <div class="span">
            <p>✔️ partage de votre profil sur les reseaux</p>
            <p>✔️ Accès aux web conférences</p>
            <p>✔️ Eligible aux récompenses</p>
            <p>✔️ Accès à tous les cours du niveau</p>
            <p>✔️ Accès aux web conférences</p>
            <p>✔️ Eligible aux récompenses</p>
          </div>
          <div id="s3_btn">
            <a class="btn btn-outline-success" href="">Souscrire</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mt-3">
        <div id="s3_first">
          <div class="text-center">
            <h4> Premium</h4>
            <p> 3000f/Mois </p>
          </div>
          <div class="span">
            <p>✔️ Accès à tous les cours du niveau</p>
            <p>✔️ Accès aux web conférences</p>
            <p>✔️ Eligible aux récompenses</p>
            <p>✔️ Accès à tous les cours du niveau</p>
            <p>✔️ Accès aux web conférences</p>
            <p>✔️ Eligible aux récompenses</p>
          </div>
          <div id="s3_btn">
            <a class="btn btn-outline-success" href="">Souscrire</a>
          </div>
        </div>
      </div>





    </div>
  </div>






  <!---DEBUT DE FOOTER-->

  @extends('Layout.footer')

  <!--- FIN DE FOOTER-->








<script src="asset/js/navbar.js"></script>
<script src="asset/js/jquery.min3.js"></script>
  <script src="asset/js/bootstrap.bundle.min.js"></script>
</body>

</html>