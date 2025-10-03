<?php
include 'db_connection.php';
$request_type = isset($_POST['request_type']) ? $_POST['request_type'] : '';

if ($request_type == "service_data") {
    $sql = "SELECT * FROM product_category";
    $query = mysqli_query($conn, $sql);

    $str = '<option value="">Select Category</option>';
    while ($row = mysqli_fetch_assoc($query)) {
        $str .= "<option value='{$row['c_id']}'>{$row['c_service']}</option>";
    }
    echo $str;
}

elseif ($request_type == "sub_service_data") {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $sql = "SELECT * FROM product_sub_category WHERE sub_service = '$id'";
    $query = mysqli_query($conn, $sql);

    $str = '<option value="">Select a Sub Service</option>';
    while ($row = mysqli_fetch_assoc($query)) {
        $str .= "<option value='{$row['s_id']}'>{$row['s_name']}</option>";
    }
    echo $str;
}
elseif (isset($_POST['sub_service'])) {
    $sub_service = mysqli_real_escape_string($conn, $_POST['sub_service']);
    $query = "SELECT * FROM all_products WHERE s_id = '$sub_service' ORDER BY id DESC";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '<div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead style="background-color: rgb(51, 139, 139);">
                <tr>
                   
                </tr>
            </thead>
            <tbody>';

        $sno = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$sno}</td>
                    <td><img src='{$row['file']}' alt='Service Image' style='width:50px;height:50px;object-fit:cover;'></td>
                    <td>{$row['product']}</td>
                    <td>{$row['price']}</td>
                    
                    <td>{$row['discount_percentage']}</td>
                    <td>{$row['offer_price']}</td>
                     <td>{$row['description']}</td>
                      <td>{$row['c_id']}</td>
                                            <td>{$row['s_id']}</td>
                 
                   
                    <td>
                        <div style='display:inline-block;margin-right:20px;'>
                            <a href='edit_services?id={$row['id']}'>
                                <i class='fas fa-pencil-alt' style='color:green;'></i>
                            </a> 
                        </div>
                        <div style='display:inline-block;'>
                            <a href='delete_data?id={$row['id']}&table=all_products'>
                                <i class='fa fa-trash' style='color:red;'></i>
                            </a>
                        </div>
                    </td>
                </tr>";
            $sno++;
        }

        echo '</tbody></table></div>';
    } else {
        echo "<p>No services found.</p>";
    }
}
?>
