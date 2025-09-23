<?php 
include 'db_connection.php'; 
include 'header.php'; 
include 'sidebar.php'; 
include 'top_navbar.php'; 
?>
<div class="content">
     
  <h2 class="mb-4">Enquiry Messages</h2>
  <div id="tableExample2" data-list='{"valueNames":["name","email","age"],"page":5,"pagination":{"innerWindow":2,"left":1,"right":1}}'>
  <div class="table-responsive mx-n4  mx-lg-n6  bg-body-emphasis border-top border-bottom border-translucent position-relative mt-3" >
  <table class="table table-hover table-striped table-bordered table-large align-middle text-center shadow-lg rounded-3 overflow-hidden fs-9 mb-0">
  <thead class="table-primary text-dark">
                          
                              <tr>
                                <th class="sort border-top border-translucent ps-3" data-sort="name">S no</th>
                                <th class="sort border-top" data-sort="email">Name</th>
                                <th class="sort border-top" data-sort="age">Email</th>
                                   <th class="sort border-top" data-sort="age">Mobile</th>
                                    <th class="sort border-top" data-sort="age">Message</th>
                                        <th class="sort border-top" data-sort="age">Date and Time</th>
                                         <th class="sort border-top" data-sort="age">Status</th>
                                           <th class="sort border-top" data-sort="age">Select Status Enquiry</th>
                             
                              </tr>
                            </thead>
                            <tbody class="list">
                      <?php
$sql = "SELECT * FROM enquiry_message order BY id DESC";
$result = mysqli_query($conn, $sql);
$count = 0;
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $count++;
        ?>
        <tr>
            <th scope='row'><?php echo $count; ?></th>
            <td ><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['message']; ?></td>
          
  <td><?php echo date("d-m-Y h:i", strtotime($row['created_at'])); ?></td>
 <td id="status-text-<?php echo $row['id']; ?>"><?php echo $row['status']; ?></td>
            <!-- <td> 
  <a href='/beauty_parlour_management_system/admin2/admin_edit_customer.php?id=<?php echo $row["id"]; ?>'>

    <button style='background-color: rgb(23, 162, 184); color: white; border: none; padding: 5px 10px; '>EDIT</button>
  </a> 
  <a href='/beauty_parlour_management_system/admin2/delete_appointment.php?id=<?php echo $row["id"]; ?>'>
    <button style='background-color: #f44336; color: white; border: none; padding: 5px 10px; '>DELETE</button>
  </a> 
</td> -->
<td>
  <select data-id="<?php echo $row['id']; ?>" class="form-control status-dropdown">
    <option value="Pending" <?php echo ($row['status'] == 'Pending') ? 'selected' : ''; ?>>Pending</option>
    <option value="Completed" <?php echo ($row['status'] == 'Completed') ? 'selected' : ''; ?>>Completed</option>
    <option value="Rejected" <?php echo ($row['status'] == 'Rejected') ? 'selected' : ''; ?>>Rejected</option>
  </select>
</td>
        </tr>
        <?php
    }
} 
 else {
    echo "No Enquiry message found";
}
?>
                       
                            </tbody>
                          </table>
                        </div>
                        <div class="d-flex justify-content-between mt-3"><span class="d-none d-sm-inline-block" data-list-info="data-list-info">6 to 10 <span class="text-body-tertiary"> Items of </span>43</span>
                          <div class="d-flex"><button class="page-link" data-list-pagination="prev"><svg class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"></path></svg><!-- <span class="fas fa-chevron-left"></span> Font Awesome fontawesome.com --></button>
                            <ul class="mb-0 pagination"><li><button class="page" type="button" data-i="1" data-page="5">1</button></li><li class="active"><button class="page" type="button" data-i="2" data-page="5">2</button></li><li><button class="page" type="button" data-i="3" data-page="5">3</button></li><li><button class="page" type="button" data-i="4" data-page="5">4</button></li><li class="disabled"><button class="page" type="button">...</button></li></ul><button class="page-link pe-0" data-list-pagination="next"><svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path></svg><!-- <span class="fas fa-chevron-right"></span> Font Awesome fontawesome.com --></button>
                          </div>
                        </div>
                      </div>
                         <?php include 'footer.php'; ?>
                            </div>
                          
                              </div>
<script>
document.querySelectorAll('.status-dropdown').forEach(function(select) {
  select.addEventListener('change', function() {
    const id = this.getAttribute('data-id');
    const status = this.value;

    fetch('update_status.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: 'id=' + id + '&status=' + status
    })
    .then(response => response.text())
    .then(data => {
      if (data.trim() === 'success') {
        alert("Status updated successfully!");
           document.getElementById('status-text-' + id).textContent = status;
      } else {
        alert("Error updating status.");
      }
    });
  });
});
</script>                    
   