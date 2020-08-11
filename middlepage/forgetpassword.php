<?php
  if(isset($_REQUEST['submit']) && $_REQUEST['submit']!=''  )
  {
    $password=$_REQUEST['newpassword'];
    //echo "Update code";	
    // $select_hotel="SELECT * FROM `hotel` WHERE `h_email`='".$email."' ";	
    //$fgpassword="UPDATE `ngo` SET `n_password`='".$password."' WHERE `n_email`='".$_SESSION['email']."' ";
    $forgetpassword="UPDATE `hotel` SET `h_password`='".$password."' WHERE `h_email`='".$_SESSION['email']."' ";
   
    $forpassword="UPDATE `ngo` SET `n_password`='".$password."' WHERE `n_email`='".$_SESSION['email']."' ";
    $qry=mysqli_query($con,$forgetpassword);
      if($qry){

    
        echo "<script> var ans=alert('Password Changed Successfully!!')
                if(!ans)
                	window.location='index.php'</script>";
      }else {
        echo "<script> var ans=alert('Try Again!!')
                if(!ans)
                	window.location='index.php?page=forgetpassword'</script>";
      }
      $qry_ngo=mysqli_query($con,$forpassword);
      if($qry_ngo){

    
        echo "<script> var ans=alert('Password Changed Successfully!!')
                if(!ans)
                	window.location='index.php'</script>";
      }else {
        echo "<script> var ans=alert('Try Again!!')
                if(!ans)
                	window.location='index.php?page=forgetpassword'</script>";
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
							Forget<span>Password</span>
						</h2>
						<div class="margin-bottom-50"></div>
						<div class="content">
							<form action="" method="post" class="form-contact">
								<div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="email" name="email" id="txtemail" value="<?php if(isset($_SESSION['email']) && $_SESSION['email']!='' ){echo $_SESSION['email']; } ?>" class="form-control" readonly="">					
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="password" name="newpassword" class="form-control" placeholder="Enter New Password" id="txtname">	
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="password" name="comformpassword" id="txtemail" class="form-control" placeholder="Enter Confirm Password">				
										</div>
									</div>
								</div>
								<div class="form-group">
									<div id="success"></div>
									<input type="submit" value="submit" name="submit" class="btn btn-primary">
								</div>
							</form>
						 </div>
					</div>
				</div>		
			</div>
		</div>
	</div>	
<!-- CONTENT END-->
