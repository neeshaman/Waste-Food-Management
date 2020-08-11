
<!--BANNER START-->
	<div class="section banner-page" data-background="images/banner-single.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Login</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
				    <li class="breadcrumb-item active"><a href="#">Login</a></li>
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
				<div class="row" >

					<div class="col-sm-6 col-md-6">
						
						<div class="image-with-title">
							<div class="image-title">
								<p>Are You A Hotel Or NGO?</p>
								<h3><a href="index.php?page=registration_hotel" style="color:white; text-decoration: underline;">Join Us Now</a></h3>
							</div>
							<div style="margin:30px 0px;">
								<img src="images/login1.png"  alt="" class="img-fluid">
							</div>	
						</div>

					</div>

                    <div class="col-md-2 col-sm-2" style="border-left: solid 1px;"></div>

					<div class="col-sm-4 col-md-4" style="background-color: rgba(255,112,0,0.7); margin: 50px 0px 150px 0px; box-shadow: 0px 0px 20px 0px;">
						<div class="margin-bottom-100"></div>
						<h2 class="section-heading" style="padding-left: 20px;">
							<span style="color: #fff;">Login Form</span>
						</h2>	
					 
					 <div class="margin-bottom-30"></div>
					<form action="index.php?page=login_action" method="post" enctype="multipart/form-data">										
						<div class="form-group col-md-12">
							<div class="form-group col-md-12" style="color:black; font-weight: bold;">
							 	<input type="radio" name="type" checked value="ngo">NGO
							 	<input type="radio" name="type"  value="hotel">HOTEL
							 	<!-- <div  id="req_type" style="color:black; display:none;">*Enter email</div> -->
							</div>
							<input type="text" class="form-control" placeholder="Enter Email" id="txtemail" name="email" required="">
							<div  id="req_email" style="color:black; display:none;">*Enter email</div>
							<div id="valid_email"  style="color:black; display:none;">*Enter valid Email</div>
						</div>
						<div class="form-group col-md-12">
							<input type="password" class="form-control" id="txtpassword" placeholder="Enter Password" name="password" required="">
							<div  id="req_password" style="color:black; display:none;">*Enter Password</div>
							<div id="valid_password"  style="color:black; display:none;">*Enter valid Password</div>
						</div>
						<div class="form-group col-md-12">
									<div id="success"></div>
									<button name="login" value="LOGIN" class="btn btn-primary">LOGIN</button>
						</div>
						<!-- <div class="form-group col-md-12">
							<a href="index.php?page=email" style="color:black; text-decoration: underline;">Forgot Password?</a>
						</div> -->
					</form>
					</div>

				</div>
			</div>
		</div>
	</div>
<!-- validation start -->
     <!--  <script type="text/javascript">
      	function validatelogin()
      	{
          var email=document.getElementById('txtemail');
          var password=document.getElementById('txtpassword');

           if(email.value=='')
           {
            document.getElementById('req_email').style.display='';
            document.getElementById('valid_email').style.display='none';
            /*email.focus();*/
          	return false;
           }
           else if(email.value.search(/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}.$/i))
			{
				document.getElementById('req_email').style.display='none';
				document.getElementById('valid_email').style.display='';
				/*email.focus();*/
				return false;
			}
			else
			{
				document.getElementById('req_email').style.display='none';
				document.getElementById('valid_email').style.display='none';
			}
           if(password.value=='')
           {
            document.getElementById('req_password').style.display='';
            document.getElementById('valid_password').style.display='none';
            //password.focus();
           	return false;
           }
           else if(password.value.search(/^[a-zA-Z0-9!@#$%^&?]+$/))
			{
				document.getElementById('req_password').style.display='none';
				document.getElementById('valid_password').style.display='';
				//password.focus();
				return false;
			}
           else
           {
           		document.getElementById('req_password').style.display='none';
           		document.getElementById('valid_password').style.display='none';
           }
           
          return true;
      	}
      </script>
 -->
   <!-- validation end -->
	