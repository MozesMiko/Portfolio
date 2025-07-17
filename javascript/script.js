//#region - Don't animate cards

window.addEventListener("load", () => {
  requestAnimationFrame(() => {
    document.body.classList.remove("no-animate");
  });
});

//#endregion

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

if(document.querySelector('#typewriter')){

  const words = ["UX Designer", "User Researcher", "Web Designer"];
  const typingSpeed = 50;
  const deletingSpeed = 50;
  const pauseBetween = 2000;

  let wordIndex = 0;
  let charIndex = 0;
  let isDeleting = false;

  const typewriter = document.getElementById('typewriter');
  const typewriterContainer = document.getElementById('typewriter-container');

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
}

window.addEventListener('resize', setContainerHeight);

//#endregion

//#region - Dot grid highlight

if(document.querySelector('#dot-grid')) {

  const dotGrid = document.getElementById('dot-grid');

  dotGrid.addEventListener('mousemove', (e) => {
    const rect = dotGrid.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;
    dotGrid.style.setProperty('--x', `${x}px`);
    dotGrid.style.setProperty('--y', `${y}px`);
  });

  dotGrid.addEventListener('mouseleave', () => {
    dotGrid.style.setProperty('--x', `-9999px`);
    dotGrid.style.setProperty('--y', `-9999px`);
  });

}

//#endregion

//#region - Case card display

if (document.querySelector('.card-container')) {

  const caseContainer = document.querySelector('.card-container');
  const displayControlButtons = document.querySelectorAll('.display-control-btn');

  function applyView(viewClass) {
    caseContainer.classList.remove('view-default', 'view-small', 'view-row');
    caseContainer.classList.add(viewClass);

    // Update active state on buttons
    displayControlButtons.forEach(btn => {
      btn.classList.toggle('active', btn.id === viewClass);
    });

    // Update large class on inner buttons
    const cardButtons = caseContainer.querySelectorAll('.case-card a.button');
    cardButtons.forEach(btn => {
      if (viewClass === "view-small" || viewClass === "view-row") {
        btn.classList.remove("large");
      } else {
        btn.classList.add("large");
      }
    });
  }

  const savedView = localStorage.getItem('selectedView') || 'view-default';
  applyView(savedView);

  for (let i = 0; i < displayControlButtons.length; i++) {
    displayControlButtons[i].addEventListener("click", () => {
      const viewClass = displayControlButtons[i].id;

      localStorage.setItem('selectedView', viewClass);
      caseContainer.classList.add('fade-out');

      setTimeout(() => {
        applyView(viewClass);
        caseContainer.classList.remove('fade-out');
      }, 200);
    });
  }
}

//#endregion

// #region - Add .active to index list items

const sections = document.querySelectorAll('section');
const indexElements = document.querySelectorAll('.case-index li');

window.addEventListener("scroll", () => {
  let scrollPosition = window.scrollY + 200;

  sections.forEach(section => {
    const sectionId = section.getAttribute('id');

    indexElements.forEach(indexElement => {
      const link = indexElement.querySelector('a');
      const linkId = link.getAttribute('href').substring(1);

      if (linkId === sectionId) {
        if (scrollPosition >= section.offsetTop) {
          indexElement.classList.add('active');  // Section is past offset -> add active
        } else {
          indexElement.classList.remove('active');  // Section above offset -> remove active
        }
      }
    });
  });
});

// #endregion

// #region - Dark theme toggle

const themeToggle = document.querySelector('.theme-control');

themeToggle.addEventListener("click", () => {
  document.body.classList.toggle('dark')
})

// #endregion