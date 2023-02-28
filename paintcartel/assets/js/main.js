"use strict";


function addProject() {
  // Get the values of the form fields
  const title = document.getElementById("titleInput").value;
  const bidHours = document.getElementById("bidHours").value;
  const hoursWorked = document.getElementById("hoursWorked").value;
  const ticketHours = document.getElementById("ticketHours").value;

  // Create a new card with the form field values
  const card = document.createElement("div");
  card.classList.add("item", "item-green", "col-lg-4", "col-6");
  card.innerHTML = `
    <div class="item-inner">
      <div class="icon-holder">
        <span aria-hidden="true" class="icon icon_question"></span>
      </div>
      <h3 class="title">${title}</h3>
      <p class="intro">Bid Hours: ${bidHours}<br>Hours Worked: ${hoursWorked}<br>Ticket Hours: ${ticketHours}</p>
      <a class="link" href="about.html"><span></span></a>
    </div>
  `;

  // Append the new card to the container
  const container = document.getElementById("cardContainer");
  container.appendChild(card);

  // Close the modal
  $('#exampleModal').modal('hide');

  // Reset the form fields
  document.getElementById("titleInput").value = "";
  document.getElementById("bidHours").value = "";
  document.getElementById("hoursWorked").value = "";
  document.getElementById("ticketHours").value = "";
}


/* ===== Stickyfill ===== */
/* Ref: https://github.com/wilddeer/stickyfill */
// Add browser support to position: sticky

var elements = document.querySelectorAll('.sticky');
Stickyfill.add(elements);

/* ===== Gumshoe SrollSpy ===== */
/* Ref: https://github.com/cferdinandi/gumshoe  */
// Initialize Gumshoe
var spy = new Gumshoe('#doc-nav a', {
	offset: 0 
});





/* ====== SimpleLightbox Plugin ======= */
/*  Ref: https://github.com/andreknieriem/simplelightbox */
var lightbox = new SimpleLightbox('.simplelightbox-gallery-1 a', { /* options */ });
var lightbox = new SimpleLightbox('.simplelightbox-gallery-2 a', {/* options */});
var lightbox = new SimpleLightbox('.simplelightbox-gallery-3 a', {/* options */});
var lightbox = new SimpleLightbox('.simplelightbox-gallery-4 a', {/* options */});
var lightbox = new SimpleLightbox('.simplelightbox-gallery-5 a', {/* options */});
var lightbox = new SimpleLightbox('.simplelightbox-gallery-6 a', {/* options */});
var lightbox = new SimpleLightbox('.simplelightbox-gallery-7 a', {/* options */});

function searchPage() {
    const searchInput = document.querySelector('.search-input');
    const searchText = searchInput.value;
    const pageElements = document.querySelectorAll('body *');
    
    pageElements.forEach(function(element) {
        if (element.textContent.includes(searchText)) {
            element.style.backgroundColor = 'yellow';
        } else {
            element.style.backgroundColor = '';
        }
    });
}

const searchBtn = document.querySelector('.search-btn');
searchBtn.addEventListener('click', searchPage);



// get the navigation and the burger menu icon elements
const leftnav = document.querySelector('.leftnav');
const burgerMenuIcon = document.querySelector('.burger-menu-icon');

// toggle the .show class on click of the burger menu icon
burgerMenuIcon.addEventListener('click', () => {
  leftnav.classList.toggle('show');
});