
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
					
                        <div class="form-inline">
							  
							  <?php 
								include("../dbconn.php");
								
							
								//echo $sel;
								$sel="select * from crops where nursery_id='$_REQUEST[id]'";
								$res=mysqli_query($con,$sel);
								$i=1;
								while($row=mysqli_fetch_array($res))
								{
									$sel1="select * from category where id='$row[category]'";
								$res1=mysqli_query($con,$sel1);
								$row1=mysqli_fetch_array($res1);
								$d=$row['file'];
							  ?>
							   <div class='col-sm-4'>
								
								<a href="product_details.php?id=<?php echo $row['id']; ?>"><img src="../Nursery/images/<?php echo $d; ?>"></a>
								<h2>RS.<b><?php echo $row['price']; ?></b></h2>
								<b><?php echo $row['name']; ?>-
								<?php echo $row1['category_type']; ?></b>
							-<b>quantity :</b><?php echo $row['quantity']; ?>
							
								<br>
							
								
								
									
								
								<div class='col-sm-6'>
								
								<a href="my-cart.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Add to cart</a><br><br><br>
								</div>
							
								</div>
							 
							  <?php
								$i++;
								
								}
							  ?>
						
                        </div>
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


