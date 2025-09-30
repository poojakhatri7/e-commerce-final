<?php include 'db_connection.php'; ?>
<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'top_navbar.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$c_id = mysqli_real_escape_string($conn, $_POST['c_id']);
$s_id = mysqli_real_escape_string($conn, $_POST['s_id']);
$product_title = mysqli_real_escape_string($conn, $_POST['product_title']);
$product_price = mysqli_real_escape_string($conn, $_POST['product_price']);
$discount = mysqli_real_escape_string($conn, $_POST['discount']);
$offer_price = mysqli_real_escape_string($conn, $_POST['offer_price']);
$product_description = mysqli_real_escape_string($conn, $_POST['product_description']); 
$photo = $_FILES["image"]["name"];
$photo2 = $_FILES["image"]["tmp_name"];
$uploadPath = "upload-images/" . $photo;
move_uploaded_file($photo2, $uploadPath);
$sql = "INSERT INTO all_products ( product, description ,c_id, s_id , price, discount_percentage ,offer_price, file) VALUES ('$product_title','$product_description','$c_id','$s_id','$product_price','$discount','$offer_price','$uploadPath')";

// echo "<div style='text-align:center;'>
//          <h2>$product_title</h2>
//          <p>$product_description</p>
//           print_r($_SERVER);
//            <p>$c_id</p>
//            <p>$s_id</p>
//       </div>";
// echo '<pre style="text-align :center">';
//     print_r($_FILES);
//     echo "</pre>";
      if (mysqli_query($conn, $sql)) {
          echo "<script>alert('Product added successfully!'); window.location.href='available_products';</script>";
      } else {
          echo "<script>alert('Error: " . mysqli_error($conn) . "'); </script>";
      }
}
?>

 <div class="content">
        <form class="mb-9" action="" method="post" enctype= "multipart/form-data">
          <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
              <h2 class="mb-2">Add a Product</h2>
              <h5  style="color:rgba(95, 97, 230);font-size:20px;">Orders placed across your store</h5>
            </div>
            <div class="col-auto"><button class="btn btn-danger me-2 mb-2 mb-sm-0" type="reset">Discard</button>
           
            <button class="btn custom-btn mb-2 mb-sm-0" type="submit">Publish product</button>
</div>

          </div>
          <div class="row g-5">
             
            <div class="col-12 col-xl-8">
              <h4 class="mb-3">Product Title</h4>
              <input class="form-control mb-5" type="text" name="product_title" placeholder="Write title here..."  required>
              <div class="mb-6">
                <h4 class="mb-3"> Product Description</h4>
                <textarea  class="form-control mb-5" name="product_description" data-tinymce='{"height":"15rem","placeholder":"Write a description here..."}' required></textarea>
              </div>
              <h4 class="mb-3">Display images</h4>
              <div class="dropzone dropzone-multiple p-0 mb-5" id="my-awesome-dropzone" data-dropzone="data-dropzone">
                <div class="fallback">
                  <input type="file" style="color: rgba(95, 97, 230)"; id="profile-img" name="image"  multiple="multiple" /></div>
                   <img id="preview-img" src="" alt="Image Preview" style="max-width: 200px; margin: 10px auto 0; margin-top: 8px; display: none;" />
                <div class="dz-preview d-flex flex-wrap">
                  <div class="border border-translucent bg-body-emphasis rounded-3 d-flex flex-center position-relative me-2 mb-2" style="height:80px;width:80px;">
                    <img class="dz-image" src="assets/img/products/23.png" alt="..." data-dz-thumbnail="data-dz-thumbnail" /><a class="dz-remove text-body-quaternary" href="#!" data-dz-remove="data-dz-remove"><span data-feather="x"></span></a></div>
                </div>
              </div>
              <h4 class="mb-3">Inventory</h4>
              <div class="row g-0 border-top border-bottom">
                <div class="col-sm-4">
                  <div class="nav flex-sm-column border-bottom border-bottom-sm-0 border-end-sm fs-9 vertical-tab h-100 justify-content-between" role="tablist" aria-orientation="vertical"><a class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center active" id="pricingTab" data-bs-toggle="tab" data-bs-target="#pricingTabContent" role="tab" aria-controls="pricingTabContent" aria-selected="true"> <span class="me-sm-2 fs-4 nav-icons" data-feather="tag"></span><span class="d-none d-sm-inline">Pricing</span></a><a class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="restockTab" data-bs-toggle="tab" data-bs-target="#restockTabContent" role="tab" aria-controls="restockTabContent" aria-selected="false"> <span class="me-sm-2 fs-4 nav-icons" data-feather="package"></span><span class="d-none d-sm-inline">Restock</span></a><a class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="shippingTab" data-bs-toggle="tab" data-bs-target="#shippingTabContent" role="tab" aria-controls="shippingTabContent" aria-selected="false"> <span class="me-sm-2 fs-4 nav-icons" data-feather="truck"></span><span class="d-none d-sm-inline">Shipping</span></a><a class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="productsTab" data-bs-toggle="tab" data-bs-target="#productsTabContent" role="tab" aria-controls="productsTabContent" aria-selected="false"> <span class="me-sm-2 fs-4 nav-icons" data-feather="globe"></span><span class="d-none d-sm-inline">Global Delivery</span></a><a class="nav-link border-end border-end-sm-0 border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="attributesTab" data-bs-toggle="tab" data-bs-target="#attributesTabContent" role="tab" aria-controls="attributesTabContent" aria-selected="false"> <span class="me-sm-2 fs-4 nav-icons" data-feather="sliders"></span><span class="d-none d-sm-inline">Attributes</span></a><a class="nav-link text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="advancedTab" data-bs-toggle="tab" data-bs-target="#advancedTabContent" role="tab" aria-controls="advancedTabContent" aria-selected="false"> <span class="me-sm-2 fs-4 nav-icons" data-feather="lock"></span><span class="d-none d-sm-inline">Advanced</span></a></div>
                </div>
                <div class="col-sm-8">
                  <div class="tab-content py-3 ps-sm-4 h-100">
                    <div class="tab-pane fade show active" id="pricingTabContent" role="tabpanel">
                      <h4 class="mb-3 d-sm-none">Pricing</h4>
                      <div class="row g-3">
                        <div class="col-12 col-lg-6">
                          <h5 class="mb-2 text-body-highlight">Product Price</h5><input class="form-control" type="number" name="product_price" id="product_price" placeholder="Rs" required>
                        </div>
                        <div class="col-12 col-lg-6">
                          <h5 class="mb-2 text-body-highlight">Discount</h5><input class="form-control" type="number" name="discount" id="discount" placeholder="Rs" required>
                        </div>
                           <div class="col-12 col-lg-6">
                          <h5 class="mb-2 text-body-highlight">Offer Price</h5><input class="form-control" type="number" name="offer_price" id="offer_price" placeholder="Rs" required>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade h-100" id="restockTabContent" role="tabpanel" aria-labelledby="restockTab">
                      <div class="d-flex flex-column h-100">
                        <h5 class="mb-3 text-body-highlight">Add to Stock</h5>
                        <div class="row g-3 flex-1 mb-4">
                          <div class="col-sm-7"><input class="form-control" type="number" placeholder="Quantity" /></div>
                          <div class="col-sm"><button class="btn btn-primary" type="button"><span class="fa-solid fa-check me-1 fs-10"></span>Confirm</button></div>
                        </div>
                        <table>
                          <thead>
                            <tr>
                              <th style="width: 200px;"></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-body-highlight fw-bold py-1">Product in stock now:</td>
                              <td class="text-body-tertiary fw-semibold py-1">$1,090<button class="btn p-0" type="button"><span class="fa-solid fa-rotate text-body ms-1" style="--phoenix-text-opacity: .6;"></span></button></td>
                            </tr>
                            <tr>
                              <td class="text-body-highlight fw-bold py-1">Product in transit:</td>
                              <td class="text-body-tertiary fw-semibold py-1">5000</td>
                            </tr>
                            <tr>
                              <td class="text-body-highlight fw-bold py-1">Last time restocked:</td>
                              <td class="text-body-tertiary fw-semibold py-1">30th June, 2021</td>
                            </tr>
                            <tr>
                              <td class="text-body-highlight fw-bold py-1">Total stock over lifetime:</td>
                              <td class="text-body-tertiary fw-semibold py-1">20,000</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="tab-pane fade h-100" id="shippingTabContent" role="tabpanel" aria-labelledby="shippingTab">
                      <div class="d-flex flex-column h-100">
                        <h5 class="mb-3 text-body-highlight">Shipping Type</h5>
                        <div class="flex-1">
                          <div class="mb-4">
                            <div class="form-check mb-1"><input class="form-check-input" type="radio" name="shippingRadio" id="fullfilledBySeller" /><label class="form-check-label fs-8 text-body" for="fullfilledBySeller">Fullfilled by Seller</label></div>
                            <div class="ps-4">
                              <p class="text-body-secondary fs-9 mb-0">You’ll be responsible for product delivery. <br />Any damage or delay during shipping may cost you a Damage fee.</p>
                            </div>
                          </div>
                          <div class="mb-4">
                            <div class="form-check mb-1"><input class="form-check-input" type="radio" name="shippingRadio" id="fullfilledByPhoenix" checked="checked" /><label class="form-check-label fs-8 text-body d-flex align-items-center" for="fullfilledByPhoenix">Fullfilled by Phoenix <span class="badge badge-phoenix badge-phoenix-warning fs-10 ms-2">Recommended</span></label></div>
                            <div class="ps-4">
                              <p class="text-body-secondary fs-9 mb-0">Your product, Our responsibility.<br />For a measly fee, we will handle the delivery process for you.</p>
                            </div>
                          </div>
                        </div>
                        <p class="fs-9 fw-semibold mb-0">See our <a class="fw-bold" href="#!">Delivery terms and conditions </a>for details.</p>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="productsTabContent" role="tabpanel" aria-labelledby="productsTab">
                      <h5 class="mb-3 text-body-highlight">Global Delivery</h5>
                      <div class="mb-3">
                        <div class="form-check"><input class="form-check-input" type="radio" name="deliveryRadio" id="worldwideDelivery" /><label class="form-check-label fs-8 text-body" for="worldwideDelivery">Worldwide delivery</label></div>
                        <div class="ps-4">
                          <p class="fs-9 mb-0 text-body-secondary">Only available with Shipping method: <a href="#!">Fullfilled by Phoenix</a></p>
                        </div>
                      </div>
                      <div class="mb-3">
                        <div class="form-check"><input class="form-check-input" type="radio" name="deliveryRadio" checked="checked" id="selectedCountry" /><label class="form-check-label fs-8 text-body" for="selectedCountry">Selected Countries</label></div>
                        <div class="ps-4" style="max-width: 350px;"><select class="form-select ps-4" id="organizerMultiple" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="">Type Country name</option>
                            <option>United States of America</option>
                            <option>United Kingdom</option>
                            <option>Canada</option>
                            <option>Mexico</option>
                          </select></div>
                      </div>
                      <div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="deliveryRadio" id="localDelivery" /><label class="form-check-label fs-8 text-body" for="localDelivery">Local delivery</label></div>
                        <p class="fs-9 ms-4 mb-0 text-body-secondary">Deliver to your country of residence <a href="#!">Change profile address </a></p>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="attributesTabContent" role="tabpanel" aria-labelledby="attributesTab">
                      <h5 class="mb-3 text-body-highlight">Attributes</h5>
                      <div class="form-check"><input class="form-check-input" id="fragileCheck" type="checkbox" /><label class="form-check-label text-body fs-8" for="fragileCheck">Fragile Product</label></div>
                      <div class="form-check"><input class="form-check-input" id="biodegradableCheck" type="checkbox" /><label class="form-check-label text-body fs-8" for="biodegradableCheck">Biodegradable</label></div>
                      <div class="mb-3">
                        <div class="form-check"><input class="form-check-input" id="frozenCheck" type="checkbox" checked="checked" /><label class="form-check-label text-body fs-8" for="frozenCheck">Frozen Product</label><input class="form-control" type="text" placeholder="Max. allowed Temperature" style="max-width: 350px;" /></div>
                      </div>
                      <div class="form-check"><input class="form-check-input" id="productCheck" type="checkbox" checked="checked" /><label class="form-check-label text-body fs-8" for="productCheck">Expiry Date of Product</label><input class="form-control inventory-attributes datetimepicker" id="inventory" type="text" style="max-width: 350px;" placeholder="d/m/y" data-options='{"disableMobile":true}' /></div>
                    </div>
                    <div class="tab-pane fade" id="advancedTabContent" role="tabpanel" aria-labelledby="advancedTab">
                      <h5 class="mb-3 text-body-highlight">Advanced</h5>
                      <div class="row g-3">
                        <div class="col-12 col-lg-6">
                          <h5 class="mb-2 text-body-highlight">Product ID Type</h5><select class="form-select" aria-label="form-select-lg example">
                            <option selected="selected">ISBN</option>
                            <option value="1">UPC</option>
                            <option value="2">EAN</option>
                            <option value="3">JAN</option>
                          </select>
                        </div>
                        <div class="col-12 col-lg-6">
                          <h5 class="mb-2 text-body-highlight">Product ID</h5><input class="form-control" type="text" placeholder="ISBN Number" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="row g-2">
                <div class="col-12 col-xl-12">
                  <div class="card mb-3">
                    <div class="card-body">
                      <h4 class="card-title mb-4">Organize</h4>
                      <div class="row gx-3">
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="mb-4">
                            <div class="d-flex flex-wrap flex-between-center mb-2">
                              <h5 class="mb-0 text-body-highlight me-2">Category</h5>
                              <span class="fw-bold fs-8 fw-bold link-purple" href="#!" >Add new category</span>
                            </div>
                          <select name="c_id" class="form-control" id="service" required>
            <option value="">Select category</option>
        </select>
                          </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="mb-4">
                            <div class="d-flex flex-wrap flex-between-center mb-2">
                              <h5 class="mb-0 text-body-highlight me-2">Sub Category</h5>
                              <span class="fw-bold  link-purple fs-8" href="#!">Add Sub Category</span>
                            </div>
                           <select name="s_id" class="form-control" id="sub_service" required>
            <option value="">Select Sub category</option>
        </select>
                          </div>
                        </div>
                        <!-- <div class="col-12 col-sm-6 col-xl-12">
                          <div class="mb-4">
                            <div class="d-flex flex-wrap mb-2 flex-between-center">
                              <h5 class="mb-2 text-body-highlight">Collection</h5><a class="fw-bold fs-9" href="#!">Add new collection</a>
                            </div><input class="form-control mb-xl-3" type="text" placeholder="Collection" />
                          </div>
                        </div> -->
                        <!-- <div class="col-12 col-sm-6 col-xl-12">
                          <div class="d-flex flex-wrap flex-between-center mb-2">
                            <h5 class="mb-0 text-body-highlight me-2">Tags</h5><a class="fw-bold fs-9 lh-sm" href="#!">View all tags</a>
                          </div><select class="form-select" aria-label="category">
                            <option value="men-cloth">Men's Clothing</option>
                            <option value="women-cloth">Womens's Clothing</option>
                            <option value="kid-cloth">Kid's Clothing</option>
                          </select>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-12 col-xl-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title mb-4">Variants</h4>
                      <div class="row g-3">
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="border-bottom border-translucent border-dashed border-sm-0 border-bottom-xl pb-4">
                            <div class="d-flex flex-wrap flex-between-center mb-2">
                              <h5 class="text-body-highlight me-2">Option 1</h5><a class="fw-bold fs-9" href="#!">Remove</a>
                            </div><select class="form-select mb-3">
                              <option value="size">Size</option>
                              <option value="color">Color</option>
                              <option value="weight">Weight</option>
                              <option value="smell">Smell</option>
                            </select>
                            <div class="product-variant-select-menu"><select class="form-select mb-3" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                                <option value="size">4x6 in</option>
                                <option value="color">9x6 in</option>
                                <option value="weight">11x8 in</option>
                              </select></div>
                          </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="d-flex flex-wrap flex-between-center mb-2">
                            <h5 class="text-body-highlight me-2">Option 2</h5><a class="fw-bold fs-9" href="#!">Remove</a>
                          </div><select class="form-select mb-3">
                            <option value="size">Size</option>
                            <option value="color">Color</option>
                            <option value="weight">Weight</option>
                            <option value="smell">Smell</option>
                          </select>
                          <div class="product-variant-select-menu mb-3"><select class="form-select mb-3" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                              <option value="size">4x6 in</option>
                              <option value="color">9x6 in</option>
                              <option value="weight">11x8 in</option>
                            </select></div>
                        </div>
                      </div><button class="btn btn-phoenix-primary w-100" type="button">Add another option</button>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </form>
<script>
document.addEventListener("DOMContentLoaded", function () {

    // Function to load service categories
    async function loadServices() {
        try {
            const response = await fetch("category.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: new URLSearchParams({ request_type: "service_data" })
            });
            const data = await response.text();
            document.getElementById("service").innerHTML = data;
        } catch (error) {
            console.error("Error loading services:", error);
        }
    }

    // Function to load sub-services based on selected category
    async function loadSubServices(service_id) {
        try {
            const response = await fetch("category.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: new URLSearchParams({ request_type: "sub_service_data", id: service_id })
            });
            const data = await response.text();
            document.getElementById("sub_service").innerHTML = data;
        } catch (error) {
            console.error("Error loading sub-services:", error);
        }
    }

    // Load categories on page load
    loadServices();

    // On change of service category, load corresponding sub-services
    document.getElementById("service").addEventListener("change", function () {
        const service_id = this.value;
        if (service_id !== "") {
            loadSubServices(service_id);
        } else {
            document.getElementById("sub_service").innerHTML = '<option value="">Select Sub-Service</option>';
        }
    });

    // On change of sub-service, load corresponding service details in the table
    document.getElementById("sub_service").addEventListener("change", async function () {
        const sub_service = this.value;
        try {
            const response = await fetch("category.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: new URLSearchParams({ sub_service: sub_service })
            });
            const html = await response.text();

            // Extract table body from response HTML
            const tempDiv = document.createElement("div");
            tempDiv.innerHTML = html;
            const tableBody = tempDiv.querySelector("tbody");

            if (tableBody) {
                document.querySelector("#example1 tbody").innerHTML = tableBody.innerHTML;
            } else {
                document.querySelector("#example1 tbody").innerHTML = "<tr><td colspan='5' class='text-center'>No services found.</td></tr>";
            }
        } catch (error) {
            console.error("Error loading service details:", error);
        }
    });

});
</script>


  <script>
    document.addEventListener("DOMContentLoaded", function () {
      document.querySelectorAll("textarea.tinymce").forEach(el => {
        // Parse config from data-tinymce attribute if present
        let config = {};
        if (el.dataset.tinymce) {
          try {
            config = JSON.parse(el.dataset.tinymce);
          } catch (e) {
            console.warn("Invalid JSON in data-tinymce:", el.dataset.tinymce);
          }
        }

        // Default TinyMCE config
        const defaultConfig = {
          target: el,
          height: 250,
          menubar: false,
          toolbar: "undo redo | bold italic underline | alignleft aligncenter alignright"
        };

        // Merge default + custom config
        tinymce.init({
          ...defaultConfig,
          ...config
        });
      });
    });
  </script>
  <script>
  document.getElementById('profile-img').addEventListener('change', function (event) {
    const file = event.target.files[0];

    if (file) {
      const reader = new FileReader();

      reader.onload = function (e) {
        const previewImg = document.getElementById('preview-img');
        previewImg.src = e.target.result;
        previewImg.style.display = 'block';
      };

      reader.readAsDataURL(file);
    }
  });
</script>
  <script>
const priceInput = document.getElementById('product_price');
const discountInput = document.getElementById('discount');
const offerPriceInput = document.getElementById('offer_price');

function calculateOfferPrice() {
    const price = parseFloat(priceInput.value);
    const discount = parseFloat(discountInput.value);

    if (!isNaN(price) && !isNaN(discount)) {
        const discountAmount = (price * discount) / 100;
        const finalPrice = price - discountAmount;
        offerPriceInput.value = finalPrice.toFixed(2); // Round to 2 decimals
    } else {
        offerPriceInput.value = ''; // Clear if invalid input
    }
}

priceInput.addEventListener('input', calculateOfferPrice);
discountInput.addEventListener('input', calculateOfferPrice);
</script>

     <?php include 'footer.php'; ?>
        
      </div>