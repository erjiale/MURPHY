// Function -> handles Adding a New Product
// handleAddNewProduct = (productName, productPrice) => {
//   console.log(productName, productPrice);
//   $.ajax({
//     data: "orderid=" + your_order_id,
//     url: "url_where_php_is_located.php",
//     method: "POST", // or GET
//     success: function (msg) {
//       alert(msg);
//     },
//   });
// };

// Function -> handles image preview of image we upload
handleChangeImagePreview = (event) => {
  let reader = new FileReader();
  reader.onload = () => {
    let output = document.getElementById("image_preview");
    output.src = reader.result;
  };
  reader.readAsDataURL(event.target.files[0]);
};

// window.onload = function () {
//   let form = document.getElementById("addProductContainer");

//   if (form)
//     form.addEventListener("submit", (event) => {
//       event.preventDefault(); // Attach event.preventDefault() to submit variable => to prevent Reload of page onSubmit
//     });
// };
