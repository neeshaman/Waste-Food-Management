<?php

	$contact_id=$_REQUEST['contact_id'];
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$phone=$_REQUEST['phone'];
	$subject=$_REQUEST['subject'];
	$message=$_REQUEST['message'];
    $date=$_REQUEST['date'];
	$status=$_REQUEST['status'];

				
				$del="DELETE FROM `contact` WHERE `contact_id` ='".$contact_id."'";

				$qry=mysqli_query($con,$del);
				if($qry)
				{header("location:index.php?page=contact_list");
					/*echo "<script> var ans=alert('Contact Deleted!!')
				              if(!ans)
				            	window.location='index.php?page=contact_list'</script>";*/
				}else
				{
					echo "Data Is not iS delete";
				}
		
	

 ?>