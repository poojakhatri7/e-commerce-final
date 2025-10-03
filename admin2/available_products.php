<?php include 'db_connection.php'; ?>
<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'top_navbar.php'; ?>

<div class="content">
        <div class="mb-9">
          <div class="row g-3 mb-4">
            <div class="col-auto">
              <h2 class="mb-0">Available Products</h2>
            </div>
          </div>
      
          <div id="products" data-list='{"valueNames":["product","price","category","tags","vendor","time"],"page":10,"pagination":true}'>
            <div class="mb-4">
              <div class="d-flex flex-wrap gap-3">
            </div>

             <div class= "row g-2 mb-2"> 
<div class="col-sm-4">
                      <!-- select -->
                      <div class="form-group">
<label class="mb-2 fw-bold text-primary">Select Category</label>

                        <select class="form-control" id="service">
                        <option>Select Product Category</option>
                        </select>
                      </div>
                    </div>
                    <div class="row g-2 mb-2">
                    <div class="col-sm-4">
                      <!-- select -->
                      <div class="form-group">
                        <label class="mb-2 fw-bold text-primary">Select Sub Category</label>
                        <select class="form-control"  id="sub_service">
                        <option>Select  Product category first </option>
                        </select>
                      </div>
                    </div>
      
</div>
 
  <div id="tableExample2" data-list='{"valueNames":["name","email","age"],"page":10,"pagination":{"innerWindow":2,"left":1,"right":1}}'>
  <div class="table-responsive mx-n4  mx-lg-n6  bg-body-emphasis border-top border-bottom border-translucent position-relative mt-3">
  <table class="table table-hover table-striped table-bordered table-large align-middle text-center shadow-lg rounded-3 overflow-hidden fs-9 mb-0">
  <thead class="table-primary text-dark">
    <tr>
      <th class="sort border-top" data-sort="name">S no.</th>
       <th class="sort border-top border-translucent ps-3" data-sort="name">Images</th>
      <th class="sort border-top border-translucent ps-3" data-sort="name">Product Name</th>
    <th class="sort border-top" data-sort="email">Price (Rs)</th>
       <th class="sort border-top" data-sort="email">Discount (%)</th>
        <th class="sort border-top" data-sort="email">Offer Price (Rs)</th>
          <th class="sort border-top" data-sort="email">Description</th>
      <th class="sort border-top" data-sort="name">Category</th>
       <th class="sort border-top" data-sort="age">Sub-Category</th>
      <th class="sort border-top" data-sort="payment status">Published on</th>
     
    </tr>
  </thead>
  <tbody class="list">
  </tbody>
</table>

  </div>
  <div class="d-flex justify-content-center mt-3"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
    <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
  </div>
</div>
          </div>
        </div>
    <?php include 'footer.php'; ?>
      </div>

       
            
            </div>
          </div>
        </div>
      </div>
      <script>
    async function loadServices() {
    try {
        const response = await fetch("load_service.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: new URLSearchParams({ request_type: "service_data" })
        });
        const data = await response.text();

        // 🟢 Debug log
        console.log("Category Response:", data);

        document.querySelector("#service").innerHTML = data;
    } catch (error) {
        console.error("Error loading services:", error);
    }
}
 </script>

       <script>
document.addEventListener("DOMContentLoaded", () => {
    
    // Function to load service categories
    async function loadServices() {
        try {
            const response = await fetch("load_service.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: new URLSearchParams({ request_type: "service_data" })
            });
            const data = await response.text();
            document.querySelector("#service").innerHTML = data;
        } catch (error) {
            console.error("Error loading services:", error);
        }
    }

    // Function to load sub-services based on selected category
    async function loadSubServices(service_id) {
        try {
            const response = await fetch("load_service.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: new URLSearchParams({ request_type: "sub_service_data", id: service_id })
            });
            const data = await response.text();
            document.querySelector("#sub_service").innerHTML = data;
        } catch (error) {
            console.error("Error loading sub-services:", error);
        }
    }

    // Load categories on page load
    loadServices();

    // On change of service category, load corresponding sub-services
    document.querySelector("#service").addEventListener("change", (e) => {
        const service_id = e.target.value;
        if (service_id !== "") {
            loadSubServices(service_id);
        } else {
            document.querySelector("#sub_service").innerHTML = '<option value="">Select Sub-Category</option>';
        }
    });

    // On change of sub-service, load corresponding service details in the table
    document.querySelector("#sub_service").addEventListener("change", async (e) => {
        const sub_service = e.target.value;
        try {
            const response = await fetch("load_service.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: new URLSearchParams({ sub_service: sub_service })
            });
            const textResponse = await response.text();

            // Extract tbody from the response
            const parser = new DOMParser();
            const doc = parser.parseFromString(textResponse, "text/html");
            const tableBody = doc.querySelector("tbody") ? doc.querySelector("tbody").innerHTML : "";

            if (tableBody) {
                document.querySelector("#tableExample2 tbody").innerHTML = tableBody;
            } else {
                document.querySelector("#tableExample2 tbody").innerHTML =
                    "<tr><td colspan='9' class='text-center'>No product found.</td></tr>";
            }
        } catch (error) {
            console.error("Error loading service details:", error);
        }
    });

});
</script>
