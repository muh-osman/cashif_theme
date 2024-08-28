// ---------------- AOS animation ----------------
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

// ---------- Get the current URL ----------------
const currentUrl = window.location.href;
const url = new URL(currentUrl);
const params = new URLSearchParams(url.search);
// Access a specific parameter
// http://cashif.cc/check-it/receipt/?plan=XXX&model=XXX&price=XXX
const plan = params.get("plan");
const model = params.get("model");
const price = params.get("price");

// ---------------------------------------------------
const planSpan = document.getElementById("inspection-plane");
planSpan.innerHTML = plan;

const pricePlane = document.getElementById("price-plane");
pricePlane.innerHTML = price;

// -------------------------------------------------------
// Prices associated with each service
const prices = {
  "row-video": 45,
  "row-ownership": 550,
};

// Function to update the total sum
let total;
function updateTotal() {
  total = +price;

  // Loop through each checkbox to calculate the total
  document.querySelectorAll(".control-table").forEach((checkbox) => {
    const rowId = checkbox.getAttribute("data-row");
    if (checkbox.checked) {
      total += prices[rowId] || 0; // Add the price if the checkbox is checked
    }
  });

  // Update the caption with the new total
  const caption = document.querySelector(".table caption");
  caption.textContent = `المجموع: ${total} ريال`;
}

// Add event listeners to checkboxes
document.querySelectorAll(".control-table").forEach((checkbox) => {
  checkbox.addEventListener("change", function () {
    const rowId = this.getAttribute("data-row");
    const row = document.getElementById(rowId);

    // Show or hide the row based on checkbox state
    if (this.checked) {
      row.style.display = ""; // Show the row
    } else {
      row.style.display = "none"; // Hide the row
    }

    // Update the total after changing the visibility
    updateTotal();
  });
});

// Initial total calculation on page load
updateTotal();


// -----------------------------------------------------------------
const askServBtn = document.getElementById("ask-serv-btn");
askServBtn.addEventListener("click", function () {
  const checkedValues = []; // Array to hold the values of checked checkboxes

  // Loop through each checkbox with the class 'form-check-input'
  document.querySelectorAll(".form-check-input").forEach((checkbox) => {
    if (checkbox.checked) {
      checkedValues.push(checkbox.value); // Add the value to the array if checked
    }
  });

  let serv = `طلب خدمة (مخدوم)`;
  let selectedModel = `سيارة موديل (${encodeURIComponent(model)})`;
  let selectedPlan = `الباقة (${encodeURIComponent(plan)})`;
  let additionalServ = `الخدمات الاضافية (${checkedValues.join(", ") || "لايوجد"})`;
  let sum = `المجموع (${total})`;

  let whatsAppUrl = `https://wa.me/966920019948?text=${serv} ${selectedModel} ${selectedPlan} ${additionalServ} ${sum}`;


    window.location.href = whatsAppUrl;
});
