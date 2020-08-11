 
<?php
include("../include/config.php");
    $state_id = $_GET['state_id'];

?>

<select name="city_id">
	<option>Select City</option>
	<?php
		
        $city=mysqli_query($con,"SELECT * FROM `city` WHERE `state_id` =15  ");
        while($row=mysqli_fetch_assoc($city)){
       ?>
	<option value="<?php echo $row['id']; ?>"><?php echo $row['city_name']; ?></option>
<?php } ?>
</select>