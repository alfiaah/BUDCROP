<?php
	include("../dbconn.php");
								
	
	
$del="delete from irrigation where id='$_REQUEST[rid]'";
mysqli_query($con,$del);
header("location:view-irrigation.php");

?>