<?php
session_start();
	include("dbconn.php");
	$email_id=$_POST['email_id']; 
	$password=$_POST['password'];
		if($email_id=="admin@gmail.com" && $password=="admin")
		{
	
			$_SESSION['user'] ="admin";
			$_SESSION['username'] ="";
			header("location:admin/dashboard.php");
		}
		elseif($_POST['type']=="customer")
		{
			$sel="SELECT * FROM customer WHERE email_id='".$_POST['email_id']."' and password='".$_POST['password']."' and status='approved'";
			//echo $sel;
			$result = mysqli_query($con,$sel) or die(mysql_error());
			$rows = mysqli_num_rows($result);
			$row=mysqli_fetch_array($result);
			if($rows==1)
			{
				$_SESSION['cid']=$row['id'];
				$_SESSION['usertype']="customer";
            
				header("Location:customer/index.php");
			}
			else
			{
				header("Location:login.php");
			}
		}
		elseif($_POST['type']=="nursery")
		{
			$sel="SELECT * FROM nursery WHERE email='".$_POST['email_id']."' and password='".$_POST['password']."'";
			echo $sel;
			$result = mysqli_query($con,$sel) or die(mysql_error());
			$rows = mysqli_num_rows($result);
			$row=mysqli_fetch_array($result);
						echo $row['id'];
					$_SESSION['nid']=$row['id'];

				if($rows==1)
				{
                   // $_SESSION['email']=$_POST['email'];
					$_SESSION['usertype']="nursery";
            // Redirect user to index.php
				header("Location:nursery/dashboard.php");
				}
				else
				{
					header("Location:login.php");
				}
		
		}
?>		