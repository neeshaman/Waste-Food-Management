<?php
	 if(isset($_REQUEST['status']) && $_REQUEST['status']!='')
        {
               	$r_id=$_REQUEST['request_id'];
                $status=$_REQUEST['status']; 
                        
                $update="UPDATE `request` SET `status`='".$status."'  WHERE `r_id`='".$r_id."'  ";
                $qry=mysqli_query($con,$update);
        }
?>
	<!-- BANNER -->
	<div class="section banner-page" data-background="images/banner-single.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Notification</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Vistors Request</li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>
	<!-- CONTENT -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<?php 
						$sel="SELECT  * FROM `request` WHERE `ngo_id`='".$_SESSION['ngo_id']."' ";
						$qry=mysqli_query($con,$sel);
						while($row=mysqli_fetch_assoc($qry)){
						
						/*$sel_hotel="SELECT  * FROM `hotel` WHERE `h_id`='".$row['h_id']."' ";
						$qry_hotel=mysqli_query($con,$sel_hotel);
						$row_hotel=mysqli_fetch_assoc($qry_hotel);*/

						$sel_visitor="SELECT  * FROM `visitor` WHERE `v_id`='".$row['v_id']."' ";
						$qry_visitor=mysqli_query($con,$sel_visitor);
						$row_visitor=mysqli_fetch_assoc($qry_visitor);	
					 ?>
					<div class="col-sm-6 col-md-4">
						<!-- BOX 1 -->					
						<div class="box-news-1">
							
							<div class="body">
								<h3 class="color-secondary"><?php echo $row_visitor	['v_name'] ?></h3>
								<div class="meta">
									<span class="comments">

								

									<h4><i class="fa fa-map-marker"></i><?php echo $row_visitor	['v_address'];?>
									</h4>
									<h4>City:  <?php echo $row_visitor['v_city'];?></h4>
									
									<h4>Food Quantity:  <?php echo $row_visitor['v_foodqty'];?></h4>
									<h4>Request Date:  <?php echo $row_visitor	['v_date'];?></h4>
									</span>
								</div>
							</div>
						</div>
						<div class="form-group col-md-12" style="color:black; font-weight: bold;">		

							
                                       <!--  <form action="" method="post">
                                            <div>
                                            <input type="" name="request_id" value="<?php echo $row['r_id']; ?>">
                                            <input type="submit" name="status" value="accept" class="btn btn-info"> ||
                                            <input type="submit" name="status" value="reject" class="btn btn-danger">
                                            </div>
                                        </form> -->
                                            <strong>Request Accepted</strong>
                                        
                                            <!-- <strong >Request Rejected</strong>
                                     -->
							 	</form>
						</div>						    
					</div>
					  <?php } ?>
				</div>

			</div>
		</div>
	</div>	