<?php 
include 'db_connection.php'; 
include 'header.php'; 
include 'sidebar.php'; 
include 'top_navbar.php'; 
?>
<div class="content">
   <form action="" method="POST">
     <div class="col-auto">
              <h2 class="mb-4"> Slider Section</h2>
              <!-- <h5  style="color: rgba(95, 97, 230);font-size:20px;"> Change slider Images </h5> -->
            </div>
    <div class="col-12 col-xl-8">
              <h4 class="mb-3">Content</h4>
              <input class="form-control mb-3" type="text" name="product_title" placeholder="Enter content of the slider"  required>
              <div class="mb-6">
                <h4 class="mb-3">Select Slider</h4>
                <input class="form-control mb-1" type="file" name="product_title" placeholder="Write title here..."  required>
              </div>
               <h4 class="mb-3">Button</h4>
                   <input class="form-control mb-3" type="text" name="button_name" placeholder="Button Name "  required>
                     <h4 class="mb-3">Button Link</h4>
                   <input class="form-control mb-3" type="text" name="Button_link" placeholder="Button Name "  required>
</div>
 <button class="btn custom-btn mb-2 mb-sm-0" type="submit">Upload</button>
</form>


<?php
include 'footer.php';
?>

</div>