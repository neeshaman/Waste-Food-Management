<?php 
include('../include/config.php'); 
/*login*/
if(!isset($_SESSION['a_id']) && $_SESSION['a_id']=='')
{
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/icon.png">
        <title>Admin</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    </head>
    <body style="background-color:#2d2b32;">

   <?php include('template/header.php');?>
           
        <div class="wrapper">
            <div class="container">
                <div class="row">
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
                    echo "Page Is Not Found";
                }    
         ?>    
                </div>
            </div>
       </div>
                   <?php include('template/footer.php');?>
        </div>
         <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
       <!-- <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> -->
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!--<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
    -->      
    </body>
