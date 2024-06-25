

// PARTIE INSCRIPTION
let input = document.querySelector('.motdepasse input');
let icon = document.querySelector('.motdepasse i');
icon.onclick = function() {
  if (input.type === "password") {
    input.type = "text";
    icon.classList.remove('active');
  } else {
    input.type = "password";
    icon.classList.add('active');
  }
};

let inputs = document.querySelector('.confirmation input');
let icons = document.querySelector('.confirmation i');
icons.onclick = function() {
  if (inputs.type === "password") {
    inputs.type = "text";
    icons.classList.remove('pret');
  } else {
    inputs.type = "password";
    icons.classList.add('pret');
  }
};











/*const form = document.getElementById('formulaire');
const nom = document.getElementById('nom');
const prenom = document.getElementById('prenom');
const motdepasse = document.getElementById('motdepasse');
const Cmotdepasse = document.getElementById('Cmotdepasse');
const telephone = document.getElementById('telephone');
const whatsapp = document.getElementById('whatsapp');
const ville = document.getElementById('ville');
const commune = document.getElementById('commune');
const quartier = document.getElementById('quartier');

form.addEventListener('submit', e => {
  e.preventDefault(); 
  validateInputs(); 
});

const setError = (element, message) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector('.error');

  errorDisplay.innerText = message; 
  inputControl.classList.add('error'); 
  inputControl.classList.remove('success'); 
};

const setSuccess = element => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector('.error');

  errorDisplay.innerText = ''; 
  inputControl.classList.add('success'); 
  inputControl.classList.remove('error'); 
};

const validateInputs = () => {
  const nomValue = nom.value.trim();
  const prenomValue = prenom.value.trim();
  const motdepasseValue = motdepasse.value.trim();
  const CmotdepasseValue = Cmotdepasse.value.trim();
  const telephoneValue = telephone.value.trim();
  const whatsappValue = whatsapp.value.trim();
  const villeValue = ville.value.trim();
  const communeValue = commune.value.trim();
  const quartierValue = quartier.value.trim();

  if (nomValue === '') {
    setError(nom, 'Nom obligatoire');
  } else {
    setSuccess(nom); 
  }

if (prenomValue === '') {
    setError(prenom, 'Prénom obligatoire');
  } else {
    setSuccess(prenom);
  }
  if (motdepasseValue === '') {
    setError(motdepasse, 'Mot de passe obligatoire');
  } else {
    setSuccess(motdepasse);
  }

 
  if (CmotdepasseValue === '') {
    setError(Cmotdepasse, 'Veuillez confirmer votre mot de passe');
  } else if (CmotdepasseValue !== motdepasseValue) {
    setError(Cmotdepasse, 'Les mots de passe ne correspondent pas');
  } else {
    setSuccess(Cmotdepasse);
  }

 
  const phonePattern = /^\d{10}$/; 
  if (!phonePattern.test(telephoneValue)) {
    setError(telephone, 'Numéro de téléphone invalide');
  } else {
    setSuccess(telephone);
  }

  if (whatsappValue !== '' && !phonePattern.test(whatsappValue)) {
    setError(whatsapp, 'Numéro de téléphone WhatsApp invalide');
  } else {
    setSuccess(whatsapp);
  }

  if (villeValue === '') {
    setError(ville, 'Ville obligatoire');
  } else {
    setSuccess(ville);
  }

  if (communeValue === '') {
    setError(commune, 'Commune obligatoire');
  } else {
    setSuccess(commune);
  }

  if (quartierValue === '') {
    setError(quartier, 'Quartier obligatoire');
  } else {
    setSuccess(quartier);
  }


};
*/

