<?php
include 'db_connection.php';
$request_type = isset($_POST['request_type']) ? $_POST['request_type'] : '';

if ($request_type == "service_data") {
    $sql = "SELECT * FROM category_service";
    $query = mysqli_query($conn, $sql);

    $str = '<option value="">Select Category</option>';
    while ($row = mysqli_fetch_assoc($query)) {
        $str .= "<option value='{$row['c_id']}'>{$row['c_service']}</option>";
    }
    echo $str;
}

elseif ($request_type == "sub_service_data") {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $sql = "SELECT * FROM sub_category_service WHERE sub_service = '$id'";
    $query = mysqli_query($conn, $sql);

    $str = '<option value="">Select a Sub Service</option>';
    while ($row = mysqli_fetch_assoc($query)) {
        $str .= "<option value='{$row['s_id']}'>{$row['s_name']}</option>";
    }
    echo $str;
}

elseif (isset($_POST['sub_service'])) {
    $sub_service = mysqli_real_escape_string($conn, $_POST['sub_service']);
    $query = "SELECT * FROM all_services WHERE service_number = '$sub_service' ORDER BY a_id DESC";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '<div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead style="background-color: rgb(51, 139, 139);">
                <tr>
                    <th style="color: #eee;">S No.</th>
                    <th style="color: #eee;">Service Name</th>
                    <th style="color: #eee;">Service Price</th>
                    <th style="color: #eee;">Discount %</th>
                    <th style="color: #eee;">Price After Discount</th>
                    <th style="color: #eee;">Image 1</th>
                    <th style="color: #eee;">Image 2</th>
                    <th style="color: #eee;">Image 3</th>
                    <th style="color: #eee;">Actions</th>
                </tr>
            </thead>
            <tbody>';

        $sno = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$sno}</td>
                    <td><img src='{$row['file']}' alt='Service Image' style='width:50px;height:50px;object-fit:cover;'></td>
                    <td>{$row['all_service']}</td>
                    <td>{$row['price']}</td>
                    
                    <td>{$row['discount_percentage']}</td>
                    <td>{$row['price_after_discount']}</td>
                     <td>{$row['description']}</td>
                      <td>{$row['service_number']}</td>
                                            <td>{$row['c_id_category_service']}</td>
                 
                   
                    <td>
                        <div style='display:inline-block;margin-right:20px;'>
                            <a href='edit_services?id={$row['a_id']}'>
                                <i class='fas fa-pencil-alt' style='color:green;'></i>
                            </a> 
                        </div>
                        <div style='display:inline-block;'>
                            <a href='delete_data?id={$row['a_id']}&table=all_services'>
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
