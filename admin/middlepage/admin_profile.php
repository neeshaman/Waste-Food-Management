<?php
$admin_id=$_SESSION['a_id'];
$select="SELECT * FROM `admin` WHERE `a_id`='$admin_id' ";
$qry=mysqli_query($con,$select);
$count=mysqli_num_rows($qry);
$row=mysqli_fetch_assoc($qry);
?>
<div class="span12">
			    
			    <div class="content">
                
                  
					<div class="module">
						
							<div class="module-head">
								<h3>Admin Profile</h3>
							</div>
						
						<div class="module-body">
<br/>
                     <form class="form-horizontal row-fluid" method="post" action="index.php?page=admin_update&admin_id=<?php echo $_SESSION['a_id'];?>" enctype="multipart/form-data" >
                              
					     			<div class="control-group">

						               <label class="control-label" style="color: black;" for="basicinput">Name:  <?php echo $row['a_name']; ?>
						               </label>

											<div class="controls">	
												</div>
										</div>

									<div class="control-group">
										<label class="control-label" for="basicinput" style="color: black; margin-left: 68px;">Email:   <?php echo $row['a_email']; ?>
										</label>
											<div class="controls">
											
											</div>
									</div>
	                                <div class="control-group">
										<label class="control-label" for="basicinput" style="color: black; margin-left: 10px;">Profile:
											<img style="height: 50px;" src="<?php echo 'upload/admin/'.$row['a_profile'];?>" class="avatar img-circle" alt="avatar">
										</label>
										
											<div class="controls" style="color: black;">
											</div>
									</div>

									<div class="control-group">
											<div class="controls">
												
												<a href="index.php?page=admin_editprofile&admin_id=<?php echo $_SESSION['a_id'];?>" class="btn btn-primary">EDIT PROFILE</a>
												
											</div>

										</div>

									</form>
							</div>
						</div>

					</div><!--/.content-->
				</div>