<?php

 include('../include/config.php'); 
  if(isset($_REQUEST['forget']))
  {
    $email=$_REQUEST['email'];
    $select="SELECT * FROM `admin` WHERE `a_email`='".$email."' ";
    $qry=mysqli_query($con,$select);
    $count=mysqli_num_rows($qry);
    if($count > 0)
    {
      $_SESSION['email']=$email;
      header('location:forgetpassword.php');
    }
    else{
     echo "<script> var ans=alert('Email Does Not Exist!!')
                if(!ans)
                  window.location='email.php'</script>";
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
              <h3>Send Email</h3>
            </div>
            <div class="module-body">
              <div class="control-group">
                <div class="controls row-fluid">
                     <input class="span12" type="text" name="email"  placeholder="Enter Email">              
                </div>
              </div>
              
            </div>
            <div class="module-foot">
              <div class="control-group">
                <div class="controls clearfix">
                  
                  <button name="forget"  class="btn btn-primary ">Submit</button>
                 <button name="cancel"  class="btn btn-primary ">Cancel</button>
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