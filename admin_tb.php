<?php
include('check.php');
include_once 'include/header.php';
include_once 'include/navbar.php';
// include_once 'adminprofpost.php';
?>





<div class="container-fluid">
  <div class="card shadow ">
    <div  class="card-header">
      <h5 class="text ">Admin File 1</h5>

      
      
    </div>

    <div class="card card-body">

        <div id="reg_students" class="table-responsive">
          <table class="table  table-bordered" id="dataTable" width="100%" cellspacing="0">
            <center>
              <fieldset>
              <output>content would be displayed when file is created</output>
               <input type="hidden" name="first_table" value="<?php echo $_SESSION['col_1'];?>">
            </fieldset>
            </center>
          <thead>
            <tr>
              <th>
                
                  <input type="hidden" name="col_1" value="<?php echo $_SESSION['col_1'];?>">
              </th>
              <th>
                
                  <input type="hidden" name="col_2" value="<?php echo $_SESSION['col_2'];?>">
                </th>
              <th>
                
                  <input type="hidden" name="col_3" value="<?php echo $_SESSION['col_3'];?>">
                </th>
              <th>
                
                  <input type="hidden" name="col_4" value="<?php echo $_SESSION['col_4'];?>">
                </th>
              <th>
                
                  <input type="hidden" name="col_5" value="<?php echo $_SESSION['col_5'];?>">
                </th>
            </tr>
            </thead>
            <tbody>
               

              <?php
               // include_once 'connection.php';
              
              if (isset($_POST[''])) {
               
                $sql="SELECT * FROM first_table ;";
                 
                  if ($query=mysqli_query($conn,$sql)) {
                    # code...
                    while ( $row=mysqli_fetch_assoc($query)) {
                      # code...
                      ?>
                   
                      <tr>
                        <td><?php echo $row['col_1'];?></td>
                        <td><?php echo $row['col_2']; ?></td>
                        <td><?php echo $row['col_3']; ?></td>
                        <td><?php echo $row['col_4']; ?></td>
                        <td><?php echo $row['col_5']; ?></td>
                      </tr>

            <?php 
                   }
                  }else{echo "No records";}
                }  
             ?>
          </tbody>
          </table>
        </div>

        <div>
          <center>
            <form method="POST">
             <button name="creat_tb" type="submit" class="btn btn-primary">Creat</button>
          </form>
          </center>
        </div>
          <button onclick="printcontent('reg_students')" class="btn btn-facebook btn-block">Print me</button>
      </div>

      </div>
  </div> 




<?php
include_once 'include/script.php';
include_once 'include/footer.php';
 ?>