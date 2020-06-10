<?php 
include('check.php');

include 'include/header.php';
include 'include/navbar.php';
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a onclick="printcontent('details_search_bar')" href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
             ><i class="fas fa-download fa-sm text-white-50"></i> Download Student Details</a>

          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Students Registered -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Students Registered</div>

                          <?php 
                            include_once 'connection.php';
                            $sql="SELECT * FROM student_signup;";
                            $query=mysqli_query($conn,$sql);
                              if ($count=mysqli_num_rows($query)) {
                                  
                                  echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>".$count." Registered</div>";            
                              }
                           ?>

                      <!-- <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div> -->
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-graduation-cap fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Occupied Rooms -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Occupied Rooms</div>

                      <?php 
                            include_once 'connection.php';
                            
                            $sql="SELECT DISTINCT registration_id FROM student_signup;";
                            $query_run=mysqli_query($conn,$sql);
                            $count=mysqli_num_rows($query_run);
                            echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>".$count." Rooms</div>";

                           ?>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-bed fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Total numbber of Admins -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Number Of Admin</div>

                      <?php 
                        include_once 'connection.php';

                        $sql="SELECT * FROM admin_signup;";
                        $query=mysqli_query($conn,$sql);
                          if ($count=mysqli_num_rows($query)) {
                            # code...
                        
                              echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>".$count." Admins</div>";
                            
                          }
                      ?>

                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <!-- <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div> -->
                          <i class=""></i>
                        </div>
                        <div class="col">
                         <!--  <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div> -->
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-layer-group fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--Forgot password Requests -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Forgot password Requests</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $_SESSION['count'].' Request(s)'; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



<!-- ............................................... -->
<!-- ......................................... -->
<!-- Content Row -->
          <div class="row">

            <!-- Total number of occupant in the room -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Occupants</div>

                          <?php 

                            include_once 'connection.php';

                            if (isset($_POST['total'])) {
                              # code...
                              $room_number=$_POST['room_number'];
                            

                              $sql="SELECT count(registration_id) FROM student_signup WHERE room_number='$room_number';";
                              $query=mysqli_query($conn,$sql);
                                if ($count=mysqli_num_rows($query)) {
                                    
                                    echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>".$count." Occupants</div>";            
                                }
                            }    
                           ?>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-bed fa-2x text-gray-300"></i>
                    </div>

                    <form action="index.php" method="POST">
                      <div class="input-group">
                        <input name="room_number" type="text" class="form-control bg-light border-0 small" placeholder="Enter Room number ..." >

                        <div class="input-group-append">
                          <button name="total" class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                          </button>
                        </div>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>

            <!-- Post Key Status -->
            <!-- <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Post Key Status</div> -->
                      <!-- <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div> -->
                     





                    <!-- </div>
                    <div class="col-auto">
                      <i class="fas fa-key fa-1x text-gray-300"></i>
                    </div>

                    <form action="studentprofpost.php" method="POST">
                      <div class="input-group">
                        <input name="room_number" type="text" class="form-control bg-light border-0 small" placeholder="Enter room number" required>
                        <div class="input-group-append">
                          <button name="key_status_btn" class="btn btn-success" type="submit">
                            <i class="fas fa-key fa-sm"></i>
                          </button>
                        </div>
                      </div>
                    </form>

                  </div>
                 -->
                   <!-- note -->
                  <!-- <span><small>Update Key status to room</small></span>
                </div>
              </div>
            </div> -->

            <!-- Get Key Status -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Get Key Status</div>

                     <!--  <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                          <i class=""></i>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div> -->
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-key fa-1x text-gray-300"></i>
                    </div>

                      <!-- form and sql fetch from get_key_status.php -->
                    <?php 
                      include_once 'get_key_status.php';
                     ?>
                    
                  </div>
                </div>
              </div>
            </div>

            <!-- Update Reg ID to Key Status -->
            <!-- <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">

                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Update Reg ID to Key Status</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">In</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-bed fa-1x text-gray-300"></i>
                    </div>
                  </div>
                  <form action="index.php" method="POST">
                    <div class="input-group">
                      <input name="" type="text" class="form-control bg-light border-0 small" placeholder="Enter registration number" >
                      <div class="input-group-append">
                        <button name="" class="btn btn-warning" type="submit">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
 -->

<br>


<div class="container-fluid">
 <?php
              //search_btn
    if(isset($_POST['search_btn'])){


      $search_id=$_POST['search_id'];
      if (empty($search_id)) {
        echo "<center>
            <div class='container-fluid'>
            <div class='card '>
            Student ID reqiured for search
            </div>
            </div>
            </center>";
      }else{

        $sql="SELECT * FROM student_signup WHERE registration_id = '$search_id';";
          if($query=mysqli_query($conn,$sql)){
            
            echo "<div id='details_search_bar' class='container-fluid'>";
            echo "<div class='card card-body card-shadow'>";
              echo "<table class='table table-bordered table-hover'>
              <tr>
                <th>image</th>
                <th>Registration No.</th>
                <th>Name</th><th>Room No.</th>
                <th>Phone No.</th>
                <tr>";
            while($row=mysqli_fetch_assoc($query)){
              echo '';
              echo "<tr><td>
                    <img class='img-profile rounded-circle' height='100' width='100' src="
                      .$row['imglink'].">
                    </td><td>"
                    .$row['registration_id'].
                " </td><td>".$row['first_name']." ".$row['last_name']." ".$row['other_name'].
                "</td><td>".$row['room_number'].
                "</td><td>".$row['phone_number']."</td></tr>";
                if($row<=0){
                  
                  echo "<div class='container-fluid'>";
                  echo "<div class='card card-body'>";
                  echo "The ID does not exist in the database..
                  </div>
                  </div>";

                }
            }
            echo "</table>
                  </div>
                  </div>
                  ";
          }else{echo "error!!!...";}
      }
    }

   ?>

</div>
  
           <br>
           <br>
           <br>
           <br>








<!-- fontawsome floating action button -->

<div class="fab-container">
          <div class="fab fab-icon-holder">
              <i class="fas fa-plus"></i>
          </div>

          <ul class="fab-options">
                
                <li>
                  <span class="fab-lable">Mail</span>
                  <div  class="fab-icon-holder">
                    <a href="https://myaccount.google.com/?utm_source=sign_in_no_continue">               
                     <i class="fas fa-envelope"></i>
                     </a>
                  </div>
                </li>

                <li>
                  <span class="fab-lable">Folder</span>
                <div class="fab-icon-holder">
                  <a href="create_table.php">
                  <i class="fas fa-folder"></i>
                  </a>
                </div>
                </li>
              </ul>
        </div>
<!-- ................................................................................ -->
          <!-- Content Row -->

<!-- .................................................................... -->
          <!-- Content Row -->
          
<!-- ................................................................................................ -->

        

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php 
include 'include/script.php';
include 'include/footer.php';
 ?>

      

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->



