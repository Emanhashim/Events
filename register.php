<!-- <div class="modal fade" id="event">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Register</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_add.php" enctype="multipart/form-data">
          		  <div class="form-group">
                  	<label for="firstname" class="col-sm-3 control-label">Firstname</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="firstname" name="firstname" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="lastname" class="col-sm-3 control-label">Lastname</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="lastname" name="lastname" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="address" class="col-sm-3 control-label">Address</label>

                  	<div class="col-sm-9">
                      <textarea class="form-control" name="address" id="address"></textarea>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="datepicker_add" class="col-sm-3 control-label">Email</label>

                  	<div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="datepicker_add" name="birthdate">
                      </div>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Contact Info</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="contact" name="contact">
                    </div>
                </div>
				<div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Contact Info</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="contact" name="contact">
                    </div>
                </div>
				<div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Contact Info</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="contact" name="contact">
                    </div>
                </div>
				<div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Contact Info</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="contact" name="contact">
                    </div>
                </div>
				<div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Contact Info</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="contact" name="contact">
                    </div>
                </div>
				<div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Contact Info</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="contact" name="contact">
                    </div>
                </div>
				<div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Contact Info</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="contact" name="contact">
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-3 control-label">Gender</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="gender" id="gender" required>
                        <option value="" selected>- Select -</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                </div>
            
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
            	</form>
          	</div>
        </div>
    </div>
</div>
 -->

<!-- singl fetch data  -->


<div class="modal-body">
  <form class="form-horizontal" method="POST" action="insert.php" enctype="multipart/form-data">
    <div class="form-group">
      <label for="event_type" class="col-sm-3 control-label">Event Type</label>
      <?php
      include "bpms/db_connect.php";
      $userid = $_POST['userid'];

      $sql = "select * from lada where id=" . $userid;
      //  $sql = "select file_name from lada where id = 1";
      $rs = mysqli_query($conn, $sql);
      $fetchRow = mysqli_fetch_assoc($rs);
      ?>
      <div class="col-sm-9">
        <input type="text" name="event_type" id="event_type" value="<?php echo $fetchRow["file_name"]; ?>" readonly class="form-control" required />
        <!-- <input type="text" class="form-control" id="first_name" name="first_name"  required> -->
      </div>
    </div>
    <div class="form-group">
      <label for="first_name" class="col-sm-3 control-label">First Name</label>

      <div class="col-sm-9">
        <input type="text" class="form-control" id="first_name" name="first_name" required>
      </div>
    </div>
    <div class="form-group">
      <label for="last_name" class="col-sm-3 control-label">Last Name</label>

      <div class="col-sm-9">
        <input type="text" class="form-control" id="last_name" name="last_name" required>
      </div>
    </div>
    <div class="form-group">
      <label for="age" class="col-sm-3 control-label">Age</label>

      <div class="col-sm-9">
        <input type="text" class="form-control" id="age" name="age">
      </div>
    </div>
    <div class="form-group">
      <label for="email" class="col-sm-3 control-label">Email</label>

      <div class="col-sm-9">
        <input type="text" class="form-control" id="email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label for="country" class="col-sm-3 control-label">Country</label>

      <div class="col-sm-9">
        <input type="text" class="form-control" id="country" name="country">
      </div>
    </div>
    <div class="form-group">
      <label for="phone" class="col-sm-3 control-label">Phone Number</label>

      <div class="col-sm-9">
        <input type="text" class="form-control" id="phone" name="phone">
      </div>
    </div>

    <div class="form-group">
      <label for="gender" class="col-sm-3 control-label">Gender</label>

      <div class="col-sm-9">
        <select class="form-control" name="gender" id="gender" required>
          <option value="" selected>- Select -</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="hotel" class="col-sm-3 control-label">Hotel</label>

      <div class="col-sm-9">
        <select class="form-control" name="hotel" id="hotel" required>
          <option value="" selected> - Select Hotel - </option>
          <?php
          include "bpms/db_connect.php";
          $sql = "SELECT * FROM hotel";
          $query = $conn->query($sql);
          while ($prow = $query->fetch_assoc()) {
            echo "
                              <option value='" . $prow['id'] . "'>" . $prow['hotel_name'] . " Hotel " . $prow['hotel_location'] . " " . $prow['hotel_standard'] . "</option>
                            ";
          }
          ?>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="transport" class="col-sm-3 control-label">Transportation</label>

      <div class="col-sm-9">
        <select class="form-control" name="transport" id="transport" required>
          <option value="" selected> - Select transport - </option>
          <?php
          include "bpms/db_connect.php";
          $sql = "SELECT * FROM transport";
          $query = $conn->query($sql);
          while ($prow = $query->fetch_assoc()) {
            echo "
                              <option value='" . $prow['id'] . "'>" . $prow['transport_type'] . "</option>
                            ";
          }
          ?>
        </select>
      </div>
    </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
      <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
  </form>
</div>