//#region - Mobile navigation

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

// This piece of code below is responsible for disabling
// the transitions so that the mobile nav-links does not 
// flash briefly upon resizing the window

let resizeTimer;
window.addEventListener("resize", () => {
  document.body.classList.add("resize-animation-stopper");
  clearTimeout(resizeTimer);
  resizeTimer = setTimeout(() => {
    document.body.classList.remove("resize-animation-stopper");
  }, 400);
});

//#endregion

//#region - Typewriter effect

const words = ["UX Designer", "User Researcher", "Web Designer"];
const typingSpeed = 50;
const deletingSpeed = 50;
const pauseBetween = 2000;

let wordIndex = 0;
let charIndex = 0;
let isDeleting = false;

const typrewriter = document.getElementById("typewriter");
const typewriterContainer = document.getElementById("typewriter-container");

function setContainerHeight() {
  const fontSize = parseInt(window.getComputedStyle(typewriter).fontSize, 10); // Get the font size of typewriter
  typewriterContainer.style.height = `${fontSize * 1.2}px`; // Set the container height based on font size (add extra for margin)
}

function type() {
  const currentWord = words[wordIndex];
  if (isDeleting) {
    typewriter.textContent = currentWord.substring(0, charIndex--);
    if (charIndex < 0) {
      isDeleting = false;
      wordIndex = (wordIndex + 1) % words.length;
      setTimeout(type, typingSpeed);
    } else {
      setTimeout(type, deletingSpeed);
    }
  } else {
    typewriter.textContent = currentWord.substring(0, charIndex++);
    if (charIndex > currentWord.length) {
      isDeleting = true;
      setTimeout(type, pauseBetween);
    } else {
      setTimeout(type, typingSpeed);
    }
  }
}

setContainerHeight();
type();

window.addEventListener('resize', setContainerHeight);

//#endregion