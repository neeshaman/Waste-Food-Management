	<!-- BANNER START-->
	<div class="section banner-page" data-background="images/banner-single.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Request</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Request</li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>
	<!-- BANNER END -->
	<!-- CONTENT START-->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="clearfix"></div>
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading">
							Make A <span>Request</span>
						</h2>						
						<div class="margin-bottom-10"></div>
						<div class="content">
							<form action="index.php?page=request_action"  method="post" onsubmit="return validaterequest();" enctype="multipart/form-data" class="form-contact"  data-toggle="validator" novalidate="true">
								
								<input type="hidden" name="ngo_id" value="<?php echo $_REQUEST['ngo_id'] ?>">
								<input type="hidden" name="hotel_id" value="<?php echo $_SESSION['hotel_id'] ?>">
								
								<div class="row">
								    FOOD NAME:<div class="col-sm-6 col-md-5" style="margin-left:25px;">
										<div class="form-group">
											<input type="text" class="form-control" id="txtfoodname" name="foodname" placeholder="Enter Food Name">
											<div  id="req_name" class="text-danger" style="display: none;">*Field is Required</div>
										</div>
									</div>
								</div>
								<div class="row">
								    FOOD TYPE:<div class="col-sm-6 col-md-5" style="margin-left: 31px;">
										<div class="form-group">
											<input type="text" class="form-control" id="txtfoodtype" name="foodtype" placeholder="Enter Food Name">
											<div  id="req_type" class="text-danger" style="display: none;">*Field is Required</div>
										</div>
									</div>
								</div>
								<div class="row">
							FOOD QUANTITY:<div class="col-sm-6 col-md-5">
										<div class="form-group">
											  <input type="text" class="form-control" id="txtfoodqty" name="foodqty" placeholder="Enter Food Quantity">
											  <div  id="req_qty" class="text-danger" style="display: none;">*Field is Required</div>
										</div>
									</div>
								</div>
								<div class="row">
									COOKED TIME:<div class="col-sm-6 col-md-5" style="margin-left: 17px;">
										<div class="form-group">
											<input type="time" class="form-control" id="txtcookedtime" name="cookedtime">
										</div>
									</div>
								</div>
								<div class="row">
									PICKUP TIME:<div class="col-sm-6 col-md-5" style="margin-left: 25px;">
										<div class="form-group">
											<input type="time" class="form-control" id="txtpickuptime" name="pickuptime">
										</div>
									</div>
								</div>
								<div class="row">
									EXPIRY TIME:<div class="col-sm-6 col-md-5" style="margin-left: 28px;">
										<div class="form-group">
											<input type="time" class="form-control" id="txtexpirytime" name="expirytime">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div id="success"></div>
									<input type="submit" name="request" class="btn btn-primary" value="Request">
								</div>
							</form>
						 </div>
					</div>
				</div>
			</div>
		</div>
	</div>	

	<!-- validation -->
<script type="text/javascript">
    function validaterequest()
    {
      	var foodname=document.getElementById('txtfoodname');
      	var foodtype=document.getElementById('txtfoodtype');
      	var foodqty=document.getElementById('txtfoodqty');
      	var cookedtime=document.getElementById('txtcookedtime');
      	var pickuptime=document.getElementById('txtpickuptime');
      	var expirytime=document.getElementById('txtexpirytime');
     
		if(foodname.value=='')
		{
			document.getElementById('req_name').style.display='';
			return false;	
		}
		else{
			document.getElementById('req_name').style.display='none';
		}
		if(foodtype.value=='')
		{
			document.getElementById('req_type').style.display='';
			return false;	
		}
		else{
			document.getElementById('req_type').style.display='none';
		}
		if(foodqty.value=='')
		{
			document.getElementById('req_qty').style.display='';
			return false;	
		}
		else{
			document.getElementById('req_qty').style.display='none';
		}
	
   		return true;
    }
</script>
<!-- validation -->
