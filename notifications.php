<?php
include('check.php');
include_once 'include/header.php';
include_once 'include/navbar.php';

?>

<?php 
  
  if (isset($_GET['id'])) {
    $get_id=$_GET['id'];
    $sql="UPDATE notifications SET status =1 WHERE id = '$get_id';";
    $query=mysqli_query($conn,$sql);
  }

 ?>






<div class="container-fluid">
  <div class="card shadow ">
    <div  class="card-header">
      <h5 class="text ">Notifications</h5>

<?php
 if (!empty($_SESSION['successn'])) {
    echo "<br><h6 class='text text-center text-white bg-success'>". $_SESSION['successn']."</h6>";
    unset($_SESSION['successn']);
}if (!empty($_SESSION['statusn'])) {
    echo "<br><h6 class='text text-center text-white bg-danger'>".$_SESSION['statusn']."</h6>";
    unset($_SESSION['statusn']);
 }  
 ?>

      <!--  modal Trigger with a button -->
        <!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Add Admin</button>
    </div> -->


    <div class="card card-body">


        <div class="table-responsive">
          <table class="table  table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Message</th>
              <th>Phone No.</th>
              <th>Email</th>
              <th>Date</th>
              <th>Delete</th>
            </tr>
            </thead>
            <tbody>

              <?php include_once 'connection.php';
              
                $sql="SELECT * FROM notifications WHERE status=1;";
                 
                  if ($query=mysqli_query($conn,$sql)) {
                    # code...
                    while ( $row=mysqli_fetch_assoc($query)) {
                      # code...
                      ?>
                   
                      <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                        <td><?php echo $row['phone_number']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['date']; ?></td>

                       
                        <td>
                          <form action="adminprofpost.php" method="POST">
                            <input type="hidden" value="<?php echo $row['id']; ?>" name="notification_delete_id">
                            <button class="btn btn-danger" name="notification_delete_btn"><i class="fas fa-trash-alt"></i></button>
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