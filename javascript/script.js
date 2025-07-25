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

//#region - Case card display

if (document.querySelector('.card-container')) {

  const caseContainer = document.querySelector('.card-container');
  const displayControlButtons = document.querySelectorAll('.display-control-btn');

  // Find or create the ghost card element
  let ghostCard = caseContainer.querySelector('.ghost-card');

  // If ghost card doesn't exist, create it
  if (!ghostCard) {
    ghostCard = document.createElement('div');
    ghostCard.classList.add('case-card', 'ghost-card');
    ghostCard.style.visibility = 'hidden'; // hides content but occupies space
    ghostCard.style.height = '1px'; // minimal height to force layout
  }

  // Function to add ghost card back if missing
  function addGhostCardIfMissing() {
    if (!caseContainer.contains(ghostCard)) {
      caseContainer.appendChild(ghostCard);
    }
  }

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

    // Remove ghost card from DOM if view-row, otherwise add it back
    if (viewClass === 'view-row') {
      if (caseContainer.contains(ghostCard)) {
        caseContainer.removeChild(ghostCard);
      }
    } else {
      addGhostCardIfMissing();
    }
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

// #region - Dark theme toggle

const themeToggle = document.querySelector('.theme-control');

// Apply stored theme on page load
const savedTheme = localStorage.getItem('theme');

if (savedTheme === 'dark') {
  document.documentElement.classList.add('dark');
} else if (savedTheme === 'light') {
  document.documentElement.classList.remove('dark');
} else {
  // Detect system preference on first visit
  const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
  if (prefersDark) {
    document.documentElement.classList.add('dark');
    localStorage.setItem('theme', 'dark');
  }
}

// Handle toggle
if (themeToggle) {
  themeToggle.addEventListener("click", () => {
    const isDark = document.documentElement.classList.toggle('dark');
    localStorage.setItem('theme', isDark ? 'dark' : 'light');
  });
}

// #endregion