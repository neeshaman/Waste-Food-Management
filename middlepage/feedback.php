<!--BANNER START-->
	<div class="section banner-page" data-background="images/banner-single.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Feedback</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
				    <li class="breadcrumb-item active"><a href="#">Feedback</a></li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>
<!-- BANNER END -->


<!-- CONTENT START-->
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading">
							Send a <span>Feedback</span>
						</h2>
						
						<div class="margin-bottom-50"></div>

						<div class="content">
							<form action="index.php?page=hotelfeedback_action" method="post" class="form-contact"  onclick="return validatecontac();">
								<div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Enter Name" name="name"  id="txtname">
											<div  id="req_name" class="text-danger" style="display: none;">*Enter Name</div>
											<div id="valid_name" class="text-danger" style="display:none;">*Enter valid Name</div>
										</div>
									</div>
									
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" name="subject" class="form-control"  placeholder="Subject">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									
								</div>
								<div class="form-group">
									 <textarea name="message" class="form-control" rows="6" id="txtmsg" placeholder="Enter Your Message"></textarea>
									<div  id="req_msg" class="text-danger" style="display: none;">*Enter Message</div>
								</div>
								<div class="form-group">
									<div id="success"></div>
									<input type="submit" value="SEND MESSAGE" class="btn btn-primary">
								</div>
							</form>
						 </div>
					</div>

				</div>
				
			</div>
		</div>
	</div>	
<!-- CONTENT END-->

<!-- CTA -->
	<div class="section cta">
		<div class="content-wrap-20">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="cta-1">
			              	<div class="body-text">
			                	<h3>Join your hand with us for a better life and beautiful future.</h3>
			              	</div>
			              	<div class="body-action">
			                	<a href="index.php?page=visitor" class="btn btn-secondary">DONATE NOW</a>
			              	</div>
			            </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- cta end -->
<!-- validation -->
<script type="text/javascript">
    function validatecontact()
    {
      	var name=document.getElementById('txtname');
      	var email=document.getElementById('txtemail');
      	var contact=document.getElementById('txtcontact');
      	var msg=document.getElementById('txtmsg');
     
		if(name.value=='')
		{
			//alert('Enter Name');
			document.getElementById('req_name').style.display='';
			document.getElementById('valid_name').style.display='none';
			name.focus();
			return false;	
		}
		else if(name.value.search(/^[A-Za-z ]+$/))
		{
			document.getElementById('req_name').style.display='none';
			document.getElementById('valid_name').style.display='';
			name.focus();
			return false;
		}
		else
		{
			document.getElementById('req_name').style.display='none';
			document.getElementById('valid_name').style.display='none';
		}
		
	    if(msg.value=='')
		{
			//alert('Enter Name');
			document.getElementById('req_msg').style.display='';
			msg.focus();
			return false;	
		}
	
   		return true;
    }
</script>
<!-- validation -->
