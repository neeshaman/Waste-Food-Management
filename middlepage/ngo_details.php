<?php 
	$sel="SELECT  * FROM `ngo` WHERE `n_id`='".$_REQUEST['ngo_id']."' ";
	$qry=mysqli_query($con,$sel);
	$row=mysqli_fetch_assoc($qry);
?>
	<!-- BANNER -->
	<div class="section banner-page" data-background="images/banner-single.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">NGOs Detail</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">NGOs Detail</li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>
    <!-- BANNER END -->

	<!-- HOW TO HELP US -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="row">

					<div class="col-sm-8 col-md-8">

						<div class="img-date">
							
							<img src="<?php echo 'admin/upload/ngo/'.$row['n_profile']; ?>" alt="">
						</div>

						<div class="spacer-10"></div>

						<h2 class="color-secondary"><?php echo $row['n_name'] ?></h2>

						<div class="meta">
							<span class="location">
								<h4>ADDRESS:   <i class="fa fa-map-marker"></i> <?php echo $row['n_address'];?></h4>
								<h4>WORKAREA:  <?php echo $row['n_workarea']; ?></h4>
								<h4>CITY:   <?php echo $row['n_city']; ?></h4>
								<h4>PHONE NO.:   <?php echo $row['n_phoneNo']; ?></h4>
								<h4>E-MAIL:   <?php echo $row['n_email']; ?></h4>
							</span>
						</div>
							
						<div class="spacer-30"></div>
<!-- 
						<p class="uk18 color-secondary">Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent. Sed ut perspiciatis unde omnis iste natus error sit.</p>
						
						<p>Lorem ipsum dolor sit amet, onsectetur adipiscing cons ectetur nulla. Sed at ullamcorper risus. Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium.</p> -->

						
						<a href="index.php?page=request&ngo_id=<?php echo $_REQUEST['ngo_id'] ?>" class="btn btn-primary">REQUEST</a>
						
					</div>
				</div>
			</div>
		</div>
	</div>