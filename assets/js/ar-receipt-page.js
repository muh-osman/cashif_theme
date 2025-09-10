const spinner = document.getElementById("spinner");
const planSpan = document.getElementById("inspection-plane");
const pricePlane = document.getElementById("price-plane");
const carModelName = document.getElementById("car-model-name");
const caption = document.querySelector(".table caption");
const nameInput = document.getElementById("exampleName");
const phoneInput = document.getElementById("exampleInputphone");
const branchInput = document.getElementById("exampleBranch");
const payWithTamaraBtn = document.getElementById("pay-with-tamara-btn");
const payWithTabbyBtn = document.getElementById("pay-with-tabby-btn");
const payInCenterBtn = document.getElementById("pay-in-center-btn");
const formMysr = document.querySelector(".mysr-form");
const formPayInCenter = document.querySelector(".pay-in-center");
const formPayWithTamara = document.querySelector(".pay-with-tamara");
const formPayWithTabby = document.querySelector(".pay-with-tabby");
const tableContainer = document.querySelector(".table-container");
const summaryLabels = document.querySelectorAll(".summary-label");
const discountBtn = document.getElementById("discount-btn");
const discountInput = document.getElementById("discount-input");
let discountCode = "";
let isDiscountCodeValide = false;
const rowDiscount = document.getElementById("row-discount");
const discountLabel = document.getElementById("discount-label");
const discountPercentLabel = document.getElementById("discount-percent-label");
const sarSymbol = `
<svg width="16" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1124.14 1256.39">
  <defs>
    <style>
      .cls-1 {
        fill: #747a79;
      }
    </style>
  </defs>
  <path class="cls-1" d="M699.62,1113.02h0c-20.06,44.48-33.32,92.75-38.4,143.37l424.51-90.24c20.06-44.47,33.31-92.75,38.4-143.37l-424.51,90.24Z"/>
  <path class="cls-1" d="M1085.73,895.8c20.06-44.47,33.32-92.75,38.4-143.37l-330.68,70.33v-135.2l292.27-62.11c20.06-44.47,33.32-92.75,38.4-143.37l-330.68,70.27V66.13c-50.67,28.45-95.67,66.32-132.25,110.99v403.35l-132.25,28.11V0c-50.67,28.44-95.67,66.32-132.25,110.99v525.69l-295.91,62.88c-20.06,44.47-33.33,92.75-38.42,143.37l334.33-71.05v170.26l-358.3,76.14c-20.06,44.47-33.32,92.75-38.4,143.37l375.04-79.7c30.53-6.35,56.77-24.4,73.83-49.24l68.78-101.97v-.02c7.14-10.55,11.3-23.27,11.3-36.97v-149.98l132.25-28.11v270.4l424.53-90.28Z"/>
</svg>
`;
const sarSymbolDark = `
<svg width="16" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1124.14 1256.39">
  <defs>
    <style>
      .cls-2 {
        fill: #1A1A1AE6;
      }
    </style>
  </defs>
  <path class="cls-2" d="M699.62,1113.02h0c-20.06,44.48-33.32,92.75-38.4,143.37l424.51-90.24c20.06-44.47,33.31-92.75,38.4-143.37l-424.51,90.24Z"/>
  <path class="cls-2" d="M1085.73,895.8c20.06-44.47,33.32-92.75,38.4-143.37l-330.68,70.33v-135.2l292.27-62.11c20.06-44.47,33.32-92.75,38.4-143.37l-330.68,70.27V66.13c-50.67,28.45-95.67,66.32-132.25,110.99v403.35l-132.25,28.11V0c-50.67,28.44-95.67,66.32-132.25,110.99v525.69l-295.91,62.88c-20.06,44.47-33.33,92.75-38.42,143.37l334.33-71.05v170.26l-358.3,76.14c-20.06,44.47-33.32,92.75-38.4,143.37l375.04-79.7c30.53-6.35,56.77-24.4,73.83-49.24l68.78-101.97v-.02c7.14-10.55,11.3-23.27,11.3-36.97v-149.98l132.25-28.11v270.4l424.53-90.28Z"/>
</svg>
`;

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
const affiliate = params.get("affiliate");
const fullYear = params.get("full_year");

const off = params.get("off") || 0;
console.log(`Off: ${off}`);

// URL Discount
const dis = params.get("dis");
if (dis === "fifty") {
  sessionStorage.setItem("dis", dis);
}

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

let marketerCommissionPercentage = 0;
let marketerShare = 0;

let discount = 0;

const fetchPrice = async () => {
  const disParam = sessionStorage.getItem("dis");
  let apiUrl = "";
  if (disParam === "fifty") {
    apiUrl = `${FETCH_PRICES_API}/api/get-fifty-precent-discounted-prices-by-model-and-year?car_model_id=${carModelId}&year_id=${yearId}`;
  } else {
    apiUrl = `${FETCH_PRICES_API}/api/get-discounted-prices-by-model-and-year?car_model_id=${carModelId}&year_id=${yearId}`;
  }

  try {
    const response = await fetch(apiUrl, {
      method: "GET",
      headers: {
        "Content-Type": "application/json",
      },
    });

    if (!response.ok) {
      throw new Error("Failed to fetch data from the new API");
    }
    const newData = await response.json();

    // First ensure the price exists and is a valid number
    const priceValue = newData[0]?.prices[priceId]?.price;
    mainPrice = priceValue ? parseFloat(Number(priceValue).toFixed(2)) : 0;

    total = mainPrice;

    serv = newData[0].prices[priceId].service_name;
    mod = newData[0].model_name;
    mainDescription = `الخدمة(مخدوم) فحص(${serv}) موديل(${mod})`;

    pricePlane.innerHTML = mainPrice;
    carModelName.innerHTML = newData[0].model_name;

    // Change price "summary" addetional service (in checkboxe and table) based on the plan
    // summaryLabels.forEach((label) => {
    //   label.innerHTML = serv === "أساسي" ? "75" : serv === "شامل" ? "65" : "85";
    // });

    caption.innerHTML = `الاجمالي: ${total} ${sarSymbolDark}`;

    spinner.style.display = "none";

    // After fetching the price and setting mainPrice, add this code:
    if (disParam === "fifty") {
      const branchSelect = document.getElementById("exampleBranch");
      const options = branchSelect.options;

      // Loop through all options and hide/show as needed
      for (let i = 0; i < options.length; i++) {
        if (options[i].value === "جدة") {
          options[i].hidden = false; // Show Jeddah option
        } else {
          options[i].hidden = true; // Hide all other options
        }
      }

      // Set Jeddah as selected if it exists
      const jeddahOption = branchSelect.querySelector('option[value="جدة"]');
      if (jeddahOption) {
        jeddahOption.selected = true;
        branch = "جدة"; // Update the branch variable
      }
    }

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
let isMoyasarFormInit = false;
let updatedTotal = null;
let updatedDescription = null;
let updatedName = null;
let updatedPhone = null;
let updatedBranch = null;
function updateMoyasarAmount(total, description, name, phone, branch) {
  updatedTotal = total;
  updatedDescription = description;
  updatedName = name;
  updatedPhone = phone;
  updatedBranch = branch;

  console.log("--------------------------------------------------");
  console.log("Total: ", updatedTotal);
  console.log("Description: ", updatedDescription);
  console.log("Name: ", updatedName);
  console.log("Phone: ", updatedPhone);
  console.log("Branch: ", updatedBranch);
  console.log("additionalServices: ", checkedValues.join(", ") || "لايوجد");
  console.log("full year: ", fullYear);
  console.log("Discount Code: ", discountCode);
  console.log("--------------------------------------------------");

  // Check if Moyasar form init before
  if (isMoyasarFormInit === true) {
    Moyasar.setAmount(updatedTotal * 100);
  }
  isMoyasarFormInit = true;

  // Initialize/Re-initialize Moyasar form
  window.Moyasar.init({
    element: ".mysr-form",
    amount: updatedTotal * 100, // Convert to smallest currency unit
    currency: "SAR",
    description: updatedDescription,
    publishable_api_key: PUBLISHABLE_API_KEY, // Use the key from config.js
    callback_url: `${origin}${sub}/thanks`,
    methods: ["creditcard", "applepay", "samsungpay"],

    supported_networks: ["mada", "visa", "mastercard"],

    apple_pay: {
      country: "SA",
      label: "Cashif for car inspection",
      validate_merchant_url: "https://api.moyasar.com/v1/applepay/initiate",
    },

    samsung_pay: {
      service_id: "4d1df6e9f3324a559f7fbf",
      order_number: "ORD-" + Date.now(), // Example: "ORD-1723456789012"
      country: "SA",
      label: "Cashif for car inspection",
      environment: "PRODUCTION", // PRODUCTION, STAGE, STAGE_WITHOUT_APK
    },

    metadata: {
      name: updatedName,
      phone: updatedPhone,
      branch: updatedBranch,

      year: yearId,
      fy: fullYear || null,

      plan: serv,
      model: mod,
      price: updatedTotal,

      service: "مخدوم",
      additionalServices: checkedValues.join(", ") || "لايوجد",

      affiliate: affiliate || null,

      dc: discountCode || null,
      msh: marketerShare || null,
    },

    on_failure: async function (error) {
      console.log(error);
    },

    on_initiating: async function () {
      console.log(updatedName);
      console.log(updatedPhone);
      console.log(updatedBranch);

      if (
        !updatedName ||
        !updatedPhone ||
        !updatedBranch ||
        updatedBranch === "اختر فرع"
      ) {
        alert("جميع الحقول مطلوبة!");
        return false;
      }

      if (!/^5\d{8}$/.test(updatedPhone)) {
        alert("رقم الهاتف غير صالح!");
        return false;
      }

      // Update the data
      return {
        amount: updatedTotal * 100,
        description: updatedDescription,
        metadata: {
          name: updatedName,
          phone: updatedPhone,
          branch: updatedBranch,
          year: yearId,
          fy: fullYear || null,
          plan: serv,
          model: mod,
          price: updatedTotal,
          service: "مخدوم",
          additionalServices: checkedValues.join(", ") || "لايوجد",
          affiliate: affiliate || null,
          dc: discountCode || null,
          msh: marketerShare || null,
        },
      };
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
  let explainReport = 0;

  // if videoPrice checked then it means videoPrice = 45 else videoPrice = 0
  if (document.getElementById("reverseCheck1").checked) {
    videoPrice = 45;
  }
  // if explainReport checked then it means explainReport = 50 else explainReport = 0
  if (document.getElementById("reverseCheck2").checked) {
    explainReport = 50;
  }
  // if summaryReportPrice checked then it means summaryPrice = 50 else summaryPrice = 0
  if (document.getElementById("reverseCheck3").checked) {
    summaryPrice = 100;
  }

  // if rowDiscount hiden then it means discount = 0 else
  if (rowDiscount.style.display === "table-row") {
    discount = discount || 0;
  }

  let subtotal = mainPrice; // Calculate subtotal
  let discountAmount = subtotal * discount; // Calculate discount amount
  total = Math.floor(
    subtotal + videoPrice + summaryPrice + explainReport - discountAmount
  );

  marketerShare = parseFloat(
    (total * (marketerCommissionPercentage / 100)).toFixed(1)
  );
  console.log("marketerShare: ", marketerShare);

  // how much discount that applied
  discountLabel.innerHTML = `-${discountAmount} ${sarSymbol}`;

  // Update the caption with the new total
  caption.innerHTML = `الاجمالي: ${total} ${sarSymbolDark}`;

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
    // Update the total after changing the input checkbox
    updateTotal();
  });
});

// Discount button
discountBtn.addEventListener("click", async function () {
  discountCode = discountInput.value;
  if (discountCode === "") {
    alert("رمز الخصم مطلوب!");
    return false;
  }

  // Show the spinner
  discountBtn.innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>`;

  try {
    const response = await fetch(
      `https://cashif-001-site1.dtempurl.com/api/Marketers/CheckCode?code=${encodeURIComponent(
        discountCode
      )}`,
      {
        method: "GET",
        headers: {
          "Content-Type": "application/json",
        },
      }
    );
    const data = await response.json();

    console.log(data);

    if (data.result === false) {
      discountBtn.innerHTML = "تطبيق";
      discountCode = "";
      alert("كود غير صالح.");
      return;
    }

    if (data.result === true && data.codeDiscountPercentage === +off) {
      alert("كود الخصم المدخل مساوي للخصم الأساسي على الباقة");
      discountBtn.innerHTML = "تطبيق";
    }

    if (data.result === true && data.codeDiscountPercentage < +off) {
      alert(
        "كود الخصم المدخل أقل من الخصم الأساسي على الباقة, سيتم تطبيق القيمة الأعلى"
      );
      discountBtn.innerHTML = "تطبيق";
    }

    if (data.result === true && data.codeDiscountPercentage > +off) {
      mainPrice = mainPrice / (1 - +off / 100);
      total = mainPrice;
      pricePlane.innerHTML = mainPrice;

      isDiscountCodeValide = true;
      discountBtn.innerHTML = "تطبيق";
      discountBtn.disabled = true; // disable discountBtn
      discountInput.disabled = true; // disable discountInput
      rowDiscount.style.display = "table-row"; // show rowDiscount
      discountPercentLabel.textContent = `${data.codeDiscountPercentage}%`;
      discount = `${data.codeDiscountPercentage / 100}`;
      marketerCommissionPercentage = data.marketerCommissionPercentage;
      tableContainer.scrollIntoView({ behavior: "smooth" });
      updateTotal();
    }
  } catch (error) {
    discountBtn.innerHTML = "تطبيق";
    console.error("Error:", error);
    alert("An error occurred while applying the discount.");
  }
});

// Function to toggle visibility based on selected radio button
function toggleForms() {
  if (document.getElementById("flexRadioDefault2").checked) {
    formMysr.style.display = "block"; // Show mysr-form
    formPayInCenter.style.display = "none"; // Hide pay-in-center
    formPayWithTamara.style.display = "none"; // Hide pay-with-tamara
    formPayWithTabby.style.display = "none"; // Hide pay-with-tabby
  }
  // else if (document.getElementById("flexRadioDefault1").checked) {
  //   formMysr.style.display = "none"; // Hide mysr-form
  //   formPayWithTamara.style.display = "none"; // Hide pay-with-tamara
  //   formPayInCenter.style.display = "block"; // Show pay-in-center
  //   formPayWithTabby.style.display = "none"; // Hide pay-with-tabby
  // }
  else if (document.getElementById("flexRadioDefault0").checked) {
    formMysr.style.display = "none"; // Hide mysr-form
    formPayInCenter.style.display = "none"; // Hide pay-in-center
    formPayWithTamara.style.display = "block"; // Show pay-with-tamara
    formPayWithTabby.style.display = "none"; // Hide pay-with-tabby
  } else if (document.getElementById("flexRadioDefaultTabby").checked) {
    formMysr.style.display = "none"; // Hide mysr-form
    formPayInCenter.style.display = "none"; // Hide pay-in-center
    formPayWithTamara.style.display = "none"; // Show pay-with-tamara
    formPayWithTabby.style.display = "block"; // Hide pay-with-tabby
  }
}

// Add event listeners to radio buttons
// document
//   .getElementById("flexRadioDefault1")
//   .addEventListener("change", toggleForms);
document
  .getElementById("flexRadioDefault2")
  .addEventListener("change", toggleForms);
document
  .getElementById("flexRadioDefault0")
  .addEventListener("change", toggleForms);
document
  .getElementById("flexRadioDefaultTabby")
  .addEventListener("change", toggleForms);

// Initial call to set the correct display at page load
toggleForms();

//pay In Center Btn
payInCenterBtn.addEventListener("click", function () {
  if (!name || !phone || !branch || branch === "اختر فرع") {
    alert("جميع الحقول مطلوبة!");
    return false;
  }

  if (!/^5\d{8}$/.test(phone)) {
    alert("رقم الهاتف غير صالح!");
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

  const url = `${origin}${sub}/thanks/?id=${randomString}&fullname=${name}&phone=${phone}&branch=${branch}&plan=${serv}&price=${total}&model=${mod}&yearId=${yearId}&additionalServices=${
    checkedValues.join(", ") || "لايوجد"
  }${affiliate ? `&affiliate=${affiliate}` : ""}${
    isDiscountCodeValide ? `&dc=${discountCode}&msh=${marketerShare}` : ""
  }${fullYear ? `&fy=${fullYear}` : ""}`;

  window.location.href = url;
});

// Pay with Tamara Btn (Checkout Tamara API)
payWithTamaraBtn.addEventListener("click", async function () {
  if (!name || !phone || !branch || branch === "اختر فرع") {
    alert("جميع الحقول مطلوبة!");
    return false;
  }

  if (!/^5\d{8}$/.test(phone)) {
    alert("رقم الهاتف غير صالح!");
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
    }${affiliate ? `&affiliate=${affiliate}` : ""}${
      isDiscountCodeValide ? `&dc=${discountCode}&msh=${marketerShare}` : ""
    }${fullYear ? `&fy=${fullYear}` : ""}`,
    merchant_url: {
      cancel: `${origin}${sub}/thanks/?cancel=true`,
      failure: `${origin}${sub}/thanks/?fail=true`,
      success: `${origin}${sub}/thanks/`,
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
    locale: "ar_SA",
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
      payWithTamaraBtn.innerHTML = "تأكيد الطلب";
      throw new Error(`HTTP error! status: ${response.status}`);
    }

    const result = await response.json();

    // Redirect to Tamara checkout page
    if (result.checkout_url) {
      window.location.href = result.checkout_url;
    } else {
      spinner.style.display = "none";
      payWithTamaraBtn.disabled = false;
      payWithTamaraBtn.innerHTML = "تأكيد الطلب";
      alert("Failed to retrieve checkout URL.");
    }
  } catch (error) {
    spinner.style.display = "none";
    payWithTamaraBtn.disabled = false;
    payWithTamaraBtn.innerHTML = "تأكيد الطلب";
    console.error("Error creating Tamara checkout:", error);
    alert("An error occurred while processing your payment. Please try again.");
  }
});

// Pay with Tabby Btn (Checkout Tabby API)
payWithTabbyBtn.addEventListener("click", async function () {
  if (!name || !phone || !branch || branch === "اختر فرع") {
    alert("جميع الحقول مطلوبة!");
    return false;
  }

  if (!/^5\d{8}$/.test(phone)) {
    alert("رقم الهاتف غير صالح!");
    return false;
  }

  // Random string 16 Char
  const timestamp = Date.now().toString(36).slice(-6);
  let randomString = Math.random().toString(36).substr(2, 10);
  randomString = "TABBY-" + (timestamp + randomString).slice(0, 10); // Total length will be 16

  const now = new Date();
  const formattedDate = now.toISOString();

  const orderData = {
    payment: {
      amount: total,
      currency: "SAR",
      description: `id=${randomString}&fullname=${name}&phone=${phone}&branch=${branch}&plan=${serv}&price=${total}&model=${mod}&yearId=${yearId}&service=مخدوم&additionalServices=${
        checkedValues.join(", ") || "لايوجد"
      }${affiliate ? `&affiliate=${affiliate}` : ""}${
        isDiscountCodeValide ? `&dc=${discountCode}&msh=${marketerShare}` : ""
      }${fullYear ? `&fy=${fullYear}` : ""}`,
      buyer: {
        phone: phone,
        email: "user@example.com",
        name: name,
        dob: "2000-08-24",
      },
      shipping_address: {
        city: branch,
        address: branch,
        zip: "N/A",
      },
      order: {
        tax_amount: "0.00",
        shipping_amount: "0.00",
        discount_amount: "0.00",
        updated_at: formattedDate,
        reference_id: randomString,
        items: [
          {
            title: serv,
            description: `id=${randomString}&fullname=${name}&phone=${phone}&branch=${branch}&plan=${serv}&price=${total}&model=${mod}&yearId=${yearId}&service=مخدوم&additionalServices=${
              checkedValues.join(", ") || "لايوجد"
            }${affiliate ? `&affiliate=${affiliate}` : ""}${
              isDiscountCodeValide
                ? `&dc=${discountCode}&msh=${marketerShare}`
                : ""
            }${fullYear ? `&fy=${fullYear}` : ""}`,
            quantity: 1,
            unit_price: total,
            discount_amount: "0.00",
            reference_id: "string",
            image_url: "http://example.com",
            product_url: "http://example.com",
            gender: "Male",
            category: serv,
            color: "string",
            product_material: "string",
            size_type: "string",
            size: "string",
            brand: mod,
            is_refundable: false,
          },
        ],
      },
      buyer_history: {
        registered_since: formattedDate,
        loyalty_level: 0,
        wishlist_count: 0,
        is_social_networks_connected: true,
        is_phone_number_verified: true,
        is_email_verified: true,
      },
      order_history: [
        {
          purchased_at: formattedDate,
          amount: total,
          payment_method: "card",
          status: "new",
          buyer: {
            phone: phone,
            email: "user@example.com",
            name: name,
            dob: "2000-08-24",
          },
          shipping_address: {
            city: branch,
            address: branch,
            zip: "N/A",
          },
          items: [
            {
              title: serv,
              description: `id=${randomString}&fullname=${name}&phone=${phone}&branch=${branch}&plan=${serv}&price=${total}&model=${mod}&yearId=${yearId}&service=مخدوم&additionalServices=${
                checkedValues.join(", ") || "لايوجد"
              }${affiliate ? `&affiliate=${affiliate}` : ""}${
                isDiscountCodeValide
                  ? `&dc=${discountCode}&msh=${marketerShare}`
                  : ""
              }${fullYear ? `&fy=${fullYear}` : ""}`,
              quantity: 1,
              unit_price: total,
              discount_amount: "0.00",
              reference_id: randomString,
              image_url: "http://example.com",
              product_url: "http://example.com",
              ordered: 0,
              captured: 0,
              shipped: 0,
              refunded: 0,
              gender: "Male",
              category: serv,
              color: "string",
              product_material: "string",
              size_type: "string",
              size: "string",
              brand: mod,
            },
          ],
        },
      ],
      meta: {
        order_id: null,
        customer: null,
      },
      attachment: {
        body: '{"flight_reservation_details": {"pnr": "TR9088999","affiliate_name": "some affiliate"}}',
        content_type: "application/vnd.tabby.v1+json",
      },
    },
    lang: "ar",
    merchant_code: "SA",
    merchant_urls: {
      success: `${origin}${sub}/thanks/`,
      cancel: `${origin}${sub}/thanks/?cancel=true`,
      failure: `${origin}${sub}/thanks/?fail=true`,
    },
    token: null,
  };

  // disable payWithTabbyBtn button
  payWithTabbyBtn.disabled = true;
  // add boostrap spinner to payWithTabbyBtn button
  payWithTabbyBtn.innerHTML = "";
  const spinner = document.createElement("div");
  spinner.classList.add("spinner-border");
  spinner.setAttribute("role", "status");
  spinner.style.margin = "auto";
  spinner.style.width = "22.5px";
  spinner.style.height = "22.5px";
  payWithTabbyBtn.appendChild(spinner);
  spinner.style.display = "block";

  try {
    // this api will send the "user data(orderData)" to back-end then the back-end will send this data to Tabby API and return the "web_url" that will take it in Front-end to redirect the user to Tabby checkout page(Checkout Session), after the payment is done, Tabby will redirect the user back to the "success_url (thankyou page)" that we have set in the "orderData" object.
    const response = await fetch(`${BACK_END_API}/api/pay-with-tabby`, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(orderData),
    });

    if (!response.ok) {
      spinner.style.display = "none";
      payWithTabbyBtn.disabled = false;
      payWithTabbyBtn.innerHTML = "تأكيد الطلب";
      throw new Error(`HTTP error! status: ${response.status}`);
    }

    const result = await response.json();

    // Redirect to Tabby checkout page
    if (result.checkout_url) {
      window.location.href = result.checkout_url;
    } else {
      spinner.style.display = "none";
      payWithTabbyBtn.disabled = false;
      payWithTabbyBtn.innerHTML = "تأكيد الطلب";
      alert("Failed to retrieve checkout URL.");
    }
  } catch (error) {
    spinner.style.display = "none";
    payWithTabbyBtn.disabled = false;
    payWithTabbyBtn.innerHTML = "تأكيد الطلب";
    console.error("Error creating Tabby checkout:", error);
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

// Add line-through style to <td>
document.addEventListener("DOMContentLoaded", function () {
  // Get all rows in the table
  const rows = document.querySelectorAll("tr");

  rows.forEach((row) => {
    // Find the checkbox and the second <td> in the current row
    const checkbox = row.querySelector('input[type="checkbox"]');
    const secondTd = row.querySelector("td:nth-child(2)");

    if (checkbox && secondTd) {
      // Add event listener to the checkbox
      checkbox.addEventListener("change", function () {
        if (!checkbox.checked) {
          secondTd.classList.add("line-through");
        } else {
          secondTd.classList.remove("line-through");
        }
      });

      // Initial check in case the checkbox is not checked by default
      if (!checkbox.checked) {
        secondTd.classList.add("line-through");
      }
    }
  });
});
