<?php
	include("../dbconn.php");
								
	
	
$del="delete from nursery where id='$_REQUEST[rid]'";
mysqli_query($con,$del);
header("location:view-nursery.php");

?>