
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
						<center><b><h2>Product Details</h2></b></center>
						<br>
					 
							  <?php 
								include("../dbconn.php");
								
								//$id=$_REQUEST['id'];
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
							  <center>
							   <div class='col-sm-4'>
								
								<a href=""><img src="../Nursery/images/<?php echo $d; ?>"></a><br>
								<br><h2>RS.<b><?php echo $row['price']; ?></b></h2>
								Details--<br>
									Crop Name :<b><?php echo $row['name']; ?><br>
									Category  :<?php echo $row1['category_type']; ?></b><br>
								<b>quantity :</b><?php echo $row['quantity']; ?><br>
								<b>Soil :</b><?php echo $row['soil']; ?> <br>
								<b>Climate :</b><?php echo $row['climate']; ?>
								</center>
								
							
							  <?php
								
								
								}
							  ?>
						<br><br>
									<div class="shopping-cart-btn">
									<center><span class="">
									<a href="view-nursery.php" class="btn btn-warning outer-left-xs">Continue Shopping</a>
									</span>
								<a href="view-crop.php?id=<?php echo $row['id']; ?>" class="btn btn-danger outer-right">Back</a><br><br><br>
							</center>	</div>
				
								</div>	
				</div>
                        </div>
                    </div>
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


