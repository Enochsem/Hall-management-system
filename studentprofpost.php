<?php 
session_start();
include_once 'connection.php';




//add Student
if(isset($_POST['addstudent'])){
	$registration_id=$_POST['registration_id'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$oname=$_POST['oname'];
	$email=$_POST['email'];
	$programme=$_POST['programme'];
	$rmnumber=$_POST['rmnumber'];
	$birthdate=$_POST['birthdate'];
	$gender=$_POST['gender'];
	$phnumber=$_POST['phnumber'];
	$pswd=$_POST['pswd'];
	$cpswd=$_POST['cpswd'];


	if ($pswd === $cpswd) {
		# code...
		$sql="INSERT INTO student_signup (registration_id,first_name, last_name, other_name, email, programme, room_number, date_of_birth, gender, phone_number,password)VALUES('$registration_id','$fname','$lname','$oname','$email','$programme','$rmnumber','$birthdate','$gender','$phnumber','$pswd');";
		$query=mysqli_query($conn,$sql);
 
		if ($query) {
			# code...
			// echo "<script type='text/javascript'> alert('Admin data saved successfully')</script>";
			$_SESSION['success'] = "Student Record added successfully";
			header('Location: register_student.php');

		}else{
			// echo "<script type='text/javascript'> alert(' ERROR unsuccessfully')</script>";

				$_SESSION['status']="Student Record NOT ADDED ";
			header('Location: register_student.php');
		}
	}else{
		$_SESSION['status']="Password and Confirm password do not match";
			header('Location: register_student.php');
			// echo "<script type='text/javascript'> alert('Password and Confirm password do not match')</script>";
	}



}








  // student edit button

if (isset($_POST['student_update_btn'])) {
	# code...
	// $edit_student_reg_id=$_POST['edit_student_reg_id'];
	$edit_student_programme=$_POST['edit_student_programme'];
	$edit_student_fname=$_POST['edit_student_fname'];
	$edit_student_lname=$_POST['edit_student_lname'];
	$edit_student_oname=$_POST['edit_student_oname'];
	$edit_student_email=$_POST['edit_student_email'];
	$edit_student_room=$_POST['edit_student_room'];
	$edit_student_password=$_POST['edit_student_password'];
	$edit_student_id=$_POST['edit_student_id'];

	$sqli= "UPDATE student_signup SET programme = '$edit_student_programme', 
		first_name = '$edit_student_fname', 
		other_name = '$edit_student_lname', 
		last_name = '$edit_student_lname' ,
		email= '$edit_student_email', 
		room_number = '$edit_student_room',
		 password='$edit_student_password'
		  WHERE registration_id = '$edit_student_id';";
	$query=mysqli_query($conn,$sqli);

	 if ($query) {
	 	# code...
	 	$_SESSION['success']='Student Record UPDATED Successfully';
	 	header('Location: register_student.php');
	 }else{
	 	$_SESSION['status']='Student Record  Update UNSUCCESSFUL';
	 	header('Location: register_student.php');
	 }

}





//student delete button

  if (isset($_POST['delete_student_btn'])) {
  	# code...
  	$delete_id=$_POST['delete_id'];
  	$sql="DELETE FROM student_signup WHERE registration_id ='$delete_id';";
  	$query=mysqli_query($conn,$sql);

  		if ($query) {
  			# code...
  			$_SESSION['success']='Student record DELETED Successfully';
  			header('Location:register_student.php');
  		}else{
  			$_SESSION['status']='Error Record NOT Deleted';
  			header('Location:register_student.php');
  		}

  }











if (isset($_POST['signup'])) {
		# code...
			$regnumber=$_POST['regnumber'];
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$oname=$_POST['oname'];
			$email=$_POST['email'];
			$programme=$_POST['programme'];
			$rmnumber=$_POST['rmnumber'];
			$birthdate=$_POST['birthdate'];
			$gender=$_POST['gender'];
			$phnumber=$_POST['phnumber'];
			$pswd=$_POST['pswd'];
			$cpswd=$_POST['cpswd'];

			$img_name=$_FILES['imglink']['name'];
			$img_size=$_FILES['imglink']['size'];
			$img_tmp=$_FILES['imglink']['tmp_name'];
			
			$directory='uploads/';
			$target_file=$directory.$img_name;
		
		if ($pswd==$cpswd) {
			
		$query="SELECT * FROM student_signup WHERE email = $email";
		$query_run=mysqli_query($conn,$query);
		$row=mysqli_num_rows($query_run);

			if ($row>0) {
				# code...
				echo "Sorry the student email already exists";
			}elseif (file_exists($target_file)) {
				# code...
				echo "<script type='text/JavaScript'> alert('Image file already exist please try another with a different one')</script>";
			}elseif ($img_size>2097152) {
				# code...
				echo "<script type='text/JavaScript'> alert('Image size is greater than 2MB please use a smaller size..')</script>";
			}else{
				// move_uploaded_file($img_name, $img_tmp);
				move_uploaded_file($img_tmp, $target_file);
				$query="INSERT INTO student_signup(registration_id, first_name, last_name, other_name, email, programme, room_number, date_of_birth, gender, phone_number, password,imglink ) VALUES('$regnumber','$fname','$lname','$oname','$email','$programme','$rmnumber','$birthdate','$gender','$phnumber','$pswd','$target_file');";
				$query_run=mysqli_query($conn,$query);
						if ($query_run) {
							# code...
							// echo "<script type='text/JavaScript'> alert('Registration successful... Go to login page ')</script>";
							$_SESSION['success']="Registration successful... Welcome to login page";
             				header('Location:login.php');

						}else{
							echo "<script type='text/JavaScript'> alert('SORRY an error ocoured registration could not be completed..')</script>";
							

						}
				}
		}else{
			echo "<script type='text/JavaScript'> alert('SORRY an error ocoured Password and confirm password missmatch..')</script>";
		}
	}











//key status  

// if(isset($_POST['key_status_btn'])){

// 	$room_number=$_POST['room_number'];
// 	$date=date('y-m-d h:i:s');

// 	$sql="SELECT * FROM track_k WHERE room_number='$room_number';";
// 	$query=mysqli_query($conn,$sql);
// 	$row=mysqli_fetch_array($query);

// 	$ids=$row['id'];
// 	$status=$row['key_status'];

// 	if ($row) {
		
// 		if ($status <= 0) {
// 			# code...
// 			$sql2="UPDATE keys SET key_status = 1 WHERE id='$ids';";
// 			$query2=mysqli_query($conn,$sql2);

// 			$_SESSION['success_key'] = "Key In success";
// 			header('Location:index.php');

// 		}else{
// 			$sql3="UPDATE keys SET key_status = 0 WHERE id='$ids';";
// 			$query3=mysqli_query($conn,$sql3);

// 			$_SESSION['status_key']="Key Out success";
// 			header('Location:index.php ');
// 		}

// 	}else{
// 		$_SESSION['status_key']="Room key status not available";
// 			header('Location:index.php ');
			
// 	}


// }







// registration and key out status

if(isset($_POST['reg_and_keyout_btn'])){

	$room_number=$_POST['room_number'];
	$date=date('y-m-d h:i:s');
	$registration_id=$_POST['registration_id'];

	$sql="INSERT INTO track_k ( room_number, date, registration_id)VALUES('$room_number','$date', '$registration_id');";
	$query=mysqli_query($conn,$sql);
	

	if ($query) {

			
			$_SESSION['success_reg_key'] = "Record In successful";
			header('Location:key_status_and_updates.php');
	}else{
		$_SESSION['status_reg_key']="Record Error";
			header('Location:key_status_and_updates.php ');
			
	}



}










 ?>