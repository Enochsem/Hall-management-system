 <?php

//key status  

// if(isset($_POST['keystatus_btn'])){

  $room_number=$_POST['room_number'];
  $registration_id=$_POST['registration_id'];
  $date=date('y-m-d h:i:s');

  $sql="SELECT * FROM track_k WHERE room_number='$room_number';";
  $query=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($query);

  $ids=$row['id'];
  $status=$row['key_status'];
  echo $status;
  echo $ids;

  if ($row) {
    
    if ($status <= 0) {
      # code...
      $sql2="UPDATE keys SET key_status = 1, registration_id = '$registration_id' WHERE id='$ids';";
      $query2=mysqli_query($conn,$sql2);

      $_SESSION['success_key'] = "Key In success";
      header('Location:key_status_and_updates.php');

    }else{
      $sql3="UPDATE keys SET key_status = 0, registration_id = '$registration_id' WHERE id='$ids';";
      $query3=mysqli_query($conn,$sql3);

      $_SESSION['status_key']="Key Out success";
      header('Location:key_status_and_updates.php ');
    }

  }else{
    $_SESSION['status_key']="Room key status not available";
      header('Location:key_status_and_updates.php ');
      
  }


}

?>


<form action=".php" method="POST">
  <div class="input-group">
    <input name="" type="text" class="form-control bg-light border-0 small" placeholder="Enter room number" >

    <input name="" type="text" class="form-control bg-light border-0 small" placeholder="Enter registration number" >

    <div class="input-group-append">
      <button name="" class="btn btn-success" type="submit">
        <i class="fas fa-key fa-sm"></i>
      </button>
    </div>
  </div>
</form>