// Store language in local storage immediately
localStorage.setItem("lang", "en");
//

// Video player
// const player = new Plyr(document.getElementById("player"));

// AOS animation
document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("load", function () {
    document.body.style.overflowY = "auto";

    var loadingElement = document.getElementById("loading");
    if (loadingElement) {
      setTimeout(function () {
        loadingElement.style.display = "none";
      }, 5000);
    }
  });

  AOS.init({
    once: true,
  });
});

// Mobile Navbar add active class
const list = document.querySelectorAll(".list");
function activeLink() {
  list.forEach((item) => item.classList.remove("act"));
  this.classList.add("act");
}
list.forEach((item) => item.addEventListener("click", activeLink));
//
const discountBttn = document.getElementById("discountBttn");
const discountBttnTwo = document.getElementById("discountBttnTwo");
const priceNavbar = document.getElementById("search-in-mob-nav");
discountBttn.addEventListener("click", () => {
  list.forEach((item) => item.classList.remove("act"));
  priceNavbar.classList.add("act");
});
discountBttnTwo.addEventListener("click", () => {
  list.forEach((item) => item.classList.remove("act"));
  priceNavbar.classList.add("act");
});
//
const askNowBtn = document.getElementById("ask-now-btn");
const reportNav = document.getElementById("report-nav");
askNowBtn.addEventListener("click", () => {
  list.forEach((item) => item.classList.remove("act"));
  reportNav.classList.add("act");
});
// when back using browser button
const homeNav = document.getElementById("home-nav");
window.addEventListener("pageshow", (event) => {
  if (event.persisted) {
    list.forEach((item) => item.classList.remove("act"));
    homeNav.classList.add("act"); // Reapply if needed
  }
});

// change three dots icon if user login
// Function to get cookie value by name
function getCookie(name) {
  const value = `; ${document.cookie}`;
  const parts = value.split(`; ${name}=`);
  if (parts.length === 2) return parts.pop().split(";").shift();
}

// Check if auth cookie is true
const login = document.getElementById("login");
const logout = document.getElementById("logout");
if (getCookie("auth")) {
  // Find the SVG element and change it
  const svgElement = document.querySelector(".unset-three-dot-button");

  if (svgElement) {
    // Replace with your user SVG
    svgElement.innerHTML = `<svg fill="#fff" width="44" height="44" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="AccountCircleIcon"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2m0 4c1.93 0 3.5 1.57 3.5 3.5S13.93 13 12 13s-3.5-1.57-3.5-3.5S10.07 6 12 6m0 14c-2.03 0-4.43-.82-6.14-2.88C7.55 15.8 9.68 15 12 15s4.45.8 6.14 2.12C16.43 19.18 14.03 20 12 20"></path></svg>`;
  }
  login.style.display = "none";
  logout.style.display = "block";
} else {
  login.style.display = "block";
  logout.style.display = "none";
}
