
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <h4 class="modal-title-center">Student Details</h4>
      </div>

        <div>
          <form action="studentprofpost.php" method="POST">
            <div class="modal-body">
                <div class="form-group">
                  <input class="form-control" type="text" name="registration_id" placeholder=" Enter Student ID" required>
                </div>

                <div class="form-group">
                  <input class="form-control" type="text" name="fname" placeholder=" Enter first name" required>
                </div>

                <div class="form-group">
                  <input class="form-control" type="text" name="lname" placeholder=" Enter last name" required>
                </div>

                <div class="form-group">
                  <input class="form-control" type="text" name="oname" placeholder=" Enter other_name" required>
                </div>

                <div class="form-group">
                  <input class="form-control" type="email" name="email" placeholder=" Enter Email" required>
                </div>

                <div class="form-group">
                  <input class="form-control" type="text" name="programme" placeholder=" Enter programme" required>
                </div>

                <div class="form-group">
                  <input class="form-control" type="text" name="rmnumber" placeholder=" Enter room number" required>
                </div>

                <div class="form-group">
                  <input class="form-control" type="text" name="birthdate" placeholder=" Enter date of birth" required>
                </div>

                <div class="form-group">
                  <input class="form-control" type="text" name="gender" placeholder=" Enter gender" required>
                </div>

                <div class="form-group">
                  <input class="form-control" type="text" name="phnumber" placeholder=" Enter phone number" required>
                </div>

                <div class="form-group">
                  <input class="form-control" type="password" name="pswd" placeholder=" Enter password" required>
                </div>

                <div class="form-group">
                  <input class="form-control" type="password" name="cpswd" placeholder="Confirm password" required>
                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
                   <button name="addstudent" type="submit" class="btn btn-primary">Add</button>
              </div>

          </form>
        </div>   

    </div>

  </div>
</div>






