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
								<h3>Admin Edit Profile</h3>
							</div>
						
						<div class="module-body">
<br/>
                     <form class="form-horizontal row-fluid" method="post" action="index.php?page=admin_update&admin_id=<?php echo $_SESSION['a_id'];?>" enctype="multipart/form-data" >
                              
					     			<div class="control-group">

						               <label class="control-label" style="color: black;" for="basicinput">Name
						               </label>

											<div class="controls">
												
											<input type="text" id="basicinput" name="name"  value="<?php echo $row['a_name']; ?>" class="span5">
												
												</div>
										</div>

									<div class="control-group">
										<label class="control-label" for="basicinput" style="color: black;">Email
										</label>
											<div class="controls">
											
											<input type="text" id="basicinput"  value="<?php echo $row['a_email']; ?>" name="email"  class="span6" >
											
											</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="basicinput" style="color: black;">Password
										</label>
									
										<div class="controls">
										
										<input  type="password" class="span4" name="password"  value="<?php echo $row['a_password']; ?>" id="input01">
										
										</div>
									</div>
	                                
	                                <div class="control-group">
										<label class="control-label" for="basicinput" style="color: black;">Profile
										</label>
										
											<div class="controls" style="color: black;">
												<input  type="file" value="<?php if(isset($_FILES['profile']['tmp_name'])){echo $_FILES['profile']['tmp_name'];unset($_FILES['profile']['tmp_name']);}?> <?php echo $_FILES['profile']; ?>" class="span6" name="profile">
											</div>
									</div>

									<div class="control-group">
											<div class="controls">
												
												<button type="submit" name="submit" class="btn-info">   Save Changes
												</button>
												
												<button type="submit" class="btn-dark">Cancel</button>
											</div>

										</div>

									</form>
							</div>
						</div>

					</div><!--/.content-->
				</div>