<?php
include('check.php');
include_once 'include/header.php';
include_once 'include/navbar.php';
// include_once 'adminprofpost.php';
?>





<div class="container-fluid">
  <div class="card shadow ">
    <div  class="card-header">
      <h5 class="text ">Creat Storage Fold</h5>
    </div>

    <div class="card card-body">

        <div id="reg_students" class="table-responsive">
          <table class="table  table-bordered" id="dataTable" width="100%" cellspacing="0">
            <center>
              <fieldset>
                <div class="form-group">
                  <input class="" type="text" name="tb_name" placeholder=" Enter folder name">
                </div>
            </fieldset>
            </center>
          <thead>
            <tr>
               <form action="create_table.php" method="POST">

                <th>
                <div class="form-group">
                  <input class="form-control" type="text" name="col_1" placeholder=" file header name">
                </div>
                </th>

                <th>
                <div class="form-group">
                  <input class="form-control" type="text" name="col_2" placeholder="file header name">
                </div>
                </th>

                <th>
                <div class="form-group">
                  <input class="form-control" type="text" name="col_3" placeholder="file header name">
                </div>
                </th>

                <th>
                <div class="form-group">
                  <input class="form-control" type="text" name="col_4" placeholder="file header name">
                </div>
                </th> 

                <th>
                  <div class="form-group">
                  <input class="form-control" type="text" name="col_5" placeholder="file header name">
                </div>
                </th>
    
          </form>
            </tr>
            </thead>
            <tbody>
               <tr>
                <td><input class="" type="text" name="d_1" placeholder="header content"></td>
                <td><input class="" type="text" name="d_2" placeholder="header content"></td>
                <td><input class="" type="text" name="d_3" placeholder="header content"></td>
                <td><input class="" type="text" name="d_4" placeholder="header content"></td>
                <td><input class="" type="text" name="d_5" placeholder="header content"></td>
              </tr>



              <?php
              //create new table for admin
               include_once 'connection.php';
              if (isset($_POST['creat_tb'])) {
               
                $tb_name=$_POST['tb_name'];

                $_SESSION['tb_name']= $tb_name ;

                $col_1=$_POST['col_1'];
                $col_2=$_POST['col_2'];
                $col_3=$_POST['col_3'];
                $col_4=$_POST['col_4'];
                $col_5=$_POST['col_5'];

                $d_1=$_POST['d_1'];
                $d_2=$_POST['d_2'];
                $d_3=$_POST['d_3'];
                $d_4=$_POST['d_4'];
                $d_5=$_POST['d_5'];

                $spl_1="CREATE TABLE `hall`.
                `$tb_name` ( `id` INT(10) NOT NULL AUTO_INCREMENT ,
                 `col_1` VARCHAR(30) NOT NULL ,
                  `col_2` VARCHAR(30) NOT NULL , 
                  `col_3` VARCHAR(30)  NULL ,
                  `col_4` VARCHAR(30)  NULL ,
                  `col_5` VARCHAR(30)  NULL ,
                   PRIMARY KEY (`id`))
                    ENGINE = InnoDB;";

                    $sql_2="INSERT INTO `$tb_name` (col_1, col_2, col_3, col_4, col_5)
                            VALUES ('$d_1', '$d_2', '$d_3', '$d_4', '$d_5');";

                    if ($sql_2=mysqli_query($conn,$sql_2)  && $sql_1=mysqli_query($conn,$sql_1)) {
                      
                      $_SESSION['col_1']= $col_1 ;
                      $_SESSION['col_2']= $col_2 ;
                      $_SESSION['col_3']= $col_3 ;
                      $_SESSION['col_4']= $col_4 ;
                      $_SESSION['col_5']= $col_5 ;
                      echo "New file data inserted";
                    }else{
                      die("Error file data NOT inserted:". mysqli_connect_error());
                    }
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
