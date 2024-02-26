
<!DOCTYPE html>
<html lang="en">


<!-- body -->

<body class="main-layout ">
    <!-- loader  -->
    <!-- end loader -->
    <!-- header -->
	<?php

	session_start();
	include("header.php");
	
	?>
 <br><br><br><br>
	
	
	<h2><b><center>Payment Method</center></b></h2>
	
		<center> <form method="POST">
         
          
		<br><br><select name='paymethod' required>
											<option value=''>payment method</option>
											<option  disabled>Cash On Delivery</option>
											<option> Debit Card</option>
											<option>Credit Card</option>   
										</select><br><center>
		
			
			<br><br><br>
			Card Holder Name :
				<input type="text" name="crd_name" required><br><br>
			Card Holder Number :
				<input type="number_format" name="crd_no" required><br><br>
			Expiration Date :	
				<input type="date" name="exp_date" required><br><br>
			
			<br>----------------------------------Billing Address-------------------------------------<br><br>
 
			Address  :
			<textarea type="textarea" name="addr" rows="7" cols="25" required></textarea><br><br>
			Location  :
				<input type="text" name="loc" required><br><br>
			Contact No :
			<input type="text" name="pno" required><br><br>
			
			<center><input type="submit" value="submit" name="submit" class="btn btn-success" ></a></center>
	  
	   </form>		
	</center>


	
	<?php 

	include("../dbconn.php");
	
	if(isset($_POST['submit']))
	{
		$paymethod=$_POST['paymethod'];
		$crd_name=$_POST['crd_name'];
		$crd_no=$_POST['crd_no'];
		$exp_date=$_POST['exp_date'];
		$cust_id=$_SESSION['cid'];
		$addr=$_POST['addr'];
		$loc=$_POST['loc'];
		$pno=$_POST['pno'];
		$crop_id=$_REQUEST['id'];
	
		$ins="insert into order_details(paymethod,crd_name,crd_no,exp_date,addr,loc,pno,cust_id,status,crop_id)
		values ('$paymethod','$crd_name','$crd_no','$exp_date','$addr','$loc','$pno','$cust_id','paid','$crop_id')";
	echo $ins;
		$res=mysqli_query($con,$ins);

		if($res)
		{

			echo "<script> 
					alert('insert successfully');
					window.location='order_history.php';
				  </script>";
		}
	}

	
	?>
	 </div>
                <div id="map">
                </div>

	

    <!-- footer -->
	<?php
	
	include("footer.php");
	?>

    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
    <!-- end google map js -->
</body>

</html>