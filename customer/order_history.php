
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
	 <div class="container-fluid padddd">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 padddd">
            <div class="map_section">
                <div class="container">
                    <br><br><br>
					
                     <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
						<br>
						<center><b><h2>ORDER HISTORY</h2></b></center>
						<br>
												<table>
							<tr>
									<div class="shopping-cart-btn">
									<span class="">
									<a href="view-nursery.php" class="btn btn-warning outer-left-xs">Continue Shopping</a>
									</span>
									</div>
								</tr>
						</table>
						<br><br><br>
						<table border="2" height="50" width="1200">>
						<tr>
							<th><center>Image</center></th>
							<th>Product Name</th>
							<th>Quantity</th>
							<th>Total Price</th>
							<!--<th><center>Shipping Charge</center></th>--->
							<th><center>payment method</center></th>
							<th><center>Order Status</center></th>
						</tr>
						
							  
							  <?php 
								include("../dbconn.php");
								
								//$id=$_REQUEST['id'];
								
								$sel="select * from order_details where cust_id='$_SESSION[cid]'";
								//echo $sel;
								$res=mysqli_query($con,$sel);
								while($row=mysqli_fetch_array($res))
								{
									$sel1="SELECT * FROM `crops` where id='$row[crop_id]'";
									//echo $sel1;
									$res1=mysqli_query($con,$sel1);
									$row1=mysqli_fetch_array($res1);
									$d=$row1['file'];
							  ?>
							  
							  <!-- <div class='col-sm-6'>-->
								<tr>
							<td><a href="product_details.php"><img src="../Nursery/images/<?php echo $d; ?>" height="200" width="150"></a></td>
								<td><?php echo $row1['name']; ?></td>
								<td><?php echo $row1['quantity']; ?></td>
								<td><?php echo $row1['price'];?></td>
								<td><?php echo $row['paymethod'];?></td>
								<td><?php echo $row['status'];?></td>


							</tr>
							
							  <?php
								
								
								}
							  ?>
						</table>
						<br><br>

						<br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php 
			
	
	?>

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


