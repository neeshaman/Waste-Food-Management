<?php
	@$request_id=$_REQUEST['request_id'];

	$sel="SELECT * FROM `request` WHERE `r_id`='".$request_id."' ";
	$qry=mysqli_query($con,$sel);
	$row=mysqli_fetch_array($qry);
		if(@$_REQUEST['request_id']!='')
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
                
					<div class="module">
						
							<div class="module-head">
								<h3>Request Management</h3>
							</div>
						
						<div class="module-body">
<br/>
                            <form class="form-horizontal row-fluid"  method="post" action="index.php?page=request_action"  enctype="multipart/form-data">                                                    								     	<input type="hidden" name="action" value="insert">

				                <input type="hidden" name="request_id" value="<?php echo $row['r_id'];?>">
				                
                                  <div class="control-group">
										<label class="control-label" for="basicinput" style="color: black;">Hotel ID
										</label>
											<div class="controls">
											
                                               <input type="text" name="hotel_id" value="<?php if(isset($_SESSION['hotel_id'])){echo $_SESSION['hotel_id'];unset($_SESSION['hotel_id']);}?> <?php echo $row['h_id'] ?>">
								    
											</div>
									</div>
					     			

									<div class="control-group">
										<label class="control-label" for="basicinput" style="color: black;">Food Name
										</label>
											<div class="controls">
											
											<input type="text" id="basicinput" name="foodname" value="<?php if(isset($_SESSION['foodname'])){echo $_SESSION['foodname'];unset($_SESSION['foodname']);}?> <?php echo $row['food_name'] ?>" class="span4" >
											
											</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="basicinput" style="color: black;">Food Type
										</label>
									
										<div class="controls">
										
										<input  type="text" class="span4" name="foodtype" value="<?php if(isset($_SESSION['foodtype'])){echo $_SESSION['foodtype'];unset($_SESSION['foodtype']);}?> <?php echo $row['food_type'] ?>" id="input01">
										
										</div>
									</div>
	                                
	                                <div class="control-group">
										<label class="control-label" for="basicinput" style="color: black;">Food Quantity
										</label>
										
											<div class="controls" style="color: black;">
												<input  type="text" class="span4" name="foodqty" value="<?php if(isset($_SESSION['foodqty'])){echo $_SESSION['foodqty'];unset($_SESSION['foodqty']);}?> <?php echo $row['food_qty'] ?>">
											</div>
									</div>
									<div class="control-group">

						               <label class="control-label" style="color: black;" for="basicinput">Date
						               </label>

											<div class="controls">
												
											<input type="datetime-local" id="basicinput" name="date" value="<?php if(isset($_SESSION['date'])){echo $_SESSION['date'];unset($_SESSION['date']);}?> <?php echo $row['r_date'] ?>" class="span4">
												
											</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="basicinput" style="color: black;">Cooked Time
										</label>
										
											<div class="controls" style="color: black;">
												<input  type="time" class="span4"  value="<?php if(isset($_SESSION['cookedtime'])){echo $_SESSION['cookedtime'];unset($_SESSION['cookedtime']);}?> <?php echo $row['cooked_time'] ?>" name="cookedtime">
											</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="basicinput" style="color: black;">PickUp Time
										</label>
										
											<div class="controls" style="color: black;">
												<input  type="time" class="span4" value="<?php if(isset($_SESSION['pickuptime'])){echo $_SESSION['pickuptime'];unset($_SESSION['pickuptime']);}?> <?php echo $row['pickup_time'] ?>" name="pickuptime">
											</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="basicinput" style="color: black;">Expiry Time
										</label>
										
											<div class="controls" style="color: black;">
												<input  type="time" class="span4" value="<?php if(isset($_SESSION['expirytime'])){echo $_SESSION['expirytime'];unset($_SESSION['expirytime']);}?> <?php echo $row['expiry_time'] ?>" name="expirytime">
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