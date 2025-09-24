<?php 
include 'db_connection.php'; 
include 'header.php'; 
include 'sidebar.php'; 
include 'top_navbar.php'; 
?>


<div class="content">
     <form action="" method="POST">
     <div class="col-auto">
              <h2 class="mb-4"> About Us</h2>
            
            </div>
    <div class="col-12 col-xl-8">
              <h4 class="mb-3">Heading</h4>
              <input class="form-control mb-5" type="text" name="heading" placeholder="Write title here..."  required>
              <div class="mb-6">
                <h4 class="mb-3">Page Description</h4>
                <input class="form-control mb-5" type="textarea" name="page_description" placeholder="Write Page Description"  required>
              </div>
</div>
 <button class="btn custom-btn mb-2 mb-sm-0" type="submit">Update</button>
   </form>
<?php
include 'footer.php';
?>

</div>