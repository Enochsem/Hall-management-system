<?php
include('check.php');
include_once 'include/header.php';
include_once 'include/navbar.php';
// include_once 'adminprofpost.php';
?>





<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <h4 class="modal-title-center">Add Admin Profile</h4>
      </div>

        <div>
          <form action="adminprofpost.php" method="POST">
            <div class="modal-body">

                <div class="form-group">
                  <input class="form-control" type="text" name="username" placeholder=" Enter user name">
                </div>

                <div class="form-group">
                  <input name="office" type="text" class="form-control form-control-user" placeholder="Enter office title..">
                </div>

                <div class="form-group">
                  <input class="form-control" type="email" name="email" placeholder=" Enter Email">
                </div>

                <div class="form-group">
                  <input class="form-control" type="password" name="pswd" placeholder=" Enter password">
                </div>

                <div class="form-group">
                  <input class="form-control" type="password" name="cpswd" placeholder="Confirm password">
                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
                   <button name="addadmin" type="submit" class="btn btn-primary">Add</button>
              </div>

          </form>
        </div>   

    </div>

  </div>
</div>







<div class="container-fluid">
  <div class="card shadow ">
    <div  class="card-header">
      <h5 class="text ">Admin Profile</h5>

<?php
 if (!empty($_SESSION['success'])) {
    echo "<br><h6 class='text text-center text-white bg-success'>". $_SESSION['success']."</h6>";
    unset($_SESSION['success']);
}if (!empty($_SESSION['status'])) {
    echo "<br><h6 class='text text-center text-white bg-danger'>".$_SESSION['status']."</h6>";
    unset($_SESSION['status']);
 }  ?> 

      <!--  modal Trigger with a button -->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Add Admin</button>
    </div>


    <div class="card card-body">


        <div class="table-responsive">
          <table class="table  table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Registration ID</th>
              <th>Username</th>
              <th>office</th>
              <th>Email</th>
              <th>Password</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            </thead>
            <tbody>

              <?php include_once 'connection.php';
              
                $sql="SELECT * FROM admin_signup;";
                 
                  if ($query=mysqli_query($conn,$sql)) {
                    # code...
                    while ( $row=mysqli_fetch_assoc($query)) {
                      # code...
                      ?>
                   
                      <tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['office']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['password']; ?></td>

                        <td>
                          <form action="register_edit.php" method="POST">
                            <input type="hidden" value="<?php echo $row['ID']; ?>" name="edit_id">
                            <button class="btn btn-primary" name="edit_btn"><i class="fas fa-user-edit"></i></button>
                          </form>

                        </td>

                        <td>
                          <form action="adminprofpost.php" method="POST">
                            <input type="hidden" value="<?php echo $row['id']; ?>" name="delete_id">
                            <button class="btn btn-danger" name="delete_btn"><i class="fas fa-trash-alt"></i></button>
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

      </div>

      </div>
  </div> 






<br>

<?php
include_once 'include/script.php';
include_once 'include/footer.php';
 ?>