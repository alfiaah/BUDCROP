
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
							<br><br><br><br>
							<a href="add-nursery.php" class="btn btn-danger float-right">ADD</a>
							<br><br>
                            <table class="table">
							  <tr>
								<th>#</th>
								<th>Nursery Name</th>
								<th>Address</th>
								<th>Location</th>
								<th>Phone</th>
								<th>Email</th>
								<th>Password</th>
								<th></th>
							  </tr>
							  
							  <?php 
								include("../dbconn.php");
								
								$sel="SELECT * FROM nursery";
								$res=mysqli_query($con,$sel);
								$i=1;
								while($row=mysqli_fetch_array($res))
								{
							  ?>
							  
							  <tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['address']; ?></td>
								<td><?php echo $row['location']; ?></td>
								<td><?php echo $row['phone']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['password']; ?></td>
								<td><a href="delete_nursery.php?rid=<?php echo  $row['id'];?>" class="btn btn-danger">Delete</a></td>			
								
							  </tr>
							  
							  <?php
								$i++;
								}
							  ?>
							  <?php
							  
							  
							  
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