<?php
	include("../dbconn.php");
								
	
	
$del="delete from crops where id='$_REQUEST[rid]'";
mysqli_query($con,$del);
header("location:view-crop.php");

?>