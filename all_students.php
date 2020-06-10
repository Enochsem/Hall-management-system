<?php
include('check.php');
include_once 'include/header.php';
include_once 'include/navbar.php';

?>



<div class="container-fluid">
  <div class="card shadow ">
    <div  class="card-header">
      <h5 class="text "> All Student Details</h5>
    </div>

    <div class="card card-body">

        <div id="reg_students" class="table-responsive">
          <table class="table  table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>image</th>
              <th>Reg ID</th>
              <th>Username</th>
              <th>Email</th>
              <th>Room No</th>
              <!-- <th>Password</th>
              <th>Edit</th>
              <th>Delete</th> -->
            </tr>
            </thead>
            <tbody>

              <?php include_once 'connection.php';
              
                $sql="SELECT * FROM student_signup;";
                 
                  if ($query=mysqli_query($conn,$sql)) {
                    # code...
                    while ( $row=mysqli_fetch_assoc($query)) {
                      # code...
                      ?>
                   
                      <tr>

                        <td>
                          <?php
                         echo '<img class="img-profile rounded-circle" height="80" width="80" src="'
                         .$row['imglink'].'">';
                          ?>
                          </td>
                        <td><?php echo $row['registration_id']; ?></td>
                        <td><?php echo $row['first_name'].' '.$row['last_name'].' '.$row['other_name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['room_number']; ?></td>

                      </tr>

            <?php 
                   }
                  }else{echo "No records";}
      
             ?>
          </tbody>
          </table>
        </div>
          <button onclick="printcontent('reg_students')" class="btn btn-facebook btn-block">Print me</button>
      </div>

      </div>
  </div> 






<br>

<?php
include_once 'include/script.php';
include_once 'include/footer.php';
 ?>