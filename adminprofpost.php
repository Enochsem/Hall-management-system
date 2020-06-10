<?php 
session_start();
include_once 'connection.php';







//admin sign up

 // if (isset($_POST['register'])) {
 //   # code...
 //     $username=$_POST['username'];
 //     $email=$_POST['email'];
 //     $office=$_POST['office'];
 //     $pswd=$_POST['pswd'];
 //     $cpswd=$_POST['cpswd'];


 //     $img_name=$_FILES['imglink']['name'];
 //     $img_size=$_FILES['imglink']['size'];
 //     $img_tmp=$_FILES['imglink']['tmp_name'];
      
 //     $img_directory='uploads/';
 //     $target_file=$img_directory.$img_name;
    
 //   if ($pswd==$cpswd) {
 //     # code...
 //   $query="SELECT * FROM admin_signup WHERE username = $username;";
 //   $query_run=mysqli_query($conn,$query);
 //     if (mysqli_num_rows($query_run)>0) {
 //       # code...
 //       echo "Sorry the user name already exit";
 //     }elseif (file_exists($target_file)) {
 //       # code...
 //       echo "<script type='text/JavaScript'> alert('Image file already exist please try another with a different one')</script>";
 //     }elseif ($img_size>2097152) {
 //       # code...
 //       echo "<script type='text/JavaScript'> alert('Image size is greater than 2MB please use a smaller size..')</script>";
 //     }else{
 //       move_uploaded_file($img_name, $img_tmp);
 //       $query="INSERT INTO admin_signup(username, email, office, password, imglink) VALUES('','$username','$email','$office','$password','$target_file');";
 //       $query_run=mysqli_query($conn,$query);
 //           if ($query_run) {
 //             # code...
 //             echo "<script type='text/JavaScript'> alert('Registration successful... Go to login page ')</script>";
 //           }else{
 //             echo "<script type='text/JavaScript'> alert('SORRY an error ocoured registration could not be completed..')</script>";
 //           }
 //       }
 //   }
 // }






//add Admin
if(isset($_POST['addadmin'])){
	$username=$_POST['username'];
	$office=$_POST['office'];
	$email=$_POST['email'];
	$pswd=$_POST['pswd'];
	$cpswd=$_POST['cpswd'];


	if ($pswd === $cpswd) {
		# code...
		$sql="INSERT INTO admin_signup (username,email,office,password)VALUES('$username','$email','$pswd');";
		$query=mysqli_query($conn,$sql);
 
		if ($query) {
			# code...
			// echo "<script type='text/javascript'> alert('Admin data saved successfully')</script>";
			$_SESSION['success'] = "Admin profile added successfully";
			header('Location: register.php');

		}else{
			// echo "<script type='text/javascript'> alert(' ERROR unsuccessfully')</script>";

				$_SESSION['status']="Admin profile NOT ADDED ";
			header('Location: register.php');
		}
	}else{
		$_SESSION['status']="Password and Confirm password do not match";
			header('Location: register.php');
			// echo "<script type='text/javascript'> alert('Password and Confirm password do not match')</script>";
	}



}




// //add Student
// if(isset($_POST['addstudent'])){
// 	$registration_id=$_POST['registration_id'];
// 	$level=$_POST['level'];
// 	$username=$_POST['username'];
// 	$email=$_POST['email'];
// 	$room_number=$_POST['room_number'];
// 	$pswd=$_POST['pswd'];
// 	$cpswd=$_POST['cpswd'];


// 	if ($pswd === $cpswd) {
// 		# code...
// 		$sql="INSERT INTO student_register (registration_id,level,username,email,room,password)VALUES('$registration_id','$level','$username','$email','$room_number','$pswd');";
// 		$query=mysqli_query($conn,$sql);
 
// 		if ($query) {
// 			# code...
// 			// echo "<script type='text/javascript'> alert('Admin data saved successfully')</script>";
// 			$_SESSION['success'] = "Student Record added successfully";
// 			header('Location: register_student.php');

// 		}else{
// 			// echo "<script type='text/javascript'> alert(' ERROR unsuccessfully')</script>";

// 				$_SESSION['status']="Student Record NOT ADDED ";
// 			header('Location: register_student.php');
// 		}
// 	}else{
// 		$_SESSION['status']="Password and Confirm password do not match";
// 			header('Location: register_student.php');
// 			// echo "<script type='text/javascript'> alert('Password and Confirm password do not match')</script>";
// 	}



// }






  // admin edit button

if (isset($_POST['update'])) {
	# code...
	$edit_username=$_POST['edit_username'];
	$edit_email=$_POST['edit_email'];
	$edit_office=$_POST['edit_office'];
	$edit_pswd=$_POST['edit_pswd'];
	$edit_id=$_POST['edit_id'];

	$sql= "UPDATE admin_signup SET username = '$edit_username', office = '$edit_office' , email= '$edit_email', password='$edit_pswd' WHERE ID = '$edit_id';";
	$query=mysqli_query($conn,$sql);

	 if ($query) {
	 	# code...
	 	$_SESSION['success']='Admin Profle UPDATED Successfully';
	 	header('Location: register.php');
	 }else{
	 	$_SESSION['status']='Admin Profle  Update UNSUCCESSFUL';
	 	header('Location: register.php');
	 }

}





//admin delete button

  if (isset($_POST['delete_btn'])) {
  	# code...
  	$delete_id=$_POST['delete_id'];
  	$sql="DELETE FROM admin_register WHERE ID ='$delete_id';";
  	$query=mysqli_query($conn,$sql);

  		if ($query) {
  			# code...
  			$_SESSION['success']='Your record is DELETED Successfully';
  			header('Location:register.php');
  		}else{
  			$_SESSION['status']='Error Record NOT Deleted';
  			header('Location:register.php');
  		}

  }






          //notification delete btn

if (isset($_POST['notification_delete_btn'])) {
  # code...
  $notification_delete_id=$_POST['notification_delete_id'];
  $sql="DELETE FROM notifications WHERE id ='$notification_delete_id';";
  $query=mysqli_query($conn,$sql);

    if ($query) {
      # code...
      $_SESSION['successn']='Record DELETED Successfully';
      header('Location:notifications.php');
    }else{
      $_SESSION['statusn']='Error Record NOT Deleted';
      header('Location:notifications.php');
    }

}









//   // student edit button

// if (isset($_POST['update'])) {
// 	# code...
// 	$edit_username=$_POST['edit_username'];
// 	$edit_email=$_POST['edit_email'];
// 	$edit_pswd=$_POST['edit_pswd'];
// 	$edit_id=$_POST['edit_id'];

// 	$sql= "UPDATE adminregister SET username = '$edit_username' , email= '$edit_email', pswd='$edit_pswd' WHERE id = '$edit_id';";
// 	$query=mysqli_query($conn,$sql);

// 	 if ($query) {
// 	 	# code...
// 	 	$_SESSION['success']='Admin Profle UPDATED Successfully';
// 	 	header('Location: register.php');
// 	 }else{
// 	 	$_SESSION['status']='Admin Profle  Update UNSUCCESSFUL';
// 	 	header('Location: register.php');
// 	 }

// }





// //student delete button

//   if (isset($_POST['delete_btn'])) {
//   	# code...
//   	$delete_id=$_POST['delete_id'];
//   	$sql="DELETE FROM adminregister WHERE id='$delete_id';";
//   	$query=mysqli_query($conn,$sql);

//   		if ($query) {
//   			# code...
//   			$_SESSION['success']='Your record is DELETED Successfully';
//   			header('Location:register.php');
//   		}else{
//   			$_SESSION['status']='Error Record NOT Deleted';
//   			header('Location:register.php');
//   		}

//   }













//login
  if(isset($_POST['login'])){

  $username=$_POST['username'];
  $password=$_POST['password'];
  $query="SELECT * FROM admin_signup WHERE username='$username' AND password='$password';";
 $query_run=mysqli_query($conn,$query);
 $row=mysqli_fetch_assoc($query_run);
if($row){


	// $row=mysqli_fetch_assoc($query_run);

      $_SESSION['username']=$row['username'];
      $_SESSION['img_link']=$row['imglink'];
      $_SESSION['office']=$row['office'];
      $_SESSION['email']=$row['email'];

      header('Location:index.php');
}else{
      // echo "<script type='text/JavaScript'> alert('Invalid Credentials')</script>";
		$_SESSION['status']='Invalid Credentials';

     	 header('Location:login.php');
    }

    
}

   





















 ?>