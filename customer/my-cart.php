
<!DOCTYPE html>
<html lang="en">


<!-- body -->

<body class="main-layout ">
    <!-- loader  -->
    <!-- end loader -->
    <!-- header -->
	<?php
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
						<center><b><h2>BUD CROP Cart Details</h2></b></center>
						<br>
						<table border="2" height="50" width="1200">
						<tr>
							<th><center>Image</center></th>
							<th>Product Name</th>
							<th>Quantity</th>
							<th>Price Per Unit</th>
							<!--<th><center>Shipping Charge</center></th>-->
							<th><center>Total</center></th>
						</tr>
						
							  
							  <?php 
								include("../dbconn.php");
								
								$id=$_REQUEST['id'];
								$sel="select * from crops where id='$_REQUEST[id]'";
								$res=mysqli_query($con,$sel);
								$i=1;
								while($row=mysqli_fetch_array($res))
								{
									$sel1="select * from category where id='$row[category]'";
								$res1=mysqli_query($con,$sel1);
								$row1=mysqli_fetch_array($res1);
								$d=$row['file'];
								$price = $row['price'];
								$quantity = $row['quantity'];
								
								$total = $price * $quantity;

							  ?>
							  
							  <!-- <div class='col-sm-6'>-->
								<tr>
								<td><center><a href="product_details.php"><img src="../Nursery/images/<?php echo $d; ?>" height="200" width="150"></a></center></td>
								<td><center><?php echo $row['name']; ?></center></td>
								<td><center><?php echo $row['quantity']; ?></center></td>
										
										
								<td><center><?php echo $row['price'];?></center></td>
								<td><center><?php echo $total;?></center></td>
								</tr>
							
							  <?php
								
								
								}
							  ?>
						</table>
						<br><br>
						<table>
							<tr>
									<div class="shopping-cart-btn">
									<span class="">
									<a href="view-nursery.php" class="btn btn-warning outer-left-xs">Continue Shopping</a>
									<!--<a href="update_cart.php"><input type="submit" name="submit" value="Delete" class="btn btn-primary pull-right outer-right-xs"></a>
									--></span>
									</div>
								</tr>
						</table>
						<br>
						
		<table>


		</table>
				
					<br><br>
	</div>	
				</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	



	
	<center>
							<div class="cart-grand-total">
							<center>
							<h3><b>Grand Total</b></h3><span class="inner-left-md"><?php echo $total;?></span>
							</div>
						
						<div class="cart-checkout-btn">
							<a href="payment.php?id=<?php echo $id;  ?>"><button type="submit" name="ordersubmit" class="btn btn-danger">PROCCED TO CHEKOUT</button></a>
						
						</div>
					</center>
	

					  
					
	
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


