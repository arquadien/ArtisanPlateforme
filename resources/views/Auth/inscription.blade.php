<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="asset/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="asset/CSS/STYLE_combinéACCEUIL.css">
    <title>Formulaire d'inscription</title>
</head>
<body>
  <div  id="containerinscription" style="background-color: #ff9900;" >
 
    <div class="">
          <h1 style="color:  green;" class="text-center">INSCRIPTION ARTISANT</h1></div>
    
    <form class=" container mt-2" method="Post" action="{{route ('enregistrement')}}" enctype="multipart/form-data">
    @csrf
      <div class="row">
        <div class="col-md-6">
            <label class="form-label" for="" >Nom</label> 
          <input  class="form-control" name="nom" type="text" pattern="[a-zA-Z]+" required>  
        </div>
        <div class="col-md-6" >
            <label class="form-label" for="">Prénoms</label>
          <input  class="form-control" type="text" name="prenoms" pattern="[a-zA-Z]+" required> </div>
        <div  class="col-md-6 motdepasse">
            <label class="form-label" for="">Mot de passe</label>
          <input  class="form-control" type="password" name="mot_de_passe" required>   <i class="fa-regular fa-eye"></i></div>
        
        <div  class="col-md-6 confirmation">
          <label class="form-label" for="">Confirmation mot de passe</label>
          <input  class="form-control" type="password" name="verification_mdp" required>   <i class="fa-regular fa-eye"></i>
        </div>
        
        <div  class="col-md-6">
            <label class="form-label" for="">Numéro de téléphone</label>
          <input class="form-control" name="numero_de_telephone" type="tel" pattern="[0-9]+" required> </div>
          <div  class="col-md-6">
            <label class="form-label" for="">Numéro whatsapp</label>
          <input  class="form-control" type="tel" name="numero_whatsapp" pattern="[0-9]+" required> </div>
          <div  class="col-md-6">
            <label class="form-label" for="">Metier</label>
            <select class="form-control" name="metier_id" id="" required> 
              <option value=""></option>
              @foreach($metiers as $metier)
                <option value="{{$metier->id}}">{{$metier->domaine}}</option>
              @endforeach
             </select>
        </div>
        <div class="col-md-6">
        <label class="form-label" for="">Année d'expérience</label>
        <select class="form-control" name="annee_experience" id="" required>
          <option value=""></option>
          <option value="Moins de 1 ans"> Moins de 1 ans </option>
          <option value="1 à 4 ans"> 1 à 4 ans </option> 
          <option value="5 à 10 ans"> 5 à 10 ans</option>
          <option value=" Plus de 10 ans "> Plus de 10 ans </option>
        </select>
        </div>
    
        <div  class="col-md-6">
            <label class="form-label" for="">Ville</label>
            <input  class="form-control" type="text" name="ville" pattern="[a-zA-Z]+" required>
        </div>
        <div  class="col-md-6">
            <label class="form-label" for="">Commune</label>
            <input  class="form-control" type="text" name="commune" pattern="[a-zA-Z]+" required>
        </div>
        <div  class="col-md-6">
            <label class="form-label" for="">Quartier</label>
            <input class="form-control" type="text" name="quartier"  required>
        </div>
        <div  class="col-md-6" >
          <label class="label" for="">Sexe :</label><br>
          <input type="radio" name="sexe" value="homme">
          <label for="">homme</label>
          <input type="radio" name="sexe" value="femme">
          <label for="">femme</label></div>
        <div  class="col-12">
          <label class="label" for="">selectionnez une photo : </label> 
          <input class="form-control" type="file" name="photo" accept="image/*" required>
      </div>
      <div  class="col-md-6 ">
        <input class="form-control s5_input" type="submit" name="photo">
      </div>
     <div   class="col-md-6 inscription">
    <a id="btninscription" href="{{ route('accueil') }}" class="btn btn-outline fw-bold">Retour</a>
        </div>
        </div>
    </form>
    </div>
  </div>


    <script src="asset/js/EYEsurmotdepasse.js"></script>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>