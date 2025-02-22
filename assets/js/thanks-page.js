// Get the current URL
const currentUrl = window.location.href;
const url = new URL(currentUrl);
const params = new URLSearchParams(url.search);

const id = params.get("id");
const status = params.get("status");
const amount = params.get("amount");
const message = params.get("message");

const year = params.get("yearId");

const fullName = params.get("fullname");
const phone = params.get("phone");
const branch = params.get("branch");
const plan = params.get("plan");
const price = params.get("price");
const model = params.get("model");
const affiliate = params.get("affiliate");

const addServ = params.get("additionalServices");

// Tamara params
const tamaraPaymentStatus = params.get("paymentStatus");
const tamaraOrderId = params.get("orderId"); // this is generated by tamara NOT me

// Tabby params
const tabbyPaymentId = params.get("payment_id");
const tabbyCancel = params.get("cancel");
const tabbyFail = params.get("fail");
const numOfParams = Array.from(
  new URLSearchParams(window.location.search).keys()
);

// marketer System
const discountCode = params.get("dc");
const marketerShare = params.get("msh");

//
window.onload = function () {
  if (status === "paid" && message === "APPROVED") {
    submitPaidQrCode();
  } else if (tamaraPaymentStatus === "approved" && tamaraOrderId) {
    submitPaidWithTamara();
  } else if (fullName && phone && branch && plan && price && model) {
    submitUnPaidQrCode();
  } else if (
    tabbyPaymentId &&
    tabbyCancel !== "true" &&
    tabbyFail !== "true" &&
    numOfParams.length === 1
  ) {
    submitPaidWithTabby();
  } else {
    document.getElementById("thanks-box").style.display = "none";
    document.getElementById("error-box").style.display = "flex";
    document.getElementById("spinner").style.display = "none";
  }
};

async function submitPaidQrCode() {
  try {
    const response = await fetch(`${BACK_END_API}/api/save-paid-qr-code`, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        paid_qr_code: id,
        // The rest of the data is will store in "paid-qr-code" table in the database Automatically
      }),
    });

    // Check if the response is OK (status code 200-299)
    if (!response.ok) {
      throw new Error("Network response was not ok " + response.statusText);
    }

    // Parse the JSON response
    const data = await response.json();
    // console.log("Success:", data);

    document.getElementById("spinner").style.display = "none";
    document.getElementById("thanks-box").style.display = "block";

    var qr = new QRious({
      element: document.getElementById("qr-canvas"),
      size: 300,
    });

    qr.set({
      value: id,
    });

    // Create a link to download the QR code image
    var link = document.createElement("a");
    link.href = qr.toDataURL();
    link.download = "qrcode.png";
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  } catch (error) {
    console.error("Error:", error);
    document.getElementById("error-box").style.display = "flex"; // Show an error message
    document.getElementById("spinner").style.display = "none";
  }
}

async function submitUnPaidQrCode() {
  try {
    const response = await fetch(`${BACK_END_API}/api/save-unpaid-qr-code`, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        un_paid_qr_code: id,
        full_name: fullName,
        phone: phone,
        branch: branch,
        plan: plan,
        price: price,
        model: model,
        year: year,

        service: "مخدوم",
        additionalServices: addServ,

        affiliate: affiliate || null,

        dc: discountCode || null,
        msh: marketerShare || null,
      }),
    });

    // Check if the response is OK (status code 200-299)
    if (!response.ok) {
      throw new Error("Network response was not ok " + response.statusText);
    }

    // Parse the JSON response
    const data = await response.json();
    // console.log("Success:", data);

    document.getElementById("spinner").style.display = "none";
    document.getElementById("thanks-box").style.display = "block";
    document.getElementById("done").style.display = "none"; // "تم الدفع" inside "thanks-box" so should hide in UNpaid function

    var qr = new QRious({
      element: document.getElementById("qr-canvas"),
      size: 300,
    });

    qr.set({
      value: id,
    });

    // Create a link to download the QR code image
    var link = document.createElement("a");
    link.href = qr.toDataURL();
    link.download = "qrcode.png";
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  } catch (error) {
    console.error("Error:", error);
    document.getElementById("error-box").style.display = "flex"; // Show an error message
    document.getElementById("spinner").style.display = "none";
  }
}

// Paid with Tamara function
async function submitPaidWithTamara() {
  try {
    document.getElementById("spinner").style.display = "none";
    document.getElementById("thanks-box").style.display = "block";

    var qr = new QRious({
      element: document.getElementById("qr-canvas"),
      size: 300,
    });

    qr.set({
      value: `tamara${tamaraOrderId}`,
    });

    // Create a link to download the QR code image
    var link = document.createElement("a");
    link.href = qr.toDataURL();
    link.download = "qrcode.png";
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  } catch (error) {
    console.error("Error:", error);
    document.getElementById("error-box").style.display = "flex"; // Show an error message
    document.getElementById("spinner").style.display = "none";
  }
}

// Paid with Tabby function
async function submitPaidWithTabby() {
  try {
    document.getElementById("spinner").style.display = "none";
    document.getElementById("thanks-box").style.display = "block";

    var qr = new QRious({
      element: document.getElementById("qr-canvas"),
      size: 300,
    });

    qr.set({
      value: `tabby${tabbyPaymentId}`,
    });

    // Create a link to download the QR code image
    var link = document.createElement("a");
    link.href = qr.toDataURL();
    link.download = "qrcode.png";
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  } catch (error) {
    console.error("Error:", error);
    document.getElementById("error-box").style.display = "flex"; // Show an error message
    document.getElementById("spinner").style.display = "none";
  }
}
