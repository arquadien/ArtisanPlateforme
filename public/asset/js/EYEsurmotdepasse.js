

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













