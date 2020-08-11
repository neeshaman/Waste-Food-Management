<?php
	@$admin_id=$_REQUEST['admin_id'];

	$sel="SELECT * FROM `admin` WHERE `a_id`='".$admin_id."' ";
	$qry=mysqli_query($con,$sel);
	$row=mysqli_fetch_array($qry);
		if(@$_REQUEST['admin_id']!='')
		{
			$action="update";
		}else
		{
			$action="insert";
		}

 ?>
<br><br>		
            <div class="span12">
			    
			    <div class="content">
                
                    <h2 style="background-color:gray;">
                      	<?php if(isset($_SESSION['alrdmsg'])){ echo $_SESSION['alrdmsg'];               unset($_SESSION['alrdmsg']);} ?>
                      </h2> 
                      <h2 style="background-color: red;"><?php if(isset($_SESSION['alrdmsg'])){ echo $_SESSION['alrdmsg'];unset($_SESSION['alrdmsg']);} ?></h2>
					<div class="module">
						
							<div class="module-head">
								<h3>Admin Management</h3>
							</div>
						
						<div class="module-body">
<br/>
                     <form class="form-horizontal row-fluid" method="post" action="index.php?page=admin_action" enctype="multipart/form-data" >
                               <input type="hidden" name="action" value="<?php echo $action; ?>">
					        	
					       		<input type="hidden" name="admin_id" value="<?php echo $row['a_id']; ?>">
								
					     			<div class="control-group">

						               <label class="control-label" style="color: black;" for="basicinput">Name
						               </label>

											<div class="controls">
												
											<input type="text" id="basicinput" name="name" value="<?php if(isset($_SESSION['name'])){echo $_SESSION['name'];unset($_SESSION['name']);}?> <?php echo $row['a_name'] ?>" class="span5">
												
											</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="basicinput" style="color: black;">Email
										</label>
											<div class="controls">
											
											<input type="text" id="basicinput" name="email" value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];unset($_SESSION['email']);}?> <?php echo $row['a_email'] ?>" class="span6" >
											
											</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="basicinput" style="color: black;">Password
										</label>
									
										<div class="controls">
										
										<input  type="password" class="span4" name="password" value="<?php if(isset($_SESSION['password'])){echo $_SESSION['password'];unset($_SESSION['password']);}?><?php echo $row['a_password'] ?>" id="input01">
										
										</div>
									</div>
	                                
	                                <div class="control-group">
										<label class="control-label" for="basicinput" style="color: black;">
											Profile
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