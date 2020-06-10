



    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
<!-- ...................... -->
<br>
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <!-- ICON IN SIDEBAR -->
    <!-- rotate-n-15 -->
        <div class="sidebar-brand-icon ">
          <img src="images/atl.jpg" width="100" height="100" style="border-radius: 100%;">
        </div>
      </a>
<br>
          <!-- class="sidebar-brand-text mx-3" -->
        <div  class="text-white text-center">Atlantic Hall K.T.S <sup><i class="far fa-registered"></i></sup></div>


      <!-- Divider -->
      <hr class="sidebar-divider my-0">



      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>



      <!-- Divider -->
      <hr class="sidebar-divider">



      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>


<!-- ....COMPONENTS.... -->

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-graduation-cap"></i>
          <span>Student</span>
        </a>

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Student Interface</h6>
            <a class="collapse-item" href="register_student.php">Register Student</a>
            <a class="collapse-item" href="all_students.php">Details</a>
          </div>
        </div>
      </li>

      <!-- ..COMPONENT END.... -->

      <!-- Add Admin -->
      <li class="nav-item">
        <a class="nav-link" href="register.php">
          <i class="fas fa-layer-group"></i>
          <span>Add Admin</span>
        </a>

      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Room Query</span>
        </a>

        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Room Query Details:</h6>
            <a class="collapse-item" href="total_occupants.php">Total Occupants</a>
            <a class="collapse-item" href="occupants_details.php">Occupant Details</a>
            <a class="collapse-item" href="key_status_and_updates.php">Key Status and Updates</a>
            <a class="collapse-item" href="multilogin.php">Generate Report</a>
          </div>
        </div>
      </li>





      <!-- Divider -->
      <hr class="sidebar-divider">



<!-- ....ADDONS...... -->

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">

        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder-plus"></i>
          <span>Pages</span>
        </a>

        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">

          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Admin Screens:</h6>
            <a class="collapse-item" href="login.php">Login</a>
            <a class="collapse-item" href="adminsignup.php"> Admin Signup</a>
            <a class="collapse-item" href="forgot_password.php">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Student Screens:</h6>
            <a class="collapse-item" href="studentreg.php">Student Registration</a>
             <h6 class="collapse-header"> Admin Pages:</h6>
            <a class="collapse-item" href="admin_tb.php">First Admin file</a>
            <a class="collapse-item" href="404.php">404 Page</a>
            <a class="collapse-item" href="read_me.php">Read me</a>
            

          </div>

        </div>
      </li>



      <!-- Nav Item - Charts -->

     <!--  <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li> -->


      <!-- Nav Item - Tables -->

      <!-- <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>
 -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">


<!-- SIDE BAR CONTROL -->

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>



    </ul>
    <!-- End of Sidebar -->




  
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="index.php" method="POST">
            <div class="input-group">
              <input name="search_id" type="text" class="form-control bg-light border-0 small" placeholder="Search Student ID..." aria-label="Search" aria-describedby="basic-addon2">

              <div class="input-group-append">
                <button name="search_btn" class="btn btn-primary" type="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>

            </div>
          </form>


          


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search" action="index.php" method="POST">
                  <div class="input-group">
                    <input name="search_id" type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button name="search_btn" class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <?php 
                 $sql="SELECT * FROM notifications WHERE status = 0";
                 $query = mysqli_query($conn,$sql);
                 $count = mysqli_num_rows($query);

                 echo '<span class="badge badge-danger badge-counter">'. $count.'</span>';
                 

                 ?>

                 <?php
                  $_SESSION['count']=$count;
                  ?> 
                <!-- <span class="badge badge-danger badge-counter">
                not yet
                
              </span> -->

              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  
                    <?php
                    include 'connection.php';
                      $sql="SELECT * FROM notifications WHERE status = 0";
                      $query = mysqli_query($conn,$sql);
                     
                      if (mysqli_num_rows($query)>0) {
                        # code...
                        while ( $row = mysqli_fetch_assoc($query)) {
                          # code...
                        echo '<div class="small text-gray-500">'.$row['date'].'</div>';
                        echo '<a class="font-weight-bold" href="notifications.php?id='.$row['id'].'">'.$row['message'].'</a>';
                          
                        }
                      }else{
                        echo " Sorry No Messages";
                      }
                     ?>

                </a>
                <!-- <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a> -->
                
                <a class="dropdown-item text-center small text-gray-500" href="notifications.php">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <!-- account user name -->
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  <?php 
                  echo $_SESSION['username'];
                  ?>
                </span>
                <?php
                 echo '<img class="img-profile rounded-circle" src="'
                 .$_SESSION['img_link'].'">';
                  ?>
                <!-- <img class="img-profile rounded-circle" src="images/hat.png"> -->
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profile.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <!-- <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a> -->
                <a class="dropdown-item" href="calendar.php">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Calendar
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->






  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>








  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to logout</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

          <form action="logout.php" method="POST">
            <button class="btn btn-primary" type="submit" name="logout">Logout</button> 
          </form>
        </div>
      </div>
    </div>
  </div>

