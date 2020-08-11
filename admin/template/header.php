<?php
    $a_id=$_SESSION['a_id'];
    $sel="SELECT * FROM `admin` WHERE `a_id`= '$a_id'"; 
    $qry=mysqli_query($con,$sel);
    $count=mysqli_num_rows($qry);
    $row=mysqli_fetch_assoc($qry);
?>
     <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php"><img src="images/WFM.jpg" style="height: 30px;"></a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                       
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <img src="<?php echo 'upload/admin/'.$row['a_profile']; ?>" height="30px" width="30px">
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php?page=admin_editprofile&admin_id=<?php echo $_SESSION['a_id'];?>">Edit Profile</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <div class="navbar-inner" style="background-color:#EAEAEA;">
                   <div class="container "  >
                      <div class="nav-collapse collapse navbar-inverse-collapse" >
                       
                        <ul class="nav" >
                         <!--  <li>
                            <a href=""> 
                            </a>
                          </li> -->
                          <li style=" margin-left:100px;">
                            <a href="index.php">
                                <i class="menu-icon icon-dashboard"></i>
                              Dashboard
                            </a>
                          </li>
                          <li >
                            <a href="index.php?page=admin_list">
                                <i class="menu-icon icon-user"></i>
                                Admin
                            </a>
                          </li>
                          <li>
                            <a href="index.php?page=hotel_list">
                                <i class="fas fa-hotel"></i>
                                Hotels
                            </a>
                          </li>
                          <li>
                            <a href="index.php?page=request_list">
                                <i class="fas fa-bell"></i>
                                 Request 
                            </a>
                          </li>
                          <li>
                            <a href="index.php?page=ngo_list">
                                <i class="fas fa-hand-holding-heart"></i> 
                                NGOs
                            </a>
                          </li>
                         <!--  <li>
                            <a href="index.php?page=feedback_list">
                                <i class="menu-icon icon-envelope"></i>
                                Feedback
                            </a>
                          </li> -->
                          <li>
                            <a href="index.php?page=visitor_list">
                                <i class="menu-icon icon-group"></i>
                                 Visitors
                            </a>
                          </li>
                          <li>
                            <a href="index.php?page=contact_list">
                                <i class="menu-icon icon-envelope"></i>
                                Contact
                            </a>
                          </li>
                               
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages
                                <b class="caret"></b>
                              </a>
                                <ul class="dropdown-menu">

                                    <li><a href="login.php">Login</a></li>  
                                    <li><a href="index.php?page=admin_profile&admin_id=<?php echo $_SESSION['a_id'];?>">Profile</a></li>
                                </ul>
                            </li>
                                <li ><a href="index.php?page=logout"><i class="menu-icon icon-signout"></i>Logout </a></li>

                        </ul>
                     </div>
                    <!-- /.nav-collapse -->
                </div>
                <!-- container -->
            </div>
            <!-- /navbar-inner -->
        </div>