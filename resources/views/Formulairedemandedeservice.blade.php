<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="asset/CSS/STYLE_combinéACCEUIL.css">

    <title>Document</title>
    
</head>
<body>
  <div  class="s2_formulaire">
    <div  class="container " >
        <div id="service">
    <form  class="container" action="">
        <h3 id="s2-h3" class="mt-2 fw-bold">DEMANDE DE SERVICE</h3>
        <div class="row mt-3">
        <div class="col-md-6">
            <label class="form-label" for="">Nom</label> <br>
            <input  class="form-control" type="text" pattern="[a-zA-Z]+" required>
        </div>
        <div  class="col-md-6">
            <label class="form-label"  for="">Prenom</label> <br>
            <input  class="form-control" type="text" pattern="[a-zA-Z]+" required>
        </div>
        <div  class="col-md-6">
            <label class="form-label"  for="">Numero de telephone</label>
            <input  class="form-control" type="tel" pattern="[0-9]+" required>
        </div>
         <div  class="col-md-6">
        <label class="form-label"  for="">Service</label> <br>
       <select class="form-control" name="" id="" required>
        <option value=""></option>
        <option value=""> Mécanique</option>
        <option value="">Menuiserie/Charpenterie</option>
        <option value="">  Maçonnerie</option>
        <option value="">  Spécialiste en froid</option>
        <option value="">  Couture</option>
        <option value="">  Tapisserie</option>
        <option value=""> Coiffure</option>
        <option value=""> Bijouterie</option>
        <option value="">  Electronique (réparateur TV, portable, etc)</option>
        <option value="">Briqueterie</option>
        <option value="">  Boucherie</option>
        <option value=""> Vente de marchandises</option>
         <option value=""> Agroalimentaire, alimentation, restauration</option>
        <option value=""> Vitrerie</option>
        <option value=""> Hygiène et soins corporels</option>
        <option value="">Audiovisuel et communication</option>
        <option value="">  Transport</option>
        <option value="">  Artisanat</option>
       </select>
      </div>
     
      <div  class="col-md-6">
        <label class="form-label"  for="">Ville</label> <br>
        <input class="form-control" type="text" pattern="[a-zA-Z]+" required>
      </div>
      <div  class="col-md-6">
        <label class="form-label"  for="">Commune</label> <br>
        <input class="form-control" type="text" pattern="[a-zA-Z]+" required>
      </div>
      <div  class="col-md-6">
        <label class="form-label"  for="">Quartier</label> <br>
        <input class="form-control" type="text" pattern="[a-zA-Z]+" required>
      </div>
      <div  class="col-md-6">
        <label class="form-label"  for="">Date et heure pour le service</label> <br>
        <input class="form-control" type="datetime-local" required>
      </div>
      <div  class="col mt-3">
        <label  class="form-label"  for="">Sexe : </label>
        <input type="radio" name="sexe">
        <label for="">Femme</label>
        <input type="radio" name="sexe" id="">
        <label for="">Homme</label>
      </div>
      <div class="col-12">
        <label class="mt-2" for="">Description</label>
        <textarea  class="form-control mt-2" name="" id="message" cols="5" rows="5" placeholder="ecrivez ce dont vous avez besoin" 
        maxlength="200" oninput="updateCounter()"></textarea>

        <span id="s2_counter"> 300</span> caractere restants
      </div>
     <div id="boutton">
        <input class="mt-4 btn btn-outline-success btn-lg" type="submit" name="" id="">
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