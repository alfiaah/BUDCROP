
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
                    
					<div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
						<br><br><br><br>
							<a href="add-crop.php" class="btn btn-danger float-right">ADD</a>
							
						<br><br>		
                            <table class="table" border="1">
							  <tr>
								<th>#</th>
								<th>Name</th>
								<th>Category</th>
								<th>Quantity</th>
								<th>Price</th>
								<th>Soil</th>
								<th>Climate</th>
								<th>Image</th>
								<th></th>
								
							  </tr>
							  
							  <?php 
								include("../dbconn.php");
								
								$sel="SELECT * FROM `crops` where nursery_id='$_SESSION[nid]'";
								//echo $sel;
								$res=mysqli_query($con,$sel);
								$i=1;
								while($row=mysqli_fetch_array($res))
								{
									$sel1="SELECT * FROM `category` where id='$row[category]'";
								//echo $sel;
								$res1=mysqli_query($con,$sel1);
									$row1=mysqli_fetch_array($res1)
							  ?>
							  
							  <tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row1['category_type']; ?></td>
								<td><?php echo $row['quantity']; ?></td>
								<td><?php echo $row['price']; ?></td>
								<td><?php echo $row['soil']; ?></td>
								<td><?php echo $row['climate']; ?></td>
								<td><?php echo $row['file']; ?></td>
								
								
								
								<td><a href="update_crop.php?rid=<?php echo  $row['id'];?>" class="btn btn-success float-right">Edit</a><br><br>
								
                                <a href="delete_crop.php?rid=<?php echo  $row['id'];?>" class="btn btn-danger float-right">Delete</a></td>			
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