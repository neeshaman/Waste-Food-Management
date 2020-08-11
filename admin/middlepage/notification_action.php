<?php
	$action=$_REQUEST['action'];
	$notify_id=$_REQUEST['notify_id'];
	$ngo_id=$_REQUEST['ngo_id'];
	$msgtype=$_REQUEST['msgtype'];
	$request_id=$_REQUEST['request_id'];
	$status=$_REQUEST['status'];
	
	switch ($action) 
	{
		case 'insert':

				$insert="INSERT INTO `notification` (`r_id`,`n_id`,`msg_type`,`status`)VALUES('$request_id','$ngo_id','$msgtype','$status')";
				$qry=mysqli_query($con,$insert);
					if($qry)
					{
						echo "data is Inserted";
						header("location:index.php?page=notification_list");
					
					}
					else
					{
					echo "Data Is Not Inserted";
					}
			break;
		case 'update':
					echo $update="UPDATE `notification` SET `r_id`='".$request_id."',`n_id`='".$ngo_id."',`msg_type`='".$msgtype."',`status`='".$status."' WHERE `notify_id`='".$notify_id."'  ";
					$qry=mysqli_query($con,$update);

					if($qry )
					{
						header("location:index.php?page=notification_list");
						//echo "Update okok";
					}else
					{
						echo "Update Not ";
					}

			break;
		case 'delete':
				$notify_id=$_REQUEST['notify_id'];
				echo "delete Code";
				$del="DELETE FROM `notification` WHERE `notify_id` ='".$notify_id."'";

				$qry=mysqli_query($con,$del);
				if($qry)
				{
					echo "Delete Successfully";
					header("location:index.php?page=notification_list");
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