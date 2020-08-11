<?php
   
   $name=$_REQUEST['name'];
   $n_id=$_REQUEST['n_id'];
   $subject=$_REQUEST['subject'];
   $msg=$_REQUEST['message'];
 		
 			$insert="INSERT INTO `feedback` (`n_id`,`f_name`,`f_subject`,`f_message`)VALUES('$n_id','$name','$subject','$msg')";
				 $qry=mysqli_query($con,$insert);
					if($qry)
					{
						//echo "data is Inserted";
						echo "<script> var ans=alert('Feedback Sent!!')
		                if(!ans)
		                	window.location='index.php'</script>";
					
					}
					else
					{
						echo "<script> var ans=alert('Message Not Sent!!')
		                if(!ans)
		                	window.location='index.php?page=feedback.php'</script>";
						//header("location:index.php?page=contact");
						//echo "Data Is Not Inserted";
					}
?>