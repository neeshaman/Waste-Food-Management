<?php

$hotel_id=$_SESSION['hotel_id'];
$sel="SELECT * FROM `hotel` WHERE `h_id`= '$hotel_id'";
$qry=mysqli_query($con,$sel);
$count=mysqli_num_rows($qry);
$row=mysqli_fetch_assoc($qry);

?>
<!--BANNER START-->
	<div class="section banner-page" data-background="images/banner-single.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Your Profile</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
				    <li class="breadcrumb-item active"><a href="#">Your Profile</a></li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>
<!-- BANNER END -->
<div class="container" style="color:black; margin-top:100px; margin-bottom: 100px;">
  	<hr><!-- <h2>Personal info</h2> -->
	<div class="row">
      <!-- left column -->
	    <div class="col-md-3">
	        <div class="text-center">
	          <img src="<?php echo 'admin/upload/hotel/'.$row['h_profile'];?>" class="avatar img-circle" alt="avatar">
	        </div>
	      <hr>
	    </div>
      <!-- left column end -->
      <!-- profile column -->
	        <div class="col-md-9 personal-info" >
	        	<h4> Name:    <?php echo $row['h_name']; ?></h4>
	        	<h4> Address:    <?php echo $row['h_address']; ?></h4>
	        	<h4> City:    <?php echo $row['h_city']; ?></h4>
	        	<h4> Phone No.:    <?php echo $row['h_phoneNo']; ?></h4>
	        	<h4> E-mail:    <?php echo $row['h_email']; ?></h4>
	        	<a href="index.php?page=hotel_editprofile&hotel_id=<?php echo $_SESSION['hotel_id'];?>" class="btn btn-primary">EDIT PROFILE</a>
	    	</div>
	  <!-- profile column end-->
	</div>

</div>
<hr>