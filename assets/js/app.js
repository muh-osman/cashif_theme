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

// Function to handle chip clicked
let clickedButtonId; // model id
const handleButtonClick = (event) => {
  buttonContainer.querySelectorAll("button").forEach((button) => {
    button.classList.remove("active-model");
  });

  event.target.classList.add("active-model");

  clickedButtonId = event.target.id; // model id
};

inputElement.addEventListener("keyup", async function () {
  const searchValue = inputElement.value.trim(); // Get the value

  try {
    if (searchValue !== "") {
      const response = await fetch(
        "https://cashif.online/back-end/public/api/car-models/search",
        {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify({ search: searchValue }),
        }
      );

      if (!response.ok) {
        throw new Error("Failed to fetch data");
      }

      const data = await response.json();
      const firstTenResults = data.carModels.slice(0, 10); // Get the first 10 results
      // console.log(firstTenResults);

      // Clear previous buttons
      buttonContainer.innerHTML = "";

      // Map over the first 10 results and create buttons
      firstTenResults.forEach((result) => {
        const button = document.createElement("button");
        button.textContent = result.model_name;
        button.id = result.id;
        button.classList.add("custom-button-class");
        button.addEventListener("click", handleButtonClick);
        buttonContainer.appendChild(button);
      });

      // Append the buttons to a container in the DOM
      resultContainer.appendChild(buttonContainer);
    } else {
      // Clear previous buttons
      buttonContainer.innerHTML = "";
    }
  } catch (error) {
    console.error("Error:", error);
  }
});

// Submit form
const submit = async () => {
  let yearValue = document.getElementById("dropdownButton").dataset.value;
  let button = document.querySelector(".discount-bttn");

  // Check if yearValue is not selected
  if (!yearValue) {
    alert("يرجى اختيار سنة الصنع");
    return;
  }

  // Check if model is not selected
  if (!clickedButtonId) {
    alert("يرجى اختيار الموديل");
    return;
  }

  if (yearValue >= 2015) {
    yearValue = 2;
  } else {
    yearValue = 1;
  }

  // Show spinner
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
      throw new Error("Failed to fetch data from the new API");
    }

    const newData = await response.json();
    // Handle the response from the new API here
    console.log(newData);

    button.innerHTML = "أسعار الخدمة";

    //
    const engainPrice = document.getElementById("engain-price");
    engainPrice.textContent = `${
      newData[0].prices[2].price * (1).toFixed(2)
    } ريال`;
    const mainPrice = document.getElementById("main-price");
    mainPrice.textContent = `${
      newData[0].prices[1].price * (1).toFixed(2)
    } ريال`;
    const fullPrice = document.getElementById("full-price");
    fullPrice.textContent = `${
      newData[0].prices[0].price * (1).toFixed(2)
    } ريال`;

    //
    const overlay = document.getElementById("overlay");
    overlay.style.gridTemplateRows = "1fr";
  } catch (error) {
    // Handle any errors that occur during the API request to the new API
    console.error("Error:", error);
  }
};
