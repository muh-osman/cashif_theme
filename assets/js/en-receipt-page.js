// Get the current URL
const currentUrl = window.location.href;
const url = new URL(currentUrl);
const params = new URLSearchParams(url.search);

const plan = params.get("plan");
const yearId = params.get("year_id");
const carModelId = params.get("car_model_id");
const priceId = params.get("price_id");

const planSpan = document.getElementById("inspection-plane");
planSpan.innerHTML = plan;

// Flag to track if it's the initial load
let isInitialLoad = true;
//
let name;
let phone;
let branch;
// Fetch price and initialize Moyasar
// Store the main price
let mainPrice;
let mainDescription;
let serv;
let mod;
const fetchPrice = async () => {
  try {
    const response = await fetch(
      `https://cashif.online/back-end/public/api/get-prices-by-model-and-year?car_model_id=${carModelId}&year_id=${yearId}`,
      {
        method: "GET",
        headers: {
          "Content-Type": "application/json",
        },
      }
    );

    if (!response.ok) {
      throw new Error("Failed to fetch data from the new API");
    }
    const newData = await response.json();
    mainPrice = +(newData[0].prices[priceId].price * 1).toFixed(2);

    serv = newData[0].prices[priceId].service_name;
    mod = newData[0].model_name;

    // console.log(newData[0].model_name);
    // console.log(newData[0].prices[priceId].service_name);

    mainDescription = `الخدمة(مخدوم) فحص(${serv}) موديل(${mod})`;
    // console.log(mainDescription);

    updateTotal();
    // Set the flag to false after the initial load
    isInitialLoad = false;

    const spinner = document.getElementById("spinner");
    spinner.style.display = "none";

    const pricePlane = document.getElementById("price-plane");
    pricePlane.innerHTML = mainPrice;

    const carModelName = document.getElementById("car-model-name");
    carModelName.innerHTML = newData[0].model_name;

    // Initialize Moyasar with the initial amount
    updateMoyasarAmount(mainPrice, mainDescription, name, phone, branch);
  } catch (error) {
    console.error("Error:", error);
    // alert(error);
  }
};

fetchPrice();

// Function to handle input changes
function handleInputChange() {
  name = document.getElementById("exampleName").value;
  phone = document.getElementById("exampleInputphone").value;
  branch = document.getElementById("exampleBranch").value;

  updateMoyasarAmount(mainPrice, mainDescription, name, phone, branch);
}

// Add event listeners to the input fields
document
  .getElementById("exampleName")
  .addEventListener("input", handleInputChange);
document
  .getElementById("exampleInputphone")
  .addEventListener("input", handleInputChange);
document
  .getElementById("exampleBranch")
  .addEventListener("change", handleInputChange);

// Function to update the Moyasar amount
function updateMoyasarAmount(total, description, name, phone, branch) {
  // console.log(total, description, name, phone, branch);

  // Get the current domain
  const currentDomain = window.location.origin;
  // Subdirectory for development only
  const subdirectory =
    window.location.hostname === "localhost" ? "/cashif" : "";
  // Re-initialize Moyasar with the new amount
  // console.log(description);

  Moyasar.init({
    element: ".mysr-form",
    language: "en",
    amount: total * 100, // Convert to smallest currency unit
    currency: "SAR",
    description: description,
    publishable_api_key: "pk_test_AvodBD5CyRDusKoYkfbiXzpk49uy2TxfEbYYpE4t",
    callback_url: `${currentDomain}${subdirectory}/thanks/en`,
    methods: ["creditcard"],

    supported_networks: ["mada", "visa", "mastercard"],

    metadata: {
      name: name,
      phone: phone,
      branch: branch,
    },

    on_initiating: function () {
      if (!name || !phone || !branch || branch === "Choose a branch") {
        alert("All fields are required!");
        return false;
      }
      return true;
    },
  });
}

// Prices associated with each service
const prices = {
  "row-video": 45,
  "row-ownership": 550,
};

// Function to update the total sum
function updateTotal() {
  // console.log(isInitialLoad);

  // Loop through each checkbox to calculate the total
  document.querySelectorAll(".control-table").forEach((checkbox) => {
    const rowId = checkbox.getAttribute("data-row");
    if (checkbox.checked) {
      mainPrice += prices[rowId] || 0; // Add the price if the checkbox is checked
    } else if (!isInitialLoad && !checkbox.checked) {
      mainPrice -= prices[rowId] || 0; // Subtract the price if the checkbox is not checked and it's not the initial load
    }
  });

  // Update the caption with the new total
  const caption = document.querySelector(".table caption");
  caption.textContent = `Total: ${mainPrice} SAR`;

  const checkedValues = []; // Array to hold the values of checked checkboxes
  // Loop through each checkbox with the class 'form-check-input'
  document.querySelectorAll(".form-check-input").forEach((checkbox) => {
    if (checkbox.checked) {
      checkedValues.push(checkbox.value); // Add the value to the array if checked
    }
  });

  mainDescription = `الخدمة(مخدوم) فحص(${serv}) موديل(${mod}) خدمات اضافية(${
    checkedValues.join(", ") || "لايوجد"
  })`;

  // Update the Moyasar amount
  updateMoyasarAmount(mainPrice, mainDescription, name, phone, branch);
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

// Hide WhatsApp Btn
const whatsappBtn = document.getElementById("whatsapp-btn");

window.addEventListener("scroll", function () {
  let scrollPosition = window.scrollY || window.pageYOffset;
  let documentHeight =
    document.documentElement.scrollHeight - window.innerHeight;

  if (scrollPosition >= documentHeight) {
    whatsappBtn.classList.add("hide-btn");
  } else {
    whatsappBtn.classList.remove("hide-btn");
  }
});
