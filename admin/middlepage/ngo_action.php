<?php
	
	$ngo_id=$_REQUEST['ngo_id'];
	$name=$_REQUEST['name'];
	$address=$_REQUEST['address'];
	$phone=$_REQUEST['phone'];
	$workarea=$_REQUEST['city_id'];
	$city=$_REQUEST['city_id'];
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	$status=$_REQUEST['status'];
	$profile=$_FILES['profile']['name'];
	$tmp_profile=$_FILES['profile']['tmp_name'];

				$ngo_id=$_REQUEST['ngo_id'];
				//echo "delete Code";
				$del="DELETE FROM `ngo` WHERE `n_id` ='".$ngo_id."'";

				$qry=mysqli_query($con,$del);
				if($qry)
				{
					echo "Delete Successfully";
					header("location:index.php?page=ngo_list");
				}else
				{
					echo "Data Is not iS delete";
				}
 ?>