	<!-- NAVBAR SECTION -->
		<div class="navbar-main">
			<div class="container">
			    <nav class="navbar navbar-expand-lg">
			        <a class="navbar-brand" href="index.php">
						<img src="images/WFM.jpg" alt="" style="height: 50px;"/>
					</a>
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="navbar-toggler-icon"></span>
			        </button>
			        <div class="collapse navbar-collapse" id="navbarNavDropdown">
			            <ul class="navbar-nav">
			                <li class="nav-item">
			                    <a class="nav-link" href="index.php">HOME</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="index.php?page=about">ABOUT US</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="index.php?page=hungerspot">HUNGER SPOTS</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="index.php?page=gallery">GALLERY</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="index.php?page=contact">CONTACT US</a>
			                </li>
			                

			            <?php 
							if((isset($_SESSION['ngo_id']) && $_SESSION['ngo_id']!='') ){
						?>
							<li class="nav-item">
			                    <a class="nav-link" href="index.php?page=notification">PICKUP REQUEST</a>
			                </li>
			               
			                <li class="nav-item">
			                    <a class="nav-link" href="index.php?page=ngo_profile&ngo_id=<?php echo $_SESSION['ngo_id'];?>">PROFILE</a>
			                </li>
			            <?php } 
							else if((isset($_SESSION['hotel_id']) && $_SESSION['hotel_id']!='')){
						?>  
			                <li class="nav-item">
			                    <a class="nav-link" href="index.php?page=ngo_list">NGO LIST</a>
			                </li>
			               
                      		<li class="nav-item">
			                    <a class="nav-link" href="index.php?page=hotel_profile&hotel_id=<?php echo $_SESSION['hotel_id'];?>">PROFILE</a>
			                </li>
			               
			                <?php }else{ ?>

			          
			                <li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          REGISTER
						        </a>
			                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			                    	<a class="dropdown-item" href="index.php?page=registration_hotel">HOTELS</a>
	          						<a class="dropdown-item" href="index.php?page=registration_ngo">NGO</a>
							    </div>
			                </li>
			                

			            <?php }?>
			            
			            </ul>
			        </div>
			      
			    </nav> <!-- -->

			</div>
		</div>
  