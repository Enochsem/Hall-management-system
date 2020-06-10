<?php
session_start();
include_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

 <!--  <div class="jumbotron"> 
    <h1 class="card card-body text-center">Welcome To Developer Student Club - UCC</h1>
  </div> -->
<br>
<br>
<div class="col-lg-8 col-md-6 col-sm-12 offset-lg-2" >

  <div class="card card-body">
     <!-- border-top-right-radius:50px; -->
    <center>
      <img src="images/atl.jpg" height="100" width="100">
    </center>
    <h3 class="text-center text-primary"><b>ATLANTIC HALL</b></h3>
    <hr>

    <form class="user" action="adminlogin.php" method="POST">
      <div class="form-group">
        <label>User name</label>
        <input maxlength="20" class="form-control form-control-user" type="text" name="username" placeholder="Enter your name" required="">
      </div>

      <div class="form-group">
        <label>Password</label>
        <input minlength="" type="Password" name="password" class="form-control form-control-user" placeholder=" Enter your Password" required="">
      </div>

      <button type="submit" name="login" class=" btn btn-primary">log in</button>


     </form>
    
  </div>
</div>

<?php
if(isset($_POST['login'])){

  $username=$_POST['username'];
  $password=$_POST['password'];
  $query="SELECT * FROM adminregister WHERE username='$username' AND pswd='$password';";
 $query_run=mysqli_query($conn,$query);
 $row=mysqli_fetch_array($query_run);
if(!empty($row)){

      $_SESSION['username']=$username;
      // $_SESSION['img_link']=$row['img_link']
      header("location:index.php");
}else{
      echo "<script type='text/JavaScript'> alert('Invalid Credentials')</script>";

    }

    // if(mysqli_num_rows($query_run)>0){

    //   $_SESSION['fname']=$username;
    //   header("location:admine.php");
    // }else{
    //   echo "<script type='text/JavaScript'> alert('Invalid Credentials')</script>";
    // }
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