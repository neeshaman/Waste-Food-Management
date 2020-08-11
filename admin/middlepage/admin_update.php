<?php 
$admin_id=$_SESSION['a_id'];
    $name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	$profile=$_FILES['profile']['name'];
	$tmp_profile=$_FILES['profile']['tmp_name'];

echo $update="UPDATE `admin` SET `a_name`='".$name."',`a_email`='".$email."',`a_password`='".$password."' WHERE `a_id`='".$admin_id."'  ";
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
						echo "<script> var ans=alert('Profile Updated!!')
                		if(!ans)
                  			window.location='index.php?page=admin_list'</script>";
					//echo "Update okok";
					}else
					{
						echo "Update Not ";
					}
?>