<?php 
	$hotel_id=$_SESSION['hotel_id'];
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$address=$_REQUEST['address'];
	$password=$_REQUEST['password'];
	$phone=$_REQUEST['phone'];
	$city=$_REQUEST['city'];
	$profile=$_FILES['profile']['name'];
	$tmp_profile=$_FILES['profile']['tmp_name'];

	$update="UPDATE `hotel` SET `h_name`='".$name."',`h_email`='".$email."',`h_password`='".$password."',`h_address`='".$address."',`h_city`='".$city."',`h_phoneNo`='".$phone."' WHERE `h_id`='".$hotel_id."'  ";
					$qry=mysqli_query($con,$update);

					if($profile!='')
					{
						$sel=mysqli_query($con,"SELECT * FROM `hotel` WHERE `h_id`='".$hotel_id."'");
						$row_img=mysqli_fetch_array($sel);
						unlink('admin/upload/hotel/'.$row_img['profile']);
						move_uploaded_file($tmp_profile,'admin/upload/hotel/'.$profile);
						$img="UPDATE `hotel` SET `h_profile`='".$profile."' WHERE `h_id`='".$hotel_id."' ";
						$qry_img=mysqli_query($con,$img);
					}
					if($qry || $qry_img)
					{
						echo "<script> var ans=alert('Profile Updated!!')
                		if(!ans)
                  			window.location='index.php?page=hotel_profile'</script>";
						// echo "Update okok";
					}else
					{
						echo "Update Not ";
					}
?>