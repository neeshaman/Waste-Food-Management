<!-- BANNER -->
	<div class="section banner-page" data-background="images/banner-single.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">NGO List</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">ngo</li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>
<!-- BANNER END -->	
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<!-- Items-->
					<?php 

					    $sel_hotel="SELECT  * FROM `hotel` ";
						$qry_hotel=mysqli_query($con,$sel_hotel);
						$row_hotel=mysqli_fetch_assoc($qry_hotel);
						
						$hotelcity=$row_hotel['h_city'];

				        $sel="SELECT  * FROM `ngo` WHERE `n_city`='$hotelcity' ";
						$qry=mysqli_query($con,$sel);
						while($row=mysqli_fetch_assoc($qry)){

					?>
					<div class="col-sm-4 col-md-4">
			            <div class="box-fundraising">
		              		<div class="media">
		              		<img src="<?php echo 'admin/upload/ngo/'.$row['n_profile']; ?>" alt="">
		              		</div>
		              		<div class="body-content">
		              			<p class="title"><a href="index.php?page=ngo_details&ngo_id=<?php echo $row['n_id']; ?>"><?php echo $row['n_name'] ?></a></p>
		              			<div class="meta">
									<span class="location"><i class="fa fa-map-marker"></i><?php echo $row['n_address'];?></span>
								</div>
		              			<div class="text">Phone No.:<?php echo $row['n_phoneNo'];?></div>
		              			<div class="text">City:<?php echo $row['n_city'];?></div>
		              			<div class="spacer-30"></div>
		              			<a href="index.php?page=ngo_details&ngo_id=<?php echo $row['n_id']; ?>" class="btn btn-primary">MAKE A REQUEST</a>
		              		</div>
			            </div>
			        </div>
			        <?php } ?>
				</div>
			</div>
		</div>
	</div>