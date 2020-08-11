<?php

if(isset($_REQUEST['forget']))
{
    $email=$_REQUEST['email'];
	echo $select="SELECT `h_email` FROM `hotel` WHERE `h_email`='".$email."' UNION SELECT `n_email` FROM `ngo` WHERE `n_email`='".$email."' ";    
	$qry=mysqli_query($con,$select);
	$count=mysqli_num_rows($qry);
  	
  	if($count > 0)
  	{
  		$_SESSION['email']=$email;
  		header('location:index.php?page=forgetpassword');
  	}
  	else
  	{
    	echo "<script> var ans=alert('Email Does Not Exist!!')
                if(!ans)
                  window.location='index.php?page=email'</script>";
  	}  
}
?>
<!-- CONTENT START-->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="clearfix"></div>			
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading">
							Send  <span>E-Mail</span>
						</h2>
						<div class="margin-bottom-50"></div>
						<div class="content">
							<form action="" method="post" class="form-contact">
								<input type="hidden" name="action" value="insert">
								<div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="email" name="email" id="txtemail" class="form-control" placeholder="Enter Email" >		
										</div>
									</div>
								</div>
								<div class="form-group">
									<div id="success"></div>
									<input type="submit" value="submit"  name="forget" class="btn btn-primary">
									<input type="submit" value="cancel" class="btn btn-primary">
								</div>
							</form>
						 </div>
					</div>

				</div>
				
			</div>
		</div>
	</div>	
<!-- CONTENT END-->
