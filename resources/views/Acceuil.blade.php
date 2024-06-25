<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="asset/CSS/bootstrap.min.css">
  <link rel="stylesheet" href="asset/CSS/owl.carousel.min.css">
  <link rel="stylesheet" href="asset/CSS/owl.theme.default.min.css">
  <link rel="stylesheet" href="asset/CSS/STYLE_combinéACCEUIL.css">
  <title>Accueil</title>
</head>

<body>
  <div>
    <img class="w-100" src='https://placehold.it/1265x495' alt='' />
  </div>
  <!---DEBUT NAVBAR-->
  <nav class="navigation fixed-top">
    <a class="logo" href="#">ArtisanExpress</a>
    <div class="nav-link">
        <ul>
            <li>
              <a href="{{ route('accueil') }}">Acceuil</a>
            </li>
            <li >
              <a href="{{route('formulaire_de_service')}}">Demande de services</a>
            </li>
            <li >
              <a href="{{route('abonnement')}}">Abonnement</a>
            </li>
            <li >
              <a href="Contact.html">Contact</a>
            </li>

          </ul>
          <button  id="btn1" class="btn"> <a href="{{route('enregistrementForm')}}">S'inscrire</a></button>
          <button id="btn2" class="btn "> <a href="{{route('connexionForm')}}">Se connecter</a> </button>
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

  <!---DEBUT DE CATEGORIE DES SERVICES-->
  <h1 style="color: #ff9900;" id="entetecategories" class="text-center mt-5 mb-5"> DECOUVREZ NOS SERVICES </h1>
  <div class="categories">
    <div class="container ">
      <div class="row">

      @foreach($metiers as $metier)
        <div class="col-md-3 mt-3">
          <a href="{{route('infosurnosservice', $metier->id)}}">
            <div class="card ima">
              <div class="mage">
                <img class="imgs" src="{{$metier->image}}" alt="">
              </div>
              <h5>{{$metier->domaine}}</h5>
            </div>
          </a>
        </div>
      @endforeach

      </div>
      <h3 class=" mt-3  text-center"> <a class="btn btn-outline-success fw-bold" href="{{route('plusService')}}"> VOIR PLUS
          ...</a></h3>
    </div>
  </div>
  <!---FIN DE CATEGORIE DES SERVICES-->

   <!---DEBUT PRESENTATION DE LA PLATE FORME-->

   <div class="container mt-3 p-5">
    <h2 class="text-center" style="color: #ff9900;">PRESENTATION DE LA PLATEFORME</h2>
    <div class="row mt-3" id="box">
      <h3 class="mb-3"> Pourquoi choisir ArtisanExpress ?</h3>
      <div class="box2 col-md-5">

        <p> <strong>Sélection Rigoureuse d'Artisans :</strong>Nous travaillons uniquement avec des artisans qualifiés et
          expérimentés, pour vous garantir un service de qualité.</p>
        <p> <strong>Facilité de Réservation en Ligne : </strong>Réservez vos services artisanaux en toute simplicité, à
          tout moment et depuis n'importe où.</p>
        <p> <strong> Personnalisation Avancée :</strong>Trouvez l'artisan idéal pour votre projet en filtrant par
          spécialité, disponibilité et tarifs.</p>
        <p> <strong>Avis Clients Authentiques :</strong> Consultez les évaluations et les témoignages de nos clients
          précédents pour faire le meilleur choix.</p>


      </div>
      <div class="box1 col-md-7"> <img id="plateformevideo" src='https://placehold.it/600x300' alt='' /></div>

    </div>
  </div>
  <!---FIN PRESENTATION de la PLATE FORME-->



  <!---DEBUT COMMENT CA MARCHE-->
  <div class=" mt-5">
    <div class="container">
      <div class="haut text-center">
        <h2 style="color: #ff9900; ">COMMENT ÇA MARCHE ?</h2>
        <p class="mt-3">Demandez un service, recevez la liste des artisans disponibles, contactez celui de votre choix
          et profitez d'un service sur mesure.</p>
      </div>
      <div class="row">
        <div class="col-md-4 mt-4">
          <div>
            <img id="imagefloat" src="asset/image/images (7).jfif" alt="">
            <div>
              <h5>Decrivez votre problème</h5>
              <p>Indiquez vos besoins et vos préférences dans notre formulaire de demande et
                choisissez l'heure et la date qui vous conviennent pour les travaux.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4">
          <div>
            <img id="imagefloat" src="asset/image/images.png" alt="">
            <div>
              <h5>Choix d'artisans</h5>
              <p> Une fois votre réservation effectuée, nous vous enverrons une liste d'artisans disponibles à
                proximité. Vous pourrez alors contacter l'artisan de votre choix directement pour finaliser les détails
                de votre projet.
                Une fois votre accord avec l'artisan confirmé, préparez-vous à accueillir sa venue.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4">
          <div>
            <img id="imagefloat" src="asset/image/images (8).jfif" alt="">
            <div>
              <h5>Modalités de paiement et d'évaluation client</h5>
              <p>Une fois les travaux terminés, vous réglez votre facture soit en espèces, soit par mobile money,
                en fonction de l'artisan. Enfin, vous pouvez évaluer l'artisant grâce à un lien que nous vous enverrons.
              </p>
            </div>
          </div>
        </div>
      </div>
    
    </div>

  </div>
  <!---FIN COMMENT CA MARCHE-->



  <!---DEBUT FAQ foire aux questions-->
  <div class="container">
    <h2 style="color: #ff9900;" class="text-center mt-5">FOIRE AUX QUESTIONS</h2>
    <div class="accordion accordion-flush mt-4" id="accordionFlushExample">
      <div class="accordion-item border">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Accordion Item #1
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
            <code>.accordion-flush</code> class. This is the first item's accordion body.
          </div>
        </div>
      </div>
      <div class="accordion-item border">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            Accordion Item #2
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
            <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being
            filled with some actual content.
          </div>
        </div>
      </div>
      <div class="accordion-item border ">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Accordion Item #3
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
            <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting
            happening here in terms of content, but just filling up the space to make it look, at least at first glance,
            a bit more representative of how this would look in a real-world application.
          </div>
        </div>
      </div>
    </div>
  </div>

  <!---FIN FAQ foire aux questions-->

  <!---DEBUT AVIS TEMOIGNAGE-->

  <h2 style="color: #ff9900;" class="text-center  mt-5">TEMOIGNAGE CLIENT</h2>
  <div id="avis" class="mt-3">
    <div class="owl-carousel">
      <div>
        <div class="box-top">
          <div class="username">
            <strong>sophiate</strong>

          </div>
          <div class="etoile">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Commodi nostrum praesentium nam numquam ut porro eaque provident nulla asperiores ex.</p>
        </div>
      </div>
      <div>
        <div class="box-top">
          <div class="username">
            <strong>sophiate</strong>

          </div>
          <div class="etoile">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Commodi nostrum praesentium nam numquam ut porro eaque provident nulla asperiores ex.</p>
        </div>
      </div>
      <div>
        <div class="box-top">
          <div class="username">
            <strong>sophiate</strong>

          </div>
          <div class="etoile">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Commodi nostrum praesentium nam numquam ut porro eaque provident nulla asperiores ex.</p>
        </div>
      </div>
      <div>
        <div class="box-top">
          <div class="username">
            <strong>sophiate</strong>

          </div>
          <div class="etoile">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Commodi nostrum praesentium nam numquam ut porro eaque provident nulla asperiores ex.</p>
        </div>
      </div>
      <div>
        <div class="box-top">
          <div class="username">
            <strong>sophiate</strong>

          </div>
          <div class="etoile">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Commodi nostrum praesentium nam numquam ut porro eaque provident nulla asperiores ex.</p>
        </div>
      </div>

    </div>

  </div>






  <!--<div class="mt-4 col-12 text-center">
    <a href="temoignage.html"><i class="fa-solid fa-plus"></i> DEPOSER LE VOTRE</a>
    <a class="mx-3" href="#"> TOUS LES TEMOIGNAGES<i class="fa-solid fa-arrow-right"></i></a>
  </div>-->

  <!---FIN DE TEMOIGNAGES-->







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
  <script src="asset/js/bootstrap.bundle.min.js"></script>
  <script src="asset/js/jquery.min3.js"></script>
  <script src="asset/js/owl.carousel.min.js"></script>
  <script>

    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      autoplay: true,
      autoplayTimeout: 1000,
      autoplayHoverPause: true,
      nav: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 5
        }
      }
    })
  </script>
</body>

</html>
        