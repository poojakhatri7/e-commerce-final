<?php 
include 'db_connection.php'; 
include 'header.php'; 
include 'sidebar.php'; 
include 'top_navbar.php'; 

if(isset($_POST['submit']))
{
$c_product = mysqli_real_escape_string($conn, $_POST['c_product']);
$c_description = mysqli_real_escape_string($conn, $_POST['c_description']);
$photo = $_FILES["image"]["name"];
$photo2 = $_FILES["image"]["tmp_name"];
$uploadPath = "upload-images/" . $photo;
move_uploaded_file($photo2, $uploadPath);

 $sql = "INSERT INTO category_service (c_service,description,file) values ('$c_product','$c_description','$uploadPath')";
if (mysqli_query($conn, $sql)) {
    echo "<script> alert('Record inserted successfully') </script>";
     echo "<script>window.location.href='" . $_SERVER['PHP_SELF'] . "';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
}
if (isset($_POST['submit1'])) {
   $photo = $_FILES["sub_image"]["name"];
  $photo2 = $_FILES["sub_image"]["tmp_name"];
  $uploadPath = "upload-images/" . $photo;
    $s_name = $_POST['sub_category'];
    $s_description = $_POST['sub_category_description'];
    $c_id = $_POST['c_id']; // Selected category
    // $sub_image = $_POST['sub_image']; // Selected category
      move_uploaded_file($photo2, $uploadPath);
 $check_query1 = "SELECT * FROM sub_category_service WHERE s_name = '$s_name'";
 $result = mysqli_query($conn, $check_query1);
 if (mysqli_num_rows($result) > 0) {
     // Category already exists
    //  $error_message = "Category already exists!";
    header("Location: " . $_SERVER['PHP_SELF'] . "?error=1");
    exit();
 }
 else {
 
    $query = "INSERT INTO sub_category_service (s_name, description, sub_service , file ) VALUES ('$s_name', '$s_description', '$c_id','$uploadPath')";
    if(mysqli_query($conn, $query));
    {
        header("Location: " . $_SERVER['PHP_SELF'] . "?success=1");
        exit();
    }
}
}
?>
<div class="content">
     <form action="" method="POST" enctype="multipart/form-data">
     <div class="col-auto">
              <h2 class="mb-4">Add Category and Sub-Category</h2>
            </div>
    <div class="col-12 col-xl-8">
              <h4 class="mb-3">Add Category</h4>
              <input class="form-control mb-3" type="text" name="c_product" placeholder="Category name"  required>
              <div class="mb-6">
                <h4 class="mb-3">Description</h4>
                <input class="form-control mb-3" type="text" placeholder="description" name="c_description" required>
                 <div class="mb-6">
                    <h4 class="mb-3">Image</h4>
                      <input class="form-control mb-1" type="file"  name="image" required>
              </div>
</div>
 <button class="btn custom-btn mb-1 mb-sm-0" name="submit" type="submit">Add</button>
   </form>
   <hr style="height:1px;border-width:0;color:gray;background-color:gray">

   <!-- Add sub-category form-->
    <form action="" method="POST" enctype="multipart/form-data">
    <?php 
    $category_result = mysqli_query($conn, "SELECT * FROM category_service"); 
    ?>
    <div class="col-12 col-xl-8">
       <h4 class="mb-3">Select</h4>
        <select name="c_id" id="c_id" class="form-control" required>
                <option value="">Select Category</option>
                   <?php while ($row = mysqli_fetch_assoc($category_result)) { ?>
                    <option value="<?= $row['c_id'] ?>"><?= $row['c_service'] ?></option>
                <?php } ?>
            </select>
              <h4 class="mb-3 mt-3">Add Sub Category</h4>
              <input class="form-control mb-3" type="text" name="sub_category" placeholder="Sub-Category"  required>
              <div class="mb-6">
                <h4 class="mb-3">Description</h4>
                <input class="form-control mb-3" type="text" placeholder="Description" name="sub_category_description" required>
                 <div class="mb-6">
                    <h4 class="mb-3">Image</h4>
                      <input class="form-control mb-1" type="file" placeholder="Description" name="sub_image" required>
              </div>
</div>
 <button class="btn custom-btn mb-3" name="submit1" type="submit">Add</button>
   </form>
<?php
include 'footer.php';
?>

</div>