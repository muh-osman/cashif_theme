// Get the current URL
const currentUrl = window.location.href;
const url = new URL(currentUrl);
const params = new URLSearchParams(url.search);

const id = params.get("id");
const status = params.get("status");
const amount = params.get("amount");
const message = params.get("message");

//
window.onload = function () {
  if (status === "paid" && message === "APPROVED") {
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
    link.href = qr.toDataURL(); // Get the QR code image data URL
    link.download = "qrcode.png"; // Set the name for the downloaded file
    document.body.appendChild(link); // Append the link to the body
    link.click(); // Programmatically click the link to trigger the download
    document.body.removeChild(link); // Remove the link from the document
  } else {
    document.getElementById("thanks-box").style.display = "none";
    document.getElementById("error-box").style.display = "flex";
  }
};
