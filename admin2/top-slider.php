<?php 
include 'db_connection.php'; 
include 'header.php'; 
include 'sidebar.php'; 
include 'top_navbar.php'; 
?>
<div class="content">
     <div class="col-auto">
              <h2 class="mb-2"> Slider Section</h2>
              <h5  style="color: rgba(95, 97, 230);font-size:20px;"> Change slider Images </h5>
            </div>
    <div class="col-12 col-xl-8">
              <h4 class="mb-3">Content</h4>
              <input class="form-control mb-5" type="text" name="product_title" placeholder="Write title here..."  required>
              <div class="mb-6">
                <h4 class="mb-3">Select Slider</h4>
                <input class="form-control mb-5" type="text" name="product_title" placeholder="Write title here..."  required>
              </div>
</div>



<?php
include 'footer.php';
?>

</div>