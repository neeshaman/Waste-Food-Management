
<br><br>		
            <div class="span12">
			    
			    <div class="content">
                
                      <h2 style="background-color: red;"><?php if(isset($_SESSION['alrdmsg'])){ echo $_SESSION['alrdmsg'];unset($_SESSION['alrdmsg']);} ?></h2>
					<div class="module">
						
							<div class="module-head">
								<h3>NGO Management</h3>
							</div>
						
						<div class="module-body">
<br/>
                     <form class="form-horizontal row-fluid" method="post" action="index.php?page=ngo_action" enctype="multipart/form-data" >
                               <input type="hidden" name="action" value="<?php echo $action; ?>">
					        	
					       		<input type="hidden" name="ngo_id" value="<?php echo $row['n_id']; ?>">
								
					     			<div class="control-group">

						               <label class="control-label" style="color: black;" for="basicinput">Name
						               </label>

											<div class="controls">
												
											<input type="text" id="basicinput" name="name"  class="span5">
												
											</div>
									</div>
                                    
                                    <div class="control-group">
											<label class="control-label" for="basicinput" style="color:black;">Address</label>
											<div class="controls">
												<textarea class="span6" name="address" rows="5" cols="50">
										
												</textarea>
											</div>
									</div>

                                    <div class="control-group">
											<label class="control-label" for="basicinput" style="color: black;">City</label>
											<div class="controls">
												<select name="city_id">
	                                 			<option>Select City</option>
													<?php
														
												        $city=mysqli_query($con,"SELECT * FROM `city` WHERE `state_id` =15  ");
												        while($row=mysqli_fetch_array($city)){
												       ?>													
												<option value="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
													<?php } ?>
											</select>
									        </div>
									</div>

									<div class="control-group">
											<label class="control-label" for="basicinput" style="color: black;">Work Area</label>
											<div class="controls">
												<select name="city_id">
	                                 			<option>Select City</option>
															<?php
														
												        $city=mysqli_query($con,"SELECT * FROM `city` WHERE `state_id` =15  ");
												        while($row=mysqli_fetch_array($city)){
												       ?>													
												<option value="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
													<?php } ?>
											</select>
									        </div>
									</div>
                                     
                                    <div class="control-group">

						               <label class="control-label" style="color: black;" for="basicinput">PhoneNo						               </label>

											<div class="controls">
												
											<input type="text" id="basicinput" name="phone"  class="span4">
												
											</div>
									</div> 

									<div class="control-group">
										<label class="control-label" for="basicinput" style="color: black;">Email
										</label>
											<div class="controls">
											
											<input type="text" id="basicinput" name="email" class="span6" >
											
											</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="basicinput" style="color: black;">Password
										</label>
									
										<div class="controls">
										
										<input  type="password" class="span4" name="password"  id="input01">
										</div>
									</div>
	                                
	                                <div class="control-group">
										<label class="control-label" for="basicinput" style="color: black;">Profile
										</label>
										
											<div class="controls" style="color: black;">
												<input  type="file" class="span6" name="profile">
											</div>
									</div>
									
									<div class="control-group">
										
										<label class="control-label" style="color: black;">Status</label>
										
										<div class="controls">
											<label class="radio" style="color: black;">
												<input type="radio" name="status" id="optionsRadios1" value="active"  <?php if($row['n_status']=='active'){ ?> checked="" <?php }?>>Active
											</label> 
											<label class="radio" style="color: black;">					
                                            	<input type="radio" name="status" id="optionsRadios2" value="inactive" <?php if($row['n_status']=='inactive'){ ?> checked="" <?php }?>>Inactive
											</label> 
										</div>
									</div>

									<div class="control-group">
											<div class="controls">
												
												<button type="submit" name="submit" class="btn-info">   
													Save Changes
												</button>
												<button type="submit" class="btn-dark">Cancel</button>
											</div>

										</div>

									</form>
							</div>
						</div>

					</div><!--/.content-->
				</div>