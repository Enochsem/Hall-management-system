<?php
include('check.php');
include_once 'include/header.php';
include_once 'include/navbar.php';
// include_once 'adminprofpost.php';
?>



<div class="container">
  <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary text-center">Total Ocupants</h6>
      <div class="dropdown no-arrow">
        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
          <div class="dropdown-header">More Queries:</div>
          <a class="dropdown-item" data-toggle="modal" data-target="#myModal" href="#">Add Student</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Not assigned</a>
        </div>
      </div>
    </div>
    <!-- Card Body -->
    <div class="card-body">

         <center>
          <p>This input will return the total number of student in a room</p>

          <form action="total_occupants.php" method="POST">
                      <div class="input-group">
                        <input name="room_number" type="text" class="form-control bg-light border-0 small" placeholder="Enter room number" required>
                        <div class="input-group-append">
                          <button name="total_btn" class="btn btn-success" type="submit">
                            <i class="fas fa-key fa-sm"></i>
                          </button>
                        </div>
                      </div>
                    </form>
         </center>


        <?php 
        
          if (isset($_POST['total_btn'])) {
                  # code...
                  $room_number=$_POST['room_number'];
                

                  $sql="SELECT * FROM student_signup WHERE room_number='$room_number';";
                  $query=mysqli_query($conn,$sql);
                    if ($count=mysqli_num_rows($query)) {
                         
                        echo "<center>
                               <br><div class='card card-body shadow p-0'>
                               <h4 class='text text-primary'>"
                               .$count.
                               " Occupants out of 5</h4>
                               </div>
                              </center>";
                                   
                    }else{
                      echo "<center>
                               <br><div class='card card-body shadow p-0'>
                               <h4 class=' text text-warning'>
                               Empty Room
                               </h4>
                               </div>
                              </center>";
                    }
                }    

         ?>
<label for="student">students</label> 
<meter class="bg-info" id="student" value="<?php echo $count; ?>" min="0" max="5"></meter>
    </div>
  </div>

</div>





 <?php
include 'registration_form.php';
include_once 'include/script.php';
include_once 'include/footer.php';
 ?>