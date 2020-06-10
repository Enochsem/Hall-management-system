<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sign up</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">


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

</head>
<br><br><br>

<body class="bg-gradient-primary ">




<div class="col-lg-8 col-md-6 col-sm-12 offset-lg-2">
	<div class="card card-body ">
		<br>
		<h2 class="text text-center">Sign Up</h2>
		<center>
			<div class="img">
			<img src="images/atl.jpg" height="80" width="80">
			</div>
		</center>
		<hr>
		



		<form class="user" action="studentprofpost.php" method="POST" enctype="multipart/form-data">
			<div class="container">
				<img id="uploadPreview" src="images/hat.png" height="100" width="100"><br>
				<input id="imglink" type="file" accept=".png ,.jpg" name="imglink" onchange="preimg();">
			</div>

			<br>

			<div class="" > 
				<label>Registration number</label><br>
				<input type="text" placeholder="UCC/DSC/20/0000" name="regnumber" required autofocus>
			</div>
			
	<br>
			<label>Name</label>
			<div class="from-group row">
				<div class="from-group col">
					<input class="form-control" type="text" placeholder="First Name" name="fname" required>
				</div>
				<div class="from-group col">
					<input class="form-control" type="text" placeholder="Surname" name="lname" required>
				</div>
				<div class="from-group col">
					<input class="form-control" type="text" placeholder="Other Names" name="oname">
				</div>
<!-- rowbreak -->
		</div>
	
			<div class="from-group row">
			<div class="from-group col">
				<label>E-mail</label>
				<input class="form-control" type="text" name="email" required autocomplete="off">	
			</div>
			

			<div class="from-group col">
				<label>Programe</label>
				<select class="form-control"  name="programme" required>
					<option selected hidden value="">Choose a Programme</option>
					<option value="">Faculty of Humanity and Social Science Education</option>
					<option value="">B.Ed.Arts</option>
					<option value="">B.Ed.Accounting</option>
					<option value="">B.Ed.Management</option>
					<option value="">B.Ed.Social Science</option>
					<option value="">B.Ed.Social Studies</option>

					<option value="">Faculty of Science and Technology Education</option>
					<option value="">B.Ed.Science</option>
					<option value="">B.Ed.Mathematics</option>
					<option value="">B.Ed.Home Economics</option>
					<option value="BEd.Computer Science">BEd.Computer Science</option>
					<option value="">B.Ed.Health Science</option>
					<option value="">B.Ed.Health,Physical Education & Recreation</option>

					<option value="">Faculty of Educational Foundation</option>
					<option value="">B.Ed.Basic Education</option>
					<option value="">B.Ed.Early Childhood Education</option>
					<option value="">B.Sc.Psychology</option>
					<option value="">B.Ed.Primary Education</option>
					<option value="">B.Ed.Junior High School Education</option>
					<option value="">Deploma in Basic Education</option>
					<option value="">Certificate in Basic Education</option>
					<option value="">Deploma in Early Childhood</option>
					<option value="">Certificate in Early Childhood Education</option>

					<option value="">Faculty of Arts</option>
					<option value="">B.A.African Studies</option>
					<option value="">B.A.Varied Fields</option>
					<option value="">B.A.Theatre Studies</option>
					<option value="">Bachelor of Music (B.Mus.)</option>
					<option value="">B.A.Communication Studies</option>
					<option value="">B.A.Dance</option>
					<option value="">B.A.Film Studies</option>
					<option value="">Proficiency Course in English for Francophone Students</option>
					<option value="">B.A.English</option>
					<option value="">B.A.English & French</option>

					<option value="">Faculty of Social Science</option>
					<option value="">B.A.Social Science</option>
					<option value="">B.A.Population and Health</option>
					<option value="">B.Sc.Hospitality Management</option>
					<option value="">B.Sc.Tourism Management</option>
					<option value="">B.A.Anthropology</option>
					<option value="">B.Sc.Geography & Regional Planning</option>
					<option value="">B.A.Social Behaviour and Conflict Management</option>
					<option value="">Diploma in Tourism Management</option>
					<option value="">Diploma in Hospitality Management</option>
					<option value="">Diploma in Labour Studies</option>
					<option value="">Diploma in Social Behaviour and Conflict Management</option>
					<option value="">Diploma in Microfinance</option>
					<option value="">Certificate in Labour Studies</option>
					<option value="">Certificate in Microfinance</option>

					<option value="">School of Business</option>
					<option value="">Bachelor of Commerce Accounting</option>
					<option value="">Bachelor of Commerce Finance</option>
					<option value="">Bachelor of Commerce Management</option>
					<option value="">Bachelor of Commerce Procurment And Supply Chain Managment</option>
					<option value="">Bachelor of Commerce Marketing</option>
					<option value="">Bachelor of Commerce Human Resource Managment</option>

					<option value="">Faculty of Law</option>
					<option value="">Bachelor of Laws (LLB)</option>
					
					<option value="">School of Agriculture</option>
					<option value="">B.Sc. Agriculture</option>
					<option value="">B.Sc. Agriculture Extension</option>
					<option value="">B.Sc. Animal Health</option>
					<option value="">B.Sc.Agribusiness</option>
					<option value="">B.Sc.Agro-Processing</option>
					<option value="">B.Sc. Agriculture Extension & Community Development</option>
					
					<option value="">School of Biological Sciences</option>
					<option value="">B.Sc.Environmental Science</option>
					<option value="">B.Sc.Biochemistry</option>
					<option value="">B.Sc.Fisheries & Aquatic Sciences</option>
					<option value="">B.Sc.Forensic Science</option>
					<option value="">B.Sc.Molecular Bbiology & Biotechnology</option>
					<option value="">B.Sc.Entomology & Widelife</option>
					
					<option value="">School of Physical Sciences</option>
					<option value="B.Sc.Computer Science">B.Sc.Computer Science</option>
					<option value="">B.Sc.Engineering Physics</option>
					<option value="">B.Sc.Industral Chemistry</option>
					<option value="">B.Sc.Information Technology</option>
					<option value="B.Sc.Information Technology">BSc.Information Technology</option>
					<option value="">B.Sc.Mathematics</option>
					<option value="">B.Sc.Mathematics & Statistics</option>
					<option value="">B.Sc.Mathematics with Business</option>
					<option value="">B.Sc.Meteorology & Atmospheric Physics</option>
					<option value="">B.Sc.Mathematics with Economics</option>
					<option value="">B.Sc.Actuarial Science</option>
					<option value="">B.Sc.Chemistry</option>
					<option value="">B.Sc.Physics</option>
					<option value="">B.Sc.Water & Sanitation</option>
					<option value="">B.Sc.Fisheries & Aquatic Sciences</option>
					<option value="">Diploma in Water & Sanitation</option>
					
					<option value="">School of Medical Sciences</option>
					<option value="">Bachelor of Medicine & Bachelor of Surgery (MBA ChB)</option>
					
					<option value="">School of Nursing & Midwifery</option>
					<option value="">B.Sc.Nursing</option>
					<option value="">B.Sc.Mental Health Nursing</option>
					<option value="">B.Sc.Community Mental Health Nursing</option>
					
					<option value="">School of Allied Health Sciences</option>
					<option value="">B.Sc.Biomedical Science</option>
					<option value="">B.Sc.Medical Laboratory Technology</option>
					<option value="">B.Sc.Clinical Nutrition & Dietetics</option>
					<option value="">B.Sc.Diagnostic Imaging Technology</option>
					<option value="">B.Sc.Diagnostic Medical Sonography</option>
					<option value="">B.Sc.Health informatiom Managment</option>
					<option value="">B.Sc.Physician Assistant Studies</option>
					<option value="">B.Sc.Sports & Exercise Science</option>
					<option value="">Doctor of Optometry</option>
					
				</select>
			</div>	

<!-- rowbreak -->
		</div>

	<br>
			<div>
				<label>Room number</label>
				<input type="text" name="rmnumber" required>
			</div>
	<br>
			<div>
				<label>Date of Birth</label><br>
				<input class="form-control" type="Datetime" name="birthdate" placeholder="Enter... dd/mm/yy"><br>
				
			</div>
	<br>


			
			<div class="from-group row">
				<div class="from-group col">
					<label>Gender</label>
					<select class=" form-control" name="gender">
						<option selected hidden value="">Choose</option>
						<option value="Male">Male</option>
						<option value="Fmale">Fmale</option>
						<option value="Other">Other</option>
					</select>
				</div>
		<br>
				<div class="from-group col">
					<label>Phone Number</label>
					<input class="form-control" type="text" name="phnumber" required>	
				</div>
			</div>

	<br>
			<div>
				<label>Password</label>
				<input class="form-control" type="password" name="pswd" required><br>
				<label>Confirm Password</label>
				<input class="form-control" type="password" name="cpswd" required>
			</div>
<br>
			
			<center>
				<button type="submit" name="signup" class="btn  btn-primary ">Sign up</button>
				<button  class="btn btn-danger"><a href="login.php">Log in</a></button>
				
			</center>
			

		</form>

	</div>
</div>

<!-- ................................................. -->

<!-- <?php 
// include_once 'connection.php';
// 	if (isset($_POST['submit'])) {
// 		# code...
// 			$regnumber=$_POST['regnumber'];
// 			$fname=$_POST['fname'];
// 			$lname=$_POST['lname'];
// 			$oname=$_POST['oname'];
// 			$email=$_POST['email'];
// 			$programme=$_POST['programme'];
// 			$rmnumber=$_POST['rmnumber'];
// 			$birthdate=$_POST['birthdate'];
// 			$gender=$_POST['gender'];
// 			$phnumber=$_POST['phnumber'];
// 			$username=$_POST['username'];
// 			$pswd=$_POST['pswd'];

// 			$img_name=$_FILES['imglink']['name'];
// 			$img_size=$_FILES['imglink']['size'];
// 			$img_temp=$_FILES['imglink']['tmp_name'];
			
// 			$img_directory='uploads/';
// 			$target_file=$img_directory.$img_name;
		
// 		if ($pswd==$cpswd) {
// 			# code...
// 		$query="SELECT * FROM studentsignupfileupload WHERE username = $username;";
// 		$query_run=mysqli_query($conn,$query);
// 			if (mysqli_fetch_array($query_run)>0) {
// 				# code...
// 				echo "Sorry the user name already exit";
// 			}elseif (file_exists($target_file)) {
// 				# code...
// 				echo "<script type='text/JavaScript'> alert('Image file already exist please try another with a different one')</script>";
// 			}elseif ($img_size>2097152) {
// 				# code...
// 				echo "<script type='text/JavaScript'> alert('Image size is greater than 2MB please use a smaller size..')</script>";
// 			}else{
// 				move_uploaded_file($img_name, $img_temp);
// 				$query="INSERT INTO studentsignupfileupload VALUES('',$regnumber','$fname','$lname','$oname','$email','$programme','$rmnumber','$birthdate','$gender','$phnumber','$username','$password','$target_file');";
// 				$query_run=mysqli_query($conn,$query);
// 						if ($query_run) {
// 							# code...
// 							echo "<script type='text/JavaScript'> alert('Registration successful... Go to login page ')</script>";
// 						}else{
// 							echo "<script type='text/JavaScript'> alert('SORRY an error ocoured registration could not be completed..')</script>";
// 						}
// 				}
// 		}
// 	}
 ?> -->

 
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>



