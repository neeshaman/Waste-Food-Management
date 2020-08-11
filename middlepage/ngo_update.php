<?php 
	$ngo_id=$_SESSION['ngo_id'];
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$address=$_REQUEST['address'];
	$workarea=$_REQUEST['workarea'];
	$password=$_REQUEST['password'];
	$phone=$_REQUEST['phone'];
	$city=$_REQUEST['city'];
	$profile=$_FILES['profile']['name'];
	$tmp_profile=$_FILES['profile']['tmp_name'];

$update="UPDATE `ngo` SET `n_name`='".$name."',`n_email`='".$email."',`n_password`='".$password."',`n_address`='".$address."',`n_city`='".$city."',`n_phoneNo`='".$phone."',`n_workarea`='".$workarea."' WHERE `n_id`='".$ngo_id."'  ";
					$qry=mysqli_query($con,$update);

					if($profile!='')
					{
						$sel=mysqli_query($con,"SELECT * FROM `ngo` WHERE `n_id`='".$ngo_id."'");
						$row_img=mysqli_fetch_array($sel);
						unlink('admin/upload/ngo/'.$row_img['profile']);
						move_uploaded_file($tmp_profile,'admin/upload/ngo/'.$profile);
						$img="UPDATE `ngo` SET `n_profile`='".$profile."' WHERE `n_id`='".$ngo_id."' ";
						$qry_img=mysqli_query($con,$img);
					}
					if($qry || $qry_img)
					{
							echo "<script> var ans=alert('Profile Updated!!')
			                if(!ans)
			                  window.location='index.php?page=ngo_profile'</script>";
						// echo "Update okok";
					}else
					{
						echo "Update Not ";
					}
?>