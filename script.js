document.addEventListener("DOMContentLoaded", function () {
  const burger = document.querySelector('.burger-menu');
  const navLinks = document.querySelector('.nav-links');
  const navbar = document.querySelector('.navbar');

  // Toggle the menu when the burger icon is clicked
  burger.addEventListener('click', function (e) {
    e.stopPropagation(); // Prevent click from propagating to the document
    burger.classList.toggle('open');
    navLinks.classList.toggle('open');
    navbar.classList.toggle('open');
  });

  // Close the menu if the user clicks outside the burger or the nav-links
  document.addEventListener('click', function (e) {
    if (
      !burger.contains(e.target) && 
      !navLinks.contains(e.target)
    ) {
      burger.classList.remove('open');
      navLinks.classList.remove('open');
      navbar.classList.remove('open');
    }
  });
});
