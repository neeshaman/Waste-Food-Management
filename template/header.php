<!-- MIDDLE BAR -->
		<div class="middlebar">
			<div class="container">
				<div class="contact-info">
					
					<!-- INFO 1 -->
					<div class="box-icon-1">
						<div class="icon">
							<div class="fa fa-envelope-o"></div>
						</div>
						<div class="body-content">
							<div class="heading">Mail :</div>
							wfm@gmail.com
						</div>
					</div>
					<!-- INFO 2 -->
					<div class="box-icon-1">
						<div class="icon">
							<div class="fa fa-phone"></div>
						</div>
						<div class="body-content">
							<div class="heading">Call Us :</div>
							+91 99737 21245
						</div>
					</div>
					<!-- INFO 3 -->
					<div class="box-act">
						<?php 
							if((isset($_SESSION['ngo_id']) && $_SESSION['ngo_id']!='') || (isset($_SESSION['hotel_id']) && $_SESSION['hotel_id']!='') ){?>
								<a href="index.php?page=logout"  id="logout" class="btn btn-lg btn-primary">LOGOUT</a>
								
						<?php 	}else{ 

						 ?>
						<a href="index.php?page=visitor" class="btn btn-lg btn-primary">DONATE NOW</a>
						<a href="index.php?page=login" id="login" class="btn btn-lg btn-primary">LOGIN</a>
							<?php }?>
							</div>
					
				</div>
			</div>
		</div>
		 <!-- <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                </ul>
                            </li> -->