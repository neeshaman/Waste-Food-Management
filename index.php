<?php include('include/config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>    
	<!-- Basic Page Needs-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Waste Food Management</title>
	<!--Favicons-->
	
	<link rel="shortcut icon" href="images/favicon.ico">
	
	<!-- CSS VENDOR-->
	<link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/vendor/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/bootstrap-dropdownhover.min.css">
	
	<!-- Custom Stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/style.css" />
   
</head>

<body>

	<!-- LOAD PAGE -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	
	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	<!-- HEADER -->
    <div class="header header-1">

	    <!-- topheader -->
	    <?php //include('template/topheader.php');?>
	    
	    <!-- header -->
	    <?php include('template/header.php');?>

	    <!-- nav bar -->
	    <?php include('template/nav.php');?>
	</div>	
	<!-- home  -->
	<?php 
                @$page=$_REQUEST['page'];
                if($page=='' && basename($_SERVER['PHP_SELF'])=='index.php')
                {
                    $page='home';
                }
                if($page!='' && file_exists("middlepage/".$page.'.php') )
                {
                include("middlepage/".$page.'.php');
                }else{
                    header("location:index.php?page=error");
                }    
?>   
	<!-- FOOTER SECTION -->
	<?php include('template/footer.php');?>
	
	<script src="js/vendor/modernizr.min.js"></script> 
	<!-- JS VENDOR -->
	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/vendor/owl.carousel.js"></script>
	<script src="js/vendor/jquery.magnific-popup.min.js"></script>

	<!-- SENDMAIL -->
 	<script src="js/vendor/validator.min.js"></script> 
	 <script src="js/vendor/form-scripts.js"></script> 
	<script src="js/script.js"></script>

</body>
</html>