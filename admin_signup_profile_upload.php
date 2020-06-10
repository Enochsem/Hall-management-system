<?php 
session_start();
require 'connection.php';

if (isset($_POST['register'])) {
   # code...
     $username=$_POST['username'];
     $email=$_POST['email'];
     $office=$_POST['office'];
     $pswd=$_POST['pswd'];
     $cpswd=$_POST['cpswd'];


     $img_name=$_FILES['imglink']['name'];
     $img_size=$_FILES['imglink']['size'];
     $img_tmp=$_FILES['imglink']['tmp_name'];
      
     $directory='uploads/';
     $target_file=$directory.$img_name;
    
   if ($pswd==$cpswd) {
     # code...
   $query="SELECT * FROM admin_signup WHERE username = $username;";
   $query_run=mysqli_query($conn,$query);
     if (!empty($query_run)) {
       # code...
       echo "Sorry the user name already exit";
     }elseif (file_exists($target_file)) {
       # code...
       echo "<script type='text/JavaScript'> alert('Image file already exist please try another with a different one')</script>";
     }elseif ($img_size>2097152) {
       # code...
       echo "<script type='text/JavaScript'> alert('Image size is greater than 2MB please use a smaller size..')</script>";
     }else{
       // move_uploaded_file($img_name, $img_tmp);
        move_uploaded_file($img_tmp, $target_file);
       $query="INSERT INTO admin_signup(username, email, office, password, imglink) VALUES('$username','$email','$office','$pswd','$target_file');";
       $query_run=mysqli_query($conn,$query);
           if ($query_run) {
             # code...
             // echo "<script type='text/JavaScript'> alert('Registration successful... Go to login page ')</script>";
             $_SESSION['success']="Registration successful... Welcome to login page";
             header('Location:login.php');
           }else{
             // echo "<script type='text/JavaScript'> alert('SORRY an error ocoured registration could not be completed..')</script>";
             $_SESSION['success']="SORRY an error ocoured registration could not be completed.. Try again";
             header('Location:adminsignup.php');
           }
       }
   }
 }














 ?>