<?php
	
	$name=$_REQUEST['name'];
	$address=$_REQUEST['address'];
	$phone=$_REQUEST['phone'];
	$workarea=@$_REQUEST['workarea'];
	$city=@$_REQUEST['city'];
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	
	$profile=$_FILES['profile']['name'];
	$tmp_profile=$_FILES['profile']['tmp_name'];
   
    
		$sel=mysqli_query($con,"SELECT * FROM `ngo` WHERE `n_email`='".$email."' ");
			$count=mysqli_num_rows($sel);
				if($count > 0)
				{
					foreach($_REQUEST as $key=>$val)
						{
							$_SESSION[$key]=$val;
							$_SESSION['alrdmsg']="Email is Already Existing";
							header("location:index.php?page=registration_ngo");
						}
						
				}
				else
				{
				 	 move_uploaded_file($tmp_profile,'admin/upload/ngo/'.$profile);
					$insert="INSERT INTO `ngo` (`n_name`,`n_address`,`n_city`,`n_workarea`,`n_email`,`n_phoneNo`,`n_password`,`n_profile`)VALUES('$name','$address','$city','$workarea','$email','$phone','$password','$profile')";
						$qry=mysqli_query($con,$insert);
							if($qry)
							{
								echo "data is Inserted";
								//header("location:login.php");
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