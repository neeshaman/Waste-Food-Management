<?php

	$action=$_REQUEST['action'];
	$request_id=$_REQUEST['request_id'];
	$hotel_id=$_REQUEST['hotel_id'];
	$ngo_id=$_REQUEST['ngo_id'];
	$date=$_REQUEST['date'];
	$foodname=$_REQUEST['foodname'];
	$foodtype=$_REQUEST['foodtype'];
	$foodqty=$_REQUEST['foodqty'];
	$cookedtime=$_REQUEST['cookedtime'];
	$pickuptime=$_REQUEST['pickuptime'];
	$expirytime=$_REQUEST['expirytime'];

	switch ($action) 
	{
		case 'insert':
				$insert="INSERT INTO `request` (`h_id`,`ngo_id`,`r_date`,`food_name`,`food_type`,`food_qty`,`cooked_time`,`pickup_time`,`expiry_time`,`status`)VALUES('$hotel_id','$ngo_id','$date','$foodname','$foodtype','$foodqty','$cookedtime','$pickuptime','$expirytime','$status')";
				$qry=mysqli_query($con,$insert);
					if($qry)
					{
						echo "data is Inserted";
						header("location:index.php?page=request_list");
					
					}
					else
					{
					echo "Data Is Not Inserted";
				    }
			break;
		case 'update':
					$update="UPDATE `request` SET `h_id`='".$hotel_id."',`r_date`='".$date."',`food_name`='".$foodname."',`food_type`='".$foodtype."',`food_qty`='".$foodqty."',`cooked_time`='".$cookedtime."',`pickup_time`='".$pickuptime."',`expiry_time`='".$expirytime."' WHERE `r_id`='".$request_id."'  ";
					$qry=mysqli_query($con,$update);

					if($qry)
					{
						header("location:index.php?page=request_list");
						echo "Data Is Updated";
					}else
					{
						echo "Update Not ";
					}

			break;
		case 'delete':
				$request_id=$_REQUEST['request_id'];
				echo "delete Code";
				$del="DELETE FROM `request` WHERE `r_id` ='".$request_id."'";

				$qry=mysqli_query($con,$del);
				if($qry)
				{
					echo "Delete Successfully";
					header("location:index.php?page=request_list");
				}else
				{
					echo "Data Is not iS delete";
				}
			break;
		default:
				echo "Action Not Found";
			break;
	}

 ?>