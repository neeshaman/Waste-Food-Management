<?php

	$f_id=$_REQUEST['feedback_id'];
	$name=$_REQUEST['name'];
	$subject=$_REQUEST['subject'];
    $date=$_REQUEST['date'];
	$message=$_REQUEST['message'];

				
				$del="DELETE FROM `feedback` WHERE `f_id` ='".$f_id."'";

				$qry=mysqli_query($con,$del);
				if($qry)
				{
					echo "<script> var ans=alert('FeedBack Deleted!!')
				                if(!ans)
				                	window.location='index.php?page=feedback_list'</script>";		
					
				}else
				{
					echo "Data Is not iS delete";
				}
		


 ?>