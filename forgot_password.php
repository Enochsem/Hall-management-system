<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Forgot Password</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
<br>
<br>
      <div class="col-lg-8 col-md-6 col-sm-12 offset-lg-2">

          <div class="card card-body p-0">
            <?php
 if (!empty($_SESSION['successf'])) {
    echo "<br><h6 class='text text-center text-white bg-success'>". $_SESSION['successf']."</h6>";
    unset($_SESSION['successf']);
}if (!empty($_SESSION['statusf'])) {
    echo "<br><h6 class='text text-center text-white bg-danger'>".$_SESSION['statusf']."</h6>";
    unset($_SESSION['statusf']);
 }  ?>
            <div class="container">
                            <br>
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                    <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
                  </div>

                  <form class="user" action="forgot_password.php" method="Post">
                    <div class="form-group">
                      <input name="email" type="email" class="form-control form-control-user" placeholder="Enter Email Address..." required>
                    </div>
                    <div class="form-group">
                      <input name="phone_number" type="number" class="form-control form-control-user"  placeholder="Enter Phone Number" required>
                    </div>

                    <div class="form-group">
                      <textarea  type="hidden" name="msg" value=" Hello Admin, Please i have forgotten my password" class="form-control">
                  
                      </textarea>
                      <small>this is not necessary old password can be sent back to your mail if left empty</small>
                    </div>
                 
                    <button type="submit" name="forgot_btn" class="btn btn-primary btn-user btn-block">Submit</button>
                      
                    
                  </form>

                  <hr>
                  <div class="text-center">
                    <a class="small" href="adminsignup.php">Create an Account!</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="login.php">Already have an account? Login!</a>
                  </div>
                <br>
          </div>

      </div>

  </div>



  <?php 

  include 'connection.php';

  if (isset($_POST['forgot_btn'])) {
    # code...

    $email=$_POST['email'];
    $phone_number=$_POST['phone_number'];
    $msg=$_POST['msg'];
    $date=date('y-m-d h:i:s');

    $sql="INSERT INTO notifications(email,phone_number,message,date)VALUES('$email','$phone_number','$msg','$date');";
    $query = mysqli_query($conn,$sql);
    if ($query) {
      # code...
      $_SESSION['successf']='Forgot password notification sent successfuly <br> waite to recieve an email confirmation of new password';
      header('Location:forgot_password.php');

    }else{
      $_SESSION['statusf'] = 'Notifiction not sent <br> please try again';
      header('Location:forgot_password.php');
    }

  }


   ?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
