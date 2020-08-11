<!--BANNER START-->
	<div class="section banner-page" data-background="images/banner-single.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Visitor</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
				    <li class="breadcrumb-item active"><a href="#">Visitor</a></li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>
<!-- BANNER END -->
<!-- CONTENT START-->
<div class="section">
		<div class="content-wrap-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-5">
						<div class="image-with-title">
							<div class="image-title">
								<p>If you are a hotel</p>
								<h3><a href="index.php?page=registration_hotel" style="color:white; text-decoration: underline;">Join Us Now</a></h3>
							</div>
							<img src="images/volunteer.jpg" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<h2 class="section-heading">
							<span>Make A Donation</span> Today
						</h2>	
					<form action="index.php?page=visitor_action" method="post" onclick="return validatevisitor();" enctype="multipart/form-data" data-toggle="validator" novalidate="true">
															
						<div class="form-group col-md-9">
							<input type="text" class="form-control" placeholder="Enter Name" id="txtname" name="name" required="">
							<div  id="req_name" class="text-danger" style="display: none;">*Enter Name</div>
							<div id="valid_name" class="text-danger" style="display:none;">*Enter valid Name</div>
						</div>
						<div class="form-group col-md-6">
							<input type="text" class="form-control" id="txtcontact" placeholder="Enter Phone No" name="phone" required="">
							<div  id="req_contact" class="text-danger" style="display: none;">*Enter Phone Number</div>
							<div id="valid_contact" class="text-danger" style="display:none;">*Enter valid Phone Number</div>
							<div id="ten_contact" class="text-danger" style="display:none;">*Enter valid length Phone Number </div>
						</div>
						<div class="form-group col-md-9">
							<input type="email" class="form-control" id="txtemail" placeholder="Enter E-mail" name="email" required="">
							<div  id="req_email" class="text-danger" style="display: none;">*Enter Email</div>
							<div id="valid_email" class="text-danger" style="display:none;">*Enter valid Email</div>
						</div>
						<div class="form-group col-md-9">
							<textarea name="address" id="txtaddress" class="form-control" rows="6" placeholder="Enter Your Address"></textarea>
							<div  id="req_add" class="text-danger" style="display: none;">*Enter Address</div>
						</div>	
						<div class="form-group col-md-7">	
							<select name="city_id" id="txtcity" class="form-control">
                     			<option>Select City</option>	
									<?php									
								        $city=mysqli_query($con,"SELECT * FROM `city` WHERE `state_id` =15  ");
								        while($row=mysqli_fetch_array($city)){
								    ?>													
								<option value="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
									<?php } ?>
							</select>
							<div  id="req_city" class="text-danger" style="display: none;">*Select City</div>
					    </div>
						<div class="form-group col-md-6">	
							<label>Select Date</label>
							<input type="date" class="form-control" name="date" id="txtdate">
					    </div>
					    <div class="form-group col-md-6">
							<input type="text" class="form-control" id="txtfoodname" placeholder="Enter Food name" name="foodname" required="">
							<div  id="req_foodname" class="text-danger" style="display:none;">*Enter Food name</div>
						</div>
					    <div class="form-group col-md-6">
							<input type="text" class="form-control" id="txtqty" placeholder="Enter Food Quantity" name="foodqty" required="">
							<div  id="req_qty" class="text-danger" style="display:none;">*Enter Food Quantity</div>
						</div>
						<div class="form-group col-md-6">
							<div id="success"></div>
							<input type="submit" value="SUBMIT" class="btn btn-primary">
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- validation start-->
<script type="text/javascript">
    function validatevisitor()
    {
      	var name=document.getElementById('txtname');
      	var email=document.getElementById('txtemail');
      	var contact=document.getElementById('txtcontact');
      	var address=document.getElementById('txtaddress');
      	var city=document.getElementById('txtcity');
      	var date=document.getElementById('txtdate');
      	var qty=document.getElementById('txtqty');
     
		if(name.value=='')
		{
			//alert('Enter Name');
			document.getElementById('req_name').style.display='';
			document.getElementById('valid_name').style.display='none';			
			return false;	
		}
		else if(name.value.search(/^[A-Za-z ]+$/))
		{
			document.getElementById('req_name').style.display='none';
			document.getElementById('valid_name').style.display='';
			return false;
		}
		else
		{
			document.getElementById('req_name').style.display='none';
			document.getElementById('valid_name').style.display='none';
		}
	
		if(contact.value=='')
		{
			document.getElementById('req_contact').style.display='';
			document.getElementById('valid_contact').style.display='none';
			document.getElementById('ten_contact').style.display='none';		 	
			return false;
		}
		else if(contact.value.search(/^[0-9]+$/))
		{
			document.getElementById('req_contact').style.display='none';
			document.getElementById('valid_contact').style.display='';
			document.getElementById('ten_contact').style.display='none';
			return false;
		}
		else if(contact.value.length < 10)
		{ //alert('hi');
			document.getElementById('req_contact').style.display='none';
			document.getElementById('valid_contact').style.display='none';
			document.getElementById('ten_contact').style.display='';
			return false;
		}
		else
		{
			document.getElementById('req_contact').style.display='none';
			document.getElementById('valid_contact').style.display='none';
			document.getElementById('ten_contact').style.display='none';
		}
		if(email.value=='')
        {
            document.getElementById('req_email').style.display='';
            document.getElementById('valid_email').style.display='none';
          	return false;
        }
        else if(email.value.search(/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}.$/i))
		{
			document.getElementById('req_email').style.display='none';
			document.getElementById('valid_email').style.display='';
			return false;
		}
		else
		{
			document.getElementById('req_email').style.display='none';
			document.getElementById('valid_email').style.display='none';
		}
		if(address.value=='')
		{
			//alert('Enter Name');
			document.getElementById('req_add').style.display='';
			return false;	
		}
		else
		{
			document.getElementById('req_add').style.display='none';
		}
		if(qty.value=='')
		{
			//alert('Enter Name');
			document.getElementById('req_qty').style.display='';
			return false;	
		}
		else
		{
			document.getElementById('req_qty').style.display='none';
		}
   		return true;
    }
</script>
<!-- validation end-->