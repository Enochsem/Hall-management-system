<?php
include('check.php');
include_once 'include/header.php';
include_once 'include/navbar.php';
// include_once 'adminprofpost.php';
?>





<div class="container-fluid">
  <div class="card shadow ">
    <div  class="card-header">
      <h5 class="text ">Room Occupants Detailse</h5>

       <form action="occupants_details.php" method="POST">
             <div class="form-group">
                  <input class="form-control" type="text" name="room_number" placeholder=" Enter room number">
                </div>
                   <button name="find" type="submit" class="btn btn-primary">Find</button>
          </form>
      
    </div>

    <div class="card card-body">

        <div id="reg_students" class="table-responsive">
          <table class="table  table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Image</th>
              <th>Reg ID</th>
              <th>Programme</th>
              <th>Name</th>
              <th>Email</th>
              <th>Room No</th>
              <th>Phone No</th>
            </tr>
            </thead>
            <tbody>

              <?php include_once 'connection.php';
              
              if (isset($_POST['find'])) {
                # code...
                
                $room_number=$_POST['room_number'];

                $sql="SELECT * FROM student_signup WHERE room_number='$room_number';";
                 
                  if ($query=mysqli_query($conn,$sql)) {
                    # code...
                    while ( $row=mysqli_fetch_assoc($query)) {
                      # code...
                      ?>
                   
                      <tr>
                        <td>
                         <?php
                         echo '<img class="img-profile rounded-circle" height="100" width="100" src="'
                         .$row['imglink'].'">';
                          ?>
                        </td>
                        <td><?php echo $row['registration_id']; ?></td>
                        <td><?php echo $row['programme']; ?></td>
                        <td><?php echo $row['first_name'].' '.$row['last_name'].' '.$row['other_name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['room_number']; ?></td>
                        <td><?php echo $row['phone_number']; ?></td>
                      </tr>

            <?php 
                   }
                  }else{echo "No records";}
                }  
             ?>
          </tbody>
          </table>
        </div>
          <button onclick="printcontent('reg_students')" class="btn btn-facebook btn-block">Print me</button>
      </div>

      </div>
  </div> 




<?php
include_once 'include/script.php';
include_once 'include/footer.php';
 ?>