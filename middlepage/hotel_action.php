<?php
	$name=$_REQUEST['name'];
	$address=$_REQUEST['address'];
	$phone=$_REQUEST['phone'];
	$city=$_REQUEST['city'];
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	@$status=$_REQUEST['status'];
	$profile=$_FILES['profile']['name'];
	$tmp_profile=$_FILES['profile']['tmp_name'];

		$sel=mysqli_query($con,"SELECT * FROM `hotel` WHERE `h_email`='".$email."' ");
			$count=mysqli_num_rows($sel);
				if($count > 0)
				{
					foreach($_REQUEST as $key=>$val)
						{
							$_SESSION[$key]=$val;
							$_SESSION['alrdmsg']="Email is Already Existing";
							header("location:index.php?page=registration_hotel");
						}						
				}
				else
				{
					 move_uploaded_file($tmp_profile,'admin/upload/hotel/'.$profile);
           			 $insert="INSERT INTO `hotel` (`h_name`,`h_address`,`h_city`,`h_phoneNo`,`h_email`,`h_password`,`h_profile`)VALUES('$name','$address','$city','$phone','$email','$password','$profile')";
						$qry=mysqli_query($con,$insert);
							if($qry)
							{
								//echo "data is Inserted";
								echo "<script> var ans=alert('Registration Successfull!!')
				                if(!ans)
				                	window.location='index.php?page=login'</script>";			
							}
							else
							{
							echo "Data Is Not Inserted";
							}
				}
?>