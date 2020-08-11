<?php

	if(isset($_REQUEST['login']))
	{
		//echo "Login";
		$email=$_REQUEST['email'];
		$password=$_REQUEST['password'];
		$sel="SELECT * FROM `admin` WHERE `a_email`='".$email."' AND `a_password`='".$password."' ";
		//echo $sel;
		$qry=mysqli_query($con,$sel);
		$count=mysqli_num_rows($qry); 
		//echo $count;
		if($count > 0)
		{
			$row=mysqli_fetch_array($qry);
			$_SESSION['a_id']=$row['a_id'];
			header("location:index.php");
			//echo "login Successfullllly";
		}
		else
		{
			echo "<script> var ans=alert('Email and Password incorrect!!')
                if(!ans)
                	window.location='login.php'</script>";
		}
	}else
	{
		echo "is not set";
	}
?>