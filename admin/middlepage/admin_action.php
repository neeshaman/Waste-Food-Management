<?php

	$action=$_REQUEST['action'];	
	$admin_id=$_REQUEST['admin_id'];
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	$profile=$_FILES['profile']['name'];
	$tmp_profile=$_FILES['profile']['tmp_name'];

	switch ($action) 
	{
		case 'insert':

		$sel=mysqli_query($con,"SELECT * FROM `admin` WHERE `a_email`='".$email."' ");
			$count=mysqli_num_rows($sel);
				if($count > 0)
				{
					foreach($_REQUEST as $key=>$val)
						{
							$_SESSION[$key]=$val;
							$_SESSION['alrdmsg']="Email is Exititng";
							header("location:index.php?page=admin_form");
						}	
				}
				else
				{
					move_uploaded_file($tmp_profile,'upload/admin/'.$profile);
					
					$insert="INSERT INTO `admin` (`a_name`,`a_email`,`a_password`,`a_profile`)VALUES('$name','$email','$password','$profile')";
					$qry=mysqli_query($con,$insert);
					if($qry)
					{
						echo "data is Inserted";
						header("location:index.php?page=admin_list");
					}
					else
					{
					echo "Data Is Not Inserted";
					}
				}
			break;
		case 'update':
					$update="UPDATE `admin` SET `a_name`='".$name."',`a_email`='".$email."',`a_password`='".$password."' WHERE `a_id`='".$admin_id."'  ";
					$qry=mysqli_query($con,$update);

					if($profile!='')
					{
						$sel=mysqli_query($con,"SELECT * FROM `admin` WHERE `a_id`='".$admin_id."'");
						$row_img=mysqli_fetch_array($sel);
						unlink('upload/admin/'.$row_img['profile']);
						move_uploaded_file($tmp_profile,'upload/admin/'.$profile);
						$img="UPDATE `admin` SET `a_profile`='".$profile."' WHERE `a_id`='".$admin_id."' ";
						$qry_img=mysqli_query($con,$img);
					}



					if($qry || $qry_img)
					{
						header("location:index.php?page=admin_list");
						//echo "Update okok";
					}else
					{
						echo "Update Not ";
					}
			break;
		case 'delete':
				$admin_id=$_REQUEST['admin_id'];
				echo "delete Code";
				$del="DELETE FROM `admin` WHERE `a_id` ='".$admin_id."'";

				$qry=mysqli_query($con,$del);
				if($qry)
				{
					echo "Delete Successfully";
					header("location:index.php?page=admin_list");
				}
				else
				{
					echo "Data Is not iS delete";
				}
			break;
		default:
				echo "Action Not Found";
			break;
	}

 ?>