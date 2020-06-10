<?php
include('check.php');
include_once 'include/header.php';
include_once 'include/navbar.php';
?>




   
<div class="container">
  <div class="row">

   <div class="col">
       <!-- Collapsable Card -->
    <div class="card shadow mb-4">
      <!-- Card Header - Accordion -->
      <a href="#collapseCard1" class="d-block card-header py-3 bg-primary" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCard1">
        <h6 class="m-0 font-weight-bold text-white text-center">Registration and key Outs</h6>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="collapseCard1">
        <div class="card-body">
          
          <?php
           if (!empty($_SESSION['success_reg_key'])) {
              echo "<br><h6 class='text text-center text-white bg-success'>". $_SESSION['success_reg_key']."</h6>";
              unset($_SESSION['success_reg_key']);
          }if (!empty($_SESSION['status_reg_key'])) {
              echo "<br><h6 class='text text-center text-white bg-info'>".$_SESSION['status_reg_key']."</h6>";
              unset($_SESSION['status_reg_key']);
           }  
          ?>

          <form action="studentprofpost.php" method="POST">
            <div class="input-group">
              <input name="room_number" type="text" class="form-control bg-light  small" placeholder="Enter room number" required>

              <input name="registration_id" type="text" class="form-control bg-light  small" placeholder="Enter registration number" required>

              <div class="input-group-append">
                <button name="reg_and_keyout_btn" class="btn btn-primary" type="submit">
                  <i class="fas fa-key fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <span><small>To be used only on admission of new students into the hall</small></span>
        </div>
      </div>
    </div>
   </div>

<div class="col">
       <!-- Collapsable Card -->
    <div class="card shadow mb-4">
      <!-- Card Header - Accordion -->
      <a href="#collapseCard2" class="d-block card-header py-3 bg-success" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCard2">
        <h6 class="m-0 font-weight-bold text-white text-center">Key in and out Status</h6>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="collapseCard2">
        <div class="card-body">
          
<?php
include 'connection.php';

//key status  

if(isset($_POST['keystatus_btn'])){

  $room_number=$_POST['room_number'];
  $registration_id=$_POST['registration_id'];
  $date=date('y-m-d h:i:s');

  $sql="SELECT * FROM track_k WHERE room_number='$room_number';";
  $query=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($query);

  $ids=$row['id'];
  $status=$row['key_status'];

  if ($row) {
    
    if ($status <= 0) {
      # code...
      $sql2="UPDATE track_k SET key_status = 1, registration_id = '$registration_id' WHERE id='$ids';";
      $query2=mysqli_query($conn,$sql2);

      echo"<div class='text text-center text-success'>Key In success</div>";

    }else{
      $sql3="UPDATE track_k SET key_status = 0, registration_id = '$registration_id' WHERE id='$ids';";
      $query3=mysqli_query($conn,$sql3);

      echo"<div class='text text-center text-success'>Key Out success</div>";

    }

  }else{
      echo"<div class='text text-center text-info'>Room key status not available</div>";      
  }

}

?>


<form action="key_status_and_updates.php" method="POST">
  <div class="input-group">
    <input name="room_number" type="text" class="form-control bg-light  small" placeholder="Enter room number" required>

    <input name="registration_id" type="text" class="form-control bg-light  small" placeholder="Enter registration number" required>

    <div class="input-group-append">
      <button name="keystatus_btn" class="btn btn-success" type="submit">
        <i class="fas fa-key fa-sm"></i>
      </button>
    </div>
  </div>
</form>

      
        </div>
      </div>
    </div>
   </div>

  </div>


  <div class="row">

   <div class="col">
       <!-- Collapsable Card -->
    <div class="card shadow mb-4">
      <!-- Card Header - Accordion -->
      <a href="#collapseCard3" class="d-block card-header py-3 bg-info" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCard3">
        <h6 class="m-0 font-weight-bold text-white text-center">Get Key Status</h6>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="collapseCard3">
        <div class="card-body">
          
          <?php 
            include_once 'get_key_status.php';
          ?>

        </div>
      </div>
    </div>
   </div>

<div class="col">
       <!-- Collapsable Card -->
    <div class="card shadow mb-4">
      <!-- Card Header - Accordion -->
      <a href="#collapseCard4" class="d-block card-header py-3 bg-warning" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCard4">
        <h6 class="m-0 font-weight-bold text-white text-center">Key Status details</h6>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="collapseCard4">
        <div class="card-body">

          <form action=".php" method="POST">
            <div class="input-group">
              <input name="" type="text" class="form-control bg-light border-0 small" placeholder="Enter registration number" >
              <div class="input-group-append">
                <button name="" class="btn btn-warning" type="submit">
                  <i class="fas fa-key fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
   </div>

  </div>

</div>
  


<br>
<br>
<br>
<br>

<br>
<br>



<?php
include 'registration_form.php';
include_once 'include/script.php';
include_once 'include/footer.php';
 ?>


     <!--  <?php 
        
          // if (isset($_POST['total_btn'])) {
          //         # code...
          //         $room_number=$_POST['room_number'];
                

          //         $sql="SELECT * FROM student_signup WHERE room_number='$room_number';";
          //         $query=mysqli_query($conn,$sql);
          //           if ($count=mysqli_num_rows($query)) {
                        
          //               echo "<center>
          //                      <br><div class='card card-body shadow p-0'>
          //                      <h4>"
          //                      .$count.
          //                      " Occupants</h4>
          //                      </div>
          //                     </center>";            
          //           }
          //       }    

         ?> -->