<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>
			  	<a class="brand" href="index.html">
			  		WFM
			  	</a>
				<!-- <div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav pull-right">
						<li><a href="email.php">
							Forgot your password?
						</a></li>
					</ul>
				</div> --><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" action="index.php?page=login_action" onsubmit="return validatelogin();" method="post">
						<div class="module-head">
							<h3>Sign In</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
								     <input class="span12" type="text" name="email" id="txtemail" placeholder="Username">
								     <span id="req_email" class="text-danger" style="display: none;">*Enter Email</span>
 						<span id="valid_email" class="text-danger" style="display: none;">*Enter valid Email</span>
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password"  name="password" id="txtpassword" placeholder="Password">
									<span id="req_password" class="text-danger" style="display:none;">*Enter Password</span>
					<span id="valid_password" class="text-danger" style="display:none;">*Enter Valid Password</span>
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button name="login"  class="btn btn-primary pull-right">Login</button>
									<!-- <label class="checkbox">
										<input type="checkbox"> Remember me
									</label> -->
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->
	<div class="footer">
		<div class="container">
			<b class="copyright">&copy; 2019 WFM </b> All rights reserved.
		</div>
	</div>
	<!-- validation start -->
      <script type="text/javascript">
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
            password.focus();
           	return false;
           }
           else if(password.value.search(/^[a-zA-Z0-9!@#$%^&?]+$/))
			{
				document.getElementById('req_password').style.display='none';
				document.getElementById('valid_password').style.display='';
				password.focus();
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
   <!-- validation end -->
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>