<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="asset/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="asset/CSS/owl.carousel.min.css">
    <link rel="stylesheet" href="asset/CSS/owl.theme.default.min.css">
    <link rel="stylesheet" href="asset/CSS/styleprofilcombine_.css">
    <title>Profil artisans</title>
</head>

<body>
    <!--DEBUT NAV-->
    <div id="nav">
    
        <nav class="container">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('accueil')}}"><u>Retour à l'acceuil </u> </a>
                </li>
                <li class="nav-item">
                    <a  class="nav-link" href="#"><i class="fa-regular fa-bell"></i></a>
                </li>
                <img src="storage\{{ Auth::user()->photo }}" alt="" class="user-img" onclick="toggleMenu()">
                <div class="menu-wrap" id="subMenu">
                    <div class="sub-menu ">
                        <div class="user-2">
                            <img src="storage\{{ Auth::user()->photo }}" class="user-imgs" alt="">
                            <h3>{{ Auth::user()->nom }}</h3>
                        </div>
                        <hr>
                        <a href="{{ route('profil') }}" class="user-icone">
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
                            <form action="{{route('logout')}}" method="post">
                              @method("delete")
                              @csrf
                              <button style="border: none; background: none;">se déconnecter</button>
                            </form>
                            <span>></span>
                        </a>
                    </div>
                </div>
            </ul>
        </nav>
    </div>
    <!--FIN NAV-->

<nav class="user">
    <ul class="nav justify-content-center ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('profil')}}">Tableau de bord</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="publication.html">Publication d'article</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listedarticle.html">Article publier</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="Abonnements.html" >Mon abonnement</a>
        </li>
      </ul>
    </nav>
  
    <div style="background-color: #E7E6E3; padding-top: 10px; "  >
        <div class="container ">
            <div class="row ">
        <div class="col-md-4 mt-2 ">
            <img id="img"  src='storage\{{ Auth::user()->photo }}' alt=''/>
        </div>
    <div class="col-md-4">
        <h1 class="mt-5 text-center">{{ Auth::user()->nom }} {{ Auth::user()->prenoms }}
        </h1>
        <h5 class="mt-5">Metier : {{ $metier->domaine }}</h5>
    </div>
    <div  class="mt-5 col-md-4 text-center ">
         <a id="what" href="https.//wa.me/ {{ Auth::user()->numero_whatsapp }}"><i class="fa-brands fa-whatsapp"></i></a> 

         <a id="tel" href="tel: {{ Auth::user()->phone}}"><i class="fa-solid fa-phone"></i></a>
        
    
      </div>
      <div class="mt-4 col-md-6"><h5>Année d'experience <br>
         <p style="margin-left: 50px;" >10ans</p> </h5></div>

    <div  class="  col-md-6"><h5>Lieu du travail : {{ Auth::user()->quartier }} / {{ Auth::user()->quartier }}</h5></div>
    


    <div id="evaluation" class="mt-2 col-md-6 "><h5>Evaluation</h5>
      <div class="etoile">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-regular fa-star"></i>
      </div>
      <div class="mt-2 col-12">
    <a href="temoignage.html"><i class="fa-solid fa-plus"></i> DEPOSER LE VOTRE</a>

  </div>
    </div>




    <div class=" mt-2 col-md-6 "><h5>Service proposée:</h5>
    <p>{{ $metier->description}}</p>
    </div>
    <div class=" mt-2 col-md-6"><h5>Jour de travail:</h5>
    <p>Lundi,Mardi,Mercredi</p></div>


    <div class=" mt-5 col-12"> <h2>Témoignage</h2> 
    
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
  
  </div>






    <div class=" mt-5 col-12"> <h2>Création</h2>
      <div>
        <div class="row">
          <div  class="col-md-4 mt-4">
            <div class="card">
        <h3>titre de l'article</h3>
        <p>presentation de l'article
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur aperiam dolor repellendus, 
        enim sint neque iure! Ipsa, repellendus! Magni 
        aspernatur repellendus, fuga enim ullam nisi deleniti expedita corporis facere numquam?
        </p>
        <img class="mb-4" src="asset/image/images (1).jfif" alt="">
    
        </div></div>
        <div  class="col-md-4 mt-4">
          <div class="card">
      <h3>titre de l'article</h3>
      <p>presentation de l'article
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur aperiam dolor repellendus, 
      enim sint neque iure! Ipsa, repellendus! Magni 
      aspernatur repellendus, fuga enim ullam nisi deleniti expedita corporis facere numquam?
      </p>
      <img class="mb-4" src="asset/image/images (1).jfif" alt="">
  
      </div></div>
      <div  class="col-md-4 mt-4">
        <div class="card">
    <h3>titre de l'article</h3>
    <p>presentation de l'article
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur aperiam dolor repellendus, 
    enim sint neque iure! Ipsa, repellendus! Magni 
    aspernatur repellendus, fuga enim ullam nisi deleniti expedita corporis facere numquam?
    </p>
    <img class="mb-4" src="asset/image/images (1).jfif" alt="">

    </div></div>
        </div>
      </div>
    </div>

    
    </div>
    </div>
    
    
    </div>
    
    







    <script src="asset/js/navbar.js"></script>
    <script src="asset/js/jquery.min3.js"></script>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
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