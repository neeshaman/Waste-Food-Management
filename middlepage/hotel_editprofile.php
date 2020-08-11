<?php
    $hotel_id=$_SESSION['hotel_id'];
    $sel="SELECT * FROM `hotel` WHERE `h_id`= '$hotel_id'";
    $qry=mysqli_query($con,$sel);
    $count=mysqli_num_rows($qry);
    $row=mysqli_fetch_assoc($qry);
?>
<form action="index.php?page=hotel_update&hotel_id=<?php echo $_SESSION['hotel_id'];?>" method="post" enctype="multipart/form-data" class="form-contact">
<div class="container">
  <hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="<?php echo 'admin/upload/hotel/'.$row['h_profile'];?>" class="avatar img-circle" alt="profile">
          <h5 style="color:black;">Upload a different photo...</h5>
          <input type="file" name="profile" >
        </div>
      </div>   
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
          <h3 style="color:black;">Personal info</h3>
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" value="<?php echo $row['h_name']; ?>" type="text" name="name" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" value="<?php echo $row['h_email']; ?>" type="text" name="email" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Address:</label>
            <div class="col-md-8">
              <textarea class="form-control" type="password" name="address" value=""><?php echo $row['h_address']; ?></textarea>
            </div>
          </div>         
          <div class="form-group">
            <label class="col-md-3 control-label">Phone No.:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="phone" value="<?php echo $row['h_phoneNo']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">City:</label>
            <div class="col-md-8">
              <select class="form-control" name="city">
                <option><?php echo $row['h_city'];?></option>
                <?php
                            
                    $city=mysqli_query($con,"SELECT * FROM `city` WHERE `state_id` =15  ");
                    while($row_city=mysqli_fetch_array($city)){
                ?>                         
                <option value="<?php echo $row_city['city_name']; ?>"><?php echo $row_city['city_name']; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="password" value="<?php echo $row['h_password']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="<?php echo $row['h_password']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-primary" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
</form>