<br><br>		
            <div class="span12">
			    
			    <div class="content">
                
					<div class="module">
						
							<div class="module-head">
								<h3>Visitor Management</h3>
							</div>
						
						<div class="module-body">
<br/>
                     <form class="form-horizontal row-fluid" method="post" action="index.php?page=visitor_action" enctype="multipart/form-data" >
                               <input type="hidden" name="action" value="<?php echo $action; ?>">
					        	
					       		<input type="hidden" name="v_id" value="<?php echo $row['v_id']; ?>">
								
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
												<textarea class="span6" name="address" rows="5"></textarea>
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

						               <label class="control-label" style="color: black;" for="basicinput">PhoneNo						               </label>

											<div class="controls">
												
											<input type="text" id="basicinput" name="phone" class="span4">
												
											</div>
									</div> 

									<div class="control-group">
										<label class="control-label" for="basicinput" style="color: black;">Email
										</label>
											<div class="controls">
											
											<input type="text" id="basicinput" name="email"  class="span6" >
											
											</div>
									</div>

									<div class="control-group">

						               <label class="control-label" style="color: black;" for="basicinput">Date
						               </label>

											<div class="controls">
												
											<input type="datetime-local" id="basicinput" name="date" class="span4">
												
											</div>
									</div>

                                    <div class="control-group">
										<label class="control-label" for="basicinput" style="color: black;">Food Quantity
										</label>
											<div class="controls">
											
											<input type="text" id="basicinput" name="foodqty" class="span5" >
											
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