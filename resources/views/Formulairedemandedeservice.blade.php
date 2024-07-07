<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="asset/CSS/STYLE_combinéACCEUIL.css">

    <title>Formulaire de demande de service</title>
    
</head>
<body>
  <div  class="s2_formulaire">
    <div  class="container " >
        <div id="service">
    <form  class="container" action="{{route('Demande_de_service')}}" method="post">
      @csrf
        <h3 id="s2-h3" class="mt-2 fw-bold">DEMANDE DE SERVICE</h3>
        <div class="row mt-3">
        <div class="col-md-6">
            <label class="form-label" for="">Nom</label> <br>
            <input  class="form-control" name="nom" type="text" pattern="[a-z A-Z]+" required>
        </div>
        <div  class="col-md-6">
            <label class="form-label"  for="">Prenoms</label> <br>
            <input  class="form-control" name="prenoms" type="text" pattern="[a-z A-Z]+" required>
        </div>
        <div  class="col-md-6">
            <label class="form-label"  for="">Numero de telephone</label>
            <input  class="form-control" type="tel" name="phone" pattern="[0-9]+" required>
        </div>
         <div  class="col-md-6">
        <label class="form-label"  for="">Service</label> <br>
       <select class="form-control" name="metier_id" id="" required>
          @foreach($metiers as $metier) 
            <option value="{{$metier->id}}">{{$metier->domaine}}</option>
          @endforeach
       </select>
      </div>
       
      <div  class="col-md-6">
        <label class="form-label"  for="">Ville</label> <br>
        <input class="form-control" name="ville" type="text" pattern="[a-z A-Z]+" required>
      </div>
      <div  class="col-md-6">
        <label class="form-label"  for="">Commune</label> <br>
        <input class="form-control" name="commune" type="text" pattern="[a-zA-Z]+" required>
      </div>
      <div  class="col-md-6">
        <label class="form-label"  for="">Quartier</label> <br>
        <input class="form-control " name="quartier" type="text" required>
      </div>
      <div  class="col-md-6">
        <label class="form-label"  for="">Date et heure pour le service</label> <br>
        <input class="form-control" type="datetime-local">
      </div> 
      <div  class="col mt-3">
        <label  class="form-label"  for="">Sexe : </label>
        <input type="radio" value="femme" name="sexe">
        <label for="">Femme</label>
        <input type="radio" value="homme" name="sexe" id="">
        <label for="">Homme</label>
      </div>
      <div class="col-12">
        <label class="mt-2" for="">Description</label>
        <textarea  class="form-control mt-2" name="description" id="message" cols="5" rows="5" placeholder="ecrivez ce dont vous avez besoin" 
        maxlength="200" oninput="updateCounter()"></textarea>

        <span id="s2_counter">300</span> caractere restants
      </div>
     <div id="boutton">
        <input class="mt-4 btn btn-outline-success btn-lg" type="submit" id="">
        <a href="Acceuil.html" class="btn btn-outline fw-bold mt-4 btn-lg">Retour</a>
    </div>
     </div>
      </form>
    </div></div>

  </div>





    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script>
      function updateCounter(){
        let maxlength = 300;
        let textlong= document.getElementById("message").value.length;
        let bien = maxlength-textlong;
        document.getElementById("counter").textContent = bien;
      }
    </script>
</body>
</html>