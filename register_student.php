<?php
include('check.php');
include_once 'include/header.php';
include_once 'include/navbar.php';
// include_once 'adminprofpost.php';
?>



<?php 
  include 'registration_form.php';
 ?>

<div class="container-fluid">
  <div class="card shadow ">
    <div  class="card-header">
      <h5 class="text text-center "><b>STUDENT DETAILS</b></h5>

<?php
 if (!empty($_SESSION['success'])) {
    echo "<br><h6 class='text text-center text-white bg-success'>". $_SESSION['success']."</h6>";
    unset($_SESSION['success']);
}if (!empty($_SESSION['status'])) {
    echo "<br><h6 class='text text-center text-white bg-danger'>".$_SESSION['status']."</h6>";
    unset($_SESSION['status']);
 }  ?> 

      <!--  modal Trigger with a button -->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Add student</button>
    </div>


    <div class="card card-body">


        <div id="reg_students" class="table-responsive">
          <table class="table  table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Reg ID</th>
              <th>Programme</th>
              <th>Name</th>
              <th>Email</th>
              <th>Room No</th>
              <th>Password</th>
              <th>Edit</th>
              <th>Delete</th>
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
                        <td><?php echo $row['registration_id']; ?></td>
                        <td><?php echo $row['programme']; ?></td>
                        <td><?php echo $row['first_name'].' '.$row['last_name'].' '.$row['other_name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['room_number']; ?></td>
                        <td><?php echo $row['password']; ?></td>

                        <td>
                          
                          <form action="student_register_edit.php" method="POST">
                            <input type="hidden" value="<?php echo $row['registration_id']; ?>" name="edit_student_id">
                            <button class="btn btn-primary" name="edit_student_btn"><i class="fas fa-user-edit"></i></button>
                          </form>

                        </td>

                        <td>
                          <form action="studentprofpost.php" method="POST">
                            <input type="hidden" value="<?php echo $row['registration_id']; ?>" name="delete_id">
                            <button class="btn btn-danger" name="delete_student_btn">
                              <i class="fas fa-trash-alt"></i></button>
                          </form>
                        </td>
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





<?php
include_once 'include/script.php';
include_once 'include/footer.php';
 ?>