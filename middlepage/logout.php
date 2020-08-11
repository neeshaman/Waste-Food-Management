<?php
     if(isset($_SESSION['hotel_id']))
	{
		session_destroy();
		header("location:index.php");	
	}
	else if (isset($_SESSION['ngo_id'])) 
	{
			session_destroy();
        	header("location:index.php");
	}

 ?>