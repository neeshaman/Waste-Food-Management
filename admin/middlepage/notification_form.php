<?php
	@$notify_id=$_REQUEST['notify_id'];

	$sel="SELECT * FROM `notification` WHERE `notify_id`='".$notify_id."' ";
	$qry=mysqli_query($con,$sel);
	$row=mysqli_fetch_array($qry);
		if(@$_REQUEST['notify_id']!='')
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
								<h3>Notification Management</h3>
							</div>
						
						<div class="module-body">
<br/>
                     <form class="form-horizontal row-fluid" method="post" action="index.php?page=notification_action" enctype="multipart/form-data" >
                               <input type="hidden" name="action" value="<?php echo $action; ?>">
					        	
					       		<input type="hidden" name="notify_id" value="<?php echo $row['notify_id']; ?>">
								
					     			<div class="control-group">

						               <label class="control-label" style="color: black;" for="basicinput">Request Id
						               </label>

											<div class="controls">
												
											<input type="text" id="basicinput" name="request_id" value="<?php if(isset($_SESSION['request_id'])){echo $_SESSION['request_id'];unset($_SESSION['request_id']);}?><?php echo $row['r_id'] ?>" class="span3">
												
											</div>
									</div>
									<div class="control-group">

						               <label class="control-label" style="color: black;" for="basicinput">NGO Id
						               </label>

											<div class="controls">
												
											<input type="text" id="basicinput" name="ngo_id" value="<?php if(isset($_SESSION['ngo_id'])){echo $_SESSION['ngo_id'];unset($_SESSION['ngo_id']);}?><?php echo $row['n_id'] ?>" class="span3">
												
											</div>
									</div>
                                     <div class="control-group">
											<label class="control-label" for="basicinput" style="color:black;">Message Type</label>
											<div class="controls">
												<textarea class="span6" name="msgtype" rows="5"><?php if(isset($_SESSION['msgtype'])){echo $_SESSION['msgtype'];unset($_SESSION['msgtype']);}?><?php echo $row['msg_type'] ?></textarea>
											</div>
									</div>
                                	<div class="control-group">
										
										<label class="control-label" style="color: black;">Status</label>
										
										<div class="controls">
											<label class="radio" style="color: black;">
												<input type="radio" name="status" id="optionsRadios1" value="accept"  <?php if($row['status']=='accept'){ ?> checked="" <?php }?>>Accept
											</label> 
											<label class="radio" style="color: black;">
												<input type="radio" name="status" id="optionsRadios2" value="reject" <?php if($row['status']=='reject'){ ?> checked="" <?php }?>>Reject
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