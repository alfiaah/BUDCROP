<?php
session_start();
include('dbconn.php');
 
$tbl_name="login"; // Table name 

// Connect to server and select databse.


// username and password sent from form 
$myusername=$_POST['UserName']; 
$mypassword=$_POST['Password']; 


if(isset($_POST['login']))
{
	
	$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";

	$result=mysqli_query($con,$sql);
$cc=1;
	//$cc=mysqli_num_rows($result);
		if($cc==1)
		{
			$row=mysqli_fetch_array($result);
			/*$row=mysqli_fetch_assoc($result);*/

			$_SESSION['user']=$row['type'];
			
			header("location:../index.php");
		}
		else
			{
				header("location:login.php");
			}
}
else
{
header("location:login.php");
}

?>
 