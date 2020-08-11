<?php
	
	session_start();
	ob_start();	

	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="wfm";
	
	$con=mysqli_connect($hostname,$username,$password,$dbname);
	if(!$con)
	
	{
		 echo "Server is Not connected";
	}

?>