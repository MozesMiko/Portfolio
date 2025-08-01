// #region - Email an phone number obfuscation

const emailRevealed = localStorage.getItem("emailRevealed");
const phoneRevealed = localStorage.getItem("phoneRevealed");

const emailContact = document.getElementById('emailContact');
const emailProper = document.getElementById('emailDisplay');
const emailEncoded = '==QbvNmLslWYtdGQvtWatNXZ69Wb';
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

// #endregion - Email an phone number obfuscation

// #region - Email send success message 

const form = document.getElementById('contact-form');
const successDiv = document.getElementById('success-message');

form.addEventListener('submit', async (e) => {
  e.preventDefault();

  const formData = new FormData(form);

  try {
    const response = await fetch(form.action, {
      method: form.method,
      body: formData,
    });

    if (response.ok) {
      successDiv.classList.add('active');
      form.reset();
      setTimeout(() => {
        successDiv.classList.remove('active');
      }, 2000);
    } else {
      alert('Oops, something went wrong.');
    }
  } catch (error) {
    alert('Oops, something went wrong.');
  }
});

// #endregion - Email send success message