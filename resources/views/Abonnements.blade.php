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
       
  <nav class="navigation fixed-top">
    <a class="logo" href="#">ArtisanExpress</a>
    <div class="nav-link">
        <ul>
            <li>
              <a href="Acceuil.html">Acceuil</a>
            </li>
            <li >
              <a href="Formulairedemandedeservice.html">Demande de services</a>
            </li>
            <li >
              <a href="Abonnements.html">Abonnement</a>
            </li>
            <li >
              <a href="Contact.html">Contact</a>
            </li>

          </ul>
          <button id="btn1" class="btn"> <a href="inscription.html">S'inscrire</a></button>
          <button id="btn2" class="btn "> <a href="Connecter.html">Se connecter</a> </button>
        </div>
          <div class="user-profil">
            <img src="asset/image/d.jpg" alt="" class="user-img" onclick="toggleMenu()">

            <div class="menu-wrap" id="subMenu">
              <div class="sub-menu ">
                <div class="user-2">
                  <img src="asset/image/d.jpg" class="user-imgs" alt="">
                  <h3>Timite Adja</h3>
                </div>
                <hr>
                <a href="POFIL.html" class="user-icone">
                  <i class="fa-solid fa-user"></i>
                  <p>Mon profil</p>
                  <span>></span>
                </a>
                <a href="modifierinformation.html" class="user-icone">
                  <i class="fas fa-user-edit"></i>
                  <p>Modifier mes information</p>
                  <span>></span>
              </a>
                </a>
                <a href="#" class="user-icone">
                  <i class="fa-solid fa-arrow-right-from-bracket"></i>
                  <p>Se deconnecter</p>
                  <span>></span>
                </a>
              </div>
            </div>
          </div>


    <div class="iconebars"> <i class="fa-solid fa-bars"></i></div>
</nav>

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

  <footer class="mt-5">
    <div class="container" id="foote1">
      <div class="row">
        <div class="col-lg-4 col-md-4  col-6">
          <h4 class="mb-4 ">Suivez-nous</h4>
          <i class="fa-brands fa-facebook fa-lg"></i>
          <i class="fa-brands fa-twitter fa-lg"></i>
          <i class="fa-brands fa-instagram fa-lg"></i>
          <i class="fa-brands fa-linkedin fa-lg"></i>
          <i class="fa-brands fa-youtube fa-lg"></i>

          <h4 class="mt-5 fw-bold">Inscrivez-vous!</h4>
        </div>
        <div class="col-lg-4 col-md-4 col-6">
          <h4>Navigation rapide</h4>
          <ul>
            <li><a style="color: white;" href=""> Acceuil</a></li>
            <li><a style="color: white;" href="">Abonnement</a></li>
            <li><a style="color: white;" href="">Contact</a></li>
            <li><a style="color: white;" href="">Guides</a></li>
            <li><a style="color: white;" href="">FAQ</a></li>
            <li><a style="color: white;" href="">Services</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-4  col-10">
          <h4 class="">Coordonnées de contact</h4>
          <ul></ul>
          <li> Adresse e-mail :
            <a href=""> <br> nom@votreentreprise.com</a>
          </li>
          <li> Téléphone : <a href="">+225XXXXXXXXXXX</a></li>
          <li>Adresse : <a href="">Cocody 2 plateaux</a></li>

          </ul>
        </div>
      </div>
    </div>

    <hr>
    <h6 class="text-white text-center">&copy;2024 ENTREPRISE 41. Tous droits réservés</h6>
  </footer>

  <!--- FIN DE FOOTER-->








<script src="asset/js/navbar.js"></script>
<script src="asset/js/jquery.min3.js"></script>
  <script src="asset/js/bootstrap.bundle.min.js"></script>
</body>

</html>