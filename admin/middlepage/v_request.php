<?php
		/*$sel="SELECT * FROM `ngo`";
        $qry=mysqli_query($con,$sel);
        $row=mysqli_fetch_array($qry);*/
  	$v_id=$_REQUEST['v_id'];
  	$update="UPDATE `request` SET `ngo_id`='".$_REQUEST['ngo_id']."',`status`='accept' WHERE `v_id`='$v_id'";
  	$qry_req=mysqli_query($con,$update);
  	if($qry_req){
  		echo "<script> var ans=alert('Donation Request Sent!!')
		                if(!ans)
		                	window.location='index.php?page=visitor_list'</script>";
  	}
  	else{
  		echo "Not send";
  	}
?>