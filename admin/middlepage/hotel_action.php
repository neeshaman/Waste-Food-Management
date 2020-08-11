<?php
	$action=$_REQUEST['action'];
	
	$hotel_id=$_REQUEST['hotel_id'];
	$name=$_REQUEST['name'];
	$address=$_REQUEST['address'];
	$phone=$_REQUEST['phone'];
	$city=$_REQUEST['city_id'];
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	
	$profile=$_FILES['profile']['name'];
	$tmp_profile=$_FILES['profile']['tmp_name'];

	
				$hotel_id=$_REQUEST['hotel_id'];
				//echo "delete Code";
				$del="DELETE FROM `hotel` WHERE `h_id` ='".$hotel_id."'";

				$qry=mysqli_query($con,$del);
				if($qry)
				{
					echo "Delete Successfully";
					header("location:index.php?page=hotel_list");
				}else
				{
					echo "Data Is not iS delete";
				}
 ?>