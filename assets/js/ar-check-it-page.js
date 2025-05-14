// Store language in local storage immediately
localStorage.setItem("lang", "ar");
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

// const sarSymbol = `
// <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1124.14 1256.39">
//   <defs>
//     <style>
//       .cls-1 {
//         fill: #174545;
//       }
//     </style>
//   </defs>
//   <path class="cls-1" d="M699.62,1113.02h0c-20.06,44.48-33.32,92.75-38.4,143.37l424.51-90.24c20.06-44.47,33.31-92.75,38.4-143.37l-424.51,90.24Z"/>
//   <path class="cls-1" d="M1085.73,895.8c20.06-44.47,33.32-92.75,38.4-143.37l-330.68,70.33v-135.2l292.27-62.11c20.06-44.47,33.32-92.75,38.4-143.37l-330.68,70.27V66.13c-50.67,28.45-95.67,66.32-132.25,110.99v403.35l-132.25,28.11V0c-50.67,28.44-95.67,66.32-132.25,110.99v525.69l-295.91,62.88c-20.06,44.47-33.33,92.75-38.42,143.37l334.33-71.05v170.26l-358.3,76.14c-20.06,44.47-33.32,92.75-38.4,143.37l375.04-79.7c30.53-6.35,56.77-24.4,73.83-49.24l68.78-101.97v-.02c7.14-10.55,11.3-23.27,11.3-36.97v-149.98l132.25-28.11v270.4l424.53-90.28Z"/>
// </svg>
// `;

// const smallSarSymbol = `
// <svg width="13" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1124.14 1256.39">
//   <defs>
//     <style>
//       .cls-2 {
//         fill: #d32f2f;
//       }
//     </style>
//   </defs>
//   <path class="cls-2" d="M699.62,1113.02h0c-20.06,44.48-33.32,92.75-38.4,143.37l424.51-90.24c20.06-44.47,33.31-92.75,38.4-143.37l-424.51,90.24Z"/>
//   <path class="cls-2" d="M1085.73,895.8c20.06-44.47,33.32-92.75,38.4-143.37l-330.68,70.33v-135.2l292.27-62.11c20.06-44.47,33.32-92.75,38.4-143.37l-330.68,70.27V66.13c-50.67,28.45-95.67,66.32-132.25,110.99v403.35l-132.25,28.11V0c-50.67,28.44-95.67,66.32-132.25,110.99v525.69l-295.91,62.88c-20.06,44.47-33.33,92.75-38.42,143.37l334.33-71.05v170.26l-358.3,76.14c-20.06,44.47-33.32,92.75-38.4,143.37l375.04-79.7c30.53-6.35,56.77-24.4,73.83-49.24l68.78-101.97v-.02c7.14-10.55,11.3-23.27,11.3-36.97v-149.98l132.25-28.11v270.4l424.53-90.28Z"/>
// </svg>
// `;

// const greenSmallSarSymbol = `
// <svg width="13" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1124.14 1256.39">
//   <defs>
//     <style>
//       .cls-3 {
//         fill: #25d366;
//       }
//     </style>
//   </defs>
//   <path class="cls-3" d="M699.62,1113.02h0c-20.06,44.48-33.32,92.75-38.4,143.37l424.51-90.24c20.06-44.47,33.31-92.75,38.4-143.37l-424.51,90.24Z"/>
//   <path class="cls-3" d="M1085.73,895.8c20.06-44.47,33.32-92.75,38.4-143.37l-330.68,70.33v-135.2l292.27-62.11c20.06-44.47,33.32-92.75,38.4-143.37l-330.68,70.27V66.13c-50.67,28.45-95.67,66.32-132.25,110.99v403.35l-132.25,28.11V0c-50.67,28.44-95.67,66.32-132.25,110.99v525.69l-295.91,62.88c-20.06,44.47-33.33,92.75-38.42,143.37l334.33-71.05v170.26l-358.3,76.14c-20.06,44.47-33.32,92.75-38.4,143.37l375.04-79.7c30.53-6.35,56.77-24.4,73.83-49.24l68.78-101.97v-.02c7.14-10.55,11.3-23.27,11.3-36.97v-149.98l132.25-28.11v270.4l424.53-90.28Z"/>
// </svg>
// `;

// Hide WhatsApp Btn
// const whatsappBtn = document.getElementById("whatsapp-btn");

// window.addEventListener("scroll", function () {
//   let scrollPosition = window.scrollY || window.pageYOffset;
//   let documentHeight =
//     document.documentElement.scrollHeight - window.innerHeight;

//   if (scrollPosition >= documentHeight) {
//     whatsappBtn.classList.add("hide-btn");
//   } else {
//     whatsappBtn.classList.remove("hide-btn");
//   }
// });

// Language btn
// const languageToggle = document.getElementById("language-toggle");

// Check if the page is being loaded from the cache
// window.addEventListener("pageshow", function (event) {
//   // If the language toggle was checked, uncheck it
//   if (
//     event.persisted ||
//     (window.performance && window.performance.navigation.type === 2)
//   ) {
//     // languageToggle.checked = false;
//   }
// });

// Get the current domain
// const currentDomain = window.location.origin;
// Subdirectory for development only
// const subdirectory = window.location.hostname === "localhost" ? "/cashif" : "";

// languageToggle.addEventListener("change", function () {
//   if (this.checked) {
//     // Redirect to Arabic page
//     window.location.href = `${currentDomain}${subdirectory}/check-it/en/`;
//   } else {
//     // Redirect to English page
//     window.location.href = `${currentDomain}${subdirectory}/check-it/`;
//   }
// });

//
// window.onload = function () {
//   window.scrollTo(0, 0);
// };

// Discount for spacific URL (AD URL)
// Get the current URL
// const currentUrl = window.location.href;
// const url = new URL(currentUrl);
// const params = new URLSearchParams(url.search);
// const dis = params.get("dis");
// const disInSessionStorage = sessionStorage.getItem("dis");

// Initialize discount variable
// let discount = 0;
// const elements = document.getElementsByClassName("dis");

// // Check if 'dis' is present and true
// if (dis === "fifty") {
//   // Store 'dis' in session storage
//   sessionStorage.setItem("dis", dis);
//   // Check if dis is "fifty" and set discount to 50%
//   discount = 0.5; // 50% discount
//   // Loop through the collection and add the class to each element
//   for (let i = 0; i < elements.length; i++) {
//     elements[i].classList.add("seventy-discount");
//   }
// }

// if (disInSessionStorage === "fifty") {
//   discount = 0.5; // 50% discount
//   // Loop through the collection and add the class to each element
//   for (let i = 0; i < elements.length; i++) {
//     elements[i].classList.add("seventy-discount");
//   }
// }

// Bootstrap tooltips
// const tooltipTriggerList = document.querySelectorAll(
//   '[data-bs-toggle="tooltip"]'
// );
// const tooltipList = [...tooltipTriggerList].map(
//   (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
// );

// Years dropdown (change year in btn)
// document.querySelectorAll(".dropdown-item").forEach((item) => {
//   item.addEventListener("click", function (event) {
//     event.preventDefault(); // Prevent the default behavior of scrolling to the top

//     document.getElementById("dropdownButton").innerText = this.innerText;
//     document.getElementById("dropdownButton").dataset.value =
//       this.dataset.value;
//   });
// });

// Search input
// const inputElement = document.querySelector(".form-control");
// const buttonContainer = document.createElement("div");
// const resultContainer = document.getElementById("search-result");
// const spinner = document.getElementById("spinner");

// Function to handle chip clicked
// let clickedButtonId; // model id
// let clickedButtonTitle; // model id
// const handleButtonClick = (event) => {
//   buttonContainer.querySelectorAll("button").forEach((button) => {
//     button.classList.remove("active-model");
//   });

//   event.target.classList.add("active-model");

//   clickedButtonId = event.target.id; // model id
//   clickedButtonTitle = event.target.getAttribute("data-model-name");

//   if (clickedButtonId === "موديل غير موجود") {
//     window.location.href =
//       "https://wa.me/966920019948?text=استعلام عن موديل غير موجود (خدمة مخدوم)";
//   }
// };

// Debounce function
// const debounce = (func, delay) => {
//   let timeoutId;
//   return (...args) => {
//     if (timeoutId) {
//       clearTimeout(timeoutId);
//     }
//     timeoutId = setTimeout(() => {
//       func(...args);
//     }, delay);
//   };
// };

// Search input with debounce
// let firstTenResults;
// const debouncedSearch = debounce(async () => {
//   const searchValue = inputElement.value.trim(); // Get the value

//   if (searchValue === "") {
//     resultContainer.style.gridTemplateRows = "0fr";
//   }

//   try {
//     if (searchValue !== "") {
//       spinner.style.display = "block";

//       const response = await fetch(
//         `${FETCH_PRICES_API}/api/car-models/limited-general-search`,
//         {
//           method: "POST",
//           headers: {
//             "Content-Type": "application/json",
//           },
//           body: JSON.stringify({ search: searchValue }),
//         }
//       );

//       spinner.style.display = "none";

//       if (!response.ok) {
//         throw new Error("Failed to fetch data");
//       }

//       const data = await response.json();
//       firstTenResults = data.carModels.slice(0, 10); // Get the first 10 results
//       // console.log(firstTenResults);

//       // Clear previous buttons
//       buttonContainer.innerHTML = "";

//       if (firstTenResults.length === 0) {
//         const button = document.createElement("button");
//         button.textContent = "موديل غير موجود";
//         button.setAttribute("data-model-name", "موديل غير موجود");
//         button.id = "موديل غير موجود";
//         button.classList.add("custom-button-class", "gree");
//         button.addEventListener("click", handleButtonClick);
//         buttonContainer.appendChild(button);
//       }

//       // Map over the first 10 results and create buttons
//       firstTenResults.forEach((result) => {
//         const button = document.createElement("button");
//         button.textContent = result.model_name;
//         button.setAttribute("data-model-name", result.model_name);
//         button.id = result.id;
//         button.classList.add("custom-button-class");
//         button.addEventListener("click", handleButtonClick);
//         buttonContainer.appendChild(button);
//       });

//       // Append the buttons to a container in the DOM
//       resultContainer.appendChild(buttonContainer);
//       resultContainer.style.gridTemplateRows = "1fr";
//     } else {
//       // Clear previous buttons
//       buttonContainer.innerHTML = "";
//     }
//   } catch (error) {
//     console.error("Error:", error);
//     spinner.style.display = "none";
//   }
// }, 500); // Set the delay to 500ms

// inputElement.addEventListener("keyup", debouncedSearch);

// Submit form
// let newData;
// let yearValue;
// const submit = async () => {
//   yearValue = document.getElementById("dropdownButton").dataset.value;
//   let button = document.querySelector(".submit-btn");

//   // Check if model is not selected
//   if (!clickedButtonId) {
//     alert("يرجى اختيار موديل");
//     return;
//   }

//   // Check if yearValue is not selected
//   if (!yearValue) {
//     alert("يرجى اختيار سنة الصنع");
//     return;
//   }

//   if (yearValue >= 2015) {
//     yearValue = 2;
//   } else {
//     yearValue = 1;
//   }

//   button.innerHTML = " جاري البحث...";

//   try {
//     const response = await fetch(
//       `${FETCH_PRICES_API}/api/get-discounted-prices-by-model-and-year?car_model_id=${clickedButtonId}&year_id=${yearValue}`,
//       {
//         method: "GET",
//         headers: {
//           "Content-Type": "application/json",
//         },
//       }
//     );

//     if (!response.ok) {
//       button.innerHTML = "بحث";
//       throw new Error("Failed to fetch data from the new API");
//     }

//     newData = await response.json();
//     // console.log(newData);

//     button.innerHTML = "بحث";

//     //
//     const mainPrice = document.getElementById("main-price");
//     mainPrice.innerHTML = `${
//       newData[0].prices[1].price * (1 - discount).toFixed(2)
//     } ${sarSymbol}`;
//     const fullPrice = document.getElementById("full-price");
//     if (dis === "fifty" || disInSessionStorage === "fifty") {
//       fullPrice.innerHTML = `${
//         (newData[0].prices[0].price / (1 - 0.2)) * (1 - discount).toFixed(2)
//       } ${sarSymbol}`;
//     } else {
//       fullPrice.innerHTML = `${
//         newData[0].prices[0].price * (1 - discount).toFixed(2)
//       } ${sarSymbol}`;
//     }

//     // old price (20%)
//     document.getElementById("old-price-c").innerHTML = `
//     <span class="text-decoration-line-through">
//     ${(newData[0].prices[0].price * (1).toFixed(2)) / 0.8}</span>
//     <span> ${smallSarSymbol} </span>
//     <span style="text-decoration: none; color: #25d366; background-color: #dff1d9; margin-right: 6px; padding: 0 5px; border-radius: 2px; font-size: 16px;">وفر ${
//       (newData[0].prices[0].price * (1).toFixed(2)) / 0.8 -
//       newData[0].prices[0].price * (1).toFixed(2)
//     } ${greenSmallSarSymbol}</span>`;

//     // old prices (50%)
//     if (dis === "fifty" || disInSessionStorage === "fifty") {
//       document.getElementById("old-price-b").innerHTML = `
//     <span class="text-decoration-line-through">${
//       newData[0].prices[1].price * (1).toFixed(2)
//     }</span>
//     <span> ${smallSarSymbol} </span>`;

//       document.getElementById("old-price-c").innerHTML = `
//     <span class="text-decoration-line-through">${
//       (newData[0].prices[0].price / (1 - 0.2)) * (1).toFixed(2)
//     }</span>
//     <span> ${smallSarSymbol} </span>`;
//     }

//     //
//     const overlay = document.getElementById("overlay");
//     overlay.style.padding = "16px";
//     overlay.style.gridTemplateRows = "1fr";

//     // Wait for the layout to be updated before scrolling
//     setTimeout(() => {
//       overlay.scrollIntoView({
//         behavior: "smooth",
//         block: "start",
//         inline: "nearest",
//       });
//     }, 100);
//   } catch (error) {
//     // Handle any errors that occur during the API request to the new API
//     console.error("Error:", error);
//     button.innerHTML = "بحث";
//     alert(error);
//   }
// };

// Planes btns

// الخطة الاساسية
// const palneB = () => {
//   // const priceB = parseFloat(newData[0].prices[1].price);

//   const url = `${currentDomain}${subdirectory}/check-it/receipt/?plan=أساسي&year_id=${yearValue}&car_model_id=${clickedButtonId}&price_id=1`;

//   window.location.href = url;
// };

// الخطة الشاملة
// const palneC = () => {
//   // const priceC = parseFloat(newData[0].prices[0].price);

//   const url = `${currentDomain}${subdirectory}/check-it/receipt/?plan=شامل&year_id=${yearValue}&car_model_id=${clickedButtonId}&price_id=0`;

//   window.location.href = url;
// };

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
if (getCookie("auth") === "true") {
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
