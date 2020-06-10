<?php
include('check.php');
include_once 'include/header.php';
include_once 'include/navbar.php';
// include_once 'adminprofpost.php';
?>



<div class="col-lg-8 col-md-6 col-sm-12 offset-lg-2">
<div class="container-fluid">
  	<div class="card shadow ">
    	<div  class="card-header">
     	 <h5 class="text "> Edit Student Details</h5>

     	 
<?php  include_once 'connection.php';
     	 if (isset($_POST['edit_student_btn'])) {
	# code...
	$edit_student_id=$_POST['edit_student_id'];

	$sql= "SELECT * FROM student_signup WHERE registration_id = '$edit_student_id';";
	$query=mysqli_query($conn,$sql);


	while ($row = mysqli_fetch_assoc($query)) {
		# code...
		?>
	



     	 <form action="studentprofpost.php" method="POST">
     	 	<label>ID
			 <input type="text" value="<?php echo $row['registration_id']; ?>" name="edit_student_id">
     	 	</label>

                
                <div class="form-group">
                  <label>Programme</label>
                  <input value="<?php echo $row['programme']; ?>" class="form-control" type="text" name="edit_student_programme" >
                </div>

                <div class="form-group">
                	<label>Name</label>
                  <input value="<?php echo $row['first_name']; ?>" class="form-control" type="text" name="edit_student_fname" >

                  <input value="<?php echo $row['last_name']; ?>" class="form-control" type="text" name="edit_student_lname" >

                  <input value="<?php echo $row['other_name']; ?>" class="form-control" type="text" name="edit_student_oname" >
                </div>

                <div class="form-group">
                	<label>Email</label>
                  <input value="<?php echo $row['email']; ?>" class="form-control" type="email" name="edit_student_email" >
                </div>

                <div class="form-group">
                  <label>Room No</label>
                  <input value="<?php echo $row['room_number']; ?>" class="form-control" type="text" name="edit_student_room" >
                </div>

                <div class="form-group">
                	<label>Password</label>
                  <input value="<?php echo $row['password']; ?>" class="form-control" type="text" name="edit_student_password" >
                </div>
		<?php

			}
		}
				?>
				<a href="register_student.php"  class="btn btn-danger" >Cancel</a>
        
                <button name="student_update_btn" type="submit" class="btn btn-primary">Update</button>

          </form>
          </div>
	</div>
</div>
</div>
















 <?php
include_once 'include/script.php';
include_once 'include/footer.php';
 ?>