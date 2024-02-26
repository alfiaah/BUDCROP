<?php
	include("../dbconn.php");
								
	
	
$del="delete from fertilizer where id='$_REQUEST[rid]'";
mysqli_query($con,$del);
header("location:view-fertilizer.php");

?>