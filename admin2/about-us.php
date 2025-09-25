<?php 
include 'db_connection.php'; 
include 'header.php'; 
include 'sidebar.php'; 
include 'top_navbar.php'; 


if(isset($_POST['submit']))
{
$heading = mysqli_real_escape_string($conn, $_POST['heading']);
 $page_description = mysqli_real_escape_string($conn, $_POST['page_description']);

 $query = "UPDATE tb_about set page_title ='$heading', page_description ='$page_description' WHERE id= 1";
if (mysqli_query($conn, $query)) {
    echo "<script> alert('Record updated successfully') </script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
}

?>

<div class="content">
  
     <form action="" method="POST">
     <div class="col-auto">
              <h2 class="mb-4"> About Us</h2>
            
            </div>
    <div class="col-12 col-xl-8">
              <h4 class="mb-3">Heading</h4>
              <input class="form-control mb-5" type="text" name="heading" placeholder="Write heading here..."  required>
              <div class="mb-6">
                <h4 class="mb-3">Page Description</h4>
                <textarea class="form-control mb-5"  rows="7" name="page_description" placeholder="Write Page Description"  required> </textarea>
              </div>
</div>
 <button class="btn custom-btn mb-2 mb-sm-0" name="submit" type="submit">Update</button>
   </form>
<?php
include 'footer.php';
?>

</div>