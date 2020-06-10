
                    <form method="POST">
                      <div class="input-group">
                        <input name="room" type="text" class="form-control bg-light border-0 small" placeholder="Enter room number" required>
                        <div class="input-group-append">
                          <button name="get_key_status_btn" class="btn btn-info" type="submit">
                            <i class="fas fa-key fa-sm"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                  

<?php 
    include_once 'connection.php';

    if (isset($_POST['get_key_status_btn'])) {
      # code...
      $room=$_POST['room'];
      $sql="SELECT * FROM track_k WHERE room_number = '$room';";
      $query=mysqli_query($conn,$sql);
      if ($status=mysqli_fetch_assoc($query)) {
        # code...
        // echo "<div class='h5 font-weight-bold text-gray-800 text-center'> Status ".$status['key_status']."<br> @ ".$status['date']."</div> <br>";
        $state=$status['key_status'];
        if ($state==0) {
          # code...
          echo "
          <div class='h5 font-weight-bold text-info-800 text-center'>Status: Key out<br>
          On: ".$status['date'].
          "<br>By: ".$status['registration_id'].
          "
          </div>";
        }elseif ($state==1) {
          # code...
          echo "
          <div class='h5 font-weight-bold text-info-800 text-center'>Status: Key in<br>
          On: ".$status['date'].
          "<br>By: ".$status['registration_id'].
          "
          </div>";
        }else{
          echo "status not avaliable";
        }
 
      }
    }
                        
?>