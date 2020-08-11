<?php
	   $email=$_REQUEST['email'];
	   $password=$_REQUEST['password'];
       $type=$_REQUEST['type'];
	if(isset($_REQUEST['login']))
	{
		/*ngo login*/
		if(isset($type) && $type=='ngo')
		{
			//echo "ngo";
	       $sel="SELECT * FROM `ngo` WHERE `n_email`='".$email."' AND `n_password`='".$password."' ";
    	    $qry=mysqli_query($con,$sel);
			$count=mysqli_num_rows($qry);
			echo $count;
			if($count > 0)
			{   
				$row=mysqli_fetch_array($qry);
				$_SESSION['ngo_id']=$row['n_id'];
				echo "<script> var ans=alert('login Successfully!!')
                if(!ans)
                	window.location='index.php'</script>";
			}else
			{
                echo "<script> var ans=alert('Email and Password incorrect!!')
                if(!ans)
                	window.location='index.php?page=login'</script>";
			}
		}	
		/*hotel login*/
		else if(isset($type) && $type=='hotel')
		{  
	       echo $sel="SELECT * FROM `hotel` WHERE `h_email`='".$email."' AND `h_password`='".$password."' ";
    	    $qry=mysqli_query($con,$sel);
			$count=mysqli_num_rows($qry);
			echo $count;
			if($count > 0)
			{
				$row=mysqli_fetch_array($qry);
				$_SESSION['hotel_id']=$row['h_id'];
			    echo "<script> var ans=alert('Login Successfullllly!!')
                if(!ans)
                	window.location='index.php'</script>";
			}
			else
			{
				echo "<script> var ans=alert('Email and Password incorrect!!')
                if(!ans)
                	window.location='index.php?page=login'</script>";
			}

		}
		else
		{
			echo "not selected";
		}
	}
	else{
		echo "is not set";
	}
 ?>