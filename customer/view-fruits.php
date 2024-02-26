


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
								
								$sel="SELECT * FROM crops where id='($row["id"])',name='($row["name"])',category='($row["category"])',price='($row["price"])',soil='($row["soil"])';
					
								//$sql = "SELECT * FROM fruits where category_id = '{$row["id"]}'"; 
								$res=mysqli_query($con,$sel);
								$i=1;
								while($row=mysqli_fetch_array($res))
								{
							  ?>
							  
							 <div class='col-sm-4'>
								
								<img src="images/bb.jpg">
								<?php echo $i; ?>
								
								<?php echo $row['pname']; ?>
								<?php echo $row['category']; ?>
								<?php echo $row['nursery_id']; ?>
								<?php echo $row['quantity']; ?>
								<?php echo $row['price']; ?>
								
								
								<div class="form-inline">		
								<div class='col-sm-6'>
								<a href="" class="btn btn-success">BUY NOW</a>
								</div>
								<!--<div class='col-sm-4'>
								<a href="my-cart.php" class="btn btn-danger">Add to cart</a>
								</div>-->
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