// #region - Case index

// Element references

const index = document.querySelector('.case-index');
const description = document.querySelector('.case-description');
const sections = document.querySelectorAll('section');
const headers = description.querySelectorAll('h1');

const currentItem = document.getElementById('current-item');
const totalItems = document.getElementById('total-items');

// Setup: Create index list

let indexList = document.createElement('ol');
indexList.setAttribute('id', 'index-list');

function sanitizeHeading(str) {
  return str.replace(/\s+/g, '-').toLowerCase();
}

for (let i = 0; i < headers.length; i++) {
  const indexItem = document.createElement('li');
  const indexLink = document.createElement('a');
  const indexHeader = document.createTextNode(headers[i].textContent);

  if (sections[i].hasAttribute('id')) {
    indexLink.setAttribute('href', '#' + sections[i].id);
  } else {
    const sanitizedId = sanitizeHeading(headers[i].textContent);
    sections[i].setAttribute('id', sanitizedId);
    indexLink.setAttribute('href', '#' + sanitizedId);
  }

  indexLink.appendChild(indexHeader);
  indexItem.appendChild(indexLink);
  indexList.appendChild(indexItem);
}

index.appendChild(indexList);

// Counter logic

currentItem.textContent = 0;
totalItems.textContent = headers.length;

const activeSections = new Set();

const increaseCounter = (sectionId) => {
  if (!activeSections.has(sectionId)) {
    activeSections.add(sectionId);
    currentItem.textContent = Number(currentItem.textContent) + 1;
  }
};

// Scroll handler

const indexElements = document.querySelectorAll('.case-index li');

window.addEventListener('scroll', () => {
  const scrollPosition = window.scrollY + 200;

  sections.forEach(section => {
    const sectionId = section.getAttribute('id');

    indexElements.forEach(indexElement => {
      const link = indexElement.querySelector('a');
      const linkId = link.getAttribute('href').substring(1);

      if (linkId === sectionId) {
        if (scrollPosition >= section.offsetTop) {
          indexElement.classList.add('active');
          increaseCounter(sectionId);
        } else {
          indexElement.classList.remove('active');
          if (activeSections.has(sectionId)) {
            activeSections.delete(sectionId);
            currentItem.textContent = Number(currentItem.textContent) - 1;
          }
        }
      }
    });
  });
});

//#endregion

// #region - Popup modal

document.querySelectorAll('.case-desc-img').forEach(image => {
  image.onclick = () => {
  const modal = document.querySelector('.popup-modal');
  modal.style.display = 'flex';
  setTimeout(() => modal.classList.add('open'), 10);
  modal.querySelector('img').src = image.getAttribute('src');
  document.body.classList.add('no-scroll');
};
})

document.querySelector('.popup-modal span').onclick = () => {
  const modal = document.querySelector('.popup-modal');
  modal.classList.remove('open');
  document.body.classList.remove('no-scroll');

  setTimeout(() => {
    if (!modal.classList.contains('open')) {
      modal.style.display = 'none';
    }
  }, 300);
};

// #endregion