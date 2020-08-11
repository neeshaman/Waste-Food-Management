<?php
	$action=$_REQUEST['action'];
	
	$v_id=$_REQUEST['v_id'];
	$name=$_REQUEST['name'];
	$address=$_REQUEST['address'];
	$city=$_REQUEST['city_id'];
	$phone=$_REQUEST['phone'];
	$email=$_REQUEST['email'];
    $date=$_REQUEST['date'];
    $foodqty=$_REQUEST['foodqty'];


	
				$v_id=$_REQUEST['v_id'];
				echo "delete Code";
				$del="DELETE FROM `visitor` WHERE `v_id` ='".$v_id."'";

				$qry=mysqli_query($con,$del);
				if($qry)
				{
					echo "Delete Successfully";
					header("location:index.php?page=visitor_list");
				}else
				{
					echo "Data Is not iS delete";
				}
		

 ?>