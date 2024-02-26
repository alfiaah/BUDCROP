<?php
	include("../dbconn.php");
								
	
	
$del="delete from category where id='$_REQUEST[rid]'";
mysqli_query($con,$del);
header("location:view-category.php");

?>