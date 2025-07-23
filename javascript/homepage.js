// Typewriter effect

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

window.addEventListener('resize', setContainerHeight);

// Dot grid highlight

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


