<?php 
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Sign up</title>

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

<body class="bg-gradient-primary">
<br><br>




<div class="col-lg-8 col-md-6 col-sm-12 offset-lg-2" >

  <div class="card card-body">
     <!-- border-top-right-radius:50px; -->
    <center>
      <img src="images/atl1.jpg" height="100" width="100">
    </center>

    <div class="text-center">
                <h1 class="h4 text-gray-900">Admin Account!</h1>
              </div>
    <hr>


      <form class="user" action="admin_signup_profile_upload.php" method="POST" enctype="multipart/form-data">
            <center>
              <div class="container">
              <img id="uploadPreview" src="images/hat.png" height="100" width="100"><br>
              <input id="imglink" type="file" accept=".png ,.jpg" name="imglink" onchange="preimg();">
            </div>
            </center>

            <br>

        <div class="form-group row">
          <div class="form-group col">
            <input name="username" type="text" class="form-control form-control-user"  placeholder="Enter Username...">
          </div>

          <div class="form-group col">
            <input name="office" type="text" class="form-control form-control-user" placeholder="Enter office title..">
          </div>
        </div>

        <div class="form-group">
          <input name="email" type="text" class="form-control form-control-user" placeholder="Enter email">
        </div>

        <div class="form-group row">
          <div class="form-group col">
          <input name="pswd" type="password" class="form-control form-control-user" placeholder="Enter Password">
        </div>

          <div class="form-group col">
            <input name="cpswd" type="password" class="form-control form-control-user" placeholder="Confirm Password">
          </div>
        </div>
        

         <button type="submit" name="register" class=" btn btn-user btn-primary btn-block">Register Account</button>

     </form>   
              
          <div class="text-center">
            <a class="small" href="forgot_password.php">Forgot Password?</a>
          </div>
          <div class="text-center">
            <a class="small" href="login.php">Already have an account? Login!</a>
          </div>
    
  </div>
</div>




<!-- 
<?php 
// include_once 'connection.php';
//  if (isset($_POST['register'])) {
//    # code...
//      $username=$_POST['username'];
//      $email=$_POST['email'];
//      $office=$_POST['office'];
//      $pswd=$_POST['pswd'];
//      $cpswd=$_POST['cpswd'];


//      $img_name=$_FILES['imglink']['name'];
//      $img_size=$_FILES['imglink']['size'];
//      $img_temp=$_FILES['imglink']['tmp_name'];
      
//      $img_directory='uploads/';
//      $target_file=$img_directory.$img_name;
    
//    if ($pswd==$cpswd) {
//      # code...
//    $query="SELECT * FROM admin_register WHERE username = $username;";
//    $query_run=mysqli_query($conn,$query);
//      if (mysqli_fetch_array($query_run)>0) {
//        # code...
//        echo "Sorry the user name already exit";
//      }elseif (file_exists($target_file)) {
//        # code...
//        echo "<script type='text/JavaScript'> alert('Image file already exist please try another with a different one')</script>";
//      }elseif ($img_size>2097152) {
//        # code...
//        echo "<script type='text/JavaScript'> alert('Image size is greater than 2MB please use a smaller size..')</script>";
//      }else{
//        move_uploaded_file($img_name, $img_temp);
//        $query="INSERT INTO admin_register VALUES('','$username','$email','$office','$password','$target_file');";
//        $query_run=mysqli_query($conn,$query);
//            if ($query_run) {
//              # code...
//              echo "<script type='text/JavaScript'> alert('Registration successful... Go to login page ')</script>";
//            }else{
//              echo "<script type='text/JavaScript'> alert('SORRY an error ocoured registration could not be completed..')</script>";
//            }
//        }
//    }
//  }
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

<!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a> -->
                <!-- <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a> -->