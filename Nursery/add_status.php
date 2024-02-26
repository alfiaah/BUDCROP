<html>
<body>
<table>
<tr>
<td><select name="status">
										<option value="">Completed</option>
										<option value="">incompleted</option>
							</select></td>	
							<td> <input type="submit" name="submit" value="submit"></td>		
</tr></table>

<?php 
	
	include("../dbconn.php");
	
	if(isset($_POST['submit']))
	{
		$status=$_POST['status'];
		
	
		$ins="insert into payment(status) values ('$status')";
		
		$res=mysqli_query($con,$ins);
	
		if($res)
		{
			echo "<script> 
					alert('insert successfully');
					window.location='view_payment.php';
				  </script>";
		}
	}
	
	
	?>
	
	</body>
	</html>