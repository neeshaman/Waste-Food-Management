<?php
include('../include/config.php');
  if(isset($_REQUEST['submit']) && $_REQUEST['submit']!='')
  {
    //echo "hi";
    $password=$_REQUEST['newpassword'];
    //echo "Update code";
    $forgetpassword="UPDATE `admin` SET `a_password`='".$password."' WHERE `a_email`='".$_SESSION['email']."' ";
    $qry=mysqli_query($con,$forgetpassword);
      if($qry){
        echo "<script> var ans=alert('Password Changed Successfully!!')
                if(!ans)
                	window.location='login.php'</script>";
      }else {
        echo "<script> var ans=alert('Try Again!!')
                if(!ans)
                	window.location='forgetpassword.php'</script>";
      }
  }
?>
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
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
  <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="module module-login span4 offset4">
          <form class="form-vertical" action="" method="post">
            <div class="module-head">
              <h3>Forget Password</h3>
            </div>
            <div class="module-body">
              <div class="control-group">
                <div class="controls row-fluid">
                     <input class="span12" type="text" name="email" id="txtemail" value="<?php if(isset($_SESSION['email']) && $_SESSION['email']!='' ){echo $_SESSION['email']; } ?>" placeholder="Enter Email">
                </div>
              </div>
              <div class="control-group">
                <div class="controls row-fluid">
                  <input class="span12" type="password"  name="newpassword" placeholder="Enter New Password">
                </div>
              </div>
               <div class="control-group">
                <div class="controls row-fluid">
                  <input class="span12" type="password" placeholder="Confirm Password">
                </div>
              </div>
            </div>
            <div class="module-foot">
              <div class="control-group">
                <div class="controls clearfix">                  
                  <input type="submit" value="submit" name="submit" class="btn btn-primary">
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
  <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>