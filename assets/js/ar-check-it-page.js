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

// Language btn
const languageToggle = document.getElementById("language-toggle");

// Check if the page is being loaded from the cache
window.addEventListener("pageshow", function (event) {
  // If the language toggle was checked, uncheck it
  if (
    event.persisted ||
    (window.performance && window.performance.navigation.type === 2)
  ) {
    languageToggle.checked = false;
  }
});

languageToggle.addEventListener("change", function () {
  if (this.checked) {
    // Redirect to Arabic page
    window.location.href = "https://cashif.cc/check-it/en/";
  } else {
    // Redirect to English page
    window.location.href = "https://cashif.cc/check-it/";
  }
});

//
// window.onload = function () {
//   window.scrollTo(0, 0);
// };

// Bootstrap tooltips
const tooltipTriggerList = document.querySelectorAll(
  '[data-bs-toggle="tooltip"]'
);
const tooltipList = [...tooltipTriggerList].map(
  (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);

// Years dropdown (change year in btn)
document.querySelectorAll(".dropdown-item").forEach((item) => {
  item.addEventListener("click", function (event) {
    event.preventDefault(); // Prevent the default behavior of scrolling to the top

    document.getElementById("dropdownButton").innerText = this.innerText;
    document.getElementById("dropdownButton").dataset.value =
      this.dataset.value;
  });
});

// Search input
const inputElement = document.querySelector(".form-control");
const buttonContainer = document.createElement("div");
const resultContainer = document.getElementById("search-result");
const spinner = document.getElementById("spinner");

// Function to handle chip clicked
let clickedButtonId; // model id
let clickedButtonTitle; // model id
const handleButtonClick = (event) => {
  buttonContainer.querySelectorAll("button").forEach((button) => {
    button.classList.remove("active-model");
  });

  event.target.classList.add("active-model");

  clickedButtonId = event.target.id; // model id
  clickedButtonTitle = event.target.getAttribute("data-model-name");

  if (clickedButtonId === "موديل غير موجود") {
    window.location.href =
      "https://wa.me/966920019948?text=استعلام عن موديل غير موجود (خدمة نفحصها عنك)";
  }
};

// Debounce function
const debounce = (func, delay) => {
  let timeoutId;
  return (...args) => {
    if (timeoutId) {
      clearTimeout(timeoutId);
    }
    timeoutId = setTimeout(() => {
      func(...args);
    }, delay);
  };
};

// Search input with debounce
let firstTenResults;
const debouncedSearch = debounce(async () => {
  const searchValue = inputElement.value.trim(); // Get the value

  if (searchValue === "") {
    resultContainer.style.gridTemplateRows = "0fr";
  }

  try {
    if (searchValue !== "") {
      spinner.style.display = "block";

      const response = await fetch(
        "https://cashif.online/back-end/public/api/car-models/limited-general-search",
        {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify({ search: searchValue }),
        }
      );

      spinner.style.display = "none";

      if (!response.ok) {
        throw new Error("Failed to fetch data");
      }

      const data = await response.json();
      firstTenResults = data.carModels.slice(0, 10); // Get the first 10 results
      // console.log(firstTenResults);

      // Clear previous buttons
      buttonContainer.innerHTML = "";

      if (firstTenResults.length === 0) {
        const button = document.createElement("button");
        button.textContent = "موديل غير موجود";
        button.setAttribute("data-model-name", "موديل غير موجود");
        button.id = "موديل غير موجود";
        button.classList.add("custom-button-class", "gree");
        button.addEventListener("click", handleButtonClick);
        buttonContainer.appendChild(button);
      }

      // Map over the first 10 results and create buttons
      firstTenResults.forEach((result) => {
        const button = document.createElement("button");
        button.textContent = result.model_name;
        button.setAttribute("data-model-name", result.model_name);
        button.id = result.id;
        button.classList.add("custom-button-class");
        button.addEventListener("click", handleButtonClick);
        buttonContainer.appendChild(button);
      });

      // Append the buttons to a container in the DOM
      resultContainer.appendChild(buttonContainer);
      resultContainer.style.gridTemplateRows = "1fr";
    } else {
      // Clear previous buttons
      buttonContainer.innerHTML = "";
    }
  } catch (error) {
    console.error("Error:", error);
    spinner.style.display = "none";
  }
}, 500); // Set the delay to 500ms

inputElement.addEventListener("keyup", debouncedSearch);

// Submit form
let newData;
const submit = async () => {
  let yearValue = document.getElementById("dropdownButton").dataset.value;
  let button = document.querySelector(".submit-btn");

  // Check if model is not selected
  if (!clickedButtonId) {
    alert("يرجى اختيار موديل");
    return;
  }

  // Check if yearValue is not selected
  if (!yearValue) {
    alert("يرجى اختيار سنة الصنع");
    return;
  }

  if (yearValue >= 2015) {
    yearValue = 2;
  } else {
    yearValue = 1;
  }

  button.innerHTML = " جاري البحث...";

  try {
    const response = await fetch(
      `https://cashif.online/back-end/public/api/get-prices-by-model-and-year?car_model_id=${clickedButtonId}&year_id=${yearValue}`,
      {
        method: "GET",
        headers: {
          "Content-Type": "application/json",
        },
      }
    );

    if (!response.ok) {
      button.innerHTML = "بحث";
      throw new Error("Failed to fetch data from the new API");
    }

    newData = await response.json();
    // console.log(newData);

    button.innerHTML = "بحث";

    //
    const engainPrice = document.getElementById("engain-price");
    const engainValue = parseFloat(newData[0].prices[2].price) + 100;
    engainPrice.textContent = `${
      engainValue % 1 === 0 ? engainValue.toFixed(0) : engainValue.toFixed(2)
    } ريال`;

    const mainPrice = document.getElementById("main-price");
    const mainValue = parseFloat(newData[0].prices[1].price) + 100;
    mainPrice.textContent = `${
      mainValue % 1 === 0 ? mainValue.toFixed(0) : mainValue.toFixed(2)
    } ريال`;

    const fullPrice = document.getElementById("full-price");
    const fullValue = parseFloat(newData[0].prices[0].price) + 100;
    fullPrice.textContent = `${
      fullValue % 1 === 0 ? fullValue.toFixed(0) : fullValue.toFixed(2)
    } ريال`;

    //
    const overlay = document.getElementById("overlay");
    overlay.style.padding = "16px";
    overlay.style.gridTemplateRows = "1fr";

    // Wait for the layout to be updated before scrolling
    setTimeout(() => {
      overlay.scrollIntoView({
        behavior: "smooth",
        block: "start",
        inline: "nearest",
      });
    }, 100);
  } catch (error) {
    // Handle any errors that occur during the API request to the new API
    console.error("Error:", error);
    button.innerHTML = "بحث";
  }
};

// Whatsapp Plane btn
// https://wa.me/1XXXXXXXXXX?text=I'm%20interested%20in%20your%20car%20for%20sale
const planeOneBtn = document.getElementById("plane-one");
const planeTwoBtn = document.getElementById("plane-two");
const planeThreeBtn = document.getElementById("plane-three");

const palneA = () => {
  const priceA = parseFloat(newData[0].prices[2].price) + 100;
  // const url = `https://wa.me/966920019948?text=طلب خدمة  *نفحصها عنك* موديل "${clickedButtonTitle}" باقة "المحركات" - ${
  //   priceA % 1 === 0 ? priceA.toFixed(0) : priceA.toFixed(2)
  // } ريال`;

  const url =
    "https://wa.me/966920019948?text=*توجه مباشرة الى أقرب فرع لك، لن تحتاج الى حجز موعد (خدمة نفحصها عنك).*";

  window.location.href = url;
};

const palneB = () => {
  const priceB = parseFloat(newData[0].prices[1].price) + 100;
  // const url = `https://wa.me/966920019948?text=طلب خدمة  *نفحصها عنك* موديل "${clickedButtonTitle}" الباقة "الأساسية" - ${
  //   priceB % 1 === 0 ? priceB.toFixed(0) : priceB.toFixed(2)
  // } ريال`;

  const url =
    "https://wa.me/966920019948?text=*توجه مباشرة الى أقرب فرع لك، لن تحتاج الى حجز موعد (خدمة نفحصها عنك).*";

  window.location.href = url;
};

const palneC = () => {
  const priceC = parseFloat(newData[0].prices[0].price) + 100;
  // const url = `https://wa.me/966920019948?text=طلب خدمة  *نفحصها عنك* موديل "${clickedButtonTitle}" الباقة "الشاملة" - ${
  //   priceC % 1 === 0 ? priceC.toFixed(0) : priceC.toFixed(2)
  // } ريال`;

  const url =
    "https://wa.me/966920019948?text=*توجه مباشرة الى أقرب فرع لك، لن تحتاج الى حجز موعد (خدمة نفحصها عنك).*";

  window.location.href = url;
};
