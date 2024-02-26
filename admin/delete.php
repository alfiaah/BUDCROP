
	<?php
	include("dbconn.php");
	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$email_id=$_POST['email_id'];
		$place=$_POST['place'];
		$address=$_POST['address'];
		$contact_no=$_POST['contact_no'];
		$ins="insert into customer(username,password,email_id,place,address,contact_no) values ('$username','$password','$email_id','$place','$address','$contact_no')";
		mysqli_query($con,$ins);
		
	}

$del="delete from customer where id='$_REQUEST[rid]'";
mysqli_query($con,$del);
header("location:view-customer.php");

?>