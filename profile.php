<?php 
include('check.php');
include 'include/header.php';
?>
<script type="text/javascript">
  	function preimg(argument) {
  		// body...
  		var oFReader= new FileReader();
  		oFReader.readAsDataURL(document.getElementById("imglink").files[0]);

  		oFReader.onload=function(oFREvent){
  			document.getElementById("uploadPreview").src=oFREvent.target.result;
  		}

  	}
  </script>
<?php
include 'include/navbar.php';
 ?>

<div>
	<div class="container-fluid col-lg-8 col-md-6 col-sm-12 offset-lg-2">
		<div class="card shadow">
		<div class="card-header">
			<h4> Admin User Profile</h4>
		</div>
		<div class="card-body">
			<div class="container">
				<?php
                 echo '<img id="uploadPreview" class="img-profile rounded-circle" height="100" width="100" src="'
                 .$_SESSION['img_link'].'">';
                ?>
				<br>
				<input id="imglink" type="file" accept=".png ,.jpg" name="imglink" onchange="preimg();">
			</div>

			<label>Name:</label>
			<?php echo "<h5>".$_SESSION['username']."<h5>"; ?>
			<br>
			<label>Email:</label>
			<?php echo $_SESSION['username']; ?>
			
			<br>
			<label>Office:</label>
			<?php
			 echo "<h6>".$_SESSION['office']."of Atlantic Hall<h6>"; 
			  ?>

			 

			<form action="" method="">
				<fieldset class="text-center">Update Profile</fieldset>
				<!-- <div class="form-group">
					<label>Office:</label>
				<input  value="" class="form-control" type="text" name="office">	
				</div> -->

				<div class="form-group">
					<label>Phone No:</label>
				<input  class="form-control" type="text" name="phone_no">	
				</div>

				<div class="form-group">
					<label>Adress:</label>
				<input  class="form-control" type="text" name="adress">	
				</div>

				<div class="form-group">
					<label>About me</label>
					<textarea  class="form-control">
						
					</textarea>	
				</div>

				<input type="button" value="Update Profile" name="update_profile">

			</form>

		</div>
	</div>
</div>


 <?php 

include 'include/script.php';
include 'include/footer.php';
 ?>