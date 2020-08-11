<?php
	$name=$_REQUEST['name'];
	$address=$_REQUEST['address'];
	$phone=$_REQUEST['phone'];
	$city=$_REQUEST['city_id'];
	$email=$_REQUEST['email'];
    $foodqty=$_REQUEST['foodqty'];
    $foodname=$_REQUEST['foodname'];


         $insert="INSERT INTO `visitor` (`v_name`,`v_phoneNo`,`v_address`,`v_city`,`v_email`,`v_foodqty`,`v_foodname`)VALUES('$name','$phone','$address','$city','$email','$foodqty','$foodname')";
				$qry=mysqli_query($con,$insert);
				$row=mysqli_fetch_assoc($qry);
					if($qry)
					{ 
						$v_id=mysqli_insert_id($con);
					
					echo $insert_req="INSERT INTO `request`(`v_id`,`food_name`,`food_qty`,`status`)VALUES('$v_id','$foodname','$foodqty','pending')";
						$qry_req=mysqli_query($con,$insert_req);

					  echo "<script> var ans=alert('Donation Request Sent!!')
		                if(!ans)
		                	window.location='index.php'</script>";
					}
					else
					{
					//echo "Data Is Not Inserted";
						echo "<script> var ans=alert('Donation Request Not Sent!!')
		                if(!ans)
		                	window.location='index.php?page=visitor'</script>";
					}
?>