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
      `https://cashif.online/back-end/public/api/get-discounted-prices-by-model-and-year?car_model_id=${carModelId}&year_id=${yearId}`,
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

  console.log("Total: ", total);
  console.log("Description: ", description);
  console.log("Name: ", name);
  console.log("Phone: ", phone);
  console.log("Branch: ", branch);
  console.log("additionalServices: ", checkedValues.join(", ") || "لايوجد");

  Moyasar.init({
    element: ".mysr-form",
    language: "en",
    amount: total * 100, // Convert to smallest currency unit
    currency: "SAR",
    description: description,
    publishable_api_key: PUBLISHABLE_API_KEY, // Use the key from config.js
    callback_url: `${currentDomain}${subdirectory}/thanks/en`,
    methods: ["creditcard", "applepay"],

    supported_networks: ["mada", "visa", "mastercard"],

    apple_pay: {
      country: "SA",
      label: "Cashif for car inspection",
      validate_merchant_url: "https://api.moyasar.com/v1/applepay/initiate",
    },

    metadata: {
      name: name,
      phone: phone,
      branch: branch,

      year: yearId,

      plan: serv,
      model: mod,
      price: total,

      service: "مخدوم",
      additionalServices: checkedValues.join(", ") || "لايوجد",
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

let checkedValues = []; // Array to hold the values of checked checkboxes
// Function to update the total sum
function updateTotal() {
  // console.log(isInitialLoad);
  checkedValues = []; // Reset the array before calculating the total again

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

  // Loop through each checkbox with the class 'checked-input'
  document.querySelectorAll(".checked-input").forEach((checkbox) => {
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

// Function to toggle visibility based on selected radio button
function toggleForms() {
  const formMysr = document.querySelector(".mysr-form");
  const formPayInCenter = document.querySelector(".pay-in-center");
  const formPayWithTamara = document.querySelector(".pay-with-tamara");

  // Check if flexRadioDefault2 is checked
  if (document.getElementById("flexRadioDefault2").checked) {
    formMysr.style.display = "block"; // Show mysr-form
    formPayInCenter.style.display = "none"; // Hide pay-in-center
    formPayWithTamara.style.display = "none"; // Hide pay-with-tamara
  } else if (document.getElementById("flexRadioDefault1").checked) {
    formMysr.style.display = "none"; // Hide mysr-form
    formPayWithTamara.style.display = "none"; // Hide pay-with-tamara
    formPayInCenter.style.display = "block"; // Show pay-in-center
  } else if (document.getElementById("flexRadioDefault0").checked) {
    formMysr.style.display = "none"; // Hide mysr-form
    formPayInCenter.style.display = "none"; // Hide pay-in-center
    formPayWithTamara.style.display = "block"; // Show pay-with-tamara
  }
}

// Add event listeners to radio buttons
document
  .getElementById("flexRadioDefault1")
  .addEventListener("change", toggleForms);
document
  .getElementById("flexRadioDefault2")
  .addEventListener("change", toggleForms);
document
  .getElementById("flexRadioDefault0")
  .addEventListener("change", toggleForms);

// Initial call to set the correct display at page load
window.onload = toggleForms;

//pay In Center Btn
const payInCenterBtn = document.getElementById("pay-in-center-btn");
payInCenterBtn.addEventListener("click", function () {
  if (!name || !phone || !branch || branch === "Choose a branch") {
    alert("All fields are required!");
    return false;
  }
  const origin = window.location.origin; // https://example.com
  const sub = window.location.hostname === "localhost" ? "/cashif" : "";
  // Random string 14 Char
  const randomString = Array.from(
    { length: 14 },
    () =>
      "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"[
        Math.floor(Math.random() * 62)
      ]
  ).join("");

  const url = `${origin}${sub}/thanks/en/?id=${randomString}&fullname=${name}&phone=${phone}&branch=${branch}&plan=${serv}&price=${mainPrice}&model=${mod}&yearId=${yearId}&additionalServices=${
    checkedValues.join(", ") || "لايوجد"
  }`;

  window.location.href = url;
});

// Pay with Tamara Btn (Checkout Tamara API)
const payWithTamaraBtn = document.getElementById("pay-with-tamara-btn");
payWithTamaraBtn.addEventListener("click", async function () {
  if (!name || !phone || !branch || branch === "Choose a branch") {
    alert("All fields are required!");
    return false;
  }
  const origin = window.location.origin; // https://example.com
  const sub = window.location.hostname === "localhost" ? "/cashif" : "";

  // Random string 16 Char
  const timestamp = Date.now().toString(36).slice(-6);
  let randomString = Math.random().toString(36).substr(2, 10);
  randomString = "ORDER-" + (timestamp + randomString).slice(0, 10); // Total length will be 16

  const orderData = {
    total_amount: {
      amount: mainPrice,
      currency: "SAR",
    },
    shipping_amount: {
      amount: 0,
      currency: "SAR",
    },
    tax_amount: {
      amount: 0,
      currency: "SAR",
    },
    order_reference_id: randomString,
    discount: {
      name: "N/A",
      amount: {
        amount: 0,
        currency: "SAR",
      },
    },
    items: [
      {
        name: serv,
        type: "Digital",
        reference_id: randomString,
        sku: "SA-12436",
        quantity: 1,
        total_amount: {
          amount: mainPrice,
          currency: "SAR",
        },
      },
    ],
    consumer: {
      email: "customer@email.com",
      first_name: name.trim().split(" ")[0],
      last_name: name.trim().split(" ").slice(1).join(" "),
      phone_number: phone,
    },
    country_code: "SA",
    description: `id=${randomString}&fullname=${name}&phone=${phone}&branch=${branch}&plan=${serv}&price=${mainPrice}&model=${mod}&yearId=${yearId}&service=مخدوم&additionalServices=${
      checkedValues.join(", ") || "لايوجد"
    }`,
    merchant_url: {
      cancel: `${origin}${sub}/thanks/en/?cancel=true`,
      failure: `${origin}${sub}/thanks/en/?fail=true`,
      success: `${origin}${sub}/thanks/en/`,
    },
    payment_type: "PAY_BY_INSTALMENTS",
    instalments: 3,
    shipping_address: {
      city: branch,
      country_code: "SA",
      first_name: name.trim().split(" ")[0],
      last_name: name.trim().split(" ").slice(1).join(" "),
      line1: "N/A",
    },
    locale: "en_US",
  };

  // add boostrap spinner to payWithTamaraBtn button
  payWithTamaraBtn.innerHTML = "";
  const spinner = document.createElement("div");
  spinner.classList.add("spinner-border");
  spinner.setAttribute("role", "status");
  spinner.style.margin = "auto";
  spinner.style.width = "22.5px";
  spinner.style.height = "22.5px";
  payWithTamaraBtn.appendChild(spinner);

  // Show spinner
  spinner.style.display = "block";

  try {
    // this api will send the "user data(orderData)" to back-end then the back-end will send this data to Tamara API and return the "checkout_url" that will take it in Front-end to redirect the user to Tamara checkout page(Checkout Session), after the payment is done, tamara will redirect the user back to the "success_url (thankyou page)" that we have set in the "orderData" object.
    const response = await fetch(`${BACK_END_API}/api/pay-with-tamara`, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(orderData),
    });

    if (!response.ok) {
      spinner.style.display = "none";
      payWithTamaraBtn.innerHTML = "Confirm order";
      throw new Error(`HTTP error! status: ${response.status}`);
    }

    const result = await response.json();

    // Redirect to Tamara checkout page
    if (result.checkout_url) {
      window.location.href = result.checkout_url;
    } else {
      spinner.style.display = "none";
      payWithTamaraBtn.innerHTML = "Confirm order";
      alert("Failed to retrieve checkout URL.");
    }
  } catch (error) {
    spinner.style.display = "none";
    payWithTamaraBtn.innerHTML = "Confirm order";
    console.error("Error creating Tamara checkout:", error);
    alert("An error occurred while processing your payment. Please try again.");
  }
});

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
