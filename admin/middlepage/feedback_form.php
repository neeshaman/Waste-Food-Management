<?php
	@$f_id=$_REQUEST['f_id'];

	$sel="SELECT * FROM `feedback` WHERE `f_id`='".$f_id."' ";
	$qry=mysqli_query($con,$sel);
	$row=mysqli_fetch_array($qry);
		if(@$_REQUEST['f_id']!='')
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
								<h3>Feedback Management</h3>
							</div>
						
						<div class="module-body">
<br/>
                     <form class="form-horizontal row-fluid" method="post" action="index.php?page=feedback_action" enctype="multipart/form-data" >
                               <input type="hidden" name="action" value="<?php echo $action; ?>">
					        	
					       		<input type="hidden" name="f_id" value="<?php echo $row['f_id']; ?>">
								
					     			<div class="control-group">

						               <label class="control-label" style="color: black;" for="basicinput">Name
						               </label>

											<div class="controls">
												
											<input type="text" id="basicinput" name="name"  value="<?php if(isset($_SESSION['name'])){echo $_SESSION['name'];unset($_SESSION['name']);}?> <?php echo $row['name'] ?>" class="span5">
												
											</div>
									</div>
                                    
                                    <div class="control-group">
											<label class="control-label" for="basicinput" style="color:black;">Comments</label>
											<div class="controls">
												<textarea type="text" class="span6" name="comments" rows="5"><?php if(isset($_SESSION['comments'])){echo $_SESSION['comments'];unset($_SESSION['comments']);}?> <?php echo $row['comments'] ?></textarea>
											</div>
									</div>
	                                <div class="control-group">

						               <label class="control-label" style="color: black;" for="basicinput">Date
						               </label>

											<div class="controls">
												
											<input type="datetime-local" id="basicinput" name="date"  value="<?php if(isset($_SESSION['date'])){echo $_SESSION['date'];unset($_SESSION['date']);}?> <?php echo $row['f_date'] ?>" class="span4">
												
											</div>
									</div>
									
									<div class="control-group">
										
										<label class="control-label" style="color: black;">Status</label>
										
										<div class="controls">
											<label class="radio" style="color: black;">
												<input type="radio" name="status" id="optionsRadios1" value="checked"  <?php if($row['status']=='checked'){ ?> checked="" <?php }?>>Checked
											</label> 
											<label class="radio" style="color: black;">
												<input type="radio" name="status" id="optionsRadios2" value="not checked"<?php if($row['status']=='not checked'){ ?> checked="" <?php }?>> Not Checked
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