const emailRevealed = localStorage.getItem("emailRevealed");
const phoneRevealed = localStorage.getItem("phoneRevealed");

const emailContact = document.getElementById('emailContact');
const emailProper = document.getElementById('emailDisplay');
const emailEncoded = 't92YuwWah12ZANXZ69WbuIXZ69GZ';
const emailDecoded = atob(emailEncoded.split('').reverse().join(''));

const phoneContact = document.getElementById('phoneContact');
const phoneProper = document.getElementById('phoneDisplay');
const phoneEncoded = 'zMDI3QDIwkDIwYDI1QzK';
const phoneDecoded = atob(phoneEncoded.split('').reverse().join(''));

if(emailRevealed === "true") {
  emailProper.textContent = emailDecoded;
  emailContact.classList.add('no-pointer');
} else {
  emailContact.addEventListener("click", () => {
    emailProper.textContent = emailDecoded;
    emailContact.classList.add('no-pointer');
    localStorage.setItem("emailRevealed", true);
  });
};

if(phoneRevealed === "true") {
  phoneProper.textContent = phoneDecoded;
  phoneContact.classList.add('no-pointer');
} else {
  phoneContact.addEventListener("click", () => {
    phoneProper.textContent = phoneDecoded;
    phoneContact.classList.add('no-pointer');
    localStorage.setItem("phoneRevealed", true);
  });
};