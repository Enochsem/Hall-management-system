<?php
include('check.php');
include_once 'include/header.php';
include_once 'include/navbar.php';
// include_once 'adminprofpost.php';
?>




<div class="container-fluid">
  	<div class="card shadow ">
    	<div  class="card-header">
     	 <h5 class="text text-center "><b> Edit Admin Profile</b></h5>

     	 
<?php  include_once 'connection.php';
     	 if (isset($_POST['edit_btn'])) {
	# code...
	$edit_id=$_POST['edit_id'];

	$sql= "SELECT * FROM admin_signup WHERE ID = '$edit_id';";
	$query=mysqli_query($conn,$sql);


	while ($row=mysqli_fetch_assoc($query)) {
		# code...
		?>
	


     	 <form action="adminprofpost.php" method="POST">
     	 	<label>ID
			 <input type="text" value="<?php echo $row['ID']; ?>" name="edit_id">
     	 	</label>


                <div class="form-group">
                	<label>Username</label>
                  <input value="<?php echo $row['username']; ?>" class="form-control" type="text" name="edit_username" >
                </div>

                <div class="form-group">
                  <label>Office</label>
                  <input value="<?php echo $row['office']; ?>" class="form-control" type="text" name="edit_office" >
                </div>

                <div class="form-group">
                	<label>Email</label>
                  <input value="<?php echo $row['email']; ?>" class="form-control" type="email" name="edit_email" >
                </div>

                <div class="form-group">
                	<label>Password</label>
                  <input value="<?php echo $row['password']; ?>" class="form-control" type="text" name="edit_pswd" >
                </div>
		<?php

			}
		}
				?>
				<a href="register.php"  class="btn btn-danger" >Cancel</a>
        
                <button name="update" type="submit" class="btn btn-primary">Update</button>

          </form>
          </div>
	</div>
</div>

















 <?php
include_once 'include/script.php';
include_once 'include/footer.php';
 ?>