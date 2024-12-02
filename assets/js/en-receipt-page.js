const spinner = document.getElementById("spinner");
const planSpan = document.getElementById("inspection-plane");
const pricePlane = document.getElementById("price-plane");
const carModelName = document.getElementById("car-model-name");
const videoPriceDiv = document.getElementById("row-video");
const summaryReportPriceDiv = document.getElementById("row-summary-report");
const caption = document.querySelector(".table caption");
const nameInput = document.getElementById("exampleName");
const phoneInput = document.getElementById("exampleInputphone");
const branchInput = document.getElementById("exampleBranch");
const payWithTamaraBtn = document.getElementById("pay-with-tamara-btn");
const payInCenterBtn = document.getElementById("pay-in-center-btn");
const formMysr = document.querySelector(".mysr-form");
const formPayInCenter = document.querySelector(".pay-in-center");
const formPayWithTamara = document.querySelector(".pay-with-tamara");
const tableContainer = document.querySelector(".table-container");
const summaryLabels = document.querySelectorAll(".summary-label");
const discountBtn = document.getElementById("discount-btn");
const discountInput = document.getElementById("discount-input");
const rowDiscount = document.getElementById("row-discount");
const discountLabel = document.getElementById("discount-label");
const discountPercentLabel = document.getElementById("discount-percent-label");

const origin = window.location.origin; // https://example.com
const sub = window.location.hostname === "localhost" ? "/cashif" : "";

// Get the current URL
const currentUrl = window.location.href;
const url = new URL(currentUrl);
const params = new URLSearchParams(url.search);

const plan = params.get("plan");
const yearId = params.get("year_id");
const carModelId = params.get("car_model_id");
const priceId = params.get("price_id");

planSpan.innerHTML = plan;

// Fetch price and initialize Moyasar
let name;
let phone;
let branch;
let mainPrice = 0;
let mainDescription;
let serv;
let mod;

let total = 0;
let checkedValues = []; // Array to hold the values of checked checkboxes

let discount = 0;

const fetchPrice = async () => {
  try {
    const response = await fetch(
      `${FETCH_PRICES_API}/api/get-discounted-prices-by-model-and-year?car_model_id=${carModelId}&year_id=${yearId}`,
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
    total = mainPrice;

    serv = newData[0].prices[priceId].service_name;
    mod = newData[0].model_name;
    mainDescription = `الخدمة(مخدوم) فحص(${serv}) موديل(${mod})`;

    pricePlane.innerHTML = mainPrice;
    carModelName.innerHTML = newData[0].model_name;

    // Change price "summary" addetional service (in checkboxe and table) based on the plan
    summaryLabels.forEach((label) => {
      label.innerHTML = serv === "أساسي" ? "55" : serv === "شامل" ? "50" : "60";
    });

    caption.textContent = `Total: ${total} SAR`;

    spinner.style.display = "none";
    // Initialize Moyasar with the initial amount
    updateMoyasarAmount(total, mainDescription, name, phone, branch);
  } catch (error) {
    console.error("Error:", error);
    // alert(error);
  }
};

// // Check if the page is being loaded from the cache
// window.addEventListener("pageshow", function (event) {
//   // If the page load from the cache, reload it
//   if (
//     event.persisted ||
//     (window.performance && window.performance.navigation.type === 2)
//   ) {
//     console.log("User navigated back or forward to this page.");
//     location.reload();
//   } else {
//   }
// });

fetchPrice();

// Function to update the Moyasar amount
function updateMoyasarAmount(total, description, name, phone, branch) {
  console.log("Total: ", total);
  console.log("Description: ", description);
  console.log("Name: ", name);
  console.log("Phone: ", phone);
  console.log("Branch: ", branch);
  console.log("additionalServices: ", checkedValues.join(", ") || "لايوجد");

  // Re-initialize Moyasar with the new amount
  Moyasar.init({
    element: ".mysr-form",
    language: "en",
    amount: total * 100, // Convert to smallest currency unit
    currency: "SAR",
    description: description,
    publishable_api_key: PUBLISHABLE_API_KEY, // Use the key from config.js
    callback_url: `${origin}${sub}/thanks/en`,
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

// Function to handle input changes
function handleInputChange() {
  name = nameInput.value;
  phone = phoneInput.value;
  branch = branchInput.value;

  updateTotal();
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

// Function to update the total sum
function updateTotal() {
  checkedValues = []; // Reset the array before calculating the total again
  total = 0;

  let videoPrice = 0;
  let summaryPrice = 0;

  // if videoPriceDiv hiden then it means videoPrice = 45 else videoPrice = 0
  if (videoPriceDiv.style.display === "table-row") {
    videoPrice = 45;
  }
  // if summaryReportPriceDiv hiden then it means summaryPrice = 50 else summaryPrice = 0
  if (summaryReportPriceDiv.style.display === "table-row") {
    summaryPrice = serv === "أساسي" ? 55 : serv === "شامل" ? 50 : 60;
  }

  // if rowDiscount hiden then it means discount = 0 else
  if (rowDiscount.style.display === "table-row") {
    discount = discount || 0;
  }

  let subtotal = mainPrice + videoPrice + summaryPrice; // Calculate subtotal
  let discountAmount = subtotal * discount; // Calculate discount amount
  total = subtotal - discountAmount; // Calculate total after discount

  // how much discount that applied
  discountLabel.textContent = `-${discountAmount} SAR`;

  // Update the caption with the new total
  caption.textContent = `Total: ${total} SAR`;

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
  updateMoyasarAmount(total, mainDescription, name, phone, branch);
}

// Add event listeners to checkboxes
document.querySelectorAll(".control-table").forEach((checkbox) => {
  checkbox.addEventListener("change", function () {
    const rowId = this.getAttribute("data-row");
    const row = document.getElementById(rowId); // row in table

    // Show or hide the row based on checkbox state
    if (this.checked) {
      row.style.display = "table-row"; // Show the row
    } else {
      row.style.display = "none"; // Hide the row
    }

    // Update the total after changing the visibility
    updateTotal();
  });
});

// Discount button
discountBtn.addEventListener("click", function () {
  if (discountInput.value === "") {
    alert("Discount code is required!");
    return false;
  }

  // Show the spinner
  discountBtn.innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>`;

  setTimeout(() => {
    if (discountInput.value === "Q10") {
      discountBtn.innerHTML = "Apply";
      discountBtn.disabled = true; // disable discountBtn
      discountInput.disabled = true; // disable discountInput
      rowDiscount.style.display = "table-row"; // show rowDiscount
      discountPercentLabel.textContent = "10%";
      discount = 0.1;
      tableContainer.scrollIntoView({ behavior: "smooth" });
      updateTotal();
    } else if (discountInput.value === "C15") {
      discountBtn.innerHTML = "Apply";
      discountBtn.disabled = true; // disable discountBtn
      discountInput.disabled = true; // disable discountInput
      rowDiscount.style.display = "table-row"; // show rowDiscount
      discountPercentLabel.textContent = "15%";
      discount = 0.15;
      tableContainer.scrollIntoView({ behavior: "smooth" });
      updateTotal();
    } else if (discountInput.value === "K20") {
      discountBtn.innerHTML = "Apply";
      discountBtn.disabled = true; // disable discountBtn
      discountInput.disabled = true; // disable discountInput
      rowDiscount.style.display = "table-row"; // show rowDiscount
      discountPercentLabel.textContent = "20%";
      discount = 0.2;
      tableContainer.scrollIntoView({ behavior: "smooth" });
      updateTotal();
    } else {
      discountBtn.innerHTML = "Apply";
      alert("Discount code is invalid!");
    }
  }, 2000);
});

// Function to toggle visibility based on selected radio button
function toggleForms() {
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
toggleForms();

//pay In Center Btn
payInCenterBtn.addEventListener("click", function () {
  if (!name || !phone || !branch || branch === "Choose a branch") {
    alert("All fields are required!");
    return false;
  }

  // Random string 14 Char
  const randomString = Array.from(
    { length: 14 },
    () =>
      "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"[
        Math.floor(Math.random() * 62)
      ]
  ).join("");

  const url = `${origin}${sub}/thanks/en/?id=${randomString}&fullname=${name}&phone=${phone}&branch=${branch}&plan=${serv}&price=${total}&model=${mod}&yearId=${yearId}&additionalServices=${
    checkedValues.join(", ") || "لايوجد"
  }`;

  window.location.href = url;
});

// Pay with Tamara Btn (Checkout Tamara API)
payWithTamaraBtn.addEventListener("click", async function () {
  if (!name || !phone || !branch || branch === "Choose a branch") {
    alert("All fields are required!");
    return false;
  }

  // Random string 16 Char
  const timestamp = Date.now().toString(36).slice(-6);
  let randomString = Math.random().toString(36).substr(2, 10);
  randomString = "ORDER-" + (timestamp + randomString).slice(0, 10); // Total length will be 16

  const orderData = {
    total_amount: {
      amount: total,
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
          amount: total,
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
    description: `id=${randomString}&fullname=${name}&phone=${phone}&branch=${branch}&plan=${serv}&price=${total}&model=${mod}&yearId=${yearId}&service=مخدوم&additionalServices=${
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

  // disable payWithTamaraBtn button
  payWithTamaraBtn.disabled = true;
  // add boostrap spinner to payWithTamaraBtn button
  payWithTamaraBtn.innerHTML = "";
  const spinner = document.createElement("div");
  spinner.classList.add("spinner-border");
  spinner.setAttribute("role", "status");
  spinner.style.margin = "auto";
  spinner.style.width = "22.5px";
  spinner.style.height = "22.5px";
  payWithTamaraBtn.appendChild(spinner);
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
      payWithTamaraBtn.disabled = false;
      payWithTamaraBtn.innerHTML = "Confirm order";
      throw new Error(`HTTP error! status: ${response.status}`);
    }

    const result = await response.json();

    // Redirect to Tamara checkout page
    if (result.checkout_url) {
      window.location.href = result.checkout_url;
    } else {
      spinner.style.display = "none";
      payWithTamaraBtn.disabled = false;
      payWithTamaraBtn.innerHTML = "Confirm order";
      alert("Failed to retrieve checkout URL.");
    }
  } catch (error) {
    spinner.style.display = "none";
    payWithTamaraBtn.disabled = false;
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
