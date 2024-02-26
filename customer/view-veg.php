
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
                    
					<div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
						<br><br>
							
                            <table class="table" border="1">
							  <tr>
								<th>#</th>
								<th>Fruit Name</th>
								<th>Type</th>
								<th>Nursery name</th>
								<th>Quantity</th>
								<th>Price</th>
								<th>Images</th>
								<th></th>
								<th></th>
							  </tr>
							  
							  <?php 
								include("../dbconn.php");
								
								$sel="SELECT * FROM `fruits``";
								$res=mysqli_query($con,$sel);
								$i=1;
								while($row=mysqli_fetch_array($res))
								{
							  ?>
							  
							  <tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['type']; ?></td>
								<td><?php echo $row['quantity']; ?></td>
								<td><?php echo $row['price']; ?></td>
								<td><?php echo $row['images']; ?></td>
								<td><a href="#" class="btn btn-danger success">view images</a></td>
								<td><a href="cust_approve.php" class="btn btn-danger float-right">Add to cart</a></td>
								
							  
                                <td><a href="delete.php?rid=<?php echo  $row['id'];?>" class="btn btn-danger float-right">Buy</a></td>			
								</tr>
							  
							  <?php
								$i++;
								}
							  ?>
							  
							</table>
							
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